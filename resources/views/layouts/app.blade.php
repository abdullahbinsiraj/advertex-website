<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Advertex')</title>
    {{-- <title>@yield('title', 'Advertex | Digital Solutions for Publisher Growth')</title> --}}

<meta name="description" content="@yield('meta_description','Advertex provides Google AdX Approval, Google Ad Manager setup, Header Bidding, inventory optimization and digital monetization solutions to maximize publisher revenue.')">

<meta name="keywords" content="@yield('meta_keywords','Google AdX Approval, Google Ad Manager, Header Bidding, AdSense Approved Website, Inventory Management, Publisher Monetization, Digital Solutions, Advertex')">

<meta name="author" content="Advertex">

<meta name="robots" content="index, follow">

<meta name="language" content="English">

<meta name="revisit-after" content="7 days">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<meta property="og:type" content="website">

<meta property="og:site_name" content="Advertex">

<meta property="og:title" content="@yield('og_title','Advertex | Digital Solutions')">

<meta property="og:description" content="@yield('og_description','Helping publishers maximize revenue through Google AdX, Ad Manager and premium monetization strategies.')">

<meta property="og:image" content="{{ asset('images/og-image.png') }}">

<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title" content="@yield('twitter_title','Advertex')">

<meta name="twitter:description" content="@yield('twitter_description','Digital Monetization Experts')">

<meta name="twitter:image" content="{{ asset('images/og-image.png') }}">





<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    @vite(['resources/css/app.css','resources/css/services.css','resources/css/about.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


{{-- <script type="application/ld+json">
{!! json_encode([
    "@context" => "https://schema.org",
    "@type" => "Organization",
    "name" => "Advertex",
    "url" => "https://yourdomain.com",
    "logo" => "https://yourdomain.com/images/logo.png",
    "description" => "Advertex provides Digital Solutions including Google AdX Approval, Google Ad Manager Setup, Header Bidding, Inventory Management and Publisher Revenue Optimization.",
    "email" => "contact@advertex.com",
    "sameAs" => []
], JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) !!}
</script> --}}

</head>

<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @include('includes.popup')

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init({
    duration: 900,
    easing: 'ease-in-out',
    once: true,
    offset: 120
});
</script>
</body>
</html>