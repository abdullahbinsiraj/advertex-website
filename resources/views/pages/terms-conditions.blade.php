@extends('layouts.app')

@section('title', 'Terms & Conditions')

@section('content')

<section class="legal-hero-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9 text-center">

                <span class="legal-badge">

                    <i class="bi bi-file-earmark-text-fill"></i>

                    TERMS & CONDITIONS

                </span>

                <h1 class="legal-title">

                    Terms & Conditions
                    <span>For Using Advertex Services</span>

                </h1>

                <p class="legal-description">

                    Please read these Terms & Conditions carefully before
                    using Advertex. By accessing our website and services,
                    you agree to comply with the following terms.

                </p>

                <div class="legal-meta">

                    <a href="{{ url('/') }}">

                        Home

                    </a>

                    <span>/</span>

                    <span>

                        Terms & Conditions

                    </span>

                </div>

                <div class="legal-date">

                    <i class="bi bi-calendar-event-fill"></i>

                    Last Updated:
                    July 20, 2026

                </div>

            </div>

        </div>

    </div>

</section>

<section class="legal-content-section">

    <div class="container">

        <div class="legal-card" data-aos="flip-up">

            <h3>1. Acceptance of Terms</h3>

            <p>

                By accessing or using Advertex services, you agree to be bound
                by these Terms & Conditions. If you do not agree with any part
                of these terms, please discontinue using our website and services.

            </p>

        </div>

        <div class="legal-card" data-aos="flip-up">

            <h3>2. Services</h3>

            <p>

                Advertex provides advertising technology solutions including
                Google Ad Manager support, Header Bidding, AdX optimization,
                premium ad formats and revenue optimization services.

            </p>

        </div>

        <div class="legal-card" data-aos="flip-up">

            <h3>3. User Responsibilities</h3>

            <p>

                Users are responsible for providing accurate information,
                maintaining account security and ensuring that all submitted
                content complies with applicable laws and platform policies.

            </p>

        </div>

        <div class="legal-card" data-aos="flip-up">

            <h3>4. Payments & Billing</h3>

            <p>

                Where applicable, payments for our services must be completed
                according to the agreed quotation or service contract. Late
                payments may affect service delivery.

            </p>

        </div>

        <div class="legal-card" data-aos="flip-up">

            <h3>5. Intellectual Property</h3>

            <p>

                All website content, branding, graphics, software and
                documentation remain the intellectual property of Advertex unless
                otherwise stated.

            </p>

        </div>

        <div class="legal-card" data-aos="flip-up">

            <h3>6. Limitation of Liability</h3>

            <p>

                Advertex shall not be held responsible for indirect, incidental
                or consequential damages resulting from the use of our services,
                third-party platforms or external integrations.

            </p>

        </div>

        <div class="legal-card" data-aos="flip-up">

            <h3>7. Termination</h3>

            <p>

                We reserve the right to suspend or terminate access to our
                services if these Terms & Conditions are violated or unlawful
                activity is detected.

            </p>

        </div>

        <div class="legal-card" data-aos="flip-up">

            <h3>8. Governing Law</h3>

            <p>

                These Terms & Conditions shall be governed by the applicable
                laws and regulations of the jurisdiction in which Advertex
                operates.

            </p>

        </div>

        <div class="legal-card" data-aos="flip-up">

            <h3>9. Contact Information</h3>

            <p>

                If you have any questions regarding these Terms & Conditions,
                please contact our support team through the Contact page or via
                our official business email.

            </p>

        </div>

    </div>

</section>

@endsection