<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-8">
        <div style="float:left; width:22%;">
                    <span>
                        <a href="https://www.yelp.com/biz/distinctive-home-improvements-san-diego" style="text-decoration:none; color:#000;">
                            <img src="{{url('images/partners/yelp-logo-large@2x.png')}}" height="60px" alt="none">
                        </a>
                    </span>
            <span>
                        <div>Total ratings:  {{$yelp_review->review_count }}</div>
                        <div>Average Rating: {{$yelp_review->rating }}</div>
                    </span>
        </div>
        <div style="float:right; width:78%;">
            <a href="https://www.yelp.com/biz/distinctive-home-improvements-san-diego" style="text-decoration:none; color:#000;">
                <div class="yelp_person_image" style="float:left; width:29%;">
                    <img src="{{$yelp_review->snippet_image_url }}"/>
                </div>
                <div style="float:right; width:70%;">
                    <div ><img src="{{$yelp_review->rating_img_url }}"/> </div>
                    <div>{{$yelp_review->reviews[0]->user->name }}</div>
                    <div>{{$yelp_review->snippet_text }}</div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-2">&nbsp;</div>
</div>