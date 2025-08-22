// Modern JavaScript for Onepage Template
class OnepageTemplate {
    constructor() {
        this.init();
    }

    init() {
        this.setupSmoothScrolling();
        this.setupFormHandling();
        this.setupImageGallery();
        this.setupMobileMenu();
        this.setupAnimations();
    }

    // Smooth scrolling for navigation links
    setupSmoothScrolling() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = link.getAttribute('href');
                const target = document.querySelector(targetId);
                
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Modern form handling with fetch API
    setupFormHandling() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                
                const submitBtn = form.querySelector('input[type="submit"]');
                const originalText = submitBtn.value;
                
                try {
                    // Show loading state
                    submitBtn.value = 'Sending...';
                    submitBtn.disabled = true;
                    
                    // Add CSRF token if not present
                    if (!form.querySelector('input[name="csrf_token"]')) {
                        const csrfInput = document.createElement('input');
                        csrfInput.type = 'hidden';
                        csrfInput.name = 'csrf_token';
                        csrfInput.value = this.getCsrfToken();
                        form.appendChild(csrfInput);
                    }
                    
                    const formData = new FormData(form);
                    const response = await fetch(form.action, {
                        method: 'POST',
                        body: formData
                    });
                    
                    const result = await response.json();
                    
                    if (result.success) {
                        this.showNotification(result.message, 'success');
                        form.reset();
                    } else {
                        this.showNotification(result.message, 'error');
                    }
                    
                } catch (error) {
                    console.error('Form submission error:', error);
                    this.showNotification('An error occurred. Please try again.', 'error');
                } finally {
                    // Reset button state
                    submitBtn.value = originalText;
                    submitBtn.disabled = false;
                }
            });
        });
    }

    // Modern image gallery (replaces Fancybox)
    setupImageGallery() {
        const galleryImages = document.querySelectorAll('.fancybox-effects-d');
        
        galleryImages.forEach(img => {
            img.addEventListener('click', (e) => {
                e.preventDefault();
                this.openLightbox(img.href, img.title);
            });
        });
    }

    // Custom lightbox implementation
    openLightbox(imageSrc, title) {
        const lightbox = document.createElement('div');
        lightbox.className = 'lightbox';
        lightbox.innerHTML = `
            <div class="lightbox-content">
                <span class="lightbox-close">&times;</span>
                <img src="${imageSrc}" alt="${title || 'Gallery Image'}">
                ${title ? `<div class="lightbox-title">${title}</div>` : ''}
            </div>
        `;
        
        document.body.appendChild(lightbox);
        
        // Close functionality
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.classList.contains('lightbox-close')) {
                lightbox.remove();
            }
        });
        
        // Keyboard support
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                lightbox.remove();
            }
        });
    }

    // Mobile menu functionality
    setupMobileMenu() {
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const navigation = document.querySelector('.ca-menu');
        
        if (menuToggle && navigation) {
            menuToggle.addEventListener('click', () => {
                navigation.classList.toggle('mobile-open');
                menuToggle.classList.toggle('active');
            });
        }
    }

    // Intersection Observer for animations
    setupAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        const animateElements = document.querySelectorAll('.ca-content, .aboutsub, .sitems li, .sdimg, .portcont img');
        animateElements.forEach(el => observer.observe(el));
    }

    // Utility functions
    getCsrfToken() {
        // Get CSRF token from meta tag or data attribute
        const metaTag = document.querySelector('meta[name="csrf-token"]');
        return metaTag ? metaTag.getAttribute('content') : '';
    }

    showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Auto-remove after 5 seconds
        setTimeout(() => {
            notification.remove();
        }, 5000);
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new OnepageTemplate();
});

// Export for potential module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = OnepageTemplate;
}
