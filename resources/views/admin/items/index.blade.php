@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.items_index') }}
	</p>

	<a href="{{ route('items.create') }}"
	   class="btn btn-primary"
	   style="margin-bottom: 10px">
		<i class="fa fa-plus"></i>
		{{ trans('titles.items_create') }}
	</a>



	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<p>
						{{ trans('items.count') }}
						<span class="count-table">
							{{ \App\Item::numberOfItems() }}
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
								{{ trans('items.number') }}
							</th>

							<th>
								<i class="fa fa-code"></i>
								{{ trans('items.code') }}
							</th>

							<th>
								<i class="fa fa-sitemap"></i>
								{{ trans('items.name') }}
							</th>

							<th>
								<i class="fa fa-sitemap"></i>
								{{ trans('items.type') }}
							</th>

							<th>
								<i class="fa fa-money"></i>
								{{ trans('items.capital') }}
							</th>

							<th>
								<i class="fa fa-money"></i>
								{{ trans('items.sale_price') }}
							</th>

							<th>
								<i class="fa fa-cog"></i>
								{{ trans('items.settings') }}
							</th>

						</tr>
						</thead>
						<tbody>
                        <?php $i = 1; ?>
						@foreach($items as $item)
							<tr>
								<td>
									{{ $i }}
                                    <?php $i++; ?>
								</td>
								<td>{{ $item->code }}</td>
								<td>{{ $item->name }}</td>
								<td>{{ $item->type }}</td>

								<td>
									<span class="span-background-ccc">
										{{ $item->capital }}
									</span>
								</td>
								<td>
									<span class="span-background-ccc">
										{{ $item->sale_price }}
									</span>
								</td>

								<td>
									<a href="{{ adminUrl('items/' . $item->id) }}"
									   class="btn btn-sm btn-primary">
										<i class="fa fa-eye"></i>
									</a>

									<a href="{{ adminUrl('items/' . $item->id . '/edit') }}"
									   class="btn btn-sm btn-success">
										<i class="fa fa-edit"></i>
									</a>

									<a href="#"
									   data-toggle="modal"
									   data-target="#delete-item{{ $item->id }}"
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
	@foreach($items as $item)
		@include('admin.items.modal-delete')
	@endforeach


@endsection