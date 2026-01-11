// Mobile Navigation Toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamburger.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        hamburger.classList.remove('active');
    });
});

// Smooth Scrolling
document.querySelectorAll('a[href*="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        const hashIndex = href.indexOf('#');
        
        // If link contains a path before the hash, check if it's a different page
        if (hashIndex > 0) {
            const pathPart = href.substring(0, hashIndex);
            const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
            
            // If path is different or not empty, let browser navigate normally
            if (pathPart && pathPart !== currentPath && pathPart !== '') {
                // Link is to a different page, let browser handle navigation
                return true;
            }
        }
        
        // If it's just an anchor on the same page, handle smooth scroll
        if (hashIndex >= 0) {
            const hash = href.substring(hashIndex);
            const target = document.querySelector(hash);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// Scroll to anchor on page load if URL contains hash
window.addEventListener('load', function() {
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            setTimeout(() => {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }, 100);
        }
    }
});

// Navbar background on scroll
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.background = 'rgba(255, 255, 255, 0.98)';
        navbar.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
    } else {
        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        navbar.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
    }
});

// Typing Animation (removed - no longer needed with new hero design)

// Skill Bar Animation
const skillBars = document.querySelectorAll('.skill-progress');
const skillObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const width = entry.target.getAttribute('data-width');
            entry.target.style.width = width + '%';
            entry.target.classList.add('animated');
        }
    });
}, {
    threshold: 0.5
});

skillBars.forEach(bar => {
    skillObserver.observe(bar);
});

// Contact Form Handling with Notification Modal
const contactForm = document.getElementById('contactForm');
const formMessage = document.getElementById('form-message');

if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(contactForm);
        const submitButton = contactForm.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.innerHTML;

        // Disable submit button
        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

        try {
            // Get the correct path to send_email.php
            const formAction = contactForm.getAttribute('action');
            let emailEndpoint = formAction || 'send_email.php';

            // Fix the path if it doesn't end with .php
            if (emailEndpoint.includes('send_email') && !emailEndpoint.endsWith('.php')) {
                emailEndpoint = emailEndpoint.replace('send_email', 'send_email.php');
            }

            const response = await fetch(emailEndpoint, {
                method: 'POST',
                body: formData
            });

            // Parse JSON response
            const contentType = response.headers.get('content-type');
            let result;

            if (contentType && contentType.includes('application/json')) {
                result = await response.json();
            } else {
                const text = await response.text();
                try {
                    result = JSON.parse(text);
                } catch (e) {
                    throw new Error(text || 'Invalid response from server');
                }
            }

            // Show notification modal
            showNotification(result.success, result.message || 'Message sent successfully!');

            if (result.success) {
                contactForm.reset();
            }

        } catch (error) {
            showNotification(false, error.message || 'Error sending message. Please try again.');
            console.error('Error:', error);
        } finally {
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
        }
    });
}

