@extends('layouts.app')

@section('content')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="text-center wow fadeInDown">
                <h1>Energy Efficient Exterior Coatings </h1>
                <h2>Energy Saving Solutions</h2>
                <p class="lead">
                    Distinctive Home Improvements San Diego offers the finest heat reflective products for the exterior coating of your home. Our exterior coatings will not only save you up to 21.9% on cooling costs for your home, but you will also save thousands of dollars over time because you won't ever need to repaint your home.
                    Our exterior coating is 10-20 times thicker than traditional paint and won't chip, flake or peel. Not to mention, it has a Class A Fire Protection, is water repellent and comes with a lifetime manufacturer's warranty.
                </p>
            </div>
        </div><!--/.container-->
        <div class="get-started text-center wow fadeInDown">
            <h3>Ready to get started</h3>
            <p class="lead">We would love the opportunity to earn your business&#33; Contact us today to set up your free in-home estimate or 30 point energy evaluation&#33;</p>
            <div class="request">
                <h4><a href="{{url('contact')}}">Request a free Quote</a></h4>
            </div>
        </div><!--/.get-started-->
    </section><!--/#feature-->

@stop