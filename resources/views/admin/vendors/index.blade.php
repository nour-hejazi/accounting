@extends('admin.index')
@section('content')

	<p class="lead">
		<i class="fa fa-angle-left"></i>
		{{ trans('main.dashboard') }} /
		{{ trans('titles.vendors_index') }}
	</p>

	<a href="{{ route('vendors.create') }}"
	   class="btn btn-primary"
	   style="margin-bottom: 10px">
		<i class="fa fa-plus"></i>
		{{ trans('titles.vendors_create') }}
	</a>



	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<p>
						{{ trans('vendors.table_count') }}
						<span class="count-table">
							{{ \App\Vendor::numberOfVendors() }}
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
								{{ trans('vendors.number') }}
							</th>

							<th>
								<i class="fa fa-users"></i>
								{{ trans('vendors.company') }}
							</th>

							<th>
								<i class="fa fa-user-o"></i>
								{{ trans('vendors.name') }}
							</th>

							<th>
								<i class="fa fa-cog"></i>
								{{ trans('vendors.settings') }}
							</th>

						</tr>
						</thead>
						<tbody>
                        <?php $i = 1; ?>
						@foreach($vendors as $vendor)
							<tr>
								<td>
									{{ $i }}
                                    <?php $i++; ?>
								</td>
								<td>{{ $vendor->company }}</td>
								<td>{{ $vendor->name . " " . $vendor->surname}}</td>



								<td>


									<a href="{{ adminUrl('vendors/' . $vendor->id) }}"
									   class="btn btn-sm btn-primary">
										<i class="fa fa-eye"></i>
									</a>

									<a href="{{ adminUrl('vendors/' . $vendor->id . '/edit') }}"
									   class="btn btn-sm btn-success">
										<i class="fa fa-edit"></i>
									</a>

									<a href="#"
									   data-toggle="modal"
									   data-target="#delete-vendor{{ $vendor->id }}"
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
	@foreach($vendors as $vendor)
		@include('admin.vendors.modal-delete')
	@endforeach


@endsection

