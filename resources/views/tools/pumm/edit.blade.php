<!DOCTYPE html>
<html>
<head>
	<title>PUMM - Edit modpacks - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')
    @include('partials/float')

    <h1 style="margin-top: 55px;">PES Ultimate Mod Manager Documentation</h1>
    <h2 class="pumm">Edit modpacks' name and thumbnail</h2>

    <div class="container" style="margin-bottom: 100px; color: white;">
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
                        <p>Navigate to Library page by clicking on <i>Library</i> in Page Navigator</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/edit/1.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Choose the modpack you want to edit and click on <i>Set as Active</i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/edit/2.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>To change the name, click on the modpack's name in Active Bar, set the new name and click on the Apply button (green square with a check)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/edit/3.1.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/edit/3.2.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col card" style="padding: 0px; color: black !important;">
                <div class="row">
                    <div class="col">
                        <h5 style="margin: 16px 0 8px 24px;">Step 4</h5>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col" style="padding: 16px 64px 8px 64px;">
                        <p>To change the thumbnail, click on the modpack's thumbnail in Active Bar and browse the new image file you want</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/edit/4.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

	@include('partials/footer')
</body>
</html>