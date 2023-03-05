<div class="col-md-2 border-end bg-white p-3">
    <ul class="navbar-nav">
        <li class="nav-item">
            <h4>Admin Dashboard</h4>
        </li>
        <li class="nav-item">
            <a class="nav-link link-secondary {{ request()->is('dashboard/requests') ? 'active' : '' }}" href="/dashboard/requests">
                <i class="bi bi-card-checklist me-2"></i>
                Requested Shipments
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link link-secondary {{ request()->is('dashboard/orders') ? 'active' : '' }}" href="/dashboard/orders">
                <i class="bi bi-tags me-2"></i>
                Ordered Shipments
            </a>
        </li>
    </ul>
</div>
<hr class="col-12 my-0 d-block d-md-none">
