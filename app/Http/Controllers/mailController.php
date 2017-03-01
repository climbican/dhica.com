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



class mailController extends Controller{

    private function prefix(){
        //return 'http://localhost/dhica.com/public/';  //dev
        return 'https://dhica.com/dhica.com/public/'; //production
    }

    private function page_active(){
        return $active = ['home'=>'', 'about'=>'', 'services'=>'', 'guarantee'=>'', 'financing'=>'', 'windows'=>'', 'patio-doors'=>'', 'solar'=>'', 'blog'=>'', 'contact'=>''];
    }

    public function sendTheEmail(Request $request){

        $this->validate($request,['name'=>'required|max:255',
            'email'=>'required|max:255',
            'g-recaptcha-response' => 'required|captcha',
            'message'=>'required']);

        $contact = $request->all();

         $name = $contact['name'];
        $email = $contact['email'];
        $subject = 'DHICA CONTACT PAGE MESSAGE'."\n";
        $contact['subject'] == '' ? '' : $contact['subject']."\n";
        $phone = $contact['phone'] == '' ? '' : 'Phone Number: '.$contact['phone'];

        $mail_body = 'This email is from '.$name."\n".$phone."\n".'Email: '.$email."\n".
        $contact['subject'].
        $contact['message'];

        // send email
        $recipient = "kelly@dhica.com"; //recipient
		//testing
		//$recipient = "michael@ledgedog.com";


        $header = "From: ". $name . " <" . $email . ">\r\n"; //optional headerfields

        if( mail($recipient, $subject, $mail_body, $header) ){
            $res = 'Your email was sent Successfully';
        }

        return redirect('contactThankYou')->with('name',$name);
    }

    public function getThankYou(){
        $name = session('name');
        $active = MailController::page_active();
        $active['contact'] = 'class="active"';
        $page_title = 'DHICA &#124; Contact ';
        $meta_description = 'Thank you for contacting us at Distinctive Home Improvements San Diegos most trusted.';
        $canonical = url('contact');

        return view('emails.emailConfirm', compact('name', 'pre','active', 'page_title', 'meta_description', 'canonical'));
    }

}