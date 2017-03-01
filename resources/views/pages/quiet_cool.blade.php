@extends('layouts.app')

@section('content')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div style="margin: 5px;">
                <a class="post__list_item" href="#">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="post__title post__title--list">How the QuietCool Whole House Fan Works</h2>
                            <p class="post__introduction">
                                When the QuietCool whole house fan is turned on, the fan draws cooler outdoor air into your home, through your windows, across your living space, into the attic, and out the attic vents - circulating out the hot stale air. This helps cool the home and attic by up to 30 degrees or more, allowing the home and attic to stay much cooler the following day. When using the QuietCool whole house fan, we recommend focusing on cooling the area that tends to be the most occupied.</p>
                            <p>
                                For example, in most family situations, the early evening is primarily spent in the kitchen and family room area. Assuming this to be true, this is where you would want to start cooling. The cool breeze begins when a window or two is opened and the QuietCool fan is turned on. The cooler outside air will immediately begin to create a breeze sensation inside the home creating an atmosphere that can be up to 10 degrees cooler, and sometimes more, instantly.
                            </p>
                            <small class="post__details">
                               August 15, 2016 | dHi | Get a quote now
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
                            <h2 class="post__title post__title--list">Regulate Home Cooling and Ventilation</h2>
                            <p class="post__introduction">
                                The cool air drawn in by the QuietCool whole house fan helps to regulate the flow of cool/heated air within your home. As cool air is drawn in, the hot air rises and is flushed out via the attic ventilation. The constant cycling of fresh air keeps your home cool and your energy bills down. As the evening progresses cools down, we recommend opening up more windows within your home. Then at bedtime, close all of the windows except those in the rooms that are occupied. This will provide each room with the necessary cooling breeze. If a QuietCool is installed in each bedroom, as recommended, occupants can enjoy the cool breeze with the door shut for privacy.</p>
                            <p>
                                Note: When using the QuietCool system, be sure to not open too many windows or any windows “too wide” as this could lessen the cooling breeze effect. There is a “sweet spot” when window opening(s) throughout the home are “just right” to cause a nice active breeze to be felt at each open window. Finding this “sweet spot” takes a little time and effort.
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
                            <h2 class="post__title post__title--list">Attic Fan System → Feel the QuietCool Difference</h2>
                            <p class="post__introduction">
                                A “cool mass” home does not reheat as much or as quickly as a “hot mass” home. Within a day or two of installing a QuietCool system, homeowners are amazed when they come home after work… it was 90 – 100 ++ degrees outside, and they walk into a home that is… not 90 degrees, but maybe 72, 74 or 76 degrees.</p>    
                            <p>
                                The reason is because the mass of the home has been cooled by the QuietCool system, and thus did not reheat as rapidly throughout the day as a typical home would. The initial reaction from new QuietCool owners is one of amazement and is the reason why so many QuietCool sales are made through referrals.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/es-3100-attic.jpg')}}" alt="Vinyl slingle slider window"/>
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

@stop