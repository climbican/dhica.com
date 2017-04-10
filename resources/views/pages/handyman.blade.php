@extends('layouts.app')
@section('content')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div style="margin: 5px;">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="post__title post__title--list">Handyman Services</h1>
                            <p class="post__introduction">Distinctive Home Improvements San Diego prides itself in guaranteeing 100% customer satisfaction.  We come across many homeowners, management companies and home owner associations that not only need our major remodeling projects, like replacement windows or PV Solar Systems installed but also need small-to-medium-sized services done as well.  We answer this need with our comprehensive handyman services.  Our qualified and experienced technicians can handle any size job, in any field, from rewiring an outlet, installing a ceiling fan, painting interior space, building a fence or remodeling a bathroom… just to name a few.  We will always treat your home like our own and only leave you with the highest quality craftsmanship guaranteed.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WITH IMAGE -->
            <div style="margin:5px;">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Our handyman can provide a range of services</h2>
                            <p class="post__introduction">
                            <ul>
                                <li><strong>Bathrooms</strong></br>We can do anything from re-grouting your tiles or silicone around your bath to fitting a new bathroom suite and a total remodel.</li>
                                <li><strong>Carpentry</strong><br>
                                    Kitchen Remodeling, Bath Remodeling, Framing, Closets, Molding, Trim, Doors, Closet Doors, Shelving, Counter Top Installation, Laminate Floor Installation, Wood Floor Installation, Cabinet Repairs, Cabinet Installation, Vanity Installation.</li>
                                <li><strong>Drywall Services</strong><br>
                                    Repairs, Patching, Hanging, Taping.</li>
                                <li><strong>Electrical</strong></br>Switches, Dimmers, Outlets, Recessed Lighting, Light Fixture Installation, Ceiling Fans, Ground Fault Outlet Installation.</li>
                                <li><strong>Maintenance</strong></br>Garage Door Repair, Carpentry, Termite Damage Repairs, Tub and shower caulking, Doors, Fences, Weatherproofing, Cabinet Repairs, Gutter Cleaning, Weather stripping, Window caulking, Power Washing, Steam Cleaning, Sprinkler Systems</li>
                                <li><strong>Painting</strong></br>Interior, Exterior, Fences, Garage Doors, Cabinets, Doors, Staining, Caulking</li>
                                <li><strong>Plumbing</strong></br>Leaks Repaired, Faucet Installation, Toilet Repair/Replacement, Faucet Leaks, Shut Off Valves, Kitchens, Toilet Repairs, Shower Repairs, Handicap Grab Bars Installed</li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/services/handyman-belt-bucket.jpg')}}" alt="Handyman Services"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTENT ONLY!! -->
            <!-- WITH IMAGE -->
            <div style="margin:5px;" id="Electrical">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Home Electrical Repair Services</h2>
                            <p class="post__introduction">From time to time homeowners have small projects involving wiring and electrical components. When it feels like calling in an electrician is overkill, call Mr. Handyman instead. We professionally install electric appliances like ceiling fans and fix problems with light switches, dimmers and household lighting fixtures. </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/services/outlet-installation.jpg')}}" alt="Outlet installation" title="electrical image"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WITH IMAGE -->
            <div style="margin:5px;" id="plumbing">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Plumbing Repair Services</h2>
                            <p class="post__introduction">From basic repair of leaky faucets to shower enclosure installations we have you covered. </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/services/plumbing-repair.jpg')}}" alt="Plumbing Services" title="Welding Copper pipe in bathroom"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WITH IMAGE -->
            <div style="margin:5px;" id="carpentry">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Carpentry Services</h2>
                            <p class="post__introduction">Need cabinets installed? Let us give you a hand.</p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/services/carpentry.jpg')}}" alt="vinyl single hung windows"/>
                        </div>
                    </div>
                </div>
            </div>
        <!-- with image
            <div style="margin:5px;" id="awning-window">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Awning Windows</h2>
                            <p class="post__introduction">Awning replacement windows have one glass panel that is hinged at the top and swing open from the bottom. Awnings are frequently used so you can have a maximum clear view, but still have ventilation available below.</p>
                            <small class="post__details">
                                <a href="http://anlin.com/brochures_us.aspx" style="text-decoration:none;">February 24, 2016 | Anlin | Product PDF  &nbsp; <img src="{{url('images/ico/pdf.png')}}" height="30px" alt="pdf icon"/></a>
                            </small>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/awning_window.jpg')}}" alt="awning window"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WITH IMAGE --
            <div style="margin:5px;" id="bay-bow-window">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Bay Bow Windows</h2>
                            <p class="post__introduction">Bay & Bow replacement windows are made using any combination of Picture, Double Hung and Casement windows  Bay & Bow replacement windows can dramatically improve the appearance and value of your home. They practically bring the outdoors right inside.</p>
                            <small class="post__details">
                                <a href="http://anlin.com/brochures_us.aspx" style="text-decoration:none;">February 24, 2016 | Anlin | Product PDF  &nbsp; <img src="{{url('images/ico/pdf.png')}}" height="30px" alt="pdf icon"/></a>
                            </small>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/bay_bow_window.jpg')}}" alt="bay bow window"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WITH IMAGE --
            <div style="margin:5px;" id="garden-window">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Garden Windows</h2>
                            <p class="post__introduction">Garden replacement windows offer a popular way to brighten a kitchen or bathroom, opening the room to more sunlight and providing a plant or knick-knack shelf.</p>
                            <small class="post__details">
                                <a href="http://anlin.com/brochures_us.aspx" style="text-decoration:none;">February 24, 2016 | Anlin | Product PDF  &nbsp; <img src="{{url('images/ico/pdf.png')}}" height="30px" alt="pdf icon"/></a>
                            </small>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/garden_window.jpg')}}" alt="garden window"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WITH IMAGE --
            <div style="margin:5px;" id="picture-window">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Picture Windows</h2>
                            <p class="post__introduction">Picture windows have one glass panel that does not open, but that is designed for one purpose: to open your home up to the beauty of the outdoors. Picture windows are frequently combined with other windows that do open, such as sliders, single or double hung, or casement windows located on either or both sides of the picture window.</p>
                            <small class="post__details">
                                <a href="http://anlin.com/brochures_us.aspx" style="text-decoration:none;">February 24, 2016 | Anlin | Product PDF  &nbsp; <img src="{{url('images/ico/pdf.png')}}" height="30px" alt="pdf icon"/></a>
                            </small>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/picture_window.jpg')}}" alt="replacement picture window"/>
                        </div>
                    </div>
                </div>
            </div>-->
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