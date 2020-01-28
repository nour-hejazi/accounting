<div class="row">
	<div class="col-md-6">
		@include('admin.invoices.show-invoice-info')
	</div>
	<div class="col-md-6">
		@include('admin.invoices.show-item-info')
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-6">
		@include('admin.invoices.show-money-info')
	</div>

	<div class="col-md-6">
		@include('admin.invoices.show-date-info')
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-12">
		@include('admin.invoices.show-desc-info')
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-6">
		@include('admin.invoice-histories.histories')
	</div>

	<div class="col-md-6">
		@include('admin.invoice-payments.payments')
	</div>
</div>










