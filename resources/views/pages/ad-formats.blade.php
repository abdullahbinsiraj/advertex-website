@extends('layouts.app') @section('content')
<!--====================================
   AD FORMATS HERO V2
   =====================================-->
<section class="af-hero">
   <div class="container">
      <div class="row align-items-center af-hero-row">
         <!-- Left Content -->
         <div class="col-lg-6" data-aos="fade-right">
            <div class="af-hero-left">
               <span class="af-badge">
               <i class="bi bi-stars"></i> Enterprise Ad Solutions </span>
               <h1 class="af-title"> Premium Ad Formats <span>Built To Maximize Publisher Revenue</span>
               </h1>
               <p class="af-description"> Unlock enterprise-grade monetization with premium advertising formats designed to increase CPM, improve viewability, maximize engagement, and deliver sustainable revenue growth without compromising user experience. </p>
               <div class="af-button-group">
                  <a href="#af-formats" class="af-btn-primary"> Explore Formats <i class="bi bi-arrow-right"></i>
                  </a>
                  <a href="{{ url('/#contact') }}" class="af-btn-secondary"> Request Demo </a>
               </div>
               <div class="af-feature-list">
                  <div class="af-feature-item">
                     <i class="bi bi-check-circle-fill"></i> Higher CPM
                  </div>
                  <div class="af-feature-item">
                     <i class="bi bi-check-circle-fill"></i> Better Viewability
                  </div>
                  <div class="af-feature-item">
                     <i class="bi bi-check-circle-fill"></i> Premium Demand
                  </div>
               </div>
            </div>
         </div>
         <!-- Right Dashboard -->
         <div class="col-lg-6" data-aos="fade-left">
            <div class="af-dashboard">
               <div class="af-dashboard-top">
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
               <div class="af-dashboard-grid">
                  <div class="af-dashboard-card">
                     <i class="bi bi-image"></i>
                     <h5>In-Image Ads</h5>
                     <small>Higher CTR</small>
                  </div>
                  <div class="af-dashboard-card">
                     <i class="bi bi-play-circle"></i>
                     <h5>Video Ads</h5>
                     <small>Premium Demand</small>
                  </div>
                  <div class="af-dashboard-card">
                     <i class="bi bi-layout-text-sidebar"></i>
                     <h5>Anchor Ads</h5>
                     <small>Sticky Revenue</small>
                  </div>
                  <div class="af-dashboard-card">
                     <i class="bi bi-window-stack"></i>
                     <h5>Interstitial</h5>
                     <small>High CPM</small>
                  </div>
                  <div class="af-dashboard-card">
                     <i class="bi bi-badge-ad"></i>
                     <h5>Banner Ads</h5>
                     <small>Global Demand</small>
                  </div>
                  <div class="af-dashboard-card">
                     <i class="bi bi-arrows-fullscreen"></i>
                     <h5>Popup Ads</h5>
                     <small>Maximum Reach</small>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!--====================================
   ENTERPRISE SHOWCASE V5
   =====================================-->
