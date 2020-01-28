@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.customers_debts') }} /
		{{ $customer->company }}
	</p>









	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ trans('titles.customers_debts') }}
			</p>
		</div>
		<!-- /.box-header -->

		<div class="box-body">
			<div class="box-body">
				<table id="myTable" class="table table-bordered table-striped display nowrap" style="width:100%">
					<thead>
					<tr>
						<th>{{ trans('invoices.invoice_number') }}</th>
						<th>{{ trans('invoices.added_created_at_date') }}</th>
						<th>{{ trans('invoices.rest') }}</th>
						<th>{{ trans('customers.settings') }}</th>
					</tr>
					</thead>
					<tbody>

					@foreach($invoices_debts as $invoice)
						<tr>
							<td>{{ $invoice->invoice_number }}</td>
							<td>{{ $invoice->created_at->format('Y-m-d') }}</td>
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
		</div>
	</div>

@endsection