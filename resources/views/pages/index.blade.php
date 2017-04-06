@extends('layouts.app')

@section('content')

<!-- CAROSEL START -->
<div id="row-carousel">
    <div id="main-carousel" class="owl-carousel owl-animate owl-theme owl-custom-nav" data-single-item="true" data-navigation="true" data-autoplay="8000" data-transition="slideLeft">
        <!-- SLIDE ONE -->
        <div class="item text-left">
            <div class="jumbotron no-border-radius pad-top-0-sm overlay">
                <h2 class="margin-10px-xs animation animated-item-1" style="color:#fff;"> Vinyl Windows &#38; Doors </h2>
                <h4 class="margin-bottom-1 lh-1-5 animation animated-item-2"> 30 Point Energy Evauluation and Savings </h4>
                <h4 class="magin-bottom-1 hl-l-5 animation animated-item-3">CALL (619) 857 - 8388</h4>
                <button class="btn btn-lg btn-danger animation animated-item-4" onclick="window.location.href='{{url('replacement-windows')}}'"> Read More </button>
            </div>
            <img src="{{url('images/slider/windows.jpg')}}" alt="image" class="img-responsive">
        </div>
        <!-- SLIDE TWO -->
        <div class="item text-left">
            <div class="jumbotron no-border-radius pad-top-0-sm overlay">
                <h2 class="margin-10px-xs animation animated-item-1" style="color:#fff;"> Exterior Coating </h2>
                <h4 class="margin-bottom-1 animation animated-item-2"> By TEX-COTE: a leader in exterior coatings for 55 years. </h4>
                <h4 class="margin-bottom-1 animation animated-item-3">CALL (619) 857 - 8388</h4>
                <button class="btn btn-lg btn-danger animation animated-item-4" onclick="window.location.href='{{url('replacement-patio-doors')}}'"> Read More </button>
            </div>
            <img src="{{url('images/slider/exteriorcoating.jpg')}}" alt="image" class="img-responsive">
        </div>
        <!-- SLIDE THREE -->
        <div class="item text-left">
            <div class="jumbotron no-border-radius pad-top-0-sm overlay">
                <h2 class="margin-10px-xs animation animated-item-1" style="color:#fff;"> Solar Installations </h2>
                <h4 class="margin-bottom-1 animation animated-item-2"> Save more money with our most efficient solar panels </h4>
                <h4 class="margin-bottom-1 animation animated-item-3"> CALL (619) 857 - 8388</h4>
                <button class="btn btn-lg btn-danger animation animated-item-3" onclick="window.location.href='{{url('solar-installation')}}'"> Read More </button>
            </div>
            <img src="{{url('images/slider/solar.jpg')}}" alt="image" class="img-responsive">
        </div>
        <!-- SLIDE FOUR -->
        <div class="item text-left">
            <div class="jumbotron no-border-radius pad-top-0-sm overlay">
                <h2 class="margin-10px-xs animation animated-item-1" style="color:#fff;"> Synthetic Lawn </h2>
                <h4 class="margin-bottom-1 animation animated-item-2"> No watering or mowing necessary... </h4>
                <h4 class="margin-bottom-1 animation animated-item-3"> CALL (619) 857 - 8388</h4>
                <button class="btn btn-lg btn-danger animation animated-item-4" onclick="window.location.href='{{url('syn-turf')}}'"> Read More </button>
            </div>
            <img src="{{url('images/slider/syn-lawn.jpg')}}" alt="image" class="img-responsive">
        </div>
    </div>
</div>
<!-- END CAROSEL -->
<!-- PAGE SECTIONS GO HERE -->
<!-- RECENT WORK IMAGES -->
<section>
    <div style="margin: 5px;">
        <a class="post__list_item" href="#">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="post__title post__title--list text-center">Home Energy Savings Specialist</h1>
                    <p class="post__introduction">We focus exclusively on energy saving home improvements. We can help you update your home systems and reduce your overall energy bill.</p>
                </div>
            </div>
        </a>
    </div>
