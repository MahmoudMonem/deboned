@extends ('layouts.app')

@section('styles')
<style>
    /* Include your updated CSS styles here or link to external file */
</style>
@endsection

@section ('content')


    
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress"></div>
    
    <!-- Main Content -->
    <main id="main-content">
  
<!-- Hero Section -->
<section class="hero">
    <!-- Video Version (Commented for Reference) -->
    {{-- 
    <div class="hero-background">
        <div class="hero-overlay"></div>
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="{{ asset('videos/hero-video.mp4') }}" type="video/mp4">
        </video>
    </div>
    --}}
    
    <!-- Image Version -->
    <div class="hero-background">
         <!--<div class="hero-overlay"></div>-->
        <img class="hero-image" src="{{ asset('images/coverhero.jpg') }}" alt="Deboned Restaurant">
    </div>
    
    <div class="hero-content">
        <div class="hero-container">
            <h1 class="hero-title">
                <span class="hero-subtitle">Welcome to</span>
<img src="{{ asset('images/logos/deboned-logo-white.png') }}" alt="Deboned" class="hero-brand-logo">
            </h1>
            <p class="hero-description">
                Culinary Integrity and Creativity 
            </p>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-outline">Contact Us</a>
            </div>
        </div>
    </div>
    
    <div class="hero-scroll-indicator">
        <span>Scroll to explore</span>
        <div class="scroll-arrow"></div>
    </div>
</section>

<!-- About Section - Updated with Company Profile -->
<section id="about" class="about-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <div class="section-header">
                    <span class="section-label">Since 2021</span>
                    <h2 class="section-title">Who we are!</h2>
                </div>
                <p class="about-text">
Founded in 2021 in Kuwait, Deboned is redefining what comfort food means in today’s fast world. Our concept transforms fresh, boneless chicken into a clean, premium quick-service experience — where flavor meets efficiency, and quality never takes a shortcut. With 11 branches in Kuwait, 3 in Bahrain, and 3 in Saudi Arabia (Khobar & Dammam), Deboned has grown from a local favorite into a regional QSR brand positioned for international expansion under Neesh Group.                </p>
                <p class="about-text">
                    With 11 branches in Kuwait, 3 in Bahrain, and 3 in Saudi Arabia, Deboned has grown from a local favorite into a regional QSR brand positioned for international expansion under Neesh Group.
                </p>
                <div class="about-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="feature-content">
                            <h4>17+ Branches</h4>
                            <p>Across Kuwait, Bahrain & Saudi Arabia</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-drumstick-bite"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Simple, Clean, and Fresh!</h4>
                            <p>Premium Quality Chicken</p>
                        </div>
                    </div>
                </div>
                <a href="#franchise-form" class="btn btn-secondary">Franchise Opportunities</a>
            </div>
            <div class="about-images">
                <div class="image-stack">
                    <div class="stack-item stack-item-1">
                        <img src="{{ asset('images/deboned1.jpg') }}" alt="Deboned Restaurant">
                    </div>
                    <div class="stack-item stack-item-2">
                        <img src="{{ asset('images/central-kitchen.jpg') }}" alt="Central Kitchen">
                    </div>
                    <div class="floating-badge">
                        <span class="badge-number">2021</span>
                        <span class="badge-text">Established in Kuwait</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mission-vision-section">
    <!-- Image Version -->
    <div class="">
        <div class=""></div>
        <img class="ourstory-image" src="{{ asset('images/our story.jpg') }}" alt="Deboned Story">
    </div>
    </section>



   
    <div class="container d-flex justify-content-center text-center col-12">
        <!-- First Row -->
        <div class="align-items-center mb-5">
            <div class=" mb-4 mb-lg-0">
                <h2 class="mission-title">LOCALLY ROOTED,<br>GLOBALLY BUILT</h2><br>
                
                <p class="col-6">
                    Proudly local, Deboned is leading a new era of QSR dining, redefining comfort foods with a cleaner perspective and making high-quality boneless chicken fresh and accessible across the Gulf, Europe, and beyond.<br><br>
                </p>
            </div>
 
        </div>

    </div>
