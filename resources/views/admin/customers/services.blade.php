@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.customers_services') }} /
		{{ $customer->company }}
	</p>

	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-user-o"></i>
				{{ trans('titles.customers_services') }}
			</p>
		</div>
		<!-- /.box-header -->

		<div class="box-body">
			<table id="myTable" class="table table-bordered table-striped display nowrap" style="width:100%">
				<thead>
				<tr>
					<th>{{ trans('invoices.invoice_number') }}</th>
					<th>{{ trans('invoices.added_created_at_date') }}</th>
					<th>{{ trans('invoices.item_name') }}</th>
					<th>{{ trans('invoices.capital') }}</th>
					<th>{{ trans('invoices.sale_price') }}</th>
					<th>{{ trans('invoices.discount') }}</th>
					<th>{{ trans('customers.settings') }}</th>
				</tr>
				</thead>
				<tbody>

				@foreach($invoices as $invoice)
					<tr>
						<td>{{ $invoice->invoice_number }}</td>
						<td>{{ $invoice->created_at->format('Y-m-d') }}</td>
						<td>{{ $invoice->item->name }}</td>
						<td>{{ $invoice->capital }}</td>
						<td>{{ $invoice->sale_price }}</td>
						<td>{{ $invoice->discount }}</td>


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

@endsection