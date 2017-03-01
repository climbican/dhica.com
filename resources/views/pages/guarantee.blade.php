@extends('layouts.app')

@section('content')

    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="text-center wow fadeInDown">
                <h2>Distinctive Home Improvements Guarantee</h2>
                <h3>FREE 30 POINT ENERGY AUDIT</h3>
                    <p>DHI’s energy saving tool for your entire home. Our consultants will evaluate your home and educate you on how you can save more energy throughout your home. On average you will save at least 10-15 percent.</p>
                <h3>QUALITY CUSTOMER SERVICE</h3>
                    <p>Understanding our clients’ needs is our main focus. Our team is there from beginning to end, with you at every step of the process to make sure everything is done the right way and make your home a "Distinctive" home.</p>
                <h3>PROFESSIONAL INSTALLATION</h3>
                <p>All of our in-house installers are carefully chosen and have completed extensive training to ensure a skilled, clean, timely and professional installation.</p>
                <h3>Anlin WINDOWS LIFETIME WARRANTY</h3>
                <p>Which comes automatically with all our window products, we provide a  <strong>Lifetime Installation Warranty</strong>  to the original buyer, which includes labor and all parts used during installation.</p>
            </div>
            <hr>
        </div>
        <div class="get-started center wow fadeInDown">
            <h2>Ready to get started</h2>
            <p class="lead">We would love the opportunity to earn your business&#33; Contact us today to set up your free in-home estimate or 30 point energy evaluation&#33;</p>
            <div class="request">
                <h4><a href="{{url('contact')}}">Request a free Quote</a></h4>
            </div>
        </div><!--/.get-started-->
    </section><!--/#feature-->

@stop