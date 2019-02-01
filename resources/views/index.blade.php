<!DOCTYPE html>
<html>
<head>
	<title>Welcome - MES Modder's Repository</title>
	<meta name="description" content="Pro Evolution Soccer mods, edits and tools since 2014. MES Modder - Creative editing for a better gaming world.">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@include('partials/imports')

	<script type="text/javascript">
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

		function nextSlide(currentSlide) {

		}
		function jumpToSlide(slide) {
			slides = $('.slide').length;
			dots = $('.dot');
			for(let i = 1; i < slides + 1; i++) {
				let id = 'slide-' + i;
				if(id == slide) {
					$('#' + slide).show();
					$(dots[i - 1]).css('background-color', '#646464');
				} else {
					$('#' + id).hide();
					$(dots[i - 1]).css('background-color', '#BBB');
				}
			}
			
		}
	</script>
</head>

<body id="body">
	@include('partials/navbar')

	@include('partials/float')

	<div class="container-fluid" style="margin-top: 55px;">
		<div class="row">
			<div class="col-12 slide fade reset-padding" id="slide-1">
				<a href="/welcome"><img src="{{ asset('img/slideshow/slides/1.png') }}" style="width: 100%;" ondragstart="return false;"></a>
				<div class="bottom-left slideshow-lbl-container">
					<span class="slideshow-lbl">Welcome to MES Modder's Repository</span>
				</div>
			</div>
			<div class="col-12 slide fade reset-padding" style="display: none;" id="slide-2">
				<a href="/browse/clubs"><img src="img/slideshow/slides/2.png" style="width: 100%;" ondragstart="return false;"></a>
				<div class="bottom-left slideshow-lbl-container">
					<span class="slideshow-lbl">Browse edits by club</span>
				</div>
			</div>
			<div class="col-12 slide fade reset-padding" style="display: none;" id="slide-3">
				<a href="/requests"><img src="img/slideshow/slides/3.png" style="width: 100%;" ondragstart="return false;"></a>
				<div class="bottom-left slideshow-lbl-container">
					<span class="slideshow-lbl">Explore and make your own requests</span>
				</div>
			</div>
		</div>
	</div>

	<div class="dots-container">
	  <span class="dot" onclick="jumpToSlide('slide-1')" style="background-color: #646464;"></span> 
	  <span class="dot" onclick="jumpToSlide('slide-2')"></span> 
	  <span class="dot" onclick="jumpToSlide('slide-3')"></span> 
	</div>
	
	<div class="container-fluid pes-container">
		<!-- Row 1 -->
		<div class="row">
			<div class="col-12 col-lg-6" align="center">
				<div class="pes">
					<div class="row">
						<div class="col col-lg-12" align="center">
							<img class="title" src="img/pes/2014.png" ondragstart="return false;"/>
						</div>
					</div>
					<center><div class="row pes-separator"></div></center>
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
					<center><div class="row pes-separator"></div></center>
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
					<center><div class="row pes-separator"></div></center>
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
					<center><div class="row pes-separator"></div></center>
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
					<center><div class="row pes-separator"></div></center>
					<div class="row category-btns" align="center" style="padding-left: 15px; padding-right: 15px;">
						<div class="col" style="padding: 3px;">
							<div data-balloon="Tools" data-balloon-pos="up"><a href="/pes2018/tools"><img class="category" src="img/categories/home/tools.png"/></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="background-color: #fdfdfd; margin-top: 50px; padding-bottom: 25px;">
		<div class="row">
			<div class="col" align="center" style="margin-top: 40px;">
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
			<div class="col-12 col-sm-6 col-md-4 col-lg-3" align="center">
				<div class="container mvp-container" style="width: 300px">
					<div class="row">
						<div class="col" align="center">
							<a href="{{URL::to('/')}}/pes{{ $post->version }}/{{ $post->getCategory->slug }}/{{ $post->slug }}" style="color: red;"><div class="mvp-frame" style="background-image: url('{{ explode(';', $post->image_url)[0] }}');"></div></a>
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
						<div class="col-10 my-auto" align="left">
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
	<div class="container-fluid notice-container" style="background-image: url('img/slideshow/slides/1.png');">
		<div class="row my-auto" align="center" style="height: 300px;">
			<div class="col-12 col-md-8 my-auto">
				<span class="notice-title">Request custom Pro Evolution Soccer edits, send private messages and chat!</span>
			</div>
			<div class="col-12 col-md-4 my-auto">
				<a href="/register"><button class="notice-btn">Sign Up</button></a>
			</div>
		</div>
	</div>
	@else
	<div class="container-fluid notice-container" style="background-image: url('img/slideshow/slides/1.png');">
		<div class="row my-auto" align="center" style="height: 300px;">
			<div class="col-12 col-md-8 my-auto">
				<span class="notice-title">Make your request, I will deliver!</span>
			</div>
			<div class="col-12 col-md-4 my-auto">
				<a href="requests/add"><button class="notice-btn">Add Request</button></a>
			</div>
		</div>
	</div>
	@endif

	@include('partials/footer')
</body>
</html>