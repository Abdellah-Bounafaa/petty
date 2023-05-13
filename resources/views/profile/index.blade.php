@include('partials._header')
<div class="wrap">
    <x-hero />
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="row">
                <x-profile.profile-infos :user_profile="$user_profile" />
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#timeline"
                                            role="tab">Donations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#setting"
                                            role="tab">Settings</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <x-profile.profile-donations :user_profile="$user_profile" />
                                    <x-profile.profile-blogs :user_profile="$user_profile" />
                                    <x-profile.profile-settings />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('partials._footer')
