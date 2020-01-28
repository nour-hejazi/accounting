<ul class="list-group">

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-users"></i>
				{{ trans('vendors.company') }} :
			</div>
			<div class="col-md-6">
				{{ $vendor->company }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-user-o"></i>
				{{ trans('vendors.name') }} :
			</div>
			<div class="col-md-6">
				{{ $vendor->name }} {{ $vendor->surname }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-envelope-o"></i>
				{{ trans('vendors.email') }} :
			</div>
			<div class="col-md-6">
				{{ $vendor->email }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-phone"></i>
				{{ trans('vendors.phone') }} :
			</div>
			<div class="col-md-6">
				{{ $vendor->phone }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-globe"></i>
				{{ trans('vendors.website') }} :
			</div>
			<div class="col-md-6">
				{{ $vendor->website }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-calendar"></i>
				{{ trans('vendors.created_at_date') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $vendor->created_at->format('Y.m.d') }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-clock-o"></i>
				{{ trans('vendors.created_at_time') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $vendor->created_at->format('H:i:s') }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-map-marker"></i>
				{{ trans('vendors.address') }} :
			</div>
			<div class="col-md-6">
				{{ $vendor->address }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-sticky-note-o"></i>
				{{ trans('vendors.notes') }} :
			</div>
			<div class="col-md-6">
				{{ $vendor->notes }}
			</div>
		</div>
	</li>




</ul>
