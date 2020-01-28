<div class="modal fade" id="delete-customer{{ $customer->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<p class="modal-title" id="exampleModalLabel">
					<i class="fa fa-angle-left"></i>
					{{ trans('main.dashboard') }} /
					{{ trans('titles.customers_delete') }} /
					{{ $customer->company }}
				</p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul class="list-group">

					<li class="list-group-item">
						<div class="row">
							<div class="col-md-6">
								<i class="fa fa-users"></i>
								{{ trans('customers.company') }} :
							</div>
							<div class="col-md-6">
								{{ $customer->company }}
							</div>
						</div>
					</li>

					<li class="list-group-item">
						<div class="row">
							<div class="col-md-6">
								<i class="fa fa-users"></i>
								{{ trans('customers.company_real') }} :
							</div>
							<div class="col-md-6">
								{{ $customer->company_real }}
							</div>
						</div>
					</li>
				</ul>
				<hr>
				<p>
					{{ trans('confirmation.delete_customer') }}
				</p>
			</div>
			<div class="modal-footer">

				<form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="delete">

					<button type="button"
					        class="btn btn-primary"
					        data-dismiss="modal">
						<i class="fa fa-check"></i>
						{{ trans('users.button_cancel') }}
					</button>
					<button type="submit"
					        class="btn btn-danger">
						<i class="fa fa-trash"></i>
						{{ trans('users.button_delete') }}
					</button>

				</form>
			</div>
		</div>
	</div>
</div>