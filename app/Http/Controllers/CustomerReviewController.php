<?php
/**
 * Name
 * Description: Customer Reivew Controller for automatically adding reviews to the site
 * @author Michael Rumack
 * User: climbican
 * Date: 10/12/16
 * Time: 8:30 PM
 * Last Mod:
 * Notes:
 */

namespace app\Http\Controllers;

use App\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CustomerReviewController extends Controller{

    public function __construct(){
        //this does nothing
        ///it will not need authentication, it will use a token to validate that it came from an admin
    }

    private function page_active(){
        return $active = ['home'=>'', 'about'=>'', 'services'=>'', 'guarantee'=>'', 'financing'=>'', 'windows'=>'', 'patio-doors'=>'', 'solar'=>'', 'blog'=>'', 'contact'=>''];
    }

    /**
     * @desc This will save the review left by the customer
     *
     * @param Request $request
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function save(Request $request, $token){
        //$review = DB::table('reviews')->where('token', $token);
        //need to catch invalid tokens and respond appropriately
        //INVALID TOKENS ARE ALREADY MANAGED ON THE ROUTING END,
        //THE SYSTEM WILL RESPOND WITH INVALID PAGE.
        //TODO:  the email section needs to be finished
        //$review_data = DB::table('reviews')->where('token', $token);

        Review::where('token', $token)->update([
            'reviewer_name'=>$request->input('reviewerName'),
            'stars'=>$request->input('stars'),
            'body_text'=>$request->input('bodyText'),
            'token'=>NULL,
            'last_update'=>time()
        ]);

        $active = CustomerReviewController::page_active();
        $active['contact'] = 'class="active"';
        $page_title = 'About &#124; Our company ethos &#38; experience ';
        $meta_description = 'With 25 years of experience we know how to make your home a better more efficient place.';
        $canonical = url('contact');
        $name = $request->input('reviewerName');

        /**
         * THIS IS STATICALLY SET TO BE SENT TO HECTOR
         * SHOULD LATER BE MOVED TO BE DYNAMICALLY SET
         *
         *
         *
        //$admin_token = bcrypt($review_data->id.$request->input('reviewerName').'H@ctorRam1r3z'.$review_data->create_dte);

        Review::where('id', $review_data->id)->update(['admin_token'=>$admin_token]);

        $header = "From: ".'DHICA system'."\r\n"; //optional headerfields
        $header .= "Reply-To: ". strip_tags('info@dhica.com') . "\r\n";
        //$header .= "CC: susan@example.com\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: text/html; charset=UTF-8\r\n";
        $recipient = 'climbican@gmail.com';
        $subject = 'Review from '.$request->input('reviewerName');
        $mail_body = 'Review from: '.$request->input('reviewerName')."\n".
        '<br>Reviewers Comments: '.$request->input('bodyText')."\n".
        '<br>Approval Link https://dhica.com/admin/approve/customer/review/email/'.$admin_token;

        if( mail($recipient, $subject, $mail_body, $header) ){
            $res = 'Your email was sent Successfully';
        }**/

        return view('pages.reviewer-thankyou', compact('name', 'active', 'page_title', 'meta_description', 'canonical'));
    }

    public function adminApproveReviewViaEmail($token){
       if($token !== ''){
           $query= 'SELECT COUNT(id) AS lineCount, reviewer_name, admin_token FROM reviews WHERE admin_token = "'.$token.'";';
           $c = DB::select($query);

           if($c[0]->lineCount != 1){
               //update row to make it active
               //email hector to let him know that the review is now live.
           }
       }
    }

    /**
     * @desc SHOWS THE CUSTOMER A FORM TO SUBMIT A REVIEW IF THERE IS A VALID TOKEN
     * IF NOT THEN THEY ARE REDIRECTED TO A PAGE THAT SHOWS THEM AN APPROPRIATE RESPONSE.
     *
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewReviewForm($token){
        //validate $token is correct first
        $active = CustomerReviewController::page_active();
        $active['about'] = 'class="active"';
        $page_title = 'About &#124; Our company ethos &#38; experience ';
        $meta_description = 'With 25 years of experience we know how to make your home a better more efficient place.';
        $canonical = url('');

        $query= 'SELECT COUNT(id) AS lineCount, reviewer_name, token FROM reviews WHERE token = "'.$token.'";';

        $c = DB::select($query);

        if($c[0]->lineCount != 1){
            $count =  $c[0]->lineCount;
            return view('pages.customer-review-invalid', compact('active', 'page_title', 'meta_description', 'canonical', 'count'));
        }

        $name = $c[0]->reviewer_name;
        $count = 0;

        return view('pages.customer-review', compact('validRequest', 'active', 'page_title', 'meta_description', 'canonical', 'name', 'token'));
    }
}