<!-- Mission & Vision Section - Compact Inline Layout -->
<section class="mission-vision-section">


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="vision-box vision-animation">
                    <div class="vision-header">
                        <div class="vision-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="header-text">
                            <span class="section-label">Our Vision</span>
                            <h3>A NEW BENCHMARK FOR DINING</h3>
                        </div>
                    </div>
                    <div class="vision-content">
                        <p>To become the most trusted clean comfort food franchise in the GCC, setting a new benchmark for modern QSR dining combining speed, freshness, and innovation.</p>
                        <div class="vision-highlight">
                            <span>WE DON'T TRY TO FIT IN WE STAND OUT</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission-box mission-animation">
                    <div class="mission-header">
                        <div class="mission-icon">
                            <i class="fas fa-flag"></i>
                        </div>
                        <div class="header-text">
                            <span class="section-label">Our Mission</span>
                            <h3>REIMAGINING CHICKEN</h3>
                  
                          
                        </div>
                    </div>
                    <div class="mission-content">
                        <p>To further expand and strengthen a proven business model that seamlessly blends operational excellence with culinary integrity and creativity empowering entrepreneurs to replicate and deliver Deboned's exceptional quality, signature flavors, and service standards in markets across the globe.</p>
                        <div class="mission-highlight">
                            <span>IT ALL STARTED WITH ONE CHICKEN</span>
                        </div>
                    </div>
                </div>
            </div>



        </div>

</section>


<!-- Quality & Operations Section - Light Version with Brand Colors -->
<section class="experience-section">
    <div class="container">
        <div class="experience-content">
            <div class="section-header text-center">
                <span class="section-label">Premium Quality By Design</span>
                <h2 class="section-title">The Deboned Difference</h2>
            </div>
            
            <div class="quality-intro">
                <p>We've reimagined the entire chicken experience from sourcing to serving, creating a system that delivers consistent excellence in every bite, every time.</p>
            </div>
            
            <div class="quality-grid">
                <div class="quality-item">
                    <div class="quality-icon">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <div class="quality-content">
                        <h3>Central Kitchen Excellence</h3>
                        <p>Every meal begins in our Central Kitchen. From
prep to packing, every step is done in-house under
one roof. This keeps things clean, consistent, and
always fresh.</p>
                        <div class="quality-metric">
                            <span>WHERE CLEAN COMES TO LIFE</span>
                        </div>
                    </div>
                </div>
                
                <div class="quality-item">
                    <div class="quality-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="quality-content">
                        <h3>QUALITY STARTS AT THE SOURCE</h3>
                        <p>Deboned partners exclusively with top-tier chicken
sources, using only fresh, premium, never-frozen
ingredients. Our Central Kitchen oversees the full
production cycle.</p>
                        <div class="quality-metric">
                            <span>SIMPLE, CLEAN, AND FRESH</span>
                        </div>
                    </div>
                </div>
                
                <div class="quality-item">
                    <div class="quality-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="quality-content">
                        <h3>Franchise-Ready Systems</h3>
                        <p>Strong track record across Kuwait, Bahrain, and Saudi Arabia.
End-to-end in-house systems for production, training, and support.
Distinctive identity and clean QSR positioning.
</p>
                        <div class="quality-metric">
                            <span>Proven in 3 Countries</span>
                        </div>
                    </div>
                </div>
                
                <div class="quality-item">
                    <div class="quality-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="quality-content">
                        <h3>Community and Events</h3>
                        <p>We show up where it matters. Deboned
proudly supports sports events, tournaments,
and active lifestyles with food that fuels both
energy and community. We are here for the
hustle.</p>
                        <div class="quality-metric">
                            <span>ROOTED IN THE GAME</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="quality-cta">
                <a href="/careers" class="btn btn-primary">Join Our Success Story</a>
            </div>
        </div>
    </div>
</section>

