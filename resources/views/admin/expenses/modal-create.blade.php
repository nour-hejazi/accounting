<div class="modal fade" id="create-expense" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
	<div class="modal-dialog" role="document">

		<form action="{{ route('expenses.store') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="modal-content">
				<div class="modal-header">
					<p class="modal-title" id="exampleModalLabel">
						<i class="fa fa-angle-left"></i>
						{{ trans('main.dashboard') }} /
						{{ trans('titles.expenses_create') }}
					</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label for="type">
									<i class="fa fa-sitemap"></i>
									{{ trans('expenses.type') }}
									<span class="star">*</span>
								</label>
								<input id="type"
								       type="text"
								       required="required"
								       class="form-control"
								       placeholder="{{ trans('expenses.type') }}"
								       value="{{ old('type') }}"
								       name="type">
							</div>
						</div>
					</div>


				</div>
				<div class="modal-footer">

					<button type="button"
					        class="btn btn-danger"
					        data-dismiss="modal">
						<i class="fa fa-times"></i>
						{{ trans('expenses.button_cancel') }}
					</button>
					<button type="submit"
					        class="btn btn-primary">
						<i class="fa fa-plus"></i>
						{{ trans('expenses.button_create') }}
					</button>

				</div>
			</div>
		</form>
	</div>
</div>