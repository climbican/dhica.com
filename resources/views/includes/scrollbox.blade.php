<script>
    //var active = true;

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*1*60*60*1000));  /** set # of hours **/
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/"; /** domain=.ledgedog.com; **/
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie(cname) {
        var cookieName = getCookie(cname);

        if (cookieName !== "") {
            return true;
        }
        else {
            return false;
        }
    }

    jQuery(document).ready(function($) {
        //TODO: maybe test more the resize function, only problem is that the script will also need to check for the window already being open and close it on small size.
        //window.addEventListener("resize", function () {
        /**
         * -------------------------------
         * THIS CHECKS FOR OS TO BE MAC, WIN OR LINUX AND WINDOW SIZE GREATER THAN 1000 PX WIDE ON THE BROWSER.
         */
        if((checker.os.mac == "Macintosh" || checker.os.win == 'Windows' || checker.os.linux == 'Linux') && window.innerWidth > 1000){

            if(!checkCookie('formActive')){
                setCookie('formActive', true, 1);
            }

            $(function() {
                // Set this variable with the desired height
                var offsetPixels = 670;

                $(window).scroll(function() {

                    if ($(window).scrollTop() > offsetPixels) {
                        var cookieVal = getCookie('formActive');

                        if( cookieVal === "true"){
                            $( ".scrollingBox" ).css({
                                "position": "fixed",
                                "bottom": "100px",
                                "right": "5px",
                                "background-color":"#fff",
                                "visibility": "visible",
                                "opacity":"1"
                            });
                        }
                    } else {
                        $( ".scrollingBox" ).css({
                            "position": "fixed",
                            "bottom": "-500px",
                            "opacity":"0"
                        });
                    }
                });
            });
        }
        //});





    }); //end docuemtn ready


    function closeBox(){
        setCookie('formActive', false, 30);

        $(".scrollingBox").css({
            "position":"fixed",
            "visibility": "hidden",
            "bottom": "-500px"
        });
    }

    function formatPhone(obj) {
        var numbers = obj.value.replace(/\D/g, ''),
            char = { 0: '(', 3: ') ', 6: ' - ' };
        obj.value = '';
        for (var i = 0; i < numbers.length; i++) {
            obj.value += (char[i] || '') + numbers[i];
        }
    }


</script>

<style>
    .scrollingBox {
        padding:5px;
        width: 325px;
        opacity:0;

        transition: all 1s ease-in-out;
        -webkit-transition: all 1s ease-in-out; /** Chrome & Safari **/
        -moz-transition: all 1s ease-in-out; /** Firefox **/
        -o-transition: all 1s ease-in-out; /** Opera **/

        visibility: hidden;
        position:absolute;
        bottom: -300px;
    }

    .scrollingBox img{
        height:30px;
    }

    .scrollingBox textarea{
        height: 50px;
        width: 300px;
    }

    .scrollingBox input[type='text'],input[type='email'],input[type='number']{
        width:300px;
    }

    .scrollingBox h4 {
        margin-left: 40px;
        margin-top: 5px;
        vertical-align: middle;
        color: black;
        size:.4em;
    }

    .scrollingBox .overlay{

    }
    i:hover{
        curser:pointer;
    }
    i:after{
        border:none;
        background:transparent;
    }

</style>
<script src='https://www.google.com/recaptcha/api.js'></script>


<div class="scrollingBox"><!-- style="border:1px dashed darkblue;" -->
    <div class="row"><span class="no-border" style="float:left;border:none;"><span onclick="closeBox()" style="background:transparent; border:none;"><i class="icon-line2-close icon-2x" style="color: #3F729B;margin-left:15px; margin-top:-5px;"></i></span></span>
        <span style="float:left;"><h4>Request A Quote</h4></span>
    </div>
    <div class="row" style="width:345px; margin:5px; ">
        <div id="status_box" class="status alert alert-success" style="display:none;z-index:100;position:absolute;"></div>
        <form id="scroll-contact-form" class="contact-form" name="scroll-contact-form" method="post" action="{{url('sendMailMini')}}">
            <div class="form-group">
                <label>Name *</label>
                <input type="text" name="name" id="name" class="form-control" required="required" placeholder="my name" minlength="3" maxlength="30" autofocus/>
            </div>
            <div class="form-group">
                <label>Email *</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@site.com" minlength="10" maxlength="50" required="required">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" name="phone" id="phone" placeholder="xxx xxx xxxx" class="form-control" minlength="7" maxlength="11">
            </div>
            <div class="form-group">
                <label>Message *</label>
                <textarea name="message" id="message" required="required" class="form-control" rows="8" minlength="10" maxlength="100"></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6LcU8B4TAAAAAN0yN5p72aA-RykDIcpEp7Cf9C55" style="transform:scale(0.7);-webkit-transform:scale(0.7);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
            <div class="form-group" style="margin-top:10px;">
                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Send</button>
            </div>
        </form>
    </div>
</div>