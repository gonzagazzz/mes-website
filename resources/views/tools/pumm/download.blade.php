<!DOCTYPE html>
<html>
<head>
	<title>Download PUMM - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')
	@include('partials/float')

	<h1 style="margin-top: 55px;">PES Ultimate Mod Manager</h1>

	<div class="container" style="margin-bottom: 64px; color: white;">
		<div class="row">
			<div class="col" style="text-align: center; padding-bottom: 35px;">
				<img src="{{ URL::to('/') }}/img/pumm/logo.png" height="256"/>
			</div>
		</div>
        
        <div class="row" style="margin-bottom: 16px;">
            <div class="col">
                <a href="{{ URL::to('/') }}/pumm" class="pumm-lnk">Go to Documentation ></a>
            </div>
        </div>

        <div class="row">
            <div class="col card" style="padding: 0px; color: black !important;">
                <div class="row">
                    <div class="col">
                        <h5 style="margin: 16px 0 8px 24px;">Version 1.0 <i style="font-size: 12px;">(19/10/2019)</i></h5>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col" style="padding: 16px 64px 0 64px;">
                        <ul>
                            <li>Compatibility with PES 2019 and PES 2020</li>
                            <li>Right-click on download folder link allows to open path in explorer or clear saved path</li>
                            <li>Create modpacks with thumbnails and titles</li>
                            <li>Set modpack as Active to apply changes to that particular modpack</li>
                            <li>Delete modpacks</li>
                            <li>Export modpacks to XLS files</li>
                            <li>Import modpacks from XLS files</li>
                            <li>Edit modpacks' names and thumbnails</li>
                            <li>Generate DpFileList.bin from a temporary mod selection or from a modpack</li>
                            <li>View the order in which CPKs will be added to DpFileList.bin</li>
                            <li>Links to documentation</li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col" style="padding: 8px 0 0; text-align: center;">
                        <a href="http://eunsetee.com/Yoha" target="_blank">
                            <button class="download-btn">Download</button>
                        </a>
                        <br>
                        <label class="edit-info">3.1 MB</label>
                    </div>
                </div>
            </div>
        </div>
	</div>

	@include('partials/footer')
</body>
</html>