<section class="af5-showcase">
   <div class="container">
   <!-- Heading -->
   <div class="af5-heading">
      <span class="af5-badge"> 
         <i class="bi bi-play-circle-fill"></i>&nbsp;LIVE AD PREVIEW </span>
      <h2> Experience Every Ad Format Live </h2>
      <p> Explore exactly how each advertising format appears on a publisher website before implementation. </p>
   </div>
   <!-- Tabs -->
   <div class="af5-tabs">
      <button class="af5-tab af5-active" id="af5-banner"> Banner </button>
      <button class="af5-tab" id="af5-video"> Video </button>
      <button class="af5-tab" id="af5-image"> In-Image </button>
      <button class="af5-tab" id="af5-anchor"> Anchor </button>
      <button class="af5-tab" id="af5-popup"> Popup </button>
      <button class="af5-tab" id="af5-interstitial"> Interstitial </button>
   </div>
   <!-- Main -->
   <div class="row align-items-center">
      <!-- LEFT -->
      <div class="col-lg-8">
         <div class="af5-browser">
            <div class="af5-browser-top">
               <span></span>
               <span></span>
               <span></span>
               <div class="af5-url"> publisher-demo.com </div>
            </div>
            <div class="af5-preview">
               <div class="af5-page">
                  <!-- Leaderboard -->
                  <div class="af5-leaderboard">
                     <span class="af5-ad-tag">AD</span>
                     <div class="af5-banner-content">
                        <h2>728 × 90</h2>
                        <h4>LEADERBOARD BANNER</h4>
                     </div>
                  </div>
                  <!-- Main Layout -->
                  <div class="af5-content">
                     <!-- Left Content -->
                     <div class="af5-main-content">
                        <div class="af5-feature">
                           <div class="af5-image"></div>
                           <div class="af5-text">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span class="short"></span>
                           </div>
                        </div>
                        <!-- Cards -->
                        <div class="af5-card-row">
                           <div class="af5-post">
                              <div class="thumb"></div>
                              <span></span>
                              <span></span>
                              <span class="short"></span>
                           </div>
                           <div class="af5-post">
                              <div class="thumb"></div>
                              <span></span>
                              <span></span>
                              <span class="short"></span>
                           </div>
                           <div class="af5-post">
                              <div class="thumb"></div>
                              <span></span>
                              <span></span>
                              <span class="short"></span>
                           </div>
                        </div>
                        <!-- Bottom Article -->
                        <div class="af5-bottom-lines">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                           <span class="short"></span>
                        </div>
                     </div>
                     <!-- Right Sidebar -->
                     <aside class="af5-sidebar">
                        <div class="af5-rectangle">
                           <span class="af5-ad-tag">AD</span>
                           <div>
                              <h3>300 × 250</h3>
                              <h5>MEDIUM RECTANGLE</h5>
                           </div>
                        </div>
                        <div class="af5-side-lines">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                        </div>
                     </aside>
                  </div>
                  <!-- Anchor -->
                  <div class="af5-anchor">
                     <span class="af5-ad-tag">AD</span>
                     <strong>320 × 50 ANCHOR AD</strong>
                  </div>
               </div>
               <!--====================================
                  VIDEO SCREEN
                  =====================================-->
               <div class="af5-screen af5-video-screen" style="display:none;">
                  <div class="af5-video-page">
                     <!-- Fake Website Header -->
                     <div class="af5-web-header">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="short"></span>
                     </div>
                     <!-- Top Content -->
                     <div class="af5-web-top">
                        <div class="af5-web-image"></div>
                        <div class="af5-web-text">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span class="short"></span>
                        </div>
                     </div>
                     <!--=========================
                        Embedded Video
                        ==========================-->
                     <div class="af5-video-wrapper">
                        <div class="af5-video-player">
                           <span class="af5-sponsored">
                           Sponsored
                           </span>
                           <button class="af5-skip-btn">
                           Skip Ad
                           </button>
                           <div class="af5-play-circle">
                              <i class="bi bi-play-fill"></i>
                           </div>
                           <h4>
                              Premium Video Advertisement
                           </h4>
                           {{-- 
                           <p>
                              Enterprise Video Monetization Experience
                           </p>
                           --}}
                           <!-- Controls -->
                           <div class="af5-video-controls">
                              <span class="af5-time">
                              01:15
                              </span>
                              <div class="af5-progress">
                                 <div class="af5-progress-fill"></div>
                              </div>
                              <div class="af5-video-icons">
                                 <span class="af5-hd">
                                 HD
                                 </span>
                                 <i class="bi bi-volume-up-fill"></i>
                                 <i class="bi bi-gear-fill"></i>
                                 <i class="bi bi-fullscreen"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Bottom Content -->
                     <div class="af5-web-bottom">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="short"></span>
                     </div>
                     <!-- News Cards -->
                     <div class="af5-video-cards">
                        <div class="af5-video-card">
                           <div class="thumb"></div>
                           <span></span>
                           <span></span>
                           <span class="short"></span>
                        </div>
                        <div class="af5-video-card">
                           <div class="thumb"></div>
                           <span></span>
                           <span></span>
                           <span class="short"></span>
                        </div>
                        <div class="af5-video-card">
                           <div class="thumb"></div>
                           <span></span>
                           <span></span>
                           <span class="short"></span>
                        </div>
                     </div>
                  </div>
               </div>
               
