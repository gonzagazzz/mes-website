<!DOCTYPE html>
<html>
<head>
	<title>{{ $edit->title }} - MES Modder's Repository</title>
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<style type="text/css">
		body {
			background-color: #222222 !important;
			color: white !important;
		}
		h1 {
			text-align: center;
			padding-top: 45px;
			padding-bottom: 35px;
		}
		.frame {
			width: 100%;
			border-style: solid;
			border-width: 0px;
			-webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
		}
		.edit-info {
			font-size: 12px;
		}
		.download-btn {
			background-color: #222222;
			color: white;
			border-style: none;
			padding: 15px;
			max-width: 700px;
			width: 100%;
			border-radius: 150px;
			cursor: pointer;
			font-weight: bold;
			border: 1px solid #f2f2f2;
		}
		.download-btn:hover {
			-webkit-animation-name: color-effect;
		    -webkit-animation-duration: 2.5s;
		    animation-name: color-effect;
		    animation-duration: 0.5s;
		    animation-fill-mode: forwards;
		}
		@-webkit-keyframes color-effect{
		    from{background-color: #222222; border: 1px solid #f2f2f2;} 
		    to{background-color: #cb1223; border: 1px solid #cb1223;}
		}
		@keyframes color-effect{
		    from{background-color: #222222; border: 1px solid #f2f2f2;} 
		    to{background-color: #cb1223; border: 1px solid #cb1223;}
		}
		.download-btn:focus {
			outline : 0;
			-moz-outline : 0;
			border : 0;
		}
		.info-container {
			background-color: white;
			color: #222222;
			-webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
		}
		.description-gradient {
			background: rgba(255,255,255,0);
			background: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
			background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,255,255,0)), color-stop(100%, rgba(255,255,255,1)));
			background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
			background: -o-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
			background: -ms-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
			background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff', GradientType=1 );
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

	<h1>{{ $edit->title }}</h1>

	<div class="container" style="max-width: 1000px; width: 100%;">
		@foreach((explode(';', $edit->image_url)) as $image)
		<div class="row">
			<div class="col" align="center" style="padding: 0; margin-bottom: 15px;">
				<img class="frame" src="{{ $image }}">
			</div>
		</div>
		@endforeach
		<div class="row">
			<div class="col">
				@if(Auth::check())
				<img id="upvote{{ $edit->id }}" src="{{URL::to('/')}}/img/upvotes/{{ $edit->isUpvoted(Auth::user()->id, $edit->id) ? 'upvoted' : 'upvote-light' }}.png" width="14" class="upvote-btn" onclick="upvote('{{ $edit->id }}');">
				@else
				<img id="upvote{{ $edit->id }}" src="{{URL::to('/')}}/img/upvotes/upvote-light.png" width="14" class="upvote-btn" onclick="upvote('{{ $edit->id }}');">
				@endif
				<span style="font-size: 12px; margin-left: 15px;" id="{{ $edit->id }}">{{ $edit->upvotes }}</span>
			</div>
		</div>
		<div class="row">
			<div class="col" style="padding-top: 30px; width: 100%" align="center">
				<a href="{{ $edit->download_url }}" target="_blank"><button class="download-btn">Download</button></a><br>
				<label class="edit-info">{{ $edit->filesize }} MB</label>
			</div>
		</div>
		@if($edit->description != NULL)
		<div class="row" style="margin-top: 30px;">
			<div class="col">
				<h2 class="description-gradient" style="padding-top: 20px; padding-bottom: 20px; margin-bottom: 20px;">Description</h2>
			</div>
		</div>
		<div class="row">
			<div class="col" style="font-size: 14px;">
				<p>{!! $edit->description !!}</p>
			</div>
		</div>
		@endif
		<div class="row"">
			<div class="col" style="font-size: 14px">
				<p><strong>Date of release:</strong> {{$edit->date}}</p>
			</div>
		</div>
		<div style="background-color: #f2f2f2; color: #222222; border-radius: 15px; margin-top: 15px; margin-bottom: 120px;">
			<div class="row">
				<div class="col" style="padding-bottom: 15px; padding-top: 15px;">
					<center><label>Keywords</label></center>
				</div>
			</div>
			<div class="dropdown-divider" style="margin: 0;"></div>
			<div class="row" align="center">
				<div class="col" style="padding-bottom: 15px; padding-top: 15px;">
					@foreach($keywords as $key)
						<a href="{{URL::to('/')}}/keywords/{{ str_slug($key) }}" class="edit-info">{{ $key }}</a>
					@endforeach
				</div>
			</div>
		</div>

		<div class="row" style="margin-bottom: 60px;">
			<div class="col">
				<div class="row">
					<div class="col">
						<h5>You may like...</h5>
					</div>
				</div>
				<div class="row" style="background-color: white !important; border-radius: 15px;">
					@foreach($other_posts as $lepost)
					<div class="col">
						<div class="row">
							<div class="col" style="padding: 0;">
								<a href="../{{ $lepost->getCategory->slug }}/{{ $lepost->slug }}"><img src="{{ $lepost->image_url }}" height="112" style="width: 100%;"></a>
							</div>
						</div>
						<div class="row">
							<div class="col" align="center">
								<a href="../{{ $lepost->getCategory->slug }}/{{ $lepost->slug }}">{{ $lepost->title }}</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		@if(Auth::check())
		<h4>Give your feedback!</h4>
		@if(count($comments) == 0)
		<form method="POST" action="{{ action('EditsController@postComment') }}" style="margin-bottom: 120px;">
		@else
		<form method="POST" action="{{ action('EditsController@postComment') }}" style="margin-bottom: 30px;">
		@endif
			{{ csrf_field() }}
			<div class="row">
				<input type="hidden" name="title" value="{{ $edit->title }}">
				<input type="hidden" name="version" value="{{ $version }}">
				<div class="col-11">
					<textarea name="message" class="form-control" rows="4" placeholder="Write your comment here..."></textarea>
				</div>
				<div class="col-1 my-auto">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
		@endif

		@if(count($comments) != 0)
		<h4>Comments</h4>
		<div style="margin-bottom: 120px;">
			@foreach ($comments as $comment)
			<div class="row info-container" style="margin: 0; border-radius: 5px; margin-bottom: 10px;">
				<div class="col" style="margin-bottom: 10px;">
					<div class="row">
						<div class="col">
							@if($comment->getUser != NULL)
							<strong>{{ $comment->getUser->username }}</strong> <span style="font-size: 12px;">({{ $comment->date }})</span>
							@else
							<strong><del>Banned User</del></strong> <span style="font-size: 12px;">({{ $comment->date }})</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="col">
							<span>{{ $comment->message }}</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			{{ $comments->links() }}
		</div>
		@endif
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