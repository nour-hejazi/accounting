<ul class="list-group">

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-user-o"></i>
				{{ trans('invoices_payments.user_name') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->user->name }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-users"></i>
				{{ trans('invoices_payments.customer_company') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->customer->company }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-barcode"></i>
				{{ trans('invoices_payments.invoice_number') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->invoice_number }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-barcode"></i>
				{{ trans('invoices_payments.invoice_number_formal') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->invoice_number_formal }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-barcode"></i>
				{{ trans('invoices_payments.invoice_number_informal') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->invoice_number_informal }}
			</div>
		</div>
	</li>


	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('invoices_payments.amount') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-success">
					{{ $payment->amount }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-calendar"></i>
				{{ trans('invoices_payments.created_at_date') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $payment->created_at->format('Y-m-d') }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-calendar"></i>
				{{ trans('invoices_payments.created_at_time') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $payment->created_at->format('H:i') }}
				</span>
			</div>
		</div>
	</li>

</ul>