<div class="af5-screen af5ii-screen" style="display:none;">
   <div class="af5ii-browser">
      <!-- Website -->
      <div class="af5ii-page">
         <!-- Fake Navbar -->
         <div class="af5ii-navbar">
            <div class="af5ii-logo"></div>
            <div class="af5ii-menu">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div>
         </div>
         <!-- Hero -->
         <div class="af5ii-hero">
            <div class="af5ii-image">
               <div class="af5ii-image-content">
                  <span class="line w25"></span>
                  <span class="line w80"></span>
                  <span class="line w70"></span>
               </div>
               <!-- Hero Overlay -->
               <div class="af5ii-image-overlay"></div>
               <div class="af5ii-ad-card">
                  <span class="af5ii-sponsored">
                  Sponsored
                  </span>
                  <h3>
                     Premium Display Ad
                  </h3>
                  <p>
                     Increase your advertising revenue with
                     premium display campaigns.
                  </p>
                  <div class="af5ii-ad-size">
                     300 × 250 Display
                  </div>
                  <div class="af5ii-feature-list">
                     <div class="af5ii-feature">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>High Visibility</span>
                     </div>
                     <div class="af5ii-feature">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Premium Demand</span>
                     </div>
                  </div>
                  <a href="#" class="af5ii-btn">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                  </a>
               </div>
            </div>
            <!-- /.af5ii-image -->
            <!-- Floating Google In-Image Ad -->
         </div>
         <!-- /.af5ii-hero -->
         <!-- Article -->
         <div class="af5ii-article">
            <h2>
               How Premium Advertising Improves Publisher Revenue
            </h2>
            <span></span>
            <span></span>
            <span></span>
            <span class="short"></span>
         </div>
         <!-- News Cards -->
         <div class="af5ii-cards">
            <div class="af5ii-card">
               <div class="af5ii-thumb"></div>
               <span></span>
               <span></span>
               <span class="short"></span>
            </div>
            <div class="af5ii-card">
               <div class="af5ii-thumb"></div>
               <span></span>
               <span></span>
               <span class="short"></span>
            </div>
            <div class="af5ii-card">
               <div class="af5ii-thumb"></div>
               <span></span>
               <span></span>
               <span class="short"></span>
            </div>
         </div>
         <!-- Footer Lines -->
         <div class="af5ii-footer">
            <span></span>
            <span></span>
            <span></span>
            <span class="short"></span>
         </div>
      </div>
      <!-- /.af5ii-page -->
   </div>
   <!-- /.af5ii-browser -->
</div>
<!-- /.af5ii-screen -->
              




            <!--====================================
        GOOGLE ANCHOR CONTENT
=====================================-->

