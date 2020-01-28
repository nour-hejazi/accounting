@extends('admin.index')
@section('content')
	<p class="lead">
		<i class="fa fa-dashboard"></i>
		{{ trans('main.dashboard') }} /
		{{ $title }}
	</p>
	<div class="box box-primary">
		<div class="box-header with-border" style="border-bottom: 1px solid #ccc">
			<div class="row">

				<div class="col-md-4">
					<strong>
						<i class="fa fa-clock-o"></i>
						{{ trans('settings.updated_at_date') }}
					</strong>
					<span class="span-background-primary">
						{{ setting()->updated_at->format('Y-m-d') }}
					</span>
				</div>
			</div>
		</div>

		<div class="box-header with-border" style="border-bottom: 1px solid #ccc">
			<strong>
				<i class="fa fa-cog"></i>
				{{ trans('settings.settings') }}
			</strong>
			<a href="{{ adminUrl('settings/edit')}}"
			   class="btn btn-sm btn-success">
				<i class="fa fa-edit"></i>
				{{ trans('settings.button_edit') }}
			</a>
		</div>
		<!-- /.box-header -->

		<div class="box-body">

			<br>
			<div class="row">
				<div class="col-md-12">
					<p>
						<i class="fa fa-info"></i>
						{{ trans('settings.information') }}
					</p>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<div class="row">
								<div class="col-md-3">
									<i class="fa fa-language"></i>
									{{ trans('settings.name') }}
								</div>
								<div class="col-md-3">
									{{ setting()->name }}
								</div>

							</div>
						</li>

					</ul>
				</div>
			</div>
			<br>

			<div class="row">
				<div class="col-md-6">
					<i class="fa fa-image"></i>
					{{ trans('settings.logo') }}
				</div>
				<div class="col-md-6">
					<i class="fa fa-image"></i>
					{{ trans('settings.icon') }}
				</div>
			</div>
			<br>

			<div class="row">
				<div class="col-md-6">
					@if(!empty(setting()->logo))
						<br>
						<a data-fancybox="gallery"
						   data-caption="{{ strtoupper(setting()->site_name_en) }} - {{ trans('settings.logo') }}"
						   href="{{ '\media\settings\\' }}{{ setting()->logo }}">
							<img src="{{ '\media\settings\\' }}{{ setting()->logo }}"
							     alt="{{ '\media\settings\\' }}{{ setting()->logo }}"
							     class="thumbnail"
							     style="width: 200px;
								            height: 200px;
								            border-radius: 50%;
								            border: 1px solid #000">
						</a>
					@endif
				</div>
				<div class="col-md-6">
					@if(!empty(setting()->icon))
						<br>
						<a data-fancybox="gallery"
						   data-caption="{{ strtoupper(setting()->site_name_en) }} - {{ trans('settings.icon') }}"
						   href="{{ '\media\settings\\' }}{{ setting()->icon }}">
							<img src="{{ '\media\settings\\' }}{{ setting()->icon }}"
							     alt="{{ '\media\settings\\' }}{{ setting()->icon }}"
							     class="thumbnail"
							     style="width: 200px; height: 200px;  border-radius: 50%; border: 1px solid #000">
						</a>
					@endif
				</div>
			</div>
			<br>


		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->


@endsection