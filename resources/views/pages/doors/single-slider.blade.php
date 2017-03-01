@extends('layouts.app')

@section('content')

    @include('includes.door-type-slider')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <!-- WITH IMAGE -->
            <div style="margin:5px;" id="sliding-patio-doors">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Sliding Patio Doors</h2>
                            <p class="post__introduction"> Sliding Patio Doors have 2, 3 or 4 panels with at least one operable and one fixed panel.  They  can slide from left to right or right to left depending on your preference.  </p>
                            <small class="post__details">
                                <a href="http://anlin.com/brochures_us.aspx" style="text-decoration:none;">February 24, 2016 | Anlin | Product PDF  &nbsp; <img src="{{url('images/ico/pdf.png')}}" height="30px" alt="pdf icon"/></a>
                            </small>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{url('images/assets/vinyl-patio-doors-sliding-hero.jpg')}}" alt="vinyl sliding patio doors"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WITH IMAGE -->
            <div style="margin:5px;">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="post__title post__title--list">Anlin Door construction</h2>
                            <p class="post__introduction">The details make all the difference</p>
                            <ol class="small_inside_list">
                                <li><strong>Patented 14-Layer Solar Reflective Coating</strong><br>
                                    Keeps the sun's heat from transmitting through the window into your home on hot, sunny days blocking 95% of harmful UV rays.</li>
                                <li><strong>Patented Multi-Layer Heat Retention Coating</strong><br>
                                    Keeps your home's interior heat from transmitting through the window out of your home when it's cold outside.</li>
                                <li><strong>Platinum Elite Warm Edge Spacer</strong><br>
                                    Multi-chambered structural silicone foam spacer is a powerful insulator – the most advanced and efficient spacer on the market.</li>
                            </ol>
                            </p>
                            <small class="post__details">
                                <a href="http://anlin.com/_downloads/AnlinCatalinaQTBrochure.pdf" style="text-decoration:none;">February 24, 2016 | Anlin | Product PDF &nbsp; <img src="{{url('images/ico/pdf.png')}}" height="30px" alt="pdf icon"/> </a>
                            </small>
                        </div>
                        <div class="col-md-4">
                            <img  class="img-responsive" src="{{url('images/assets/quadratherm-pane.png')}}" alt="quadratherm pane window"/>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTENT ONLY!! -->
            <div style="margin: 5px;">
                <div class="post__list_item">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="post__title post__title--list">Colour options need to work on this section</h3>
                            <p class="post__introduction">Choose a color that makes your house look realy really cool. </p>
                            <div class="row color_palette">
                                <div class="col-sm-2 black" >&nbsp;</div>
                                <div class="col-sm-2 ac-bronze" >&nbsp;</div>
                                <div class="col-sm-2 silver">&nbsp;</div>
                                <div class="col-sm-2 cl-gray">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">Architectural Black</div>
                                <div class="col-sm-2">Architectural Bronze</div>
                                <div class="col-sm-2">Architectural Silver</div>
                                <div class="col-sm-2">Classic Gray</div>
                            </div>
                            <div class="row color_palette">
                                <div class="col-sm-2 espresso">&nbsp;</div>
                                <div class="col-sm-2 taupe">&nbsp;</div>
                                <div class="col-sm-2 red-pepper">&nbsp;</div>
                                <div class="col-sm-2 rose-wood">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">Espresso</div>
                                <div class="col-sm-2">Taupe</div>
                                <div class="col-sm-2">Red Pepper</div>
                                <div class="col-sm-2">Rose Wood</div>
                            </div>
                            <div class="row color_palette">
                                <div class="col-sm-2 desert-tan">&nbsp;</div>
                                <div class="col-sm-2 sand-stone">&nbsp;</div>
                                <div class="col-sm-2 divine-wine">&nbsp;</div>
                                <div class="col-sm-2 forest-green">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">Desert Tan</div>
                                <div class="col-sm-2">Sandstone</div>
                                <div class="col-sm-2">Divine Wine</div>
                                <div class="col-sm-2">Forest Green</div>
                            </div>
                        </div>
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

@endsection