<div class="af5a-page af5ga-screen">

    <!-- Hero Area -->

    <div class="af5a-hero">

        <div class="af5a-hero-image">

            <div class="af5a-lines">

                <span class="w25"></span>
                <span class="w70"></span>
                <span class="w55"></span>

            </div>

        </div>

    </div>

    <!-- Article -->

    <div class="af5a-article">

        <h2>

            How Google Anchor Ads Increase Publisher Revenue

        </h2>

        <span></span>
        <span></span>
        <span></span>
        <span class="short"></span>

    </div>

    <!-- Cards -->

    <div class="af5a-cards">

        <div class="af5a-card">

            <div class="af5a-thumb"></div>

            <span></span>
            <span></span>
            <span class="short"></span>

        </div>

        <div class="af5a-card">

            <div class="af5a-thumb"></div>

            <span></span>
            <span></span>
            <span class="short"></span>

        </div>

        <div class="af5a-card">

            <div class="af5a-thumb"></div>

            <span></span>
            <span></span>
            <span class="short"></span>

        </div>

    </div>

    <!--==================================
            GOOGLE ANCHOR AD
    ==================================-->

    <div class="af5a-anchor">

        <span class="af5a-sponsored">

            Sponsored

        </span>

        <div class="af5a-anchor-content">

            <div>

                <h3>

                    Premium Anchor Ad

                </h3>

                <p class="high-view-m">

                    High viewability sticky bottom advertisement.

                </p>

            </div>

            <a href="#" class="af5a-btn">

                Learn More

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

</div> <!-- ANCHOR END HERE -->








<!--====================================
        GOOGLE POPUP CONTENT
=====================================-->

<div class="af5p-page">

    <!-- Hero Area -->

    <div class="af5p-hero">

        <div class="af5p-hero-image">

            <div class="af5p-lines">

                <span class="w25"></span>
                <span class="w70"></span>
                <span class="w55"></span>

            </div>

        </div>

    </div>

    <!-- Article -->

    <div class="af5p-article">

        <h2 style="text-align: center; padding-top:10px;">

            How Google Popup Ads Increase Publisher Revenue

        </h2>

        <span></span>
        <span></span>
        <span></span>
        <span class="short"></span>

    </div>

    <!-- Cards -->

    <div class="af5p-cards">

        <div class="af5p-card">

            <div class="af5p-thumb"></div>

            <span></span>
            <span></span>
            <span class="short"></span>

        </div>

        <div class="af5p-card">

            <div class="af5p-thumb"></div>

            <span></span>
            <span></span>
            <span class="short"></span>

        </div>

        <div class="af5p-card">

            <div class="af5p-thumb"></div>

            <span></span>
            <span></span>
            <span class="short"></span>

        </div>

    </div>

        <!--==================================
            GOOGLE POPUP AD
    ==================================-->

    <div class="af5p-popup">

        <button class="af5p-close">

            <i class="bi bi-x-lg"></i>

        </button>

        <span class="af5p-sponsored">

            Sponsored

        </span>

        <div class="af5p-popup-content">

            <h3>

                Premium Display Campaign

            </h3>

            <p>

                High-impact popup advertisement designed
                to maximize visibility and increase
                publisher revenue.

            </p>

            <div class="af5p-size">

                336 × 280 Display

            </div>

            <a href="#" class="af5p-btn">

                Learn More

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

</div>











<!--====================================
        INTERSTITIAL CONTENT
=====================================-->

<div class="af5is-page">

    <!-- Hero Image -->

    <div class="af5is-hero">

        <div class="af5is-image">

            <div class="af5is-image-content">

                <span class="line w25"></span>
                <span class="line w70"></span>
                <span class="line w55"></span>

            </div>

        </div>

    </div>

    <!-- Article -->

    <div class="af5is-article">

        <h2 style="text-align: center; padding-top :5px;">

            How Google Interstitial Ads Increase Publisher Revenue

        </h2>

        <span></span>
        <span></span>
        <span></span>
        <span class="short"></span>

    </div>

    <!-- Content Cards -->

    <div class="af5is-cards">

        <div class="af5is-card">

            <div class="af5is-thumb"></div>

            <span></span>
            <span></span>
            <span class="short"></span>

        </div>

        <div class="af5is-card">

            <div class="af5is-thumb"></div>

            <span></span>
            <span></span>
            <span class="short"></span>

        </div>

        <div class="af5is-card">

            <div class="af5is-thumb"></div>

            <span></span>
            <span></span>
            <span class="short"></span>

        </div>

    </div>
    <div class="af5is-overlay">

    <div class="af5is-modal">

        <button class="af5is-close">

            <i class="bi bi-x-lg"></i>

        </button>

        <span class="af5is-sponsored">

            Sponsored

        </span>

        <div class="af5is-ad-image"></div>

        <h3>

            Premium Fullscreen Campaign

        </h3>

        <p>

            Deliver immersive fullscreen advertising
            experiences with premium demand partners,
            increased engagement, and higher revenue.

        </p>

        <div class="af5is-ad-size">

            Fullscreen Interstitial

        </div>

        {{-- <a href="#" class="af5is-btn">

            Learn More

            <i class="bi bi-arrow-right"></i>

        </a> --}}

    </div>

