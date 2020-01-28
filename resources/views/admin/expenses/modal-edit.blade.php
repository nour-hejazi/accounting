<div class="modal fade" id="edit-expense{{ $expense->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<p class="modal-title" id="exampleModalLabel">
					<i class="fa fa-angle-left"></i>
					{{ trans('main.dashboard') }} /
					{{ trans('titles.expenses_edit') }}
				</p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{ route('expenses.update', $expense->id) }}" method="POST" enctype="multipart/form-data">
				<div class="modal-body">
					{{ csrf_field() }}
					<input name="_method" type="hidden" value="PUT">
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
								       value="{{ $expense->type }}"
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
					        class="btn btn-success">
						<i class="fa fa-plus"></i>
						{{ trans('expenses.button_edit') }}
					</button>

				</div>

			</form>
		</div>
	</div>
</div>