@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.invoices_index') }}
	</p>

	<a href="{{ route('invoices.create') }}"
	   class="btn btn-primary"
	   style="margin-bottom: 10px">
		<i class="fa fa-plus"></i>
		{{ trans('titles.invoices_create') }}
	</a>



	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<p>
						{{ trans('invoices.table_count') }}
						<span class="count-table">
							{{ \App\Invoice::numberOfInvoice() }}
						</span>
					</p>


				</div>
				<!-- /.box-header -->



				<div class="box-body">
					<table id="myTable" class="table table-bordered table-striped display nowrap" style="width:100%">
						<thead>
						<tr>
							<th>
								<i class="fa fa-sort-numeric-asc"></i>
								{{ trans('invoices.number') }}
							</th>

							<th>
								<i class="fa fa-barcode"></i>
								{{ trans('invoices.invoice_number') }}
							</th>

							<th>
								<i class="fa fa-calendar"></i>
								{{ trans('invoices.invoice_date') }}
							</th>

							<th>
								<i class="fa fa-users"></i>
								{{ trans('invoices.customer_company') }}
							</th>

							<th>
								<i class="fa fa-user-o"></i>
								{{ trans('invoices.user_name') }}
							</th>

							<th>
								<i class="fa fa-cog"></i>
								{{ trans('invoices.settings') }}
							</th>

						</tr>
						</thead>
						<tbody>
                        <?php $i = 1; ?>
						@foreach($invoices as $invoice)
							<tr>
								<td>
									{{ $i }}
                                    <?php $i++; ?>
								</td>
								<td>{{ $invoice->invoice_number }}</td>
								<td>{{ $invoice->invoice_date }}</td>
								<td>{{ $invoice->customer->company }}</td>
								<td>{{ $invoice->user->name}}</td>
								<td>


									<a href="{{ adminUrl('invoices/' . $invoice->id) }}"
									   class="btn btn-sm btn-primary">
										<i class="fa fa-eye"></i>
									</a>

									{{--<a href="{{ adminUrl('invoices/' . $invoice->id . '/edit') }}"--}}
									   {{--class="btn btn-sm btn-success">--}}
										{{--<i class="fa fa-edit"></i>--}}
									{{--</a>--}}

									<a href="#"
									   data-toggle="modal"
									   data-target="#delete-invoice{{ $invoice->id }}"
									   class="btn btn-sm btn-danger">
										<i class="fa fa-times"></i>
									</a>

								</td>

							</tr>
						@endforeach
					</table>
				</div>


				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>




	{{--MODAL DELETE USER --}}
	@foreach($invoices as $invoice)
		@include('admin.invoices.modal-delete')
	@endforeach

@endsection