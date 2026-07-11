<aside class="sidebar">

    <div class="logo-section">

        <div class="logo-icon">
            <img src="{{ asset('images/logo.png') }}" class="logo-img">
        </div>

        <div class="logo-text">
            <h4>MediCare</h4>
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
                data-icon="bi-grid" data-breadcrumb="Dashboard">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>


        <li class="menu-item">

            <a href="#patientMenu" class="d-flex align-items-center justify-content-between" data-bs-toggle="collapse"
                role="button" aria-expanded="false">

                <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <span class="menu-text ms-2">Patients</span>
                </div>

                <i class="bi bi-chevron-down submenu-arrow"></i>
            </a>

            <ul class="collapse submenu" id="patientMenu">
                <li>
                    <a href="#" class="load-page" data-url="{{ url('/patients/add') }}"
                        data-title="Patient Registration" data-icon="bi-person-add"
                        data-breadcrumb="Dashboard|Patients|Patient Registration">
                        <i class="bi bi-person-add"></i>
                        Patient Registration

                    </a>
                </li>
                <li>
                    <a href="#" class="load-page" data-url="{{ url('/patients') }}" data-title="Patient List"
                        data-icon="bi-person-fill" data-breadcrumb="Dashboard|Patients|Patient List">
                        <i class="bi bi-person-fill"></i>
                        Patient List

                    </a>
                </li>
                <!-- Search feature -->
                <li>
                    <a href="#" class="load-page" data-url="{{ url('/patients/search') }}"
                        data-title="Patient Search" data-icon="bi-person-bounding-box"
                        data-breadcrumb="Dashboard|Patients|Patient Search">
                        <i class="bi bi-person-bounding-box"></i>
                        Patient Search

                    </a>
                </li>


            </ul>
        </li>

        <li class="menu-item">

            <a href="#doctorMenu" class="d-flex align-items-center justify-content-between" data-bs-toggle="collapse"
                role="button" aria-expanded="false">

                <div class="d-flex align-items-center">
                    <i class="bi bi-hdd-stack"></i>
                    <span class="menu-text ms-2">Master</span>
                </div>

                <i class="bi bi-chevron-down submenu-arrow"></i>
            </a>

            <ul class="collapse submenu" id="doctorMenu">
                <li>
                    <a href="#" class="load-page" data-url="{{ url('/consultants') }}"
                        data-title="List Consultants" data-icon="bi-person-plus"
                        data-breadcrumb="Dashboard|Consultants|List">
                        <i class="bi bi-person-plus"></i>
                        Consultants

                    </a>
                </li>





                <li>
                    <a href="#" class="load-page" data-url="{{ route('master.specialities.index') }}"
                        data-title="Specialities List" data-icon="bi-person-vcard-fill"
                        data-breadcrumb="Dashboard|Specialities|List Specialities">
                        <i class="bi bi-heart-pulse"></i>
                        Speciality

                    </a>
                </li>
                <li class="menu-item">

                    <a href="#customersMenu" class="d-flex align-items-center justify-content-between"
                        data-bs-toggle="collapse" role="button" aria-expanded="false">

                        <div class="d-flex align-items-center">
                            <i class="bi bi-people-fill"></i>
                            <span class="menu-text ms-2">Customers</span>
                        </div>

                        <i class="bi bi-chevron-down submenu-arrow"></i>
                    </a>

                    <ul class="collapse submenu" id="customersMenu">
                        <li>
                            <a href="#" class="load-page" data-url="{{ url('/customers') }}"
                                data-title="Customer Master" data-icon="bi-people-fill"
                                data-breadcrumb="Dashboard|Customers|List Customers">
                                <i class="bi bi-people-fill"></i>
                                Customer

                            </a>
                        </li>
                        <li>
                            <a href="#" class="load-page" data-url="{{ url('/category') }}"
                                data-title="Customer Categories" data-icon="bi-person-fill"
                                data-breadcrumb="Dashboard|Customer Categories|List Categories">
                                <i class="bi bi-person-fill"></i>
                                Customer Category

                            </a>
                        </li>


                    </ul>
                </li>



                <li>
                    <a href="#" class="load-page" data-url="{{ url('/consultants/schedule') }}"
                        data-title="Consultant Schedule" data-icon="bi-calendar-week"
                        data-breadcrumb="Dashboard|Consultants|Consultant Schedule">
                        <i class="bi bi-calendar-week"></i>
                        Consultant Schedule

                    </a>
                </li>




            </ul>
        </li>



        <li>
            <a href="#" class="load-page" data-url="{{ url('/receptionists') }}" data-title="Receptionists"
                data-icon="bi-person-badge" data-breadcrumb="Dashboard|Receptionists">
                <i class="bi bi-person-badge"></i>
                <span class="menu-text">Sample</span>
            </a>
        </li>
        <li>
            <a href="#" class="load-page" data-url="{{ route('common.alerts') }}"
                data-title="Alerts - Stay Updated" data-icon="bi-bell" data-breadcrumb="Dashboard|Sweet Alerts">
                <i class="bi bi-bell"></i>
                <span class="menu-text">Sweet Alerts</span>
            </a>
        </li>


    </ul>

</aside>
