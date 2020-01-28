<ul class="list-group">

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('bills.cost') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-info">
					{{ $bill->cost }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('bills.paid') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-success">
					{{ $bill->paid }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('bills.rest') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-danger">
					{{ $bill->rest }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-toggle-on"></i>
				{{ trans('invoices.status') }} :
			</div>
			<div class="col-md-6">
				@if($bill->status == \App\Bill::BILL_STATUS_DRAFT)
					<span class="span-background-danger">
						{{ trans('bills.bill_status_draft') }}
					</span>
				@endif
				@if($bill->status == \App\Bill::BILL_STATUS_PARTIAL)
					<span class="span-background-war">
						{{ trans('bills.bill_status_partial') }}
					</span>
				@endif
				@if($bill->status == \App\Bill::BILL_STATUS_PAID)
					<span class="span-background-success">
						{{ trans('bills.bill_status_paid') }}
					</span>
				@endif
			</div>
		</div>
	</li>



</ul>
