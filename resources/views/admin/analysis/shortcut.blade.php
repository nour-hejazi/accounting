<a class="btn btn-app" href="{{ route('users.index') }}">
	<span class="badge bg-aqua-gradient">{{ \App\User::numberOfUsers() }}</span>
	<i class="fa fa-x fa-users"></i>
	{{ trans('home.accounts') }}
</a>

<a class="btn btn-app" href="{{ route('items.index') }}">
	<span class="badge bg-aqua-gradient">{{ \App\Item::numberOfItems() }}</span>
	<i class="fa fa-x fa-sitemap"></i>
	{{ trans('home.items') }}
</a>

<a class="btn btn-app" href="{{ adminUrl('box') }}">
	<span class="badge bg-aqua-gradient">{{ \App\Box::numberOfBox() }}</span>
	<i class="fa fa-x fa-inbox"></i>
	{{ trans('home.box') }}
</a>

<a class="btn btn-app" href="{{ route('customers.index') }}">
	<span class="badge bg-aqua-gradient">{{ \App\Customer::numberOfCustomer() }}</span>
	<i class="fa fa-x fa-user-secret"></i>
	{{ trans('home.customers') }}
</a>

<a class="btn btn-app" href="{{ route('vendors.index') }}">
	<span class="badge bg-aqua-gradient">{{ \App\Vendor::numberOfVendors() }}</span>
	<i class="fa fa-x fa-user-secret"></i>
	{{ trans('home.vendors') }}
</a>

<a class="btn btn-app" href="{{ route('invoices.index') }}">
	<span class="badge bg-aqua-gradient">{{ \App\Invoice::numberOfInvoice() }}</span>
	<i class="fa fa-x fa-arrow-circle-down"></i>
	{{ trans('home.revenues') }} - {{ trans('home.invoices') }}
</a>

<a class="btn btn-app" href="{{ route('expenses.index') }}">
	<span class="badge bg-aqua-gradient">{{ \App\Expense::numberOfExpense() }}</span>
	<i class="fa fa-x fa-money"></i>
	{{ trans('home.expenses') }}
</a>

<a class="btn btn-app" href="{{ route('bills.index') }}">
	<span class="badge bg-aqua-gradient">{{ \App\Bill::numberOfBills() }}</span>
	<i class="fa fa-x fa-arrow-circle-up"></i>
	{{ trans('home.bills') }}
</a>

<a class="btn btn-app" href="{{ route('statistics.index') }}">
	<i class="fa fa-object-group"></i>
	{{ trans('home.statistics') }}
</a>

<a class="btn btn-app" href="{{ route('settings.show') }}">
	<i class="fa fa-cog"></i>
	{{ trans('home.settings') }}
</a>

