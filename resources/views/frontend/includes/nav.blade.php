<section id="nav">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand logo" href="{{ route('homepage') }}">
                <img src="{{ asset('frontend') }}/images/logo_light.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <!-- orphan orphanages adoption -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Orphanages
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item text-dark" aria-current="page" href="{{ route('showOrphanage') }}">Orphanages</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-dark" aria-current="page" href="{{ route('showOrphan') }}">Orphans</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-dark" aria-current="page" href="{{ route('showAdpt') }}">Adoption</a>
                        </li>
                        @if(Auth::user())
                        <li>
                            <a class="dropdown-item text-dark" aria-current="page" href="{{ Route('manageMyRequests') }}">My Adoption Requests</a>
                        </li>
                        @endif
                    </ul>
                </li>
                <!-- orphan orphanages adoption -->
                
                @if(Auth::user())
                    @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="{{ Route('dashboard') }}">Admin Panel</a>
                        </li>
                    @endif
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-dark" href="{{ route('showAch') }}">Achievement</a></li>
                        <li><a class="dropdown-item text-dark" href="{{ route('showFac') }}">Facilities</a></li>
                        <li><a class="dropdown-item text-dark" href="{{ route('showAbout') }}">About us</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('showCntrbt') }}">Contribute</a>
                </li>
                @if(Auth::user())
                <li class="nav-item">
                <a class="nav-link text-light" href="{{ Route('logout') }}">Logout</a>
                </li>
                @else
                <li class="nav-item">
                <a class="nav-link text-light" href="{{ Route('login') }}">Login</a>
                </li>
                @endif
                
            </ul>
            </div>
        </div>
    </nav>
</section>