@extends('layouts.app')

@section('content')
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="text-center">
                <h1 class="wow fadeInDown">San Diego Solar Company</h1>
                <h2 class="wow fadeInDown">Photovoltaic Solar Panel Systems</h2>
                <p class="lead">DHI is proud to offer residential roof or ground mounted photovoltaic solar systems that convert the sun’s rays into electricity. Join the thousands of people who have already begun to generate their own power and save money by lowering electric costs and positively impacting our planet with clean energy. There is no better time to get your free 30 point energy audit. Let us show you how you can produce clean energy and save money with a small investment in a photovoltaic solar system!</p>
            </div>
            <hr>
            <div style="margin: 5px;">
                <a class="post__list_item" href="{{url('contact')}}">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="post__title post__title--list wow fadeInDown">Solar Investment Tax Credit</h2>
                            <p class="post__introduction">Reap the many benefits of going solar. You may be eligible for a 30% federal tax credit if you install a solar system at your residence or business. A credit is a dollar-for-dollar reduction on your income taxes, so don’t miss out!</p>
                            <small class="post__details">
                                Get a quote now
                            </small>
                        </div>
                    </div>
                </a>
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

@stop