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
                    <a class="nav-link active" href="/" aria-current="page">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        PROFILE
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/shipment">MY SHIPMENTS</a></li>
                        <li><a class="dropdown-item" href="#">SHIPMENT REQUESTS</a></li>
                        <li><a class="dropdown-item" href="/order">ORDER HISTORY</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        STORE
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/store">BROWSE SHIPMENTS</a></li>
                        <li><a class="dropdown-item" href="#">REQUEST NEW SHIPMENT</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <form action="/user/logout" method="post">
                                    @csrf
                                    <input class="dropdown-item" type="submit" value="LOGOUT">
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            LOGIN | REGISTER
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/login">LOGIN</a></li>
                            <li><a class="dropdown-item" href="/register">REGISTER</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
