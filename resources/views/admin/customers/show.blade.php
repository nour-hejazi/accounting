@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.customers_show') }} /
		{{ $customer->company }}
	</p>

	<div class="row">
		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('customers.total_invoices') }}
					</span>
					<span class="info-box-number">
						{{ \App\Customer::numberOfInvoiceBelongsToCustomer($customer->id) }}
					</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-red-active"><i class="fa fa-arrow-up"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('customers.total_invoice_that_debts') }}

					</span>
					<span class="info-box-number">
						{{ \App\Customer::numberOfInvoiceThatDebt($customer->id) }}
					</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-money"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('customers.total_debts') }}

					</span>
					<span class="info-box-number">{{ \App\Customer::debtsForCustomer($customer->id) }}

						<small> TL</small></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('customers.total_paid') }}

					</span>
					<span class="info-box-number">{{ \App\Customer::allPaidFromCustomer($customer->id) }}

						<small> TL</small></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>

	</div>


	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ trans('titles.customers_show') }}
			</p>
		</div>
		<!-- /.box-header -->


		<div class="box-body">
			<div class="row">
				<div class="col-md-12">
					@include('admin.customers.show-data')
				</div>
			</div>

		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

	{{--MODAL--}}
	@include('admin.customers.modal-delete')

@endsection

