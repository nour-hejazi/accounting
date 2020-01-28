@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.customers_edit') }} /
		{{ $customer->company }}
	</p>

	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ trans('titles.customers_edit') }}
			</p>
		</div>
		<!-- /.box-header -->

		<div class="box-body">
			<form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="company">
								<i class="fa fa-users"></i>
								{{ trans('customers.company') }}
								<span class="star">*</span>
							</label>
							<input id="company"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('customers.company') }}"
							       value="{{ $customer->company }}"
							       name="company">
						</div>
						<div class="col-md-6">
							<label for="company">
								<i class="fa fa-users"></i>
								{{ trans('customers.company_real') }}
								<span class="star">*</span>
							</label>
							<input id="company_real"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('customers.company_real') }}"
							       value="{{ $customer->company_real }}"
							       name="company_real">
						</div>
					</div>
				</div>


				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="name">
								<i class="fa fa-user-o"></i>
								{{ trans('customers.name') }}
								<span class="star">*</span>
							</label>
							<input id="name"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('customers.name') }}"
							       value="{{ $customer->name }}"
							       name="name">
						</div>

						<div class="col-md-6">
							<label for="surname">
								<i class="fa fa-user-o"></i>
								{{ trans('customers.surname') }}
								<span class="star">*</span>
							</label>
							<input id="surname"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('customers.surname') }}"
							       value="{{ $customer->surname }}"
							       name="surname">
						</div>
					</div>
				</div>


				<div class="form-group">

					<div class="row">
						<div class="col-md-6">
							<label for="tax_office">
								<i class="fa fa-map-marker"></i>
								{{ trans('customers.tax_office') }}
								<span class="star">*</span>
							</label>
							<input id="tax_office"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('customers.tax_office') }}"
							       value="{{ $customer->tax_office }}"
							       name="tax_office">
						</div>
						<div class="col-md-6">
							<label for="tax_no">
								<i class="fa fa-sort-numeric-asc"></i>
								{{ trans('customers.tax_no') }}
								<span class="star">*</span>
							</label>
							<input id="tax_no"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('customers.tax_no') }}"
							       value="{{ $customer->tax_no }}"
							       name="tax_no">
						</div>


					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="email">
								<i class="fa fa-envelope-o"></i>
								{{ trans('customers.email') }}
							</label>
							<input id="email"
							       type="email"
							       class="form-control"
							       placeholder="{{ trans('customers.email') }}"
							       value="{{ $customer->email }}"
							       name="email">
						</div>

						<div class="col-md-3">
							<label for="phone">
								<i class="fa fa-phone"></i>
								{{ trans('customers.phone') }}
								<span class="star">*</span>
							</label>
							<input id="phone"
							       type="text"
							       required="required"
							       class="form-control"
							       placeholder="{{ trans('customers.phone') }}"
							       value="{{ $customer->phone }}"
							       name="phone">
						</div>

						<div class="col-md-3">
							<label for="website">
								<i class="fa fa-globe"></i>
								{{ trans('customers.website') }}
							</label>
							<input id="website"
							       type="text"
							       class="form-control"
							       placeholder="{{ trans('customers.website') }}"
							       value="{{ $customer->website }}"
							       name="website">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="address">
								<i class="fa fa-map-marker"></i>
								{{ trans('customers.address') }}
							</label>
							<textarea name="address"
							          id="address"
							          class="form-control"
							          placeholder="{{ trans('customers.address') }}"
							          rows="5">{{ $customer->address }}</textarea>
						</div>

						<div class="col-md-6">
							<label for="notes">
								<i class="fa fa-sticky-note-o"></i>
								{{ trans('customers.notes') }}
							</label>
							<textarea name="notes"
							          id="notes"
							          class="form-control"
							          placeholder="{{ trans('customers.notes') }}"
							          rows="5">{{ $customer->notes }}</textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<button type="submit"
					        class="btn btn-success">
						<i class="fa fa-edit"></i>
						{{ trans('customers.button_edit') }}
					</button>
				</div>
			</form>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->




@endsection
