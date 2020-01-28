@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.invoices_show') }} /
		{{ $invoice->invoice_number }}
	</p>


	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ trans('titles.invoices_show') }}
			</p>
		</div>
		<!-- /.box-header -->
		<div class="box-header with-border" style="border-bottom: 1px solid #ccc">
			<strong>
				<i class="fa fa-cog"></i>
				{{ trans('invoices.settings') }}
			</strong>

			{{--<a href="{{ route('invoices.edit', $invoice->id) }}"--}}
			   {{--class="btn btn-sm btn-success">--}}
				{{--<i class="fa fa-edit"></i>--}}
				{{--{{ trans('invoices.button_edit') }}--}}
			{{--</a>--}}

			<a href="#"
			   data-toggle="modal"
			   data-target="#delete-invoice{{ $invoice->id }}"
			   class="btn btn-sm btn-danger">
				<i class="fa fa-times"></i>
				{{ trans('invoices.button_delete') }}
			</a>

			@if($invoice->rest != 0)
				<a href="#"
				   data-toggle="modal"
				   data-target="#add-payment"
				   class="btn btn-sm btn-warning">
					<i class="fa fa-money"></i>
					{{ trans('invoices.button_add_payment') }}
				</a>
			@endif

			<a href="{{ adminUrl('invoices/' . $invoice->id . '/pdf') }}"
			   class="btn btn-sm btn-default">
				<i class="fa fa-download"></i>
				{{ trans('invoices.button_PDF') }}
			</a>


		</div>

		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
					@include('admin.invoices.show-data')
				</div>
			</div>

		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

	{{--MODAL DELETE INVOICE--}}
	@include('admin.invoices.modal-delete')
	{{--MODAL MAKE PAYMENT--}}
	@include('admin.invoice-payments.modal-add-payment')
@endsection

