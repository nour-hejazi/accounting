@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.vendors_show') }} /
		{{ $vendor->company }}
	</p>


	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ trans('titles.vendors_show') }}
			</p>
		</div>
		<!-- /.box-header -->
		<div class="box-header with-border" style="border-bottom: 1px solid #ccc">
			<strong>
				<i class="fa fa-cog"></i>
				{{ trans('vendors.settings') }}
			</strong>




			<a href="{{ route('vendors.edit', $vendor->id) }}"
			   class="btn btn-sm btn-success">
				<i class="fa fa-edit"></i>
				{{ trans('vendors.button_edit') }}
			</a>

			<a href="#"
			   data-toggle="modal"
			   data-target="#delete-vendor{{ $vendor->id }}"
			   class="btn btn-sm btn-danger">
				<i class="fa fa-times"></i>
				{{ trans('vendors.button_delete') }}
			</a>


		</div>

		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
					@include('admin.vendors.show-data')
				</div>
			</div>

		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

	{{--MODAL--}}
	@include('admin.vendors.modal-delete')

@endsection

