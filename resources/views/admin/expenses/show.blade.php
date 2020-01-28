@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ $title }} /
		{{ $expense->type }}
	</p>


	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ $title }}
			</p>
		</div>
		<!-- /.box-header -->
		<div class="box-header with-border" style="border-bottom: 1px solid #ccc">
			<strong>
				<i class="fa fa-cog"></i>
				{{ trans('expenses.settings') }}
			</strong>

			<a href="#"
			   data-toggle="modal"
			   data-target="#edit-expense{{ $expense->id }}"
			   class="btn btn-sm btn-success">
				<i class="fa fa-edit"></i>
				{{ trans('expenses.button_edit') }}
			</a>

			<a href="#"
			   class="btn btn-sm btn-danger">
				<i class="fa fa-times"></i>
				{{ trans('expenses.button_delete') }}
			</a>


		</div>

		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
					@include('admin.expenses.show-data')
				</div>
			</div>

		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

	MODAL
	@include('admin.expenses.modal-edit')

@endsection

