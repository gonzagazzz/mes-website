<!DOCTYPE html>
<html>
<head>
	<title>Donate - MES Modder's Repository</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@include('partials/imports')
</head>
<body style="color: #f2f2f2;">
	@include('partials/navbar')

	@include('partials/float')

	<h1 style="margin-top: 55px;">Donate</h1>
	<div class="container-fluid" style="margin-bottom: 300px; margin-top: 30px;" align="center">
		<div class="row">
			<div class="col" align="center">
				<span>For each unit donated, a simple and unusual modder may eat a sandwich while working.</span>
			</div>
		</div>
		<div class="row" style="margin-top: 30px;">
			<div class="col">
				<form method="POST" id="payment-form" action="{{ action('PaypalController@donate') }}" style="margin-top: 10px; padding-right: 15px; padding-left: 15px;">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-9 col-md-10 col-lg-11" style="padding-right: 15px; padding-left: 15px;">
							<input class="form-control" type="number" name="amount" placeholder="Amount to donate (€)" min="1">
						</div>
						<div class="col-3 col-md-2 col-lg-1 reset-padding">
							<button class="btn btn-primary" type="submit">Donate</button>
						</div>
					</div>
					<div class="row">
						<div class="col" style="color: red; margin-top: 3px;">
							<span>{{ session('status') }}</span>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
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