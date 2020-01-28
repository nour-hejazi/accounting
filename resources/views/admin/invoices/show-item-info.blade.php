<p class="box-title">
	<i class="fa fa-sitemap"></i>
	{{ trans('invoices.show_item_info') }}
</p>


<ul class="list-group">
	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-barcode"></i>
				{{ trans('invoices.service_code') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->item->code}}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-server"></i>
				{{ trans('invoices.service_name') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->item->name }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-sitemap"></i>
				{{ trans('invoices.service_type') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->item->type }}
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
</ul>

