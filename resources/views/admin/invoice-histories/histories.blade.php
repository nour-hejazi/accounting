<div class="box box-info collapsed-box">
	<div class="box-header with-border">
		<p class="box-title">
			<i class="fa fa-history"></i>
			{{ trans('invoices.histories') }}
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
					<i class="fa fa-toggle-on"></i>
					{{ trans('invoices.status') }}
				</th>

				<th>
					<i class="fa fa-file-o"></i>
					{{ trans('invoices.description') }}
				</th>
			</tr>
			<?php $i = 1; ?>
			@foreach($invoice->histories as $history)
				<tr>
					<td>
						{{ $i }}
						<?php $i++; ?>
					</td>
					<td>
						<span class="label label-primary">
							{{ $history->created_at->format('Y-m-d') }}
						</span>
					</td>
					<td>
						@if($history->status == \App\Invoice::INVOICE_STATUS_DRAFT)
							<span class="label label-danger">
								{{ trans('invoices.invoice_status_draft') }}
							</span>
						@endif
						@if($history->status == \App\Invoice::INVOICE_STATUS_PARTIAL)
							<span class="label label-warning">
								{{ trans('invoices.invoice_status_partial') }}
							</span>
						@endif
						@if($history->status == \App\Invoice::INVOICE_STATUS_PAID)
							<span class="label label-success">
								{{ trans('invoices.invoice_status_paid') }}
							</span>
						@endif
					</td>

					<td>{{ $history->description }}</td>
				</tr>
			@endforeach


		</table>


	</div>
</div>