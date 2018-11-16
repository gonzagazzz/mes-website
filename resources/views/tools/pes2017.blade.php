<!DOCTYPE html>
<html>
<head>
	<title>PES 2017 Tools - MES Modder's Repository</title>
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">

	<style type="text/css">
		body {
			background-color: #222222 !important;
		}
		h1 {
			text-align: center;
			padding-top: 45px;
			padding-bottom: 35px;
			color: white !important;
		}
		.new {
			background-color: green;
			color: white !important;
			padding-top: 4px;
			padding-bottom: 4px;
			padding-right: 10px;
			padding-left: 10px;
			border-radius: 5px;
			font-size: 11px;
			font-weight: 500;
			margin-right: 10px;
		}
		.add {
			background-color: royalblue;
			color: white !important;
			padding-top: 4px;
			padding-bottom: 4px;
			padding-right: 10px;
			padding-left: 10px;
			border-radius: 5px;
			font-size: 11px;
			font-weight: 500;
			margin-right: 10px;
		}
		.update {
			background-color: goldenrod;
			color: white !important;
			padding-top: 4px;
			padding-bottom: 4px;
			padding-right: 10px;
			padding-left: 10px;
			border-radius: 5px;
			font-size: 11px;
			font-weight: 500;
			margin-right: 10px;
		}
		.fix {
			background-color: crimson;
			color: white !important;
			padding-top: 4px;
			padding-bottom: 4px;
			padding-right: 10px;
			padding-left: 10px;
			border-radius: 5px;
			font-size: 11px;
			font-weight: 500;
			margin-right: 10px;
		}
		.download-btn {
			background-color: #222222;
			color: white;
			padding-top: 2px;
			padding-bottom: 2px;
			padding-left: 50px;
			padding-right: 50px;
			border-style: none;
			border-radius: 150px;
			cursor: pointer;
			font-weight: bold;
			border: 1px solid #f2f2f2;
			margin-top: 5px;
			font-size: 12px;
		}
		.download-btn:hover {
			-webkit-animation-name: color-effect;
		    -webkit-animation-duration: 2.5s;
		    animation-name: color-effect;
		    animation-duration: 0.5s;
		    animation-fill-mode: forwards;
		}
		@-webkit-keyframes color-effect{
		    from{background-color: #222222; border: 1px solid #f2f2f2;} 
		    to{background-color: #cb1223; border: 1px solid #cb1223;}
		}
		@keyframes color-effect{
		    from{background-color: #222222; border: 1px solid #f2f2f2;} 
		    to{background-color: #cb1223; border: 1px solid #cb1223;}
		}
		.download-btn:focus {
			outline : 0;
			-moz-outline : 0;
		}
		.tool-title {
			background-color: #0f7bfd;
			color: white;
			padding-bottom: 15px;
			padding-top: 15px;
			padding-left: 30px;
			padding-right: 30px;
			border-radius: 10px;
		}
		.tool-version {
			background-color: white;
			color: #222222;
			padding-bottom: 15px;
			padding-top: 15px;
			padding-left: 30px;
			padding-right: 30px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	@include('partials/header')
	@include('partials/float')

	<h1>PES 2017 Tools</h1>
	<div class="container" align="center">
		<ul class="list-inline">
		  <li class="list-inline-item tool-title">PES 2017 CPK Installer</li>
		  <a href="#cpk-installer-1.0.0"><li class="list-inline-item tool-version">1.0.0</li></a>
		  <a href="#cpk-installer-1.1.0"><li class="list-inline-item tool-version">1.1.0</li></a>
		  <a href="#cpk-installer-1.1.2"><li class="list-inline-item tool-version">1.1.2</li></a>
		</ul>
	</div>

	<div class="container-fluid" style="padding-top: 30px; padding-bottom: 30px; padding-left: 45px; background-color: white; color: #222222;">
		<div class="row" id="cpk-installer-1.0.0" style="margin-bottom: 80px;">
			<div class="col" align="left">
				<h3 style="margin: 0px; padding-left: 30px;">PES 2017 CPK Installer</h3>
			</div>
		</div>
		<!-- 1.0.0 -->
		<div class="row" style="padding: 30px;">
			<div class="col-4">
				<div class="row" style="margin-bottom: 10px;">
					<div class="col">
						<span style="font-weight: bold;">Version 1.0.0 - </span>
						<a href="http://adf.ly/1n2A3E" target="_blank"><button class="download-btn">Download</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="new">NEW</span><span style="font-size: 15px;">List all .cpk files</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="new">NEW</span><span style="font-size: 15px;">Add external .cpk file to list</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="new">NEW</span><span style="font-size: 15px;">Generate DpFileList.bin with selected files</span>
					</div>
				</div>
			</div>
			<div class="col-8 my-auto" align="center">
				<img src="https://image.ibb.co/deUzuU/pes_2017_cpk_installer.png" style="max-width: 700px;">
			</div>
		</div>
		<div class="dropdown-divider" id="cpk-installer-1.1.0" style="margin-bottom: 80px; margin-top: 80px;"></div>
		<!-- 1.1.0 -->
		<div class="row" style="padding: 30px;">
			<div class="col-4">
				<div class="row" style="margin-bottom: 10px;">
					<div class="col">
						<span style="font-weight: bold;">Version 1.1.0 - </span>
						<a href="http://picocurl.com/127Q" target="_blank"><button class="download-btn">Download</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="new">NEW</span><span style="font-size: 15px;">Drag and drop feature</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="new">NEW</span><span style="font-size: 15px;">Create backup of previews DpFileList.bin</span>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="new">NEW</span><span style="font-size: 15px;">Sizable window</span>
					</div>
				</div>
			</div>
			<div class="col-8 my-auto" align="center">
				<img src="https://image.ibb.co/i9Dng9/pes_2017_cpk_installer_1_1_0.png" style="max-width: 700px;">
			</div>
		</div>
		<div class="dropdown-divider" id="cpk-installer-1.1.2" style="margin-bottom: 80px; margin-top: 80px;"></div>
		<!-- 1.1.0 -->
		<div class="row" style="padding: 30px; margin-bottom: 80px;">
			<div class="col-4">
				<div class="row" style="margin-bottom: 10px;">
					<div class="col">
						<span style="font-weight: bold;">Version 1.1.2 - </span>
						<a href="http://casualient.com/EkZ" target="_blank"><button class="download-btn">Download</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col" style="margin-bottom: 4px;">
						<span class="fix">FIX</span><span style="font-size: 15px;">Could not find part of path error</span>
					</div>
				</div>
			</div>
			<div class="col-8 my-auto" align="center">
				<img src="https://image.ibb.co/dh9D4U/pes_2017_cpk_installer_1_1_2.png" style="max-width: 700px;">
			</div>
		</div>
	</div>

	@include('partials/footer')
</body>
</html>