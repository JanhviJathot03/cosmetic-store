<?php
/**
 * About Us Page - Glam Beauty
 * Learn about Mumbai's Premier Cosmetic Store
 */

// Page configuration
$page_title = 'About Glam Beauty - Mumbai\'s Trusted Cosmetic Store | Our Story & Mission';
$page_description = 'Learn about Glam Beauty, Mumbai\'s most trusted cosmetic store since 2008. Meet our expert team, discover our mission to provide authentic beauty products and professional skincare services.';
$page_keywords = 'about Glam Beauty, cosmetic store Mumbai history, beauty experts team, skincare professionals Mumbai, authentic cosmetics';
$current_page = 'about';

// Include header
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-3">About Glam Beauty</h1>
                <p class="lead mb-0">
                    Discover the story behind Mumbai's most trusted beauty destination and meet the passionate team that makes beauty dreams come true.
                </p>
            </div>
            <div class="col-lg-4" data-aos="fade-left">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-warning" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="section-content">
                    <h2 class="display-5 fw-bold mb-4">Our Story</h2>
                    <p class="lead text-muted mb-4">
                        Founded in 2008 by beauty enthusiast Meera Agarwal, Glam Beauty started as a small cosmetic store in Bandra West with a simple mission: to provide authentic beauty products and expert consultation to Mumbai's beauty-conscious community.
                    </p>
                    <p class="mb-4">
                        What began as a passion project has now grown into Mumbai's most trusted cosmetic destination, serving over 5,000 satisfied customers with genuine international and Indian beauty brands. Our journey from a small shop to a comprehensive beauty solution center reflects our unwavering commitment to quality and customer satisfaction.
                    </p>
                    <p class="mb-4">
                        Today, we're not just a cosmetic store - we're a beauty consultation center, a trusted advisor, and a community hub for beauty enthusiasts across Mumbai. Our team of certified beauty experts continues to help customers discover their perfect beauty routine with personalized advice and premium products.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-calendar-check text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-0">Established 2008</h6>
                                    <small class="text-muted">15+ Years of Excellence</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-0">Bandra West</h6>
                                    <small class="text-muted">Heart of Mumbai</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Glam Beauty Store History - Mumbai's Trusted Cosmetic Store" 
                         class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute top-0 start-0 bg-primary text-white p-3 rounded-3 m-3">
                        <h4 class="mb-0">15+</h4>
                        <small>Years of Trust</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Our Mission, Vision & Values</h2>
            <p class="lead text-muted">
                The guiding principles that drive everything we do at Glam Beauty.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 text-center">
                    <div class="service-icon bg-primary">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h4>Our Mission</h4>
                    <p class="text-muted">
                        To empower every individual in Mumbai to discover and enhance their natural beauty through authentic products, expert consultation, and personalized care. We believe beauty is not just about appearance - it's about confidence, self-expression, and feeling your best every day.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100 text-center">
                    <div class="service-icon bg-success">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h4>Our Vision</h4>
                    <p class="text-muted">
                        To become India's most trusted and beloved beauty destination, known for our commitment to authenticity, expertise, and customer satisfaction. We envision a future where quality beauty care is accessible to everyone across Mumbai and beyond.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100 text-center">
                    <div class="service-icon bg-warning">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h4>Our Values</h4>
                    <p class="text-muted">
                        <strong>Authenticity</strong> - Only genuine products<br>
                        <strong>Expertise</strong> - Professional consultation<br>
                        <strong>Care</strong> - Personalized attention<br>
                        <strong>Trust</strong> - Honest recommendations<br>
                        <strong>Excellence</strong> - Continuous improvement
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet Our Team -->
<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Meet Our Expert Team</h2>
            <p class="lead text-muted">
                Get to know the passionate beauty professionals who make Glam Beauty Mumbai's most trusted cosmetic destination.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card team-card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b17c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Meera Agarwal - Founder & Beauty Expert">
                        <div class="position-absolute bottom-0 start-0 end-0 bg-gradient-to-top p-3">
                            <div class="social-links text-center">
                                <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="text-white me-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Meera Agarwal</h5>
                        <p class="text-primary fw-semibold mb-2">Founder & Chief Beauty Expert</p>
                        <p class="card-text text-muted mb-3">
                            With 15+ years of experience in the beauty industry, Meera founded Glam Beauty with a vision to make authentic cosmetics accessible to all. She's a certified makeup artist and skincare specialist.
                        </p>
                        <div class="expertise-tags">
                            <span class="badge bg-light text-dark me-1 mb-1">Bridal Makeup</span>
                            <span class="badge bg-light text-dark me-1 mb-1">Skincare</span>
                            <span class="badge bg-light text-dark me-1 mb-1">Product Consultation</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card team-card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Rajesh Kumar - Senior Beauty Consultant">
                        <div class="position-absolute bottom-0 start-0 end-0 bg-gradient-to-top p-3">
                            <div class="social-links text-center">
                                <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="text-white me-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Rajesh Kumar</h5>
                        <p class="text-primary fw-semibold mb-2">Senior Beauty Consultant</p>
                        <p class="card-text text-muted mb-3">
                            Rajesh brings 10+ years of expertise in men's grooming and unisex beauty solutions. He specializes in product recommendations and has extensive knowledge of international brands.
                        </p>
                        <div class="expertise-tags">
                            <span class="badge bg-light text-dark me-1 mb-1">Men's Grooming</span>
                            <span class="badge bg-light text-dark me-1 mb-1">Product Expert</span>
                            <span class="badge bg-light text-dark me-1 mb-1">Brand Specialist</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card team-card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Priya Sharma - Skincare Specialist">
                        <div class="position-absolute bottom-0 start-0 end-0 bg-gradient-to-top p-3">
                            <div class="social-links text-center">
                                <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="text-white me-2"><i class="bi bi-youtube"></i></a>
                                <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Priya Sharma</h5>
                        <p class="text-primary fw-semibold mb-2">Skincare Specialist & Makeup Artist</p>
                        <p class="card-text text-muted mb-3">
                            Priya is our certified esthetician with expertise in advanced skincare treatments and professional makeup artistry. She's passionate about helping clients achieve healthy, glowing skin.
                        </p>
                        <div class="expertise-tags">
                            <span class="badge bg-light text-dark me-1 mb-1">Facial Treatments</span>
                            <span class="badge bg-light text-dark me-1 mb-1">Anti-Aging</span>
                            <span class="badge bg-light text-dark me-1 mb-1">Makeup Artistry</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards & Recognition -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Awards & Recognition</h2>
            <p class="lead text-muted">
                Our commitment to excellence has been recognized by customers and industry experts alike.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="award-icon bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-trophy fs-1"></i>
                    </div>
                    <h5>Best Cosmetic Store</h5>
                    <p class="text-muted">Mumbai Beauty Awards 2023</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="award-icon bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-star fs-1"></i>
                    </div>
                    <h5>Customer Choice Award</h5>
                    <p class="text-muted">Beauty Retail Excellence 2022</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="award-icon bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-shield-check fs-1"></i>
                    </div>
                    <h5>Trusted Retailer</h5>
                    <p class="text-muted">Indian Beauty Association 2023</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="award-icon bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-people fs-1"></i>
                    </div>
                    <h5>5000+ Happy Customers</h5>
                    <p class="text-muted">Growing Community Since 2008</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Commitment -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     alt="Glam Beauty Commitment - Quality Beauty Products Mumbai" 
                     class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                <h2 class="display-5 fw-bold mb-4">Our Commitment to You</h2>
                <p class="lead text-muted mb-4">
                    At Glam Beauty, we're committed to being more than just a cosmetic store - we're your trusted beauty partner.
                </p>
                
                <div class="commitment-list">
                    <div class="d-flex align-items-start mb-4">
                        <div class="commitment-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <h5>100% Authentic Products</h5>
                            <p class="text-muted mb-0">We guarantee the authenticity of every product with direct partnerships with authorized distributors and brands.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="commitment-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                            <i class="bi bi-people"></i>
                        </div>
                        <div>
                            <h5>Expert Consultation</h5>
                            <p class="text-muted mb-0">Our certified beauty experts provide personalized advice based on your skin type, concerns, and lifestyle.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="commitment-icon bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                            <i class="bi bi-heart"></i>
                        </div>
                        <div>
                            <h5>Customer-First Approach</h5>
                            <p class="text-muted mb-0">Your satisfaction is our priority. We're always here to help you find the perfect beauty solution.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start">
                        <div class="commitment-icon bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <div>
                            <h5>Continuous Innovation</h5>
                            <p class="text-muted mb-0">We constantly update our product range and services to bring you the latest in beauty and skincare.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section bg-primary text-white">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-8" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-3">Experience the Glam Beauty Difference</h2>
                <p class="lead mb-4">
                    Visit our store in Bandra West or book a consultation to discover why thousands of Mumbai residents trust us for their beauty needs.
                </p>
            </div>
            <div class="col-lg-4" data-aos="fade-left">
                <a href="inquiry.php" class="btn btn-light btn-lg mb-3 me-3">
                    <i class="bi bi-calendar-check me-2"></i>Book Consultation
                </a>
                <br class="d-lg-none">
                <a href="services.php" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-grid me-2"></i>View Services
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
