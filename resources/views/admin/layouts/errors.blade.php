@if (count($errors) > 0)
	<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<p>
				<i class="fa fa-times"></i>
				{{ $error }}
			</p>
		@endforeach
	</div>
@endif
