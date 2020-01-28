@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.users_bills') }} /
		{{ trans('users.bills_paid_by_user') }}
		{{ $user->name }}
	</p>

	<div class="box box-primary">
		<div class="box-header with-border">

			{{ trans('users.expenses_count') }}
			<span class="count-table">
				{{ \App\User::userBills($user->id) }}
			</span>


		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="myTable" class="table table-bordered table-striped display nowrap" style="width:100%">
				<thead>
				<tr>
					<th>#</th>
					<th>{{ trans('users.type') }}</th>
					<th>{{ trans('users.created_at_date') }}</th>
					<th>{{ trans('users.cost') }}</th>
					<th>{{ trans('users.paid') }}</th>
					<th>{{ trans('users.rest') }}</th>
					<th>{{ trans('users.bill_status') }}</th>
					<th>{{ trans('users.settings') }}</th>
				</tr>
				</thead>
				<tbody>
                <?php $i = 1; ?>
				@foreach($user->bills as $bill)
					<tr>
						<td>
							{{ $i }}
                            <?php $i++; ?>
						</td>
						<td>{{ $bill->expense->type }}</td>
						<td>{{ $bill->created_at->format('Y.m.d')}}</td>
						<td>
							<span class="span-background-info">
								{{ $bill->cost }}
							</span>
						</td>
						<td>
							<span class="span-background-success">
								{{ $bill->paid }}
							</span>
						</td>
						<td>
							<span class="span-background-danger">
								{{ $bill->rest }}
							</span>
						</td>
						<td>
							@if($bill->status == \App\Bill::BILL_STATUS_DRAFT)
								<span class="span-background-danger">
									{{ trans('users.status_draft') }}
								</span>
							@elseif($bill->status == \App\Bill::BILL_STATUS_PARTIAL)
								<span class="span-background-war">
									{{ trans('users.status_partial') }}
								</span>
							@elseif($bill->status == \App\Bill::BILL_STATUS_PAID)
								<span class="span-background-success">
									{{ trans('users.status_partial') }}
								</span>
							@endif


						</td>
						<td>
							<a href="{{ adminUrl('bills/' . $bill->id) }}"
							   class="btn btn-sm btn-primary">
								<i class="fa fa-eye"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->


	<div class="box box-primary">
		<div class="box-header with-border">
			<p class="lead" style="margin-bottom: 0">
				<i class="fa fa-money"></i>
				{{ trans('titles.users_expenses') }}
			</p>
		</div>
		<!-- /.box-header -->
		<div class="box-body">


		</div>

	</div>
@endsection