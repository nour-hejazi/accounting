@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.invoices_create') }}
	</p>


	@if(\App\Customer::numberOfCustomer() == 0)
		@include('admin.invoices.validation-check-customer')
	@endif

	@if(\App\Item::numberOfItems() == 0)
		@include('admin.invoices.validation-check-item')
	@endif

	@if(\App\Customer::numberOfCustomer() != 0 && \App\Item::numberOfItems() != 0)
		<div class="box box-primary">
			<div class="box-header with-border">
				<p class="lead" style="margin-bottom: 0">
					<i class="fa fa-user-o"></i>
					{{ trans('titles.invoices_create') }}
				</p>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form action="{{ route('invoices.store') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<div class="row">

							<div class="col-md-12">
								<label for="name">
									<i class="fa fa-user-o"></i>
									{{ trans('invoices.customer') }}
									<span class="star">*</span>
								</label>
								<select name="customer_id" class="form-control select2" id="customer_id"
								        required="required">
									@foreach($customers as $customer)
										<option value="{{ $customer->id }}">{{ $customer->company }}</option>
									@endforeach
								</select>
							</div>

						</div>
					</div>

					<div class="form-group">
						<div class="row">
							{{--<div class="col-md-6">--}}
								{{--<label for="invoice_date">--}}
									{{--<i class="fa fa-calendar"></i>--}}
									{{--{{ trans('invoices.invoice_date') }}--}}
									{{--<span class="star">*</span>--}}
								{{--</label>--}}



									{{--<input id="invoice_date"--}}
									       {{--type="text"--}}
									       {{--required="required"--}}
									       {{--placeholder="{{ trans('invoices.invoice_date') }}"--}}
									       {{--value="{{ old('invoice_date') }}"--}}
									       {{--name="invoice_date"--}}
									       {{--class="form-control">--}}

								{{--<!-- /.input group -->--}}

							{{--</div>--}}


							<div class="col-md-4">
								<label for="invoice_number">
									<i class="fa fa-barcode"></i>
									{{ trans('invoices.invoice_number') }}
									<span class="star">*</span>
								</label>
								<input id="invoice_number"
								       type="text"
								       disabled
								       class="form-control"
								       required="required"
								       placeholder="{{ trans('invoices.invoice_number') }}"
								       value="{{ \App\Invoice::invoiceNumber() }}"
								       name="invoice_number">

							</div>

							<div class="col-md-4">
								<label for="invoice_number_formal">
									<i class="fa fa-barcode"></i>
									{{ trans('invoices.invoice_number_formal') }}
								</label>
								<input id="invoice_number_formal"
								       type="text"
								       class="form-control"
								       value="{{ old('invoice_number_formal') }}"
								       placeholder="{{ trans('invoices.invoice_number_formal') }}"
								       name="invoice_number_formal">

							</div>

							<div class="col-md-4">
								<label for="invoice_number_informal">
									<i class="fa fa-barcode"></i>
									{{ trans('invoices.invoice_number_informal') }}
								</label>
								<input id="invoice_number"
								       type="text"
								       class="form-control"
								       value="{{ old('invoice_number_informal') }}"
								       placeholder="{{ trans('invoices.invoice_number_informal') }}"
								       name="invoice_number_informal">

							</div>

						</div>
					</div>

					<div class="form-group">
						<div class="row">

						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="item_id">
									<i class="fa fa-server"></i>
									{{ trans('invoices.service_name') }}
									<span class="star">*</span>
								</label>
								<select name="item_id"
								        class="form-control select2"
								        id="item_id"
								        required="required" onchange="getCaptitalAndSalePrice()">
									@foreach($items as $item)
										<option value="{{ $item->id }}"
										        id="item_id_option"
										        data-capital="{{ $item->capital }}"
										        data-sale-price="{{ $item->sale_price }}">
											{{ $item->name . " - " . $item->type . " - " . $item->code }}
										</option>
									@endforeach
								</select>
							</div>

							<div class="col-md-2">
								<i class="fa fa-money"></i>
								{{ trans('invoices.capital') }}
								<p id="item-capital" style="color: #0b58a2"></p>
							</div>

							<div class="col-md-2">
								<i class="fa fa-money"></i>
								{{ trans('invoices.sale_price') }}
								<p id="item-sale-price" style="color: #0b58a2"></p>
							</div>

							<div class="col-md-2">
								<label for="discount">
									<i class="fa fa-money"></i>
									{{ trans('invoices.discount') }}
								</label>
								<input id="discount"

								       onkeyup="dis()"
								       type="text"
								       class="form-control"
								       placeholder="{{ trans('invoices.discount') }}"
								       value="{{ old('discount') }}"
								       name="discount">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label for="description">
									<i class="fa fa-file-o"></i>
									{{ trans('invoices.description') }}
									<span class="star">*</span>
								</label>
								<textarea name="description"
								          id="description"
								          required="required"
								          class="form-control"
								          placeholder="{{ trans('invoices.description') }}"
								          rows="5">{{ old('description') }}</textarea>
							</div>
						</div>
					</div>

					<div class="form-group">
						<button type="submit"
						        class="btn btn-primary ">
							<i class="fa fa-plus"></i>
							{{ trans('invoices.button_create') }}
						</button>
					</div>
				</form>
			</div>
			<!-- /.box-body -->

		</div>
		<!-- /.box -->
	@endif

	@push('js')
		<script type="text/javascript">
            // function getCaptitalAndSalePrice() {
            window.onload = function () {
                var itemCapital = $('#item_id option:selected').attr("data-capital");
                var itemSalePrice = $('#item_id option:selected').attr("data-sale-price");
                document.getElementById('item-capital').innerHTML = itemCapital;
                document.getElementById('item-sale-price').innerHTML = itemSalePrice;
            };

            function getCaptitalAndSalePrice() {
                var itemCapital = $('#item_id option:selected').attr("data-capital");
                var itemSalePrice = $('#item_id option:selected').attr("data-sale-price");


                document.getElementById('item-capital').innerHTML = itemCapital;
                document.getElementById('item-sale-price').innerHTML = itemSalePrice;
            };

            function dis() {
                var itemCapital = $('#item_id option:selected').attr("data-capital");
                var itemSalePrice = $('#item_id option:selected').attr("data-sale-price");

                var discount = document.getElementById("discount").value;

                document.getElementById('item-capital').innerHTML = itemCapital;
                document.getElementById('item-sale-price').innerHTML = itemSalePrice - discount;

            };
		</script>
	@endpush


@endsection
