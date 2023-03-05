<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Bootstrap" width="100">
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-lg-0 mb-2">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="#">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->is('shipment') ? 'active' : '' }}" href="/shipment">My Shipments</a></li>
                        <li><a class="dropdown-item {{ request()->is('request') ? 'active' : '' }}" href="#">Shipment Requests</a></li>
                        <li><a class="dropdown-item {{ request()->is('order') ? 'active' : '' }}" href="/order">Shipment Orders</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        Store
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->is('store') ? 'active' : '' }}" href="/store">Browse Shipments</a></li>
                        <li><a class="dropdown-item {{-- {{ request()->is('request') ? 'active' : '' }} --}}" href="#">Request New Shipment</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @if (Auth::user()->role == 1)
                                <li>
                                    <a class="dropdown-item {{ request()->is('dashboard/requests') ? 'active' : '' }}" href="/dashboard/requests">Dashboard</a>
                                </li>
                            @endif
                            <li>
                                <form action="/user/logout" method="post">
                                    @csrf
                                    <input class="dropdown-item" type="submit" value="Logout">
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Login | Register
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ request()->is('login') ? 'active' : '' }}" href="/login">Login</a></li>
                            <li><a class="dropdown-item {{ request()->is('register') ? 'active' : '' }}" href="/register">Register</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
