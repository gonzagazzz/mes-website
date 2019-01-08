<!DOCTYPE html>
<html>
<head>
	<title>Welcome - MES Modder's Repository</title>
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		body {
			background-color: #222222 !important;
		}
		h1 {
			color: white !important;
			padding-top: 45px;
		}
		.card-1 {
			background-image: url('img/background/background_2.png') !important;
			background-size: cover;
			padding: 30px;
			color: white !important;
			border: 0 !important;
			-webkit-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
			-moz-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
			box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
			margin-bottom: 30px;
		}
		.card-2 {
			background-image: url('img/background/background_1.png') !important;
			background-size: cover;
			padding: 30px;
			color: white !important;
			border: 0 !important;
			-webkit-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
			-moz-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
			box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
			margin-bottom: 30px;
		}
		.card-3 {
			background-image: url('img/background/background_3.png') !important;
			background-size: cover;
			padding: 30px;
			color: white !important;
			border: 0 !important;
				-webkit-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
			-moz-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
			box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
			margin-bottom: 30px;
		}
		.version-bar {
			margin-top: 15px;
			background-color: white !important;
			padding: 15px;
		}
	</style>
</head>
<body>
	@include('partials/header')
	@include('partials/float')

	<div class="container" style="color: white;">
		<div class="row">
			<div class="col">
				<h1>Welcome to MES Modder's Repository</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<span>Welcome to my online repository! Here you may explore various edits and tools made by me from PES 2014 forward.</span>
			</div>
		</div>
		<div class="row" style="margin-top: 30px;">
			<div class="col">
				<h2>Create an account</h2>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<span>You may create an account in order to gain more privileges such as requesting your own edits and contacting me directly.</span>
			</div>
		</div>
		<div class="row" style="margin-top: 30px;" align="center">
			<div class="col-xl-4 col-md-12 card-1">
				<div class="container">
					<div class="row">
						<div class="col">
							<img src="{{URL::to('/')}}/img/upvotes/upvote-light.png" width="64">
						</div>
					</div>
					<div class="row">
						<div class="col" style="margin-top: 30px; margin-bottom: 15px;">
							<h5>Upvote and comment posts</h5>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<div class="row">
						<div class="col" style="text-align: justify; text-justify: inter-word; padding: 15px;">
							<span>Let me know your opinion about my PES edits by upvoting and commenting your favorite ones.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-12 card-2">
				<div class="container">
					<div class="row">
						<div class="col">
							<img src="{{URL::to('/')}}/img/float-icons/add.png" width="64">
						</div>
					</div>
					<div class="row">
						<div class="col" style="margin-top: 30px; margin-bottom: 15px;">
							<h5>Request your own edits!</h5>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<div class="row">
						<div class="col" style="text-align: justify; text-justify: inter-word; padding: 15px;">
							<span>Submit your edits ideas and let the community upvote which ideas they would like to see be released. <a href="requests">Explore requests...</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-12 card-3">
				<div class="container">
					<div class="row">
						<div class="col">
							<img src="{{URL::to('/')}}/img/float-icons/message.png" width="64">
						</div>
					</div>
					<div class="row">
						<div class="col" style="margin-top: 30px; margin-bottom: 15px;">
							<h5>More direct contact</h5>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<div class="row">
						<div class="col" style="text-align: justify; text-justify: inter-word; padding: 15px;">
							<span>Contact me more directly to give your opinions and feedback, errors regarding some of my tools or any other kind of stuff.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h2>Start browsing</h2>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>Browse various Pro Evolution Soccer edits by category. Below is a list of the available categories for each Pro Evolution Soccer version.</p>
			</div>
		</div>
		<div class="row version-bar" style="margin-top: 0;">
			<div class="col-4">
				<img src="img/pes/2014.png" width="156">
			</div>
			<div class="col">
				<span>
					<a href="pes2014/gloves">Gloves</a>; <a href="pes2014/locker-rooms">Locker Rooms</a>; <a href="pes2014/menus">Menus</a>; <a href="pes2014/music-packs">Music Packs</a>; <a href="pes2014/start-screens">Start Screens</a>; <a href="pes2014/tools">Tools</a>
				</span>
			</div>
		</div>
		<div class="row version-bar">
			<div class="col-4">
				<img src="img/pes/2015.png" width="156">
			</div>
			<div class="col">
				<span>
					<a href="pes2015/tools">Tools</a>
				</span>
			</div>
		</div>
		<div class="row version-bar">
			<div class="col-4">
				<img src="img/pes/2016.png" width="156">
			</div>
			<div class="col">
				<span>
					<a href="pes2016/corner-flags">Corner Flags</a>; <a href="pes2016/locker-rooms">Locker Rooms</a>; <a href="pes2016/menus">Menus</a>; <a href="pes2016/scoreboards">Scoreboards</a>; <a href="pes2016/start-screens">Start Screens</a>
				</span>
			</div>
		</div>
		<div class="row version-bar">
			<div class="col-4">
				<img src="img/pes/2017.png" width="156">
			</div>
			<div class="col">
				<span>
					<a href="pes2017/edit-menus">Edit Menus</a>; <a href="pes2017/tools">Tools</a>
				</span>
			</div>
		</div>
		<div class="row  version-bar" style="margin-bottom: 100px;">
			<div class="col-4">
				<img src="img/pes/2018.png" width="156">
			</div>
			<div class="col">
				<span>
					<a href="pes2018/tools">Tools</a>
				</span>
			</div>
		</div>
	</div>

	@include('partials/footer')
</body>
</html>