<p class="box-title">
	<i class="fa fa-file-o"></i>
	{{ trans('invoices.show_desc_info') }}
</p>


<ul class="list-group">
	<li class="list-group-item">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-file-o"></i>
				{{ trans('invoices.description') }} :
			</div>
			<div class="col-md-6">
				{{ $invoice->description }}
			</div>
		</div>
	</li>

</ul>
