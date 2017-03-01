@extends('layouts.app')

@section('content')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Residential Roofing </h2>
                <p class="lead">Installing new roofs or solar panels, energy efficient windows and door always makes us happy. We know that owners will benefit from the energy savings for years to come.</p>
            </div>
            <hr>
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