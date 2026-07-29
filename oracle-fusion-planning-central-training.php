<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <?php include_once "all_courses_details.php"; ?>
  <?php include_once "meta-data.php"; ?>

  <!-- Preload LCP image for mobile -->
  <link rel="preload" as="image" href="assets/images/bg/bg-image-10.jpg" fetchpriority="high">

  <?php include_once "common_css.php"; ?>

  <!-- Critical CSS for mobile above-the-fold -->
  <style>
    /* Critical mobile styles - inline for fast first paint */
    .rbt-breadcrumb-default {
      position: relative;
      overflow: hidden
    }

    .rbt-breadcrumb-style-3 .breadcrumb-inner {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1
    }

    .rbt-breadcrumb-style-3 .breadcrumb-inner img {
      width: 100%;
      height: 100%;
      object-fit: cover
    }

    .rbt-breadcrumb-style-3 {
      padding: 60px 0
    }

    @media(max-width:767px) {
      .rbt-breadcrumb-style-3 {
        padding: 40px 0
      }
    }

    .title {
      margin: 0;
      font-weight: 700
    }

    .description {
      margin: 10px 0
    }

    .rbt-course-details-feature {
      gap: 10px
    }

    .sidebar-video-hidden {
      display: none
    }

    .crs-features {
      display: none
    }

    @media(min-width:992px) {
      .crs-features {
        display: block
      }
    }

    /* Optimize rendering of below-fold content */
    .review-wrapper,
    .featured-wrapper,
    .rbt-related-course-area,
    .rbt-course-action-bottom,
    footer {
      content-visibility: auto;
      contain-intrinsic-size: auto 500px
    }

    @media(max-width:767px) {

      .coursecontent-wrapper,
      .details-wrapper {
        content-visibility: auto;
        contain-intrinsic-size: auto 400px
      }
    }
  </style>
</head>
<style>
  .download-brocher {
    height: 41px;
    padding: 0px;
    line-height: 41px;
    font-weight: 400;
  }

  .course-sub-title {
    color: #000;
  }

  b,
  strong {
    font-weight: bold;
    color: #000;
  }

  ol li {
    color: #6b7385;
    font-size: 14px;
  }

  .has-show-more-inner-content ul li {
    color: #6b7385;
    font-size: 14px;
  }
</style>

