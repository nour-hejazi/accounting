@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.items_create') }}
	</p>

	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-sitemap"></i>
				{{ trans('titles.items_create') }}
			</p>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}


				<div class="form-group">
					<div class="row">

						<div class="col-md-3">
							<label for="name">
								<i class="fa fa-sitemap"></i>
								{{ trans('items.name') }}
								<span class="star">*</span>
							</label>
							<input id="name"
							       type="text"
							       class="form-control"
							       required="required"
							       placeholder="{{ trans('items.name') }}"
							       value="{{ old('name') }}"
							       name="name">

						</div>

						<div class="col-md-3">
							<label for="type">
								<i class="fa fa-sitemap"></i>
								{{ trans('items.type') }}
							</label>
							<input id="name"
							       type="text"
							       class="form-control"
							       placeholder="{{ trans('items.type') }}"
							       value="{{ old('type') }}"
							       name="type">

						</div>

						<div class="col-md-2">
							<label for="code">
								<i class="fa fa-code"></i>
								{{ trans('items.code') }}
							</label>
							<input id="code"
							       type="text"
							       class="form-control"
							       placeholder="{{ trans('items.code') }}"
							       value="{{ old('code') }}"
							       name="code">

						</div>


						<div class="col-md-2">
							<label for="capital">
								<i class="fa fa-money"></i>
								{{ trans('items.capital') }}
							</label>
							<input id="capital"
							       type="text"
							       class="form-control"
							       placeholder="{{ trans('items.capital') }}"
							       value="{{ old('capital') }}"
							       name="capital">

						</div>

						<div class="col-md-2">
							<label for="sale_price">
								<i class="fa fa-money"></i>
								{{ trans('items.sale_price') }}
							</label>
							<input id="sale_price"
							       type="text"
							       class="form-control"
							       placeholder="{{ trans('items.sale_price') }}"
							       value="{{ old('sale_price') }}"
							       name="sale_price">

						</div>

					</div>
				</div>


				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
							<label for="description">
								<i class="fa fa-file-o"></i>
								{{ trans('items.description') }}
							</label>
							<textarea name="description"
							          id="description"
							          class="form-control"
							          placeholder="{{ trans('items.description') }}"
							          rows="5">{{ old('description') }}</textarea>
						</div>
					</div>
				</div>


				<div class="form-group">
					<button type="submit"
					        class="btn btn-primary ">
						<i class="fa fa-plus"></i>
						{{ trans('items.button_create') }}
					</button>
				</div>
			</form>
		</div>
	</div>


@endsection