</div>

</div>
<!--==================================
        GOOGLE INTERSTITIAL AD
===================================-->










            </div>
         </div>
      </div>
      <!-- RIGHT -->
      <div class="col-lg-4">
         <div class="af5-panel">
            {{-- <span class="af5-tag">
            FEATURED FORMAT
            </span> --}}
            <h3 class="af5-panel-title">
               Banner Ads
            </h3>
            {{-- 
            <div class="af5-panel-size">
               728 × 90 Leaderboard
            </div>
            --}}
            <p class="af5-panel-desc">
               Premium leaderboard advertising designed to maximize visibility,
               improve user engagement and deliver consistent high-value CPMs
               from enterprise demand partners.
            </p>
            {{-- <div class="af5-divider"></div> --}}
            {{-- <h6 class="af5-subtitle">
               Performance
            </h6>
            <div class="af5-stat-row">
               <span><i class="bi bi-eye-fill"></i> Viewability</span>
               <strong>75%</strong>
            </div>
            <div class="af5-stat-row">
               <span><i class="bi bi-currency-dollar"></i> Avg. CPM</span>
               <strong>$2.50</strong>
            </div> --}}
            {{-- 
            <div class="af5-stat-row">
               <span><i class="bi bi-graph-up-arrow"></i> Fill Rate</span>
               <strong>98%</strong>
            </div>
            --}}
            {{-- 
            <div class="af5-divider"></div>
            --}}
            <br>
            <ul class="af5-list">
               <li><i class="bi bi-check-circle-fill"></i> Premium Advertiser Demand</li>
               <li><i class="bi bi-check-circle-fill"></i> Responsive Across Devices</li>
               <li><i class="bi bi-check-circle-fill"></i> Fast Loading Experience</li>
               <li><i class="bi bi-check-circle-fill"></i> Higher Click Through Rate</li>
            </ul>
            {{-- <a href="#" class="af5-start-btn">
            Get Started
            <i class="bi bi-arrow-right"></i>
            </a> --}}
         </div>
         <div class="af5-info af5-video-info" style="display:none;">
            <span class="af5-label">
            VIDEO ADS
            </span>
            <h3>
               Premium Video Ads
            </h3>
            <p>
               Deliver immersive HD video advertisements
               with premium demand partners, higher CPM,
               and exceptional engagement across every device.
            </p>
            {{-- <div class="af5-metrics">
               <div class="af5-metric-card">
                  <i class="bi bi-play-circle-fill"></i>
                  <div>
                     <strong>92%</strong>
                     <small>Completion Rate</small>
                  </div>
               </div>
               <div class="af5-metric-card">
                  <i class="bi bi-currency-dollar"></i>
                  <div>
                     <strong>$8.75</strong>
                     <small>Avg. CPM</small>
                  </div>
               </div>
            </div> --}}
            <ul class="af5-list">
               <li><i class="bi bi-check-circle-fill"></i> Premium Video Demand</li>
               <li><i class="bi bi-check-circle-fill"></i> VAST & VPAID Support</li>
               <li><i class="bi bi-check-circle-fill"></i> HD Streaming Quality</li>
               <li><i class="bi bi-check-circle-fill"></i> Better User Engagement</li>
            </ul>
            {{-- <a href="#" class="af5-start-btn">
            Get Started
            <i class="bi bi-arrow-right"></i>
            </a> --}}
         </div>


            <!--=========================================
        IN-IMAGE INFO PANEL
