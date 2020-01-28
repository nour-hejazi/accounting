@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.customers_index') }}
	</p>

	<a href="{{ route('customers.create') }}"
	   class="btn btn-primary"
	   style="margin-bottom: 10px">
		<i class="fa fa-plus"></i>
		{{ trans('titles.customers_create') }}
	</a>



	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<p>
						{{ trans('customers.table_count') }}
						<span class="count-table">
							{{ \App\Customer::numberOfCustomer() }}
						</span>
					</p>


				</div>
				<!-- /.box-header -->


				<div class="box-body">
					<table id="myTable" class="table table-bordered table-striped display nowrap" style="width:100%">
						<thead>
						<tr>
							<th>
								<i class="fa fa-sort-numeric-asc"></i>
								{{ trans('customers.number') }}
							</th>

							<th>
								<i class="fa fa-users"></i>
								{{ trans('customers.company') }}
							</th>

							<th>
								<i class="fa fa-user-o"></i>
								{{ trans('customers.name') }}
							</th>

							<th>
								<i class="fa fa-cog"></i>
								{{ trans('customers.settings') }}
							</th>

						</tr>
						</thead>
						<tbody>
                        <?php $i = 1; ?>
						@foreach($customers as $customer)
							<tr>
								<td>
									{{ $i }}
                                    <?php $i++; ?>
								</td>
								<td>{{ $customer->company }}</td>
								<td>{{ $customer->name . " " . $customer->surname}}</td>


								<td>

									<a href="{{ adminUrl('customers/' . $customer->id . '/debts') }}"
									   class="btn btn-sm btn-warning">
										<i class="fa fa-money"></i>
										{{ trans('customers.button_debts') }}
									</a>

									<a href="{{ adminUrl('customers/' . $customer->id . '/services') }}"
									   class="btn btn-sm btn-info">
										<i class="fa fa-server"></i>
										{{ trans('customers.button_services') }}
									</a>

									<a href="{{ adminUrl('customers/' . $customer->id) }}"
									   class="btn btn-sm btn-primary">
										<i class="fa fa-eye"></i>
									</a>

									<a href="{{ adminUrl('customers/' . $customer->id . '/edit') }}"
									   class="btn btn-sm btn-success">
										<i class="fa fa-edit"></i>
									</a>

									<a href="#"
									   data-toggle="modal"
									   data-target="#delete-customer{{ $customer->id }}"
									   class="btn btn-sm btn-danger">
										<i class="fa fa-times"></i>
									</a>

								</td>

							</tr>
						@endforeach
					</table>
				</div>












				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>




	{{--MODAL DELETE USER --}}
	@foreach($customers as $customer)
		@include('admin.customers.modal-delete')
	@endforeach


@endsection

