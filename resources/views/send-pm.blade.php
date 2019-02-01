<!DOCTYPE html>
<html>
<head>
	<title>Send Private Message - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')

	@include('partials/float')

	<h1 style="margin-top: 55px;">Send Private Message</h1>

	<form method="POST" action="{{ action('MainController@storePM') }}" enctype="multipart/form-data" style="margin-bottom: 130px;">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="container">
			<div class="row">
				<div class="col">
					<h5>Message</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<textarea name="message" class="form-control" rows="14" style="margin-bottom: 30px;"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col" align="center">
					<button type="submit" class="btn btn-primary">Submit</button><br>
					<span style="color: #4BB543; font-size: 12px;">{{ session('status') }}</span>
				</div>
			</div>
		</div>
	</form>

	@include('partials/footer')
</body>
</html>