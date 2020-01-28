@extends('admin.index')
@section('content')
	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('users.title_edit') }} /
		{{ $user->name }}
	</p>

	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title lead">
				{{ trans('users.title_edit') }}
			</h3>
		</div>
		<!-- /.box-header -->

		<div class="box-body">
			<form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
				<input name="_method" type="hidden" value="PUT">

				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name"><i class="fa fa-user"></i>
								{{ trans('users.table_name') }}
							</label>
							<input id="name"
							       class="form-control"
							       type="text"
							       name="name"
							       placeholder="{{ trans('users.table_name') }}"
							       value="{{ $user->name }}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email"><i class="fa fa-envelope-o"></i>
								{{ trans('users.table_email') }}
							</label>
							<input id="email"
							       class="form-control"
							       type="email"
							       name="email"
							       placeholder="{{ trans('users.table_email') }}"
							       value="{{ $user->email }}">
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
							       class="form-control"
							       type="password"
							       name="password"
							       placeholder="{{ trans('users.table_password') }}"
							       value="">
						</div>
					</div>

					{{--@if(auth()->user()->role == \App\User::USER_ROLE_ADMIN)--}}
						{{--<div class="col-md-6">--}}
							{{--<div class="form-group">--}}
								{{--<label for="role"><i class="fa fa-circle-o"></i>--}}
									{{--{{ trans('users.role') }}--}}
								{{--</label>--}}
								{{--<select name="role" id="role" class="form-control">--}}
									{{--<option {{ $user->role == \App\User::USER_ROLE_ADMIN ? 'selected' : '' }} value="{{ \App\User::USER_ROLE_ADMIN }}">--}}
										{{--{{ trans('users.role_admin') }}--}}
									{{--</option>--}}
									{{--<option {{ $user->role == \App\User::USER_ROLE_ACCOUNTANT ? 'selected' : '' }} value="{{ \App\User::USER_ROLE_ACCOUNTANT }}">--}}
										{{--{{ trans('users.role_accountant') }}--}}
									{{--</option>--}}
								{{--</select>--}}

							{{--</div>--}}
						{{--</div>--}}
					{{--@endif--}}

					<div class="col-md-6">
						<div class="form-group">
							<label for=image"><i class="fa fa-image"></i>
								{{ trans('users.table_image') }}
							</label>
							<input id="image" name="image" type="file" class="form-control">
						</div>
					</div>
				</div>


				<div class="row">

					<div class="col-md-6">
						@if(!empty($user->image))
							<br>
							<a data-fancybox="gallery"
							   data-caption="{{ strtoupper($user->name) }} - {{ trans('users.table_image') }}"
							   href="{{ url($user->image) }}">
								<img src="{{ url($user->image) }}"
								     alt="{{ url($user->image) }}"
								     class="thumbnail"
								     style="width: 50px; height: 50px;  border-radius: 50%; border: 1px solid #000">
							</a>
						@else
							<p>{{ trans('users.table_no_image') }}</p>
						@endif
					</div>
				</div>


				<div class="form-group">
					<button type="submit"
					        class="btn btn-success ">
						<i class="fa fa-plus"></i>
						{{ trans('users.button_edit') }}
					</button>
				</div>
			</form>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

@endsection