</section>
<section id="recent-works">
    <div class="container">
        <div class="text-center wow fadeInDown">
            <h2>Our Recent Energy Savings Projects</h2>
            <p class="lead">These are some of our most recent energy efficient installations and happy customers.</p>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap" style="background:rgb(192,102,27);">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/window-replacement-condos-pacific-beach.jpg')}}" alt="condo window replacement">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Windows &#38; Doors </h3>
                            <a class="preview" href="{{url('images/portfolio/full/window-replacement-condos-pacific-beach.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/solar-panel-roof-290x220.jpg')}}" alt="solar installation san diego">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Solar Panels</h3>
                            <a class="preview" href="{{url('images/portfolio/full/solar-panel-roof-full.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/frontdoorwindows-290.jpg')}}" alt="energy efficient windows">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Windows </h3>
                            <a class="preview" href="{{url('images/portfolio/full/front-door-full.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/roof-replacement-san-diego.jpg')}}" alt="home roofing san diego">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Roofing</h3>
                            <a class="preview" href="{{url('images/portfolio/full/roof-replacement-san-diego.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/geometric-window-replacement.jpg')}}" alt="home window and door replacement">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Windows &#38; Doors</h3>
                            <a class="preview" href="{{url('images/portfolio/full/geometric-window-replacement.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/corner-replacement-window.jpg')}}" alt="energy efficient window & door replacement">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Windows &#38; Doors</h3>
                            <a class="preview" href="{{url('images/portfolio/full/corner-replacement-window.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/energy-efficient-exterior-coating.jpg')}}" alt="Exterior Coating San Diego">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Exterior Coating</h3>
                            <a class="preview" href="{{url('images/portfolio/full/energy-efficient-exterior-coating.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/residential-solar-290.jpg')}}" alt="Solar Installation San Diego">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Solar Panel Systems</h3>
                            <a class="preview" href="{{url('images/portfolio/full/residential-solar-full.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/syn-lawn-1-290.jpg')}}" alt="Synthetic lawn San Diego">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Turf</h3>
                            <a class="preview" href="{{url('images/portfolio/full/syn-lawn-1-ba-full.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View before / after</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/syn-lawn-2-290.jpg')}}" alt="Synthetic Lawn San Diego">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Turf</h3>
                            <a class="preview" href="{{url('images/portfolio/full/syn-lawn-2-ba.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View before / after</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/exterior-1-290.jpg')}}" alt="Windows & Doors">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Windows</h3>
                            <a class="preview" href="{{url('images/portfolio/full/exterior-1-ba.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View before / after</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{url('images/portfolio/recent/windows2-290.jpg')}}" alt="Replacement Windows">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3 style="color:#ffffff;">Windows</h3>
                            <a class="preview" href="{{url('images/portfolio/full/windows-10-ba-full.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View before / after</a>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section>
<!--/# RECENT WORK IMAGES -->

<!-- OUR SERVICES -->
<section id="services">
    <div class="container">
        <div class="text-center wow fadeInDown">
            <h2>Energy Home Improvements Services</h2>
            <p class="lead"><strong>Distinctive Home Improvements in San Diego</strong> is proud to offer the very best in Energy Efficiency. Our Energy Home Improvement services include: Vinyl Replacement Windows and Patio Doors, Exterior Coatings, Roofing and Residential Photovoltaic Solar Systems at the very best prices&#33;
            </p>
        </div>
        <div class="row text-center">
            <!-- WINDOWS SERVICE BRICK -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="{{url('replacement-windows')}}">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{url('images/services/window-ico.png')}}" alt="Window replacement service icon">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Windows</h3>
                            <h4 style="font-size:1em; font-weight:400;"> Energy Saving Vinyl</h4>
                            <h4 style="font-size:1em; font-weight:400;">Replacement Windows</h4>
                        </div>
                    </div>
                </a>
            </div>
            <!--  DOORS SERVICE BRICK -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="{{url('replacement-patio-doors')}}">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{url('images/services/sliding-door-ico.png')}}" alt="Sliding door replacement service icon">
                        </div>
                        <div class="media-body" >
                            <h3 class="media-heading">Energy efficient doors</h3>
                            <h4 style="font-size:1em; font-weight:400;">Energy Saving Vinyl</h4>
                            <h4 style="font-size:1em; font-weight:400;">Replacement Doors</h4>
                        </div>
                    </div>
                </a>
            </div>
            <!--  SOLAR PANEL INSTALLATION SERVICE BRICK-->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="{{url('solar-installation')}}">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{url('images/services/solar-ico.png')}}" alt="Solar panel installation Service icon">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Solar</h3>
                            <h4 style="font-size:1em; font-weight:400;">Residential Photovoltaic Solar Systems - the most energy efficient solar panels</h4>
                            <h4 style="font-size:1em; font-weight:400;">most efficient solar panels</h4>
                        </div>
                    </div>
                </a>
            </div>
            <!--- EXTERIOR COATING SERVICE BRICK-->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="{{url('exterior-coating')}}">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{url('images/services/house-ico.png')}}" alt="Exterior Coating service icon">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Exterior Wall Coatings</h3>
                            <h4 style="font-size:1em; font-weight:400;"> Exterior Energy Saving Paint</h4>
                            <h4 style="font-size:1em; font-weight:400;">Lifetime warranty on exterior coatings</h4>
                        </div>
                    </div>
                </a>
            </div>
            <!--  ROOFING SERVICE BRICK-->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="{{url('residential-roofing')}}">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{url('images/services/roofing-services.png')}}" alt="Roofing service icon">
                        </div>
                        <div class="media-body" style="padding-bottom:80px;">
                            <h3 class="media-heading">Roofing</h3>
                            <h4 style="font-size:1em; font-weight:400;">Energy Efficient Roofing</h4>
                        </div>
                    </div>
                </a>
            </div>
            <!-- SYN LAWN SERVICE BRICK-->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="{{url('syn-turf')}}">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{url('images/icons/grass.png')}}" alt="Syn Lawn icon">
                        </div>
                        <div class="media-body" style="padding-bottom:80px;">
                            <h3 class="media-heading">Synthetic and Artificial Lawns</h3>
                            <h4 style="font-size:1em; font-weight:400;">Artificial turf and synthetic grass installation and landscaping</h4>
                            <h4 style="font-size:1em; font-weight:400;">Synthetic Grass San Diego</h4>
                        </div>
                    </div>
                </a>
            </div>
            <!-- WHOLE HOUSE FANS -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="{{url('quiet-cool')}}">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{url('images/icons/fan.png')}}" alt="Whole house fan icon">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Whole House Fans</h3>
                            <h4 style="font-size:1em; font-weight:400;">A Cooler home with whole house fans<br><br><br><br></h4>
                        </div>
                    </div>
                </a>
            </div>
            <!-- HANDYMAN SERVICES -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="{{url('handyman')}}">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{url('images/icons/handyman.png')}}" alt="Handyman icon">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Handyman Services</h3>
                            <h4 style="font-size:1em; font-weight:400;">Servicing San Diego regions<br><br><br><br></h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#services-->

