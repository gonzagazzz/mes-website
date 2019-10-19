<!DOCTYPE html>
<html>
<head>
	<title>PUMM - Associate mods with modpacks - MES Modder's Repository</title>
	@include('partials/imports')
</head>
<body>
	@include('partials/navbar')
    @include('partials/float')

    <h1 style="margin-top: 55px;">PES Ultimate Mod Manager Documentation</h1>
    <h2 class="pumm">Associate mods with modpacks</h2>

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
                        <img src="{{ URL::to('/') }}/img/pumm/associate/1.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <img src="{{ URL::to('/') }}/img/pumm/associate/2.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Navigate to Mods page where you will see a list of every CPK inside download folder and an empty list</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/associate/3.png" style="width: 100%; padding: 0 32px 32px 32px;">
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
                        <p>Check the mods you wish to add to your modpack and they will be added by that order to the previously empty list (be aware that DLC CPKs will always be arranged to come first in the list)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/associate/4.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col card" style="padding: 0px; color: black !important;">
                <div class="row">
                    <div class="col">
                        <h5 style="margin: 16px 0 8px 24px;">Step 5</h5>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col" style="padding: 16px 64px 8px 64px;">
                        <p>When you are happy with the set of mods you chose, click "Save Modpack" to keep the changes associated with that modpack</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/associate/5.png" style="width: 100%; padding: 0 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col card" style="padding: 0px; color: black !important;">
                <div class="row">
                    <div class="col">
                        <h5 style="margin: 16px 0 8px 24px;">Mods successfully associated with modpack</h5>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col">
                        <img src="{{ URL::to('/') }}/img/pumm/associate/success.png" style="width: 100%; padding: 16px 32px 32px 32px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

	@include('partials/footer')
</body>
</html>