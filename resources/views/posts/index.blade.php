<!DOCTYPE html>
<html>
<head>
	<title>PES {{ $version }} {{ $category }} - MES Modder's Repository</title>
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
                		$.notify({
                			// options
                			message: 'You must have an account in order to upvote. Click here to login',
                			url: '/login'
                		},{
                			// settings
                			type: 'danger'
                		});
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
	@include('partials/navbar')

	@include('partials/float')

	<h1 style="margin-top: 55px;">PES {{ $version }} {{ $category }}</h1>

	<div class="container posts">
		@foreach($edits as $edit)
			<div class="row edit-container">
				<div class="col-12 col-lg-3 reset-padding">
					<a href="{{ $edit->getCategory->slug }}/{{ $edit->slug }}"><img src="{{ explode(';', $edit->image_url)[0] }}" class="thumbnail"/></a>
				</div>
				<div class="col-12 col-lg-6 my-auto" style="padding-left: 30px; padding-right: 30px;">
					<div class="row">
						<div class="col" style="margin-top: 10px;">
							<strong><a href="{{ $edit->getCategory->slug }}/{{ $edit->slug }}">{{ $edit->title }}</a></strong>
						</div>
					</div>
					<div class="row">
						<div class="d-none d-md-block col edit-info">
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
						<div class="col-11 my-auto reset-padding edit-info">
							<span id="{{ $edit->id }}">{{ $edit->upvotes }}</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 my-auto" style="margin-top: 10px; text-align: center;">
					<a href="{{ $edit->download_url }}" target="_blank"><button class="primary-btn">Download</button></a><br>
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