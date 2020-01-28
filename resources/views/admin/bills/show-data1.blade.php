<ul class="list-group">
	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-user-o"></i>
				{{ trans('bills.user') }} :
			</div>
			<div class="col-md-6">
				{{ $bill->user->name }}
			</div>

		</div>
	</li>
	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-check"></i>
				{{ trans('bills.type') }} :
			</div>
			<div class="col-md-6">
				{{ $bill->expense->type }}
			</div>
		</div>
	</li>
	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-calendar"></i>
				{{ trans('bills.created_at_date') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $bill->created_at->format('Y-m-d') }}
				</span>
			</div>
		</div>
	</li>
	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-clock-o"></i>
				{{ trans('bills.created_at_time') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $bill->created_at->format('H:i') }}
				</span>
			</div>
		</div>
	</li>
</ul>


