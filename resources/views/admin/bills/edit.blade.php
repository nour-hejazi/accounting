{{--@extends('admin.index')--}}
{{--@section('content')--}}

	{{--<p class="lead">--}}
		{{--<i class="fa fa-angle-left"></i>--}}
		{{--{{ trans('main.dashboard') }} /--}}
		{{--{{ $title }}--}}
	{{--</p>--}}


	{{--<div class="box box-primary">--}}
		{{--<div class="box-header with-border">--}}
			{{--<p class="lead" style="margin-bottom: 0">--}}
				{{--<i class="fa fa-money"></i>--}}
				{{--{{ trans('titles.bills_edit') }}--}}
			{{--</p>--}}
		{{--</div>--}}
		{{--<!-- /.box-header -->--}}
		{{--<div class="box-body">--}}
			{{--<form action="{{ route('bills.update', $bill->id) }}" method="POST" enctype="multipart/form-data">--}}
				{{--{{ csrf_field() }}--}}
				{{--<input name="_method" type="hidden" value="PUT">--}}

				{{--<div class="form-group">--}}
					{{--<div class="row">--}}
						{{--<div class="col-md-6">--}}
							{{--<label for="type">--}}
								{{--<i class="fa fa-check"></i>--}}
								{{--{{ trans('bills.type') }}--}}
								{{--<span class="star">*</span>--}}
							{{--</label>--}}
							{{--<select name="expense_id"--}}
							        {{--required="required"--}}
							        {{--class="form-control select2"--}}
							        {{--id="expense_id">--}}
								{{--@foreach($expenses as $expense)--}}
									{{--<option value="{{ $expense->id }}"--}}
											{{--{{ $expense->id == $bill->expense_id ? 'selected' : null }}>--}}
										{{--{{ $expense->type }}--}}
									{{--</option>--}}
								{{--@endforeach--}}
							{{--</select>--}}
						{{--</div>--}}

						{{--<div class="col-md-3">--}}
							{{--<label for="user_id">--}}
								{{--<i class="fa fa-user-o"></i>--}}
								{{--{{ trans('bills.user') }}--}}
								{{--<span class="star">*</span>--}}
							{{--</label>--}}
							{{--<select name="user_id"--}}
							        {{--id="user_id"--}}
							        {{--class="form-control select2"--}}
							        {{--required="required">--}}
								{{--@foreach($users as $user)--}}
									{{--<option value="{{ $user->id }}"--}}
											{{--{{ $user->id == $bill->user_id ? 'selected' : null }}>--}}
										{{--{{ $user->name }}--}}
									{{--</option>--}}
								{{--@endforeach--}}
							{{--</select>--}}
						{{--</div>--}}



						{{--<div class="col-md-3">--}}
							{{--<label for="cost">--}}
								{{--<i class="fa fa-money"></i>--}}
								{{--{{ trans('bills.cost') }}--}}
								{{--<span class="star">*</span>--}}
							{{--</label>--}}
							{{--<input id="cost"--}}
							       {{--type="text"--}}
							       {{--class="form-control"--}}
							       {{--required="required"--}}
							       {{--placeholder="{{ trans('bills.cost') }}"--}}
							       {{--value="{{ $bill->cost }}"--}}
							       {{--name="cost">--}}
						{{--</div>--}}


					{{--</div>--}}
				{{--</div>--}}

				{{--<div class="form-group">--}}
					{{--<div class="row">--}}
						{{--<div class="col-md-12">--}}
							{{--<label for="description">--}}
								{{--<i class="fa fa-file-o"></i>--}}
								{{--{{ trans('bills.description') }}--}}
								{{--<span class="star">*</span>--}}
							{{--</label>--}}
							{{--<textarea name="description"--}}
							          {{--id="description"--}}
							          {{--class="form-control"--}}
							          {{--required="required"--}}
							          {{--placeholder="{{ trans('expenses.description') }}"--}}
							          {{--rows="5">{{ $bill->description }}</textarea>--}}
						{{--</div>--}}


					{{--</div>--}}
				{{--</div>--}}


				{{--<div class="form-group">--}}
					{{--<button type="submit"--}}
					        {{--class="btn btn-primary ">--}}
						{{--<i class="fa fa-plus"></i>--}}
						{{--{{ trans('bills.button_create') }}--}}
					{{--</button>--}}
				{{--</div>--}}
			{{--</form>--}}
		{{--</div>--}}
	{{--</div>--}}

{{--@endsection--}}