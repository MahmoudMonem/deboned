<!-- Navigation Header -->
<nav class="navbar sticky-top" id="navbar">
    <div class="navbar-container">
        <a href="{{ url('/') }}" class="navbar-brand">
          <img src="{{ asset('images/logos/deboned-logo-blue.png') }}" alt="Deboned" class="header-brand-logo">
        </a>
        
        <ul class="navbar-menu">
        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#locations">Locations</a></li>
        <li><a href="#contact">Contact</a></li>
        </ul>
        <!--
        <a href="{{ url('/reservations') }}" class="navbar-cta">Book a Table</a>
        -->
        <div class="mobile-menu-toggle" id="mobileMenuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <ul>

        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#locations">Locations</a></li>
        <li><a href="#contact">Contact</a></li>
    <li><a href="/careers">Careers</a></li>
    </ul>
</div>

