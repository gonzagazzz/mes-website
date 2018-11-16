<!DOCTYPE html>
<html>
<head>
	<title>Send Private Message - MES Modder's Repository</title>
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	
	<style type="text/css">
		body {
			background-color: #222222 !important;
			color: white !important;
		}
		h1 {
			text-align: center;
			padding-top: 45px;
			padding-bottom: 35px;
		}
	</style>
</head>
<body>
	@include('partials/header')
	@include('partials/float')

	<h1>Send Private Message</h1>

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