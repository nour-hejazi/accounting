<div class="modal fade" id="delete-payment{{ $payment->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<p class="modal-title" id="exampleModalLabel">
					<i class="fa fa-angle-left"></i>
					{{ trans('main.dashboard') }} /
					{{ trans('titles.invoices_payments_delete') }} /
{{--					{{ $payment->bill->type }} /--}}
					{{ trans('invoices_payments.amount') }}: {{ $payment->amount }}

				</p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				@include('admin.bill-payments.show-payment')

				<p>
					{{ trans('titles.invoices_payments_message_delete') }}
				</p>
			</div>
			<div class="modal-footer">

				<form action="{{ route('bill_payments.destroy', $payment->id) }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="delete">

					<button type="button"
					        class="btn btn-primary"
					        data-dismiss="modal">
						<i class="fa fa-check"></i>
						{{ trans('invoices.button_cancel') }}
					</button>
					<button type="submit"
					        class="btn btn-danger">
						<i class="fa fa-trash"></i>
						{{ trans('invoices.button_delete') }}
					</button>

				</form>
			</div>
		</div>
	</div>
</div>