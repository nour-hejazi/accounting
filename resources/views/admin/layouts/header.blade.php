<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		@if(isset($title))
			{{ $title }}
		@else
			{{ "لوحة التحكم" }}
		@endif
	</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/font-awesome/css/font-awesome.min.css') }}">

	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/Ionicons/css/ionicons.min.css') }}">

	{{--iCheck--}}
	<link rel="stylesheet" href="{{ url('design/adminLTE/plugins/iCheck/all.css') }}">



	{{--MAIN CSS--}}
	<link rel="stylesheet" href="{{ url('css/css.css') }}">

	<!-- Theme style -->
	{{--ENGLISH LTR--}}
	{{--<link rel="stylesheet" href="{{ url('/design/adminLTE/dist/css/AdminLTE.min.css') }}">--}}
	<link rel="stylesheet" href="{{ url('/design/adminLTE/dist/css/rtl/AdminLTE.css') }}">
	<link rel="stylesheet" href="{{ url('/design/adminLTE/dist/css/rtl/bootstrap-rtl.min.css') }}">
	<link rel="stylesheet" href="{{ url('/design/adminLTE/dist/css/rtl/rtl.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Cairo:300,400&display=swap&subset=arabic,latin-ext"
	      rel="stylesheet">
	<style type="text/css">
		html, body, h1, h2, h3, h4, .alert {
			font-family: 'Cairo', sans-serif;
		}
	</style>


	<!-- AdminLTE Skins. Choose a skin from the css/skins
			 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/dist/css/skins/_all-skins.min.css') }}">

	<!-- Morris chart -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/morris.js/morris.css') }}">

	<!-- jvectormap -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/jvectormap/jquery-jvectormap.css') }}">

	<!-- Date Picker -->
	<link rel="stylesheet"
	      href="{{ url('/design/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">

	<!-- Daterange picker -->
	<link rel="stylesheet"
	      href="{{ url('/design/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">

	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet"
	      href="{{ url('/design/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<![endif]-->

	{{--seect2--}}
	<link rel="stylesheet" href="{{url('design/adminLTE/bower_components/select2/dist/css/select2.min.css')}}">

	{{--DATATABLES--}}
	{{--<link rel="stylesheet" href="{{ url('design/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">--}}
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


	{{--Date Picker--}}
	{{--<link rel="stylesheet"--}}
	{{--	      href="{{ url('design/adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">--}}
	<link rel="stylesheet" href="{{ url('datepicker.min.css') }}">

	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


	<!-- Google Font -->
	<link rel="sty lesheet"
	      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	{{--FANCY BOX--}}
	<link rel="stylesheet"
	      href="{{url('/design/fancy/jquery.fancybox.min.css')}}">

	<link rel="shortcut icon" href="{{ url(\App\Setting::MEDIA_PATH . setting()->icon) }}">


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