// Notification Modal Function
function showNotification(success, message) {
    // Remove existing notification if any
    const existing = document.getElementById('notification-modal');
    if (existing) {
        existing.remove();
    }

    // Create notification modal
    const modal = document.createElement('div');
    modal.id = 'notification-modal';
    modal.className = success ? 'notification success' : 'notification error';

    const icon = success ? '<i class="fas fa-check-circle"></i>' : '<i class="fas fa-exclamation-circle"></i>';

    modal.innerHTML = `
        <div class="notification-content">
            <div class="notification-icon">${icon}</div>
            <div class="notification-message">${message}</div>
            <button class="notification-close" onclick="this.parentElement.parentElement.remove()">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;

    document.body.appendChild(modal);

    // Show animation
    setTimeout(() => {
        modal.classList.add('show');
    }, 10);

    // Auto remove after 5 seconds for success, 7 seconds for error
    setTimeout(() => {
        modal.classList.remove('show');
        setTimeout(() => {
            if (modal.parentElement) {
                modal.remove();
            }
        }, 300);
    }, success ? 5000 : 7000);
}

// Intersection Observer for fade-in animations
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

// Observe all sections
document.querySelectorAll('section').forEach(section => {
    section.style.opacity = '0';
    section.style.transform = 'translateY(20px)';
    section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(section);
});

// Animate skill cards on scroll
const skillCards = document.querySelectorAll('.skill-card');
const cardObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }, index * 100);
        }
    });
}, {
    threshold: 0.2
});

skillCards.forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    cardObserver.observe(card);
});

// Animate project cards on scroll
const projectCards = document.querySelectorAll('.project-card');
const projectObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }, index * 150);
        }
    });
}, {
    threshold: 0.2
});

projectCards.forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    projectObserver.observe(card);
});

// Counter Animation for Facts
const factNumbers = document.querySelectorAll('.fact-number');
const factObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
            entry.target.classList.add('counted');
            const target = parseInt(entry.target.getAttribute('data-target'));
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    entry.target.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    entry.target.textContent = target;
                }
            };

            updateCounter();
        }
    });
}, {
    threshold: 0.5
});

factNumbers.forEach(fact => {
    factObserver.observe(fact);
});

// Counter Animation for Stats
const statNumbers = document.querySelectorAll('.stat-number');
const statObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
            entry.target.classList.add('counted');
            const target = entry.target.textContent;
            const isPercentage = target.includes('%');
            const number = parseInt(target.replace(/\D/g, ''));
            const duration = 2000;
            const increment = number / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < number) {
                    entry.target.textContent = Math.floor(current) + (isPercentage ? '+' : '+');
                    requestAnimationFrame(updateCounter);
                } else {
                    entry.target.textContent = target;
                }
            };

            updateCounter();
        }
    });
}, {
    threshold: 0.5
});

statNumbers.forEach(stat => {
    statObserver.observe(stat);
});

// FAQ Accordion
const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        const faqItem = question.parentElement;
        const faqAnswer = faqItem.querySelector('.faq-answer');
        const isActive = faqItem.classList.contains('active');

        // Close all FAQ items
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
            item.querySelector('.faq-answer').classList.remove('active');
        });

        // Open clicked item if it wasn't active
        if (!isActive) {
            faqItem.classList.add('active');
            faqAnswer.classList.add('active');
        }
    });
});

// Parallax Effect on Scroll
let parallaxElements = document.querySelectorAll('.parallax, .package-visual');

window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;

    parallaxElements.forEach(element => {
        if (element) {
            const rate = scrolled * 0.5;
            const rect = element.getBoundingClientRect();
            const elementTop = rect.top + window.pageYOffset;

            if (scrolled + window.innerHeight > elementTop && scrolled < elementTop + rect.height) {
                element.style.transform = `translateY(${rate * 0.1}px)`;
            }
        }
    });
});

// Create Particle Background
function createParticles() {
    const particlesContainer = document.createElement('div');
    particlesContainer.className = 'particles';
    document.body.appendChild(particlesContainer);

    const particleCount = 50;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';

        const size = Math.random() * 4 + 2;
        const x = Math.random() * 100;
        const y = Math.random() * 100;
        const delay = Math.random() * 15;
        const duration = Math.random() * 10 + 10;

        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        particle.style.left = x + '%';
        particle.style.top = y + '%';
        particle.style.animationDelay = delay + 's';
        particle.style.animationDuration = duration + 's';

        particlesContainer.appendChild(particle);
    }
}

// Initialize particles
createParticles();

// Advanced Scroll Animations
const scrollObserverOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('animated');

                // Add specific animation classes based on element
                if (entry.target.classList.contains('skill-card')) {
                    entry.target.style.animation = 'scaleIn 0.6s ease forwards';
                } else if (entry.target.classList.contains('project-card')) {
                    entry.target.style.animation = 'fadeInUp 0.8s ease forwards';
                } else if (entry.target.classList.contains('package-detail-wrapper')) {
                    entry.target.style.animation = 'slideInLeft 0.8s ease forwards';
                }
            }, index * 100);
        }
    });
}, scrollObserverOptions);

// Observe all animatable elements (excluding packages initially to ensure they're visible)
document.querySelectorAll('.skill-card, .project-card, .about-text, .contact-item').forEach(el => {
    el.classList.add('animate-on-scroll');
    scrollObserver.observe(el);
});

// Observe packages separately with different settings
const packageObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                entry.target.style.visibility = 'visible';
            }, index * 150);
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
});

document.querySelectorAll('.package-detail-wrapper').forEach(package => {
    package.style.opacity = '1';
    package.style.visibility = 'visible';
    package.style.transform = 'translateY(0)';
    package.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    // Still observe for animation but don't hide initially
    packageObserver.observe(package);
});

// Mouse Move Parallax Effect (for portfolio items)
document.addEventListener('mousemove', (e) => {
    const mouseX = e.clientX / window.innerWidth;
    const mouseY = e.clientY / window.innerHeight;

    // Apply subtle parallax to portfolio items
    document.querySelectorAll('.portfolio-item').forEach((item, index) => {
        const speed = (index % 3) * 0.5;
        item.style.transform = `translate(${mouseX * speed}px, ${mouseY * speed}px)`;
    });
});

// Animated Counter with Easing
function animateCounter(element, target, duration = 2000) {
    const start = 0;
    const increment = target / (duration / 16);
    let current = start;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target;
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current);
        }
    }, 16);
}

// Enhanced Stat Counter Animation
const enhancedStatObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
            entry.target.classList.add('counted');
            const text = entry.target.textContent;
            const isPercentage = text.includes('%');
            const number = parseInt(text.replace(/\D/g, ''));
            const suffix = text.replace(/\d/g, '');

            let current = 0;
            const increment = number / 60;
            const timer = setInterval(() => {
                current += increment;
                if (current >= number) {
                    entry.target.textContent = text;
                    clearInterval(timer);
                } else {
                    entry.target.textContent = Math.floor(current) + suffix;
                }
            }, 30);
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.stat-number').forEach(stat => {
    enhancedStatObserver.observe(stat);
});

// Stagger Animation for Lists
function staggerAnimation(elements, delay = 100) {
    elements.forEach((el, index) => {
        setTimeout(() => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease';

            setTimeout(() => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, 50);
        }, index * delay);
    });
}

// Apply stagger animation to feature lists
document.querySelectorAll('.package-features-list li, .package-features-visual .feature-item-visual').forEach(list => {
    const items = Array.from(list.parentElement.children);
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                staggerAnimation(items, 50);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    if (items.length > 0) {
        observer.observe(items[0].parentElement);
    }
});

// Cursor Trail Effect (Optional - can be disabled for performance)
let cursorTrail = [];
const maxTrailLength = 10;

document.addEventListener('mousemove', (e) => {
    if (window.innerWidth > 768) { // Only on desktop
        const trail = document.createElement('div');
        trail.style.position = 'fixed';
        trail.style.width = '10px';
        trail.style.height = '10px';
        trail.style.borderRadius = '50%';
        trail.style.background = 'rgba(99, 102, 241, 0.5)';
        trail.style.pointerEvents = 'none';
        trail.style.left = e.clientX + 'px';
        trail.style.top = e.clientY + 'px';
        trail.style.zIndex = '9999';
        trail.style.transition = 'opacity 0.3s ease';
        document.body.appendChild(trail);

        cursorTrail.push(trail);

        if (cursorTrail.length > maxTrailLength) {
            const oldTrail = cursorTrail.shift();
            oldTrail.style.opacity = '0';
            setTimeout(() => oldTrail.remove(), 300);
        }

        setTimeout(() => {
            trail.style.opacity = '0';
            setTimeout(() => trail.remove(), 300);
        }, 500);
    }
});

// Smooth reveal animation for sections (excluding packages section)
const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('section').forEach(section => {
    // Don't hide packages section initially
    if (!section.classList.contains('packages')) {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        sectionObserver.observe(section);
    } else {
        // Packages section should be visible immediately
        section.style.opacity = '1';
        section.style.transform = 'translateY(0)';
    }
});

// Button Ripple Effect
document.querySelectorAll('.btn, .btn-contact-us, .btn-package').forEach(button => {
    button.addEventListener('click', function (e) {
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.style.position = 'absolute';
        ripple.style.borderRadius = '50%';
        ripple.style.background = 'rgba(255, 255, 255, 0.5)';
        ripple.style.transform = 'scale(0)';
        ripple.style.animation = 'ripple 0.6s ease-out';
        ripple.style.pointerEvents = 'none';

        this.style.position = 'relative';
        this.style.overflow = 'hidden';
        this.appendChild(ripple);

        setTimeout(() => ripple.remove(), 600);
    });
});

// Add ripple animation
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Animate on load
window.addEventListener('load', () => {
    document.body.style.opacity = '0';
    setTimeout(() => {
        document.body.style.transition = 'opacity 0.5s ease';
        document.body.style.opacity = '1';
    }, 100);
});

function openModal(src) {
    document.getElementById('imageModal').style.display = 'flex';
    document.getElementById('modalImg').src = src;
}

function closeModal() {
    document.getElementById('imageModal').style.display = 'none';
}

// Portfolio Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');
    const noResults = document.getElementById('noResults');
    const portfolioGrid = document.getElementById('portfolioGrid');

    if (filterButtons.length > 0 && portfolioCards.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');
                let visibleCount = 0;

                portfolioCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    
                    if (filterValue === 'all' || cardCategory === filterValue) {
                        card.classList.remove('hidden');
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.classList.add('hidden');
                        card.style.display = 'none';
                    }
                });

                // Show/hide no results message
                if (noResults) {
                    if (visibleCount === 0) {
                        noResults.style.display = 'block';
                        if (portfolioGrid) portfolioGrid.style.display = 'none';
                    } else {
                        noResults.style.display = 'none';
                        if (portfolioGrid) portfolioGrid.style.display = 'grid';
                    }
                }

                // Smooth scroll to top of portfolio section
                const portfolioSection = document.querySelector('.portfolio-page');
                if (portfolioSection) {
                    portfolioSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }
});

// Portfolio Fullscreen Functionality
function openPortfolioFullscreen() {
    const modal = document.getElementById('portfolioFullscreen');
    const fullscreenGrid = document.getElementById('fullscreenGrid');
    const portfolioCards = document.querySelectorAll('.portfolio-card');
    
    if (modal && fullscreenGrid) {
        // Clear existing content
        fullscreenGrid.innerHTML = '';
        
        // Clone and add all portfolio cards
        portfolioCards.forEach(card => {
            if (!card.classList.contains('hidden')) {
                const clone = card.cloneNode(true);
                clone.style.display = 'block';
                fullscreenGrid.appendChild(clone);
            }
        });
        
        // Show modal
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closePortfolioFullscreen() {
    const modal = document.getElementById('portfolioFullscreen');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// Close fullscreen on ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePortfolioFullscreen();
    }
});

// Portfolio Page Navigation Functions
let currentPageIndex = 0;
const portfolioPages = ['intro', 'achievements', 'products', 'services'];
let isFlipbookOpen = false;
let isFlipping = false;

function openFlipbook() {
    if (isFlipping || isFlipbookOpen) return;
    
    isFlipping = true;
    const coverPage = document.getElementById('coverPage');
    const twoPageSpread = document.getElementById('twoPageSpread');
    const controls = document.getElementById('portfolioControls');
    
    if (coverPage && twoPageSpread) {
        // Show two-page spread first (hidden behind)
        twoPageSpread.style.display = 'flex';
        
        // Start cover flip animation
        requestAnimationFrame(() => {
            coverPage.classList.add('flipping');
        });
        
        // After cover flips halfway, start opening two-page spread
        setTimeout(() => {
            requestAnimationFrame(() => {
                twoPageSpread.classList.add('opening');
            });
        }, 400);
        
        // Hide cover and show controls after animation completes
        setTimeout(() => {
            coverPage.classList.add('flipped');
            twoPageSpread.classList.add('open');
            twoPageSpread.classList.remove('opening');
            
            if (controls) {
                controls.style.display = 'flex';
                controls.style.opacity = '0';
                setTimeout(() => {
                    controls.style.transition = 'opacity 0.5s ease';
                    controls.style.opacity = '1';
                }, 100);
            }
            
            isFlipbookOpen = true;
            isFlipping = false;
        }, 800);
    }
}

function showPage(pageId) {
    // Hide all right pages
    document.querySelectorAll('.flipbook-page.right-page').forEach(page => {
        page.classList.remove('active');
        page.style.display = 'none';
    });
    
    // Show selected page
    const targetPage = document.getElementById(pageId + 'Page');
    if (targetPage) {
        targetPage.style.display = 'flex';
        setTimeout(() => {
            targetPage.classList.add('active');
        }, 10);
    }
    
    // Update current page index
    currentPageIndex = portfolioPages.indexOf(pageId);
    if (currentPageIndex === -1) currentPageIndex = 0;
}

function nextPage() {
    currentPageIndex = (currentPageIndex + 1) % portfolioPages.length;
    showPage(portfolioPages[currentPageIndex]);
}

function prevPage() {
    currentPageIndex = (currentPageIndex - 1 + portfolioPages.length) % portfolioPages.length;
    showPage(portfolioPages[currentPageIndex]);
}

function firstPage() {
    currentPageIndex = 0;
    showPage(portfolioPages[currentPageIndex]);
}

function lastPage() {
    currentPageIndex = portfolioPages.length - 1;
    showPage(portfolioPages[currentPageIndex]);
}

// Legacy functions for backward compatibility
function nextPortfolio() {
    nextPage();
}

function skipPortfolio() {
    nextPage();
}

function togglePortfolioMenu() {
    const menu = document.getElementById('portfolioMenu');
    if (menu) {
        if (menu.style.display === 'none' || !menu.classList.contains('active')) {
            menu.style.display = 'block';
            setTimeout(() => {
                menu.classList.add('active');
            }, 10);
        } else {
            menu.classList.remove('active');
            setTimeout(() => {
                menu.style.display = 'none';
            }, 300);
        }
    }
}

// Close menu when clicking outside
document.addEventListener('click', function(e) {
    const menu = document.getElementById('portfolioMenu');
    const menuBtn = document.querySelector('.menu-btn');
    
    if (menu && menuBtn && !menu.contains(e.target) && !menuBtn.contains(e.target)) {
        if (menu.classList.contains('active')) {
            menu.classList.remove('active');
            setTimeout(() => {
                menu.style.display = 'none';
            }, 300);
        }
    }
});

// Auto-rotate portfolio showcase
let portfolioAutoRotate;
function startPortfolioAutoRotate() {
    portfolioAutoRotate = setInterval(() => {
        nextPortfolio();
    }, 5000);
}

function stopPortfolioAutoRotate() {
    if (portfolioAutoRotate) {
        clearInterval(portfolioAutoRotate);
    }
}

// Initialize portfolio showcase
document.addEventListener('DOMContentLoaded', function() {
    const coverPage = document.getElementById('coverPage');
    const coverBtn = document.querySelector('.cover-fullscreen-btn');
    
    // Add click handler to cover page (click anywhere to open)
    if (coverPage && !coverBtn) {
        coverPage.addEventListener('click', function(e) {
            // Don't trigger if clicking the button
            if (!e.target.closest('.cover-fullscreen-btn')) {
                openFlipbook();
            }
        });
    }
    
    // Keyboard shortcut: Enter or Space to open flipbook
    document.addEventListener('keydown', function(e) {
        if (!isFlipbookOpen && (e.key === 'Enter' || e.key === ' ')) {
            e.preventDefault();
            openFlipbook();
        }
    });
});