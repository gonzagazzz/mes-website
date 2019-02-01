<!DOCTYPE html>
<html>
<head>
	<title>PES {{ $version }} Most Viewed Posts - MES Modder's Repository</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@include('partials/imports')

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
	@include('partials/navbar')
	
	@include('partials/float')

	<h1 style="margin-top: 55px; padding-right: 10px; padding-left: 10px;">Most Viewed Posts - PES {{ $version }}</h1>

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