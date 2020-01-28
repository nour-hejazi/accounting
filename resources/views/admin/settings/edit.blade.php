@extends('admin.index')
@section('content')
	<p class="lead">
		<i class="fa fa-dashboard"></i>
		{{ trans('main.dashboard') }} /
		{{ $title }}
	</p>
	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="box-title" style="margin-top: 10px">
				<i class="fa fa-cog"></i>
				{{ trans('settings.box_title') }}
			</p>
		</div>

		<!-- /.box-header -->
		<div class="box-body">
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-4">
						{{--SITE NAME AR--}}
						<div class="form-group">
							<i class="fa fa-language"></i>
							<label for="site-name-ar">
								{{ trans('settings.name') }}
							</label>
							<input id="name"
							       class="form-control"
							       type="text"
							       name="site_name_ar"
							       placeholder="{{ trans('settings.name') }}"
							       value="{{ setting()->name }}">
						</div>
					</div>


				</div>
				<br>
				<div class="row">
					<div class="col-md-4">
						{{-- LOGO --}}
						<div class="form-group">
							<i class="fa fa-image"></i>
							<label for="logo">
								{{ trans('settings.logo') }}
							</label>
							<input id="logo"
							       class="form-control"
							       type="file"
							       name="logo">
						</div>

					</div>
					<div class="col-md-4">
						{{-- ICON --}}
						<div class="form-group">
							<i class="fa fa-image"></i>
							<label for="icon">
								{{ trans('settings.icon') }}
							</label>
							<input id="icon"
							       class="form-control"
							       type="file"
							       name="icon">
						</div>

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

				<div class="row">
					<div class="col-md-6">
						@if(!empty(setting()->logo))
							<br>
							<a data-fancybox="gallery"
							   data-caption="{{ strtoupper(setting()->site_name_en) }} - {{ trans('settings.logo') }}"
							   href="{{ '\images\settings\\' }}{{ setting()->logo }}">
								<img src="{{ '\images\settings\\' }}{{ setting()->logo }}"
								     alt="{{ '\images\settings\\' }}{{ setting()->logo }}"
								     style="width: 50px;
								            height: 50px;
								            border-radius: 50%;
								            border: 1px solid #000">
							</a>


						@endif
					</div>
					<div class="col-md-6">
						@if(!empty(setting()->icon))
							<br>
							<a data-fancybox="gallery"
							   data-caption="{{ strtoupper(setting()->name) }} - {{ trans('settings.icon') }}"
							   href="{{ '\images\settings\\' }}{{ setting()->icon }}">
							<img src="{{ '\images\settings\\' }}{{ setting()->icon }}"
							     alt="{{ '\images\settings\\' }}{{ setting()->icon }}"
							     style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid #000">
							</a>
						@endif
					</div>
				</div>


				<hr>
				<div class="form-group">
					<button type="submit"
					        style="margin-top: 30px"
					        class="btn btn-lg btn-block btn-success">
						<i class="fa fa-edit"></i>
						{{ trans('settings.button_edit') }}
					</button>
				</div>


			</form>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->


@endsection