<!DOCTYPE html>
<html>
<head>
	<title>PUMM - Import/export modpacks - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')
    @include('partials/float')

    <h1 style="margin-top: 55px;">PES Ultimate Mod Manager Documentation</h1>
    <h2 class="pumm"><a href="#import" class="pumm-lnk">Import</a> and <a href="#export" class="pumm-lnk">Export</a> modpacks</h2>

    <div class="container" style="margin-bottom: 100px; color: white;">

        <div class="row">
            <div class="col" style="text-align: center; padding-bottom: 16px;">
                <h5><u>Note to modpacks' creators:</u> to share your modpacks, zip required files like the example below as convention.</h5>
                <p>To install modpacks just extract CPKs inside PES <i>download</i> folder, copy thumbnail to <i>thumbnails</i> folder where your PUMM executable is and import modpack as instructed <a href="#import">below</a>.</p>

                <img src="{{ URL::to('/') }}/img/pumm/note.png" style="max-width: 100%;">
            </div>
        </div>

        <div class="row" id="export">
            <div class="col">
                <h2 class="pumm" style="padding-top: 64px; margin-bottom: -10px;">Export</h2>
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
                        <p>Navigate to Library page by clicking on <i>Library</i> in Page Navigator</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/export/1.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Choose the modpack you want and click on <i>Set as Active</i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/export/2.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Click on <i>Export Modpack</i> and save the XLS exported file anywhere you want</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/export/3.1.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/export/3.2.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col card" style="padding: 0px; color: black !important;">
                <div class="row">
                    <div class="col">
                        <h5 style="margin: 16px 0 8px 24px;">Modpack successfully exported</h5>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/export/success.png" style="width: 100%; padding: 16px 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="import">
            <div class="col">
                <h2 class="pumm" style="padding-top: 64px; margin-bottom: -10px;">Import</h2>
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
                        <p>Navigate to Library page by clicking on <i>Library</i> in Page Navigator</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/import/1.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Click on <i>Import Modpack</i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/import/2.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Browse the XLS modpack file you wish to import</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/import/3.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col card" style="padding: 0px; color: black !important;">
                <div class="row">
                    <div class="col">
                        <h5 style="margin: 16px 0 8px 24px;">Modpack successfully imported</h5>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/import/success.png" style="width: 100%; padding: 16px 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

	@include('partials/footer')
</body>
</html>