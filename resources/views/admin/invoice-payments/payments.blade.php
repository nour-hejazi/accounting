<div class="box box-success collapsed-box">
	<div class="box-header with-border">
		<p class="box-title">
			<i class="fa fa-money"></i>
			{{ trans('invoices.payments') }}
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

		<table class="table table-condensed">
			<tr>
				<th>
					#
				</th>

				<th>
					<i class="fa fa-calendar"></i>
					{{ trans('invoices.date') }}
				</th>

				<th>
					<i class="fa fa-money"></i>
					{{ trans('invoices_payments.amount') }}
				</th>

				<th>
					<i class="fa fa-cog"></i>
					{{ trans('invoices.settings') }}
				</th>
			</tr>
            <?php $i = 1; ?>
			@foreach($invoice->payments as $payment)
				<tr>
					<td>
						{{ $i }}
                        <?php $i++; ?>
					</td>
					<td>
						<span class="label label-primary">
							{{ $payment->created_at->format('Y-m-d') }}
						</span>
					</td>
					<td>
						<span class="label label-success">
							{{ $payment->amount }}
						</span>
					</td>

					<td>
						<span class="label label-danger"
						      data-toggle="modal"
						      data-target="#delete-payment{{ $payment->id }}"
						      style="cursor:pointer">
							<i class="fa fa-times"></i>
						</span>
					</td>
				</tr>
				@include('admin.invoice-payments.modal-delete-payment')
			@endforeach


		</table>


	</div>
</div>
