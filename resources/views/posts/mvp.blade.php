<!DOCTYPE html>
<html>
<head>
	<title>PES {{ $version }} Most Viewed Posts - MES Modder's Repository</title>
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<style type="text/css">
		body {
			background-color: #222222 !important;
			color: #f2f2f2 !important;
		}
		h1 {
			text-align: center;
			padding-top: 45px;
			padding-bottom: 35px;
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
			border: solid #f2f2f2 2px;
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
	</style>

	<script type="text/javascript">
		function upvote(edit_id){
	    	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	        $.ajax({
	            type: "post",
                url: '/upvote',
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
                			document.getElementById('upvote' + edit_id).src = "{{URL::to('/')}}/img/upvotes/upvoted.png";
                			@if(Auth::check())
                			@if(Auth::user()->enable_memes)
                			document.getElementById('upvote-emote').src = "{{URL::to('/')}}/img/upvotes/upvote-emote.gif";
                			document.getElementById('upvote-frame').style.display = "block";
                			setTimeout(function() {
                			        $('.upvote-frame').css('display', 'none');
                			    }, 1900);
                			@endif
                			@endif
                		} else {
                			document.getElementById('upvote' + edit_id).src = "{{URL::to('/')}}/img/upvotes/upvote-light.png";
                			@if(Auth::check())
                			@if(Auth::user()->enable_memes)
                			document.getElementById('upvote-emote').src = "{{URL::to('/')}}/img/upvotes/downvote-emote.png";
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
<body>
	@include('partials/header')
	@include('partials/float')

	<h1>Most Viewed Posts - PES {{ $version }}</h1>

	<div class="container-fluid">
		<div class="row">
			@foreach($mvp as $post)
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="container mvp-container" style="width: 300px">
					<div class="row">
						<div class="col" align="center">
							<a href="{{URL::to('/')}}/pes{{ $post->version }}/{{ $post->getCategory->slug }}/{{ $post->slug }}" style="color: white;"><div class="mvp-frame" style="background-image: url('{{ explode(';', $post->image_url)[0] }}');"></div></a>
							<br>
							<a href="{{URL::to('/')}}/pes{{ $post->version }}/{{ $post->getCategory->slug }}/{{ $post->slug }}" style="color: #f2f2f2;"><h5>{{ $post->title }}</h5></a>
						</div>
					</div>
					<div class="dropdown-divider" style="margin-top: 15px; margin-bottom: 15px;"></div>
					<div class="row">
						<div class="col-1">
							@if(Auth::check())
							<img id="upvote{{ $post->id }}" src="{{URL::to('/')}}/img/upvotes/{{ $post->isUpvoted(Auth::user()->id, $post->id) ? 'upvoted' : 'upvote-light' }}.png" width="14" class="upvote-btn" onclick="upvote('{{ $post->id }}');">
							@else
							<img id="upvote{{ $post->id }}" src="{{URL::to('/')}}/img/upvotes/upvote-light.png" width="14" class="upvote-btn" onclick="upvote('{{ $post->id }}');">
							@endif
						</div>
						<div class="col-10 my-auto">
							<span style="font-size: 12px; color: #f2f2f2;" id="{{ $post->id }}">{{ $post->upvotes }}</span>
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
				<img src="{{URL::to('/')}}/img/upvotes/upvote-emote.gif" class="upvote-emote" id="upvote-emote">
			</div>
		</div>
	</div>

	@include('partials/footer')

</body>
</html>