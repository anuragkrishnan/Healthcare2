<aside class="sidebar">

    <div class="logo-section">

        <div class="logo-icon">
            <img src="{{ asset('images/logo.png') }}" class="logo-img">
        </div>

        <div class="logo-text">
            <h4>MediCare+</h4>
            <small>Hospital System</small>
        </div>

    </div>

    <ul class="sidebar-menu">
        <li>
            <div class="search-box mb-4">
                <i class="bi bi-search"></i>
                <span><input type="text" id="sidebarSearchInput" class="form-control" placeholder="Search..."></span>
            </div>
        </li>

        <li>
            <a href="#" class="active load-page" data-url="{{ url('/dashboard/home') }}" data-title="Dashboard"
                data-icon="bi-grid">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#" class="load-page" data-url="{{ url('/patients') }}" data-title="Patients"
                data-icon="bi-people">
                <i class="bi bi-people"></i>
                <span class="menu-text">Patients</span>
            </a>
        </li>

        <li class="menu-item">

            <a href="#doctorMenu" class="d-flex align-items-center justify-content-between" data-bs-toggle="collapse"
                role="button" aria-expanded="false">

                <div class="d-flex align-items-center">
                    <i class="bi bi-person-vcard-fill"></i>
                    <span class="menu-text ms-2">Doctors</span>
                </div>

                <i class="bi bi-chevron-down submenu-arrow"></i>
            </a>

            <ul class="collapse submenu" id="doctorMenu">
                <li>
                    <a href="#" class="load-page" data-url="{{ url('/doctors') }}" data-title="Add Doctor"
                        data-icon="bi-person-plus">
                        <i class="bi bi-person-plus"></i>
                        Add Doctor

                    </a>
                </li>
                <li>
                    <a href="#" class="load-page" data-url="" data-title="Doctor List"
                        data-icon="bi-person-vcard-fill">
                        <i class="bi bi-person-vcard-fill"></i>
                        Doctor List

                    </a>
                </li>


            </ul>
        </li>
        <li>
            <a href="#" class="load-page" data-url="{{ url('/receptionists') }}" data-title="Receptionists"
                data-icon="bi-person-badge">
                <i class="bi bi-person-badge"></i>
                <span class="menu-text">Receptionists</span>
            </a>
        </li>
        <li>
            <a href="#" class="load-page" data-url="{{ route('common.alerts') }}"
                data-title="Alerts - Stay Updated" data-icon="bi-bell">
                <i class="bi bi-bell"></i>
                <span class="menu-text">Sweet Alerts</span>
            </a>
        </li>
        <li>
            <a href="#" class="load-page" data-url="{{ route('common.theme') }}" data-title="Theme Options"
                data-icon="bi-gear">
                <i class="bi bi-gear"></i>
                <span class="menu-text">Theme Options</span>
            </a>
        </li>


    </ul>

</aside>
