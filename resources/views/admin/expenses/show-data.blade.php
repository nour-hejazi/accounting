<ul class="list-group">

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-sitemap"></i>
				{{ trans('expenses.type') }} :
			</div>
			<div class="col-md-6">
				{{ $expense->type }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-sort-numeric-asc"></i>
				{{ trans('expenses.number_of_bills') }} :
			</div>
			<div class="col-md-6">
				{{ \App\Bill::numberOfPaidByExpense($expense->id) }}
			</div>
		</div>
	</li>

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-money"></i>
				{{ trans('expenses.all_paid') }} :
			</div>
			<div class="col-md-6">
				{{ \App\Expense::expenseAllPaid($expense->id) }}
			</div>
		</div>
	</li>


</ul>
