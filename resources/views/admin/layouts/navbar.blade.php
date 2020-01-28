<div class="navbar-custom-menu">
	<ul class="nav navbar-nav">

		{{--USER INFORMATION--}}
		<li class="dropdown user user-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php if(!empty(auth()->user()->image)){ ?>
                <img src="{{ url(auth()->user()->image) }}"
                class="user-image"
                alt="User Image">
			    <?php } ?>
				<span class="hidden-xs">{{ strtoupper(auth()->user()->name) }} </span>
			</a>

			<ul class="dropdown-menu">

				<!-- Menu Footer-->
				<li class="user-footer">
					<div class="pull-left">
						<a href="{{ adminUrl('users/' . auth()->user()->id) }}" class="btn btn-default btn-flat">
							{{ trans('nav.profile') }}
						</a>
					</div>
					<div class="pull-right">
						<a href="{{ adminUrl('logout')}}" class="btn btn-default btn-flat">
							{{ trans('nav.logout') }}
						</a>
					</div>
				</li>
			</ul>
		</li>

	</ul>
</div>
