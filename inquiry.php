<?php
/**
 * Inquiry Form Page - Glam Beauty
 * Contact & Consultation Booking
 */

// Include database configuration (MySQL with XAMPP)
include 'includes/db_config.php';

// Initialize variables
$success_message = '';
$error_message = '';
$form_data = [
    'name' => '',
    'email' => '',
    'mobile' => '',
    'service' => '',
    'message' => ''
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize form data
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $mobile = sanitizeInput($_POST['mobile'] ?? '');
    $service = sanitizeInput($_POST['service'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');
    
    // Store form data for repopulation if there are errors
    $form_data = compact('name', 'email', 'mobile', 'service', 'message');
    
    // Validation
    $errors = [];
    
    if (strlen($name) < 2) {
        $errors[] = 'Name must be at least 2 characters long';
    }
    
    if (!validateEmail($email)) {
        $errors[] = 'Please enter a valid email address';
    }
    
    if (!validateMobile($mobile)) {
        $errors[] = 'Please enter a valid Indian mobile number';
    }
    
    if (empty($service)) {
        $errors[] = 'Please select a service';
    }
    
    if (strlen($message) < 10) {
        $errors[] = 'Message must be at least 10 characters long';
    }
    
    // If AJAX request, return JSON response
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        
        if (!empty($errors)) {
            echo json_encode(['success' => false, 'message' => implode('<br>', $errors)]);
        } else {
            // Insert into database
            try {
                $conn = getConnection();
                $stmt = $conn->prepare("INSERT INTO inquiries (name, email, mobile, service, message, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
                $stmt->bind_param("sssss", $name, $email, $mobile, $service, $message);
                
                if ($stmt->execute()) {
                    echo json_encode(['success' => true, 'message' => 'Thank you! Your inquiry has been submitted successfully. We will contact you within 24 hours.']);
                } else {
                    echo json_encode(['success' => false, 'message' => 'Sorry, there was an error submitting your inquiry. Please try again.']);
                }
                
                $stmt->close();
                closeConnection($conn);
            } catch (Exception $e) {
                echo json_encode(['success' => false, 'message' => 'Sorry, we are experiencing technical difficulties. Please try again later.']);
            }
        }
        exit;
    }
    
    // Regular form submission (non-AJAX)
    if (!empty($errors)) {
        $error_message = implode('<br>', $errors);
    } else {
        // Insert into database
        try {
            $conn = getConnection();
            $stmt = $conn->prepare("INSERT INTO inquiries (name, email, mobile, service, message, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
            $stmt->bind_param("sssss", $name, $email, $mobile, $service, $message);
            
            if ($stmt->execute()) {
                $success_message = 'Thank you! Your inquiry has been submitted successfully. We will contact you within 24 hours.';
                // Clear form data on success
                $form_data = ['name' => '', 'email' => '', 'mobile' => '', 'service' => '', 'message' => ''];
            } else {
                $error_message = 'Sorry, there was an error submitting your inquiry. Please try again.';
            }
            
            $stmt->close();
            closeConnection($conn);
        } catch (Exception $e) {
            $error_message = 'Sorry, we are experiencing technical difficulties. Please try again later.';
        }
    }
}

// Get pre-selected service from URL parameter
$preselected_service = sanitizeInput($_GET['service'] ?? '');
if ($preselected_service && empty($form_data['service'])) {
    $form_data['service'] = $preselected_service;
}

// Page configuration
$page_title = 'Contact Glam Beauty - Book Beauty Consultation in Mumbai | Inquiry Form';
$page_description = 'Contact Glam Beauty for professional beauty consultation, makeup services, and skincare treatments in Mumbai. Book your appointment online or call us directly.';
$page_keywords = 'contact Glam Beauty, book beauty consultation Mumbai, makeup appointment, skincare consultation booking, beauty services inquiry';
$current_page = 'inquiry';

// Include header
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-3">Contact & Book Consultation</h1>
                <p class="lead mb-0">
                    Ready to transform your beauty routine? Get in touch with Mumbai's most trusted beauty experts for personalized consultation and services.
                </p>
            </div>
            <div class="col-lg-4" data-aos="fade-left">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-warning" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="section bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-card text-center h-100">
                    <div class="contact-icon bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                        <i class="bi bi-geo-alt fs-3"></i>
                    </div>
                    <h5>Visit Our Store</h5>
                    <p class="text-muted mb-0">
                        123 Fashion Street, Bandra West<br>
                        Mumbai, Maharashtra - 400050
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-card text-center h-100">
                    <div class="contact-icon bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                        <i class="bi bi-telephone fs-3"></i>
                    </div>
                    <h5>Call Us</h5>
                    <p class="text-muted mb-2">
                        <a href="tel:+919876543210" class="text-decoration-none">+91-9876543210</a><br>
                        <small>Mon-Sat: 10AM-8PM | Sun: 11AM-7PM</small>
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-card text-center h-100">
                    <div class="contact-icon bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                        <i class="bi bi-envelope fs-3"></i>
                    </div>
                    <h5>Email Us</h5>
                    <p class="text-muted mb-0">
                        <a href="mailto:info@glambeauty.com" class="text-decoration-none">info@glambeauty.com</a><br>
                        <small>We reply within 2 hours</small>
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="contact-info-card text-center h-100">
                    <div class="contact-icon bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                        <i class="bi bi-whatsapp fs-3"></i>
                    </div>
                    <h5>WhatsApp</h5>
                    <p class="text-muted mb-0">
                        <a href="https://wa.me/919876543210" class="text-decoration-none" target="_blank">+91-9876543210</a><br>
                        <small>Quick response guaranteed</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inquiry Form Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center" data-aos="fade-up">
                    <h2 class="display-5 fw-bold">Book Your Free Consultation</h2>
                    <p class="lead text-muted">
                        Fill out the form below and our beauty experts will contact you within 24 hours to schedule your personalized consultation.
                    </p>
                </div>
                
                <!-- Alert Container -->
                <div id="alertContainer" class="mb-4">
                    <?php if ($success_message): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-2"></i><?php echo $success_message; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($error_message): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle me-2"></i><?php echo $error_message; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Inquiry Form -->
                <div class="card border-0 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body p-5">
                        <form id="inquiryForm" method="POST" novalidate>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" 
                                           value="<?php echo htmlspecialchars($form_data['name']); ?>" 
                                           placeholder="Enter your full name" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           value="<?php echo htmlspecialchars($form_data['email']); ?>" 
                                           placeholder="your.email@example.com" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="mobile" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" 
                                           value="<?php echo htmlspecialchars($form_data['mobile']); ?>" 
                                           placeholder="+91 98765 43210" required>
                                    <small class="form-text text-muted">We'll use this to confirm your appointment</small>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="service" class="form-label">Service Interested In <span class="text-danger">*</span></label>
                                    <select class="form-control" id="service" name="service" required>
                                        <option value="">Choose a service...</option>
                                        <optgroup label="Makeup Services">
                                            <option value="Professional Makeup" <?php echo ($form_data['service'] == 'Professional Makeup') ? 'selected' : ''; ?>>Professional Makeup</option>
                                            <option value="Bridal Makeup" <?php echo ($form_data['service'] == 'Bridal Makeup') ? 'selected' : ''; ?>>Bridal Makeup</option>
                                            <option value="Party Makeup" <?php echo ($form_data['service'] == 'Party Makeup') ? 'selected' : ''; ?>>Party Makeup</option>
                                        </optgroup>
                                        <optgroup label="Skincare Services">
                                            <option value="Facial Treatment" <?php echo ($form_data['service'] == 'Facial Treatment') ? 'selected' : ''; ?>>Facial Treatment</option>
                                            <option value="Skincare Consultation" <?php echo ($form_data['service'] == 'Skincare Consultation') ? 'selected' : ''; ?>>Skincare Consultation</option>
                                            <option value="Anti-Aging Treatment" <?php echo ($form_data['service'] == 'Anti-Aging Treatment') ? 'selected' : ''; ?>>Anti-Aging Treatment</option>
                                            <option value="Acne Treatment" <?php echo ($form_data['service'] == 'Acne Treatment') ? 'selected' : ''; ?>>Acne Treatment</option>
                                        </optgroup>
                                        <optgroup label="Service Packages">
                                            <option value="Bridal Complete Package" <?php echo ($form_data['service'] == 'Bridal Complete Package') ? 'selected' : ''; ?>>Bridal Complete Package</option>
                                            <option value="Glow Up Package" <?php echo ($form_data['service'] == 'Glow Up Package') ? 'selected' : ''; ?>>Glow Up Package</option>
                                            <option value="Party Ready Package" <?php echo ($form_data['service'] == 'Party Ready Package') ? 'selected' : ''; ?>>Party Ready Package</option>
                                        </optgroup>
                                        <optgroup label="Other Services">
                                            <option value="Product Consultation" <?php echo ($form_data['service'] == 'Product Consultation') ? 'selected' : ''; ?>>Product Consultation</option>
                                            <option value="Hair Styling" <?php echo ($form_data['service'] == 'Hair Styling') ? 'selected' : ''; ?>>Hair Styling</option>
                                            <option value="General Inquiry" <?php echo ($form_data['service'] == 'General Inquiry') ? 'selected' : ''; ?>>General Inquiry</option>
                                        </optgroup>
                                    </select>
                                </div>
                                
                                <div class="col-12">
                                    <label for="message" class="form-label">Your Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="5" 
                                              placeholder="Tell us about your beauty goals, preferred appointment time, or any specific requirements..." required><?php echo htmlspecialchars($form_data['message']); ?></textarea>
                                    <small class="form-text text-muted">Minimum 10 characters required</small>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="privacy" required>
                                        <label class="form-check-label" for="privacy">
                                            I agree to the <a href="privacy.php" target="_blank">Privacy Policy</a> and <a href="terms.php" target="_blank">Terms & Conditions</a> <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="updates">
                                        <label class="form-check-label" for="updates">
                                            I would like to receive updates about new services, offers, and beauty tips via email/SMS
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="bi bi-send me-2"></i>Submit Inquiry
                                    </button>
                                    <p class="mt-3 mb-0 text-muted">
                                        <small><i class="bi bi-shield-check me-1"></i>Your information is secure and will never be shared with third parties</small>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Contact Options -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Prefer to Talk Directly?</h2>
            <p class="lead text-muted">
                Choose your preferred way to connect with our beauty experts.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="contact-icon bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-telephone fs-4"></i>
                        </div>
                        <h5>Call Now</h5>
                        <p class="text-muted mb-3">Speak directly with our beauty consultants</p>
                        <a href="tel:+919876543210" class="btn btn-success">
                            <i class="bi bi-telephone me-2"></i>+91-9876543210
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="contact-icon bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-whatsapp fs-4"></i>
                        </div>
                        <h5>WhatsApp Chat</h5>
                        <p class="text-muted mb-3">Quick responses and easy scheduling</p>
                        <a href="https://wa.me/919876543210?text=Hi! I'm interested in your beauty services." target="_blank" class="btn btn-success">
                            <i class="bi bi-whatsapp me-2"></i>Chat Now
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="contact-icon bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-geo-alt fs-4"></i>
                        </div>
                        <h5>Visit Store</h5>
                        <p class="text-muted mb-3">Experience our services in person</p>
                        <a href="https://maps.google.com/?q=123+Fashion+Street,+Bandra+West,+Mumbai" target="_blank" class="btn btn-primary">
                            <i class="bi bi-geo-alt me-2"></i>Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
            <p class="lead text-muted">
                Get quick answers to common questions about our services and booking process.
            </p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="200">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How do I book an appointment?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can book an appointment by filling out the inquiry form above, calling us at +91-9876543210, or messaging us on WhatsApp. We'll confirm your appointment within a few hours and send you all the details.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Is the consultation really free?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! Our initial beauty consultation is completely free. This includes skin analysis, product recommendations, and discussing your beauty goals. We only charge for actual treatments and services.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What should I bring for my appointment?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Just bring yourself! We provide all necessary products and tools. For bridal consultations, you may want to bring inspiration photos. For skincare consultations, please come with clean skin (no makeup).
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Do you offer home services?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer home services for bridal makeup, party makeup, and certain skincare treatments within Mumbai. Additional charges apply for travel. Please mention this when booking.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What payment methods do you accept?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We accept cash, all major credit/debit cards, UPI payments (Google Pay, PhonePe, Paytm), and net banking. For package bookings, we also offer flexible payment plans.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
