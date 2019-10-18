<!DOCTYPE html>
<html>
<head>
	<title>PUMM - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')
    @include('partials/float')

    <h1 style="margin-top: 55px;">PES Ultimate Mod Manager - Guide</h1>
    <h2 class="pumm">Generate DpFileList.bin</h2>

    <div class="container" style="margin-bottom: 100px; color: white;">

        <div class="row">
            <div class="col" style="text-align: center; padding-bottom: 16px;">
                <h5>You can generate the DpFileList.bin <a href="#with" class="pumm-lnk">from a modpack</a> you have created or just <a href="#without" class="pumm-lnk">from mods selection</a>.</h5>
            </div>
        </div>

        <div class="row" id="with">
            <div class="col">
                <h2 class="pumm" style="padding-top: 64px; margin-bottom: -10px;">From modpack</h2>
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
                        <img src="{{ URL::to('/') }}/img/pumm/generate/with/1.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <img src="{{ URL::to('/') }}/img/pumm/generate/with/2.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Either navigate to Home or Mods page</p>
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
                        <p>Click on <i>Generate DpFileList.bin</i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/generate/with/4.1.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/generate/with/4.2.png" style="width: 100%; padding: 16px 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="without">
            <div class="col">
                <h2 class="pumm" style="padding-top: 64px; margin-bottom: -10px;">From mods selection</h2>
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
                        <p>Navigate to Mods page by clicking on <i>Mods</i> in Page Navigator and you will see a list of every CPK inside download folder and an empty list</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/generate/without/1.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Check the mods you wish to generate DpFileList.bin from and they will be added by that order to the previously empty list (be aware that DLC CPKs will always be arranged to come first in the list)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/generate/without/2.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Click on <i>Generate DpFileList.bin</i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/generate/without/3.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

	@include('partials/footer')
</body>
</html>