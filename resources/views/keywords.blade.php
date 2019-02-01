<!DOCTYPE html>
<html>
<head>
	<title>Keyword: {{ $keyword }} - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')

	@include('partials/float')

	<h1 style="margin-top: 55px;">Keyword: {{ $keyword }}</h1>

	<div class="container" style="margin-bottom: 100px;">
		@foreach($edits as $edit)
			<div class="row edit-container">
				<div class="col-12 col-lg-3 reset-padding">
					<a href="{{URL::to('/')}}/pes{{ $edit->version }}/{{ str_slug($edit->getCategory->name, '-') }}/{{ $edit->slug }}"><img src="{{ explode(';', $edit->image_url)[0] }}" class="thumbnail"/></a>
				</div>
				<div class="col-12 col-lg-6 my-auto" style="padding-left: 30px; padding-right: 30px;">
					<div class="row">
						<div class="col" style="margin-top: 10px;">
							<strong><a href="{{URL::to('/')}}/pes{{ $edit->version }}/{{ str_slug($edit->getCategory->name, '-') }}/{{ $edit->slug }}">{{ $edit->title }}</a></strong>
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
						<div class="col edit-info" style="margin-bottom: 15px;">
							<span><strong>Released in:</strong> {{ $edit->date }}</span>
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

	@include('partials/footer')
</body>
</html>