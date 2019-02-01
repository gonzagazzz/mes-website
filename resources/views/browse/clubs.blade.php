<!DOCTYPE html>
<html>
<head>
	<title>Browse by Club - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')

	@include('partials/float')

	<h1 style="margin-top: 45px;">Browse by Club</h1>
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
		<div class="row justify-content-md-center" style="margin-bottom: 15px;">
			@foreach($clubs as $club)
				@if($club->country == $country)
				<div class="col-3 col-lg-1" style="margin-top: 15px;">
					<a href="{{URL::to('/')}}/keywords/{{ str_slug($club->name) }}"><img src="{{URL::to('/')}}/img/clubs/{{ $country }}/{{ $club->image_url }}" height="64" class="club"></a>
				</div>
				@endif
			@endforeach
		</div>
	</div>
	@endforeach

	@include('partials/footer')
</body>
</html>