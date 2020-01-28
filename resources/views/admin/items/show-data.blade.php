<ul class="list-group">

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-code"></i>
				{{ trans('items.code') }} :
			</div>
			<div class="col-md-6">
				{{ $item->code }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-sitemap"></i>
				{{ trans('items.name') }} :
			</div>
			<div class="col-md-6">
				{{ $item->name }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-sitemap"></i>
				{{ trans('items.type') }} :
			</div>
			<div class="col-md-6">
				{{ $item->type }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('items.capital') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-ccc">
					{{ $item->capital }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('items.sale_price') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-ccc">
					{{ $item->sale_price }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-calendar"></i>
				{{ trans('items.created_at_date') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $item->created_at->format('Y-m-d') }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-clock-o"></i>
				{{ trans('items.created_at_time') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $item->created_at->format('H:i') }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-calendar"></i>
				{{ trans('items.updated_at_date') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $item->updated_at->format('Y-m-d') }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-clock-o"></i>
				{{ trans('items.updated_at_time') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $item->updated_at->format('H:i') }}
				</span>
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-file-o"></i>
				{{ trans('items.description') }} :
			</div>
			<div class="col-md-6">
				{{ $item->description }}
			</div>
		</div>
	</li>

</ul>