<section id="content" style="background-color:#fff;">
    <div class="container">
        <div class="row">
            <h2>Testimonials</h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 wow fadeInDown">
                <div class="testimonial">
                    <div class="media testimonial-inner">
                        <div class="pull-left">
                            <img class="img-responsive img-circle" src="{{url('images/no-image.png')}}" style="height:66px;" alt="dhica logo icon">
                        </div>
                        <div class="media-body">
                            <p style="padding-left:10px;">It meant a lot that the owner came out for the sales call/measurements. Windows were ready for install less than a month after initial sales call.</p>
                            <span><strong>-Tim G. /</strong> Windows</span>
                        </div>
                    </div>

                    <div class="media testimonial-inner">
                        <div class="pull-left">
                            <img class="img-responsive img-circle" src="{{url('images/no-image.png')}}" style="height:66px;" alt="dhica logo icon">
                        </div>
                        <div class="media-body">
                            <p style="padding-left:10px;">We had our slider replaced and it was a great experience. Fantastic customer service and great quality of work.t</p>
                            <span><strong>-Garreth H. /</strong>Windows &#38; Doors</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 wow fadeInDown">
                <div class="testimonial">
                    <div class="media testimonial-inner">
                        <div class="pull-left">
                            <img class="img-responsive img-circle" src="{{url('images/no-image.png')}}" style="height:66px;" alt="dhica logo icon">
                        </div>
                        <div class="media-body">
                            <p style="padding-left:10px;">This was not my first window replacement! Jeff, Curtis, Dave, Louis and Billijin were all wonderful in every way. Price, quality of work &#38; product, knowledge,... </p>
                            <span><strong>-Harriet S. /</strong> Windows</span>
                        </div>
                    </div>
                    <div class="media testimonial-inner">
                        <div class="pull-left">
                            <img class="img-responsive img-circle" src="{{url('images/no-image.png')}}" style="height:66px;" alt="dhica logo icon">
                        </div>
                        <div class="media-body">
                            <p style="padding-left:10px;">It is hard to add anything new to the excellent reviews posted below.  Every person acted as if they really cared about our house....</p>
                            <span><strong>-Karen L. /</strong>Windows &#38; Doors</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 wow fadeInDown">
                <div class="testimonial">
                    <div class="media testimonial-inner">
                        <div class="pull-left">
                            <img class="img-responsive img-circle" src="{{url('images/no-image.png')}}" style="height:66px;" alt="dhica logo icon">
                        </div>
                        <div class="media-body">
                            <p style="padding-left:10px;">What a great experience having Jeff and his staff come to our home and install our beautiful Anlin Windows.  Everyone was professional, knowledgable, and extremely respectful of our home.</p>
                            <span><strong>-Gary &#38; Lyn M. /</strong> Windows</span>
                        </div>
                    </div>

                    <div class="media testimonial-inner">
                        <div class="pull-left">
                            <img class="img-responsive img-circle" src="{{url('images/no-image.png')}}" style="height:66px;" alt="dhica logo icon">
                        </div>
                        <div class="media-body">
                            <p style="padding-left:10px;">Distinctive Home Improvements came and did some work on the windows at my parent's house. Really great quality and service. They definitely helped us out in the long-run in terms of energy costs</p>
                            <span><strong>-Matt M. /</strong> Windows</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
        <div class="row">&nbsp;</div>
        <!-- ##### this is where the yelp section goes-->
        <div class="row">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8">
                <div style="float:left; width:22%;">
                    <span>
                    <a href="https://www.yelp.com/biz/distinctive-home-improvements-san-diego" style="text-decoration:none; color:#000;">
                    <img src="{{url('images/partners/yelp-logo-large@2x.png')}}" height="60px" alt="none">
                    </a>
                    </span>
                                        <span>
                    <div>Total ratings:  {{$yelp_review->review_count }}</div>
                    <div>Average Rating: {{$yelp_review->rating }}</div>
                    </span>
                </div>
                <div style="float:right; width:78%;">
                    <a href="https://www.yelp.com/biz/distinctive-home-improvements-san-diego" style="text-decoration:none; color:#000;">
                        <div class="yelp_person_image" style="float:left; width:29%;">
                            <img src="{{$yelp_review->snippet_image_url }}"/>
                        </div>
                        <div style="float:right; width:70%;">
                            <div ><img src="{{$yelp_review->rating_img_url }}"/> </div>
                            <div>{{$yelp_review->reviews[0]->user->name }}</div>
                            <div>{{$yelp_review->snippet_text }}</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>
        <!-- END YELP REVIEW -->

        <div class="row" style="margin-top:15px;">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8">
                <a class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" href="http://www.homeadvisor.com/rated.DistinctiveHome.40841875.html" style="text-decoration:none; color:#000;" alt="homeadvisor rating logo">
                    <div style="float:left;width:45%;">
                        <div><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{url('images/partners/home-seal-logo.png')}}" style="height:70px;" alt="home seal logo"></div>
                        <span>
                            <div>Total Ratings: 44</div>
                            <div>Average Rating: 4.85</div>
                        </span>
                    </div>
                    <div style="float:right;width:55%;">
                        <div><img src="{{url('images/assets/5-star-rating.png')}}" style="height:20px;" alt="five star rating yelp"/></div>
                        <div>Janie K.</div>
                        <div>The windows are impressive and the crew worked well together. A lot quieter in the house. Several people have commented on how nice the windows look. I highly recommend them.</div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                &nbsp;
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#content-->

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Energy Savings Partners</h2>
            <p class="lead">We are affiliated with and have A+ ratings with the Better Business Bureau, Contractors State License Board and the Western Regional Master Builders Association. We encourage you to check out our license and exemplary records.</p>
        </div>
        <div class="partners">
            <div class="image-box" id="anlin"><a href="http://anlin.com/"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{url('images/partners/anlin-windows.png')}}" alt="Anlin window & door partner logo"></a></div>
            <div class="image-box" id="monte-verde"><a href="http://www.monteverdewindows.com//"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms" src="{{url('images/partners/monteverde.png')}}" alt="Monte Verdes window & door partner logo"></a></div>
            <div class="image-box" id="texcote"><a href="http://texcote.com/"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{url('images/partners/texcote.png')}}" alt="TexCote partner logo"></a></div>
            <div class="image-box" id="syn-lawn"><a href="http://globalsynturf.com"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms" src="{{url('images/partners/gst-logo.png')}}" alt="Global Syn Turf logo"></a></div>
            <div class="image-box" id="house-fan"><a href="http://quietcoolsystems.com"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="800ms" src="{{url('images/partners/quiet-cool-300.png')}}" alt="QuietCool logo"></a></div>
            <div class="image-box" id="homeadvisor"><a href="http://www.homeadvisor.com/rated.DistinctiveHome.40841875.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms" src="{{url('images/partners/home-seal-logo.png')}}"></a></div>
            <div class="image-box" id="cslb"><a href="http://www.cslb.ca.gov/"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1000ms" src="{{url('images/partners/cslb-logo.png')}}" alt="CSLB logo"></a></div>
            <div class="image-box" id="bbb"><a href="http://www.bbb.org/sdoc/business-reviews/construction-and-remodedivng-services/distinctive-home-improvements-in-san-diego-ca-29004653"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{url('images/partners/bbb-white.png')}}" alt="BBB logo"></a></div>
        </div>

    </div><!--/.container-->
</section><!--/#partner-->
<section id="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <a href="{{url('contact')}}"><i class="icon-2x icon-phone"></i></a>
                    </div>
                    <div class="media-body">
                        <h2>Have a question or need a custom quote?</h2>
                        <p>Call or email today for your FREE 30 Point Energy Evaluation or Custom Quote!<br> <a href="tel://(619) 857-8388">(619) 857-8388</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#conatcat-info-->

@stop