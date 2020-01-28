<div class="callout callout-danger">
	<p>
		<i class="fa fa-exclamation-triangle"></i>
		{{ trans('bills.there_is_no_any_expense') }}
	</p>
	<i class="fa fa-exclamation-triangle"></i>
	{{ trans('bills.there_is_no_any_expense_message') }}

	<a href="#"
	   data-toggle="modal"
	   data-target="#create-expense">
		<i class="fa fa-plus"></i>
		{{ trans('bills.button_expense_create') }}
	</a>
</div>

@include('admin.expenses.modal-create')