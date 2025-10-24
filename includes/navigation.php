<?php
/**
 * Navigation Include File
 * Glam Beauty - Premium Cosmetic Store
 */
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <!-- Brand Logo -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="assets/images/logo.png" alt="Glam Beauty Logo" height="40" class="me-2">
            <span class="brand-text fw-bold">Glam Beauty</span>
        </a>

        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-4">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>" href="index.php">
                        <i class="bi bi-house-door me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>" href="about.php">
                        <i class="bi bi-people me-1"></i>About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'services') ? 'active' : ''; ?>" href="services.php">
                        <i class="bi bi-palette me-1"></i>Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'inquiry') ? 'active' : ''; ?>" href="inquiry.php">
                        <i class="bi bi-envelope me-1"></i>Contact
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-info-circle me-1"></i>More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php echo ($current_page == 'sitemap') ? 'active' : ''; ?>" href="sitemap.php">
                            <i class="bi bi-diagram-3 me-2"></i>Sitemap
                        </a></li>
                        <li><a class="dropdown-item <?php echo ($current_page == 'terms') ? 'active' : ''; ?>" href="terms.php">
                            <i class="bi bi-file-text me-2"></i>Terms & Conditions
                        </a></li>
                        <li><a class="dropdown-item <?php echo ($current_page == 'privacy') ? 'active' : ''; ?>" href="privacy.php">
                            <i class="bi bi-shield-check me-2"></i>Privacy Policy
                        </a></li>
                    </ul>
                </li>
            </ul>

            <!-- CTA Buttons -->
            <div class="d-flex align-items-center">
                <a href="tel:+919876543210" class="btn btn-outline-primary me-2 d-none d-lg-block">
                    <i class="bi bi-telephone me-1"></i>Call Now
                </a>
                <a href="inquiry.php" class="btn btn-primary">
                    <i class="bi bi-calendar-check me-1"></i>Book Consultation
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Top Info Bar (Optional) -->
<div class="top-info-bar bg-primary text-white py-2 d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <small>
                    <i class="bi bi-geo-alt me-1"></i>123 Fashion Street, Bandra West, Mumbai - 400050
                </small>
            </div>
            <div class="col-md-6 text-end">
                <small>
                    <i class="bi bi-clock me-1"></i>Mon-Sat: 10AM-8PM | Sun: 11AM-7PM
                    <span class="ms-3">
                        <i class="bi bi-envelope me-1"></i>info@glambeauty.com
                    </span>
                </small>
            </div>
        </div>
    </div>
</div>
