// Glam Beauty - Simple JavaScript

// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form handling
    const contactForm = document.getElementById('inquiryForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            // Basic form validation
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const mobile = document.getElementById('mobile').value;
            
            if (name.length < 2) {
                alert('Please enter a valid name');
                e.preventDefault();
                return false;
            }
            
            if (!email.includes('@')) {
                alert('Please enter a valid email');
                e.preventDefault();
                return false;
            }
            
            if (mobile.length < 10) {
                alert('Please enter a valid mobile number');
                e.preventDefault();
                return false;
            }
        });
    }

    // Simple animation for stats (if exists)
    const statNumbers = document.querySelectorAll('.stat-number');
    if (statNumbers.length > 0) {
        const animateStats = () => {
            statNumbers.forEach(stat => {
                const target = parseInt(stat.textContent);
                let current = 0;
                const increment = target / 50;
                
                const updateStat = () => {
                    if (current < target) {
                        current += increment;
                        stat.textContent = Math.floor(current) + '+';
                        setTimeout(updateStat, 20);
                    } else {
                        stat.textContent = target + '+';
                    }
                };
                
                updateStat();
            });
        };
        
        // Trigger animation when stats section is visible
        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateStats();
                        observer.unobserve(entry.target);
                    }
                });
            });
            observer.observe(statsSection);
        }
    }
});
