<section class="content">
	<div class="row">
		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-arrow-down"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('home.total_income') }}
					</span>
					<span class="info-box-number">
						{{ \App\Invoice::TotalPaid() }}
						<small> TL</small>
					</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>

		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-arrow-down"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('home.total_box_creditor') }}
					</span>
					<span class="info-box-number">{{ \App\Invoice::IWantFromCustomer() }}
						<small> TL</small></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>


		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-arrow-up"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('home.total_expenses') }}
					</span>
					<span class="info-box-number">{{ \App\Bill::TotalPaid() }}
						<small> TL</small></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>

		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-arrow-up"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('home.total_box_debit') }}

					</span>
					<span class="info-box-number">{{ \App\Bill::IShouldPay() }}

						<small> TL</small></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>

	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('home.total_profit') }}

					</span>
					<span class="info-box-number">{{ \App\Invoice::TotalProfit() }}

						<small> TL</small></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>

		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('home.total_customer') }}

					</span>
					<span class="info-box-number">
						{{ \App\Customer::numberOfCustomer() }}
					</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>

		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-arrow-up"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('home.total_invoices') }}

					</span>
					<span class="info-box-number">
						{{ \App\Invoice::numberOfInvoice() }}
					</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>

		<div class="col-md-3">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-arrow-down"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">
						{{ trans('home.total_bills') }}

					</span>
					<span class="info-box-number">
						{{ \App\Bill::numberOfBills() }}
					</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>



		<div class="col-md-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3>{{ \App\Invoice::numberOfInvoice() }}</h3>

					<p>{{ trans('home.total_invoices') }}</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="{{ route('invoices.index') }}" class="small-box-footer">
					{{ trans('invoices.display_invoices') }}
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>

		<div class="col-md-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3>{{ \App\Invoice::InvoiceDebtors() }}</h3>

					<p>{{ trans('debtors.table_count') }}</p>
				</div>
				<div class="icon">
					<i class="ion ion-pie-graph"></i>
				</div>
				<a href="{{ route('debtors') }}" class="small-box-footer">
					{{ trans('debtors.display_invoices_debtors') }}
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>


	</div>

</section>

<section class="content">

</section>
