<ul class="list-group">

	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-user"></i>
				{{ trans('users.table_name') }} :
			</div>
			<div class="col-md-6">
				{{ $user->name }}
			</div>
		</div>
	</li>


	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-circle-o"></i>
				{{ trans('users.role') }} :
			</div>
			<div class="col-md-6">
				{{ $user->role == \App\User::USER_ROLE_ADMIN ? trans('users.role_admin') : trans('users.role_accountant') }}
			</div>
		</div>
	</li>


	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-envelope-o"></i>
				{{ trans('users.table_email') }} :
			</div>
			<div class="col-md-6">
				{{ $user->email }}
			</div>
		</div>
	</li>


	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-calendar"></i>
				{{ trans('users.table_created_at_date') }} :
			</div>
			<div class="col-md-6">
				<span class="span-background-primary">
					{{ $user->created_at->format('Y-m-d') }}
				</span>
			</div>
		</div>
	</li>

</ul>
