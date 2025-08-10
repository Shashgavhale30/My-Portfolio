<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Shashwati Gavhale - Computer Science Student & Full Stack Developer Portfolio">
  <meta name="keywords" content="Full Stack Developer, Web Developer, Computer Science, Java, PHP, MySQL">
  <meta name="author" content="Shashwati Gavhale">
  <title>Shashwati Gavhale - Portfolio</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- AOS Animation Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="porfolio.css">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>
  <!-- Custom Cursor -->
  <div class="cursor"></div>
  <div class="cursor-follower"></div>

  <!-- Navigation -->
  <nav class="navbar">
    <div class="container nav-container">
      <div class="logo">
        <span>SG</span>
      </div>
      <div class="nav-toggle" aria-label="Toggle navigation menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="nav-menu">
        <li><a href="#home" class="nav-link active">Home</a></li>
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#skills" class="nav-link">Skills</a></li>
        <li><a href="#projects" class="nav-link">Projects</a></li>
        <li><a href="#achievements" class="nav-link">Achievements</a></li>
        <li><a href="#leadership" class="nav-link">Leadership</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Header/Hero Section -->
  <header id="home" class="hero section">
    <div class="container">
      <div class="hero-content">
        <div class="hero-image-container" data-aos="fade-up" data-aos-delay="300">
          <img src="Profile.jpg" alt="Shashwati Gavhale - Full Stack Developer" class="hero-image" />
          <div class="hero-decoration"></div>
        </div>
        <div class="hero-text">
          <h1 class="hero-title" data-aos="fade-up">
            <span class="greeting">Hello, I'm</span>
            <span class="name">Shashwati Gavhale</span>
            <span class="role">Computer Science Student & Developer</span>
          </h1>
          <div class="hero-links" data-aos="fade-up" data-aos-delay="600">
            <a href="https://www.linkedin.com/in/shashwati-gavhale-677179308/" target="_blank" class="btn btn-primary"
              rel="noopener noreferrer">
              <i class="fab fa-linkedin"></i> LinkedIn
            </a>
            <a href="mailto:gavhaleshashwati@gmail.com" class="btn btn-secondary">
              <i class="fas fa-envelope"></i> Email
            </a>
            <a href="https://github.com/Shashgavhale30" target="_blank" class="btn btn-primary"
              rel="noopener noreferrer">
              <i class="fab fa-github"></i> GitHub
            </a>
            <a href="https://leetcode.com/u/Shashwati_Gavhale30" target="_blank" class="btn btn-secondary"
              rel="noopener noreferrer">
              <i class="fas fa-code"></i> LeetCode
            </a>
          </div>
        </div>
      </div>
      <div class="scroll-indicator">
        <div class="mouse">
          <div class="wheel"></div>
        </div>
        <div class="scroll-arrow">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <div class="hero-shapes">
      <div class="shape shape-1"></div>
      <div class="shape shape-2"></div>
      <div class="shape shape-3"></div>
      <div class="shape shape-4"></div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-subtitle">About Me</span>
        <h2 class="section-title">Who I Am</h2>
      </div>
      <div class="about-content" data-aos="fade-up" data-aos-delay="300">
        <p class="about-text">Computer Science undergraduate passionate about full-stack development, real-time
          problem-solving, and building scalable web applications. Seeking impactful roles in software development as a
          Full Stack Developer.</p>

        <h3 class="full-stack-developer-title gradient-text">Full Stack Developer</h3>

        <div class="education">
          <h3 class="education-title">Education</h3>
          <div class="education-item" data-aos="fade-right" data-aos-delay="100">
            <div class="education-year">Expected 2027</div>
            <div class="education-info">
              <h4>B-Tech in Computer Science</h4>
              <p>Bajaj Institute of Technology, Wardha</p>
            </div>
            <img src="bit.jpg" alt="Bajaj Institute of Technology" class="education-image">
          </div>
          <div class="education-item" data-aos="fade-left" data-aos-delay="200">
            <div class="education-year">2022</div>
            <div class="education-info">
              <h4>HSC (Higher Secondary Certificate)</h4>
              <p>New English Junior College, Wardha</p>
            </div>
            <img src="new english.jpg" alt="New English Junior College" class="education-image">
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg-decoration"></div>
  </section>

  <!-- Experience Section -->
  <section id="experience" class="experience section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-subtitle">Professional Journey</span>
        <h2 class="section-title">Experience</h2>
      </div>
      <div class="experience-list">
        <div class="experience-item" data-aos="fade-up" data-aos-delay="100">
          <div class="experience-content">
            <div class="experience-icon">
              <i class="fas fa-code"></i>
            </div>
            <div class="experience-text">
              <h3 class="experience-title">Frontend Developer Intern</h3>
              <p class="experience-org">The Idea Company, Nagpur</p>
              <p class="experience-duration">Apr 2025 – Jul 2025</p>
              <p class="experience-description">
                Completed a stipend-based internship focused on building responsive and interactive
                user interfaces using HTML, CSS, and JavaScript. Collaborated with backend teams to integrate
                APIs, enhance UI/UX, and optimize performance for client projects.
              </p>
            </div>
          </div>
          <div class="experience-image">
            <a href="https://www.theideacompany.io/" target="_blank" rel="noopener noreferrer">
              Visit The Idea Company
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg-decoration"></div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="skills section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-subtitle">My Expertise</span>
        <h2 class="section-title">Skills & Technologies</h2>
      </div>
      <div class="skill-list">
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="100">
          <div class="skill-icon">
            <i class="fab fa-java"></i>
          </div>
          <h3 class="skill-title">Java</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="85"></div>
          </div>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="200">
          <div class="skill-icon">
            <i class="fas fa-code"></i>
          </div>
          <h3 class="skill-title">C Programming</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="80"></div>
          </div>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="300">
          <div class="skill-icon">
            <i class="fab fa-html5"></i>
          </div>
          <h3 class="skill-title">HTML & CSS</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="90"></div>
          </div>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="400">
          <div class="skill-icon">
            <i class="fab fa-js-square"></i>
          </div>
          <h3 class="skill-title">JavaScript</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="85"></div>
          </div>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="450">
          <div class="skill-icon">
            <i class="fab fa-php"></i>
          </div>
          <h3 class="skill-title">PHP</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="80"></div>
          </div>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="500">
          <div class="skill-icon">
            <i class="fas fa-database"></i>
          </div>
          <h3 class="skill-title">MySQL</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="75"></div>
          </div>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="600">
          <div class="skill-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3 class="skill-title">Full-Stack Development</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="80"></div>
          </div>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="700">
          <div class="skill-icon">
            <i class="fas fa-sitemap"></i>
          </div>
          <h3 class="skill-title">Data Structures & Algorithms</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="85"></div>
          </div>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="800">
          <div class="skill-icon">
            <i class="fas fa-comments"></i>
          </div>
          <h3 class="skill-title">Communication</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="90"></div>
          </div>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-delay="900">
          <div class="skill-icon">
            <i class="fas fa-users"></i>
          </div>
          <h3 class="skill-title">Teamwork</h3>
          <div class="skill-level">
            <div class="skill-progress" data-level="95"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg-decoration"></div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-subtitle">My Work</span>
        <h2 class="section-title">Featured Projects</h2>
      </div>
      <div class="project-list">
        <div class="project-card" data-aos="fade-up" data-aos-delay="100">
          <div class="project-img">
            <img src="fruitopia.png" alt="Fruitopia - Online Seasonal Fruit Marketplace" />
            <div class="project-overlay">
              <a href="http://Fruitopia.infinityfreeapp.com" target="_blank" class="project-link"
                rel="noopener noreferrer" aria-label="View Fruitopia Project">
                <i class="fas fa-external-link-alt"></i>
              </a>
            </div>
          </div>
          <div class="project-content">
            <h3 class="project-title">Fruitopia – Online Seasonal Fruit Marketplace</h3>
            <p class="project-description">
              Built a comprehensive full-stack platform for buying and selling seasonal fruits, featuring separate buyer
              & seller
              roles, category-wise fruit listings, secure payment integration, and robust MySQL database architecture.
            </p>
            <div class="project-tech">
              <span>HTML5</span>
              <span>CSS3</span>
              <span>JavaScript</span>
              <span>PHP</span>
              <span>MySQL</span>
              <span>Responsive Design</span>
            </div>
          </div>
        </div>

        <div class="project-card" data-aos="fade-up" data-aos-delay="200">
          <div class="project-img">
            <img src="startup.jpg" alt="FixFast - 10-Minute Electronics Repair Service" />
            <div class="project-overlay">
              <a href="https://fix-fast-pi.vercel.app/" target="_blank" class="project-link" rel="noopener noreferrer"
                aria-label="View FixFast Project">
                <i class="fas fa-external-link-alt"></i>
              </a>
            </div>
          </div>
          <div class="project-content">
            <h3 class="project-title">FixFast – 10-Minute Electronics Repair</h3>
            <p class="project-description">
              Developed an innovative full-stack platform for urgent electronics repair services with real-time
              technician tracking,
              location-based service matching, and integrated logistics management system.
            </p>
            <div class="project-tech">
              <span>HTML5</span>
              <span>CSS3</span>
              <span>JavaScript</span>
              <span>MySQL</span>
              <span>Geolocation API</span>
              <span>Real-time Tracking</span>
            </div>
          </div>
        </div>

        <div class="project-card" data-aos="fade-up" data-aos-delay="300">
          <div class="project-img">
            <img src="sih.jpg" alt="Automated Faculty Appraisal System - Smart India Hackathon" />
            <div class="project-overlay">
              <a href="https://github.com/rushiborkar2005/Automated-System-for-Career-Advancements-of-the-Faculties-of-Higher-Education"
                target="_blank" class="project-link" rel="noopener noreferrer"
                aria-label="View Faculty Appraisal System on GitHub">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
          <div class="project-content">
            <h3 class="project-title">Automated Faculty Appraisal System</h3>
            <p class="project-description">
              Built comprehensive dashboards and analytics for faculty performance evaluation system; reduced manual
              review time by 30%
              using structured data processing and automated report generation for Smart India Hackathon 2024.
            </p>
            <div class="project-tech">
              <span>Java</span>
              <span>MySQL</span>
              <span>HTML5</span>
              <span>CSS3</span>
              <span>Data Analytics</span>
              <span>Dashboard Design</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg-decoration right"></div>
  </section>

  <!-- Achievements Section -->
  <section id="achievements" class="achievements section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-subtitle">Recognition</span>
        <h2 class="section-title">Hackathons & Achievements</h2>
      </div>
      <div class="achievement-list">
        <!-- Achievement 1 -->
        <div class="achievement-item" data-aos="fade-up" data-aos-delay="100">
          <div class="achievement-content">
            <div class="achievement-icon">
              <i class="fas fa-trophy"></i>
            </div>
            <div class="achievement-text">
              <h3 class="achievement-title">Finalist – Smart India Hackathon 2024</h3>
              <p class="achievement-description">
                Achieved top 10 national ranking among thousands of participating teams. Developed an innovative
                digitized
                appraisal system for faculty career advancement with automated evaluation metrics and comprehensive
                analytics dashboard.
              </p>
            </div>
          </div>
          <div class="achievement-image">
            <img src="sih.jpg" alt="Smart India Hackathon 2024 Finalist Certificate" class="expanded-image">
          </div>
        </div>

        <!-- Achievement 2 -->
        <div class="achievement-item" data-aos="fade-up" data-aos-delay="200">
          <div class="achievement-content">
            <div class="achievement-icon">
              <i class="fas fa-medal"></i>
            </div>
            <div class="achievement-text">
              <h3 class="achievement-title">Winner – Startup Hackathon, JIT</h3>
              <p class="achievement-description">
                First place winner for developing the FixFast electronics repair platform. Impressed judges with
                innovative
                10-minute repair service concept, real-time tracking system, and comprehensive business model
                presentation.
              </p>
            </div>
          </div>
          <div class="achievement-image">
            <img src="startup.jpg" alt="Startup Hackathon Winner Certificate" class="expanded-image">
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg-decoration right"></div>
  </section>

  <!-- Leadership Section -->
  <section id="leadership" class="leadership section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-subtitle">Experience</span>
        <h2 class="section-title">Leadership & Activities</h2>
      </div>
      <div class="leadership-list">
        <div class="leadership-item" data-aos="fade-up" data-aos-delay="100">
          <div class="leadership-content">
            <div class="leadership-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <div class="leadership-text">
              <h3 class="leadership-title">Technical Head</h3>
              <p class="leadership-org">Network Bit Forum</p>
              <p class="leadership-description">
                Led technical initiatives and organized coding sessions, workshops, and mentorship programs for
                students.
                Coordinated technical events and fostered a collaborative learning environment within the tech
                community.
              </p>
            </div>
          </div>
          <div class="leadership-image">
            <img src="networkBIT.jpg" alt="Network Bit Forum Technical Head" class="expanded-image">
          </div>
        </div>

        <div class="leadership-item" data-aos="fade-up" data-aos-delay="200">
          <div class="leadership-content">
            <div class="leadership-icon">
              <i class="fas fa-hands-helping"></i>
            </div>
            <div class="leadership-text">
              <h3 class="leadership-title">Coordinator</h3>
              <p class="leadership-org">Light Wardha NGO</p>
              <p class="leadership-description">
                Spearheaded multiple community outreach programs focused on education and social welfare.
                Coordinated volunteer activities and managed project implementation for underprivileged communities.
              </p>
            </div>
          </div>
          <div class="leadership-image">
            <img src="ngo.jpg" alt="Light Wardha NGO Coordinator" class="expanded-image">
          </div>
        </div>

        <div class="leadership-item" data-aos="fade-up" data-aos-delay="300">
          <div class="leadership-content">
            <div class="leadership-icon">
              <i class="fas fa-book-reader"></i>
            </div>
            <div class="leadership-text">
              <h3 class="leadership-title">Active Member</h3>
              <p class="leadership-org">Reader's Club</p>
              <p class="leadership-description">
                Facilitated engaging discussion meetups and reading circles, promoting literacy and critical thinking.
                Organized book review sessions and literary events to encourage reading culture among peers.
              </p>
            </div>
          </div>
          <div class="leadership-image">
            <img src="reader's.jpg" alt="Reader's Club Member" class="expanded-image">
          </div>
        </div>
      </div>
    </div>
    <div class="section-bg-decoration"></div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-subtitle">Get In Touch</span>
        <h2 class="section-title">Let's Connect</h2>
      </div>
      <div class="contact-content" data-aos="fade-up" data-aos-delay="300">
        <div class="contact-info">
          <div class="contact-item" data-aos="fade-right" data-aos-delay="100">
            <div class="contact-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="contact-text">
              <h4>Location</h4>
              <p>Wardha, Maharashtra, India</p>
            </div>
          </div>
          <div class="contact-item" data-aos="fade-right" data-aos-delay="200">
            <div class="contact-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="contact-text">
              <h4>Email</h4>
              <p><a href="mailto:gavhaleshashwati@gmail.com">gavhaleshashwati@gmail.com</a></p>
            </div>
          </div>
          <div class="contact-item" data-aos="fade-right" data-aos-delay="300">
            <div class="contact-icon">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="contact-text">
              <h4>Phone</h4>
              <p><a href="tel:+918265079381">+91 8265079381</a></p>
            </div>
          </div>
          <div class="contact-item" data-aos="fade-right" data-aos-delay="400">
            <div class="contact-icon">
              <i class="fab fa-linkedin"></i>
            </div>
            <div class="contact-text">
              <h4>LinkedIn</h4>
              <p><a href="https://www.linkedin.com/in/shashwati-gavhale-677179308/" target="_blank"
                  rel="noopener noreferrer">Connect with me</a></p>
            </div>
          </div>
        </div>

        <div class="contact-form" data-aos="fade-left" data-aos-delay="200">
          <form id="contactForm" method="POST" action="contact.php" autocomplete="off">
            <div class="form-group">
              <input type="text" id="name" name="name" placeholder="Your Name" required aria-label="Your Name">
            </div>
            <div class="form-group">
              <input type="email" id="email" name="email" placeholder="Your Email" required aria-label="Your Email">
            </div>
            <div class="form-group">
              <input type="text" id="subject" name="subject" placeholder="Subject" required aria-label="Subject">
            </div>
            <div class="form-group">
              <textarea id="message" name="message" placeholder="Your Message" required
                aria-label="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary form-btn">
              <span>Send Message</span>
              <i class="fas fa-paper-plane"></i>
            </button>
          </form>
          <div id="responseMessage" class="response-message"></div>
        </div>
      </div>
    </div>
    <div class="section-bg-decoration"></div>
  </section>
  <template id="responseTemplate">
    <div class="response-message success">
      <p>Thank you! Your message has been sent successfully.</p>
    </div>
  </template>


  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <span>SG</span>
          <p>Shashwati Gavhale</p>
        </div>
        <div class="footer-social">
          <a href="https://www.linkedin.com/in/shashwati-gavhale-677179308/" target="_blank" rel="noopener noreferrer"
            aria-label="LinkedIn Profile">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="https://github.com/Shashgavhale30" target="_blank" rel="noopener noreferrer"
            aria-label="GitHub Profile">
            <i class="fab fa-github"></i>
          </a>
          <a href="mailto:gavhaleshashwati@gmail.com" aria-label="Send Email">
            <i class="fas fa-envelope"></i>
          </a>
          <a href="https://leetcode.com/u/Shashwati_Gavhale30" target="_blank" rel="noopener noreferrer"
            aria-label="LeetCode Profile">
            <i class="fas fa-code"></i>
          </a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 Shashwati Gavhale. All rights reserved. | Built with ❤️ and modern web technologies</p>
      </div>
    </div>
  </footer>

  <!-- Theme Switch -->
  <div class="theme-switch">
    <div class="theme-switch-icon" aria-label="Toggle theme">
      <i class="fas fa-moon"></i>
    </div>
    <div class="theme-options">
      <div class="theme-option active" data-theme="theme-1" title="Light Theme"></div>
      <div class="theme-option" data-theme="theme-2" title="Accent Theme"></div>
      <div class="theme-option" data-theme="theme-3" title="Dark Theme"></div>
    </div>
  </div>

  <!-- Go to top button -->
  <a href="#home" class="go-top" aria-label="Go to top">
    <i class="fas fa-arrow-up"></i>
  </a>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="porfolio.js"></script>
</body>

</html>