@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-dashboard"></i>
		{{ \App\Dashboard::DASHBOARD_TITLE }} /
		{{ \App\Documentation::PAGE_TITLE_INDEX }}
	</p>

	@include('admin.documentation.sections.dashboard')
	@include('admin.documentation.sections.accounts')
	@include('admin.documentation.sections.sliders')
	@include('admin.documentation.sections.posts')
	@include('admin.documentation.sections.categories')
	@include('admin.documentation.sections.messages')
	@include('admin.documentation.sections.languages')
	@include('admin.documentation.sections.statistics')
	@include('admin.documentation.sections.settings')
	@include('admin.documentation.sections.documentation')


@endsection