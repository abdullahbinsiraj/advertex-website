<header class="navbar-area">

    <div class="container">

        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="{{ url('/') }}">

                <span class="logo-white">Ad</span><span class="logo-blue">vertex</span>
                
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse justify-content-center"
                id="mainNavbar">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('ad-formats') }}">Ad Format</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('publishers') }}">Publishers</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> --}}

                </ul>

            </div>

            <div class="navbar-buttons d-none d-lg-flex">

                <a href="{{ url('/#contact') }}" class="btn-outline-nav">
                    Contact Us
                </a>

                <a href="#" class="btn-primary-nav">
                    Sign Up
                </a>

            </div>

        </nav>

    </div>

</header>