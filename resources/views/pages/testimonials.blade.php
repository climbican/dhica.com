@extends('layouts.app')
@section('content')

    <section itemscope="" itemtype="http://schema.org/HomeAndConstructionBusiness">
        <div class="clients-area">
            <header>
                <div class="row">
                    <div class="col-sm-2">&nbsp;</div>
                    <div class="col-sm-8 pull-left">
                        <div class="recent-reviews">Recent Reviews</div>
                        <div class="recent-review-big">What Our Customers Are Saying</div>
                    </div>
                    <div class="col-sm-1">&nbsp;</div>
                </div>
            </header>
            <!--<p class="lead">Please ask us about our wonderful Customer Referral Reward Program. But first, check out some of the many glowing customer testimonials we've received.</p>-->
        </div>
        <div class="row wow fadeInDown" style="margin-bottom:20px;">
            <div class="col-sm-2">&nbsp;</div>
            <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" class="col-sm-8">
                <div class="rating">
                    <span style="font-family: Roboto-Thin;">Overall Customer Rating</span>
                    <span class="review_stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></span>
                    <span class="star_rating"><span itemprop="ratingValue">4.7</span> / 5.0 based on <span itemprop="reviewCount">173</span> reviews</span>
                </div>
            </div>
            <div class="col-sm-2">&nbsp;</div>
        </div>
        <!-- this is the template for the customer reviews -->
        @if($num_rows > 0)
            @foreach ($reviews as $r)
                
                    <blockquote itemprop="review" itemscope="" itemtype="http://schema.org/Review" class="row wow fadeInDown">
                        <div class="col-sm-1">&nbsp;</div>
                        <div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" class="col-sm-2">
                            <img itemprop=”image” src="{{url('images/logo_house.png')}}" alt="distinctive logo" style="height:160px;"/>
                            <div itemProp="author" class="center" style="font-style:italic; color:#696969;">{{$r->reviewer_name}}</div> <!-- reviewerName -->
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                            <span class="review_stars">
                                @for($i=0; $i< $r->stars; $i++)
                                    <i class="icon icon-star"></i>
                                @endfor
                            </span>
                                <meta itemprop="worstRating" content="3.5">
                                <meta itemprop="name" content="windows doors installation">   <span itemprop="ratingValue"><span class="score">{{$r->stars}}</span></span>
                                <i>&nbsp;{{$r->body_text}}</i>
                                <meta itemprop="datePublished" content="{{date('Y-m-d',substr($r->last_update,0,10) )}}">
                                <footer><time datetime="{{date('Y-m-d',substr($r->last_update,0,10) )}}"> -- {{date('d M, Y',substr($r->last_update,0,10) )}}</time></footer>
                            </blockquote>
                        </div>
                    </blockquote>

            @endforeach
                <div class="text-center">{{$reviews->links()}}  &nbsp; <span style="margin-left:4%; padding-top:30px;">Total {{$num_rows}}</span></div>
        @endif
        <!-- End customer review -->
    </section>

@stop