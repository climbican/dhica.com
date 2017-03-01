<?php
/**
 * Name
 * Description: Reivew Controller for manually adding reviews to the site from letters that people have written
 * @author Michael Rumack
 * User: climbican
 * Date: 6/22/16
 * Time: 1:30 PM
 * Last Mod:
 * Notes:
 */

namespace app\Http\Controllers;

use App\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ReviewController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $reviews = Review::orderBy('create_dte', 'desc')->paginate(10);

        $numRows = Review::count();
        $custBack = "background-color:rgba(118, 242,143, 0.1)";

        return view('admin.reviews', compact('reviews', 'numRows', 'custBack'));
        //return response()->json($blogs);
    }

    public function get($id){
        $reviews = Review::find($id);
        //return response()->json($review);
        return view('admin.reviews', compact('reviews'));
    }

    public function create(){
        return view('admin.review-create');
    }

    public function save(Request $request){
        //'reviewer_name', 'stars', 'body_text', 'create_dte', 'last_update', 'removed_dte'
        $this->validate($request,['reviewerName'=>'required|max:50',
            'stars'=>'required|Integer',
            'bodyText'=>'required']);

        $currentTime = time().'000';

        $review = $request->all();
        $review['reviewer_name'] = $review['reviewerName'];
        $review['stars'] = $review['stars'];
        $review['body_text'] = $review['bodyText'];

        $review['approved_on'] = $currentTime;
        $review['create_dte'] = $currentTime;
        $review['last_update'] = $currentTime;
        $review['removed_dte'] = $currentTime;

        Review::create($review);
        //will need  a proper response here
        //return response()->json($review);
        return redirect('admin/review/list');
    }

    public function delete($id){
        $review = Review::find($id);
        $review->delete();
        return redirect('admin/review/list');
    }

    /**
     *  ... //// ... CUSTOMER REVIEW FUNCTIONS ... //// ...
     */
    /**
     * @desc
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showInviteForm(){
        return view('admin.send-customer-review-invite');
    }

    public function sendInvite(Request $request){
        $currentTime = time();

        $this->validate($request,['custName'=>'required|min:3|max:35',
            'custEmail'=>'required|min:8|max:75',
            'custMessage'=>'max:1250']);
        /**
         * process and save data
         */
        $review = $request->all();
        $review['reviewer_name'] = $review['custName'];
        $review['reviewer_email'] = $review['custEmail'];
        $review['stars'] = 0;
        $review['body_text'] = '';

        $review['create_dte'] = $currentTime;
        $review['last_update'] = $currentTime;
        $review['removed_dte'] = $currentTime;
        $review['token'] = sha1($currentTime.$review['custEmail']);
        $review['sent_on'] = $currentTime;
        //Save to database
        Review::create($review);

        $subject = 'Invite to review on Distinctive Home Improvements';
        //$subject = $contact['subject'] == '' ? 'Contact from site' : $contact['subject'];

        $header = "From: ".'Distinctive Home Improvements Staff'."\r\n"; //optional headerfields
        $header .= "Reply-To: ". strip_tags('hector@dhica.com') . "\r\n";
        //$header .= "CC: susan@example.com\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: text/html; charset=UTF-8\r\n";

        $review['custMessage'] .= "<p style=margin-top:10px;>Click on the link to start your review, we truly appreciate you taking the time to let us know how we did. <br> &nbsp;<a href='https://dhica.com/cust/review/".$review['token']."'>Click here to start review</a>";

        if( mail($review['custEmail'], $subject, $review['custMessage'], $header) ){
            $res = 'Your email was sent Successfully';
        }

        return redirect('admin/review/list');
    }


    public function processCustomerReview(Request $request){
        ///process the form from the customer
        //return thank you for the review page
        return view('pages.customer-review-resp');
    }


    /**
     * @desc list of customer reviews show status and if customer has responded
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * !!! THIS MAY NOT BE NECESSARY SINCE IT WILL SHOW UP ON ALL REVIEW PAGE.. ?
     * NOT IN USE, !!!! MAY BE NECESSARY DEPENDING UPON HOW THEY WANT TO USE IT !!!!!
     */
    public function listCustomerReviews(){
        return view('pages.customer-review-list');
    }

    /**
     * @desc View a review from a customer with status and have a button to update and change status of review
     * to make it visible on the site
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * WILL BE NEEDED IF THEY DECIDE TO SEPERATE OUT
     */
    public function viewReview($id){
        return view('pages.customer-review-detail');
    }

    /**
     * @desc Process the customers response and then email hector for approval via email
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function update(Request $request, $id){
        $review = Review::find($id);

        $review->reviewer_name = $request->input('reviewerName');
        $review->stars = $request->input('stars');
        $review->last_update = time().'000';
        $review->body_text = $request->input('bodyText');

        if(app('request')->exists('approved')){
            $review->approved_on = time().'000';
        }
        elseif($review->approved_on !== null && $review->sent_on !== null){
            $review->approved_on = null;
        }

        $review->save();
        \Session::flash('message', 'Successfully updated Review!');

        ///session just adds a variable that can be detected in form /// add conditional notice on complete

        return redirect('admin/review/list');
    }

    public function updateForm($id){
        $review = Review::find($id);
        $review->body_text = str_replace("'", "\'", $review->body_text);

        return view('admin.review-update', compact('review'));
    }

}