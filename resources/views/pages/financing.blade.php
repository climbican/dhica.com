@extends('layouts.app')

@section('content')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="text-center wow fadeInDown" style="margin-top:40px;margin-bottom:60px;">
                <h2>Financing Options</h2>
                <p class="lead">DHI is proud to offer various energy efficiency financing programs. –
                    save big on your monthly energy bills and boost the value of your most important investment.</p>
            </div>
            </hr>
            <div class="post__list_item">
                <div class="row" style="margin-top:-35px;">
                    <div class="col-md-12">
                        <h2 id="hero-financing" class="post__title post__title--list">H.E.R.O. </h2>
                        <p class="post__introduction">The Home Energy Renovation Opportunity <a href="https://www.heroprogram.com">H.E.R.O. Financing(HERO)</a> Program makes purchasing and installing eligible energy-efficient and water-saving upgrades more affordable for homeowners.  </p>
                        <small class="post__details">
                            February 24, 2016 | dHi | <a href="{{url('contact')}}">Get a quote now</a>
                        </small>
                    </div>
                </div>
            </div>
            <!-- CONTENT ONLY!! -->
            <div class="post__list_item">
                <div class="row">
                    <div class="col-md-12">
                        <h2 id="ygreen-financing" class="post__title post__title--list">Ygrene FINANCING</h2>
                        <p class="post__introduction">Ygrene Energy Fund is a leading provider of clean energy financing for residential and commercial properties throughout the United States. The award winning, privately funded <a href="https://ygreneworks.com">YgreneWorks&#174;</a> program provides immediately accessible financing for energy efficiency, renewable energy, water conservation and, in certain areas, hurricane protection, electric vehicle charging stations and seismic upgrades.</p>
                        <small class="post__details">
                            February 24, 2016 | dHi | <a href="{{url('contact')}}">Get a quote now</a>
                        </small>
                    </div>
                </div>
            </div>

            <!-- CONTENT ONLY!! -->
            <div class="post__list_item">
                <div class="row">
                    <div class="col-md-12">
                        <h2 id="cal-first-financing" class="post__title post__title--list">CALFIRST</h2>
                        <p class="post__introduction"><a href="https://www.calfirst.com/">CalFirst Commercial Finance ("CalFirst Finance")</a> provides lease and loan financing alternatives through customer-driven,
                            service-oriented origination groups to businesses and organizations throughout the United States. With a focus on high technology and other capital assets,
                            leasing solutions are delivered cost effectively through the innovative use of telecommunications, the Internet and express delivery services.</p>
                        <small class="post__details">
                            February 24, 2016 | dHi | <a href="{{url('contact')}}">Get a quote now</a>
                        </small>
                    </div>
                </div>
            </div>

            <!-- CONTENT ONLY!! -->
            <div class="post__list_item">
                <div class="row">
                    <div class="col-md-12">
                        <h2 id="synchrony-financing" class="post__title post__title--list">SYNCHRONY</h2>
                        <p class="post__introduction"><a href="https://www.mysynchrony.com/mysyf/home.html"> Synchrony Financial:</a>  The Synchrony Financial Home Design credit card finances almost everything for, in, on, and around the home—from furnishings, to appliances, to home improvement projects. They offer many financing programs to choose from.  </p>
                        <small class="post__details">
                            February 24, 2016 | dHi | <a href="{{url('contact')}}">Get a quote now</a>
                        </small>
                    </div>
                </div>
            </div>
            <!-- CONTENT ONLY!! -->
            <div class="post__list_item" id="enerbank-financing">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="post__title post__title--list">ENERBANK</h2>
                        <p class="post__introduction"><a href="https://enerbank.com/"> EnerBank USA:</a>  From Same-As-Cash to traditional monthly financing options.</p>
                        <small class="post__details">
                            February 24, 2016 | dHi | <a href="{{url('contact')}}">Get a quote now</a>
                        </small>
                    </div>
                </div>
            </div>
            <!-- CONTENT ONLY!! -->
            <div class="post__list_item" id="greensky-financing">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="post__title post__title--list">GREENSKY</h2>
                        <p class="post__introduction"><a href="https://www.greenskycredit.com/">The GreenSky®:</a> programs offer flexible consumer financing options to meet various needs.</p>
                        <small class="post__details">
                            February 24, 2016 | dHi | <a href="{{url('contact')}}">Get a quote now</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
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