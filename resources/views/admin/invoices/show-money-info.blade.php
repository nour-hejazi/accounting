<p class="box-title">
	<i class="fa fa-money"></i>
	{{ trans('invoices.show_money_info') }}
</p>


<ul class="list-group">

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-toggle-on"></i>
				{{ trans('invoices.status') }} :
			</div>
			<div class="col-md-6">
				@if($invoice->status == \App\Invoice::INVOICE_STATUS_DRAFT)
					<span class="span-background-danger">
						{{ trans('invoices.invoice_status_draft') }}
					</span>
				@endif
				@if($invoice->status == \App\Invoice::INVOICE_STATUS_PARTIAL)
					<span class="span-background-war">
						{{ trans('invoices.invoice_status_partial') }}
					</span>
				@endif
				@if($invoice->status == \App\Invoice::INVOICE_STATUS_PAID)
					<span class="span-background-success">
						{{ trans('invoices.invoice_status_paid') }}
					</span>
				@endif
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('invoices.capital') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-danger">
					{{ $invoice->capital }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('invoices.sale_price') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-success">
					{{ $invoice->sale_price }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('invoices.discount') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-info">
					{{ $invoice->discount }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('invoices.sale_price_with_discount') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-success">
					{{ $invoice->sale_price_with_dis }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-check"></i>
				{{ trans('invoices.profit') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-success">
					{{ $invoice->profit }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('invoices.paid') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-success">
					{{ $invoice->paid }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('invoices.rest') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-war">
					{{ $invoice->rest }}
				</span>
			</div>
		</div>
	</li>


</ul>


