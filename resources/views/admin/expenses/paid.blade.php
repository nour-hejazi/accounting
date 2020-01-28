@extends('admin.index')
@section('content')


	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.expenses_paid') }} /
		{{ $expense->type }}
	</p>

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<p>
						{{ trans('expenses.expense_all_paid', ['type' => $expense->type]) }}
						<span class="span-background-success">
							{{ \App\Expense::expenseAllPaid($expense->id) }}
						</span>
					</p>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<table class="table table-condensed">
						<thead>
						<tr>
							<th>#</th>
							<th>{{ trans('expenses.date') }}</th>
							<th>{{ trans('expenses.cost') }}</th>
							<th>{{ trans('expenses.paid') }}</th>
							<th>{{ trans('expenses.rest') }}</th>
							<th>{{ trans('expenses.status') }}</th>
							<th>{{ trans('expenses.settings') }}</th>
						</tr>
						</thead>
						<tbody>
                        <?php $i = 1; ?>
						@foreach($expense->bills as $bill)
							<tr>
								<td>
									{{ $i }}
                                    <?php $i++; ?>
								</td>
								<td>{{ $bill->created_at->format('Y-m-d') }}</td>
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


									<a href="#"
									   data-toggle="modal"
									   data-target="#delete-bill{{ $bill->id }}"
									   class="btn btn-sm btn-danger">
										<i class="fa fa-times"></i>
									</a>

								</td>

							</tr>
						@endforeach
						</tbody>


					</table>


				</div>


				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>

	@foreach($expense->bills as $bill)
		@include('admin.bills.modal-delete')
	@endforeach

@endsection