<!-- Our Presence Section - New -->
<!-- Our Presence Section -->
<section id="locations" class="presence-section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Regional Expansion</span>
      <h2 class="section-title">Our Growing Presence Across the GCC</h2>
      <p class="section-intro">
        We continue to expand strategically across the region, strengthening our footprint and service accessibility.
      </p>
    </div>

    <!-- Map with Pins -->
    <div class="presence-map">
      <img src="{{ asset('images/gcc-map.png') }}" alt="GCC Map" class="map-image">

      <!-- Kuwait Pin -->
      <div class="map-pin" style="top: 45%; left: 12%;">
        <div class="pin-dot"></div><br>
      </div>

        <div class="map-pin" style="top: 22%; left: 20%;">
        <div class="card">
                    <img src="{{ asset('images/flags/kuwait.png') }}" alt="Kuwait Flag" class="flag-icon">

        <h3>Kuwait</h3>
        <p>11 Branches</p>
        <span class="expansion-note">+3 by Q2 2026</span>
        </div>
      </div>

      <!-- Bahrain Pin -->
      <div class="map-pin" style="top: 55%; left: 36%;">
        <div class="pin-dot"></div>
      </div>

        <div class="map-pin" style="top: 37%; left: 37%;">
        <div class="card">
        <img src="{{ asset('images/flags/bahrain.png') }}" alt="Kuwait Flag" class="flag-icon">

        <h3>Bahrain</h3>
        <p>3 Branches</p>

        </div>
        </div>

      <!-- Saudi Arabia Pin -->
      <div class="map-pin" style="top: 85%; left: 46%;">
        <div class="pin-dot"></div>
      </div>

        <div class="map-pin" style="top: 50%; left: 50%;">
        <div class="card">
        <img src="{{ asset('images/flags/saudi.png') }}" alt="Kuwait Flag" class="flag-icon">

        <h3>Saudi Arabia</h3>
        <p>3 Branches</p>
        <span class="expansion-note">+4 by Q2 2026</span>

        </div>
        </div>

    </div>

    <!-- Presence Stats in One Line 
    <div class="presence-stats">
      <div class="presence-item">
        <img src="{{ asset('images/flags/kuwait.png') }}" alt="Kuwait Flag" class="flag-icon">
        <h3>Kuwait</h3>
        <p>11 Branches</p>
        <span class="expansion-note">+3 by Q2 2026</span>
      </div>

      <div class="presence-item">
        <img src="{{ asset('images/flags/bahrain.png') }}" alt="Bahrain Flag" class="flag-icon">
        <h3>Bahrain</h3>
        <p>3 Branches</p>
      </div>

      <div class="presence-item">
        <img src="{{ asset('images/flags/saudi.png') }}" alt="Saudi Arabia Flag" class="flag-icon">
        <h3>Saudi Arabia</h3>
        <p>3 Branches (Khobar & Dammam)</p>
        <span class="expansion-note">+4 by Q2 2026</span>
      </div>
    </div>-->
  </div>
</section>


<!-- Featured Menu Section - Updated with new menu items and enhanced tags -->
<section id="menu" class="featured-menu">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-label">Culinary Delights</span>
            <h2 class="section-title">Our Products</h2>
            <p class="section-description">
                Discover our chef's carefully crafted selections that showcase the essence of Deboned
            </p>
        </div>

        
        <div class="menu-content">
            <div id="signature-wraps" class="menu-tab-content active">
                <div class="menu-grid">
                    <div class="menu-card">
                        <div class="menu-card-image">
                            <img src="{{ asset('images/menu/tawouk-wrap.jpg') }}" alt="Classic Tawouk Wrap">
                            <div class="menu-card-overlay">
                                <div class="menu-tag bestseller">
                                    <i class="fas fa-star"></i>
                                    <span>Bestseller</span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-card-content">
                            <h3>Tawouk Wrap</h3>
                            <p>Charcoal-grilled Shish Tawouk Wrap, marinated to perfection in our signature blend of spices, then topped with our special Deboned sauce</p>
                          
                        </div>
                    </div>
                    
                    <div class="menu-card">
                        <div class="menu-card-image">
                            <img src="{{ asset('images/menu/full-chicken.jpg') }}" alt="Garlic Churri Tawouk Wrap">
                            <div class="menu-card-overlay">
                                <div class="menu-tag fan-favorite">
                                    <i class="fas fa-heart"></i>
                                    <span>Fan Favorite</span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-card-content">
                            <h3>Deboned Whole Chicken Sweet Chilli</h3>
                            <p>Charcoal grilled boneless Whole chicken with Sweet Chilli flavor,. Served with baked Potato, Sweet Chilli sauce and garlic sauce with 2 fresh bread.</p>
                
                        </div>
                    </div>
                    
                    <div class="menu-card">
                        <div class="menu-card-image">
                            <img src="{{ asset('images/menu/chicken-rice.jpg') }}" alt="Buffalo Tawouk Wrap">
                            <div class="menu-card-overlay">
                                <div class="menu-tag spicy">
                                    <i class="fas fa-fire"></i>
                                    <span>Spicy</span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-card-content">
                            <h3>Whole Chicken Rice Dish Sweet Chilli</h3>
                            <p>Our special steamed seasoned rice, topped with whole Deboned chicken, and Sweet Chilli sauce.</p>
       
                        </div>
                    </div>
                    
                    <div class="menu-card">
                        <div class="menu-card-image">
                            <img src="{{ asset('images/menu/bucket.jpg') }}" alt="Muhammara Tawouk Wrap">
                            <div class="menu-card-overlay">
                                <div class="menu-tag new">
                                    <i class="fas fa-certificate"></i>
                                    <span>New</span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-card-content">
                            <h3>Deboned Bucket Sweet Chilli</h3>
                            <p>12-Quarter pieces of Deboned loumi chicken served with 8 pieces of fresh bread.</p>

                        </div>
                    </div>

                    
                    
                </div>
            </div>
        </div>
        
        <div class="text-center menu-footer">
            <a href="https://www.debonedkwt.com/" class="btn btn-secondary">View Menu</a><br><br>
        </div>
    </div>
