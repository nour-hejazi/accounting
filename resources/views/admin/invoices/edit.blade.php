@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.invoices_edit') }}
	</p>


	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ trans('titles.invoices_edit') }}
			</p>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form action="{{ route('invoices.update', $invoice->id) }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="company">
								<i class="fa fa-users"></i>
								{{ trans('invoices.user') }}
								<span class="star">*</span>
							</label>
							<select name="user_id" id="user_id" class="form-control select2" required="required"
							        style="width: 100%;">
								@foreach($users as $user)
									<option value="{{ $user->id }}" {{ $user->id == $invoice->user->id ? 'selected' : null }}>
										{{ $user->name }}
									</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6">
							<label for="name">
								<i class="fa fa-user-o"></i>
								{{ trans('invoices.customer') }}
								<span class="star">*</span>
							</label>
							<select name="customer_id" class="form-control select2" id="customer_id"
							        required="required">
								@foreach($customers as $customer)
									<option value="{{ $customer->id }}" {{ $customer->id == $invoice->customer->id ? 'selected' : null }}>
										{{ $customer->company }}
									</option>
								@endforeach
							</select>
						</div>

					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="invoice_date">
								<i class="fa fa-calendar"></i>
								{{ trans('invoices.invoice_date') }}
								<span class="star">*</span>
							</label>
							<input id="invoice_date"
							       type="text"
							       class="form-control"
							       required="required"
							       placeholder="{{ trans('invoices.invoice_date') }}"
							       value="{{ $invoice->invoice_date }}"
							       name="invoice_date">

						</div>

						<div class="col-md-6">
							<label for="invoice_number">
								<i class="fa fa-barcode"></i>
								{{ trans('invoices.invoice_number') }}
								<span class="star">*</span>
							</label>
							<input id="invoice_number"
							       disabled
							       type="text"
							       class="form-control"
							       value="{{ $invoice->invoice_number }}">

						</div>

					</div>
				</div>


				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="invoice_number_formal">
								<i class="fa fa-barcode"></i>
								{{ trans('invoices.invoice_number_formal') }}
							</label>
							<input id="invoice_number_formal"
							       type="text"
							       class="form-control"
							       value="{{ $invoice->invoice_number_formal }}"
							       placeholder="{{ trans('invoices.invoice_number_formal') }}"
							       name="invoice_number_formal">

						</div>

						<div class="col-md-6">
							<label for="invoice_number_informal">
								<i class="fa fa-barcode"></i>
								{{ trans('invoices.invoice_number_informal') }}
							</label>
							<input id="invoice_number"
							       type="text"
							       class="form-control"
							       value="{{ $invoice->invoice_number_informal }}"
							       placeholder="{{ trans('invoices.invoice_number_informal') }}"
							       name="invoice_number_informal">

						</div>

					</div>
				</div>


				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="service_name">
								<i class="fa fa-server"></i>
								{{ trans('invoices.service_name') }}
								<span class="star">*</span>
							</label>
							<input id="service_name"
							       type="text"
							       class="form-control"
							       required="required"
							       placeholder="{{ trans('invoices.service_name') }}"
							       value="{{ $invoice->item->type}}"
							       name="service_name">

						</div>

						<div class="col-md-3">
							<label for="capital">
								<i class="fa fa-money"></i>
								{{ trans('invoices.capital') }}
								<span class="star">*</span>
							</label>
							<input id="capital"
							       type="text"
							       class="form-control"
							       required="required"
							       placeholder="{{ trans('invoices.capital') }}"
							       value="{{ $invoice->capital }}"
							       name="capital">

						</div>

						<div class="col-md-3">
							<label for="selling_price">
								<i class="fa fa-money"></i>
								{{ trans('invoices.sale_price') }}
								<span class="star">*</span>
							</label>
							<input id="selling_price"
							       type="text"
							       class="form-control"
							       required="required"
							       placeholder="{{ trans('invoices.sale_price') }}"
							       value="{{ $invoice->sale_price }}"
							       name="selling_price">

						</div>

					</div>
				</div>

				<div class="form-group">
					<div class="row">

						<div class="col-md-12">
							<label for="description">
								<i class="fa fa-info"></i>
								{{ trans('invoices.description') }}
								<span class="star">*</span>
							</label>
							<textarea name="description"
							          id="description"
							          required="required"
							          class="form-control"
							          placeholder="{{ trans('invoices.description') }}"
							          rows="5">{{ $invoice->description }}</textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<button type="submit"
					        class="btn btn-primary ">
						<i class="fa fa-plus"></i>
						{{ trans('customers.button_create') }}
					</button>
				</div>
			</form>
		</div>
		<!-- /.box-body -->

	</div>
	<!-- /.box -->





@endsection
