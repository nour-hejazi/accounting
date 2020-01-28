<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ trans('login.login') }}</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/font-awesome/css/font-awesome.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/Ionicons/css/ionicons.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/dist/css/AdminLTE.min.css') }}">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/dist/css/skins/_all-skins.min.css') }}">
	<!-- Morris chart -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/morris.js/morris.css') }}">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{ url('/design/adminLTE/bower_components/jvectormap/jquery-jvectormap.css') }}">
	<!-- Date Picker -->
	<link rel="stylesheet"
	      href="{{ url('/design/adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
	<!-- Daterange picker -->
	<link rel="stylesheet"
	      href="{{ url('/design/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet"
	      href="{{ url('/design/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
	      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<link href="https://fonts.googleapis.com/css?family=Cairo:300,400&display=swap&subset=arabic,latin-ext"
	      rel="stylesheet">

	<style type="text/css">
		html, body, h1, h2, h3, h4, p, input, .alert {
			font-family: 'Cairo', sans-serif;
		}
	</style>

</head>

<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href=""><b>NOUR</b> Media</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">
			{{ trans('login.login') }}
		</p>

		<form method="post">
			{{ csrf_field() }}
			<div class="form-group has-feedback">
				<input type="email"
				       name="email"
				       class="form-control"
				       placeholder="{{ trans('login.email') }}">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password"
				       name="password"
				       class="form-control"
				       placeholder="{{ trans('login.password') }}">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">

				<div class="col-xs-6">
					<button type="submit"
					        class="btn btn-primary btn-block btn-flat">
						{{ trans('login.button_login') }}
					</button>
				</div>
				<!-- /.col -->
			</div>
			<div class="row" style="margin-top: 20px">
				<div class="col-md-10">
					@include('admin.layouts.errors')
				</div>
			</div>
		</form>


	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>

@include('admin.layouts.script')

