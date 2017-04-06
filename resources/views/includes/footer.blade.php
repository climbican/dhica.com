</div><!-- END PAGE CONTENTS -->
</section><!-- END PAGE SECTION -->
<!--THIS IS FOR THE ROCKET THAT SENDS USER BACK TO THE TOP -->
<div id="back-2-top" class="back-2-top-rocket" data-scroll-distance="75" data-easing="easeInCubic">
    <img src="{{url('images/rocket-idle.png')}}" id="rocket-idle" alt="rocket-idle">
    <img src="{{url('images/rocket-blast.png')}}" id="rocket-blast" alt="rocket-idle" style="display: none;">
</div>

</div>
<section id="bottom"> <!-- TODO: address white median borders   style="background-color:#F1F1F1;"  -->
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="{{url('about')}}">About us</a></li>
                        <li><a href="{{url('hiring')}}">We are hiring</a></li>
                        <li><a href="{{url('privacy-policy')}}">Privacy policy</a></li>
                        <li><a href="{{url('contact')}}">Contact us</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="{{url('faq')}}">Faq</a></li>
                        <li><a href="https://blog.dhica.com">Blog</a></li>
                        <!--<li><a href="http://localhost/dhica.com/publicfederal_credits">Federal Tax Credits</a></li>-->
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>Our Partners</h3>
                    <ul>
                        <li><a href="http://www.anlin.com/">Anlin Windows</a></li>
                        <li><a href="http://www.monteverdewindows.com/">Monte Verde</a></li>
                        <li><a href="http://globalsynturf.com">Global Syn-Turf</a></li>
                        <li><a href="http://quietcoolsystems.com">Quiet Cool</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->
<!-- ##################   THIS IS THE FOOTER THAT GOES ON ALL THE PAGES ############### -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <div>&copy; 2016 <a target="_blank" href="https://dhica.com/" title="Windows doors and solar" itemprop="url"><span itemprop="name">Distinctive Home improvements</span></a>. All Rights Reserved. </div>
                <div>CA Lic #807753</div>
                <div itemprop="streetAddress">9235 Trade Place Ste G</div>
                <div><span itemprop="addressLocality">San Diego</span>,<span itemprop="adressRegion">CA</span> <span itemprop="postalCode">92126</span></div>
                <div itemprop="telephone"><a href="tel:6198578388">Phone: (619) 857-8388</a></div>
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="{{url('')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="{{url('faq')}}">Faq</a></li>
                    <li><a href="{{url('testimonials')}}">Testimonials</a></li>
                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer><!--/#footer-->
@if(isset($active['anchor']) && $active['anchor'] !== '')
    <script> document.getElementById('{{$active['anchor']}}').scrollIntoView();</script>
@endif
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-86994917-1', 'auto');
    ga('send', 'pageview');

</script>

<script src="{{url('plugin/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('plugin/jquery-easing/jquery.easing.js')}}" type="text/javascript"></script>
<script src="{{url('plugin/owl-carousel/owl.carousel.js')}}" type="text/javascript"></script>
<script src="{{url('js/jquery.isotope.min.js')}}"></script>
<script src="{{url('js/wow.min.js')}}"></script>
<script src="{{url('js/solid-menu.js')}}" type="text/javascript"></script>
<script src="{{url('js/main.js')}}" type="text/javascript"></script>
<script src="{{url('js/jquery.prettyPhoto.js')}}"></script>

</html>