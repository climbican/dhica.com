<!DOCTYPE html>
<html class="login-content" data-ng-app="materialAdmin">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DHI Admin</title>

    <!-- Vendor CSS -->
    <link href="{{url('vendors/bower_components/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{url('css/app.min.1.css')}}" rel="stylesheet">
    <link href="{{url('css/app.min.2.css')}}" rel="stylesheet">
</head>

<body class="login-content" data-ng-controller="loginCtrl as lctrl">

@yield('content')

<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1 class="c-white">Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{url('')}}img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<!-- Core -->
<script src="{{url('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Angular -->
<script src="{{url('vendors/bower_components/angular/angular.min.js')}}"></script>
<script src="{{url('vendors/bower_components/angular-resource/angular-resource.min.js')}}"></script>
<script src="{{url('vendors/bower_components/angular-animate/angular-animate.min.js')}}"></script>


<!-- Angular Modules -->
<script src="{{url('vendors/bower_components/angular-ui-router/release/angular-ui-router.min.js')}}"></script>
<script src="{{url('vendors/bower_components/angular-loading-bar/src/loading-bar.js')}}"></script>
<script src="{{url('vendors/bower_components/oclazyload/dist/ocLazyLoad.min.js')}}"></script>
<script src="{{url('vendors/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js')}}"></script>

<!-- Common Vendors -->
<script src="{{url('vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{url('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>
<script src="{{url('vendors/bower_components/angular-nouislider/src/nouislider.min.js')}}"></script>
<script src="{{url('vendors/bower_components/ng-table/dist/ng-table.min.js')}}"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="{{url('vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js')}}"></script>
<![endif]-->

<!-- App level -->
<script src="{{url('js/app.js')}}"></script>
<!--<script src="{{url('')}}/js/config.js"></script>-->
<script src="{{url('js/controllers/main.js')}}"></script>
<script src="{{url('js/services.js')}}"></script>
<script src="{{url('js/templates.js')}}"></script>
<script src="{{url('js/controllers/ui-bootstrap.js')}}"></script>
<script src="{{url('js/controllers/table.js')}}"></script>


<!-- Template Modules -->
<script src="{{url('js/modules/template.js')}}"></script>
<script src="{{url('js/modules/ui.js')}}"></script>
<script src="{{url('js/modules/form.js')}}"></script>
<script src="{{url('js/modules/ng-messages.js')}}"></script>
</body>
</html>
