<!DOCTYPE html>
<html>
<head>
	<title>Welcome - MES Modder's Repository</title>
	<meta name="description" content="Pro Evolution Soccer mods since 2014. Creative editing for a better gaming world.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	<link rel="stylesheet" type="text/css" href="css/balloon.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<style type="text/css">
		body {
		    background-color: #222222 !important;
		}
		.pes {
			margin: 5px;
			background-color: #fdfdfd;
			border: 1px solid #fdfdfd;
			border-radius: 6px;
			overflow: hidden;
			-webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,1);
			-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,1);
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,1);
		}
		.pes .title {
			width: 50%;
			margin: 10px;
		}
		.category {
			width: 46px;
		}
		.pes-container {
			max-width: 1000px;
		}
		.pes-separator {
			background-color: #ffffff;
			height: 1px;
			width: 90%;
			-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
		}
		.category-btns {
			margin: 10px;
		}
		
		.slide {
		    text-align: center;
		    color: white;
		}
		.slideshow-lbl-container {
			background-color: rgba(0, 0, 0, .8);
			width: 100%;
		}
		.slideshow-lbl {
			display: none;
			padding: 5px;
		}
		.slide:hover .slideshow-lbl {
			display: inline-block;
		}
		.centered {
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		}
		.bottom-left {
		    position: absolute;
		    bottom: 0px;
		    left: 0px;
		}
		.slide-arrow {
			cursor: pointer;
			opacity: .6;
		}
		.slide-arrow:hover {
			opacity: 1;
		}
		.mid-left {
		    position: absolute;
		    bottom: calc(50% - 22px);
		    left: 30px;
		}
		.mid-right {
		    position: absolute;
		    bottom: calc(50% - 22px);
		    right: 30px;
		}
		.fade {
		    -webkit-animation-name: fade;
		    -webkit-animation-duration: 1s;
		    animation-name: fade;
		    animation-duration: 1s;
		    animation-fill-mode: forwards;
		}
		@-webkit-keyframes fade{
		    from{opacity:.4} 
		    to{opacity:1}
		}
		@keyframes fade{
		    from{opacity:.4} 
		    to{opacity:1}
		}
		
		.dot {
		  cursor: pointer;
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}
		.mvp-container {
			border-radius: 12px;
			margin: 25px;
			color: #222222;
		}	
		.mvp-frame {
			background-size: cover;
			background-position: center;
			height: 200px;
			width: 200px;
			border-radius: 50%;
			margin-top: 15px;
			margin-bottom: 15px;
			-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
		}
		.mvp-frame:hover {
			border: solid #fdfdfd 2px;
		}
		.upvote-btn {
			cursor: pointer;
		}
		@keyframes appear {
		    from {width: 0px;}
		    to {width: 600px;}
		}
		.upvote-frame {
			background: rgba(0, 0, 0, 0.6);
			position: fixed;
    		top: 0px;
    		display: none;
    		padding-top: 44px;
    		z-index: 999;
		}
		.upvote-emote {
			border-radius: 30px;
			-webkit-box-shadow: 0px 0px 15px 3px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 15px 3px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 15px 3px rgba(0,0,0,0.75);
			animation: appear 1.5s forwards;
		}
		.signup-container {
			background-size: cover;
			background-position: center;
			height: 300px;
		}
		.signup-btn {
			background-color: #fdfdfd;
			color: #222222;
			font-weight: bold;
			font-size: 14px;
			border-style: none;
			padding: 15px;
			width: 200px;
			border-radius: 100px;
		    cursor: pointer;
		}
		.signup-btn:hover {
			-webkit-animation-name: hover-focus;
		    -webkit-animation-duration: 2.5s;
		    animation-name: hover-focus;
		    animation-duration: 0.5s;
		    animation-fill-mode: forwards;
		}
		@-webkit-keyframes hover-focus{
		    from{background-color: #fdfdfd; color: #222222;} 
		    to{background-color: #cb1223; color: #fdfdfd;}
		}
		@keyframes hover-focus{
		    from{background-color: #fdfdfd; color: #222222;} 
		    to{background-color: #cb1223; color: #fdfdfd;}
		}
		.signup-btn:focus {
			outline: 0;
			-moz-outline: 0;
			border: 0;
		}
		.noselect {
		  -webkit-touch-callout: none; /* iOS Safari */
		    -webkit-user-select: none; /* Safari */
		     -khtml-user-select: none; /* Konqueror HTML */
		       -moz-user-select: none; /* Firefox */
		        -ms-user-select: none; /* Internet Explorer/Edge */
		            user-select: none; /* Non-prefixed version, currently
		                                  supported by Chrome and Opera */
		}
	</style>

	<script type="text/javascript">
		var slideshow_index = 0;
		function setDotActive(index) {
			var dots = document.getElementsByClassName("dot");
			for(let i=0; i<dots.length; i++) {
				dots[i].style.backgroundColor = "#bbb";
			}
			dots[index].style.backgroundColor = "#646464";
		}
		function slideshowLoad() {
			var slides = document.getElementsByClassName("slide");
			for(let i=1; i<slides.length; i++) {
				slides[i].style.display = "none";
			}
			setDotActive(0);
		}
		function slideshowNext() {
			var slides = document.getElementsByClassName("slide");
			for(let i=0; i<slides.length; i++) {
				slides[i].style.display = "none";
			}
			slideshow_index++;
			if(slideshow_index >= slides.length)
				slideshow_index = 0;
			slides[slideshow_index].style.display = "block";
			setDotActive(slideshow_index);
		}
		function slideshowPrevious() {
			var slides = document.getElementsByClassName("slide");
			for(let i=0; i<slides.length; i++) {
				slides[i].style.display = "none";
			}
			slideshow_index--;
			if(slideshow_index < 0)
				slideshow_index = slides.length - 1;
			slides[slideshow_index].style.display = "block";
			setDotActive(slideshow_index);
		}
		function slideshowJump(index) {
			slideshow_index = index;
			var slides = document.getElementsByClassName("slide");
			for(let i=0; i<slides.length; i++) {
				slides[i].style.display = "none";
			}
			slides[slideshow_index].style.display = "block";
			setDotActive(slideshow_index);
		}

		$(document).keyup(function(e) {
		    if (e.keyCode == 39) {
		        slideshowNext();
		    } else if (e.keyCode == 37) {
		        slideshowPrevious();
		    }
		});
		function upvote(edit_id){
	    	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	        $.ajax({
	            type: "post",
                url: 'upvote',
                data: {
                	_token: CSRF_TOKEN,
                	edit_id: edit_id,
                	user_id: '{{ (Auth::check() == 1 ? Auth::user()->id : null) }}'
                },
                success: function (data) {
                	if(data == "logged-out") {
                		alert("You must be logged in order to upvote!");
                	} else {
                		upvotes = document.getElementById(edit_id);
                		current = parseInt(upvotes.innerHTML);
                		if(data > current) {
                			document.getElementById('upvote' + edit_id).src = "img/upvotes/upvoted.png";
                			@if(Auth::check())
                			@if(Auth::user()->enable_memes)
                			document.getElementById('upvote-emote').src = "img/upvotes/upvote-emote.gif";
                			document.getElementById('upvote-frame').style.display = "block";
                			setTimeout(function() {
                			        $('.upvote-frame').css('display', 'none');
                			    }, 1900);
                			@endif
                			@endif
                		} else {
                			document.getElementById('upvote' + edit_id).src = "img/upvotes/upvote-dark.png";
                			@if(Auth::check())
                			@if(Auth::user()->enable_memes)
                			document.getElementById('upvote-emote').src = "img/upvotes/downvote-emote.png";
                			document.getElementById('upvote-frame').style.display = "block";
                			setTimeout(function() {
                			        $('.upvote-frame').css('display', 'none');
                			    }, 1600);
                			@endif
                			@endif
                		}
                		upvotes.innerHTML = data;
                	}
                },
                error: function (data) {
                	alert("Error upvoting");
                }
	        });
	        
		}
	</script>
</head>

<body id="body" onload="slideshowLoad()">

	@include('partials/header')

	@include('partials/float')

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 slide fade" style="padding: 0;">
				<a href=""><img style="width: 100%;" src="img/slideshow/slides/1.png" ondragstart="return false;"></a>
				<div class="bottom-left slideshow-lbl-container">
					<span class="slideshow-lbl">Welcome to my new website!</span>
				</div>
				<img src="img/slideshow/left.png" height="44" class="slide-arrow mid-left" onclick="slideshowPrevious()">
				<img src="img/slideshow/right.png" height="44" class="slide-arrow mid-right" onclick="slideshowNext()">
			</div>
			<div class="col-12 slide fade" style="padding: 0; display: none;">
				<a href="/browse/clubs"><img style="width: 100%;" src="img/slideshow/slides/2.png" ondragstart="return false;"></a>
				<div class="bottom-left slideshow-lbl-container">
					<span class="slideshow-lbl">Browse edits by club</span>
				</div>
				<img src="img/slideshow/left.png" height="44" class="slide-arrow mid-left" onclick="slideshowPrevious()">
				<img src="img/slideshow/right.png" height="44" class="slide-arrow mid-right" onclick="slideshowNext()">
			</div>
			<div class="col-12 slide fade" style="padding: 0; display: none;">
				<a href="/requests"><img style="width: 100%;" src="img/slideshow/slides/3.png" ondragstart="return false;"></a>
				<div class="bottom-left slideshow-lbl-container">
					<span class="slideshow-lbl">Explore and make your own requests</span>
				</div>
				<img src="img/slideshow/left.png" height="44" class="slide-arrow mid-left" onclick="slideshowPrevious()">
				<img src="img/slideshow/right.png" height="44" class="slide-arrow mid-right" onclick="slideshowNext()">
			</div>
		</div>
	</div>

	<div style="text-align:center; margin-top: 15px; margin-bottom: 10px;">
	  <span class="dot" onclick="slideshowJump(0)"></span> 
	  <span class="dot" onclick="slideshowJump(1)"></span> 
	  <span class="dot" onclick="slideshowJump(2)"></span> 
	</div>
	
	<div class="pes-section" align="center">
		<div class="container-fluid pes-container">
			<!-- Row 1 -->
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="pes">
						<div class="row">
							<div class="col col-lg-12" align="center">
								<img class="title" src="img/pes/2014.png" ondragstart="return false;"/>
							</div>
						</div>
						<div class="row pes-separator"></div>
						<div class="row category-btns" align="center" style="padding-left: 15px; padding-right: 15px;">
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Gloves" data-balloon-pos="up"><a href="/pes2014/gloves"><img class="category" src="img/categories/home/gloves.png"/></a></div>
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Locker Rooms" data-balloon-pos="up"><a href="/pes2014/locker-rooms"><img class="category" src="img/categories/home/locker_rooms.png"/></a></div>
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Menus" data-balloon-pos="up"><a href="/pes2014/menus"><img class="category" src="img/categories/home/menus.png"/></a></div>
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Music Packs" data-balloon-pos="up"><a href="/pes2014/music-packs"><img class="category" src="img/categories/home/music_packs.png"/></a></div>
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Start Screens" data-balloon-pos="up"><a href="/pes2014/start-screens"><img class="category" src="img/categories/home/start_screens.png"/></a></div>
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Tools" data-balloon-pos="up"><a href="/pes2014/tools"><img class="category" src="img/categories/home/tools.png"/></a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="pes">
						<div class="row">
							<div class="col col-lg-12" align="center">
								<img class="title" src="img/pes/2015.png" ondragstart="return false;"/>
							</div>
						</div>
						<div class="row pes-separator"></div>
						<div class="row category-btns" align="center" style="padding-left: 15px; padding-right: 15px;">
							<div class="col-12" style="padding: 3px;">
								<div data-balloon="Tools" data-balloon-pos="up"><a href="/pes2015/tools"><img class="category" src="img/categories/home/tools.png"/></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 2 -->
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="pes">
						<div class="row">
							<div class="col col-lg-12" align="center">
								<img class="title" src="img/pes/2016.png" ondragstart="return false;"/>
							</div>
						</div>
						<div class="row pes-separator"></div>
						<div class="row category-btns" align="center" style="padding-left: 15px; padding-right: 15px;">
							<div class="col-lg-1">
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Corner Flags" data-balloon-pos="up"><a href="/pes2016/corner-flags"><img class="category" src="img/categories/home/corner_flags.png"/></a></div>
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Locker Rooms" data-balloon-pos="up"><a href="/pes2016/locker-rooms"><img class="category" src="img/categories/home/locker_rooms.png"/></a></div>
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Menus" data-balloon-pos="up"><a href="/pes2016/menus"><img class="category" src="img/categories/home/menus.png"/></a></div>
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Scoreboards" data-balloon-pos="up"><a href="/pes2016/scoreboards"><img class="category" src="img/categories/home/scoreboards.png"/></a></div>
							</div>
							<div class="col-4 col-lg-2" style="padding: 3px;">
								<div data-balloon="Start Screens" data-balloon-pos="up"><a href="/pes2016/start-screens"><img class="category" src="img/categories/home/start_screens.png"/></a></div>
							</div>
							<div class="col-lg-1">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="pes">
						<div class="row">
							<div class="col col-lg-12" align="center">
								<img class="title" src="img/pes/2017.png" ondragstart="return false;"/>
							</div>
						</div>
						<div class="row pes-separator"></div>
						<div class="row category-btns" align="center" style="padding-left: 15px; padding-right: 15px;">
							<div class="col" style="padding: 3px;">
								<div data-balloon="Edit Menus" data-balloon-pos="up"><a href="/pes2017/edit-menus"><img class="category" src="img/categories/home/edit_menus.png"/></a></div>
							</div>
							<div class="col" style="padding: 3px;">
								<div data-balloon="Tools" data-balloon-pos="up"><a href="/pes2017/tools"><img class="category" src="img/categories/home/tools.png"/></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 3 -->
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="pes">
						<div class="row">
							<div class="col col-lg-12" align="center">
								<img class="title" src="img/pes/2018.png" ondragstart="return false;"/>
							</div>
						</div>
						<div class="row pes-separator"></div>
						<div class="row category-btns" align="center" style="padding-left: 15px; padding-right: 15px;">
							<div class="col" style="padding: 3px;">
								<div data-balloon="Tools" data-balloon-pos="up"><a href="/pes2018/tools"><img class="category" src="img/categories/home/tools.png"/></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="background-color: #fdfdfd; margin-top: 50px;">
		<div class="row">
			<div class="col" align="center" style="margin-top: 25px;">
				<div class="btn-group dropright">
				    <h2 style="font-size: 45px; cursor: pointer;" class="noselect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Most Viewed Posts</h2>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="mvp/pes2014">PES 2014</a>
				    <a class="dropdown-item" href="mvp/pes2016">PES 2016</a>
				    <a class="dropdown-item" href="mvp/pes2017">PES 2017</a>
				  </div>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($mvp as $post)
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="container mvp-container" style="width: 300px">
					<div class="row">
						<div class="col" align="center">
							<a href="{{URL::to('/')}}/pes{{ $post->version }}/{{ $post->getCategory->slug }}/{{ $post->slug }}" style="color: white;"><div class="mvp-frame" style="background-image: url('{{ explode(';', $post->image_url)[0] }}');"></div></a>
							<br>
							<a href="{{URL::to('/')}}/pes{{ $post->version }}/{{ $post->getCategory->slug }}/{{ $post->slug }}" style="color: #222222;"><h5>{{ $post->title }}</h5></a>
						</div>
					</div>
					<div class="dropdown-divider" style="margin-top: 15px; margin-bottom: 15px;"></div>
					<div class="row">
						<div class="col-1">
							@if(Auth::check())
							<img id="upvote{{ $post->id }}" src="img/upvotes/{{ $post->isUpvoted(Auth::user()->id, $post->id) ? 'upvoted' : 'upvote-dark' }}.png" width="14" class="upvote-btn" onclick="upvote('{{ $post->id }}');">
							@else
							<img id="upvote{{ $post->id }}" src="img/upvotes/upvote-dark.png" width="14" class="upvote-btn" onclick="upvote('{{ $post->id }}');">
							@endif
						</div>
						<div class="col-10 my-auto">
							<span style="font-size: 12px;" id="{{ $post->id }}">{{ $post->upvotes }}</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<div class="container-fluid upvote-frame" id="upvote-frame">
		<div class="row" align="center" style="height: 100vh;">
			<div class="col my-auto">
				<img src="img/upvotes/upvote-emote.gif" class="upvote-emote" id="upvote-emote">
			</div>
		</div>
	</div>

	@if(!Auth::check())
	<div class="container-fluid signup-container" style="background-image: url('img/slideshow/slides/1.png');">
		<div class="row my-auto" align="center" style="height: 300px;">
			<div class="col-12 col-md-8 my-auto">
				<span style="font-size: 24px; color: #fdfdfd; text-shadow: 2px 2px 2px #222222;">Request custom Pro Evolution Soccer edits, send private messages and chat!</span>
			</div>
			<div class="col-12 col-md-4 my-auto">
				<a href="/register"><button class="signup-btn">Sign Up</button></a>
			</div>
		</div>
	</div>
	@else
	<div class="container-fluid signup-container" style="background-image: url('img/slideshow/slides/1.png');">
		<div class="row my-auto" align="center" style="height: 300px;">
			<div class="col-12 col-md-8 my-auto">
				<span style="font-size: 24px; color: #fdfdfd; text-shadow: 2px 2px 2px #222222;">Make your request, I will deliver!</span>
			</div>
			<div class="col-12 col-md-4 my-auto">
				<a href="requests/add"><button class="signup-btn">Add Request</button></a>
			</div>
		</div>
	</div>
	@endif

	@include('partials/footer')
</body>
</html>