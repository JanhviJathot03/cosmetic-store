<?php
/**
 * Home Page - Glam Beauty
 * Best Cosmetic & Skincare Store in Mumbai
 */

// Page configuration
$page_title = 'Glam Beauty - Best Cosmetic Store in Mumbai | Premium Skincare Products';
$page_description = 'Discover Mumbai\'s premier cosmetic store offering authentic beauty products, professional makeup services, and expert skincare consultation. Best cosmetic shop near me with home delivery.';
$page_keywords = 'best cosmetic store Mumbai, skincare products Mumbai, beauty parlour near me, makeup artist Mumbai, cosmetics shop, beauty consultation, skincare treatment';
$current_page = 'home';

// Include header
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Hero Section -->
<section class="hero-section text-white position-relative">
    <div class="floating-elements">
        <div class="floating-element" style="top: 10%; left: 10%; font-size: 2rem;">💄</div>
        <div class="floating-element" style="top: 20%; right: 15%; font-size: 1.5rem;">✨</div>
        <div class="floating-element" style="bottom: 20%; left: 20%; font-size: 2.5rem;">💋</div>
        <div class="floating-element" style="bottom: 30%; right: 10%; font-size: 1.8rem;">🌸</div>
    </div>
    
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="hero-content">
                    <h1 class="display-2 fw-bold mb-4">
                        Discover Your
                        <span class="text-warning">Natural Beauty</span>
                    </h1>
                    <p class="lead mb-4">
                        Mumbai's most trusted destination for authentic cosmetics, professional skincare treatments, and personalized beauty consultation. Transform your look with premium products and expert guidance.
                    </p>
                    <div class="hero-stats mb-4">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="stat-item">
                                    <span class="stat-number text-warning fw-bold" data-count="5000">0</span><span>+</span>
                                    <div class="stat-label">Happy Customers</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <span class="stat-number text-warning fw-bold" data-count="15">0</span><span>+</span>
                                    <div class="stat-label">Years Experience</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <span class="stat-number text-warning fw-bold" data-count="500">0</span><span>+</span>
                                    <div class="stat-label">Premium Products</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-buttons">
                        <a href="services.php" class="btn btn-lg btn-primary me-3 mb-2">
                            <i class="bi bi-palette me-2"></i>Explore Services
                        </a>
                        <a href="inquiry.php" class="btn btn-lg btn-outline-light mb-2">
                            <i class="bi bi-calendar-check me-2"></i>Book Consultation
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="hero-image text-center">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Professional Beauty Consultation at Glam Beauty Mumbai" 
                         class="img-fluid rounded-3 shadow-lg"
                         style="max-height: 500px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     alt="Glam Beauty Store Interior - Best Cosmetic Shop in Mumbai" 
                     class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-content">
                    <h2 class="display-5 fw-bold mb-4">
                        Mumbai's Most Trusted 
                        <span class="text-primary">Beauty Destination</span>
                    </h2>
                    <p class="lead text-muted mb-4">
                        Since 2008, Glam Beauty has been Mumbai's go-to destination for authentic cosmetics and professional skincare treatments. Located in the heart of Bandra West, we serve beauty enthusiasts across Mumbai with genuine products and expert consultation.
                    </p>
                    <div class="row mb-4">
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="service-icon-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="bi bi-award"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">100% Authentic</h6>
                                    <small class="text-muted">Genuine Products Only</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="service-icon-sm bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Expert Team</h6>
                                    <small class="text-muted">Certified Beauty Experts</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="service-icon-sm bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Home Delivery</h6>
                                    <small class="text-muted">Free Delivery in Mumbai</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="service-icon-sm bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="bi bi-chat-dots"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Free Consultation</h6>
                                    <small class="text-muted">Personalized Advice</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-primary btn-lg">
                        <i class="bi bi-arrow-right me-2"></i>Learn More About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Our Premium Services</h2>
            <p class="lead text-muted">
                From professional makeup to advanced skincare treatments, discover our comprehensive beauty services designed for Mumbai's modern lifestyle.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h4>Professional Makeup</h4>
                    <p class="text-muted">
                        Expert makeup services for all occasions - from daily wear to bridal makeup. Our certified makeup artists use premium products to enhance your natural beauty.
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Bridal Makeup</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Party Makeup</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Corporate Look</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Photoshoot Makeup</li>
                    </ul>
                    <a href="services.php#makeup" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <h4>Advanced Skincare</h4>
                    <p class="text-muted">
                        Personalized skincare solutions for all skin types. From anti-aging treatments to acne solutions, get glowing skin with our expert care.
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Facial Treatments</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Anti-Aging Care</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Acne Treatment</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Skin Analysis</li>
                    </ul>
                    <a href="services.php#skincare" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-gem"></i>
                    </div>
                    <h4>Premium Products</h4>
                    <p class="text-muted">
                        Curated collection of authentic international and Indian cosmetic brands. From budget-friendly to luxury, find products that suit your needs.
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-check-circle text-success me-2"></i>International Brands</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Organic Products</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Budget-Friendly Options</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Latest Arrivals</li>
                    </ul>
                    <a href="services.php#products" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="services.php" class="btn btn-primary btn-lg">
                <i class="bi bi-grid me-2"></i>View All Services
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section bg-cream">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Why Mumbai Chooses Glam Beauty?</h2>
            <p class="lead text-muted">
                Discover what makes us the preferred beauty destination for thousands of satisfied customers across Mumbai.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-shield-check fs-1"></i>
                    </div>
                    <h5>100% Authentic Products</h5>
                    <p class="text-muted">We guarantee authenticity with direct partnerships with authorized distributors and brands.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-people fs-1"></i>
                    </div>
                    <h5>Expert Beauty Consultation</h5>
                    <p class="text-muted">Our certified beauty experts provide personalized advice for your unique skin type and concerns.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-truck fs-1"></i>
                    </div>
                    <h5>Free Home Delivery</h5>
                    <p class="text-muted">Enjoy complimentary home delivery across Mumbai for orders above ₹999. Quick and reliable service.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-award fs-1"></i>
                    </div>
                    <h5>15+ Years Experience</h5>
                    <p class="text-muted">Over a decade of serving Mumbai's beauty community with trust, quality, and exceptional service.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="stats-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-item">
                    <span class="stat-number" data-count="5000" data-suffix="+">0+</span>
                    <div class="stat-label">Happy Customers</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item">
                    <span class="stat-number" data-count="500" data-suffix="+">0+</span>
                    <div class="stat-label">Premium Products</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-item">
                    <span class="stat-number" data-count="50" data-suffix="+">0+</span>
                    <div class="stat-label">International Brands</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-item">
                    <span class="stat-number" data-count="15" data-suffix="+">0+</span>
                    <div class="stat-label">Years of Excellence</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2 class="display-5 fw-bold">What Our Customers Say</h2>
            <p class="lead text-muted">
                Read reviews from our satisfied customers who have experienced the Glam Beauty difference.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card h-100">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="text-muted mb-4">
                        "Best cosmetic store in Mumbai! Their makeup artist did my bridal makeup and it was absolutely stunning. The products are genuine and the staff is so knowledgeable. Highly recommended for all beauty needs!"
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b17c?ixlib=rb-4.0.3&w=150&q=80" 
                             alt="Priya Sharma - Customer Review" class="testimonial-avatar">
                        <div>
                            <h6 class="mb-0">Priya Sharma</h6>
                            <small class="text-muted">Bride, Andheri</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card h-100">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="text-muted mb-4">
                        "I've been shopping here for 3 years now. The skincare consultation was amazing - they helped me find the perfect routine for my oily skin. Home delivery is always on time and products are always authentic."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&w=150&q=80" 
                             alt="Rahul Patel - Customer Review" class="testimonial-avatar">
                        <div>
                            <h6 class="mb-0">Rahul Patel</h6>
                            <small class="text-muted">IT Professional, Bandra</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card h-100">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="text-muted mb-4">
                        "The facial treatment at Glam Beauty is fantastic! My skin has never looked better. The team is professional and the ambiance is very relaxing. Definitely the best beauty parlour near me in Mumbai."
                    </p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&w=150&q=80" 
                             alt="Anita Singh - Customer Review" class="testimonial-avatar">
                        <div>
                            <h6 class="mb-0">Anita Singh</h6>
                            <small class="text-muted">Teacher, Juhu</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="section bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-3">Ready to Transform Your Beauty Routine?</h2>
                <p class="lead mb-4">
                    Join thousands of satisfied customers who trust Glam Beauty for their beauty needs. Book your free consultation today and discover the perfect products and treatments for your unique style.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="inquiry.php" class="btn btn-light btn-lg mb-3 me-3">
                    <i class="bi bi-calendar-check me-2"></i>Book Consultation
                </a>
                <a href="tel:+919876543210" class="btn btn-outline-light btn-lg mb-3">
                    <i class="bi bi-telephone me-2"></i>Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
