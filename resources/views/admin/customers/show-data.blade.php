<ul class="list-group">

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-users"></i>
				{{ trans('customers.company') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->company }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-users"></i>
				{{ trans('customers.company_real') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->company_real }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-map-marker"></i>
				{{ trans('customers.tax_office') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->tax_office }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-sort-numeric-asc"></i>
				{{ trans('customers.tax_no') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->tax_no }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-user-o"></i>
				{{ trans('customers.name') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->name }} {{ $customer->surname }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-envelope-o"></i>
				{{ trans('customers.email') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->email }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-phone"></i>
				{{ trans('customers.phone') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->phone }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-globe"></i>
				{{ trans('customers.website') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->website }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-calendar"></i>
				{{ trans('customers.created_at_date') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $customer->created_at->format('Y.m.d') }}
				</span>
			</div>
		</div>
	</li>


	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-map-marker"></i>
				{{ trans('customers.address') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->address }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-sticky-note-o"></i>
				{{ trans('customers.notes') }} :
			</div>
			<div class="col-md-6">
				{{ $customer->notes }}
			</div>
		</div>
	</li>




</ul>
