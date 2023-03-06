<div class="col-md-2 border-end bg-white p-3">
<nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <h4>Admin Dashboard</h4>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard/requests/sea') ? 'active' : '' }}" href="/dashboard/requests/sea">
                <i class="bi bi-card-checklist me-2"></i>
                Sea Shipments
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard/requests/air') ? 'active' : '' }}" href="/dashboard/requests/air">
                <i class="bi bi-card-checklist me-2"></i>
                Air Shipments
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard/requests/ground') ? 'active' : '' }} disabled" href="/dashboard/requests/ground">
                <i class="bi bi-card-checklist me-2"></i>
                Ground Shipments
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard/orders') ? 'active' : '' }}" href="/dashboard/orders">
                <i class="bi bi-tags me-2"></i>
                Ordered Shipments
            </a>
        </li>
    </ul>
</div>
</nav>
<hr class="col-12 my-0 d-block d-md-none">
