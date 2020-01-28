@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ $title }}
	</p>

	<a href="{{ route('bills.create') }}"
	   class="btn btn-primary"
	   style="margin-bottom: 10px">
		<i class="fa fa-plus"></i>
		{{ trans('titles.bills_create') }}
	</a>


	<div class="box box-primary">
		<div class="box-header with-border">
			<p>
				{{ trans('bills.count') }}
				<span class="count-table">
					{{ \App\Bill::numberOfBills() }}
				</span>
				<span>
					{{--{{ \App\Expense::expenseAllPaid($expense->id) }}--}}
				</span>
			</p>
		</div>
		<!-- /.box-header -->

		<div class="box-body">
			<table id="myTable" class="table table-bordered table-striped display nowrap" style="width:100%">
				<thead>
				<tr>
					<th>#</th>
					<th>{{ trans('bills.date') }}</th>
					<th>{{ trans('bills.type') }}</th>
					<th>{{ trans('expenses.cost') }}</th>
					<th>{{ trans('expenses.paid') }}</th>
					<th>{{ trans('expenses.rest') }}</th>
					<th>{{ trans('expenses.status') }}</th>
					<th>{{ trans('bills.settings') }}</th>
				</tr>
				</thead>
				<tbody>
                <?php $i = 1; ?>
				@foreach($bills as $bill)
					<tr>
						<td>
							{{ $i }}
                            <?php $i++; ?>
						</td>
						<td>{{ $bill->created_at->format('Y-m-d') }}</td>
						<td>{{ $bill->expense->type }}</td>
						<td>{{ $bill->cost }}</td>
						<td>{{ $bill->paid }}</td>
						<td>{{ $bill->rest }}</td>
						<td>
							@if($bill->status == \App\Bill::BILL_STATUS_DRAFT)
								{{ trans('bills.bill_status_draft') }}
							@endif
							@if($bill->status == \App\Bill::BILL_STATUS_PARTIAL)
								{{ trans('bills.bill_status_partial') }}
							@endif
							@if($bill->status == \App\Bill::BILL_STATUS_PAID)
								{{ trans('bills.bill_status_paid') }}
							@endif
						</td>


						<td>

							<a href="{{ adminUrl('bills/' . $bill->id) }}"
							   class="btn btn-sm btn-primary">
								<i class="fa fa-eye"></i>
							</a>

							{{--<a href="{{ adminUrl('bills/' . $bill->id . '/edit') }}"--}}
							   {{--class="btn btn-sm btn-success">--}}
								{{--<i class="fa fa-edit"></i>--}}
							{{--</a>--}}

							<a href="#"
							   data-toggle="modal"
							   data-target="#delete-bill{{ $bill->id }}"
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



	@foreach($bills as $bill)
		@include('admin.bills.modal-delete')
	@endforeach

@endsection