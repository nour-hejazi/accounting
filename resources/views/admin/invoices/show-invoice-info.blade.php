<p class="box-title">
	<i class="fa fa-arrow-circle-down"></i>
	{{ trans('invoices.show_invoice_info') }}
</p>



<ul class="list-group">

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-user-o"></i>
				{{ trans('invoices.user_name') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->user->name}}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-users"></i>
				{{ trans('invoices.customer_company') }} :
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
				{{ trans('invoices.invoice_number') }} :
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
				{{ trans('invoices.invoice_number_formal') }} :
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
				{{ trans('invoices.invoice_number_informal') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->invoice_number_informal }}
			</div>
		</div>
	</li>

</ul>

