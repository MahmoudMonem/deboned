<!-- Footer -->
<footer class="footer">
    <div class="footer-wave">
        <svg viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,80 C240,20 480,20 720,80 C960,140 1200,140 1440,80 L1440,120 L0,120 Z" fill="url(#footerGradient)"/>
            <defs>
                <linearGradient id="footerGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#84d0ce;stop-opacity:0.3" />
                    <stop offset="100%" style="stop-color:#f27125;stop-opacity:0.3" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    
    <div class="footer-content">
        <div class="footer-container">
            <div class="footer-grid">
                <!-- Brand Column -->
                <div class="footer-column footer-brand">
        <a href="{{ url('/') }}" class="navbar-brand">
          <img src="{{ asset('images/logos/deboned-logo-blue.png') }}" alt="Deboned" class="header-brand-logo">
        </a><br>
      
        <span class="section-label">Simple, clean , and fresh</span>

                </div>
                
                <!-- Quick Links -->
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">

        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#locations">Locations</a></li>
        <li><a href="#contact">Contact</a></li>
                <li><a href="/careers">Careers</a></li>

                    </ul>
                </div>
                
                <!-- Services -->
                <div class="footer-column">
                    <h4></h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/catering') }}"></a></li>
                        <li><a href="{{ url('/private-dining') }}"></a></li>
                        <li><a href="{{ url('/events') }}"></a></li>
                        <li><a href="{{ url('/gift-cards') }}"></a></li>
                        <li><a href="{{ url('/loyalty') }}"></a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="footer-column">
                    <h4>Get in Touch</h4>
                    <div class="footer-contact">
                        <div class="contact-item">
                    
    <a href="https://www.instagram.com/deboned.kw/?hl=en">
    <i class="fab fa-instagram"></i>    
    Kuwait
    </a><br>
    </div>
    <div class="contact-item">
    <a href="https://www.instagram.com/deboned.kw/?hl=en">
    <i class="fab fa-instagram"></i>    
    Saudi Arabia
    </a><br>
    </div>
    <div class="contact-item">
    <a href="https://www.instagram.com/deboned.kw/?hl=en">
    <i class="fab fa-instagram"></i>    
    Brahrain
    </a><br>
     </div>

                            
                        </div>
                        <!-- 
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+1234567890">+1 (234) 567-890</a>
                        </div>
                        -->
<style>
.footer-social a,
.contact-item a {
  text-decoration: none;
  color:black;
}
</style>

<div class="footer-social">
  <a href="https://kw.linkedin.com/company/neesh-group" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>

</div>
<br>
<div class="contact-item">
<!--  <i class="fas fa-envelope"></i>
  <a href="mailto:info@deboned.com">info@deboned.com</a>
</div>-->


                    </div>

                </div>
            </div>
            
            <!-- Newsletter 
            <div class="footer-newsletter">
                <div class="newsletter-content">
                    <h4>Subscribe to Our Newsletter</h4>
                    <p>Get the latest updates on new menu items, special events, and exclusive offers.</p>
                </div>
                <form class="newsletter-form" method="POST" action="{{ url('/newsletter') }}">
                    @csrf
                    <input type="email" placeholder="Enter your email" name="email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>  -->
        </div>
    </div>
  
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-container">
            <div class="footer-bottom-content">
                <p>&copy; {{ date('Y') }} Deboned. All rights reserved.</p>
                <ul class="footer-legal">
                    <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms') }}">Terms of Service</a></li>
                    <li><a href="{{ url('/sitemap') }}">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

