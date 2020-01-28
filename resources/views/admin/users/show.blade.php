@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('users.title_show') }} /
		{{ $user->name }}
	</p>


	<div class="box box-primary">

		<div class="box-body">
			<div class="row">


				<div class="col-md-6">
					@include('admin.users.show-data')
				</div>

				<div class="col-md-6">
					@if(!empty($user->image))
						<br>
						<div class="">
							<div class="" style="margin: 0 20% 0 0">
								<a data-fancybox="gallery"
								   data-caption="{{ strtoupper($user->name) }} - {{ trans('users.table_image') }}"
								   href="{{ DIRECTORY_SEPARATOR . $user->image }}">
									<img src="{{ DIRECTORY_SEPARATOR . $user->image }}"
									     alt="{{ DIRECTORY_SEPARATOR . $user->image }}"
									     class="thumbnail"
									     style="width: 350px; height: 350px;  border-radius: 50%; border: 1px solid #000">
								</a>
							</div>
						</div>
					@else
						<p class="text-center" style="margin-top: 10%">
							{{ trans('users.table_no_image') }}
						</p>
					@endif
				</div>


			</div>


			<hr>


		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

	{{--MODAL--}}
	{{--@include('admin.users.modals.modal-delete')--}}

@endsection

