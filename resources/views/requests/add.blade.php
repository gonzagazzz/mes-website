<!DOCTYPE html>
<html>
<head>
	<title>Add Request - MES Modder's Repository</title>
	@include('partials/imports')

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
		$(function () {
			$('[data-toggle="popover"]').popover()
		})
	</script>
</head>
<body>
	@include('partials/navbar')

	@include('partials/float')

	<h1 style="margin-top: 55px;">Add Request</h1>
	<center style="color: white; margin-bottom: 30px;">If you want a customized edit, this is the place to ask. Every request is listed <a href="{{ URL::to('/') }}/requests">here</a> and you can upvote the ones you prefer to prioritize their creation.</center>

	<form method="POST" action="{{ action('RequestsController@store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="container">
			<div class="row">
				<div class="col">
					<h5 style="color: white;">Previews <i class="fa fa-sm fa-info-circle" style="cursor: pointer;" data-toggle="popover" title="Previews" data-content="Submit links of images that portray the request you wish. For each new link, click the '+' button."></i></h5>
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
			<div class="row" style="margin-top: 30px;">
				<div class="col">
					<h5 style="color: white;">Message <i class="fa fa-sm fa-info-circle" style="cursor: pointer;" data-toggle="popover" title="Message" data-content="Describe the kind of request you wish. Be aware that this message will be published in the website and everyone will be able to read it."></i></h5>
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