@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.vendors_edit') }} /
		{{ $vendor->company }}
	</p>

	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ trans('titles.vendors_edit') }}
			</p>
		</div>
		<!-- /.box-header -->

		<div class="box-body">
			<form action="{{ route('vendors.update', $vendor->id) }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">
				<input type="hidden" name="is_debtor">
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="company">
								<i class="fa fa-users"></i>
								{{ trans('vendors.company') }}
								<span class="star">*</span>
							</label>
							<input id="company"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('vendors.company') }}"
							       value="{{ $vendor->company }}"
							       name="company">
						</div>

						<div class="col-md-3">
							<label for="name">
								<i class="fa fa-user-o"></i>
								{{ trans('vendors.name') }}
								<span class="star">*</span>
							</label>
							<input id="name"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('vendors.name') }}"
							       value="{{ $vendor->name }}"
							       name="name">
						</div>

						<div class="col-md-3">
							<label for="surname">
								<i class="fa fa-user-o"></i>
								{{ trans('vendors.surname') }}
								<span class="star">*</span>
							</label>
							<input id="surname"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('vendors.surname') }}"
							       value="{{ $vendor->surname }}"
							       name="surname">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="email">
								<i class="fa fa-envelope-o"></i>
								{{ trans('vendors.email') }}
							</label>
							<input id="email"
							       type="email"
							       class="form-control"
							       placeholder="{{ trans('vendors.email') }}"
							       value="{{ $vendor->email }}"
							       name="email">
						</div>

						<div class="col-md-3">
							<label for="phone">
								<i class="fa fa-phone"></i>
								{{ trans('vendors.phone') }}
								<span class="star">*</span>
							</label>
							<input id="phone"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('vendors.phone') }}"
							       value="{{ $vendor->phone }}"
							       name="phone">
						</div>

						<div class="col-md-3">
							<label for="website">
								<i class="fa fa-globe"></i>
								{{ trans('vendors.website') }}
							</label>
							<input id="website"
							       type="text"
							       class="form-control"
							       placeholder="{{ trans('vendors.website') }}"
							       value="{{ $vendor->website }}"
							       name="website">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="address">
								<i class="fa fa-map-marker"></i>
								{{ trans('vendors.address') }}
							</label>
							<textarea name="address"
							          id="address"
							          class="form-control"
							          placeholder="{{ trans('vendors.address') }}"
							          rows="5">{{ $vendor->address }}</textarea>
						</div>

						<div class="col-md-6">
							<label for="notes">
								<i class="fa fa-sticky-note-o"></i>
								{{ trans('vendors.notes') }}
							</label>
							<textarea name="notes"
							          id="notes"
							          class="form-control"
							          placeholder="{{ trans('vendors.notes') }}"
							          rows="5">{{ $vendor->notes }}</textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<button type="submit"
					        class="btn btn-success">
						<i class="fa fa-edit"></i>
						{{ trans('vendors.button_edit') }}
					</button>
				</div>
			</form>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->




@endsection
