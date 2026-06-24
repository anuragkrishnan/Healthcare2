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
            <div class="search-box">
                <i class="bi bi-search"></i>
                <span><input type="text" id="sidebarSearchInput" class="form-control" placeholder="Search..."></span>
            </div>
        </li>

        <li>
            <a href="#" class="active load-page" data-url="{{ url('/dashboard/home') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#" class="load-page" data-url="{{ url('/patients') }}">
                <i class="bi bi-people"></i>
                <span class="menu-text">Patients</span>
            </a>
        </li>

        <li>
            <a href="#" class="load-page" data-url="{{ url('/doctors') }}">
                <i class="bi bi-person-vcard-fill"></i>
                <span class="menu-text">Doctors</span>
            </a>
        </li>
        <li>
            <a href="#" class="load-page" data-url="{{ url('/receptionists') }}">
                <i class="bi bi-person-badge"></i>
                <span class="menu-text">Receptionists</span>
            </a>
        </li>
        <li>
            <a href="#" class="load-page" data-url="{{ route('common.alerts') }}">
                <i class="bi bi-bell"></i>
                <span class="menu-text">Sweet Alerts</span>
            </a>
        </li>


    </ul>

</aside>
