<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>CoreUI Bootstrap </title>
    <!-- Icons -->
    <link href="{{asset('dash/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dash/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{asset('dash/dest/style.css')}}" rel="stylesheet">
</head>
<!-- BODY options, add following classes to body to change options
		1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
		2. 'sidebar-nav'		  - Navigation on the left
			2.1. 'sidebar-off-canvas'	- Off-Canvas
				2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
				2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
		3. 'fixed-nav'			  - Fixed navigation
		4. 'navbar-fixed'		  - Fixed navbar
	-->

<body class="navbar-fixed sidebar-nav fixed-nav">
@include('layouts.haedar')
@include('layouts.aside')
<!-- Main content -->
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">الرئيسية</li>
        <li class="breadcrumb-item"><a href="#">الخدمات الالكترونية</a>
        </li>
        <li class="breadcrumb-item active">اتصل بنا</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;الرئيسية</a>
                <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;تنظیمات</a>
            </div>
        </li>
    </ol>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                 @yield('ss')
                </div>
            </div>
        </div>




    <!--/.container-fluid-->
</main>



@include('layouts.asidee')

@include('layouts.footer')
<!-- Bootstrap and necessary plugins -->
<script src="{{asset('dash/js/libs/jquery.min.js')}}"></script>
<script src="{{asset('dash/js/libs/tether.min.js')}}"></script>
<script src="{{asset('dash/js/libs/bootstrap.min.js')}}"></script>
<script src="{{asset('dash/js/libs/pace.min.js')}}"></script>

<!-- Plugins and scripts required by all views -->
<script src="{{asset('dash/js/libs/Chart.min.js')}}"></script>

<!-- CoreUI main scripts -->

<script src="{{asset('dash/js/app.js')}}"></script>

<!-- Plugins and scripts required by this views -->
<!-- Custom scripts required by this view -->
<script src="{{asset('dash/js/views/main.js')}}"></script>

<!-- Grunt watch plugin -->
<script src="{{asset('dash/localhost:35729/livereload.js')}}"></script>
</body>

</html>