==========================================-->

         <div class="af5-image-info" style="display:none;">

            <div class="af5ii-info-card">

               {{-- <span class="af5ii-info-badge">

                     Google In-Image Ads

               </span> --}}

               <h2>

                     Premium In-Image Advertising

               </h2>

               <p>

                     Display highly viewable advertisements
                     directly inside publisher images to
                     maximize engagement and increase revenue.

               </p>

               {{-- <div class="af5ii-divider"></div> --}}

               <h4>

                     Key Benefits

               </h4>

               <ul class="af5ii-list">

                     <li>

                        <i class="bi bi-check-circle-fill"></i>

                        High Viewability

                     </li>

                     <li>

                        <i class="bi bi-check-circle-fill"></i>

                        Premium CPM

                     </li>

                     <li>

                        <i class="bi bi-check-circle-fill"></i>

                        Responsive Placement

                     </li>

                     <li>

                        <i class="bi bi-check-circle-fill"></i>

                        Google Policy Friendly

                     </li>

               </ul>
                        
               {{-- <div class="af5ii-divider"></div> --}}

               {{-- <div class="af5ii-stats">

                     <div class="af5ii-stat">

                        <i class="bi bi-eye-fill"></i>

                        <div>

                           <strong>95%</strong>

                           <small>Viewability</small>

                        </div>

                     </div>

                     <div class="af5ii-stat">

                        <i class="bi bi-graph-up-arrow"></i>

                        <div>

                           <strong>+35%</strong>

                           <small>CTR Boost</small>

                        </div>

                     </div>

               </div> --}}

               
               {{-- <a href="#" class="af5ii-info-btn">

                     Get Started

                     <i class="bi bi-arrow-right"></i>

               </a> --}}

            </div>

         </div>




               <!--=========================================
        ANCHOR INFO PANEL
==========================================-->

<div class="af5-anchor-info" style="display:none;">

    <div class="af5a-info-card">

        {{-- <span class="af5a-info-badge">

            Google Anchor Ads

        </span> --}}

        <h2>

            Sticky Bottom Advertising

        </h2>

        <p>

            Google Anchor Ads automatically remain
            visible at the bottom of the screen,
            delivering maximum viewability while
            maintaining an excellent user experience.

        </p>

        {{-- <div class="af5a-divider"></div> --}}

        <h4>

            Key Benefits

        </h4>

        <ul class="af5a-list">

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Highest Viewability

            </li>

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Better CTR

            </li>

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Mobile Friendly

            </li>

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Google Policy Safe

            </li>

        </ul>


                {{-- <div class="af5a-divider"></div> --}}

        {{-- <div class="af5a-stats">

            <div class="af5a-stat">

                <i class="bi bi-phone-fill"></i>

                <div>

                    <strong>100%</strong>

                    <small>Mobile Coverage</small>

                </div>

            </div>

            <div class="af5a-stat">

                <i class="bi bi-graph-up-arrow"></i>

                <div>

                    <strong>+40%</strong>

                    <small>Revenue Lift</small>

                </div>

            </div>

        </div> --}}

        {{-- <a href="#" class="af5a-info-btn">

            Get Started

            <i class="bi bi-arrow-right"></i>

        </a> --}}

    </div>

</div>








<!--=========================================
        POPUP INFO PANEL
==========================================-->

<div class="af5-popup-info" style="display:none;">

    <div class="af5p-info-card">

        <span class="af5p-info-badge">

            POPUP ADS

        </span>

        <h2>

            Premium Popup Ads

        </h2>

        <p>

            Deliver high-impact popup advertisements
            with premium demand partners, increased
            visibility, and better publisher revenue.

        </p>

        <h4>

            Key Benefits

        </h4>

        <ul class="af5p-list">

            <li>

                <i class="bi bi-check-circle-fill"></i>

                High Visibility

            </li>

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Better CTR

            </li>

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Responsive Display

            </li>

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Google Policy Safe

            </li>

        </ul>

    </div>

