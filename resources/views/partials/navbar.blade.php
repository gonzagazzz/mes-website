<div class="container-fluid fixed-top" id="navbar">
	<div class="row" style="height: 55px;" id="hamburger-row">
		<div class="col-2 my-auto">
			<i class="fa fa-bars fa-lg" id="hamburger" onclick="toggle()" style=""></i>
		</div>
		<div class="col-8" style="height: 100%;" align="center">
			<a href="{{ URL::to('/') }}"><img src="{{ asset('img/logo.png') }}" class="navbar-logo"></a>
		</div>
		@if(Auth::check())
		<div class="col-2 my-auto" align="right">
			<img src="{{ asset('img/user.png') }}" class="avatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<div class="dropdown-menu">
				<h6 class="dropdown-header">{{ Auth::user()->username }}</h6>
			    <a class="dropdown-item" href="{{ URL::to('/') }}/toggle">Toggle upvote emote</a>
			    <div class="dropdown-divider"></div>
			    <a class="dropdown-item" href="{{ URL::to('/') }}/logout">Logout</a>
			</div>
		</div>
		@else
		<div class="d-none d-md-block col-md-2 my-auto" align="right">
			<a href="{{ URL::to('/') }}/login"><button class="login-btn">Login</button></a>
		</div>
		@endif
	</div>
</div>
<div class="container-fluid reset-padding" id="menu" style="display: none;">
	<div class="row" style="margin: 0;">

		<!-- PES 2014 -->
		<div class="col-12 col-md-4 col-lg-3" align="center">
			<div class="row" style="background-color: #fdfdfd;">
				<div class="col">
					<img src="{{ asset('img/pes/2014.png') }}" class="option-header">
				</div>
			</div>
			<a href="{{ URL::to('/') }}/pes2014/gloves" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/gloves.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Gloves</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2014/locker-rooms" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/locker_rooms.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Locker Rooms</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2014/menus" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/menus.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Menus</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2014/music-packs" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/music_packs.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Music Packs</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2014/start-screens" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/start_screens.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Start Screens</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2014/tools" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/tools.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Tools</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<!-- PES 2015 -->
		<div class="col-12 col-md-4 col-lg-3" align="center">
			<div class="row" style="background-color: #fdfdfd;">
				<div class="col">
					<img src="{{ asset('img/pes/2015.png') }}" class="option-header">
				</div>
			</div>
			<a href="{{ URL::to('/') }}/pes2015/tools" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/tools.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Tools</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<!-- PES 2016 -->
		<div class="col-12 col-md-4 col-lg-3" align="center">
			<div class="row" style="background-color: #fdfdfd;">
				<div class="col">
					<img src="{{ asset('img/pes/2016.png') }}" class="option-header">
				</div>
			</div>
			<a href="{{ URL::to('/') }}/pes2016/corner-flags" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/corner_flags.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Corner Flags</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2016/locker-rooms" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/locker_rooms.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Locker Rooms</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2016/menus" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/menus.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Menus</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2016/scoreboards" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/scoreboards.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Scoreboards</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2016/start-screens" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/start_screens.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Start Screens</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<!-- PES 2017 -->
		<div class="col-12 col-md-4 col-lg-3" align="center">
			<div class="row">
				<div class="col" style="background-color: #fdfdfd;">
					<img src="{{ asset('img/pes/2017.png') }}" class="option-header">
				</div>
			</div>
			<a href="{{ URL::to('/') }}/pes2017/edit-menus" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/edit_menus.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Edit Menus</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="{{ URL::to('/') }}/pes2017/tools" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/tools.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Tools</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<!-- PES 2018 -->
		<div class="col-12 col-md-4 col-lg-3" align="center" style="margin-bottom: 55px;">
			<div class="row" style="background-color: #fdfdfd;">
				<div class="col">
					<img src="{{ asset('img/pes/2018.png') }}" class="option-header">
				</div>
			</div>
			<a href="{{ URL::to('/') }}/pes2018/tools" class="reset-link-effect">
				<div class="row menu-btn hvr-bounce-to-right reset-padding">
					<div class="col my-auto reset-padding">
						<div class="row">
							<div class="col-3 col-lg-3 my-auto reset-padding" align="center">
								<img src="{{ asset('img/categories/menu/dark/tools.png') }}" class="menu-icon">
							</div>
							<div class="col-6 col-lg-7 my-auto reset-padding" align="left">
								<span>Tools</span>
							</div>
							<div class="col-3 col-lg-1 my-auto reset-padding" align="center">
								<i class="fa fa-angle-right fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

	</div>
</div>