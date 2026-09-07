<footer class="footer-section">

    <div class="container">

        <div class="row gy-5">

            <!-- Company -->

            <div class="col-lg-4">

                <a href="{{ url('/') }}" class="footer-logo">

                    <img src="{{ asset('images/logo.png') }}" alt="Advertex">

                </a>

                <p class="footer-about">

                    Advertex delivers enterprise-grade Advertex solutions
                    that help publishers maximize revenue through
                    Google Ad Manager, Header Bidding, AdX Optimization,
                    Video Monetization and advanced analytics.

                </p>

                <div class="footer-social">

                    <a href="https://www.linkedin.com/company/advertexco/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="LinkedIn">

                        <i class="bi bi-linkedin"></i>

                    </a>

                    <a href="https://teams.live.com/l/invite/FEAhakXgKmK3_7_ng?v=g1"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="WeChat">

                        <i class="bi bi-wechat"></i>

                    </a>

                    <a href="https://wa.me/994554560233"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="WhatsApp">

                        <i class="bi bi-whatsapp"></i>

                    </a>

                </div>

            </div>

            <!-- Quick Links -->

            <div class="col-lg-2 col-md-6">

                <h5 class="footer-heading">

                    Quick Links

                </h5>

                <ul class="footer-links">

                    <li><a href="{{ url('/') }}">Home</a></li>

                    <li><a href="{{ route('about') }}">About</a></li>

                    <li><a href="{{ route('services') }}">Services</a></li>

                    <li><a href="{{ route('publishers') }}">Publishers</a></li>

                </ul>

            </div>

            <!-- Solutions -->

            <div class="col-lg-3 col-md-6">

                <h5 class="footer-heading">

                    Solutions

                </h5>

                <ul class="footer-links">

                    <li><a href="{{ route('ad-formats') }}">Ad Formats</a></li>

                    <li><a href="{{ route('ad-formats') }}">Google Ad Manager</a></li>

                    <li><a href="{{ route('ad-formats') }}">Header Bidding</a></li>

                    <li><a href="{{ route('ad-formats') }}">AdX Optimization</a></li>

                    <li><a href="{{ route('ad-formats') }}">Video Monetization</a></li>

                </ul>

            </div>

            <!-- Contact -->

            <div class="col-lg-3">

                <h5 class="footer-heading">

                    Contact

                </h5>

                <ul class="footer-contact">

                    <li>

                        <i class="bi bi-envelope-fill"></i>

                        <a href="mailto:info@advertex360.com">info@advertex360.com</a>

                    </li>

                    <li>

                        <i class="bi bi-telephone-fill"></i>

                        <a href="tel:+994554560233">+994554560233</a>

                    </li>

                    <li>

                        <i class="bi bi-geo-alt-fill"></i>

                        <span>
                            5th Floor, Baku White City Business Centre<br>
                            8 November Avenue, Baku AZ1025, Azerbaijan
                        </span>

                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="footer-copy">

                © 2026 Advertex. All Rights Reserved.

            </div>

            <div class="footer-policy">

                <a href="{{ route('privacy-policy') }}">
                    Privacy Policy
                </a>

                <a href="{{ route('terms') }}">
                    Terms & Conditions
                </a>

                <a href="{{ route('cookies') }}">
                    Cookie Policy
                </a>

            </div>

        </div>

    </div>

</footer>
