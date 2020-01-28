@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ $title }}
	</p>

	<a href="#"
	   data-toggle="modal" data-target="#create-expense"
	   class="btn btn-primary"
	   style="margin-bottom: 10px">
		<i class="fa fa-plus"></i>
		{{ trans('expenses.button_create') }}
	</a>
	<br>
	<div class="box box-success collapsed-box">
		<div class="box-header with-border">
			<p class="box-title">
				<i class="fa fa-folder-o"></i>
				{{ trans('expenses.expenses_types') }}
			</p>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse">
					<i class="fa fa-plus"></i>
				</button>
			</div>
			<!-- /.box-tools -->
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<p>
				{{ trans('expenses.count') }}:
				<span class="span-background-info">
					{{ \App\Expense::numberOfExpense() }}
				</span>

			</p>
			<table class="table table-condensed">
				<tr>
					<th>#</th>
					<th>{{ trans('expenses.type') }}</th>
					<th>{{ trans('expenses.all_invoices') }}</th>
					<th>{{ trans('expenses.all_paid') }}</th>
					<th>{{ trans('expenses.settings') }}</th>
				</tr>
                <?php $i = 1; ?>
				@foreach($expenses as $expense)
					<tr>
						<td>
							{{ $i }}
                            <?php $i++; ?>
						</td>
						<td>{{ $expense->type }}</td>
						<td>{{ \App\Bill::numberOfPaidByExpense($expense->id) }}</td>
						<td>{{ \App\Expense::expenseAllPaid($expense->id) }}</td>

						<td>
							<span class="label label-success"
							      style="margin: 0 2px"
							      data-toggle="modal"
							      data-target="#edit-expense{{ $expense->id }}">
								<i class="fa fa-edit"></i>
							</span>

							<span class="label label-danger"
							      style="margin: 0 2px"
							      data-toggle="modal"
							      data-target="#delete-expense{{ $expense->id }}"
							      style="cursor:pointer">
								<i class="fa fa-times"></i>
							</span>
						</td>
					</tr>
				@endforeach


			</table>


		</div>
	</div>

	<div class="row">
		@foreach($expenses as $expense)
			<div class="col-md-3" style="margin-bottom: 20px">
				<a href="{{ adminUrl('expenses/' . $expense->id . '/paid') }}" class="btn btn-info" style="width: 100%; padding: 50px 0; font-size: 20px">
					{{ $expense->type }}
				</a>
			</div>
		@endforeach
	</div>








	{{--MODAL CREATE EXPENSE TYPE--}}
	@include('admin.expenses.modal-create')

	{{--MODAL DELETE EXPENSE TYPE --}}
	@foreach($expenses as $expense)
		@include('admin.expenses.modal-edit')
		@include('admin.expenses.modal-delete')
	@endforeach


@endsection

