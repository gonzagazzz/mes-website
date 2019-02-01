<!DOCTYPE html>
<html>
<head>
	<title>PES 2015 Tools - MES Modder's Repository</title>
	@include('partials/imports')

	<script type="text/javascript">
		var toLoad1 = {!! json_encode($previews1) !!};
		var toLoad2 = {!! json_encode($previews2) !!};
		var previews1 = [], previews2 = [];
		function loadPreviews() {
			for (i=0;i<toLoad1.length;i++) {
			    previews1.push(new Image());
			    previews1[i].src = toLoad1[i];
			}
			for (i=0;i<toLoad2.length;i++) {
			    previews2.push(new Image());
			    previews2[i].src = toLoad2[i];
			}
		}
		function togglePreview(version, index) {
			preview = document.getElementById(version);
			if(version == "1.0.0") {
				previews = previews1;
			} else if(version == "1.1.0") {
				previews = previews2;
			}
			preview.src = previews[index].src;
		}
	</script>
</head>
<body onload="loadPreviews()">
	@include('partials/navbar')

	@include('partials/float')

	<h1 style="margin-top: 55px;">PES 2015 Tools</h1>
	<div class="container" align="center">
		<ul class="list-inline">
			<li class="list-inline-item tool-title">[MES] PES 2015 Multi Selector Tool</li>
			<a href="#multi-selector-tool-1.0.0"><li class="list-inline-item tool-version">1.0.0</li></a>
			<a href="#multi-selector-tool-1.1.0"><li class="list-inline-item tool-version">1.1.0</li></a>
		</ul>
	</div>

	<div class="container-fluid" style="padding: 30px; background-color: white; color: #222222;">
		<div class="row" id="multi-selector-tool-1.0.0" style="margin-bottom: 80px;">
			<div class="col" align="left">
				<h3 style="margin: 0px;">[MES] PES 2015 Multi Selector Tool</h3>
			</div>
		</div>
		<!-- 1.0.0 -->
		<div class="row">
			<div class="col-12 col-lg-4">
				<div class="row" style="margin-bottom: 10px;">
					<div class="col">
						<span style="font-weight: bold;">Version 1.0.0 [BETA] - </span>
						<a href="http://adf.ly/wKaQd" target="_blank"><button class="download-dropdown">Download</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 2 menu fonts</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 2 nets textures</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 8 replay logos</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 2 teams and league logos</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Contact form</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Access various game folders</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">PES 2014 launcher</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">DpFileListGenerator 1.4 by Baris</span>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-8 my-auto" align="center">
				<div class="row">
					<div class="col">
						<img src="{{ $previews1[0] }}" id="1.0.0" class="tool-preview">
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col">
						@for ($i = 0; $i < count($previews1); $i++)
						    <button class="btn btn-primary" style="margin-bottom: 5px;" onclick="togglePreview('1.0.0', {{ $i }})">{{ $i+1 }}</button>
						@endfor
					</div>
				</div>
			</div>
		</div>
		<div class="dropdown-divider" id="multi-selector-tool-1.1.0" style="margin-bottom: 80px; margin-top: 80px;"></div>
		<!-- 1.1.0 -->
		<div class="row" style="margin-bottom: 80px;">
			<div class="col-12 col-lg-4">
				<div class="row" style="margin-bottom: 10px;">
					<div class="col">
						<span style="font-weight: bold;">Version 1.1.0 - </span>
						<a href="http://adf.ly/11V9WO" target="_blank"><button class="download-dropdown">Download</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 8 corner flags</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 8 referee kits</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 3 ballpacks</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Unlock 50 balls</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 2 bootpacks</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Unlock 106 boots</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Enable and disable crowd</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 2 menu styles</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added stadium previews with logo</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Added 3 turfs textures</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-new">NEW</span><span style="font-size: 15px;">Notification area icon on closing, optional</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="tag-add">ADD</span><span style="font-size: 15px;">Added 3 teams and leagues logos</span>
					</div>
				</div>
				
			</div>
			<div class="col-12 col-lg-8 my-auto" align="center">
				<div class="row">
					<div class="col">
						<img src="{{ $previews2[0] }}" id="1.1.0" class="tool-preview">
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col">
						@for ($i = 0; $i < count($previews2); $i++)
						    <button class="btn btn-primary" style="margin-bottom: 5px;" onclick="togglePreview('1.1.0', {{ $i }})">{{ $i+1 }}</button>
						@endfor
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('partials/footer')
</body>
</html>