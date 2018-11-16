<!DOCTYPE html>
<html>
<head>
	<title>Add Request - MES Modder's Repository</title>
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
		.link-add {
			font-size: 40px;
		}
	</style>

	<script type="text/javascript">
		function addPreviewField() {
			var previews = document.getElementById("previews-container");
			var element = document.createElement("div");
			element.className = "row";
			var inner = '<div class="col-11"><input name="previews[]" type="text" class="form-control"  style="margin-bottom: 10px;"></div><div class="col-1" align="right"><button type="button" class="btn btn-primary" onclick="removePreviewField(this)" id="remove-preview">-</button></div>';
			element.innerHTML =  inner;
			previews.appendChild(element);
		}
		function removePreviewField(element) {
			col = element.parentNode;
			row = col.parentNode;
			row.remove();
		}
	</script>
</head>
<body>

	@include('partials/header')

	@include('partials/float')

	<h1>Add Request</h1>

	<form method="POST" action="{{ action('RequestsController@store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="container">
			<div class="row">
				<div class="col">
					<h5>Previews</h5>
				</div>
			</div>
			<div id="previews-container">
				<div class="row">
					<div class="col-11">
						<input name="previews[]" type="text" class="form-control" style="margin-bottom: 10px;">		
					</div>
					<div class="col-1" align="right">
						<button type="button" class="btn btn-primary" onclick="addPreviewField()" id="add-preview">+</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h5>Message</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<textarea name="message" class="form-control" rows="6" style="margin-bottom: 30px;"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col" align="center">
					<button type="submit" class="btn btn-primary" style="margin-bottom: 130px;">Submit</button>
				</div>
			</div>
		</div>
	</form>

	@include('partials/footer')

</body>
</html>