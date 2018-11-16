<!DOCTYPE html>
<html>
<head>
	<title>Donate - MES Modder's Repository</title>
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<style type="text/css">
		body {
			background-color: #222222 !important;
			color: #f2f2f2 !important;
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

	<h1>Donate</h1>
	<center>For each unit donated, a simple and unusual modder may eat a sandwich while working.</center>

	<form method="POST" id="payment-form" action="{{ action('PaypalController@donate') }}" style="margin-top: 10px;">
		{{ csrf_field() }}
		<div class="container">
			<div class="row">
				<div class="col-10">
					<input class="form-control" type="number" name="amount" placeholder="Amount to donate (€)" min="1">
				</div>
				<div class="col-2">
					<button class="btn btn-primary" type="submit">Donate</button>
				</div>
			</div>
			<div class="row">
				<div class="col" style="color: red; margin-top: 3px;">
					<span>{{ session('status') }}</span>
				</div>
			</div>
		</div>
	</form>

	<div class="container" style="margin-bottom: 300px; margin-top: 30px;">
		<div class="row">
			<div class="col" style="font-size: 12px; margin-bottom: 3px;" align="center">
				<span>Powered by</span>
			</div>
		</div>
		<div class="row">
			<div class="col" align="center">
				<a href="https://www.paypal.com/" target="_blank"><img src="img/paypal.png" width="180"></a>
			</div>
		</div>
	</div>
	

	@include('partials/footer')

</body>
</html>