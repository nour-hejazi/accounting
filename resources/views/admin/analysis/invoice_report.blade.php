<div class="table table-responsive table-report">
	<table class="table table-bordered table-striped table-hover" id="tbl-report-incomes">
		<thead>

		<tr>
			<th>الأشهر</th>
			@foreach(\App\Invoice::$dates_ as $date)
				<th class="text-center">{{ $date }}</th>
			@endforeach
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>المجموع</td>
			{{--@foreach()--}}
			{{--@endforeach--}}
		</tr>

		</tbody>
		<tfoot>
		<tr>

		</tr>
		</tfoot>
	</table>
</div>