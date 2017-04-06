@extends('layouts.app')
@section('content')

<section id="portfolio">
    <div class="container">
        <div class="text-center">
            <h1>ENERGY SAVING SOLUTIONS</h1>
            <h2>Our Recent Energy Efficiency Projects</h2>
            <h3 id="recentWorksTitleH3">Home Remodeling Contractor</h3>
            <h4 id="recentWorksTitleH4">Energy Efficiency Projects</h4>
            <p class="lead" id="recentWorksBodyText">Browse our portfolio of our latest energy efficiency projects.</p>
        </div>
        <ul class="portfolio-filter text-center">
            <li><a id="defaultAllRef" class="btn btn-default active" href="#" data-filter="*" onclick="changeServicesContent(0)">All Works</a></li>
            <li><a id="windowsDoorsRef" class="btn btn-default" href="#" data-filter=".windowsDoors" onclick="changeServicesContent(1)">Retrofit Windows &amp; Doors</a></li>
            <li><a id="solarRef" class="btn btn-default" href="#" data-filter=".solar" onclick="changeServicesContent(2)">Solar Installation</a></li>
            <li><a id="texCoteRef" class="btn btn-default" href="#" data-filter=".texCote" onclick="changeServicesContent(3)">Exterior Coatings</a></li>
            <li><a id="roofingRef" class="btn btn-default" href="#" data-filter=".roofing" onclick="changeServicesContent(4)">Roofing</a></li>
            <!--<li><a id="houseFansRef" class="btn btn-default" href="#" data-filter=".fans" onclick="changeServicesContent(5)">Whole House fans</a></li>-->
        </ul><!--/#portfolio-filter-->

        <div class="row" style="margin-left:auto; margin-right:auto;">
            <div class="portfolio-items">
                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/bronze-window-4-290.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Windows &#38; Doors</h3>
                                <a class="preview" href="{{url('images/portfolio/full/bronze-window-4-full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item turf col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/turf-2.jpg')}}" alt="Syn-lawn before and after">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Syntethic Turf</h3>
                                <a class="preview" href="{{url('images/portfolio/full/turf2-before-after-full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/window-bronz-1-290.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Windows &#38; Doors</h3>
                                <a class="preview" href="{{url('images/portfolio/full/window-bronz-1-full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/mad-dog-290.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Dog Doors</h3>
                                <a class="preview" href="{{url('images/portfolio/full/mad-dog.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item solar col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/residential-solar-installation.jpg')}}" alt="solar panel installation">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Solar</h3>
                                <a class="preview" href="{{url('images/portfolio/full/residential-solar-installation.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item turf col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/syn-lawn-2-290.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Synthetic Turf</h3>
                                <a class="preview" href="{{url('images/portfolio/full/turf3-before-after-full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item solar col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/solar-panel-roof-290x220.jpg')}}" alt="Home solar panels">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Solar</h3>
                                <a class="preview" href="{{url('images/portfolio/full/solar-panel-roof-full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item solar col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/residential-solar-roof-290.jpg')}}" alt="Residential Solar Installation">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Solar</h3>
                                <a class="preview" href="{{url('images/portfolio/full/residential-solar-roof-full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item solar col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/residential-solar-290.jpg')}}" alt="Home solar installation">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Solar</h3>
                                <a class="preview" href="{{url('images/portfolio/full/residential-solar-full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
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

                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/garden-window-sm.jpg')}}" alt="Vinyl windows & doors">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Windows &#38; Doors</h3>
                                <a class="preview" href="{{url('images/portfolio/full/garden-window.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/geometric-window-replacement.jpg')}}" alt="energy efficient windows & doors">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Windows &#38; Doors</h3>
                                <a class="preview" href="{{url('images/portfolio/full/geometric-window-replacement.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/corner-replacement-window.jpg')}}" alt="Replacement windows & doors">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Windows &#38; Doors</h3>
                                <a class="preview" href="{{url('images/portfolio/full/corner-replacement-window.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/home-window-replacement-290.jpg')}}" alt="replacement windows & doors">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Windows &#38; Doors</h3>
                                <a class="preview" href="{{url('images/portfolio/full/home-window-replacement-full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item texCote col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/windows-replacement-corner-house-290.jpg')}}" alt="Exterior coating on a house">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Exterior Coating</h3>
                                <a class="preview" href="{{url('images/portfolio/full/windows-replacement-corner-house-full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item texCote col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/energy-efficient-exterior-coating.jpg')}}" alt="Exterior coating">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Exterior Coating</h3>
                                <a class="preview" href="{{url('images/portfolio/full/energy-efficient-exterior-coating.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/exterior-1-290.jpg')}}" alt="Windows & Doors">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Windows & Doors</h3>
                                <a class="preview" href="{{url('images/portfolio/full/exterior-1-ba.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View before / after</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item roofing col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/roof-replacement-san-diego.jpg')}}" alt="Residential roofing">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Roofing</h3>
                                <a class="preview" href="{{url('images/portfolio/full/roof-replacement-san-diego.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item windowsDoors col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{url('images/portfolio/recent/windows2-290.jpg')}}" alt="Replacement Windows">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3 style="color:#ffffff;">Windows</h3>
                                <a class="preview" href="{{url('images/portfolio/full/windows-10-ba-full.jpg')}}" rel="prettyPhoto"><i class="icon icon-eye"></i> View before / after</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item turf col-xs-12 col-sm-4 col-md-3">
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
            </div>
        </div>
    </div>
</section><!--/#portfolio-item--><!-- https://www.youtube.com/watch?v=twd85lg9VYA -->
<section>
<!-- this is the template for the customer reviews -->
    @if($num_rows > 0)

        <div class="clients-area center wow fadeInDown">
            <h2>What Our Customers Say</h2>
            <p class="lead">Please ask us about our wonderful Customer Referral Reward Program. But first, check out some of the many glowing customer testimonials we've received.</p>
        </div>

        @foreach ($reviews as $r)
            <div class="row wow fadeInDown">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-2">
                    <img src="{{url('images/logo_house.png')}}" alt="distinctive logo')}}" style="height:160px;"/>
                    <div class="center" style="font-style:italic; color:#696969;">{{$r->reviewer_name}}</div>
                </div>
                <div class="col-sm-6">
                    <blockquote>
                        <span class="review_stars">
                    @for($i=0; $i< $r->stars; $i++)
                            <i class="fa fa-star"></i>
                    @endfor
                        </span>
                        <i>&nbsp;{{$r->body_text}}</i>
                        <footer class="review_name"> -- {{date('d M Y',substr($r->last_update,0,10) )}}</footer>
                    </blockquote>
                </div>
            </div>
        @endforeach

        @if($num_rows > 0)
            <div class="text-center">{{$reviews->links()}}  &nbsp; <span style="margin-left:4%; padding-top:20px;">Total {{$num_rows}}</span></div>
        @endif

    @endif

<!-- End customer review -->
    <div class="get-started text-center wow fadeInDown">
        <h2>Ready to get started</h2>
        <p class="lead">We would love the opportunity to earn your business&#33; Contact us today to set up your free in-home estimate or 30 point energy evaluation&#33;</p>
        <div class="request">
            <h4><a href="{{url('/contact')}}">Request a free Quote</a></h4>
        </div>
    </div><!--/.get-started-->
</section>

    @stop