</div>







<!--=========================================
        INTERSTITIAL INFO PANEL
==========================================-->

<div class="af5-interstitial-info" style="display:none;">

    <div class="af5is-info-card">

        <span class="af5is-info-badge">

            INTERSTITIAL ADS

        </span>

        <h2>

            Premium Interstitial Ads

        </h2>

        <p>

            Deliver immersive fullscreen advertisements
            that capture user attention, improve engagement,
            and maximize publisher revenue with premium demand.

        </p>

        <h4>

            Key Benefits

        </h4>

        <ul class="af5is-list">

            <li>

                <i class="bi bi-check-circle-fill"></i>

                High Visibility

            </li>

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Premium CPM

            </li>

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Fullscreen Experience

            </li>

            <li>

                <i class="bi bi-check-circle-fill"></i>

                Google Policy Friendly

            </li>

        </ul>

    </div>

</div>





<!--HASAN YAHAN SE MENE HTML FORMATTER KO DIA THA YE OLD CODE HAI -->

      </div>
   </div>
</section>

<!--====================================
   PREMIUM AD FORMATS
   =====================================-->
<section class="af-gallery-section" id="af-formats">
   <div class="container">
      <div class="af-section-heading">
         <span class="af-section-badge"> 
            <i class="bi bi-layout-text-window-reverse"></i>&nbsp;AD FORMATS </span>
         <h2> Premium Ad Formats For Every Publisher </h2>
         <p> Discover enterprise-grade advertising solutions carefully designed to maximize revenue, improve engagement, and deliver an exceptional user experience across every device. </p>
      </div>
      <div class="row g-4">
         <!-- Card 1 -->
         <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="af-format-card">
               <div class="af-format-icon">
                  <i class="bi bi-image"></i>
               </div>
               <h3>In-Image Ads</h3>
               <p> Turn existing images into premium monetization opportunities without affecting user experience. </p>
               <span class="af-format-tag"> High CTR </span>
            </div>
         </div>
         <!-- Card 2 -->
         <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="af-format-card">
               <div class="af-format-icon">
                  <i class="bi bi-play-circle"></i>
               </div>
               <h3>Video Ads</h3>
               <p> Deliver immersive advertising experiences with premium video demand. </p>
               <span class="af-format-tag"> Premium Demand </span>
            </div>
         </div>
         <!-- Card 3 -->
         <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="af-format-card">
               <div class="af-format-icon">
                  <i class="bi bi-window-stack"></i>
               </div>
               <h3>Interstitial Ads</h3>
               <p> Capture user attention with full-screen premium advertising experiences. </p>
               <span class="af-format-tag"> High CPM </span>
            </div>
         </div>
         <!-- Card 4 -->
         <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="af-format-card">
               <div class="af-format-icon">
                  <i class="bi bi-layout-text-sidebar"></i>
               </div>
               <h3>Anchor Ads</h3>
               <p> Sticky ad placements designed for maximum visibility and performance. </p>
               <span class="af-format-tag"> Better Viewability </span>
            </div>
         </div>
         <!-- Card 5 -->
         <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="af-format-card">
               <div class="af-format-icon">
                  <i class="bi bi-badge-ad"></i>
               </div>
               <h3>Banner Ads</h3>
               <p> Classic display advertising optimized for higher fill rates and revenue. </p>
               <span class="af-format-tag"> Global Demand </span>
            </div>
         </div>
         <!-- Card 6 -->
         <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="af-format-card">
               <div class="af-format-icon">
                  <i class="bi bi-arrows-fullscreen"></i>
               </div>
               <h3>Popup Ads</h3>
               <p> Intelligent popup formats engineered for stronger engagement and visibility. </p>
               <span class="af-format-tag"> Maximum Reach </span>
            </div>
         </div>
      </div>
   </div>
</section>
<script src="{{ asset('js/ad-formats.js') }}"></script> @endsection