</section>


    <!--   <section class="mission-vision-section">

    <div class="">
        <div class=""></div>
        <img class="ourstory-image" src="{{ asset('images/franchise-advantage.jpg') }}" alt="Deboned Story">
    </div>
    </section> -->
<!-- Contact Forms Section -->
<section id="contact" class="contact-forms-section">
    <div class="container">
        <div class="section-header text-center">
      <div class="">
        <div class=""></div>
        <img class="ourstory-image" src="{{ asset('images/letsconnect.jpg') }}" alt="Deboned Story">
    </div>
        </div>

       
        <!-- Tab Content -->
        <div class="tab-content col-12" id="contactTabContent">
            
            <!-- Franchise Form -->
            <div class="tab-pane fade" id="franchise-form" role="tabpanel" aria-labelledby="franchise-tab">
                <div class="form-panel franchise-panel">
                    <div class="form-wrapper">
                        <h3 class="form-title">Become a Franchise Partner</h3>
                        <p class="form-subtitle">
                            <a href="mailto:franchise@neesh.net">franchise@neesh.net</a>
                        </p>
                        
                        <form id="franchiseForm" action="{{ route('franchise.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control custom-input" 
                                       placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <select name="concept" class="form-control custom-input" required>
                                @include('includes.countries')
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control custom-textarea" 
                                          rows="4" placeholder="Tell us about your interest"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-submit">
                                <i class="fas fa-paper-plane"></i> Send Inquiry
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Say Hello Form 
            <div class="tab-pane fade show active" id="hello-form" role="tabpanel" aria-labelledby="hello-tab">
                <div class="form-panel hello-panel">
                    <div class="form-wrapper">
                        <h3 class="form-title">Say Hello</h3>
                        <p class="form-subtitle">
                            <a href="mailto:hello@deboned.com">hello@deboned.com</a>
                        </p>
                        
                        <form id="helloForm" action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control custom-input" 
                                       placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control custom-input" 
                                       placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control custom-textarea" 
                                          rows="4" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-submit">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</section>

    </main>
@endsection

@section('scripts')
<script>

document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Animate elements on scroll
    const animateElements = document.querySelectorAll('.about-content, .menu-card, .quality-item, .vision-animation, .mission-animation, .presence-card');
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease';
        observer.observe(el);
    });
    
    // Menu tab functionality
    const menuTabs = document.querySelectorAll('.menu-tab-item');
    const menuContents = document.querySelectorAll('.menu-tab-content');
    
    menuTabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all tabs and contents
            menuTabs.forEach(t => t.classList.remove('active'));
            menuContents.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Add active class to corresponding content
            const target = this.querySelector('a').getAttribute('href').substring(1);
            document.getElementById(target).classList.add('active');
        });
    });
    
    // Mobile checks for compact layout
    function checkMobileLayout() {
        const missionHeaders = document.querySelectorAll('.mission-header, .vision-header');
        if (window.innerWidth <= 480) {
            missionHeaders.forEach(header => {
                header.style.flexDirection = 'row';
            });
        }
    }
    
    // Run on load and resize
    checkMobileLayout();
    window.addEventListener('resize', checkMobileLayout);
});
</script>
@endsection