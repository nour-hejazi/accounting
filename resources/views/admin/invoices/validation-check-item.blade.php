<div class="callout callout-danger">
	<p>
		<i class="fa fa-exclamation-triangle"></i>
		{{ trans('invoices.there_is_no_any_item') }}
	</p>
	<i class="fa fa-exclamation-triangle"></i>
	{{ trans('invoices.there_is_no_any_item_message') }}

	<a href="{{ adminUrl('items/create') }}">
		<i class="fa fa-plus"></i>
		{{ trans('invoices.button_item_create') }}
	</a>
</div>