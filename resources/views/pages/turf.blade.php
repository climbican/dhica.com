@extends('layouts.app')

@section('content')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/residential-window-replacement.jpg); overflow:hidden;">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Windows &#38; Doors</h1>
                                    <h2 class="animation animated-item-2" style="padding-left:15px;">30 POINT ENERGY EVALUATION <br>CALL (619) 857-8388</h2>
                                    <a class="btn-slide animation animated-item-3" href="{{url('replacement-windows/options')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/exterior-coating-san-diego.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Exterior Coating</h1>
                                    <h2 class="animation animated-item-2" style="padding-left:15px; color:#fff;">By TEX COTE A leader in exterior coatings for 55 years.</h2>
                                    <a class="btn-slide animation animated-item-3" href="{{url('services/3')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/residential-solar-bg.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Solar installations</h1>
                                    <h2 class="animation animated-item-2" style="padding-left:15px;">Savings in your wallet and on the environment...</h2>
                                    <a class="btn-slide animation animated-item-3" href="{{url('services/2')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div style="margin: 5px;">
                <a class="post__list_item" href="#">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="post__title post__title--list">Quiet Cool Savings</h2>
                            <p class="post__introduction">
                                When the QuietCool whole house fan is turned on, the fan will pull the cooler outdoor air into your home, through your windows, across your living space, into the attic, and out the attic vents replacing the hot stale air. This helps cool the home and attic by up to 30 degrees, and sometimes more, allowing the home and attic to stay much cooler the following day.
                                When using the QuietCool whole house fan, we recommend starting by cooling the area which will be most occupied. For example, in most family situations, the early evening is spent in the kitchen and family room area. Assuming this to be true, this is where you would want to start cooling.
                                The cool breeze begins when a window or two is opened and the QuietCool fan is turned on. The cooler outside air will immediately begin to create a breeze inside the home making the homeowner feel up to 10 degrees cooler, and sometimes more, instantly.
                            </p>
                            <small class="post__details">
                                February 24, 2016 | dHi | Get a quote now
                            </small>
                        </div>
                    </div>
                </a>
            </div>
            <!-- WITH IMAGE -->
            <div style="margin:5px;">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Use your homes thermal energy</h2>
                            <p class="post__introduction">
                                This breeze will be carried through your home to each QuietCool whole house fan that is on and in use; thus beginning the cooling process. At the same time, the cooler outdoor air will be brought into the attic and pushed through the attic vents causing the hot stale air in the attic to be exhausted. Exhausting the hot air inside your attic will allow your home to stay cooler throughout the day.
                                As it gets later in the evening, and even cooler outside, we recommend opening more windows in other rooms of your home. Then at bedtime, close all the windows in the home except those in the bedrooms that are occupied. This will provide each room with a cool breeze as long as needed. If a QuietCool is installed in each bedroom as we recommended, the homeowner can enjoy the breeze and your privacy with your door closed.
                                Note: When using the QuietCool system, be sure to not open too many windows or open any windows too wide, as this will lessen the cooling breeze that is felt. There is a “sweet spot” when window opening(s) throughout the home are “just right” to cause a nice active breeze to be felt at each open window.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/infographic-home.jpg')}}" alt="quiet cool fans"/>
                        </div>
                    </div>
                </div>
            </div>


            <!-- WITH IMAGE -->
            <div style="margin:5px;" id="single-sliding-window">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Attic fan system</h2>
                            <p class="post__introduction">
                                A “cool mass” home does not reheat as much or as quickly as a “hot mass” home. Within a day or two of installing a QuietCool system, homeowners are amazed when they come home after work… it was 90 – 100 ++ degrees outside, and they walk into a home that is… not 90 degrees, but maybe 72, 74 or 76 degrees.
                                The reason is because the mass of the home has been cooled by the QuietCool system, and thus did not reheat as rapidly throughout the day as a typical home would. The initial reaction from new QuietCool owners is one of amazement and is the reason why so many QuietCool sales are made through referrals.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/es-3100-attic.jpg"')}} alt="Vinyl slingle slider window"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="get-started center wow fadeInDown">
                <h2>Ready to get started</h2>
                <p class="lead">We would love the opportunity to earn your business&#33; Contact us today to set up your free in-home estimate or 30 point energy evaluation&#33;</p>
                <div class="request">
                    <h4><a href="{{url('contact')}}">Request a free Quote</a></h4>
                </div>
            </div><!--/.get-started-->
        </div><!--/.container-->
    </section><!--/#feature-->

@stop