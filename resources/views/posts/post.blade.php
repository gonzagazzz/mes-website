<!DOCTYPE html>
<html>
<head>
	<title>{{ $edit->title }} - MES Modder's Repository</title>
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
<body style="color: white;">
	@include('partials/navbar')

	@include('partials/float')
	<h1 style="margin-top: 55px; padding-right: 10px; padding-left: 10px;">{{ $edit->title }}</h1>

	<div class="container" style="max-width: 1000px; width: 100%;">
		@foreach((explode(';', $edit->image_url)) as $image)
		<div class="row">
			<div class="col" align="center" style="padding: 0; margin-bottom: 15px;">
				<img class="post-frame" src="{{ $image }}">
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
				<h5>Description</h5>
				<!--<h2 class="description-gradient" style="padding-top: 20px; padding-bottom: 20px; margin-bottom: 20px;">Description</h2>-->
			</div>
		</div>
		<div class="dropdown-divider"></div>
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
		

		<div class="row" style="margin-bottom: 55px; margin-top: 55px;">
			<div class="col">
				<div class="row">
					<div class="col">
						<h5>You may like...</h5>
					</div>
				</div>
				<div class="dropdown-divider"></div>
				<div class="row" style="border-radius: 15px;">
					@foreach($other_posts as $lepost)
					<div class="col-12 col-md-6">
						<div class="row">
							<div class="col" style="padding: 0;">
								<div class="similar-posts-info">
									<a href="../{{ $lepost->getCategory->slug }}/{{ $lepost->slug }}"><img src="{{ $lepost->image_url }}" height="256" style="width: 100%; padding: 10px;"></a>
									<div class="middle">
										<div class="text noselect">{{ $lepost->title }}</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<div style="background-color: #f2f2f2; color: #222222; border-radius: 15px; margin-top: 15px; margin-bottom: 55px;">
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