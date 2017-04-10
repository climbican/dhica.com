@extends('layouts.app')

@section('content')

    <div id="row-carousel">
        <div id="main-carousel" class="owl-carousel owl-animate owl-theme owl-custom-nav" data-single-item="true" data-navigation="true" data-autoplay="8000" data-transition="slideLeft">
            <!-- SLIDE ONE -->
            <div class="item text-left">
                <div class="jumbotron no-border-radius pad-top-0-sm overlay">
                    <h1 class="margin-10px-xs animation animated-item-1"> Synthetic Lawn </h1>
                    <button class="btn btn-lg btn-danger animation animated-item-3" onclick="window.location.href='{{url("contact")}}'"> Get a quote now </button>
                </div>
                <img src="{{url('images/slider/syn-lawn-landscape.jpg')}}" alt="image" class="img-responsive" style="width:100vw;">
            </div>
            <!-- SLIDE TWO -->
            <div class="item text-left">
                <div class="jumbotron no-border-radius pad-top-0-sm overlay">
                    <h1 class="margin-10px-xs animation animated-item-1"> Riverside Lawn </h1>
                    <button class="btn btn-lg btn-danger animation animated-item-3" onclick="window.location.href='{{url("contact")}}'"> Get a quote now </button>
                </div>
                <img src="{{url('images/slider/syn-lawn-landscape2.jpg')}}" alt="image" class="img-responsive" style="width:100vw;">
            </div>
        </div>
    </div>
    <!-- END CAROSEL -->

    <section id="feature" class="transparent-bg" style="margin-top:-50px;"> <!--NEED TO MOVE TO THE STYLESHEET AND ENSURE THA TTHE MOBILE STYLE IS THERE AS WELL -->
        <div class="container">
            <div style="margin: 5px;">
                <a class="post__list_item" href="#">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="post__title post__title--list">Global Syn Lawn</h2>
                            <p class="post__introduction">
                                Everyone knows California has drought issues and as a home owner you are most likely torn between having beautiful curb appeal and wanting to be environmentally conscious.  Distinctive Home Improvements has the answer… synthetic grass and zero landscaping!
                            </p>
                            <p class="post__introduction">Natural grass looks amazing when it’s healthy but it is resource intensive, often requiring a lot of time, money, and water. Synthetic turf is a maintenance-free alternative to traditional grass lawns that looks amazing year after year.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- WITH IMAGE -->
            <div style="margin:5px;">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Syn Lawn Benefits</h2>
                            <p class="post__introduction">
                                <ul>
                                    <li>No watering, mowing or edging needed </li>
                                    <li>Without the need for fertilizers or weed chemicals you are lowering environmental pollutants</li>
                                    <li> No dry or dead spots due to pet urine</li>
                                    <li>Properly installed turf has excellent drainage to dry the lawn quickly after rain or washing</li>
                                    <li>Excellent drainage also means no unexpected soppy or muddy patches for the unwary to step in</li>
                                    <li>Turf is long lasting and durable so you won’t incur periodic replanting hassle or expense
                                        and because of its durability playing sports or with pets on the lawn will not damage it</li>
                                    <li>Turf is so durable many dog kennels use it because it cannot be dug up and it’s easy to clean and keep sterile not to mention no muddy paws</li>
                                    <li> Best of all your lawn looks perfectly manicured all the time with very minimal effort</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/syn-turf-kids.jpg')}}" alt="synthetic lawn" title="Kids on synthetic lawn"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WITH IMAGE -->
            <div style="margin:5px;">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="post__title post__title--list">Make the difference</h3>
                            <p class="post__introduction">
                                Distinctive Home Improvements offers many different types of turf for many different landscaping features starting from your entire yard to walk ways, dog runs and kennels, rooftops, decks, decorative beds and even putting greens.  We offer the best synthetic turf from the leader in synthetic turf, Global Syn-Turf, and installed by Experience the Difference: excellent in house installers.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/backyard-syn-lawn.jpg')}}" alt="Cross Section" title="Synthetic Turf Cross Section"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
        <div class="get-started text-center wow fadeInDown">
            <h2>Ready to get started</h2>
            <p class="lead">We would love the opportunity to earn your business&#33; Contact us today to set up your free in-home estimate or 30 point energy evaluation&#33;</p>
            <div class="request">
                <h4><a href="{{url('contact')}}">Request a free Quote</a></h4>
            </div>
        </div><!--/.get-started-->
    </section><!--/#feature-->
    @include('includes.scrollbox')
@stop