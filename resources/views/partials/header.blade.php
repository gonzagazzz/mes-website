<style type="text/css">
	body {
		padding-top: 88px;
	}
	.header {
		font-size: 12px !important;
		background-color: #fdfdfd;
		position:fixed;
		top:0px;
		z-index: 15;
		-webkit-box-shadow: 0px 0px 20px rgba(0,0,0,.8);
	   	-moz-box-shadow: 0px 0px 20px rgba(0,0,0,.8);
	    box-shadow: 0px 3px 20px rgba(0,0,0,.8);
	}
	.logo{
		width: 80px;
		margin: 4px;
	}
	.title {
		color: #222222;
		font-family: "Trebuchet MS", Helvetica, sans-serif;
		font-size: 25px;
		font-weight: bold;
		letter-spacing: 3px;
		word-spacing: 1px;
		font-style: normal;
		font-variant: small-caps;
		text-align: left;
	}
	.slogan {
		color: #222222;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 15px;
		letter-spacing: 1px;
		word-spacing: 0.5px;
		font-variant: normal;
		text-align: left;
	}
	@media (max-width:576px) {
	   .title {
	   	text-align: center;
	   }
	   .slogan {
	   	text-align: center;
	   }
	}
	.login-btn {
		background-color: #222222;
		color: white;
		letter-spacing: .3px;
		font-weight: 500;
		border-style: none;
		padding: 10px;
		width: 180px;
		border-radius: 100px;
	    cursor: pointer;
	}
	.login-btn:hover {
		-webkit-animation-name: btn-effect;
	    -webkit-animation-duration: 2.5s;
	    animation-name: btn-effect;
	    animation-duration: 0.5s;
	    animation-fill-mode: forwards;
	}
	@-webkit-keyframes btn-effect{
	    from{background-color: #222222} 
	    to{background-color: #cb1223}
	}
	@keyframes btn-effect{
	    from{background-color: #222222} 
	    to{background-color: #cb1223}
	}
	.login-btn:focus {
		outline: 0;
		-moz-outline: 0;
		border: 0;
	}
	.menu-hamburger {
		width: 32px;
		cursor: pointer;
	}
	.menu-container {
		display: none;
		background: linear-gradient(white, white);
		position: fixed;
		z-index: 999;
		-webkit-box-shadow: 0px 7px 5px 2px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 7px 5px 2px rgba(0,0,0,0.75);
		box-shadow: 0px 7px 5px 2px rgba(0,0,0,0.75);
	}
	.menu-btn {
		background-color: white;
		color: #222222;
		border-style: none;
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 30px;
		padding-right: 30px;
		cursor: pointer;
		font-weight: bold;
	}
	.menu-btn:focus {
		outline: 0;
	}
	.social {
		margin-top: 10px;
		margin-bottom: 10px;
		filter: url(filters.svg#grayscale); /* Firefox 3.5+ */
		filter: gray; /* IE6-9 */
		-webkit-filter: grayscale(1); /* Google Chrome & Safari 6+ */
	}
	.social:hover {
		filter: none;
		-webkit-filter: none;
	}
	.menu-effect {
		-webkit-animation-name: menu-effect;
	    -webkit-animation-duration: 0.5s;
	    animation-name: menu-effect;
	    animation-duration: 0.5s;
	    animation-fill-mode: forwards;
	}
	@-webkit-keyframes menu-effect{
	    from{opacity: 0} 
	    to{opacity: 1}
	}
	@keyframes menu-effect{
	    from{opacity: 0} 
	    to{opacity: 1}
	}
	.disable-link-effect {
		color: #222222 !important;
	}
	.disable-link-effect:hover {	
		text-decoration: none;
	}
	.menu-icon {
		margin-right: 20px;
		margin-bottom: 3px;
	}
	.menu-link {
		cursor: pointer;
	}
	.menu-link:hover {
		background-color: #e9ecef !important;
	}
	.menu-link:active {
		background-color: #cb1223 !important;
	}
	#gloves:active div {
		background-image: url('/img/categories/menu/light/gloves.png') !important;
	}
	#lockerrooms:active div {
		background-image: url('/img/categories/menu/light/locker_rooms.png') !important;
	}
	#menus:active div {
		background-image: url('/img/categories/menu/light/menus.png') !important;
	}
	#musicpacks:active div {
		background-image: url('/img/categories/menu/light/music_packs.png') !important;
	}
	#startscreens:active div {
		background-image: url('/img/categories/menu/light/start_screens.png') !important;
	}
	#tools:active div {
		background-image: url('/img/categories/menu/light/tools.png') !important;
	}
	#editmenus:active div {
		background-image: url('/img/categories/menu/light/edit_menus.png') !important
	}
	#cornerflags:active div {
		background-image: url('/img/categories/menu/light/corner_flags.png') !important;
	}
	#scoreboards:active div {
		background-image: url('/img/categories/menu/light/scoreboards.png') !important;
	}
	.menu-option-icon {
		background-size: cover;
		background-position: center;
		width: 24px;
		display: inline-block;
		margin-right: 20px;
	}
	.menu-options {
		-webkit-box-shadow: 5px 6px 5px 2px rgba(0,0,0,0.75);
		-moz-box-shadow: 5px 6px 5px 2px rgba(0,0,0,0.75);
		box-shadow: 5px 6px 5px 2px rgba(0,0,0,0.75);
	}
	.disable-select {
		-webkit-user-select: none;  /* Chrome all / Safari all */
		-moz-user-select: none;     /* Firefox all */
		-ms-user-select: none;      /* IE 10+ */
		user-select: none;          /* Likely future */
	}
	.searchbox {
		border-radius: 100px;
		border: solid 1px #858585;
		color: #858585;
		padding: 6px;
		padding-left: 16px;
		margin-top: 12px;
		margin-bottom: 6px;
		width: 85%;
		font-size: 13px;
	}
	.searchbox:focus {
		outline: 0;
		-moz-outline: 0;	
	}
	.gradient {
		width: 275px;
		background: #fdfdfd; /* Old browsers */
		background: -moz-linear-gradient(top, #fdfdfd 0%, #ffffff 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top, #fdfdfd 0%,#ffffff 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom, #fdfdfd 0%,#ffffff 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fdfdfd', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
	}
</style>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<script type="text/javascript">
	function strToSlug(str)
	{
	    return str
	    .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'');
	}
	$( document ).ready(function() {
		var input = document.getElementById("searchbox");
		input.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode === 13) {
		    	window.location.href = "{{URL::to('/')}}/search/" + strToSlug(input.value);
		  	}
		});
	});
	function toggleMenu() {
		var menu = document.getElementById("menu");
		if(menu.style.display == "block") {
			menu.style.display = "none";
		} else {
			menu.style.display = "block";
		}
	}
	$(document).mouseup(function(e)
	{
	    var container = $("#menu");
	    var hamburger = $(".menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) 
	    {
	    	if(!hamburger.is(e.target)) {
	    		container.hide();
	    	}
	    }
	});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v3.1';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<div class="menu-container menu-effect" id="menu">
	<!-- Search Box -->
	<div class="row gradient">
		<div class="col" align="center" style="padding-right: 0;">
			<input type="text" name="searchbox" id="searchbox" class="searchbox" placeholder="Search...">
		</div>
	</div>
	<!-- Option PES2014 -->
	<div class="row">
		<div class="col">
			<div class="dropright">
				<button type="button" class="menu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::to('/')}}/img/pes/2014.png" width="168" ondragstart="return false;"><img style="width: 6px; margin-left: 26px;" src="{{URL::to('/')}}/img/right-arrow.png" ondragstart="return false;"></button>
				<div class="dropdown-menu menu-effect menu-options" style="padding: 0; margin: 0; border-radius: 0; border: 1px solid white">
					<a class="disable-link-effect" href="{{URL::to('/')}}/pes2014/gloves">
				    	<div class="dropdown-item menu-link" id="gloves">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/gloves.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Gloves</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2014/locker-rooms">
				    	<div class="dropdown-item menu-link" id="lockerrooms">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/locker_rooms.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Locker Rooms</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2014/menus">
				    	<div class="dropdown-item menu-link" id="menus">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/menus.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Menus</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2014/music-packs">
				    	<div class="dropdown-item menu-link" id="musicpacks">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/music_packs.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Music Packs</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2014/start-screens">
				    	<div class="dropdown-item menu-link" id="startscreens">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/start_screens.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Start Screens</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2014/tools">
				    	<div class="dropdown-item menu-link" id="tools">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/tools.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Tools</span>
				    	</div>
			    	</a>
			 	</div>
			</div>
		</div>
	</div>
	<!-- Option PES2015 -->
	<div class="row">
		<div class="col">
			<div class="dropright">
				<button type="button" class="menu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::to('/')}}/img/pes/2015.png" width="168" ondragstart="return false;"><img style="width: 6px; margin-left: 26px;" src="{{URL::to('/')}}/img/right-arrow.png" ondragstart="return false;"></button>
				<div class="dropdown-menu menu-effect menu-options" style="padding: 0; margin: 0; border-radius: 0; border: 1px solid white">
					<a class="disable-link-effect" href="{{URL::to('/')}}/pes2015/tools">
				        <div class="dropdown-item menu-link" id="tools">
				        	<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/tools.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Tools</span>
				    	</div>
			    	</a>
			 	</div>
			</div>
		</div>
	</div>
	<!-- Option PES2016 -->
	<div class="row">
		<div class="col">
			<div class="dropright">
				<button type="button" class="menu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::to('/')}}/img/pes/2016.png" width="168" ondragstart="return false;"><img style="width: 6px; margin-left: 26px;" src="{{URL::to('/')}}/img/right-arrow.png" ondragstart="return false;"></button>
				<div class="dropdown-menu menu-effect menu-options" style="padding: 0; margin: 0; border-radius: 0; border: 1px solid white">
					<a class="disable-link-effect" href="{{URL::to('/')}}/pes2016/corner-flags">
						<div class="dropdown-item menu-link" id="cornerflags">
							<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/corner_flags.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Corner Flags</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2016/locker-rooms">
				    	<div class="dropdown-item menu-link" id="lockerrooms">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/locker_rooms.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Locker Rooms</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2016/menus">
				    	<div class="dropdown-item menu-link" id="menus">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/menus.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Menus</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2016/scoreboards">
				    	<div class="dropdown-item menu-link" id="scoreboards">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/scoreboards.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Scoreboards</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2016/start-screens">
				    	<div class="dropdown-item menu-link" id="startscreens">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/start_screens.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Start Screens</span>
				    	</div>
			    	</a>
			 	</div>
			</div>
		</div>
	</div>
	<!-- Option PES2017 -->
	<div class="row">
		<div class="col">
			<div class="dropright">
				<button type="button" class="menu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::to('/')}}/img/pes/2017.png" width="168" ondragstart="return false;"><img style="width: 6px; margin-left: 26px;" src="{{URL::to('/')}}/img/right-arrow.png" ondragstart="return false;"></button>
				<div class="dropdown-menu menu-effect menu-options" style="padding: 0; margin: 0; border-radius: 0; border: 1px solid white">
					<a class="disable-link-effect" href="{{URL::to('/')}}/pes2017/edit-menus">
						<div class="dropdown-item menu-link" id="editmenus">
							<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/edit_menus.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Edit Menus</span>
				    	</div>
			    	</a>
			    	<a class="disable-link-effect" href="{{URL::to('/')}}/pes2017/tools">
				    	<div class="dropdown-item menu-link" id="tools">
				    		<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/tools.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Tools</span>
				    	</div>
			    	</a>
			 	</div>
			</div>
		</div>
	</div>
	<!-- Option PES2018 -->
	<div class="row">
		<div class="col">
			<div class="dropright">
				<button type="button" class="menu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::to('/')}}/img/pes/2018.png" width="168" ondragstart="return false;"><img style="width: 6px; margin-left: 26px;" src="{{URL::to('/')}}/img/right-arrow.png" ondragstart="return false;"></button>
				<div class="dropdown-menu menu-effect menu-options" style="padding: 0; margin: 0; border-radius: 0; border: 1px solid white">
					<a class="disable-link-effect" href="{{URL::to('/')}}/pes2018/tools">
				        <div class="dropdown-item menu-link" id="tools">
				        	<div class="menu-option-icon" style="background-image: url('/img/categories/menu/dark/tools.png');">&nbsp;</div>
				    		<span style="font-size: 14px;">Tools</span>
				    	</div>
			    	</a>
			 	</div>
			</div>
		</div>
	</div>
	<div class="dropdown-divider" style="margin: 0"></div>
	<!-- Social Media -->
	<div class="row">
		<div class="col-5" align="center">
			<a href="https://www.facebook.com/MES.Modder" target="_blank"><img class="social" src="{{URL::to('/')}}/img/fb-icon.png" width="32" /></a>
		</div>
		<div class="col-7 my-auto" align="left">
			<div class="fb-like" data-href="https://facebook.com/MES.Modder" data-width="100" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
		</div>
	</div>
</div>

<header class="container-fluid header disable-select">
	<div class="row">
		<div class="col-2 col-lg-4 my-auto">
			<img onclick="toggleMenu()" class="menu-hamburger" src="{{URL::to('/')}}/img/hamburger.png">
		</div>
		<div class="col-10 col-lg-1" style="margin: 0; padding: 0;" align="center">
			<a href="/"><img class="logo" src="{{URL::to('/')}}/img/logo.png"/></a>
		</div>
		<div class="d-none d-lg-block col-5 my-auto" align="center">
			<div class="row">
				<div class="col col-lg-12 title">
					MES Modder
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-12 slogan">
					Creative editing for a better gaming world
				</div>
			</div>
		</div>
		@if(Auth::check())
		<div class="d-none d-lg-block col-12 col-sm-7 col-lg-2 my-auto" align="right">
			<div class="row" style="width: 210px;" align="center">
				<div class="col-12" style="font-size: 11px; margin: 0; padding: 0; color: #222222 !important;">
					<label>Welcome <strong>{{ Auth::user()->username }}</strong></label>
					<div class="dropdown show" style="display: inline;">
					  <a href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <img src="{{URL::to('/')}}/img/settings.png" width="14" style="margin-left: 6px;">
					  </a>
					  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="{{URL::to('/')}}/toggle">Toggle Upvote Emote</a>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a href="{{URL::to('/')}}/logout"><button class="login-btn">Logout</button></a>
				</div>
			</div>
		</div>
		@else
		<div class="d-none d-lg-block col-12 col-sm-7 col-lg-2 my-auto" align="right">
			<a href="{{URL::to('/')}}/login"><button class="login-btn">Login</button></a>
		</div>
		@endif
	</div>
</header>

