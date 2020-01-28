@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-dashboard"></i>
		{{ trans('main.dashboard') }} /
		{{ $title }}
	</p>

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<p>
						{{ trans('debtors.table_count') }}
						<span class="count-table">
							{{ \App\Invoice::InvoiceDebtors() }}
						</span>
					</p>


				</div>
				<!-- /.box-header -->



				<div class="box-body">
					<table id="myTable" class="table table-bordered table-striped display nowrap" style="width:100%">
						<thead>
						<tr>
							<th>
								{{ trans('debtors.customer_company') }}
							</th>

							<th>
								{{ trans('debtors.total_cost') }}
							</th>

							<th>
								{{ trans('invoices.settings') }}
							</th>

						</tr>
						</thead>
						<tbody>
                        <?php $i = 1; ?>
						@foreach($invoices as $invoice)
							<tr>

								<td>{{ $invoice->customer->company }}</td>
								<td>{{ $invoice->rest }}</td>

								<td>
									<a href="{{ adminUrl('invoices/' . $invoice->id) }}"
									   class="btn btn-sm btn-primary">
										<i class="fa fa-eye"></i>
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


@endsection