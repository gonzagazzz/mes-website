<!DOCTYPE html>
<html>
<head>
	<title>Requests - MES Modder's Repository</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@include('partials/imports')

	<script type="text/javascript">
		function togglePreview(element) {
			col = element.parentNode;
			nextPreview = col.children[0].value;
			img = col.parentNode;
			img = img.parentNode;
			img = img.children[0];
			img = img.children[0];
			img = img.children[0];
			img.href = nextPreview;
			img = img.children[0];
			img.src = nextPreview;
		}
		function hideInvalid(img) {
			$(img).parent().parent().parent().hide();
			$(img).parent().parent().parent().next().hide()
		}
		function upvote(request_id){
	    	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	        $.ajax({
	            type: "post",
                url: '/requests/upvote',
                data: {
                	_token: CSRF_TOKEN,
                	request_id: request_id,
                	user_id: '{{ (Auth::check() == 1 ? Auth::user()->id : null) }}'
                },
                success: function (data) {
                	if(data == "logged-out") {
                		alert("You must be logged in order to upvote!");
                	} else {
                		upvotes = document.getElementById(request_id);
                		current = parseInt(upvotes.innerHTML);
                		if(data > current) {
                			document.getElementById('upvote' + request_id).src = "{{URL::to('/')}}/img/upvotes/upvoted.png";
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
                			document.getElementById('upvote' + request_id).src = "{{URL::to('/')}}/img/upvotes/upvote-dark.png";
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
                		upvotes.innerHTML = data + " Upvotes";
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
	@include('partials/navbar')

	@include('partials/float')

	<h1 style="margin-top: 55px;">Requests</h1>

	<div class="container" style="padding-bottom: 40px;">
		@if(count($requests) == 0)
		<div class="row" style="margin-bottom: 300px;">
			<div class="col" align="center">
				<span style="font-size: 14px;">No requests to show</span>
			</div>
		</div>
		@else
		@foreach($requests as $request)
		<div class="request" style="margin-bottom: 40px;">
			<div class="row">
				<div class="col-12">
					<a href="{{ explode(';', $request->previews)[0] }}" target="_blank"><img src="{{ explode(';', $request->previews)[0] }}" style="object-fit: cover; object-position: 0 0; width: 100%; height: 320px;" data-toggle="tooltip" data-placement="top" title="Click on the preview to see the full image" onerror="hideInvalid(this)"></a>
				</div>
			</div>
			<div class="row" align="center">
				@for($i=1; $i <= count(explode(';', $request->previews)); $i++)
				<div class="col-1" style="margin-top: 10px; margin-bottom: 10px;">
					<input type="hidden" value="{{ explode(';', $request->previews)[$i-1] }}">
					<button class="btn btn-primary" onclick="togglePreview(this)">{{ $i }}</button>
				</div>
				@endfor
			</div>
			<div class="row" style="padding-top: 15px;">
				<div class="col my-auto">
					<img src="/img/user-icon.png" width="22" style="margin-left: 15px; margin-right: 8px;">
					@if($request->getUser != NULL)
					<span style="font-size: 13px; margin-right: 15px;">{{ $request->getUser->username }}</span> |
					@else
					<span style="font-size: 13px; margin-right: 15px;"><del>Banned User</del></span> |
					@endif
					<img src="/img/date-icon.png" width="20" style="margin-left: 15px; margin-right: 8px;">
					<span style="font-size: 13px; margin-right: 15px;">{{ $request->date }}</span> |
					@if(Auth::check())
					<img id="upvote{{ $request->id }}" src="{{URL::to('/')}}/img/upvotes/{{ $request->isUpvoted(Auth::user()->id, $request->id) ? 'upvoted' : 'upvote-dark' }}.png" width="14" class="upvote-btn" onclick="upvote('{{ $request->id }}');"  style="margin-left: 15px; margin-right: 8px;">
					@else
					<img id="upvote{{ $request->id }}" src="{{URL::to('/')}}/img/upvotes/upvote-dark.png" width="14" class="upvote-btn" onclick="upvote('{{ $request->id }}');"  style="margin-left: 15px; margin-right: 8px;">
					@endif
					<span style="font-size: 12px; color: #222222;" id="{{ $request->id }}">{{ $request->upvotes }} Upvotes</span>

				</div>
			</div>
			<div class="dropdown-divider" style="margin-top: 15px; margin-bottom: 15px;"></div>
			<div class="row">
				<div class="col">
					<p class="request-message">{{ $request->message }}</p>
				</div>
			</div>
		</div>
		@endforeach
		<div class="row">
			<div class="col">
				{{ $requests->links() }}
			</div>
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