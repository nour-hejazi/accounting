<header class="main-header">
	<!-- Logo -->
	<a href="index2.html" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>A</b>LT</span>
		<!-- logo for regular state and mobile devices -->
		<span class="lead"><b>NOUR</b> Media</span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		@include('admin.layouts.navbar')


	</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
            <?php if(! empty(auth()->user()->image)){ ?>
			<div class="pull-left image">
				<a data-fancybox="gallery"
				   data-caption="{{ strtoupper(auth()->user()->name) }} - {{ trans('user_photo') }}"
				   href="{{ url(auth()->user()->image) }}">
					<img src="{{ url(auth()->user()->image) }}"
					     alt="{{ url(auth()->user()->image) }}"
					     class="img-circle"
					     style="width: 50px; height: 50px; border: 1px solid #FFF">
				</a>
			</div>
            <?php } ?>

			<div class="info" style="margin: 13px 0 0 30px">
				<p><i class="fa fa-circle text-success"></i>
					{{ trans('sidebar.online') }}
				</p>
			</div>
		</div>

		<hr style="margin: 0">


		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">{{ setting()->name }}</li>
			<hr style="margin: 0">

			{{--DASHBOARD--}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>
						{{ trans('sidebar.dashboard') }}
					</span>
					<span class="pull-right-container">
                    </span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="{{ adminUrl() }}">
							<i class="fa fa-dashboard"></i>
							{{ trans('sidebar.dashboard') }}
						</a>
					</li>
				</ul>
			</li>

			{{--USERS--}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-users"></i>
					<span>
						{{ trans('sidebar.accounts') }}
					</span>
					<span class="pull-right-container">
                    </span>
				</a>
				<ul class="treeview-menu">
					@if(auth()->user()->role == \App\User::USER_ROLE_ADMIN)
						<li class="active">
							<a href="{{ adminUrl('users/create') }}">
								<i class="fa fa-plus"></i>
								{{ trans('sidebar.insert_new_account') }}
							</a>
						</li>
					@endif

					<li class="active"><a href="{{ adminUrl('users') }}">
							<i class="fa fa-table"></i>
							@if(auth()->user()->role == \App\User::USER_ROLE_ADMIN)
								{{ trans('sidebar.manage_accounts') }}
							@elseif(auth()->user()->role == \App\User::USER_ROLE_ACCOUNTANT)
								{{ trans('sidebar.display_accounts') }}
							@endif
						</a>
					</li>

				</ul>
			</li>


			{{--ITEMS--}}
			@if(auth()->user()->role == \App\User::USER_ROLE_ADMIN)
				<li class="treeview">
					<a href="#">
						<i class="fa fa-sitemap"></i>
						<span>
						{{ trans('sidebar.items') }}
					</span>
						<span class="pull-right-container">
                    </span>
					</a>
					<ul class="treeview-menu">

						<li class="active">
							<a href="{{ adminUrl('items/create') }}">
								<i class="fa fa-plus"></i>
								{{ trans('sidebar.insert_new_item') }}
							</a>
						</li>

						<li class="active"><a href="{{ adminUrl('items') }}">
								<i class="fa fa-table"></i>
								{{ trans('sidebar.manage_items') }}
							</a>
						</li>

					</ul>
				</li>
			@endif

			{{-- BOX --}}
			{{--<li class="treeview">--}}
			{{--<a href="#">--}}
			{{--<i class="fa fa-inbox"></i>--}}
			{{--<span>--}}
			{{--{{ trans('sidebar.box') }}--}}
			{{--</span>--}}
			{{--<span class="pull-right-container">--}}
			{{--</span>--}}
			{{--</a>--}}
			{{--<ul class="treeview-menu">--}}

			{{--<li class="active">--}}
			{{--<a href="{{ adminUrl('box') }}">--}}
			{{--<i class="fa fa-line-chart"></i>--}}
			{{--{{ trans('sidebar.box_') }}--}}
			{{--</a>--}}
			{{--</li>--}}

			{{--</ul>--}}
			{{--</li>--}}

			{{-- CUSTOMERS --}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-user-secret"></i>
					<span>
						{{ trans('sidebar.customers') }}
					</span>
					<span class="pull-right-container">
                    </span>
				</a>
				<ul class="treeview-menu">

					<li class="active">
						<a href="{{ adminUrl('customers/create') }}">
							<i class="fa fa-plus"></i>
							{{ trans('sidebar.insert_new_customer') }}
						</a>
					</li>

					<li class="active"><a href="{{ adminUrl('customers') }}">
							<i class="fa fa-table"></i>
							{{ trans('sidebar.manage_customers') }}
						</a>
					</li>

				</ul>
			</li>


			{{-- VENDORS --}}
			{{--<li class="treeview">--}}
			{{--<a href="#">--}}
			{{--<i class="fa fa-user-secret"></i>--}}
			{{--<span>--}}
			{{--{{ trans('sidebar.vendors') }}--}}
			{{--</span>--}}
			{{--<span class="pull-right-container">--}}
			{{--</span>--}}
			{{--</a>--}}
			{{--<ul class="treeview-menu">--}}

			{{--<li class="active">--}}
			{{--<a href="{{ adminUrl('vendors/create') }}">--}}
			{{--<i class="fa fa-plus"></i>--}}
			{{--{{ trans('sidebar.insert_new_vendor') }}--}}
			{{--</a>--}}
			{{--</li>--}}

			{{--<li class="active"><a href="{{ adminUrl('vendors') }}">--}}
			{{--<i class="fa fa-table"></i>--}}
			{{--{{ trans('sidebar.manage_vendors') }}--}}
			{{--</a>--}}
			{{--</li>--}}

			{{--</ul>--}}
			{{--</li>--}}


			{{-- INVOCIES --}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-arrow-circle-down"></i>
					<span>
						{{ trans('sidebar.revenues') }}
					</span>
					<span class="pull-right-container">
                    </span>
				</a>
				<ul class="treeview-menu">

					<li class="active">
						<a href="{{ adminUrl('invoices/create') }}">
							<i class="fa fa-plus"></i>
							{{ trans('sidebar.insert_new_invoice') }}
						</a>
					</li>

					<li class="active"><a href="{{ adminUrl('invoices') }}">
							<i class="fa fa-table"></i>
							{{ trans('sidebar.manage_invoices') }}
						</a>
					</li>

				</ul>
			</li>


			{{-- EXPENSES --}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-arrow-circle-up"></i>
					<span>
						{{ trans('sidebar.bills') }}
					</span>
					<span class="pull-right-container">
                    </span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="{{ adminUrl('expenses') }}">
							<i class="fa fa-table"></i>
							{{ trans('sidebar.manage_expenses') }}
						</a>
					</li>
					<li class="active">
						<a href="{{ adminUrl('bills/create') }}">
							<i class="fa fa-plus"></i>
							{{ trans('sidebar.insert_new_bill') }}
						</a>
					</li>
					<li class="active"><a href="{{ adminUrl('bills') }}">
							<i class="fa fa-table"></i>
							{{ trans('sidebar.bills_expenses') }}
						</a>
					</li>


					{{--<li class="active">--}}
					{{--<a href="#" data-toggle="modal" data-target="#create-expense">--}}
					{{--<i class="fa fa-plus"></i>--}}
					{{--{{ trans('sidebar.insert_new_expense') }}--}}
					{{--</a>--}}
					{{--</li>--}}


				</ul>
			</li>


			{{-- BILLS --}}
			{{--<li class="treeview">--}}
			{{--<a href="#">--}}
			{{--<i class="fa fa-arrow-circle-up"></i>--}}
			{{--<span>--}}
			{{--{{ trans('sidebar.bills') }}--}}
			{{--</span>--}}
			{{--<span class="pull-right-container">--}}
			{{--</span>--}}
			{{--</a>--}}
			{{--<ul class="treeview-menu">--}}

			{{--<li class="active">--}}
			{{--<a href="{{ adminUrl('bills/create') }}">--}}
			{{--<i class="fa fa-plus"></i>--}}
			{{--{{ trans('sidebar.insert_new_bill') }}--}}
			{{--</a>--}}
			{{--</li>--}}

			{{--<li class="active"><a href="{{ adminUrl('bills') }}">--}}
			{{--<i class="fa fa-table"></i>--}}
			{{--{{ trans('sidebar.manage_bills') }}--}}
			{{--</a>--}}
			{{--</li>--}}

			{{--</ul>--}}
			{{--</li>--}}


			{{--STATISTICS--}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-object-group"></i>
					<span>
			{{ trans('sidebar.statistics') }}
			</span>
					<span class="pull-right-container">
			</span>
				</a>
				<ul class="treeview-menu">
					<li class="active">
						<a href="{{ adminUrl('statistics') }}">
							<i class="fa fa-object-group"></i>
							{{ trans('sidebar.statistics') }}
						</a>
					</li>
				</ul>
			</li>

			<hr style="margin: 0">

			{{--SETTINGS--}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-cog"></i><span>
						{{ trans('sidebar.settings') }}
					</span>
					<span class="pull-right-container">
                    </span>
				</a>
				<ul class="treeview-menu">
					<li class="active">
						<a href="{{ url('admin/settings') }}">
							<i class="fa fa-eye"></i>
							{{ trans('sidebar.show_settings') }}
						</a>
					</li>
					<li class="active">
						<a href="{{ url('admin/settings/edit') }}">
							<i class="fa fa-edit"></i>
							{{ trans('sidebar.edit_settings') }}
						</a>
					</li>
				</ul>
			</li>


		</ul>
	</section>
	<!-- /.sidebar -->
</aside>

@include('admin.expenses.modal-create')