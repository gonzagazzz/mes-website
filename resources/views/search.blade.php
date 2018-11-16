<!DOCTYPE html>
<html>
<head>
	<title>Search: {{ $search_words }} - MES Modder's Repository</title>
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<style type="text/css">
		html, body {
			height: 100%;
			margin: 0;
		}
		body {
			background-color: #222222 !important;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}
		.main {
			flex: 1;
			margin-bottom: 100px;
		}
		.edit-info {
			font-size: 12px;
		}
		.edit-container {
			margin: 10px;
			background-color: white;
			color: #222222;
			-webkit-box-shadow: 0px 0px 3px 2px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 3px 2px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 3px 2px rgba(0,0,0,0.75);
		}
		.download-btn {
			font-size: 12px !important;
			background-color: #222222;
			color: white;
			border-style: none;
			padding: 15px;
			width: 200px;
			border-radius: 150px;
			cursor: pointer;
			font-weight: bold;
		}
		.download-btn:hover {
			background-color: red;
			-webkit-animation-name: btn-effect;
		    -webkit-animation-duration: 2.5s;
		    animation-name: btn-effect;
		    animation-duration: 0.5s;
		    animation-fill-mode: forwards;
		}
		h1 {
			color: white !important;
			text-align: center;
			padding-top: 45px;
			padding-bottom: 35px;
		}
		@-webkit-keyframes btn-effect{
		    from{background-color: #222222} 
		    to{background-color: #cb1223}
		}
		@keyframes btn-effect{
		    from{background-color: #222222} 
		    to{background-color: #cb1223}
		}
		.download-btn:focus {
			outline : 0;
			-moz-outline : 0;
			border : 0;
		}
		.thumbnail {
			width: 256px;
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
                			document.getElementById('upvote' + edit_id).src = "{{URL::to('/')}}/img/upvotes/upvote-dark.png";
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

	<h1>Search results for "{{ $search_words }}"</h1>

	<div class="container main">
		@foreach($edits as $edit)
			<div class="row edit-container">
				<div class="col-3" style="padding: 0px; margin: 0px;">
					<a href="{{URL::to('/')}}/pes{{ $edit->version }}/{{ $edit->getCategory->slug }}/{{ $edit->slug }}"><img src="{{ explode(';', $edit->image_url)[0] }}" class="thumbnail"/></a>
				</div>
				<div class="col-6 my-auto">
					<div class="row">
						<div class="col">
							<strong><a href="{{URL::to('/')}}/pes{{ $edit->version }}/{{ $edit->getCategory->slug }}/{{ $edit->slug }}">{{ $edit->title }}</a></strong>
						</div>
					</div>
					<div class="row">
						<div class="col edit-info">
							@if(strlen($edit->description) > 100)
							<span>{!! substr($edit->description, 0, 99) . '...' !!}</span>
							@else
							<span>{!! $edit->description !!}</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="col edit-info">
							<span><strong>Released in:</strong> {{ $edit->date }}</span>
						</div>
					</div>
					<div class="dropdown-divider" style="margin-top: 10px; margin-bottom: 10px;"></div>
					<div class="row">
						<div class="col-1">
							@if(Auth::check())
							<img id="upvote{{ $edit->id }}" src="{{URL::to('/')}}/img/upvotes/{{ $edit->isUpvoted(Auth::user()->id, $edit->id) ? 'upvoted' : 'upvote-dark' }}.png" width="14" class="upvote-btn" onclick="upvote('{{ $edit->id }}');">
							@else
							<img id="upvote{{ $edit->id }}" src="{{URL::to('/')}}/img/upvotes/upvote-dark.png" width="14" class="upvote-btn" onclick="upvote('{{ $edit->id }}');">
							@endif
						</div>
						<div class="col-10 my-auto" style="padding: 0;">
							<span style="font-size: 12px; color: #222222;" id="{{ $edit->id }}">{{ $edit->upvotes }}</span>
						</div>
					</div>
				</div>
				<div class="col-3 my-auto" style="text-align: center;">
					<a href="{{ $edit->download_url }}" target="_blank"><button class="download-btn">Download</button></a><br>
					<label class="edit-info">{{ $edit->filesize }} MB</label>
				</div>
			</div>
		@endforeach
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