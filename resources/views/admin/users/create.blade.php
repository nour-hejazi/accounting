@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('users.title_create') }}
	</p>

	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title">
				{{ trans('users.title_create') }}
			</h3>
		</div>
		<!-- /.box-header -->

		<div class="box-body">
			<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name"><i class="fa fa-user"></i>
								{{ trans('users.table_name') }}
							</label>
							<input id="name"
							       class="form-control padding-for-input"
							       type="text"
							       name="name"
							       placeholder="{{ trans('users.table_name') }}"
							       value="{{ old('name') }}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email"><i class="fa fa-envelope-o"></i>
								{{ trans('users.table_email') }}
							</label>
							<input id="email"
							       class="form-control padding-for-input"
							       type="email"
							       name="email"
							       placeholder="{{ trans('users.table_email') }}"
							       value="{{ old('email') }}">
						</div>
					</div>
				</div>

				<div class="row">


					<div class="col-md-6">
						<div class="form-group">
							<label for="password"><i class="fa fa-lock"></i>
								{{ trans('users.table_password') }}
							</label>
							<input id="password"
							       class="form-control  padding-for-input"
							       type="password"
							       name="password"
							       placeholder="{{ trans('users.table_password') }}"
							       value="{{ old('password') }}">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="role"><i class="fa fa-circle-o"></i>
								{{ trans('users.role') }}
							</label>
							<select name="role" id="role" class="form-control">
								<option value="{{ \App\User::USER_ROLE_ADMIN }}">
									{{ trans('users.role_admin') }}
								</option>
								<option value="{{ \App\User::USER_ROLE_ACCOUNTANT }}">
									{{ trans('users.role_accountant') }}
								</option>
							</select>

						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="image"><i class="fa fa-image"></i>
								{{ trans('users.table_image') }}
							</label>
							<input id="image" type="file" class="form-control" name="image">
						</div>
					</div>

				</div>




				<div class="form-group">
					<button type="submit"
					        class="btn btn-primary ">
						<i class="fa fa-plus"></i>
						{{ trans('users.button_create') }}
					</button>
				</div>
			</form>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->




@endsection
