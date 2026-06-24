<header class="top-header">

    <div class="row align-items-center">

        <div class="col-md-6">
            <!--div class="page-title-badge" id="pageTitleBadge">
                <span class="page-title-badge-icon">
                    <i class="bi bi-heart-pulse"></i>
                </span>
                <span class="page-title-badge-text" id="pageTitleBadgeText">We're here for your health</span>
            </div-->
        </div>

        <div class="col-md-6">

            <div class="header-right">

                <button class="icon-btn">
                    <i class="bi bi-bell"></i>
                </button>

                <div class="dropdown-info dropdown" id="language-menu-toggle">

                    <button type="button" class="lang-btn dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false" id="lang-btn">
                        <!--i class="bi bi-globe2"></i--> EN

                    </button>

                    <ul class="dropdown-menu dropdown-menu-dark" id="lang-dropdown"
                        aria-labelledby="language-menu-toggle">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">العربية</a></li>
                    </ul>
                </div>

                <div class="dropdown-info dropdown" id="user-menu-toggle">

                    <button type="button" class="user-info-toggle dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="background:none;border:none;display:flex;align-items:center;gap:8px;" id="user-chevron">
                        <img src="{{ asset('images/user-avatar.jpg') }}" class="user-img">
                        <div class="user-details">
                            <div class="user-name">Dr. Anurag</div>
                            <div class="user-role">Administrator</div>
                        </div>
                    </button>

                    <!-- User dropdown -->
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="user-menu-toggle">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> My Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}" class="logout-item">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</header>
