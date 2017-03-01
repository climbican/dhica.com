<!DOCTYPE html>
<html data-ng-app="materialAdmin" data-ng-controller="materialadminCtrl as mactrl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ledgedog Admin for DHICA</title>

    <!-- Vendor CSS -->
    <link href="{{url('vendors/bower_components/animate.css')}}/animate.min.css" rel="stylesheet">
    <link href="{{url('vendors/bower_components/material-design-iconic-font/dist/css')}}/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="{{url('vendors/bower_components/bootstrap-sweetalert/lib')}}/sweet-alert.css" rel="stylesheet">
    <link href="{{url('vendors/bower_components/angular-loading-bar/src')}}/loading-bar.css" rel="stylesheet">
    <link href="{{url('vendors/bower_components/malihu-custom-scrollbar-plugin')}}/jquery.mCustomScrollbar.min.css" rel="stylesheet">


    <!-- LIST VIEW CSS-->
    <link href="{{url('vendors/bower_components/nouislider/jquery.nouislider.css')}}" rel="stylesheet" />
    <link href="{{url('vendors/farbtastic/farbtastic.css')}}" rel="stylesheet" />
    <link href="{{url('vendors/bower_components/summernote/dist/summernote.css')}}" rel="stylesheet" />
    <link href="{{url('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
    <link href="{{url('vendors/bower_components/chosen/chosen.min.css')}}" rel="stylesheet" />

    <!-- CSS -->
    <link href="{{url('css/app.min.1.css')}}" rel="stylesheet"/>
    <link href="{{url('css/app.min.2.css')}}" rel="stylesheet"/>

</head>
<body class="blue">
<header id="header" data-current-skin="blue"data-ng-controller="headerCtrl as hctrl">
    <ul class="header-inner clearfix">

        <li class="hidden-xs">
            <a href="{{url('/')}}" class="m-l-10" data-ng-click="mactrl.sidebarStat($event)"><img src="{{url('images/logo.png')}}" alt="" height="35px"></a>
        </li>

        <li class="pull-right">
            <ul class="top-menu">
                <li id="blog-list">
                    <a href="{{url('admin/blog/list')}}"><span class="tm-label"><i class="tm-icon zmdi zmdi-comment-list"></i> Blogs</span></a>
                </li>
                <li id="reviews">
                    <a href="{{url('admin/review/list')}}"><span class="tm-label"><i class="zmdi zmdi-collection-text zmdi-hc-fw"></i> Reviews</span></a>
                </li>
                <li id="profile">
                    <a href="{{url('admin/user/list')}}"><span class="tm-label"><i class="zmdi zmdi-account"></i> Profiles</span></a>
                </li>
                <li id="log-out">
                    <a href="{{url('logout')}}"><span class="tm-label"><i class="tm-icon zmdi zmdi-power"></i> Log Out</span></a></li>
            </ul>
        </li>
    </ul>
</header>






@yield('content')
<!-- Core -->
<script src="{{url('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Angular -->
<script src="{{url('vendors/bower_components/angular/angular.min.js')}}"></script>
<script src="{{url('vendors/bower_components/angular-animate/angular-animate.min.js')}}"></script>
<script src="{{url('vendors/bower_components/angular-resource/angular-resource.min.js')}}"></script>

<!-- Angular Modules -->
<script src="{{url('vendors/bower_components/angular-ui-router/release/angular-ui-router.min.js')}}"></script>
<script src="{{url('vendors/bower_components/angular-loading-bar/src/loading-bar.js')}}"></script>
<script src="{{url('vendors/bower_components/oclazyload/dist/ocLazyLoad.min.js')}}"></script>
<script src="{{url('vendors/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js')}}"></script>

<!-- Common Vendors -->
<script src="{{url('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js')}}"></script>
<script src="{{url('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>
<script src="{{url('vendors/bootstrap-growl/bootstrap-growl.min.js')}}"></script>
<script src="{{url('vendors/bower_components/ng-table/dist/ng-table.min.js')}}"></script>


<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="{{url('vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js')}}"></script>
<![endif]-->

<!-- Using below vendors in order to avoid misloading on resolve -->
<script src="{{url('vendors/bower_components/flot')}}/jquery.flot.js"></script>
<script src="{{url('vendors/bower_components/flot.curvedlines')}}/curvedLines.js"></script>
<script src="{{url('vendors/bower_components/flot')}}/jquery.flot.resize.js"></script>
<script src="{{url('vendors/bower_components/moment/min')}}/moment.min.js"></script>
<script src="{{url('vendors/bower_components')}}/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="{{url('vendors/bower_components')}}/flot-orderBars/js/jquery.flot.orderBars.js"></script>
<script src="{{url('vendors/bower_components')}}/flot/jquery.flot.pie.js"></script>
<script src="{{url('vendors/bower_components')}}/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="{{url('vendors/bower_components')}}/angular-nouislider/src/nouislider.min.js"></script>

<script src="{{url('vendors/input-mask/input-mask.min.js')}}" async></script>
<script src="{{url('vendors/bower_components/nouislider/jquery.nouislider.min.js')}}" async></script>
<script src="{{url('vendors/bower_components/moment/min/moment.min.js')}}" async></script>
<script src="{{url('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}" async></script>
<script src="{{url('vendors/bower_components/summernote/dist/summernote.min.js')}}" async></script>
<script src="{{url('vendors/fileinput/fileinput.min.js')}}" async></script>
<script src="{{url('vendors/bower_components/autosize/dist/autosize.min.js')}}"></script>
<script src="{{url('vendors/bower_components/chosen/chosen.jquery.js')}}" async></script>
<script src="{{url('vendors/bower_components/angular-chosen-localytics/chosen.js')}}" async></script>
<script src="{{url('vendors/bower_components/angular-farbtastic/angular-farbtastic.js')}}" async></script>


<!-- App level -->
<script src="{{url('js/app.js')}}"></script>
<script src="{{url('js/controllers/main.js')}}"></script>
<script src="{{url('js/services.js')}}"></script>
<script src="{{url('js/templates.js')}}"></script>
<script src="{{url('js/controllers/ui-bootstrap.js')}}"></script>
<script src="{{url('js/controllers/table.js')}}"></script>


<!-- Template Modules -->
<script src="{{url('js/modules/template.js')}}"></script>
<script src="{{url('js/modules/ui.js')}}"></script>
<script src="{{url('js/modules/charts/flot.js')}}"></script>
<script src="{{url('js/modules/charts/other-charts.js')}}"></script>
<script src="{{url('js/modules/form.js')}}"></script>
<script src="{{url('js/modules/media.js')}}"></script>
<script src="{{url('js/modules/components.js')}}"></script>
<script src="{{url('js/modules/calendar.js')}}"></script>
<script src="{{url('js/modules/demo.js')}}"></script>
<script src="{{url('js/modules/ng-messages.js')}}"></script>

</body>
</html>