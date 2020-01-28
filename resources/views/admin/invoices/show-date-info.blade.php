
<p class="box-title">
	<i class="fa fa-calendar"></i>
	{{ trans('invoices.show_date_info') }}
</p>

<ul class="list-group">
	{{--<li class="list-group-item">--}}
		{{--<div class="row">--}}
			{{--<div class="col-md-6">--}}
				{{--<i class="fa fa-calendar"></i>--}}
				{{--{{ trans('invoices.invoice_date') }} :--}}
			{{--</div>--}}
			{{--<div class="col-md-6">--}}
				{{--<span class="span-background-primary">--}}
					{{--{{ $invoice->invoice_date }}--}}
				{{--</span>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</li>--}}

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-calendar"></i>
				{{ trans('invoices.added_created_at_date') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $invoice->created_at->format('Y-m-d') }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-clock-o"></i>
				{{ trans('invoices.added_created_at_time') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $invoice->created_at->format('H:i') }}
				</span>
			</div>
		</div>
	</li>
</ul>