<body>


  <?php include_once "schema.php"; ?>

  <!-- Start Header Area -->
  <?php include_once "header.php"; ?>

  <!-- Mobile Menu Section -->
  <?php include_once "mobile_menu.php"; ?>
  <!-- Start Side Vav -->
  <?php include_once "side_nav.php"; ?>
  <!-- End Side Vav -->
  <a class="close_side_menu" href="javascript:void(0);"></a>

  <!-- Start breadcrumb Area -->
  <div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">
    <div class="breadcrumb-inner">
      <img src="assets/images/bg/bg-image-10.jpg" alt="Oracle Fusion Planning Central Training" width="1920" height="600" fetchpriority="high" decoding="async">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="content">
            <div class="content text-start">
              <ul class="page-list">
                <li class="rbt-breadcrumb-item"><a href="/">Home</a></li>
                <li>
                  <div class="icon-right"><i class="feather-chevron-right"></i></div>
                </li>
                <li class="rbt-breadcrumb-item active">Oracle Fusion</li>
              </ul>
              <h1 class="title">Oracle Fusion Planning Central Training</h1>
              <p class="description"><?php echo $short_descriptions[$current_slug]; ?> </p>

              <div class="d-flex align-items-center flex-wrap rbt-course-details-feature mt--10">

                <div class="feature-sin best-seller-badge">
                  <span class="rbt-badge-2">
                    <span class="image"><img src="assets/images/icons/card-icon-1.png" alt="Best Seller Icon" width="20" height="20" loading="lazy"></span> Bestseller
                  </span>
                </div>

                <div class="feature-sin rating">
                  <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                  <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                  <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                  <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                  <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                  <a href="javascript:void(0);">(<?php echo $course_details[$current_slug]['rating'] ?>)</a>

                </div>

                <div class="feature-sin total-rating">
                  <a class="rbt-badge-4" href="javascript:void(0);"><?php echo $course_details[$current_slug]['rating_count'] ?>
                    Ratings</a>
                </div>

                <div class="feature-sin total-student">
                  <span><?php echo $course_details[$current_slug]['students'] ?> Students</span>
                </div>

                <?php include_once "demo_video_mobile.php"; ?><?php include_once "download_brochure.php"; ?>

                <?php include_once "demo_video_modal.php"; ?>

              </div>
              <?php include_once "claim_instant_offer.php"; ?>
              <section class="hero-vibrant">
                <div class="hero-content">

                  <div class="hero-form">
                    <form>
                      <input type="text" placeholder="Name" required />
                      <input type="email" placeholder="Email" required />
                      <input type="tel" placeholder="Phone" required />
                      <button type="submit">Get Access →</button>
                    </form>
                  </div>

                </div>
              </section>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb Area -->





  <div class="rbt-course-details-area pb--20 rbt-mbl-css">
    <div class="container">
      <div class="row g-5 crs-container">
        <div class="col-lg-8 crs-details" id="crs-details">
          <div class="course-details-content">
            <div class="rbt-inner-onepage-navigation sticky-top mt--10">
              <nav class="mainmenu-nav onepagenav">
                <ul class="mainmenu">
                  <li class="current">
                    <a href="#overview">Overview</a>
                  </li>
                  <li>
                    <a href="#coursecontent">Curriculum</a>
                  </li>
                  <li>
                    <a href="#details">Details</a>
                  </li>
                  <li>
                    <a href="#review">Review</a>
                  </li>
                  <li>
                    <a href="#faq">Faq</a>
                  </li>
                </ul>
              </nav>
            </div>

            <!-- Start Course Feature Box  -->
            <div class="rbt-course-feature-box overview-wrapper rbt-border-with-box mt--30" id="overview">
              <div class="rbt-course-feature-inner">
                <div class="about-content">
                  <span class="about-label">About the Course</span>

                  <h2 class="about-heading">
                    What is <span class="gradient-text">Oracle Fusion Planning Central?</span>
                  </h2>

                  <p class="about-description">
                    Oracle Fusion Planning Central is a unified, cloud-based planning solution within Oracle Fusion SCM Cloud that brings together demand planning, supply planning, and S&OP processes on a single platform.
                  </p>

                  <p class="about-description">
                    It enables organizations to create accurate forecasts, generate feasible supply plans, manage inventory effectively, and respond quickly to demand and supply changes. Planning Central integrates seamlessly with manufacturing, inventory, procurement, and order management modules to provide end-to-end supply chain visibility.
                  </p>

                  <p class="about-description">
                    With real-time data, advanced analytics, and collaborative planning capabilities, Oracle Fusion Planning Central helps organizations improve forecast accuracy, reduce inventory costs, and enhance overall supply chain performance.
                  </p>
                  <p class="about-description">Oracle Fusion Planning Central Training is designed for professionals who want to build strong, practical skills in supply chain planning using Oracle’s advanced cloud ERP solutions. As organizations move toward data-driven and integrated planning models, Oracle Planning Central plays a critical role in balancing demand, supply, and inventory across the supply chain.
                  </p>
                  <p class="about-description">This course focuses on understanding how planning processes work in real business environments, including forecasting, supply planning, inventory optimization, and sales and operations planning. The training emphasizes functional clarity, system navigation, and scenario-based learning aligned with current industry requirements.</p>
                </div>

                <h3 class="who-label" style="margin-top:20px;">Key Modules</h3>
                <div class="tag-container">
                  <div class="tag">Planning Overview</div>
                  <div class="tag">Data Collection & Setup</div>
                  <div class="tag">Demand Management</div>
                  <div class="tag">Supply Planning</div>
                  <div class="tag">Inventory Optimization</div>
                  <div class="tag">Sales & Operations Planning</div>
                  <div class="tag">Planning Analytics & Exceptions</div>
                  <div class="tag">Integration with Procurement / Manufacturing / Inventory</div>
                </div>




                <div class="who-header">
                  <span class="who-label">Who It's For</span>
                  <h2 class="who-heading">
                    Who Should <span class="gradient-text">Learn </span>in This Oracle Fusion Planning Central?
                  </h2>
                </div>

                <div class="who-grid">

                  <!-- Card 1 -->
                  <div class="who-card">
                    <div class="icon-box">
                      <!-- Graduation Cap -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                        <path d="M22 10v6" />
                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                      </svg>
                    </div>
                    <h3>Fresh Graduates & Entry-Level Aspirants</h3>
                    <p>Graduates looking to start a career in Oracle Planning and Supply Chain Cloud.</p>
                  </div>

                  <!-- Card 2 -->
                  <div class="who-card">
                    <div class="icon-box">
                      <!-- Building -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z" />
                        <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2" />
                        <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2" />
                        <path d="M10 6h4" />
                        <path d="M10 10h4" />
                        <path d="M10 14h4" />
                        <path d="M10 18h4" />
                      </svg>
                    </div>
                    <h3>Oracle EBS Professionals</h3>
                    <p>Professionals upgrading from Oracle EBS Planning modules to Oracle Fusion Planning Central.</p>
                  </div>

                  <!-- Card 3 -->
                  <div class="who-card">
                    <div class="icon-box">
                      <!-- Chart -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                        <path d="M18 17V9" />
                        <path d="M13 17V5" />
                        <path d="M8 17v-3" />
                      </svg>
                    </div>
                    <h3>Supply Chain, Procurement & Planning Professionals</h3>
                    <p>Demand planners, supply planners, and operations teams seeking career growth in planning roles.
                    </p>
                  </div>

                  <!-- Card 4 -->
                  <div class="who-card">
                    <div class="icon-box">
                      <!-- Monitor -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="20" height="14" x="2" y="3" rx="2" />
                        <line x1="8" x2="16" y1="21" y2="21" />
                        <line x1="12" x2="12" y1="17" y2="21" />
                      </svg>
                    </div>
                    <h3>IT & ERP Consultants</h3>
                    <p>Consultants building expertise in Oracle Fusion Planning Central implementations.</p>
                  </div>

                  <!-- Card 5 -->
                  <div class="who-card">
                    <div class="icon-box">
                      <!-- Briefcase -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        <rect width="20" height="14" x="2" y="6" rx="2" />
                      </svg>
                    </div>
                    <h3>SCM, WMS & Manufacturing Professionals
                    </h3>
                    <p>Professionals with SCM, WMS, or Manufacturing experience expanding into advanced planning roles.</p>
                  </div>

                  <!-- Card 5 -->
                  <div class="who-card">
                    <div class="icon-box">
                      <!-- Briefcase -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 17l6-6 4 4 7-7"></path>
                        <path d="M14 8h6v6"></path>
                      </svg>
                    </div>
                    <h3>Business Owners & Career Switchers</h3>
                    <p>Business owners and professionals transitioning into Oracle Supply Chain and Planning careers.</p>
                  </div>

                </div>

                <div class="highlights-header">
                  <span class="highlights-label">What You Get</span>
                  <h2 class="highlights-heading">
                    Oracle Fusion Planning Central <span class="gradient-text">Highlights</span>
                  </h2>
                </div>

                <div class="highlights-grid">

                  <!-- Card 1 -->
                  <div class="highlight-card">
                    <div class="icon-wrapper">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path>
                        <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                      </svg>
                    </div>
                    <h3>Live Instructor-Led Online Sessions</h3>
                    <p>Interactive live classes covering planning concepts, system navigation, and real-time business scenarios.</p>
                  </div>

                  <!-- Card 2 -->
                  <div class="highlight-card">
                    <div class="icon-wrapper">
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09a1.65 1.65 0 0 0-1-1.51 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09a1.65 1.65 0 0 0 1.51-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06A2 2 0 1 1 7.04 3.4l.06.06a1.65 1.65 0 0 0 1.82.33h0A1.65 1.65 0 0 0 10 2.28V2a2 2 0 1 1 4 0v.09c0 .65.39 1.23 1 1.51h0a1.65 1.65 0 0 0 1.82-.33l.06-.06A2 2 0 1 1 20.6 7.04l-.06.06c-.46.46-.6 1.14-.33 1.82v0c.28.61.86 1 1.51 1H22a2 2 0 1 1 0 4h-.09c-.65 0-1.23.39-1.51 1z"></path>
                      </svg>
                    </div>
                    <h3>LMS Access with Recorded Sessions</h3>
                    <p>Session recordings available through the LMS for revision and flexible self-paced learning.
                    </p>
                  </div>

                  <!-- Card 3 -->
                  <div class="highlight-card">
                    <div class="icon-wrapper">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <rect width="20" height="8" x="2" y="2" rx="2"></rect>
                        <rect width="20" height="8" x="2" y="14" rx="2"></rect>
                        <line x1="6" x2="6.01" y1="6" y2="6"></line>
                        <line x1="6" x2="6.01" y1="18" y2="18"></line>
                      </svg>
                    </div>
                    <h3>Hands-On Oracle Cloud Practice</h3>
                    <p>Practical exposure to Oracle Fusion Planning Central through guided exercises and planning scenarios.</p>
                  </div>

                  <!-- Card 4 -->
                  <div class="highlight-card">
                    <div class="icon-wrapper">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                        <circle cx="12" cy="8" r="6"></circle>
                      </svg>
                    </div>
                    <h3>Course Completion Certificate</h3>
                    <p>Receive a certificate validating your Oracle Fusion Planning Central training completion.</p>
                  </div>

                  <!-- Card 5 -->
                  <div class="highlight-card">
                    <div class="icon-wrapper">
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 7a2 2 0 0 1 2-2h5l2 2h7a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"></path>
                      </svg>
                    </div>
                    <h3>Structured Learning Path</h3>
                    <p>Step-by-step progression from planning basics to advanced planning processes.
                    </p>
                  </div>

                  <!-- Card 6 -->
                  <div class="highlight-card">
                    <div class="icon-wrapper">
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                      </svg>
                    </div>
                    <h3>Interview & Career Support</h3>
                    <p>Support for interview preparation, role understanding, and planning-related job expectations.</p>
                  </div>

                </div>
                <!-- Overview End -->
              </div>

            </div>
            <!-- End Course Feature Box  -->

            <!-- Start Course Content  -->
            <?php require_once "curriculum.php"; ?>

            <!-- End Course Content  -->

            <!-- Start Course Feature Box  -->
            <div class="rbt-course-feature-box rbt-border-with-box details-wrapper mt--30" id="details">
              <h2 class="rbt-title-style-3">Course Details</h2>
              <div class="row g-5">
                <!-- Start Feture Box  -->
                <div class="col-lg-6">
                  <div class="section-title">
                    <h3 class="rbt-title-style-3 mb--20">Requirements</h3>
                  </div>
                  <ul class="rbt-list-style-1">
                    <?php foreach ($requirements[$current_slug] as $requirement) : ?>
                      <li><i class="feather-check"></i><?php echo $requirement; ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <!-- End Feture Box  -->

                <!-- Start Feture Box  -->
                <div class="col-lg-6">
                  <div class="section-title">
                    <h3 class="rbt-title-style-3 mb--20">What Will You Learn</h3>
                  </div>
                  <ul class="rbt-list-style-1">
                    <?php foreach ($learnings[$current_slug] as $learn) : ?>
                      <li><i class="feather-check"></i><?php echo $learn; ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <!-- End Feture Box  -->
              </div>

              <div class="why-header">
                <span class="why-label">Why Us</span>
                <h2 class="why-heading">
                  Why Choose <span class="gradient-text">Soft Online Training?</span>
                </h2>
              </div>

              <div class="why-container">

                <!-- LEFT TRAINER CARD -->
                <div class="trainer-card">
                  <div class="trainer-header">
                    <div class="trainer-avatar">K</div>
                    <div>
                      <h2>Mr. Santhosh</h2>
                      <p>Oracle Fusion Supply Chain Planning Expert</p>
                    </div>
                  </div>

                  <ul class="trainer-points">
                    <li>
                      <h3>Senior Oracle professional with 22+ years of experience in enterprise supply chain and ERP solutions</h3>
                    </li>
                    <li>
                      <h3>Deep expertise in Oracle Fusion Supply Chain Planning modules including demand planning, supply planning, and inventory optimization</h3>
                    </li>
                    <li>
                      <h3>Mentored thousands of learners and professionals transitioning into Oracle Cloud planning roles</h3>
                    </li>
                    <li>
                      <h3>Focuses on real-time supply chain planning scenarios, forecasting accuracy, and strategic planning processes</h3>
                    </li>
                  </ul>

                </div>

                <!-- RIGHT FEATURES LIST -->
                <div class="why-features">

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- Shield SVG -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                        <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"></path>
                        <path d="M2 13h20"></path>
                      </svg>
                    </div>
                    <div>
                      <h3>Industry-Oriented Training</h3>
                      <p>Course content aligned with real-world Oracle Fusion Planning Central job roles and project expectations.</p>
                    </div>
                  </div>

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- User SVG -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="9" y="3" width="6" height="4" rx="1"></rect>
                        <path d="M9 5H7a2 2 0 0 0-2 2v14h14V7a2 2 0 0 0-2-2h-2"></path>
                        <path d="M9 12h6"></path>
                        <path d="M9 16h6"></path>
                      </svg>
                    </div>
                    <div>
                      <h3>Experienced Trainers</h3>
                      <p>Learn from trainers with hands-on experience in Oracle SCM and planning implementations.</p>
                    </div>
                  </div>

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- Brain SVG -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M2 21c0-4 3-7 7-7"></path>
                        <polyline points="16 11 18 13 22 9"></polyline>
                      </svg>
                    </div>
                    <div>
                      <h3>Practical Planning Focus</h3>
                      <p>Training emphasizes how planning decisions impact manufacturing, procurement, and inventory.</p>
                    </div>
                  </div>

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- Layers SVG -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 4 23 10 17 10"></polyline>
                        <polyline points="1 20 1 14 7 14"></polyline>
                        <path d="M3.5 9a9 9 0 0 1 14-3.5L23 10"></path>
                        <path d="M20.5 15a9 9 0 0 1-14 3.5L1 14"></path>
                      </svg>
                    </div>
                    <div>
                      <h3>Updated Cloud Curriculum</h3>
                      <p>Content is regularly updated to reflect Oracle Cloud quarterly enhancements.</p>
                    </div>
                  </div>

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- Award SVG -->
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="5" width="18" height="16" rx="2"></rect>
                        <path d="M16 3v4"></path>
                        <path d="M8 3v4"></path>
                        <path d="M3 11h18"></path>
                      </svg>
                    </div>
                    <div>
                      <h3>Flexible Learning Options</h3>
                      <p>Multiple batch schedules designed for working professionals and students.</p>
                    </div>
                  </div>

                </div>

              </div>

              <div class="career-header">
                <span class="career-label">Career Impact</span>
                <h2 class="career-heading">
                  Career Outcomes & <span class="gradient-text">Salary Data</span>
                </h2>
              </div>

              <div class="career-table-wrapper">
                <div class="table-scroll">
                  <table class="career-table">

                    <thead>
                      <tr>
                        <th>Job Role</th>
                        <th>India</th>
                        <th>USA</th>
                        <th>UK</th>
                      </tr>
                    </thead>

                    <tbody class="Career-Outcomes">
                      <tr class="career-Outcome">
                        <td>
                          <h3>SCM Functional Consultant</h3>
                        </td>
                        <td>₹8-18 LPA</td>
                        <td>$85-130K</td>
                        <td>£50-80K</td>
                      </tr>

                      <tr class="career-Outcome">
                        <td>
                          <h3>Oracle Procurement Lead</h3>
                        </td>
                        <td>₹12-25 LPA</td>
                        <td>$95-145K</td>
                        <td>£60-95K</td>
                      </tr>

                      <tr class="career-Outcome">
                        <td>
                          <h3>SCM Technical Consultant</h3>
                        </td>
                        <td>₹10-22 LPA</td>
                        <td>$90-140K</td>
                        <td>£55-90K</td>
                      </tr>

                      <tr class="career-Outcome">
                        <td>
                          <h3>Inventory/WMS Analyst</h3>
                        </td>
                        <td>₹7-15 LPA</td>
                        <td>$75-115K</td>
                        <td>£45-75K</td>
                      </tr>

                      <tr class="career-Outcome">
                        <td>
                          <h3>Supply Chain Manager</h3>
                        </td>
                        <td>₹15-35 LPA</td>
                        <td>$110-170K</td>
                        <td>£70-110K</td>
                      </tr>

                      <tr class="career-Outcome">
                        <td>
                          <h3>Oracle Cloud Architect</h3>
                        </td>
                        <td>₹20-45 LPA</td>
                        <td>$130-200K</td>
                        <td>£85-140K</td>
                      </tr>

                    </tbody>

                  </table>
                </div>
              </div>
            </div>
            <!-- End Course Feature Box  -->

            <!-- Start Intructor Area  -->

            <!-- End Intructor Area  -->

            <!-- Start Edu Review List  -->
            <?php include_once "ratings.php"; ?>
            <!-- End Edu Review List  -->

            <?php include_once "reviews.php"; ?>

            <?php include_once "faq.php";  ?>



          </div>

        </div>

        <div class="col-lg-4 crs-features" id="crs-features">
          <div class="course-sidebar sticky-top rbt-border-with-box course-sidebar-top rbt-gradient-border video-card-mbl">
            <div class="inner">
              <!-- Start Viedo Wrapper  -->
              <a class="video-popup-wrapper text-center sidebar-video-hidden mb--15" id="demo_video_form" style="display: none;" onclick="clickedFrom('demo_video')" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:void(0);">
                <div class="video-content">
                  <img class="w-100 rbt-radius" src="assets/images/course/custom/<?php echo $course_details[$current_slug]['thumbnail'] ?>" alt="Video Images" width="380" height="250" loading="lazy" decoding="async">
                  <div class="position-to-top">
                    <span class="rbt-btn rounded-player-2 with-animation">
                      <span class="play-icon"></span>
                    </span>
                  </div>
                  <span class="play-view-text d-block color-white"><i class="feather-eye"></i> Preview
                    this course</span>
                </div>
              </a>
              <a class="video-popup-wrapper text-center popup-video sidebar-video-hidden mb--15" id="demo_video_link" href="<?php echo $course_details[$current_slug]['demo_video'] ?>">
                <div class="video-content">
                  <img class="w-100 rbt-radius" src="assets/images/course/custom/<?php echo $course_details[$current_slug]['thumbnail'] ?>" alt="Video Images" width="380" height="250" loading="lazy" decoding="async">
                  <div class="position-to-top">
                    <span class="rbt-btn rounded-player-2 with-animation">
                      <span class="play-icon"></span>
                    </span>
                  </div>
                  <span class="play-view-text d-block color-white"><i class="feather-eye"></i> Preview
                    this course</span>
                </div>
              </a>
              <!-- End Viedo Wrapper  -->

              <div class="content-item-content">
                <div class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">
                  <div class="rbt-price">
                    <?php if ($course_details[$current_slug]['discounted_price']) : ?>
                      <span class="current-price"><?php echo $course_details[$current_slug]['discounted_price']; ?></span>
                      <span class="off-price"><?php echo $course_details[$current_slug]['price']; ?></span>
                    <?php else : ?>
                      <span class="current-price"><?php echo $course_details[$current_slug]['price']; ?></span>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="add-to-card-button mt--15">
                  <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" data-bs-toggle="modal" name="enroll_now" onclick="clickedFrom('enroll_now')" data-bs-target="#exampleModal" href="javascript:void(0);">
                    <span class="btn-text">Enroll Now</span>
                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                  </a>
                </div>
                <span class="subtitle"></span>


                <div class="rbt-widget-details has-show-more">
                  <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                    <li><span>Lectures</span><span class="rbt-feature-value rbt-badge-5"><?php echo $course_details[$current_slug]['lessons'] ?></span>
                    </li>
                    <li><span>Duration</span><span class="rbt-feature-value rbt-badge-5"><?php echo $course_details[$current_slug]['duration'] ?></span>
                    </li>
                    <li><span>Skill Level</span><span class="rbt-feature-value rbt-badge-5">Advanced</span></li>
                    <li><span>Video Access</span><span class="rbt-feature-value rbt-badge-5"><?php echo $course_details[$current_slug]['video_access'] ?></span>
                    </li>
                    <li><span>Instant Access</span><span class="rbt-feature-value rbt-badge-5"><?php echo $course_details[$current_slug]['instance_access'] ?></span>
                    </li>
                    <li><span>Language</span><span class="rbt-feature-value rbt-badge-5">English</span></li>

                    <li><span>Certificate</span><span class="rbt-feature-value rbt-badge-5">Yes</span></li>

                  </ul>
                  <div class="rbt-show-more-btn">Show More</div>
                </div>

                <div class="social-share-wrapper mt--30 text-center">
                  <?php include_once "course_social_links.php"; ?>
                  <hr class="mt--20">
                  <div class="contact-with-us text-center">
                    <p>For details about the course</p>
                    <p class="rbt-badge-7 mt--10"><i class="feather-phone mr--5"></i> Call Us: <a href="tel:+91-888-999-3194"><strong>&nbsp;+91-888-999-3194</strong></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="rbt-separator-mid">
    <div class="container">
      <hr class="rbt-separator m-0">
    </div>
  </div>

  <?php include_once "similar_courses.php"; ?>

  <!-- Start Course Action Bottom  -->
  <div class="rbt-course-action-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="section-title text-center text-md-start">
            <h5 class="title mb--0"><?php echo $course_details[$current_slug]['title'] ?></h5>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mt_sm--15">
          <div class="course-action-bottom-right rbt-single-group">
            <div class="rbt-single-list rbt-price large-size justify-content-center">
              <?php if ($course_details[$current_slug]['discounted_price']) : ?>
                <span class="current-price color-primary"><?php echo $course_details[$current_slug]['discounted_price']; ?></span>
                <span class="off-price"><?php echo $course_details[$current_slug]['price']; ?></span>
              <?php else : ?>
                <span class="current-price color-primary"><?php echo $course_details[$current_slug]['price']; ?></span>
              <?php endif; ?>
            </div>
            <div class="rbt-single-list action-btn">
              <a class="rbt-btn btn-gradient hover-icon-reverse btn-md" data-bs-toggle="modal" onclick="clickedFrom('enroll_now')" data-bs-target="#exampleModal" href="javascript:void(0);">
                <span class="icon-reverse-wrapper">
                  <span class="btn-text">Enroll Now</span>
                  <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                  <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Course Action Bottom  -->
  <div class="rbt-separator-mid">
    <div class="container">
      <hr class="rbt-separator m-0">
    </div>
  </div>
  <!-- Start Footer aera -->
  <?php include_once "footer.php"; ?>
  <!-- End Footer aera -->
  <div class="rbt-progress-parent">
    <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>

  <!-- JS
============================================ -->
  <?php include_once "common_js.php"; ?>
</body>
<?php include_once "handle_broucher_demo_video_content.php"; ?>

</html>