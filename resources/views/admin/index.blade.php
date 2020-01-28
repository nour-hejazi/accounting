@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		{{--<h1>لوحة التحكم</h1>--}}
		{{--<ol class="breadcrumb">--}}
			{{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
			{{--<li class="active">Dashboard</li>--}}
		{{--</ol>--}}
	</section>

	<!-- Main content -->
	<section class="content">
		@include('admin.layouts.messages')
		@include('admin.layouts.errors')
		@yield('content')
	</section>
</div>

@include('admin.layouts.footer')