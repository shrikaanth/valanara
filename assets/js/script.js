// Initialize Lucide icons
document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();
    
    // Initialize animations and interactions
    initializeAnimations();
    initializeParticles();
    initializeScrollEffects();
});

// Initialize hero animation
function initializeAnimations() {
    const heroContent = document.getElementById('heroContent');
    
    // Trigger hero animation after a short delay
    setTimeout(() => {
        heroContent.classList.add('visible');
    }, 100);
}

// Create animated background particles
function initializeParticles() {
    const particlesContainer = document.getElementById('particles');
    const particleCount = 50;
    
    for (let i = 0; i < particleCount; i++) {
        createParticle(particlesContainer);
    }
}

function createParticle(container) {
    const particle = document.createElement('div');
    particle.className = 'particle';
    
    // Random position
    particle.style.left = Math.random() * 100 + '%';
    particle.style.top = Math.random() * 100 + '%';
    
    // Random animation delay and duration
    particle.style.animationDelay = Math.random() * 3 + 's';
    particle.style.animationDuration = (2 + Math.random() * 3) + 's';
    
    container.appendChild(particle);
}

// Initialize scroll effects
function initializeScrollEffects() {
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe elements for scroll animations
    const animatedElements = document.querySelectorAll('.feature-card, .step-card, .testimonial-card, .stat-card');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}

// Smooth scrolling for anchor links
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

// Button click handlers
document.addEventListener('click', function(e) {
    // Handle CTA buttons
    if (e.target.matches('.primary-button, .cta-button, .nav-button')) {
        handleCTAClick(e.target);
    }
    
    // Handle secondary button
    if (e.target.matches('.secondary-button')) {
        handleDemoClick();
    }
});

function handleCTAClick(button) {
    // Add click animation
    button.style.transform = 'scale(0.95)';
    setTimeout(() => {
        button.style.transform = '';
    }, 150);
    
    // Here you would typically redirect to signup/registration
    console.log('CTA clicked - redirect to signup');
    
    // For demo purposes, show an alert
    alert('Welcome to Mysteria AI! Sign up functionality would be implemented here.');
}

function handleDemoClick() {
    // Here you would typically open a demo video or modal
    console.log('Demo clicked');
    
    // For demo purposes, show an alert
    alert('Demo video would play here!');
}

// Add hover effects for interactive elements
document.addEventListener('mouseover', function(e) {
    if (e.target.matches('.feature-card, .testimonial-card, .step-card')) {
        e.target.style.transform = 'translateY(-8px)';
    }
});

document.addEventListener('mouseout', function(e) {
    if (e.target.matches('.feature-card, .testimonial-card, .step-card')) {
        e.target.style.transform = '';
    }
});

// Parallax effect for background
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('.background-particles');
    
    parallaxElements.forEach(element => {
        const speed = 0.5;
        element.style.transform = `translateY(${scrolled * speed}px)`;
    });
});

// Add typing effect to hero title (optional enhancement)
function addTypingEffect() {
    const titleElement = document.querySelector('.hero-title');
    const originalText = titleElement.innerHTML;
    titleElement.innerHTML = '';
    
    let i = 0;
    const typeWriter = () => {
        if (i < originalText.length) {
            titleElement.innerHTML += originalText.charAt(i);
            i++;
            setTimeout(typeWriter, 50);
        }
    };
    
    // Uncomment to enable typing effect
    // setTimeout(typeWriter, 1000);
}

// Performance optimization: Throttle scroll events
function throttle(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Apply throttling to scroll events
const throttledScrollHandler = throttle(function() {
    // Scroll-based animations can be added here
}, 16); // ~60fps

window.addEventListener('scroll', throttledScrollHandler);

// Add loading animation
window.addEventListener('load', function() {
    document.body.classList.add('loaded');
    
    // Remove any loading screens if present
    const loader = document.querySelector('.loader');
    if (loader) {
        loader.style.opacity = '0';
        setTimeout(() => loader.remove(), 500);
    }
});

// Handle form submissions (if any forms are added)
document.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Handle form submission
    const formData = new FormData(e.target);
    console.log('Form submitted:', Object.fromEntries(formData));
    
    // Show success message
    showNotification('Thank you for your interest! We\'ll be in touch soon.');
});

// Utility function to show notifications
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    
    // Style the notification
    Object.assign(notification.style, {
        position: 'fixed',
        top: '20px',
        right: '20px',
        background: type === 'success' ? '#10b981' : '#ef4444',
        color: 'white',
        padding: '1rem 1.5rem',
        borderRadius: '0.5rem',
        zIndex: '1000',
        opacity: '0',
        transform: 'translateX(100%)',
        transition: 'all 0.3s ease'
    });
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.opacity = '1';
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Add keyboard navigation support
document.addEventListener('keydown', function(e) {
    // Handle escape key to close any modals
    if (e.key === 'Escape') {
        const modals = document.querySelectorAll('.modal.active');
        modals.forEach(modal => modal.classList.remove('active'));
    }
    
    // Handle enter key on buttons
    if (e.key === 'Enter' && e.target.matches('button')) {
        e.target.click();
    }
});

// Add accessibility improvements
function improveAccessibility() {
    // Add focus indicators for keyboard navigation
    const focusableElements = document.querySelectorAll('button, a, input, textarea, select');
    
    focusableElements.forEach(element => {
        element.addEventListener('focus', function() {
            this.style.outline = '2px solid #f472b6';
            this.style.outlineOffset = '2px';
        });
        
        element.addEventListener('blur', function() {
            this.style.outline = '';
            this.style.outlineOffset = '';
        });
    });
}

// Initialize accessibility improvements
improveAccessibility();

// Add resize handler for responsive adjustments
window.addEventListener('resize', throttle(function() {
    // Handle responsive adjustments
    const isMobile = window.innerWidth < 768;
    
    // Adjust particle count based on screen size
    if (isMobile) {
        const particles = document.querySelectorAll('.particle');
        particles.forEach((particle, index) => {
            if (index > 20) {
                particle.style.display = 'none';
            }
        });
    }
}, 250));

// Add touch support for mobile devices
if ('ontouchstart' in window) {
    document.addEventListener('touchstart', function() {
        document.body.classList.add('touch-device');
    });
}

// Initialize everything when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeApp);
} else {
    initializeApp();
}

function initializeApp() {
    console.log('Mysteria AI Landing Page Initialized');
    
    // Add any final initialization code here
    setTimeout(() => {
        document.body.classList.add('app-ready');
    }, 100);
}