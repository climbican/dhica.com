<?php
/**
 * Name
 * Description:
 * @author Michael Rumack
 * User: climbican
 * Date: 2/5/16
 * Time: 2:35 PM
 * Last Mod:
 * Notes:
 */

namespace app\Http\Controllers;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use app\Http\Controllers\OAuthToken;

include_once('OAuth.php');

class YelpController extends Controller{
    var $CONSUMER_KEY = 'ItnLqyga9U_77HFgTTIvjg';
    var $CONSUMER_SECRET = 'zOY2FOpVGTBYJCVpI9iWhFT5mrU';
    var $TOKEN = '3r3MrVQbA11LJNMMLWOrpUDeLJLVydaA';
    var $TOKEN_SECRET = 'DG3-tP-YeLpd0xW-XwVrjP_4ym8';
    
    var $API_HOST = 'api.yelp.com';
    var $DEFAULT_TERM = '';
    var $DEFAULT_LOCATION = '';
    var $SEARCH_LIMIT = 20;
    var $SEARCH_PATH = '/v2/search/';
    var $BUSINESS_PATH = '/v2/business/';
    
    function __construct(){
        $longopts  = array(
            "term::",
            "location::",
        );

        $options = getopt("", $longopts);

        $term = $options['term'] ?: '';
        $location = $options['location'] ?: '';
    }

    /**
     * Makes a request to the Yelp API and returns the response
     *
     * @param    $host    The domain host of the API
     * @param    $path    The path of the APi after the domain
     * @return   The JSON response from the request
     */
     function request($host, $path) {
        $unsigned_url = "https://" . $host . $path;

        // Token object built using the OAuth library
        $token = new \OAuthToken($this->TOKEN, $this->TOKEN_SECRET);

        // Consumer object built using the OAuth library
        $consumer = new \OAuthConsumer($this->CONSUMER_KEY, $this->CONSUMER_SECRET);

        // Yelp uses HMAC SHA1 encoding
        $signature_method = new \OAuthSignatureMethod_HMAC_SHA1();

        $oauthrequest = \OAuthRequest::from_consumer_and_token(
            $consumer,
            $token,
            'GET',
            $unsigned_url
        );

        // Sign the request
        $oauthrequest->sign_request($signature_method, $consumer, $token);

        // Get the signed URL
        $signed_url = $oauthrequest->to_url();

        // Send Yelp API Call
        try {
            $ch = curl_init($signed_url);
            $e = [];

            if (FALSE === $ch)throw new \Exception('Failed to initialize');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $data = curl_exec($ch);

            if (FALSE === $data){
                if(class_exists('Exception')){
                    $e = new \Exception(curl_error($ch), curl_errno($ch));
                }
                else{
                    $e = 'there was an error';
                }
            }

            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 != $http_status && function_exists('Exception'))$e = new \Exception($data, $http_status);

            curl_close($ch);
        } catch(Exception $e) {
            trigger_error(sprintf(
                'Curl failed with error #%d: %s',
                $e->getCode(), $e->getMessage()),
                E_USER_ERROR);
        }

        return $data;
    }

    /**
     * Query the Search API by a search term and location
     *
     * @param    $term        The search term passed to the API
     * @param    $location    The search location passed to the API
     * @return   The JSON response from the request
     */
     function search($term, $location) {
        $url_params = array();

        $url_paramsterm = $term ?: $this->DEFAULT_TERM;
        $url_paramslocation = $location?: $this->DEFAULT_LOCATION;
        $url_paramslimit = $this->SEARCH_LIMIT;
        $search_path = $this->SEARCH_PATH . "?" . http_build_query($url_params);

        return request($this->API_HOST, $search_path);
    }

    /**
     * Query the Business API by business_id
     *
     * @param    $business_id    The ID of the business to query
     * @return   The JSON response from the request
     */
     function get_business($business_id) {
        $business_path = $this->BUSINESS_PATH . urlencode($business_id);

        return $this->request($this->API_HOST, $business_path);
    }

    /**
     * Queries the API by the input values from the user
     *
     * @param    $term        The search term to query
     * @param    $location    The location of the business to query
     */
     function query_api($term, $location) {
        $response = json_decode(search($term, $location));
        $business_id = $response->businesses[0]->id;

        print sprintf(
            "%d businesses found, querying business info for the top result \"%s\"\n\n",
            count($response->businesses),
            $business_id
        );

        $response = get_business($business_id);

        print sprintf("Result for business \"%s\" found:\n", $business_id);
        print "$response\n";
    }
}