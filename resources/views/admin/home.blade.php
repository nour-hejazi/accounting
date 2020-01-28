@extends('admin.index')
@section('content')

	<p class="lead"><i class="fa fa-dashboard"></i>
		{{ $title }}
	</p>

	@include('admin.analysis.statistics')
	<hr>
{{--	@include('admin.analysis.shortcut')--}}

	{{--@include('admin.analysis.invoice_report')--}}


@endsection