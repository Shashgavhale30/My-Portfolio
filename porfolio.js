document.addEventListener("DOMContentLoaded", () => {
  // ===========================================
  // UTILITY FUNCTIONS
  // ===========================================

  // Throttle function for performance optimization
  function throttle(func, limit) {
    let inThrottle;
    return function () {
      const args = arguments;

      if (!inThrottle) {
        func.apply(this, args);
        inThrottle = true;
        setTimeout(() => (inThrottle = false), limit);
      }
    };
  }

  // Debounce function for input events
  function debounce(func, wait) {
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

  // Email validation helper
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  // ===========================================
  // THEME SYSTEM
  // ===========================================

  function initializeTheme() {
    const savedTheme = localStorage.getItem("portfolio-theme") || "light";
    document.documentElement.setAttribute("data-theme", savedTheme);

    // Update theme switch icon if it exists
    const themeSwitch = document.querySelector(".theme-switch-icon");
    if (themeSwitch) {
      themeSwitch.textContent = savedTheme === "dark" ? "☀️" : "🌙";
    }
  }

  function initializeThemeSwitch() {
    const themeSwitch = document.querySelector(".theme-switch-icon");
    const themeOptions = document.querySelectorAll(".theme-option");

    // Simple theme toggle
    if (themeSwitch) {
      themeSwitch.addEventListener("click", () => {
        const currentTheme =
          document.documentElement.getAttribute("data-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";

        document.documentElement.setAttribute("data-theme", newTheme);
        localStorage.setItem("portfolio-theme", newTheme);
        themeSwitch.textContent = newTheme === "dark" ? "☀️" : "🌙";
      });
    }

    // Advanced theme options
    if (themeOptions.length > 0) {
      themeOptions.forEach((option) => {
        option.addEventListener("click", (e) => {
          e.stopPropagation();
          const theme = e.target.getAttribute("data-theme");

          // Remove active class from all options
          themeOptions.forEach((opt) => opt.classList.remove("active"));
          e.target.classList.add("active");

          // Apply theme
          switch (theme) {
            case "theme-1":
              document.documentElement.setAttribute("data-theme", "light");
              break;
            case "theme-2":
              document.documentElement.setAttribute("data-theme", "light");
              document.documentElement.style.setProperty(
                "--primary-color",
                "#ec4899"
              );
              document.documentElement.style.setProperty(
                "--gradient-primary",
                "linear-gradient(135deg, #ec4899 0%, #f97316 100%)"
              );
              break;
            case "theme-3":
              document.documentElement.setAttribute("data-theme", "dark");
              break;
            default:
              document.documentElement.setAttribute("data-theme", "light");
          }

          localStorage.setItem("portfolio-theme", theme);
        });
      });
    }
  }

  // ===========================================
  // CURSOR ANIMATION
  // ===========================================

  function initializeCursor() {
    const cursor = document.querySelector(".cursor");
    const cursorFollower = document.querySelector(".cursor-follower");

    if (!cursor || !cursorFollower) return;

    // Hide cursor on mobile devices
    if (window.innerWidth < 768) {
      cursor.style.display = "none";
      cursorFollower.style.display = "none";
      return;
    }

    let mouseX = 0,
      mouseY = 0;
    let cursorX = 0,
      cursorY = 0;
    let followerX = 0,
      followerY = 0;
    let animationId;

    // Mouse move handler
    const handleMouseMove = (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
    };

    document.addEventListener("mousemove", handleMouseMove);

    // Smooth cursor animation
    function animateCursor() {
      cursorX += (mouseX - cursorX) * 0.1;
      cursorY += (mouseY - cursorY) * 0.1;
      followerX += (mouseX - followerX) * 0.05;
      followerY += (mouseY - followerY) * 0.05;

      cursor.style.transform = `translate(${
        cursorX - cursor.offsetWidth / 2
      }px, ${cursorY - cursor.offsetHeight / 2}px)`;
      cursorFollower.style.transform = `translate(${
        followerX - cursorFollower.offsetWidth / 2
      }px, ${followerY - cursorFollower.offsetHeight / 2}px)`;

      animationId = requestAnimationFrame(animateCursor);
    }

    animateCursor();

    // Cursor interactions
    const interactiveElements = document.querySelectorAll(
      "a, button, .btn, .skill-card, .project-card"
    );

    interactiveElements.forEach((el) => {
      el.addEventListener("mouseenter", () => {
        cursor.classList.add("cursor-hover");
        cursor.style.borderColor = "var(--secondary-color)";
      });

      el.addEventListener("mouseleave", () => {
        cursor.classList.remove("cursor-hover");
        cursor.style.borderColor = "var(--primary-color)";
      });
    });

    // Cleanup function for cursor animation
    return () => {
      if (animationId) {
        cancelAnimationFrame(animationId);
      }
      document.removeEventListener("mousemove", handleMouseMove);
    };
  }

  // ===========================================
  // NAVIGATION FUNCTIONALITY
  // ===========================================

  function initializeNavigation() {
    const navToggle = document.querySelector(".nav-toggle");
    const navMenu = document.querySelector(".nav-menu");
    const navLinks = document.querySelectorAll(".nav-link");

    // Mobile menu toggle
    if (navToggle && navMenu) {
      navToggle.addEventListener("click", (e) => {
        e.stopPropagation();
        navToggle.classList.toggle("active");
        navMenu.classList.toggle("active");
      });

      // Close menu when clicking outside
      document.addEventListener("click", (e) => {
        if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
          navToggle.classList.remove("active");
          navMenu.classList.remove("active");
        }
      });

      // Close menu on escape key
      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
          navToggle.classList.remove("active");
          navMenu.classList.remove("active");
        }
      });
    }

    // Close mobile menu when nav link is clicked
    navLinks.forEach((link) => {
      link.addEventListener("click", () => {
        if (navMenu && navToggle) {
          navMenu.classList.remove("active");
          navToggle.classList.remove("active");
        }
      });
    });
  }

  // ===========================================
  // SCROLL EFFECTS (CONSOLIDATED)
  // ===========================================

  function initializeScrollEffects() {
    const navbar = document.querySelector(".navbar");
    const goTopButton = document.querySelector(".go-top");
    const navLinks = document.querySelectorAll(".nav-link");
    const sections = document.querySelectorAll("section[id]");
    const scrollIndicator = document.querySelector(".scroll-indicator");

    let lastScrollY = window.scrollY;
    let ticking = false;

    const handleScroll = () => {
      const currentScrollY = window.scrollY;

      // Navbar effects
      if (navbar) {
        // Background and blur effects
        if (currentScrollY > 100) {
          navbar.style.background = "var(--glass-bg, rgba(255, 255, 255, 0.1))";
          navbar.style.backdropFilter = "blur(20px)";
          navbar.style.boxShadow =
            "0 2px 20px var(--shadow-light, rgba(0, 0, 0, 0.1))";
        } else {
          navbar.style.background = "transparent";
          navbar.style.backdropFilter = "none";
          navbar.style.boxShadow = "none";
        }

        // Hide/show navbar on scroll
        if (currentScrollY > lastScrollY && currentScrollY > 100) {
          navbar.style.transform = "translateY(-100%)";
        } else {
          navbar.style.transform = "translateY(0)";
        }
      }

      // Go to top button visibility
      if (goTopButton) {
        if (currentScrollY > 300) {
          goTopButton.classList.add("show");
        } else {
          goTopButton.classList.remove("show");
        }
      }

      // Active nav link highlighting
      if (navLinks.length > 0 && sections.length > 0) {
        let current = "";
        sections.forEach((section) => {
          const sectionTop = section.getBoundingClientRect().top;
          const sectionHeight = section.clientHeight;
          if (sectionTop <= 200 && sectionTop + sectionHeight > 200) {
            current = section.getAttribute("id");
          }
        });

        navLinks.forEach((link) => {
          link.classList.remove("active");
          if (link.getAttribute("href") === `#${current}`) {
            link.classList.add("active");
          }
        });
      }

      // Scroll indicator
      if (scrollIndicator) {
        const scrollPercentage =
          currentScrollY /
          (document.documentElement.scrollHeight - window.innerHeight);
        if (scrollPercentage > 0.1) {
          scrollIndicator.style.opacity = "0";
          scrollIndicator.style.transform = "translateX(-50%) translateY(20px)";
        } else {
          scrollIndicator.style.opacity = "1";
          scrollIndicator.style.transform = "translateX(-50%) translateY(0)";
        }
      }

      lastScrollY = currentScrollY;
      ticking = false;
    };

    // Throttled scroll event listener
    window.addEventListener("scroll", () => {
      if (!ticking) {
        requestAnimationFrame(handleScroll);
        ticking = true;
      }
    });

    // Go to top button functionality
    if (goTopButton) {
      goTopButton.addEventListener("click", (e) => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }
  }

  // ===========================================
  // SMOOTH SCROLLING
  // ===========================================

  function initializeSmoothScrolling() {
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach((link) => {
      link.addEventListener("click", (e) => {
        e.preventDefault();

        const targetId = link.getAttribute("href").substring(1);
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
          const offsetTop =
            targetSection.getBoundingClientRect().top + window.pageYOffset - 80;

          window.scrollTo({
            top: offsetTop,
            behavior: "smooth",
          });
        }
      });
    });
  }

  // ===========================================
  // SKILL BAR ANIMATIONS
  // ===========================================

  function initializeSkillBars() {
    const skillBars = document.querySelectorAll(".skill-progress");

    if (skillBars.length === 0) return;

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const skillBar = entry.target;
            const skillLevel = skillBar.getAttribute("data-level") || "90";

            // Animate the skill bar
            skillBar.style.transition = "width 1.5s ease-in-out";
            skillBar.style.width = `${skillLevel}%`;

            // Unobserve after animation
            observer.unobserve(skillBar);
          }
        });
      },
      { threshold: 0.5 }
    );

    skillBars.forEach((bar) => {
      bar.style.width = "0%"; // Start from 0
      observer.observe(bar);
    });
  }

  // ===========================================
  // CONTACT FORM HANDLING
  // ===========================================

  // Updated contact form handler
  function initializeContactForm() {
    const contactForm = document.getElementById("contactForm");
    const submitBtn = document.querySelector(
      '#contactForm button[type="submit"]'
    );
    const responseMessage = document.getElementById("responseMessage");

    if (!contactForm || !submitBtn || !responseMessage) {
      console.error("Contact form elements not found!");
      return;
    }

    contactForm.addEventListener("submit", async (event) => {
      event.preventDefault();

      if (!validateContactForm()) return;

      const originalBtnText = submitBtn.innerHTML;
      submitBtn.innerHTML = "<span>Sending...</span>";
      submitBtn.disabled = true;

      try {
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);

        const response = await fetch("contact.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(data),
        });

        // Check if response is ok
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }

        // Check content type
        const contentType = response.headers.get("content-type");
        if (!contentType || !contentType.includes("application/json")) {
          const text = await response.text();
          console.error("Expected JSON but got:", text);
          throw new Error("Server returned non-JSON response");
        }

        const result = await response.json();

        if (result.status === "success") {
          showResponseMessage(result.message, "success");
          contactForm.reset();
          clearAllValidationErrors();
        } else {
          showResponseMessage(result.message, "error");
        }
      } catch (error) {
        console.error("Submission error:", error);
        showResponseMessage("Network error. Please try again later.", "error");
      } finally {
        submitBtn.innerHTML = originalBtnText;
        submitBtn.disabled = false;
      }
    });

    function validateContactForm() {
      let isValid = true;
      const requiredFields = contactForm.querySelectorAll("[required]");

      requiredFields.forEach((field) => {
        const value = field.value.trim();
        clearFieldError(field);

        if (!value) {
          showFieldError(field, "This field is required");
          isValid = false;
        } else if (field.type === "email" && !validateEmail(value)) {
          showFieldError(field, "Please enter a valid email address");
          isValid = false;
        }
      });

      return isValid;
    }

    function validateEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
    }

    function showFieldError(field, message) {
      field.style.borderColor = "#ef4444";
      let errorElement = field.parentNode.querySelector(".field-error");
      if (!errorElement) {
        errorElement = document.createElement("div");
        errorElement.className = "field-error";
        errorElement.style.cssText =
          "color: #ef4444; font-size: 0.875rem; margin-top: 0.25rem; display: block;";
        field.parentNode.appendChild(errorElement);
      }
      errorElement.textContent = message;
    }

    function clearFieldError(field) {
      field.style.borderColor = "";
      const errorElement = field.parentNode.querySelector(".field-error");
      if (errorElement) errorElement.remove();
    }

    function clearAllValidationErrors() {
      const errorElements = contactForm.querySelectorAll(".field-error");
      errorElements.forEach((error) => error.remove());
      const fields = contactForm.querySelectorAll("input, textarea");
      fields.forEach((field) => (field.style.borderColor = ""));
    }

    function showResponseMessage(message, type) {
      responseMessage.innerHTML = message;
      responseMessage.style.cssText = `
      padding: 1rem; margin-top: 1rem; border-radius: 10px; display: block;
      color: ${type === "success" ? "#10b981" : "#ef4444"};
      background: ${
        type === "success"
          ? "rgba(16, 185, 129, 0.1)"
          : "rgba(239, 68, 68, 0.1)"
      };
      border: 1px solid ${
        type === "success"
          ? "rgba(16, 185, 129, 0.2)"
          : "rgba(239, 68, 68, 0.2)"
      };
    `;

      setTimeout(() => {
        responseMessage.style.display = "none";
        responseMessage.innerHTML = "";
      }, 5000);
    }

    // Real-time validation
    const inputs = contactForm.querySelectorAll("input, textarea");
    inputs.forEach((input) => {
      input.addEventListener("blur", () => {
        const value = input.value.trim();
        clearFieldError(input);

        if (input.required && !value) {
          showFieldError(input, "This field is required");
        } else if (input.type === "email" && value && !validateEmail(value)) {
          showFieldError(input, "Please enter a valid email address");
        }
      });

      input.addEventListener("input", () => clearFieldError(input));
    });
  }

  // ===========================================
  // SCROLL ANIMATIONS
  // ===========================================

  function initializeScrollAnimations() {
    const animatedElements = document.querySelectorAll("[data-aos]");

    if (animatedElements.length === 0) return;

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("aos-animate");
          } else {
            // Optional: Remove animation class when element leaves viewport
            entry.target.classList.remove("aos-animate");
          }
        });
      },
      {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
      }
    );

    animatedElements.forEach((element) => {
      observer.observe(element);
    });
  }

  // ===========================================
  // TYPING ANIMATION
  // ===========================================

  function initializeTypingAnimation() {
    const roleElement = document.querySelector(".role");

    if (!roleElement) return;

    const roles = [
      "Full Stack Developer",
      "Web Developer",
      "Problem Solver",
      "Tech Enthusiast",
    ];

    let currentRoleIndex = 0;
    let currentCharIndex = 0;
    let isDeleting = false;
    let typingTimeout;

    function typeRole() {
      const currentRole = roles[currentRoleIndex];

      if (isDeleting) {
        roleElement.textContent = currentRole.substring(
          0,
          currentCharIndex - 1
        );
        currentCharIndex--;

        if (currentCharIndex === 0) {
          isDeleting = false;
          currentRoleIndex = (currentRoleIndex + 1) % roles.length;
          typingTimeout = setTimeout(typeRole, 500);
          return;
        }
      } else {
        roleElement.textContent = currentRole.substring(
          0,
          currentCharIndex + 1
        );
        currentCharIndex++;

        if (currentCharIndex === currentRole.length) {
          isDeleting = true;
          typingTimeout = setTimeout(typeRole, 2000);
          return;
        }
      }

      typingTimeout = setTimeout(typeRole, isDeleting ? 50 : 100);
    }

    // Start typing animation after a delay
    setTimeout(typeRole, 1000);

    // Cleanup function
    return () => {
      if (typingTimeout) {
        clearTimeout(typingTimeout);
      }
    };
  }

  // ===========================================
  // PARALLAX EFFECTS
  // ===========================================

  function initializeParallax() {
    const shapes = document.querySelectorAll(".shape");

    if (shapes.length === 0) return;

    const handleParallax = throttle(() => {
      const scrolled = window.pageYOffset;
      const rate = scrolled * -0.5;

      shapes.forEach((shape, index) => {
        const speed = (index + 1) * 0.3;
        shape.style.transform = `translateY(${rate * speed}px) rotate(${
          scrolled * 0.1
        }deg)`;
      });
    }, 16);

    window.addEventListener("scroll", handleParallax);
  }

  // ===========================================
  // INTERACTIVE EFFECTS
  // ===========================================

  function initializeInteractiveEffects() {
    // Project card hover effects
    const projectCards = document.querySelectorAll(".project-card");
    projectCards.forEach((card) => {
      card.addEventListener("mouseenter", () => {
        card.style.transform = "translateY(-10px) scale(1.02)";
      });

      card.addEventListener("mouseleave", () => {
        card.style.transform = "translateY(0) scale(1)";
      });
    });

    // Achievement and leadership hover effects
    const items = document.querySelectorAll(
      ".achievement-item, .leadership-item"
    );
    items.forEach((item) => {
      item.addEventListener("mouseenter", () => {
        const isEven =
          Array.from(item.parentNode.children).indexOf(item) % 2 === 1;
        const direction = isEven ? "translateX(10px)" : "translateX(-10px)";
        item.style.transform = direction;
      });

      item.addEventListener("mouseleave", () => {
        item.style.transform = "translateX(0)";
      });
    });
  }

  // ===========================================
  // LOADING ANIMATIONS
  // ===========================================

  function initializeLoadingAnimations() {
    const sections = document.querySelectorAll(".section");

    sections.forEach((section, index) => {
      section.style.opacity = "0";
      section.style.transform = "translateY(50px)";

      setTimeout(() => {
        section.style.transition = "all 0.8s ease";
        section.style.opacity = "1";
        section.style.transform = "translateY(0)";
      }, index * 200);
    });

    // Page load animation
    document.body.style.opacity = "0";
    setTimeout(() => {
      document.body.style.transition = "opacity 0.5s ease";
      document.body.style.opacity = "1";
    }, 100);
  }

  // ===========================================
  // RESPONSIVE BEHAVIOR
  // ===========================================

  function initializeResponsiveBehavior() {
    const handleResize = throttle(() => {
      const cursor = document.querySelector(".cursor");
      const cursorFollower = document.querySelector(".cursor-follower");

      // Hide cursor on mobile
      if (cursor && cursorFollower) {
        if (window.innerWidth < 768) {
          cursor.style.display = "none";
          cursorFollower.style.display = "none";
        } else {
          cursor.style.display = "block";
          cursorFollower.style.display = "block";
        }
      }
    }, 250);

    window.addEventListener("resize", handleResize);
  }

  // ===========================================
  // DYNAMIC CONTENT UPDATES
  // ===========================================

  function initializeDynamicContent() {
    // Update name dynamically
    const nameElement = document.querySelector(".name");
    if (nameElement) {
      nameElement.textContent = "Shashwati Gavhale";
    }
  }

  // ===========================================
  // INITIALIZATION
  // ===========================================

  // Initialize all functionality
  try {
    initializeTheme();
    initializeCursor();
    initializeNavigation();
    initializeThemeSwitch();
    initializeScrollEffects();
    initializeSmoothScrolling();
    initializeSkillBars();
    initializeContactForm();
    initializeScrollAnimations();
    initializeTypingAnimation();
    initializeParallax();
    initializeInteractiveEffects();
    initializeLoadingAnimations();
    initializeResponsiveBehavior();
    initializeDynamicContent();

    console.log("🚀 Portfolio website loaded successfully!");
  } catch (error) {
    console.error("Error initializing portfolio:", error);
  }

  // ===========================================
  // CLEANUP ON PAGE UNLOAD
  // ===========================================

  window.addEventListener("beforeunload", () => {
    // Cancel any ongoing animations
    const animationFrames = [];
    animationFrames.forEach((id) => cancelAnimationFrame(id));

    // Clear any timeouts
    // (Individual functions should handle their own cleanup)
  });
});
