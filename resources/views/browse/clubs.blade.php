<!DOCTYPE html>
<html>
<head>
	<title>Browse by Club - MES Modder's Repository</title>
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	
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
		.country-container {
			border: solid #f2f2f2 1px;
			border-radius: 30px;
			margin-bottom: 15px;
			-webkit-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75);
		}
		.club {
			opacity: .8;
		}
		.club:hover {
			opacity: 1;
		}
	</style>
</head>
<body>

	@include('partials/header')

	@include('partials/float')

	<h1>Browse by Club</h1>
	@foreach($countries as $country)
	<div class="container country-container">
		<div class="row" style="margin-top: 15px; margin-bottom: 15px;">
			<div class="col-6" align="right">
				<img src="{{URL::to('/')}}/img/clubs/flags/{{$country}}.png" width="64" style="border-radius: 5px;">
			</div>
			<div class="col-6 my-auto" align="left">
				<h5 style="color: #f2f2f2;">{{ ucfirst($country) }}</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="dropdown-divider" style="margin: 0"></div>
			</div>
		</div>
		<div class="row justify-content-md-center" style="margin-top: 15px; margin-bottom: 15px;">
			@foreach($clubs as $club)
				@if($club->country == $country)
				<div class="col-1">
					<a href="{{URL::to('/')}}/keywords/{{ str_slug($club->name) }}"><img src="{{URL::to('/')}}/img/clubs/{{ $country }}/{{ $club->image_url }}" height="64" class="club"></a>
				</div>
				@endif
			@endforeach
		</div>
	</div>
	@endforeach
</body>
</html>