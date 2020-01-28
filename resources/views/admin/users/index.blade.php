@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('users.title_index') }}
	</p>
	@if(auth()->user()->role == \App\User::USER_ROLE_ADMIN)
	<a href="{{ route('users.create') }}"
	   class="btn btn-primary"
	   style="margin-bottom: 10px">
		<i class="fa fa-plus"></i>
		{{ trans('users.title_create') }}
	</a>
	@endif




	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">

					{{ trans('users.table_count') }}
					<span class="count-table">
						{{ \App\User::numberOfUsers() }}
					</span>

				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>#</th>
							<th>
								<i class="fa fa-user-o"></i>
								{{ trans('users.table_name') }}
							</th>
							<th>
								<i class="fa fa-envelope-o"></i>
								{{ trans('users.table_email') }}
							</th>
							<th>
								<i class="fa fa-circle-o"></i>
								{{ trans('users.role') }}
							</th>

							<th>
								<i class="fa fa-cog"></i>
								{{ trans('users.table_settings') }}
							</th>
						</tr>
						@foreach($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email}}</td>
								<td>{{ $user->role == \App\User::USER_ROLE_ADMIN ? trans('users.role_admin') : trans('users.role_accountant')}}</td>

								<td>

									<a href="{{ adminUrl('users/' . $user->id . '/bills') }}"
									   class="btn btn-sm btn-warning">

										<i class="fa fa-money"></i>
										{{ trans('users.button_bills') }}
									</a>

									<a href="{{ adminUrl('users/' . $user->id) }}"
									   class="btn btn-sm btn-primary">
										<i class="fa fa-eye"></i>
									</a>

									@if($user->id == auth()->user()->id || auth()->user()->role == \App\User::USER_ROLE_ADMIN && $user->role == \App\User::USER_ROLE_ACCOUNTANT)
										<a href="{{ adminUrl('users/' . $user->id . '/edit') }}"
										   class="btn btn-sm btn-success">
											<i class="fa fa-edit"></i>
										</a>
									@endif

									@if($user->role == \App\User::USER_ROLE_ACCOUNTANT && auth()->user()->role != \App\User::USER_ROLE_ACCOUNTANT)
										<a href="#"
										   data-toggle="modal"
										   data-target="#delete-user{{ $user->id }}"
										   class="btn btn-sm btn-danger">
											<i class="fa fa-times"></i>
										</a>
									@endif


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
	@foreach($users as $user)
	@include('admin.users.modal-delete')
	@endforeach


@endsection

