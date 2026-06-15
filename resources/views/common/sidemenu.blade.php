<div class="sidebar">

    <div class="logo-section">

        <div class="logo-icon">
            <i class="bi bi-hospital"></i>
        </div>

        <div>
            <h4>MediCare+</h4>
            <small>Hospital System</small>
        </div>

    </div>

    <ul class="sidebar-menu">

        <li>
            <a href="#" class="active load-page" data-url="{{ url('/dashboard/home') }}">
                <i class="bi bi-grid"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="#" class="load-page" data-url="{{ url('/patients') }}">
                <i class="bi bi-people"></i>
                Patients
            </a>
        </li>

        <li>
            <a href="#" class="load-page" data-url="{{ url('/doctors') }}">
                <i class="bi bi-person-vcard-fill"></i>
                Doctors
            </a>
        </li>
        <li>
            <a href="#" class="load-page" data-url="{{ url('/receptionists') }}">
                <i class="bi bi-person-badge"></i>
                Receptionists
            </a>
        </li>



    </ul>

</div>
