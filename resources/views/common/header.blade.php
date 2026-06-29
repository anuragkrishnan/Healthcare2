<header class="top-header">

    <div class="row align-items-center">

        <div class="col-md-8 d-flex">
            <!--div class="page-title-badge" id="pageTitleBadge">
                <span class="page-title-badge-icon">
                    <i class="bi bi-heart-pulse"></i>
                </span>
                <span class="page-title-badge-text" id="pageTitleBadgeText"> Dashboard </span>
            </div-->
            <div class="title-section" id="pageTitleSection">
                <div class="title-section-icon">
                    <i class="bi bi-person-vcard-fill"></i>
                </div>
                <div>
                    <p class="title-section-title" id="titleSectionText">Dashboard</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0" id="page-breadcrumb">
                            <li class="breadcrumb-item">Dashboard</li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="header-right">

                <div class="" id="user-menu-toggle">

                    <button type="button" class="user-info-toggle dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="background:none;border:none;display:flex;align-items:center;gap:8px;">
                        <img src="{{ asset('images/user-avatar.jpg') }}" class="user-img">
                        <div class="user-details">
                            <div class="user-name">Dr. Anurag</div>
                            <div class="user-role">Administrator</div>
                        </div>
                    </button>

                    <!-- User dropdown -->
                    <!--ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="user-menu-toggle">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> My Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}" class="logout-item">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    </ul-->

                </div>
                <div class="d-flex align-items-center gap-2">
                    <button class="drawer-toggle-btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#appDrawer" aria-controls="appDrawer" aria-label="Open settings drawer">
                        <i class="bi bi-list" style="font-size:1.4rem;"></i>
                    </button>
                </div>

            </div>
            <!-- ============ APP DRAWER (Bootstrap 5 Offcanvas) ============ -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="appDrawer" aria-labelledby="appDrawerLabel">

                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="appDrawerLabel">Settings</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <!-- Language -->
                    <div class="drawer-section-label">Language</div>
                    <div class="px-3 pb-2">
                        <div class="mode-toggle" role="group" aria-label="Language">
                            <button type="button" class="mode-btn lang-btn active" data-lang="en"><i
                                    class="bi bi-translate"></i> En</button>
                            <button type="button" class="mode-btn lang-btn" data-lang="ar"><i
                                    class="bi bi-translate"></i> العربية</button>
                        </div>
                    </div>

                    <hr class="drawer-divider">

                    <!-- Theme Settings -->
                    <div class="drawer-section-label">Appearance - Theme Color Options</div>
                    <div class="drawer-row">
                        <div class="row-left"> Header </div>
                        <div class="row-right">
                            <input type="color" id="headerColor" value="#000000"
                                style="border:rgba(255,255,255,.08); cursor:pointer;">
                        </div>
                        <div class="row-left"> Sidebar </div>
                        <div class="row-right">
                            <input type="color" id="sidebarColor" value="#000000"
                                style=" border:rgba(255,255,255,.08); cursor:pointer;">
                        </div>
                        <div class="row-left"> Footer </div>
                        <div class="row-right">
                            <input type="color" id="footerColor" value="#000000"
                                style="  border:rgba(255,255,255,.08); cursor:pointer;">
                        </div>
                    </div>

                    <hr class="drawer-divider">
                    <div class="drawer-section-label">Font Color & Size Options</div>
                    <div class="drawer-row">
                        <div class="row-left"> Color </div>
                        <div class="row-right">
                            <input type="color" id="fontColor" value="#eeeeee"
                                style="  border:rgba(255,255,255,.08); cursor:pointer;">
                        </div>
                    </div>
                    <div class="drawer-row">
                        <div class="row-left"> Size </div>
                        <div class="row-right">
                            <input type="range" id="fontSizeRange" min="12" max="24" value="16"
                                step="1" style="width:100%; cursor:pointer;">
                        </div>
                    </div>
                    <hr class="drawer-divider">
                </div>

                <!-- Logout -->
                <div class="drawer-footer">
                    <a href="{{ route('logout') }}" class="btn-logout">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </div>
            </div>
        </div>

    </div>

</header>
