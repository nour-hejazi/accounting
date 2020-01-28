@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.customers_records') }} /
		{{ $customer->company }}
	</p>

	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ trans('titles.customers_records') }}
			</p>
		</div>
		<!-- /.box-header -->

		<div class="box-body">
		</div>
	</div>

@endsection