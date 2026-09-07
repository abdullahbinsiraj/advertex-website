<section id="contact" class="contact-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <span class="contact-badge">

                    <i class="bi bi-envelope-paper-fill"></i>

                    GET IN TOUCH

                </span>

                <h2 class="contact-title">

                    Let's Build Your
                    <span>Revenue Growth Strategy</span>

                </h2>

                <p class="contact-description">

                    Whether you're looking to optimize your ad revenue,
                    implement Header Bidding, or scale with Google Ad Manager,
                    our experts are here to help.

                </p>

            </div>

        </div>

        <div class="row mt-5 g-5 align-items-center">

            <!-- LEFT -->

            <div class="col-lg-5" data-aos="zoom-in">

                <div class="contact-info-card">

                    <div class="contact-info-icon">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>

                    <div>

                        <h5>Office Address</h5>

                        <p>
                            5th Floor, Baku White City Business Centre, 8 November Avenue, Baku AZ1025, Azerbaijan
                        </p>

                    </div>

                </div>

                <div class="contact-info-card">

                    <div class="contact-info-icon">

                        <i class="bi bi-envelope-fill"></i>

                    </div>

                    <div>

                        <h5>Email Address</h5>

                        <p class="contact-email-list">
                            <a href="mailto:info@advertex360.com">info@advertex360.com</a><br>
                            <a href="mailto:contact@advertex360.com">contact@advertex360.com</a><br>
                            <a href="mailto:finance@advertex360.com">finance@advertex360.com</a>
                        </p>

                    </div>

                </div>

                <div class="contact-info-card">

                    <div class="contact-info-icon">

                        <i class="bi bi-telephone-fill"></i>

                    </div>

                    <div>

                        <h5>Phone Number</h5>

                        <p>
                            <a href="tel:+994554560233">+994 55 456 0233</a>
                        </p>

                    </div>

                </div>

                <div class="contact-info-card">

                    <div class="contact-info-icon">

                        <i class="bi bi-clock-fill"></i>

                    </div>

                    <div>

                        <h5>Business Hours</h5>

                        <p>

                            Monday - Friday

                            <br>

                            9:00 AM - 5:00 PM

                        </p>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-lg-7" data-aos="zoom-in">

                <div class="contact-form-wrapper">
                        @if(session('success'))

<div class="alert alert-success alert-dismissible fade show mb-4" role="alert">

    <i class="bi bi-check-circle-fill me-2"></i>

    {{ session('success') }}

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
    </button>

</div>

@endif
@if ($errors->any())

<div class="alert alert-danger mb-4">

    <ul class="mb-0">

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif
                    <form action="{{ route('contact.store') }}"
      method="POST"
      autocomplete="off"
      novalidate>

    @csrf

                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <input
                                type="text"
                                name="name"
                                class="form-control contact-input"
                                placeholder="Full Name"
                                value="{{ old('name') }}" required maxlength="100">
                            </div>

                            <div class="col-md-6 mb-4">

                                <input
                                type="email"
                                name="email"
                                class="form-control contact-input"
                                placeholder="Business Email"
                                value="{{ old('email') }}" required maxlength="150">

                            </div>

                        </div>

                        <div class="mb-4">

                            <input
                            type="text"
                            name="website"
                            class="form-control contact-input"
                            placeholder="Website URL"
                            value="{{ old('website') }}" maxlength="255">

                        </div>

                        <div class="mb-4">

                            <textarea
                        rows="6"
                        name="message"
                        class="form-control contact-input"
                        placeholder="Tell us about your project..." required maxlength="2000">{{ old('message') }}</textarea>
                        </div>

                        <button
                            type="submit"
                            class="contact-btn">

                            Send Message

                            <i class="bi bi-arrow-right-short"></i>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
@if(session('success') || $errors->any())
<script>
window.addEventListener('load', function () {
    const contact = document.getElementById('contact');
    if (contact) {
        contact.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
});
</script>
@endif