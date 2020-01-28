@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ $title }} /
		{{ $bill->descriptoin }}
	</p>

	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-money"></i>
				{{ $title }}
			</p>
		</div>
		<!-- /.box-header -->

		<div class="box-header with-border" style="border-bottom: 1px solid #ccc">
			<strong>
				<i class="fa fa-cog"></i>
				{{ trans('bills.settings') }}
			</strong>


			{{--<a href="{{ route('bills.edit', $bill->id) }}"--}}
			{{--class="btn btn-sm btn-success">--}}
			{{--<i class="fa fa-edit"></i>--}}
			{{--{{ trans('bills.button_edit') }}--}}
			{{--</a>--}}


			<a href="#"
			   data-toggle="modal"
			   data-target="#delete-bill{{ $bill->id }}"
			   class="btn btn-sm btn-danger">
				<i class="fa fa-times"></i>
				{{ trans('bills.button_delete') }}
			</a>

			@if($bill->rest != 0)
				<a href="#"
				   data-toggle="modal"
				   data-target="#add-payment"
				   class="btn btn-sm btn-warning">
					<i class="fa fa-money"></i>
					{{ trans('bills.button_add_payment') }}
				</a>
			@endif

			<a href="#"
			   class="btn btn-sm btn-default">
				<i class="fa fa-download"></i>
				PDF
			</a>


		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
					<i class="fa fa-money"></i>
					{{ trans('bills.bill_information') }}
					<br><br>
					<div class="row">
						<div class="col-md-6">
							@include('admin.bills.show-data1')
						</div>
						<div class="col-md-6">
							@include('admin.bills.show-data2')
						</div>
					</div>
				</div>
			</div>
			<ul class="list-group">
				<li class="list-group-item">
					<div class="row">
						<div class="col-md-6">
							<i class="fa fa-file-o"></i>
							{{ trans('bills.description') }} :
						</div>
						<div class="col-md-6">
							{{ $bill->description }}
						</div>
					</div>
				</li>
			</ul>

			{{--SHOW HISTORIES AND PAYMENTS--}}
			<div class="row">
				<div class="col-md-6">
					@include('admin.bill-histories.histories')
				</div>

				<div class="col-md-6">
					@include('admin.bill-payments.payments')
				</div>
			</div>


		</div>
	</div>

	{{--MODAL--}}
	@include('admin.bills.modal-delete')
	@include('admin.bill-payments.modal-add-payment')

@endsection