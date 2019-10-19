<!DOCTYPE html>
<html>
<head>
	<title>PUMM - Create modpacks - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')
    @include('partials/float')

    <h1 style="margin-top: 55px;">PES Ultimate Mod Manager Documentation</h1>
    <h2 class="pumm">Create modpacks</h2>

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
                        <p>Navigate to New Modpack page by clicking on <i>New Modpack</i> in Page Navigator</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/create/1.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Choose a name for your modpack and insert it in Name's field</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/create/2.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Choose a thumbnail by clicking on <i>Select Thumbnail</i> and browse the image file you want <span style="font-size: 13px;">(recommended size: 1920x1080 or dividers of both width and height)</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/create/3.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Click on <i>Add Modpack</i> to save your new modpack</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/create/4.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col card" style="padding: 0px; color: black !important;">
                <div class="row">
                    <div class="col">
                        <h5 style="margin: 16px 0 8px 24px;">Modpack successfully added</h5>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/create/success.png" style="width: 100%; padding: 16px 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

	@include('partials/footer')
</body>
</html>