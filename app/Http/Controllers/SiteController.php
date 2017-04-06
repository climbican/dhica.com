<?php
/**
 *
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
use App\Review;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\YelpController;
use Mockery\CountValidator\Exception;

class SiteController extends Controller{

    private function page_active(){
         return ['home'=>'', 'about'=>'', 'services'=>'', 'guarantee'=>'', 'financing'=>'', 'windows'=>'', 'patio-doors'=>'', 'solar'=>'', 'blog'=>'', 'contact'=>'', 'handyman'=>'', 'roofing'=>'', 'exterior-coating'=>'', 'gallery'=>''];
    }

    /**
     * @param $tags{url_ex=>'', title=>'', type=>'', description=>''}
     */
    public function set_og_page($tags){
        //set the open graph content tags

        if($tags->type !== '' && $tags->title !== '' && $tags->type !== '' && $tags->description !== ''){
            echo '<meta property="og:url" content="'.SiteController::prefix.'">
            <meta property="og:type" content="'.$tags->type.'"/>
            <meta property="og:title" content="'.$tags->title.'" />
            <meta property="og:description" content="'.$tags->description.'"/>
            <meta property="og:locale" content="en_US"/>
            <meta property="og:site_name" content="DHICA" />';
        }
    }

    /**
     * @desc SET A TWITTER CARD FOR A SPECIFIC SINGLE ARTICLE / BLOG PAGE
     *
     * @param $tags{title=>'', description=>''}
     */
    public function set_twitter_card($tags){
        if($tags->title !== '' && $tags->description !== ''){
            echo ' <meta name="twitter:card" content="summary" />
                    <meta name="twitter:site" content="@dhica" />
                    <meta name="twitter:domain" content="DHICA" />
                    <meta name="twitter:creator" content="@dhica" />
                    <meta name="twitter:title" content="'.$tags->title.'" />
                    <meta name="twitter:description" content="'.$tags->description.'" />';
        }
    }

    public function set_canonical($extension){
        $sp = url('');

        if($extension !== ''){
            echo '<meta rel="canonical" href="'.$sp.$extension.'"/>';
        }
        else{
            echo '<link rel="canonical" href="'.$sp.'"/>';
        }
    }

    public function index(){
        $keywords = '';
        $yelp_review = [];
        $active = SiteController::page_active();
        $yelp = false;

        $canonical = url('');

        try{
            $c = new YelpController();

            $y = $c->get_business('distinctive-home-improvements-san-diego');
            $yelp_review = json_decode($y);

            //this is a fix for s3 not being secure
            if( isset( $yelp_review->snippet_image_url ) ) {
                $yelp_review->snippet_image_url = str_replace('http:', 'https:', $yelp_review->snippet_image_url);
                $yelp = true;
            }
            $yelp = false;
        }
        catch(Exception $e){
            $yelp = false;
        }

        $active['home'] = ' active';
        $page_title = 'Energy Home Improvements | Distinctive Home Improvements';
        $meta_description = 'Distinctive Home Improvements is proud to be an outstanding San Diego general contractor. As such, our customers are what matters most to us.';

        return view('pages.index', compact('meta', 'keywords', 'active', 'page_title', 'meta_description', 'yelp_review', 'yelp', 'canonical') );
    }

    public function about(){
        $active = SiteController::page_active();
        $active['about'] = ' active';
        $page_title = 'San Diego General Contractor | Distinctive Home Improvements';
        $meta_description = 'With 25 years of experience we know how to make your home a better more efficient place.';
        $canonical = url('').'/about';

        return view('pages.about', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function contact(){
        $active = SiteController::page_active();
        $active['contact'] = ' class="active"';
        $active['anchor'] = 'contact-info';
        $page_title = 'DHICA &#124; Contact Us today | Free Quote';
        $meta_description = 'Contact us for information or a quote on new windows, doors, exterior coating or solar.';
        $canonical = url('contact');

        return view('pages.contact', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function gallery($id=0){
        $active = SiteController::page_active();
        $active['services'] = ' active';
        $reviews = Review::orderBy('create_dte', 'desc')->paginate(10);
        $num_rows = Review::count();
        $pageId = $id;
        $page_title = 'Energy Saving Solutions | Distinctive Home Improvements';
        $meta_description = 'We provide energy saving solutions for the entire house: from retrofit windows to patio doors and roofing and solar panels. Stop wasting energy now!';
        $canonical = url('gallery');

        return view('pages.gallery', compact('active', 'pageId', 'reviews', 'num_rows', 'page_title', 'meta_description', 'canonical') );
    }

    public function guarantee(){
        $active = SiteController::page_active();
        $active['guarantee'] = ' active';
        $page_title = ' Distinctive Home Improvements Guarantee';
        $meta_description = 'Our service is of unparalleled quality and all projects start with an energy audit. We carefully select our installers so the project is a success.';
        $canonical = url('').'/guarantee';

        return view('pages.guarantee', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function financingTop(){
        $canonical = url('').'/home-improvement-financing/hero-financing';
        $page_title = 'DHICA &#124; Energy Efficiency Financing Options';
        $meta_description = 'See what home improvement energy efficiency financing options are available through use here in San Diego.';
        $active = SiteController::page_active();
        $active['financing'] = ' active';
        $active['anchor'] = '';

        return view('pages.financing', compact('page_title', 'meta_description', 'canonical', 'active'));
    }

    public function financing($id){
        $active = SiteController::page_active();
        $active['financing'] = ' active';
        $active['anchor'] = $id;
        $page_title = 'DHICA &#124; Energy Efficiency Financing Programs';
        $meta_description = 'DHICA is proud to offer various energy efficiency financing programs. Save on your monthly energy bills and boost the value of your most important investment.';
        $canonical = url('').'/home-improvement-financing/hero-financing';

        return view('pages.financing',compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function windows(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Replacement Windows in San Diego';
        $meta_description = 'Replacement windows for your home with many options to choose from.';
        $canonical = url('').'/replacement-windows/options';

        return view('pages.windows', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function solar(){
        $active = SiteController::page_active();
        $active['solar'] = ' active';
        $page_title = 'Photovoltaic Solar Panel Systems | DHI San Diego';
        $meta_description = 'DHI, premier San Diego solar company, is proud to offer residential photovoltaic solar systems that convert the sun’s rays into electricity.';
        $canonical = url('').'/solar-installation';

        return view('pages.solar', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    /** FOOTER ONLY ROUTE CONTROLLERS */
    public function hiring(){
        $active = SiteController::page_active();
        $page_title = 'DHICA &#124; Hiring at Distinctive Home Improvements';
        $meta_description = 'Find a career in San Diego with one of the best companies to work for.';
        $canonical = url('').'/hiring';

        return view('pages.hiring', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function faq(){
        $active = SiteController::page_active();
        $page_title = 'DHICA &#124; FAQ for your home improvement';
        $meta_description = 'FAQs to help you make an informed decision in your home improvement project.';
        $canonical = url('').'/faq';

        return view('pages.faq', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function federal_credits(){
        $active = SiteController::page_active();
        $page_title = 'DHICA &#124; Federal Credits for your home improvements';
        $meta_description = 'Federal Credits information to save on the cost of home improvements.';
        $canonical = url('').'/federal_credits';

        return view('pages.federal_credits', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function quiet_cool(){
        $active = SiteController::page_active();
        $page_title = 'DHICA &#124; Energy Efficient Whole House Fans';
        $meta_description = 'The QuietCool whole house fans allow you to use your own home’s thermal energy, circulating cooler outdoor air through the windows and across the entire house.';
        $canonical = url('').'/quiet_cool';

        return view('pages.quiet_cool', compact('active','page_title', 'meta_description', 'canonical') );
    }

    public function syn_lawn(){
        $active = SiteController::page_active();
        $page_title = 'DHICA &#124; Syn Lawn installation';
        $meta_description = 'Water conservation with Syn Lawn, less maintenance, more free time .';
        $canonical = url('').'/syn-lawn';

        return view('pages.syn_lawn', compact('active','page_title', 'meta_description', 'canonical') );
    }

    public function privacy_policy(){
        $active = SiteController::page_active();
        $page_title = 'DHICA &#124; Privacy Policy';
        $meta_description = 'Our privacy commitment to our loyal customers in San Diego.';
        $canonical = url('').'/privacy-policy';

        return view('pages.privacy_policy', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function testimonials(){
        $active = SiteController::page_active();
        $reviews = Review::orderBy('create_dte', 'desc')->paginate(10);
        $num_rows = Review::count();
        $page_title = 'DHICA &#124; Testimonails';
        $meta_description = 'See what our customers in San Diego have to say about our installation proffessionals.';
        $canonical = url('').'/testimonials';
        $currentTime  = time();
        $isInDateRange = $currentTime - (86400*365*5);

        return view('pages.testimonials', compact('active', 'reviews', 'num_rows', 'page_title', 'meta_description', 'canonical', 'currentTime', 'isInDateRange'));
    }

    /**
     * @desc Can accommodate multiple categories if necessary
     *
     * @return \Illuminate\View\View
     */
    public function blog(){
        $active = SiteController::page_active();
        $active['blog'] = 'class="active"';
        $blogs = Blog::all();
        $page_title = 'DHICA &#124; Blog';
        $meta_description = 'Bringing you a few good articles about the importance of energy efficient windows, doors and solar.';
        $canonical = url('').'/blog';

        return view('pages.blog', compact('blogs', 'active', 'page_title', 'meta_description', 'canonical') );
    }

    /**
     * @desc Blog detail page
     *
     * @return \Illuminate\View\View
     */

    public function blog_detail($id){
        $active = SiteController::page_active();
        $active['blog'] = ' active';
        $blog = Blog::find($id);
        $page_title = 'DHICA &#124; Blog';
        $meta_description = $blog->meta_descript;
        $canonical = url('').'/blog-detail';

        return view('pages.blog_detail', compact('blog', 'active', 'page_title', 'meta_description', 'canonical') );
    }

    /**
     * @desc Blog detail page
     *
     * @return \Illuminate\View\View
     */

    public function handyman(){
        $active = SiteController::page_active();
        $active['handyman'] = ' active';
        $page_title = 'DHICA &#124; Whole House Handyman Services; San Diego';
        $meta_description = 'Distinctive Home Improvements is proud to introduce comprehensive handyman services, from rewiring an outlet to remodeling a bathroom.';
        $canonical = url('handyman');

        return view('pages.handyman', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function roofing(){
        $active = SiteController::page_active();
        $active['services'] = ' active';
        $page_title = 'DHICA &#124; Residential Roofing';
        $meta_description = 'Discover the benefits of installing a new, energy efficient roof. As exposed to the elements as it is, your roof may be the bigegst obstacle to utility savings and comfort.';
        $canonical = url('services');

        return view('pages.roofing', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function exteriorCoating(){
        $active = SiteController::page_active();
        $active['services']  = ' active';
        $page_title = 'DHICA &#124; Energy Efficient exterior wall coating';
        $meta_description = 'Save you up to 21.9% on cooling costs for your home. Discover the new generation of exterior coatings, heat reflecting and weather shielding.';
        $canonical = url('services');

        return view('pages.exterior-coating', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    /***************** THIS IS THE WINDOWS SECTIONS ***********************/


    public function singleSlide(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Single Slider Windows Replacement';
        $meta_description = 'Single slider windows have one fixed glass panel and one operable panel that slides to the left or right depending on your preference.';
        $canonical = url('').'/replacement-windows/single-slide';

        return view('pages.windows.single-slide', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function singleHung(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Single Hung Energy Efficient Windows';
        $meta_description = 'DHICA’s single hung windows are one of the ultimate dual pane insulation systems we proudly install to help you save on your energy bills.';
        $canonical = url('').'/replacement-windows/single-hung';

        return view('pages.windows.single-hung', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function picture(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Picture Windows Replacement';
        $meta_description = 'Add the wow factor to a room without the energy loss commonly associated with large openings. DHICA installs only energy efficient windows.';
        $canonical = url('').'/replacement-windows/picture';

        return view('pages.windows.picture', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function geo(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Geo Energy Efficient Windows';
        $meta_description = 'DHICA offers a wide array of sizes and shapes of Geo Windows to give your home an extra special custom home appeal.';
        $canonical = url('').'/replacement-windows/geo';

        return view('pages.windows.geo', compact('active', 'page_title', 'meta_description', 'canonical') );
    }
    public function garden(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Garden Dual Pane Windows';
        $meta_description = 'Garden dual pane windows offer a popular way to brighten a kitchen or bathroom, opening the room to more sunlight and providing a plant or knick-knack shelf.';
        $canonical = url('').'/replacement-windows/garden';

        return view('pages.windows.garden', compact('active', 'page_title', 'meta_description', 'canonical') );
    }
    public function doubleSlide(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Double Slider Windows Replacement';
        $meta_description = 'Double slider windows have two side by side operable glass panels that both slide horizontally. A good option to enhance any interior.';
        $canonical = url('').'/replacement-windows/double-slide';

        return view('pages.windows.double-slide', compact('active', 'page_title', 'meta_description', 'canonical') );
    }
    public function doubleHung(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Double Hung Energy Efficient Windows';
        $meta_description = 'Whether single hung or double hung energy efficient windows, you can rest assured that DHICA installs only top quality products for your improved comfort.';
        $canonical = url('').'/replacement-windows/double-hung';

        return view('pages.windows.double-hung', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function casement(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Casement Windows Replacement';
        $meta_description = 'Casement windows combine the advantage of an unobstructed clear view of the outside, but still offer the benefit of being able to open for ventilation.';
        $canonical = url('').'/replacement-windows/casement';

        return view('pages.windows.casement', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function bayBow(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Bay Bow Windows Replacement';
        $meta_description = 'Bay bow windows dramatically improve the appearance of your home. With Anlin’s ultimate dual pane insulation system, they also dramatically save on energy.';
        $canonical = url('replacement-windows/bay-bow');

        return view('pages.windows.bay-bow', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function awning(){ //removed requiredment for id for now $id
        $active = SiteController::page_active();
        $active['windows'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Awning Dual Pane Windows';
        $meta_description = 'DHICA frequently installs awning dual pane windows. They both enhance the view and allow ventilation coming from below.';
        $canonical = url('replacement-windows/awning-windows');

        return view('pages.windows.awning', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    /**********************  PATIO DOORS SECTION    ******************************/
    //removed the $id because anchors are no longer being used .... for now....
    public function patioDoors(){
        $active = SiteController::page_active();
        $active['patio-doors'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Replacement Patio Doors San Diego';
        $meta_description = 'DHICA Patio Doors are designed to enhance the appeal of your home, be easy to operate for as long as you own your home, and to help you save energy.';
        $canonical = url('replacement-patio-doors');

        return view('pages.patio_doors', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function slidingPatio(){
        $active = SiteController::page_active();
        $active['patio-doors'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Vinyl Energy Efficient Sliding Patio Doors';
        $meta_description = 'When your doors need to be closed, you know you want to keep the hot or cold air where it belongs. Vinyl patio doors offer both durability and energy efficiency.';
        $canonical = url('vinyl-sliding-patio-doors');

        return view('pages.doors.sliding-patio', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function swingingFrench(){
        $active = SiteController::page_active();
        $active['patio-doors'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Swinging French Patio Doors';
        $meta_description = 'Keep your home\'s interior heat from transmitting through the window out of your home when it\'s cold outside by installing energy saving swinging French patio doors.';
        $canonical = url('vinyl-sliding-patio-doors');

        return view('pages.doors.swinging-french', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function slidingFrench(){
        $active = SiteController::page_active();
        $active['patio-doors'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Vinyl Sliding French Doors';
        $meta_description = 'Vinyl sliding French doors allow to save space AND energy. Contact Dinstinctive Home Improvements for information on energy efficient windows and doors.';
        $canonical = url('vinyl-sliding-patio-doors');

        return view('pages.doors.sliding-french', compact('active', 'page_title', 'meta_description', 'canonical') );
    }

    public function slidingPet(){
        $active = SiteController::page_active();
        $active['patio-doors'] = ' active';
        $active['anchor'] = '';
        $page_title = 'DHICA &#124; Sliding Patio Doors With Pet Doors';
        $meta_description = 'DHICA installs Freedom Doors: vinyl sliding patio doors with a built-in pet door. They comes in 3 sizes, so your pet is sure to fit through.';
        $canonical = url('viny-sliding-pet-doors');

        return view('pages.doors.sliding-pet', compact('active', 'page_title', 'meta_description', 'canonical') );
    }
}