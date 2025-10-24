<?php
/**
 * Services Page - Glam Beauty
 * Complete Beauty & Skincare Services in Mumbai
 */

// Page configuration
$page_title = 'Beauty Services Mumbai - Professional Makeup, Skincare & Cosmetic Consultation | Glam Beauty';
$page_description = 'Explore our comprehensive beauty services in Mumbai: professional makeup, advanced skincare treatments, bridal services, and expert cosmetic consultation. Book your appointment today!';
$page_keywords = 'beauty services Mumbai, professional makeup artist Mumbai, skincare treatment, facial services, bridal makeup, cosmetic consultation, beauty parlour Bandra';
$current_page = 'services';

// Include header
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-3">Our Premium Services</h1>
                <p class="lead mb-0">
                    Discover comprehensive beauty solutions tailored for Mumbai's lifestyle. From professional makeup to advanced skincare treatments.
                </p>
            </div>
            <div class="col-lg-4" data-aos="fade-left">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-warning" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Service Filter -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="service-filter text-center">
                    <button class="btn btn-outline-primary filter-btn active me-2 mb-2" data-filter="all">All Services</button>
                    <button class="btn btn-outline-primary filter-btn me-2 mb-2" data-filter="makeup">Makeup</button>
                    <button class="btn btn-outline-primary filter-btn me-2 mb-2" data-filter="skincare">Skincare</button>
                    <button class="btn btn-outline-primary filter-btn me-2 mb-2" data-filter="bridal">Bridal</button>
                    <button class="btn btn-outline-primary filter-btn me-2 mb-2" data-filter="consultation">Consultation</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Professional Makeup Services -->
            <div class="col-lg-4 col-md-6 service-card makeup" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100" id="makeup">
                    <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top" alt="Professional Makeup Services Mumbai">
                    <div class="card-body">
                        <div class="service-category mb-2">
                            <span class="badge bg-primary">Makeup</span>
                        </div>
                        <h4 class="card-title">Professional Makeup</h4>
                        <p class="card-text text-muted">
                            Transform your look with our expert makeup artists. From everyday elegance to glamorous party looks, we create stunning makeup that enhances your natural beauty.
                        </p>
                        <div class="service-features mb-3">
                            <small class="text-success"><i class="bi bi-check-circle me-1"></i>HD Makeup</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Airbrush Makeup</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Party Look</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="h5 text-primary mb-0">₹2,500+</span>
                                <small class="text-muted">/session</small>
                            </div>
                            <a href="inquiry.php?service=Professional Makeup" class="btn btn-outline-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bridal Makeup -->
            <div class="col-lg-4 col-md-6 service-card makeup bridal" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100" id="bridal">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top" alt="Bridal Makeup Services Mumbai">
                    <div class="card-body">
                        <div class="service-category mb-2">
                            <span class="badge bg-warning">Bridal</span>
                            <span class="badge bg-primary ms-1">Makeup</span>
                        </div>
                        <h4 class="card-title">Bridal Makeup</h4>
                        <p class="card-text text-muted">
                            Make your special day unforgettable with our comprehensive bridal makeup packages. Includes trial, wedding day makeup, and touch-up services.
                        </p>
                        <div class="service-features mb-3">
                            <small class="text-success"><i class="bi bi-check-circle me-1"></i>Pre-wedding Trial</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Wedding Day</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Touch-ups</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="h5 text-primary mb-0">₹8,000+</span>
                                <small class="text-muted">/package</small>
                            </div>
                            <a href="inquiry.php?service=Bridal Makeup" class="btn btn-outline-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advanced Facial Treatment -->
            <div class="col-lg-4 col-md-6 service-card skincare" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100" id="facial">
                    <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top" alt="Facial Treatment Services Mumbai">
                    <div class="card-body">
                        <div class="service-category mb-2">
                            <span class="badge bg-success">Skincare</span>
                        </div>
                        <h4 class="card-title">Advanced Facial Treatments</h4>
                        <p class="card-text text-muted">
                            Rejuvenate your skin with our professional facial treatments. Customized for your skin type with premium products and expert techniques.
                        </p>
                        <div class="service-features mb-3">
                            <small class="text-success"><i class="bi bi-check-circle me-1"></i>Deep Cleansing</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Hydra Facial</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Anti-Aging</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="h5 text-primary mb-0">₹1,800+</span>
                                <small class="text-muted">/session</small>
                            </div>
                            <a href="inquiry.php?service=Facial Treatment" class="btn btn-outline-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skincare Consultation -->
            <div class="col-lg-4 col-md-6 service-card skincare consultation" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100" id="skincare">
                    <img src="https://images.unsplash.com/photo-1616391182219-e080b4d1043a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top" alt="Skincare Consultation Mumbai">
                    <div class="card-body">
                        <div class="service-category mb-2">
                            <span class="badge bg-success">Skincare</span>
                            <span class="badge bg-info ms-1">Consultation</span>
                        </div>
                        <h4 class="card-title">Personalized Skincare Consultation</h4>
                        <p class="card-text text-muted">
                            Get expert advice on skincare routines, product selection, and treatment plans. Our specialists analyze your skin and create customized solutions.
                        </p>
                        <div class="service-features mb-3">
                            <small class="text-success"><i class="bi bi-check-circle me-1"></i>Skin Analysis</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Product Recommendations</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Routine Planning</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="h5 text-primary mb-0">₹500</span>
                                <small class="text-muted">/consultation</small>
                            </div>
                            <a href="inquiry.php?service=Skincare Consultation" class="btn btn-outline-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Premium Cosmetic Products -->
            <div class="col-lg-4 col-md-6 service-card consultation" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100" id="products">
                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top" alt="Premium Cosmetic Products Mumbai">
                    <div class="card-body">
                        <div class="service-category mb-2">
                            <span class="badge bg-info">Products</span>
                            <span class="badge bg-warning ms-1">Consultation</span>
                        </div>
                        <h4 class="card-title">Premium Cosmetic Products</h4>
                        <p class="card-text text-muted">
                            Discover authentic international and Indian cosmetic brands. From budget-friendly to luxury, we help you find products perfect for your needs.
                        </p>
                        <div class="service-features mb-3">
                            <small class="text-success"><i class="bi bi-check-circle me-1"></i>50+ Brands</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>100% Authentic</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Home Delivery</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="h5 text-primary mb-0">₹200+</span>
                                <small class="text-muted">/product</small>
                            </div>
                            <a href="inquiry.php?service=Product Consultation" class="btn btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anti-Aging Treatment -->
            <div class="col-lg-4 col-md-6 service-card skincare" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top" alt="Anti-Aging Treatment Mumbai">
                    <div class="card-body">
                        <div class="service-category mb-2">
                            <span class="badge bg-success">Skincare</span>
                        </div>
                        <h4 class="card-title">Anti-Aging Treatments</h4>
                        <p class="card-text text-muted">
                            Turn back time with our advanced anti-aging treatments. Professional techniques and premium products to reduce fine lines and restore youthful glow.
                        </p>
                        <div class="service-features mb-3">
                            <small class="text-success"><i class="bi bi-check-circle me-1"></i>Collagen Boost</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Wrinkle Reduction</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Skin Tightening</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="h5 text-primary mb-0">₹3,500+</span>
                                <small class="text-muted">/session</small>
                            </div>
                            <a href="inquiry.php?service=Anti-Aging Treatment" class="btn btn-outline-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Party Makeup -->
            <div class="col-lg-4 col-md-6 service-card makeup" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top" alt="Party Makeup Services Mumbai">
                    <div class="card-body">
                        <div class="service-category mb-2">
                            <span class="badge bg-primary">Makeup</span>
                        </div>
                        <h4 class="card-title">Party & Event Makeup</h4>
                        <p class="card-text text-muted">
                            Stand out at every celebration with our stunning party makeup. Perfect for festivals, parties, corporate events, and special occasions.
                        </p>
                        <div class="service-features mb-3">
                            <small class="text-success"><i class="bi bi-check-circle me-1"></i>Glamorous Look</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Long-lasting</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Photo Ready</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="h5 text-primary mb-0">₹2,000+</span>
                                <small class="text-muted">/session</small>
                            </div>
                            <a href="inquiry.php?service=Party Makeup" class="btn btn-outline-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Acne Treatment -->
            <div class="col-lg-4 col-md-6 service-card skincare" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1616391182219-e080b4d1043a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top" alt="Acne Treatment Mumbai">
                    <div class="card-body">
                        <div class="service-category mb-2">
                            <span class="badge bg-success">Skincare</span>
                        </div>
                        <h4 class="card-title">Acne & Pigmentation Treatment</h4>
                        <p class="card-text text-muted">
                            Clear, healthy skin is achievable with our specialized acne and pigmentation treatments. Customized approach for all skin types and concerns.
                        </p>
                        <div class="service-features mb-3">
                            <small class="text-success"><i class="bi bi-check-circle me-1"></i>Acne Clear</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Scar Reduction</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Even Tone</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="h5 text-primary mb-0">₹2,200+</span>
                                <small class="text-muted">/session</small>
                            </div>
                            <a href="inquiry.php?service=Acne Treatment" class="btn btn-outline-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hair Styling -->
            <div class="col-lg-4 col-md-6 service-card makeup" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top" alt="Hair Styling Services Mumbai">
                    <div class="card-body">
                        <div class="service-category mb-2">
                            <span class="badge bg-secondary">Hair</span>
                            <span class="badge bg-primary ms-1">Styling</span>
                        </div>
                        <h4 class="card-title">Professional Hair Styling</h4>
                        <p class="card-text text-muted">
                            Complete your look with our professional hair styling services. From elegant updos to trendy blowouts, we create styles that complement your makeup.
                        </p>
                        <div class="service-features mb-3">
                            <small class="text-success"><i class="bi bi-check-circle me-1"></i>Updos</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Blowouts</small>
                            <small class="text-success ms-3"><i class="bi bi-check-circle me-1"></i>Curling</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="h5 text-primary mb-0">₹1,500+</span>
                                <small class="text-muted">/style</small>
                            </div>
                            <a href="inquiry.php?service=Hair Styling" class="btn btn-outline-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Service Packages -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Popular Service Packages</h2>
            <p class="lead text-muted">
                Save more with our curated service packages designed for different occasions and needs.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h4 class="mb-0">Bridal Complete Package</h4>
                        <div class="price-tag mt-2">
                            <span class="h2 mb-0">₹15,000</span>
                            <small>/package</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Pre-wedding Consultation</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Trial Makeup Session</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Wedding Day Makeup</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Hair Styling</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Touch-up Kit</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Pre-wedding Facial</li>
                        </ul>
                        <a href="inquiry.php?service=Bridal Complete Package" class="btn btn-primary w-100">Choose Package</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-success text-white text-center py-4">
                        <h4 class="mb-0">Glow Up Package</h4>
                        <div class="price-tag mt-2">
                            <span class="h2 mb-0">₹6,500</span>
                            <small>/package</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Skincare Consultation</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Deep Cleansing Facial</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Hydra Facial Treatment</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Professional Makeup</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Product Recommendations</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Home Care Kit</li>
                        </ul>
                        <a href="inquiry.php?service=Glow Up Package" class="btn btn-success w-100">Choose Package</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-warning text-white text-center py-4">
                        <h4 class="mb-0">Party Ready Package</h4>
                        <div class="price-tag mt-2">
                            <span class="h2 mb-0">₹4,000</span>
                            <small>/package</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Express Facial</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Party Makeup</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Hair Styling</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Nail Art (Basic)</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Touch-up Products</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Photo Session</li>
                        </ul>
                        <a href="inquiry.php?service=Party Ready Package" class="btn btn-warning w-100">Choose Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Our Services -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-4">Why Choose Glam Beauty Services?</h2>
                <p class="lead text-muted mb-4">
                    Experience the difference with Mumbai's most trusted beauty experts.
                </p>
                
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="bi bi-award"></i>
                            </div>
                            <div>
                                <h6>Certified Experts</h6>
                                <small class="text-muted">Professional certified makeup artists and skincare specialists</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h6>Premium Products</h6>
                                <small class="text-muted">Only authentic, high-quality products from trusted brands</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="bi bi-people"></i>
                            </div>
                            <div>
                                <h6>Personalized Care</h6>
                                <small class="text-muted">Customized treatments based on your unique needs</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div>
                                <h6>Flexible Timing</h6>
                                <small class="text-muted">Convenient scheduling to fit your busy Mumbai lifestyle</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     alt="Professional Beauty Services Mumbai" 
                     class="img-fluid rounded-4 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section bg-primary text-white">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-8" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-3">Ready to Book Your Beauty Session?</h2>
                <p class="lead mb-4">
                    Transform your look with Mumbai's most trusted beauty experts. Book your consultation today and discover the perfect services for your unique style.
                </p>
            </div>
            <div class="col-lg-4" data-aos="fade-left">
                <a href="inquiry.php" class="btn btn-light btn-lg mb-3 me-3">
                    <i class="bi bi-calendar-check me-2"></i>Book Now
                </a>
                <br class="d-lg-none">
                <a href="tel:+919876543210" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-telephone me-2"></i>Call Us
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
