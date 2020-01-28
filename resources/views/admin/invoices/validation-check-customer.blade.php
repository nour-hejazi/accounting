<div class="callout callout-danger">
	<p>
		<i class="fa fa-exclamation-triangle"></i>
		{{ trans('invoices.there_is_no_any_customer') }}
	</p>
	<i class="fa fa-exclamation-triangle"></i>
	{{ trans('invoices.there_is_no_any_customer_message') }}

	<a href="{{ adminUrl('customers/create') }}">
		<i class="fa fa-plus"></i>
		{{ trans('invoices.button_customer_create') }}
	</a>
</div>