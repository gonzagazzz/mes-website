<!DOCTYPE html>
<html>
<head>
	<title>PUMM - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')
	@include('partials/float')

	<h1 style="margin-top: 55px;">PES Ultimate Mod Manager</h1>

	<div class="container" style="margin-bottom: 100px; color: white;">
		<div class="row">
			<div class="col" style="text-align: center; padding-bottom: 35px;">
				<img src="{{ URL::to('/') }}/img/pumm/logo.png" height="256"/>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h2>Getting Started</h2><br>
				<p>PES Ultimate Mod Manager <b>is a powerful tool to easily manage your Pro Evolution Soccer 2019 and 2020 mods.</b> Its purpose is to create an universal easy way of sharing and installing patches, and provide an intuitive platform to make your own sets of mods.</p>
				<br>
			</div>
		</div>

		<div class="row">
			<div class="col card" style="padding: 0px; color: black !important;">
				<div class="row">
					<div class="col">
						<h5 style="margin: 16px 0 8px 24px;">Step 1</h5>
					</div>
				</div>
				<div class="dropdown-divider"></div>
				<div class="row">
					<div class="col" style="padding: 16px 64px 8px 64px;">
						<p><a href="{{ URL::to('/') }}/pumm/download">Download</a> the latest version of PES Ultimate Mod Manager</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col card" style="padding: 0px; color: black !important;">
				<div class="row">
					<div class="col">
						<h5 style="margin: 16px 0 8px 24px;">Step 2</h5>
					</div>
				</div>
				<div class="dropdown-divider"></div>
				<div class="row">
					<div class="col" style="padding: 16px 64px 8px 64px;">
						<p>Extract downloaded file to the location you want</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col card" style="padding: 0px; color: black !important;">
				<div class="row">
					<div class="col">
						<h5 style="margin: 16px 0 8px 24px;">Step 3</h5>
					</div>
				</div>
				<div class="dropdown-divider"></div>
				<div class="row">
					<div class="col" style="padding: 16px 64px 8px 64px;">
						<p>Run <i>PUMM.exe</i></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col card" style="padding: 0px; color: black !important;">
				<div class="row">
					<div class="col">
						<h5 style="margin: 16px 64px 8px 24px;">Step 4</h5>
					</div>
				</div>
				<div class="dropdown-divider"></div>
				<div class="row">
					<div class="col" style="padding: 16px 64px 8px 64px;">
						<p>Click on <b><i>Browse PES download folder</i></b> and select the folder <i>download</i> inside your Pro Evolution Soccer directory</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<p><i>.NET Framework 4.6.1 is required. If you don't have .NET Framework 4.6.1 or above installed, you can download it <a href="https://www.microsoft.com/en-us/download/details.aspx?id=49981" target="_blank">here</a>.</i></p>
				<br><br>
			</div>
		</div>

		<div class="row">
				<div class="col">
					<h2>Tool Structure</h2><br>
					<p>PES Ultimate Mod Manager has 3 main components: Page Navigator, Content Frame and Active Bar.</p>
					<p><b>Page Navigator</b> is used to navigate through the various available pages anywhere in the program; the current existing pages are: <i>Home</i>, <i>New Modpack</i>, <i>Library</i>, <i>Mods</i>, <i>About</i>.</p>
					<p><b>Content Frame</b> is a dynamic component that contains the visual of every page.</p>
					<p><b>Active Bar</b> contains information about the current Active modpack. Every change made in <i>Mods</i> page is relative to the modpack shown in this bar. To close the current Active modpack and hide this bar, click in the Close button shown below.</p>
					<br>
				</div>
			</div>

		<div class="row">
			<div class="col">
				<img src="img/pumm/structure.png" style="width: 100%;">
			</div>
		</div>

		<div class="row">
			<div class="col">
				<br><br>
				<h2 id="docs">Documentation</h2><br>
			</div>
		</div>
		<div class="row" style="margin-bottom: 16px;">
			<div class="col">
				<a href="/pumm/create" class="pumm-lnk">Create modpacks</a>
			</div>
		</div>
		<div class="row" style="margin-bottom: 16px;">
			<div class="col">
				<a href="/pumm/associate" class="pumm-lnk">Associate mods with modpacks</a>
			</div>
		</div>
		<div class="row" style="margin-bottom: 16px;">
			<div class="col">
				<a href="/pumm/edit" class="pumm-lnk">Edit modpacks' name and thumbnail</a>
			</div>
		</div>
		<div class="row" style="margin-bottom: 16px;">
				<div class="col">
					<a href="/pumm/delete" class="pumm-lnk">Delete modpacks</a>
				</div>
			</div>
		<div class="row" style="margin-bottom: 16px;">
			<div class="col">
				<a href="/pumm/generate" class="pumm-lnk">Generate DpFileList.bin</a>
			</div>
		</div>
		<div class="row" style="margin-bottom: 16px;">
			<div class="col">
				<a href="/pumm/import-export" class="pumm-lnk">Import and export modpacks</a>
			</div>
		</div>
		
	</div>

	@include('partials/footer')
</body>
</html>