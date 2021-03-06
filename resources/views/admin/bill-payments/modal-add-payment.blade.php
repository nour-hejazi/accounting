<div class="modal fade" id="add-payment" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
	<div class="modal-dialog" role="document">


		<form action="{{ route('bill_payments.store') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

			<div class="modal-content">
				<div class="modal-header">
					<p class="modal-title" id="exampleModalLabel">
						<i class="fa fa-angle-left"></i>
						{{ trans('main.dashboard') }} /
						{{ trans('titles.bills_payment_create') }}
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
									<i class="fa fa-money"></i>
									{{ trans('bills.cost') }} :
								</div>
								<div class="col-md-6">
									<span class="span-background-info">
										{{ $bill->cost }}
									</span>
								</div>
							</div>
						</li>

						<li class="list-group-item">
							<div class="row">
								<div class="col-md-6">
									<i class="fa fa-money"></i>
									{{ trans('bills.paid') }} :
								</div>
								<div class="col-md-6">
									<span class="span-background-success">
										{{ $bill->paid }}
									</span>
								</div>
							</div>
						</li>

						<li class="list-group-item">
							<div class="row">
								<div class="col-md-6">
									<i class="fa fa-money"></i>
									{{ trans('bills.rest') }} :
								</div>
								<div class="col-md-6">
									<span class="span-background-danger">
										{{ $bill->rest }}
									</span>
								</div>
							</div>
						</li>
					</ul>

					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label for="amount">
									<i class="fa fa-sitemap"></i>
									{{ trans('bills_payments.amount') }}
									<span class="star">*</span>
								</label>
								<input id="amount"
								       type="text"
								       required="required"
								       class="form-control"
								       placeholder="{{ trans('bills_payments.amount') }}"
								       value="{{ $bill->rest }}"
								       name="amount">
							</div>
						</div>
					</div>

					<input type="hidden" value="{{ $bill->id }}" name="bill_id">


				</div>
				<div class="modal-footer">

					<button type="button"
					        class="btn btn-danger"
					        data-dismiss="modal">
						<i class="fa fa-times"></i>
						{{ trans('bills_payments.button_cancel') }}
					</button>
					<button type="submit"
					        class="btn btn-primary">
						<i class="fa fa-plus"></i>
						{{ trans('bills_payments.button_add') }}
					</button>

				</div>
			</div>
		</form>
	</div>
</div>