@extends('layouts.app')

@section('title','404 - Page Not Found')

@section('content')

<!--======================================================
                    ERROR 404
=======================================================-->

<section class="err404-page">

    <div class="container">

        <div class="err404-wrapper">

            <!-- LEFT -->

            <div class="err404-left">

                <span class="err404-badge">

                    ERROR 404

                </span>

                <h1>

                    Oops! <br>

                    Page Not Found

                </h1>

                <p>

                    The page you're trying to access doesn't exist,
                    may have been moved, or the URL entered is incorrect.
                    Let's get you back to the right place.

                </p>

                <div class="err404-buttons">

                    <a href="{{ url('/') }}" class="err404-btn-primary">

                        Go To Homepage

                        <i class="bi bi-arrow-right"></i>

                    </a>

                    <a href="{{ url('/contact') }}" class="err404-btn-secondary">

                        Contact Support

                    </a>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="err404-right">

                <div class="err404-glow"></div>

                <div class="err404-number">

                    404

                </div>

                <div class="err404-status-card">

                    <div class="err404-status-icon">

                        <i class="bi bi-exclamation-triangle-fill"></i>

                    </div>

                    <h4>

                        Broken Link Detected

                    </h4>

                    <p>

                        Don't worry. We'll help you find
                        the correct destination.

                    </p>

                </div>
                                <!-- Floating Cards -->

                <div class="err404-floating err404-float-one">

                    <i class="bi bi-house-door-fill"></i>

                    <span>

                        Home Available

                    </span>

                </div>

                <div class="err404-floating err404-float-two">

                    <i class="bi bi-headset"></i>

                    <span>

                        24/7 Support

                    </span>

                </div>

                <div class="err404-floating err404-float-three">

                    <i class="bi bi-shield-check"></i>

                    <span>

                        Secure Navigation

                    </span>

                </div>

            </div>

        </div>

    </div>

    <!-- Background Effects -->

    <div class="err404-bg err404-bg-1"></div>

    <div class="err404-bg err404-bg-2"></div>

    <div class="err404-bg err404-bg-3"></div>

</section>

@endsection