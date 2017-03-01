@extends('layouts.app')

@section('content')

<!--   ##############################  START CONTENT  ###################################### -->
<!--   ##############################  START CONTENT  ###################################### -->
<!--   ##############################  START CONTENT  ###################################### -->

<section id="contact-info">
    <div class="row">
        <div class="col-lg-12" style="margin-left:3%;">
            <h2>Call or email us today</h2>
            <p class="lead">Get your free 30 point energy evaluation or project estimate.</p>
        </div>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.2562257768814!2d-117.15513734956929!3d32.8913931853589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc0064fc332f8b%3A0x330766b657e1625!2sDistinctive+Home+Improvements!5e0!3m2!1sen!2sus!4v1450385873524" width="400" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5>Main Office</h5>
                                <p>CA License # 807753</p>
                                <p>9235 Trade Place Ste G<br>
                                    San Diego, CA 92126</p>
                                <p>Phone: (619) 857-8388</p>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->

<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Drop Your Message</h2>
            <p class="lead">We will have a sales associate contact you as soon as possible..</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="dhica_contact" class="contact-form" name="dhica_contact" method="post" action="{{url('sendmail')}}">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" placeholder="my name" autofocus/>
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="email@site.com" required="required">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" id="phone" placeholder="xxx xxx xxxx" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="companyName" id="companyName" placeholder="Company xx" class="form-control">
                    </div>
                    {!! app('captcha')->display() !!}
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Subject *</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="subject" required="required">
                    </div>
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</section><!--/#contact-page-->
<!--   ###############################  END CONTENT  ##################################### -->
<!--   #################################################################### -->
<!--   #################################################################### -->

@stop