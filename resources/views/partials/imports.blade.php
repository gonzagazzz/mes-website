	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/balloon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/float.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
	<link rel="stylesheet" href="{{ asset('css/pages.css') }}">
	<link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript">
		function toggle() {
			$("#menu").toggle("slide");
		}
	</script>
	<!-- float -->
	<script type="text/javascript">
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
	<!-- footer -->
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v3.1';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>