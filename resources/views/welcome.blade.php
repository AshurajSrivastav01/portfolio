<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Ashuraj Srivastav | Moodle & Laravel Developer</title>
    <meta name="description" content="Ashuraj Srivastav is a Moodle and Laravel Developer specializing in LMS development, custom Moodle plugins, Laravel applications, REST APIs, and scalable backend systems.">
    <meta name="author" content="Ashuraj Srivastav">
    <link rel="canonical" href="https://ashuraj.codebridgeit.com/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ashuraj Srivastav | Moodle & Laravel Developer">
    <meta property="og:description" content="Moodle & Laravel Developer specializing in LMS development, custom plugins, REST APIs, and scalable backend systems.">
    <meta property="og:url" content="https://ashuraj.codebridgeit.com/">
    <meta property="og:site_name" content="Ashuraj Srivastav">
    <meta property="og:image" content="https://ashuraj.codebridgeit.com/assets/img/og-image.jpeg">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ashuraj Srivastav | Moodle & Laravel Developer">
    <meta name="twitter:description"
          content="Moodle & Laravel Developer specializing in LMS development, custom plugins, REST APIs, and scalable backend systems.">
    <meta name="twitter:image" content="https://ashuraj.codebridgeit.com/assets/img/og-image.jpeg">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{ asset('asset/img/favicon.ico') }}">

    <!-- Bootstrap 5.3 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    
    <!-- Google Font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
  </head>
  <body>
    <!-- ====== NAVBAR ====== -->
    <nav class="premium-nav" id="premiumNav" aria-label="Main navigation">
      <div class="navbar-wrapper">
        <div class="nav-inner">
          <a href="#" class="logo-link" aria-label="Ashuraj homepage">
            <span class="logo-mark">&lt;AS/&gt;</span>
            <span class="logo-text">Ashuraj</span>
          </a>
          <ul class="nav-links" id="desktopNav">
            <li class="nav-item">
              <a href="#about" class="nav-link" data-nav>About</a>
            </li>
            <li class="nav-item">
              <a href="#skills" class="nav-link" data-nav>Skills</a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link" data-nav>Services</a>
            </li>
            <li class="nav-item">
              <a href="#projects" class="nav-link" data-nav>Projects</a>
            </li>
            <li class="nav-item">
              <a href="#experience" class="nav-link" data-nav>Experience</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link" data-nav>Contact</a>
            </li>
          </ul>
          <div class="d-flex align-items-center gap-3">
            <div class="nav-cta">
              <a href="#contact" class="btn-hire">
                Hire Me
                <i class="bi bi-arrow-right-short" aria-hidden="true"></i>
              </a>
            </div>
            <button
              type="button"
              class="hamburger"
              id="hamburgerBtn"
              aria-label="Open navigation menu"
              aria-controls="mobile-menu"
              aria-expanded="false"
            >
              <i class="bi bi-list" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!-- ====== MOBILE OVERLAY ====== -->
    <div class="mobile-menu-overlay" id="mobileOverlay" role="dialog" aria-modal="true" aria-label="Mobile navigation">
      <div class="mobile-menu-panel">
        <div class="mobile-menu-header">
          <span class="logo-link" style="pointer-events: none">
            <span class="logo-mark">&lt;AS/&gt;</span>
            <span class="logo-text">Ashuraj</span>
          </span>
          <button
            class="mobile-close"
            id="closeMenuBtn"
            aria-label="Close navigation menu"
          >
            <i class="bi bi-x-lg" aria-hidden="true"></i>
          </button>
        </div>
        <ul class="mobile-nav-list">
          <li><a href="#about" class="nav-link" data-nav>About</a></li>
          <li><a href="#skills" class="nav-link" data-nav>Skills</a></li>
          <li><a href="#services" class="nav-link" data-nav>Services</a></li>
          <li><a href="#projects" class="nav-link" data-nav>Projects</a></li>
          <li>
            <a href="#experience" class="nav-link" data-nav>Experience</a>
          </li>
          <li><a href="#contact" class="nav-link" data-nav>Contact</a></li>
        </ul>
        <div class="mobile-cta">
          <a href="#contact" class="btn-hire">
            Hire Me
            <i class="bi bi-arrow-right-short" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>

    <main id="main-content">
      <!-- ====== HERO ====== -->
      <section class="hero-wrapper section-padding" id="home">
        <div class="row align-items-center g-4 hero-card">
          <div class="col-lg-6 col-xl-6 fade-slide-up">
            <div class="badge-freelance">
              <i class="bi bi-circle-fill" style="font-size: 0.6rem" aria-hidden="true"></i>
              Available for Freelance Projects
            </div>
            <h1 class="main-heading">
              Building Scalable <span>Moodle</span> &
              <span>Laravel</span> Solutions for <span>Businesses</span> &
              <span>Educational</span> Platforms
            </h1>
            <p class="desc-text">
              I build secure, scalable web applications, Learning Management
              Systems, REST APIs, and backend solutions using Laravel, PHP, and
              Moodle.
              <!-- I help startups, educational institutions, and businesses build
              scalable Laravel applications, custom Moodle LMS platforms, REST
              APIs, and backend systems that are secure, maintainable, and built
              for growth. -->
            </p>
            <div class="cta-group">
              <a href="#projects" class="btn btn-premium btn-primary-custom"
                >Explore My Work</a
              >
              <a href="#contact" class="btn btn-premium btn-outline-custom"
                >Let's Talk</a
              >
              <!-- <a href="{{ asset('asset/docs/Resume.pdf') }}" class="btn btn-premium btn-primary-custom"
                ><i class="bi bi-file-fill" aria-hidden="true"></i> Download Resume</a> -->
            </div>
            <div class="social-icons">
              <a
                href="https://github.com/AshurajSrivastav01"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="GitHub"
              >
                <i class="bi bi-github" aria-hidden="true"></i>
              </a>
              <a
                href="https://www.linkedin.com/in/ashuraj-srivastav/?skipRedirect=true"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="LinkedIn"
              >
                <i class="bi bi-linkedin" aria-hidden="true"></i>
              </a>
              <a
                href="mailto:ashuraj@codebridgeit.com"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Email"
              >
                <i class="bi bi-envelope-fill" aria-hidden="true"></i>
              </a>
            </div>
            <div class="trust-grid">
              <span class="trust-card">
                <i class="bi bi-briefcase-fill" aria-hidden="true"></i>
                <strong>3+</strong> Years Experience
              </span>

              <span class="trust-card">
                <i class="bi bi-diagram-3-fill" aria-hidden="true"></i>
                <strong>10+</strong> Projects Delivered
              </span>

              <span class="trust-card">
                <i class="bi bi-code-square" aria-hidden="true"></i>
                Laravel + Moodle Specialist
              </span>

              <span class="trust-card">
                <i class="bi bi-globe2" aria-hidden="true"></i>
                Available Worldwide
              </span>
            </div>
          </div>
          <div
            class="col-lg-6 col-xl-6 d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0"
          >
            <div
              class="photo-wrapper"
              style="position: relative; width: 100%; max-width: 420px"
            >
              <div
                class="profile-card fade-slide-up"
                style="animation-delay: 0.1s"
              >
                <img
                  src="{{ asset('asset/img/me.jpeg') }}"
                  alt="Ashuraj Srivastav"
                  class="profile-img"
                  loading="eager"
                />
              </div>
              <span class="floating-badge badge-1"
                ><i class="bi bi-hexagon-fill" aria-hidden="true"></i> Laravel</span
              >
              <span class="floating-badge badge-2"
                ><i class="bi bi-filetype-php" aria-hidden="true"></i> PHP</span
              >
              <span class="floating-badge badge-5"
                ><i class="bi bi-database-fill" aria-hidden="true"></i> MySQL</span
              >
              <span class="floating-badge badge-4"
                ><i class="bi bi-diagram-2-fill" aria-hidden="true"></i> REST API</span
              >
              <span class="floating-badge badge-3"
                ><i class="bi bi-bootstrap-fill" aria-hidden="true"></i> PostgreSQL</span
              >
              <span class="floating-badge badge-6"
                ><i class="bi bi-grid-3x3-gap-fill" aria-hidden="true"></i> Moodle</span
              >
            </div>
          </div>
        </div>
      </section>

      <!-- ====== ABOUT ====== -->
      <section class="section-padding" id="about" style="background: var(--bg)">
        <div class="container">
          <div class="text-center mb-4">
            <span
              class="badge-freelance"
              style="display: inline-flex; margin-bottom: 0.5rem"
            >
              <i class="bi bi-person-lines-fill" aria-hidden="true"></i> About Me
            </span>

            <h2 class="section-title">
              Moodle & Laravel Solutions <br />
              Built for Real Businesses
            </h2>

            <div class="accent-line"></div>
            <p class="section-subtitle">
              I'm <strong>Ashuraj Srivastav</strong>, a Full-Stack Web Developer
              with 3+ years of professional experience specializing in Moodle,
              Laravel, and backend development. I build secure web applications,
              scalable learning platforms, and high-performance REST APIs for
              businesses and educational organizations.
            </p>
          </div>

          <div class="row g-4">

            <!-- Left Card -->
            <div class="col-lg-7">
              <div class="about-card">
                <h4 class="mb-4">Who I Am</h4>

                <p style="color: var(--text-secondary); line-height: 1.9">
                  I'm a backend-focused developer who enjoys building web applications
                  that solve real business problems. Over the past three years, I've
                  worked on Laravel applications, Moodle Learning Management Systems,
                  CRM solutions, booking platforms, and REST APIs.
                </p>

                <p style="color: var(--text-secondary); line-height: 1.9">
                  My strongest expertise is Moodle development, including custom
                  plugins, LMS features, third-party integrations, and migration
                  solutions. Alongside Moodle, I build Laravel applications with
                  clean architecture, secure APIs, and optimized database systems.
                </p>

                <p style="color: var(--text-secondary); line-height: 1.9">
                  I focus on turning complex requirements into reliable, maintainable
                  software. Whether it's a business application or a learning
                  platform, my goal is to build solutions that are practical,
                  scalable, and ready for long-term growth.
                </p>
              </div>
            </div>

            <!-- Right Card -->
            <div class="col-lg-5">
              <div
                class="about-card"
                style="display: flex; flex-direction: column; gap: 1.2rem"
              >
                <h4 class="mb-3">Quick Facts</h4>

                <div>
                  <i class="bi bi-geo-alt-fill text-danger me-2" aria-hidden="true"></i>
                  <strong>Based In:</strong> New Delhi, India
                </div>

                <div>
                  <i class="bi bi-globe2 text-danger me-2" aria-hidden="true"></i>
                  <strong>Clients:</strong> International & Indian
                </div>

                <div>
                  <i class="bi bi-mortarboard-fill text-danger me-2" aria-hidden="true"></i>
                  <strong>Specialization:</strong> Moodle LMS & Plugin Development
                </div>

                <div>
                  <i class="bi bi-code-slash text-danger me-2" aria-hidden="true"></i>
                  <strong>Backend:</strong> Laravel, PHP & REST APIs
                </div>

                <div>
                  <i class="bi bi-database-fill text-danger me-2" aria-hidden="true"></i>
                  <strong>Databases:</strong> MySQL, PostgreSQL & MongoDB
                </div>

                <div>
                  <i class="bi bi-lightning-charge-fill text-danger me-2" aria-hidden="true"></i>
                  <strong>Focus:</strong> Performance & Clean Architecture
                </div>

                <div>
                  <i class="bi bi-patch-check-fill text-danger me-2" aria-hidden="true"></i>
                  <strong>Status:</strong> Available for Freelance & Contract Projects
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ====== SKILLS SECTION ====== -->
      <section class="skills-section-white" id="skills">
        <div class="skills-container">

          <!-- Section Header -->
          <div class="skills-header">
            <span class="skills-badge">
              <i class="bi bi-code-slash" aria-hidden="true"></i>
              Skills
            </span>

            <h2 class="skills-title">
              Core Technologies & Expertise
            </h2>

            <div class="skills-accent-line"></div>

            <p class="skills-subtitle">
              My core expertise spans Moodle LMS development, Laravel backend
              engineering, database optimization, REST APIs, and the tools used
              to build reliable web applications.
            </p>
          </div>


          <!-- Skills Grid -->
          <div class="skills-grid">

            <!-- ============================= -->
            <!-- 01. MOODLE & LMS -->
            <!-- ============================= -->
            <div class="skill-glass-card">

              <div class="card-title">
                <i class="bi bi-mortarboard-fill" aria-hidden="true"></i>
                Moodle & LMS Development
              </div>

              <ul>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-grid-3x3-gap-fill tech-icon" aria-hidden="true"></i>
                  Moodle
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-puzzle-fill tech-icon" aria-hidden="true"></i>
                  Custom Plugin Development
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-palette-fill tech-icon" aria-hidden="true"></i>
                  Theme Customization
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-arrow-left-right tech-icon" aria-hidden="true"></i>
                  Course Migration
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-diagram-3-fill tech-icon" aria-hidden="true"></i>
                  LMS Integration
                </li>

              </ul>
            </div>


            <!-- ============================= -->
            <!-- 02. LARAVEL & BACKEND -->
            <!-- ============================= -->
            <div class="skill-glass-card">

              <div class="card-title">
                <i class="bi bi-server" aria-hidden="true"></i>
                Laravel & Backend Development
              </div>

              <ul>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-hexagon-fill tech-icon" aria-hidden="true"></i>
                  Laravel
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-filetype-php tech-icon" aria-hidden="true"></i>
                  PHP
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-diagram-2-fill tech-icon" aria-hidden="true"></i>
                  REST APIs
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-layers-fill tech-icon" aria-hidden="true"></i>
                  MVC Architecture
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-shield-lock-fill tech-icon" aria-hidden="true"></i>
                  Authentication & Authorization
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-people-fill tech-icon" aria-hidden="true"></i>
                  Role-Based Access Control
                </li>

              </ul>
            </div>


            <!-- ============================= -->
            <!-- 03. DATABASE & PERFORMANCE -->
            <!-- ============================= -->
            <div class="skill-glass-card">

              <div class="card-title">
                <i class="bi bi-database-fill" aria-hidden="true"></i>
                Databases & Performance
              </div>

              <ul>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-database tech-icon" aria-hidden="true"></i>
                  MySQL
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-database tech-icon" aria-hidden="true"></i>
                  PostgreSQL
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-database tech-icon" aria-hidden="true"></i>
                  MongoDB
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-diagram-3-fill tech-icon" aria-hidden="true"></i>
                  Database Design
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-graph-up-arrow tech-icon" aria-hidden="true"></i>
                  Query Optimization
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-speedometer2 tech-icon" aria-hidden="true"></i>
                  Performance Tuning
                </li>

              </ul>
            </div>


            <!-- ============================= -->
            <!-- 04. FRONTEND & TOOLS -->
            <!-- ============================= -->
            <div class="skill-glass-card">

              <div class="card-title">
                <i class="bi bi-code-slash" aria-hidden="true"></i>
                Frontend & Development Tools
              </div>

              <ul>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-filetype-html tech-icon" aria-hidden="true"></i>
                  HTML5
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-filetype-css tech-icon" aria-hidden="true"></i>
                  CSS3
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-filetype-js tech-icon" aria-hidden="true"></i>
                  JavaScript
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-bootstrap-fill tech-icon" aria-hidden="true"></i>
                  Bootstrap
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-git tech-icon" aria-hidden="true"></i>
                  Git & GitHub
                </li>

                <li>
                  <i class="bi bi-check-lg" aria-hidden="true"></i>
                  <i class="bi bi-tools tech-icon" aria-hidden="true"></i>
                  Postman
                </li>

              </ul>
            </div>

          </div>
        </div>
      </section>

      <!-- ====== SERVICES ====== -->
      <section class="section-padding" id="services" style="background: var(--bg)">
        <div class="container">
          <div class="text-center mb-4">
            <span
              class="badge-freelance"
              style="display: inline-flex; margin-bottom: 0.5rem"
              ><i class="bi bi-briefcase-fill" aria-hidden="true"></i> Services</span
            >
            <h2 class="section-title">Moodle, Laravel & Backend Development Services</h2>
            <p class="section-subtitle">
              From Moodle-based learning platforms to custom Laravel applications, I build secure, scalable, and maintainable solutions tailored to real business and educational needs.
            </p>
            <div class="accent-line"></div>
          </div>

          <div class="row g-4">
            <!-- Moodle LMS -->
            <div class="col-md-6 col-lg-4">
              <div class="service-card text-center h-100">
                <div class="service-icon">
                  <i class="bi bi-mortarboard-fill" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">Moodle LMS Development</h3>

                <p class="service-text">
                  Build and customize Moodle Learning Management Systems with custom
                  plugins, themes, course workflows, reporting, integrations, and
                  automation tailored to your organization.
                </p>

                <div class="service-tags">
                  <span>Moodle</span>
                  <span>PHP</span>
                  <span>Plugins</span>
                  <span>LMS</span>
                </div>
              </div>
            </div>

            <!-- Laravel -->
            <div class="col-md-6 col-lg-4">
              <div class="service-card text-center h-100">
                <div class="service-icon">
                  <i class="bi bi-layers-fill" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">Custom Laravel Applications</h3>

                <p class="service-text">
                  Build secure, scalable Laravel applications including CRM systems,
                  booking platforms, admin panels, business automation tools, and
                  custom web applications.
                </p>

                <div class="service-tags">
                  <span>Laravel</span>
                  <span>PHP</span>
                  <span>MySQL</span>
                  <span>Bootstrap</span>
                </div>
              </div>
            </div>

            <!-- Migration -->
            <div class="col-md-6 col-lg-4">
              <div class="service-card text-center h-100">
                <div class="service-icon">
                  <i class="bi bi-arrow-left-right" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">LMS Migration & Integration</h3>

                <p class="service-text">
                  Migrate courses, users, and content between LMS platforms while
                  integrating payment gateways, video platforms, and third-party
                  services.
                </p>

                <div class="service-tags">
                  <span>Moodle</span>
                  <span>Migration</span>
                  <span>API</span>
                  <span>Integration</span>
                </div>
              </div>
            </div>

            <!-- APIs -->
            <div class="col-md-6 col-lg-4">
              <div class="service-card text-center h-100">
                <div class="service-icon">
                  <i class="bi bi-diagram-3-fill" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">REST APIs & Backend Systems</h3>

                <p class="service-text">
                  Design secure REST APIs and backend systems with authentication, third-party integrations, payment services, and scalable application architecture.
                </p>

                <div class="service-tags">
                  <span>REST API</span>
                  <span>JWT</span>
                  <span>OAuth</span>
                  <span>Payments</span>
                </div>
              </div>
            </div>

            <!-- WordPress -->
            <div class="col-md-6 col-lg-4">
              <div class="service-card text-center h-100">
                <div class="service-icon">
                  <i class="bi bi-wordpress" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">WordPress Plugin Development</h3>

                <p class="service-text">
                  Create custom WordPress plugins, extend existing functionality,
                  integrate APIs, and build tailored solutions for business
                  requirements.
                </p>

                <div class="service-tags">
                  <span>WordPress</span>
                  <span>Plugins</span>
                  <span>WooCommerce</span>
                  <span>PHP</span>
                </div>
              </div>
            </div>

            <!-- Performance -->
            <div class="col-md-6 col-lg-4">
              <div class="service-card text-center h-100">
                <div class="service-icon">
                  <i class="bi bi-speedometer2" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">Application Performance Optimization</h3>

                <p class="service-text">
                  Optimize database queries, improve API response times, increase
                  application performance, and resolve scalability bottlenecks.
                </p>

                <div class="service-tags">
                  <span>Optimization</span>
                  <span>MySQL</span>
                  <span>Laravel</span>
                  <span>Performance</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ====== PROJECTS ====== -->
      <section class="section-padding" id="projects" style="background: #ffffff">
        <div class="container">

          <!-- Section Header -->
          <div class="text-center mb-4">

            <span
              class="badge-freelance"
              style="display: inline-flex; margin-bottom: 0.5rem"
            >
              <i class="bi bi-folder2-open" aria-hidden="true"></i>
              Projects
            </span>

            <h2 class="section-title">
              Selected Projects
            </h2>

            <div class="accent-line"></div>

            <p class="section-subtitle">
              A selection of Moodle, Laravel, and backend solutions built to solve
              real business and learning-platform requirements.
            </p>
          </div>


          <!-- Projects Grid -->
          <div class="row g-4">

            <!-- ================================= -->
            <!-- PROJECT 1 — MOODLE -->
            <!-- ================================= -->
            <div class="col-md-6 col-lg-4">

              <div class="project-card h-100">

                <img
                  src="https://img.magnific.com/free-photo/document-marketing-strategy-business-concept_53876-132231.jpg?semt=ais_hybrid&w=740&q=80"
                  class="project-img"
                  alt="Moodle LMS dashboard showing available courses"
                  loading="lazy"
                />

                <div class="project-content">

                  <span class="project-category">
                    Moodle LMS
                  </span>

                  <h3 class="fw-bold mt-2">
                    Custom Moodle Learning Platform
                  </h3>

                  <p class="project-description">
                    Developed a scalable Moodle Learning Management System with
                    custom plugins, theme customization, payment integration,
                    user management, and REST API development.
                  </p>

                  <div class="project-tech">
                    <span>Moodle</span>
                    <span>PHP</span>
                    <span>REST API</span>
                  </div>

                  <!-- <a href="#" class="project-btn">View Details <i class="bi bi-arrow-right" aria-hidden="true"></i></a> -->
                </div>
              </div>

            </div>


            <!-- ================================= -->
            <!-- PROJECT 2 — LARAVEL CRM -->
            <!-- ================================= -->
            <div class="col-md-6 col-lg-4">

              <div class="project-card h-100">

                <img src="https://img.magnific.com/free-photo/document-marketing-strategy-business-concept_53876-132231.jpg?semt=ais_hybrid&w=740&q=80" class="project-img" alt="CRM dashboard showing business metrics and customer records" loading="lazy"/>

                <div class="project-content">

                  <span class="project-category">
                    Laravel
                  </span>

                  <h3 class="fw-bold mt-2">
                    CRM & Business Management System
                  </h3>

                  <p class="project-description">
                    Built a custom CRM application featuring customer management,
                    lead tracking, role-based access control, reporting dashboards,
                    and business automation.
                  </p>

                  <div class="project-tech">
                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>MySQL</span>
                  </div>

                  <!-- <a href="#" class="project-btn">View Details <i class="bi bi-arrow-right" aria-hidden="true"></i></a> -->
                </div>

              </div>

            </div>


            <!-- ================================= -->
            <!-- PROJECT 3 — BOOKING -->
            <!-- ================================= -->
            <div class="col-md-6 col-lg-4">

              <div class="project-card h-100">

                <img
                  src="https://img.magnific.com/free-photo/document-marketing-strategy-business-concept_53876-132231.jpg?semt=ais_hybrid&w=740&q=80"
                  class="project-img"
                  alt="Appointment booking interface with a calendar and available time slots"
                  loading="lazy"
                />

                <div class="project-content">

                  <span class="project-category">
                    Laravel
                  </span>

                  <h3 class="fw-bold mt-2">
                    Appointment & Booking Platform
                  </h3>

                  <p class="project-description">
                    Developed a booking management system with scheduling,
                    appointment tracking, notifications, admin dashboard,
                    and API integrations.
                  </p>

                  <div class="project-tech">
                    <span>Laravel</span>
                    <span>MySQL</span>
                    <span>REST API</span>
                  </div>

                  <!-- <a href="#" class="project-btn">View Details <i class="bi bi-arrow-right" aria-hidden="true"></i></a> -->
                </div>

              </div>

            </div>

          </div>
        </div>
      </section>

      <!-- ====== EXPERIENCE ====== -->
      <section class="section-padding" id="experience" style="background: var(--bg)">
        <div class="container">

          <!-- Section Header -->
          <div class="text-center mb-4">

            <span
              class="badge-freelance"
              style="display: inline-flex; margin-bottom: 0.5rem"
            >
              <i class="bi bi-briefcase-fill" aria-hidden="true"></i>
              Experience
            </span>

            <h2 class="section-title">
              Professional Journey
            </h2>

            <p class="section-subtitle">
              My experience building Laravel applications, Moodle LMS solutions,
              REST APIs, and business systems across different development roles.
            </p>

            <div class="accent-line"></div>
          </div>


          <!-- Experience Cards -->
          <div class="row g-4">


            <!-- ================================= -->
            <!-- 01. CURRENT ROLE -->
            <!-- ================================= -->
            <div class="col-lg-4">

              <div class="exp-card h-100">

                <div
                  class="d-flex justify-content-between align-items-center mb-3"
                >

                  <div>
                    <h3 class="fw-bold mb-1">
                      PHP Developer
                    </h3>

                    <div class="text-secondary">
                      LDS Engineers Private Limited
                    </div>
                  </div>

                  <span class="badge-freelance">
                    Current
                  </span>

                </div>


                <p class="text-secondary mb-3">
                  <i class="bi bi-calendar3" aria-hidden="true"></i>
                  May 2025 – Present
                </p>


                <ul class="experience-list">

                  <li>
                    Developing scalable Laravel backend applications and
                    business systems.
                  </li>

                  <li>
                    Building custom Moodle LMS features, plugins, and
                    integrations.
                  </li>

                  <li>
                    Improved API response time by nearly 40% through
                    query optimization and database performance improvements.
                  </li>

                </ul>

              </div>

            </div>


            <!-- ================================= -->
            <!-- 02. PREVIOUS ROLE -->
            <!-- ================================= -->
            <div class="col-lg-4">

              <div class="exp-card h-100">

                <div
                  class="d-flex justify-content-between align-items-center mb-3"
                >

                  <div>
                    <h3 class="fw-bold mb-1">
                      Full Stack Developer
                    </h3>

                    <div class="text-secondary">
                      Udhhyog
                    </div>
                  </div>

                  <span class="badge-freelance">
                    Full-Time
                  </span>

                </div>


                <p class="text-secondary mb-3">
                  <i class="bi bi-calendar3" aria-hidden="true"></i>
                  May 2024 – May 2025
                </p>


                <ul class="experience-list">

                  <li>
                    Developed CRM and business management systems using
                    Laravel and PHP.
                  </li>

                  <li>
                    Built booking platforms, custom admin panels, and
                    business workflows.
                  </li>

                  <li>
                    Developed REST APIs, database structures, and
                    third-party integrations.
                  </li>

                </ul>

              </div>

            </div>


            <!-- ================================= -->
            <!-- 03. INTERNSHIP -->
            <!-- ================================= -->
            <div class="col-lg-4">

              <div class="exp-card h-100">

                <div
                  class="d-flex justify-content-between align-items-center mb-3"
                >

                  <div>
                    <h3 class="fw-bold mb-1">
                      Full Stack Developer Intern
                    </h3>

                    <div class="text-secondary">
                      Brandshow Consultancy Services
                    </div>
                  </div>

                  <span class="badge-freelance">
                    Internship
                  </span>

                </div>


                <p class="text-secondary mb-3">
                  <i class="bi bi-calendar3" aria-hidden="true"></i>
                  Oct 2023 – May 2024
                </p>


                <ul class="experience-list">

                  <li>
                    Built backend modules using PHP and Laravel.
                  </li>

                  <li>
                    Developed REST APIs and implemented authentication
                    and role management.
                  </li>

                  <li>
                    Designed relational databases and SQL queries for
                    real-world web applications.
                  </li>

                </ul>

              </div>

            </div>

          </div>

        </div>
      </section>

      <!-- ====== WHY WORK WITH ME ====== -->
      <section class="section-padding" id="why-work-with-me" style="background: var(--bg)">
        <div class="container">

          <!-- Section Header -->
          <div class="text-center mb-4">

            <span
              class="badge-freelance"
              style="display: inline-flex; margin-bottom: 0.5rem"
            >
              <i class="bi bi-star-fill" aria-hidden="true"></i>
              Why Work With Me
            </span>

            <h2 class="section-title">
              Focused on Quality, Reliability & Results
            </h2>

            <p class="section-subtitle">
              I combine strong technical expertise with a practical, business-focused
              approach to deliver solutions that are reliable, maintainable, and built
              for long-term growth.
            </p>

            <div class="accent-line"></div>

          </div>


          <!-- Why Work With Me Cards -->
          <div class="row g-4">

            <!-- 01. Clean Code -->
            <div class="col-md-6 col-lg-3">

              <div class="service-card text-center h-100">

                <div class="service-icon">
                  <i class="bi bi-code-square" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">
                  Clean & Maintainable Code
                </h3>

                <p class="service-text">
                  I build structured applications that are easier to maintain,
                  extend, debug, and scale as your business grows.
                </p>

              </div>

            </div>


            <!-- 02. Backend Expertise -->
            <div class="col-md-6 col-lg-3">

              <div class="service-card text-center h-100">

                <div class="service-icon">
                  <i class="bi bi-server" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">
                  Backend-Focused Expertise
                </h3>

                <p class="service-text">
                  Strong experience with Moodle, Laravel, PHP, REST APIs,
                  databases, authentication, and backend architecture.
                </p>

              </div>

            </div>


            <!-- 03. Business Solutions -->
            <div class="col-md-6 col-lg-3">

              <div class="service-card text-center h-100">

                <div class="service-icon">
                  <i class="bi bi-lightbulb-fill" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">
                  Business-Oriented Solutions
                </h3>

                <p class="service-text">
                  I focus on understanding the actual business problem and
                  building practical solutions rather than simply writing code.
                </p>

              </div>

            </div>


            <!-- 04. Communication -->
            <div class="col-md-6 col-lg-3">

              <div class="service-card text-center h-100">

                <div class="service-icon">
                  <i class="bi bi-chat-dots-fill" aria-hidden="true"></i>
                </div>

                <h3 class="fw-bold">
                  Reliable Communication
                </h3>

                <p class="service-text">
                  Clear communication, structured development, regular updates,
                  and a professional approach from planning to delivery.
                </p>

              </div>

            </div>

          </div>

        </div>
      </section>

      <!-- ====== CONTACT ====== -->
      <section class="contact-section" id="contact">
        <div class="contact-container">

          <!-- Section Header -->
          <div class="contact-header">

            <span class="contact-badge">
              <i class="bi bi-envelope-fill" aria-hidden="true"></i>
              Contact
            </span>

            <h2 class="contact-title">
              Let's Build Something Great
            </h2>

            <div class="contact-accent-line"></div>

            <p class="contact-subtitle">
              Have a Moodle LMS, Laravel application, REST API, or custom web
              solution in mind? Let's discuss your requirements and find the
              right solution for your project.
            </p>

          </div>


          <!-- Contact Glass Card -->
          <div class="contact-glass-card">

            <div class="contact-grid">


              <!-- ================================= -->
              <!-- LEFT SIDE: CONTACT INFORMATION -->
              <!-- ================================= -->
              <div class="contact-left">

                <div class="contact-info-list">

                  <!-- Email -->
                  <div class="contact-item">

                    <div class="contact-icon">
                      <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                    </div>

                    <div class="contact-text">
                      <span class="contact-label">
                        Email
                      </span>

                      <a
                        href="mailto:ashuraj@codebridgeit.com"
                        class="contact-value"
                      >
                        ashuraj@codebridgeit.com
                      </a>
                    </div>

                  </div>


                  <!-- Location -->
                  <div class="contact-item">

                    <div class="contact-icon">
                      <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
                    </div>

                    <div class="contact-text">
                      <span class="contact-label">
                        Location
                      </span>

                      <span class="contact-value">
                        India · Remote Worldwide
                      </span>
                    </div>

                  </div>


                  <!-- Availability -->
                  <div class="contact-item">

                    <div class="contact-icon">
                      <i class="bi bi-briefcase-fill" aria-hidden="true"></i>
                    </div>

                    <div class="contact-text">
                      <span class="contact-label">
                        Availability
                      </span>

                      <span class="contact-value">
                        Available for Freelance Projects
                      </span>
                    </div>

                  </div>


                  <!-- Response Time -->
                  <div class="contact-item">

                    <div class="contact-icon">
                      <i class="bi bi-clock-fill" aria-hidden="true"></i>
                    </div>

                    <div class="contact-text">
                      <span class="contact-label">
                        Response Time
                      </span>

                      <span class="contact-value">
                        Usually within 24 hours
                      </span>
                    </div>

                  </div>

                </div>


                <!-- Social Links -->
                <div class="contact-socials">

                  <a
                    href="https://github.com/AshurajSrivastav01"
                    class="social-circle"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="GitHub"
                  >
                    <i class="bi bi-github" aria-hidden="true"></i>
                  </a>

                  <a
                    href="https://www.linkedin.com/in/ashuraj-srivastav/?skipRedirect=true"
                    class="social-circle"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="LinkedIn"
                  >
                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                  </a>

                  <a
                    href="mailto:ashuraj@codebridgeit.com"
                    class="social-circle"
                    aria-label="Email"
                  >
                    <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                  </a>

                </div>

              </div>


              <!-- ================================= -->
              <!-- RIGHT SIDE: CTA -->
              <!-- ================================= -->
              <div class="contact-right">

                <!-- Availability Status -->
                <div class="status-wrapper">

                  <div class="status-badge">
                    <span class="status-dot"></span>
                    Available for Freelance Projects
                  </div>

                  <p class="status-subtext">
                    Usually replies within 24 hours
                  </p>

                </div>


                <!-- Divider -->
                <div class="right-divider"></div>


                <!-- Action Buttons -->
                <div class="contact-actions">

                  <a
                    href="mailto:ashuraj@codebridgeit.com?subject=Project%20Inquiry"
                    class="btn-primary-action"
                  >
                    Hire Me
                    <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                  </a>

                  <!-- Replace the href with your actual resume path -->
                  <!-- <a
                    href="{{ asset('asset/resume/Ashuraj-Srivastav-Resume.pdf') }}"
                    class="btn-secondary-action"
                    download
                  >
                    <i class="bi bi-download" aria-hidden="true"></i>
                    Download Resume
                  </a> -->

                </div>

              </div>

            </div>

          </div>

        </div>
      </section>
    </main>

    <!-- ====== FOOTER ====== -->
    <footer class="footer-note py-4" style="background: var(--bg-dark);border-top: 1px solid rgba(255, 255, 255, 0.08);">
      <div class="container">

        <div class="row align-items-center">

          <!-- Left -->
          <div class="col-lg-6 text-center text-lg-start mb-3 mb-lg-0">

            <h3 class="fw-bold mb-1">
              Ashuraj Srivastav
            </h3>

            <p class="mb-0 text-secondary">
              Moodle & Laravel Developer • LMS & Backend Specialist
            </p>

          </div>


          <!-- Right -->
          <div class="col-lg-6 text-center text-lg-end">

            <!-- GitHub -->
            <a
              href="https://github.com/AshurajSrivastav01"
              target="_blank"
              rel="noopener noreferrer"
              class="footer-icon"
              aria-label="GitHub"
            >
              <i class="bi bi-github" aria-hidden="true"></i>
            </a>


            <!-- LinkedIn -->
            <a
              href="https://www.linkedin.com/in/ashuraj-srivastav/?skipRedirect=true"
              target="_blank"
              rel="noopener noreferrer"
              class="footer-icon"
              aria-label="LinkedIn"
            >
              <i class="bi bi-linkedin" aria-hidden="true"></i>
            </a>


            <!-- Email -->
            <a
              href="mailto:ashuraj@codebridgeit.com"
              class="footer-icon"
              aria-label="Email"
            >
              <i class="bi bi-envelope-fill" aria-hidden="true"></i>
            </a>

          </div>

        </div>


        <!-- Divider -->
        <hr
          class="my-4"
          style="border-color: rgba(255, 255, 255, 0.08)"
        />


        <!-- Copyright -->
        <div class="text-center small text-secondary">

          © 2026 Ashuraj Srivastav.
          All rights reserved.

          <!-- <span class="mx-1">•</span>

          Built with
          <i class="bi bi-heart-fill text-danger" aria-hidden="true"></i>
          using Laravel, Bootstrap & JavaScript. -->

        </div>

      </div>
    </footer>

    <!-- ====== JAVASCRIPT ====== -->
    <script>
      (function () {
        "use strict";

        const nav = document.getElementById("premiumNav");
        const hamburger = document.getElementById("hamburgerBtn");
        const overlay = document.getElementById("mobileOverlay");
        const closeBtn = document.getElementById("closeMenuBtn");
        const allNavLinks = document.querySelectorAll("[data-nav]");

        // scroll effect
        function handleScroll() {
          if (window.scrollY > 20) {
            nav.classList.add("scrolled");
          } else {
            nav.classList.remove("scrolled");
          }
        }
        window.addEventListener("scroll", handleScroll, { passive: true });
        handleScroll();

        // mobile menu
        function openMenu() {
          overlay.classList.add("open");
          hamburger.setAttribute("aria-expanded", "true");
          document.body.style.overflow = "hidden";
        }

        function closeMenu() {
          overlay.classList.remove("open");
          hamburger.setAttribute("aria-expanded", "false");
          document.body.style.overflow = "";
        }
        hamburger.addEventListener("click", openMenu);
        closeBtn.addEventListener("click", closeMenu);
        overlay.addEventListener("click", function (e) {
          if (e.target === overlay) closeMenu();
        });

        // active link + smooth scroll
        allNavLinks.forEach((link) => {
          link.addEventListener("click", function (e) {
            // remove active from all
            allNavLinks.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
            if (overlay.classList.contains("open")) closeMenu();
            // smooth scroll (Bootstrap handles via #)
          });
        });

        // set active based on scroll (optional)
        const sections = [
          "about",
          "skills",
          "services",
          "projects",
          "experience",
          "contact",
        ];
        window.addEventListener("scroll", function () {
          let current = "";
          sections.forEach((id) => {
            const el = document.getElementById(id);
            if (el && window.scrollY >= el.offsetTop - 150) {
              current = id;
            }
          });
          allNavLinks.forEach((link) => {
            link.classList.toggle(
              "active",
              link.getAttribute("href") === "#" + current,
            );
          });
        });

        document.addEventListener("keydown", function (e) {
          if (e.key === "Escape" && overlay.classList.contains("open"))
            closeMenu();
        });
        window.addEventListener("resize", function () {
          if (window.innerWidth >= 992 && overlay.classList.contains("open"))
            closeMenu();
        });
      })();
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
