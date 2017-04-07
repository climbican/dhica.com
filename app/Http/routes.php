<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('robots.txt', function(){
    echo "User-agent: *"."\n"."Disallow: /auth/login";
});


Route::get('/', 'SiteController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|

Route::get('/', function () {
    return redirect('auth/login');
});
*/

/**
 * SITE NAV
 */

Route::get('about', 'SiteController@about');
Route::get('gallery', 'SiteController@gallery');
Route::get('guarantee', 'SiteController@guarantee');
Route::get('home-improvement-financing/{id}', ['as'=>'financing', 'uses'=>'SiteController@financing']);
Route::get('financing-options', 'SiteController@financingTop');
//Route::get('financing/', array('as' => 'financing', 'uses' => 'SiteController@financing'));
Route::get('solar-installation', ['as'=>'solar', 'uses'=> 'SiteController@solar']);
Route::get('residential-roofing', 'SiteController@roofing');
Route::get('exterior-coating', 'SiteController@exteriorCoating');
Route::get('blog', 'SiteController@blog');
Route::get('blog-detail/{id}', 'SiteController@blog_detail');

Route::get('testimonials', 'SiteController@testimonials');
Route::get('quiet-cool', 'SiteController@quiet_cool');
Route::get('syn-turf', 'SiteController@syn_lawn');

Route::get('contact', 'SiteController@contact');
Route::post('sendmail', 'mailController@sendTheEmail');  //this processes the main mail form on the contact page.
Route::post('sendMailMini', 'mailController@miniMailForm');//this is for the mini follow scroll form on the pages.
Route::get('contactThankYou', 'mailController@getThankYou');

/***********  WINDOW OPTION ROUTES **********************/
//MAIN ENTRY POINT FOR THE WINDOWS SECTION
Route::get('replacement-windows', 'SiteController@windows');
//SUB SECTIONS NOW HAVE THEIR OWN PAGES
Route::get('single-slide', 'SiteController@singleSlide');
Route::get('double-slide', 'SiteController@doubleSlide');
Route::get('single-hung', 'SiteController@singleHung');
Route::get('double-hung', 'SiteController@doubleHung');
Route::get('casement', 'SiteController@casement');
Route::get('bay-bow', 'SiteController@bayBow');
Route::get('awning-windows', 'SiteController@awning');
Route::get('garden', 'SiteController@garden');
Route::get('picture', 'SiteController@picture');
Route::get('geo', 'SiteController@geo');

/************  DOORS OPTION ROUTES   *******************/
///removed id used for anchor /{id}
//MAIN ENTRY POINT FOR THE DOORS
Route::get('replacement-patio-doors', 'SiteController@patioDoors');
Route::get('vinyl-sliding-patio-doors', 'SiteController@slidingPatio');
Route::get('vinyl-swinging-french-doors', 'SiteController@swingingFrench');
Route::get('vinyl-sliding-french-doors', 'SiteController@slidingFrench');
Route::get('viny-sliding-pet-doors', 'SiteController@slidingPet');

Route::get('handyman', 'SiteController@handyman');

/** FOOTER ONLY ROUTES */
Route::get('hiring', 'SiteController@hiring');
Route::get('faq', 'SiteController@faq');
Route::get('federal-credits-home-improvement', 'SiteController@federal_credits');
Route::get('privacy-policy', 'SiteController@privacy_policy');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// CUSTOMER ROUTES FOR ACCESSING AND SUBMITTING THE REVIEW
Route::post('customer/review/save/{token}', 'CustomerReviewController@save');
Route::post('admin/approve/customer/review/email/{token}', 'CustomerReviewController@adminApproveReviewViaEmail');

Route::get('cust/review/{token}', 'CustomerReviewController@viewReviewForm');

Route::auth();

Route::group(['middleware' => 'web'], function () {
    //this is for customers only and will only work in the middleware section?
    Route::auth();

    Route::controllers([
        'auth'=>'Auth\AuthController',
        'password'=> 'Auth\PasswordController'
    ]);
    /**
     * ADMIN BLOG FUNCTION
     */
    Route::get('admin/blog/list', 'BlogController@index');
    Route::get('admin/blog/create', 'BlogController@create');
    Route::post('admin/blog/save', 'BlogController@save');
    Route::get('admin/blog/update/{id}', 'BlogController@updateForm');
    Route::post('admin/blog/update/{id}', 'BlogController@update');
    Route::get('admin/blog/delete/{id}', 'BlogController@delete');
    /**
     * ADMIN REVIEW FUNCTIONS
     */
    Route::get('admin/review/list', 'ReviewController@index');
    Route::get('admin/review/create', 'ReviewController@create');
    Route::post('admin/review/save', 'ReviewController@save');
    Route::get('admin/review/update/{id}', 'ReviewController@updateForm');
    Route::post('admin/review/update/{id}', 'ReviewController@update');
    Route::get('admin/review/delete/{id}', 'ReviewController@delete');

    /**
     * ADMIN SEND / APPROVE REVIEW FUNCTIONS
     */
    Route::get('admin/customer/review', 'ReviewController@showInviteForm');
    Route::post('admin/send/customer/invite', 'ReviewController@sendInvite');
    Route::post('customer/review/approve', 'ReviewController@adminApproveReview');
    /**
     * ADMIN USER ADMINISTRATION
     */
    Route::get('admin/user/list', 'UserController@index');
    Route::get('admin/user/create', 'UserController@create');
    Route::post('admin/user/save', 'UserController@save');
    Route::get('admin/user/update/{id}', 'UserController@updateForm');
    Route::post('admin/user/update/{id}', 'UserController@update');
    Route::get('admin/user/delete/{id}', 'UserController@delete');
});

    Route::get('sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
    // by default cache is disabled
    $sitemap->setCache('laravel.sitemap', 60);

    if (!$sitemap->isCached()) {
        // add item to the sitemap (url, date, priority, freq)
        // this generates the proper time format from the timestamp
        //gmdate("Y-m-d\TH:i:s\Z", $timestamp)
        $sitemap->add(URL::to('/'),     '2016-11-10T14:30:00-07:00', '1.0', 'weekly');
        $sitemap->add(URL::to('about'), '2016-11-10T14:30:00-07:00', '0.7', 'weekly');
        $sitemap->add(URL::to('gallery'), '2016-11-10T14:30:00-07:00', '0.95', 'weekly');
        $sitemap->add(URL::to('guarantee'),  '2016-11-10T14:30:00-07:00', '.5', 'weekly');
        $sitemap->add(URL::to('home-improvement-financing/hero-financing'),  '2016-11-10T14:30:00-07:00', '.6', 'weekly');
        $sitemap->add(URL::to('replacement-windows/options'),  '2016-11-10T14:30:00-07:00', '.85', 'weekly');
        $sitemap->add(URL::to('replacement-patio-doors'),  '2016-11-10T14:30:00-07:00', '.9', 'weekly');
        $sitemap->add(URL::to('solar-installation'),  '2016-11-10T14:30:00-07:00', '.8', 'weekly');
        $sitemap->add(URL::to('blog'),  '2016-11-10T14:30:00-07:00', '.7', 'weekly');
        $sitemap->add(URL::to('testimonials'),  '2016-11-10T14:30:00-07:00', '.85', 'weekly');
        $sitemap->add(URL::to('contact'),  '2016-11-10T14:30:00-07:00', '.97', 'weekly');
        $sitemap->add(URL::to('hiring'),  '2016-11-10T14:30:00-07:00', '.3', 'weekly');
        $sitemap->add(URL::to('faq'),  '2016-11-10T14:30:00-07:00', '.5', 'weekly');
        $sitemap->add(URL::to('federal-credits-home-improvement'),  '2016-11-10T14:30:00-07:00', '.5', 'weekly');
        $sitemap->add(URL::to('privacy-policy'),  '2016-11-10T14:30:00-07:00', '.5', 'weekly');

        // add item with translations (url, date, priority, freq, images, title, translations)
       /**
        $translations = [
            ['language' => 'fr', 'url' => URL::to('pageFr')],
            ['language' => 'de', 'url' => URL::to('pageDe')],
            ['language' => 'bg', 'url' => URL::to('pageBg')],
        ];
        $sitemap->add(URL::to('pageEn'), '2015-06-24T14:30:00+02:00', '0.9', 'weekly', [], null, $translations);
        **/
        // add item with images
        $images = [
            ['url' => URL::to('images/pic1.jpg'), 'title' => 'Image title', 'caption' => 'Image caption', 'geo_location' => 'Plovdiv, Bulgaria'],
            ['url' => URL::to('images/pic2.jpg'), 'title' => 'Image title2', 'caption' => 'Image caption2'],
            ['url' => URL::to('images/pic3.jpg'), 'title' => 'Image title3'],
        ];
        //$sitemap->add(URL::to('post-with-images'), '2015-06-24T14:30:00+02:00', '0.9', 'weekly', $images);

        // get all posts from db
        $posts = DB::table('content')->orderBy('create_dte', 'desc')->get();

        // add every post to the sitemap
        /**
        foreach ($posts as $post) {
            $post->priority = '.7';
            $post->freq = 'weekly';
            $post->modified = date('Y-m-d H:i',$post->last_update);
            $sitemap->add($post->title, $post->modified, $post->priority, $post->freq);
        }**/
    }

    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
    return $sitemap->render('xml');

});

