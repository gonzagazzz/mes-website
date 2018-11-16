<!DOCTYPE html>
<html>
<head>
	<title>Keyword: {{ $keyword }} - MES Modder's Repository</title>
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		body {
			background-color: #222222 !important;
		}
		h1 {
			color: white !important;
			text-align: center;
			padding-top: 45px;
			padding-bottom: 35px;
		}
		.edit-title {

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
	</style>
</head>
<body>
	@include('partials/header')
	@include('partials/float')

	<h1>Keyword: {{ $keyword }}</h1>

	<div class="container">
		@foreach($edits as $edit)
			<div class="row edit-container">
				<div class="col-3" style="padding: 0px; margin: 0px;">
					<a href="{{URL::to('/')}}/pes{{ $edit->version }}/{{ str_slug($edit->getCategory->name, '-') }}/{{ $edit->slug }}"><img src="{{ explode(';', $edit->image_url)[0] }}" class="thumbnail"/></a>
				</div>
				<div class="col-6 my-auto">
					<div class="row">
						<div class="col">
							<strong><a href="{{URL::to('/')}}/pes{{ $edit->version }}/{{ str_slug($edit->getCategory->name, '-') }}/{{ $edit->slug }}">{{ $edit->title }}</a></strong>
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
					<div class="row">
						<div class="col">
							
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
</body>
</html>