<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php include_once "all_courses_details.php"; ?>
    <?php include_once "meta-data.php"; ?>
    <?php include_once "common_css.php"; ?>
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
            <img src="assets/images/bg/bg-image-10.jpg" alt="Education Images">
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
                            <h1 class="title"><?php echo $course_details[$current_slug]['title'] ?></h1>
                            <p class="description"><?php echo $short_descriptions[$current_slug]; ?> </p>

                            <div class="d-flex align-items-center flex-wrap rbt-course-details-feature mt--10">

                                <div class="feature-sin best-seller-badge">
                                    <span class="rbt-badge-2">
                                        <span class="image"><img src="assets/images/icons/card-icon-1.png" alt="Best Seller Icon"></span> Bestseller
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
                                </ul>
                            </nav>
                        </div>

                        <!-- Start Course Feature Box  -->
                        <div class="rbt-course-feature-box overview-wrapper rbt-border-with-box mt--30" id="overview">
                            <div class="rbt-course-feature-inner">
                                <!-- Overview Start -->

                                <div class="about-content">
    <span class="about-label">About the Course</span>

    <h2 class="about-heading">
      What is <span class="gradient-text">Oracle Fusion Procurement?</span>
    </h2>

    <p class="about-description">
      Oracle Fusion Procurement is a cloud-based procurement solution designed to manage the complete purchasing lifecycle within Oracle ERP Cloud. It supports key procurement functions such as requisitions, purchasing, sourcing, supplier management, procurement contracts, and spend control.
    </p>

    <p class="about-description">
      The platform helps organizations improve purchasing efficiency, enforce compliance, strengthen supplier relationships, and gain visibility into procurement spend. With configurable workflows, approval controls, and real-time reporting, Oracle Fusion Procurement enables enterprises to streamline procurement operations while maintaining governance and audit readiness.
    </p>

    <p class="about-description">
      Oracle Fusion Procurement training equips professionals with the skills required to manage cloud-based procurement operations efficiently and accurately. As organizations move toward centralized and compliant procurement systems, Oracle Fusion Procurement has become a key platform for managing suppliers, purchases, contracts, and sourcing activities.
    </p>
    <p class="about-description">
      This training focuses on real procurement workflows, enabling learners to understand how procurement functions operate within Oracle Cloud. By combining functional concepts with system execution, the course prepares participants to handle procurement processes in live environments and supports career growth aligned with certification and industry expectations.
    </p>
  </div>

  <h3 class="who-label" style="margin-top:20px;">Key Modules</h3>
<div class="tag-container">
  <div class="tag">Product Management</div>
  <div class="tag">Inventory Management</div>
  <div class="tag">Purchasing</div>
  <div class="tag">Sourcing</div>
  <div class="tag">Supplier Portal</div>
  <div class="tag">Procurement Contracts</div>
  <div class="tag">Supplier Quality Management (SQM)</div>
  <div class="tag">Cost Management</div>
</div>


  <div class="who-header">
    <span class="who-label">Who It's For</span>
    <h2 class="who-heading">
      Who Should <span class="gradient-text">Enroll </span>in This Oracle Fusion Procurement Course?
    </h2>
    <p>This Oracle Fusion Procurement training is ideal for professionals aiming to build or enhance a career in procurement and purchasing operations.</p>
  </div>

  <div class="who-grid">

    <!-- Card 1 -->
    <div class="who-card">
      <div class="icon-box">
        <!-- Graduation Cap -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/>
          <path d="M22 10v6"/>
          <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/>
        </svg>
      </div>
      <h3>Graduates & Career Starters</h3>
      <p>Candidates interested in entering procurement and supply chain roles with strong functional foundations.</p>
    </div>

    <!-- Card 2 -->
    <div class="who-card">
      <div class="icon-box">
        <!-- Building -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/>
          <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/>
          <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/>
          <path d="M10 6h4"/>
          <path d="M10 10h4"/>
          <path d="M10 14h4"/>
          <path d="M10 18h4"/>
        </svg>
      </div>
      <h3>Procurement & Purchasing Professionals
</h3>
      <p>Buyers, procurement executives, and sourcing specialists seeking system-level understanding of cloud procurement processes.</p>
    </div>

    <!-- Card 3 -->
    <div class="who-card">
      <div class="icon-box">
        <!-- Chart -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 3v16a2 2 0 0 0 2 2h16"/>
          <path d="M18 17V9"/>
          <path d="M13 17V5"/>
          <path d="M8 17v-3"/>
        </svg>
      </div>
      <h3>Supply Chain & Operations Professionals</h3>
      <p>Professionals who want deeper exposure to procurement workflows within Oracle Cloud environments.</p>
    </div>

    <!-- Card 4 -->
    <div class="who-card">
      <div class="icon-box">
        <!-- Monitor -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect width="20" height="14" x="2" y="3" rx="2"/>
          <line x1="8" x2="16" y1="21" y2="21"/>
          <line x1="12" x2="12" y1="17" y2="21"/>
        </svg>
      </div>
      <h3>ERP & Functional Consultants</h3>
      <p>Consultants looking to specialize in Oracle Fusion Procurement implementation and support projects.</p>
    </div>

    <!-- Card 5 -->
    <div class="who-card">
      <div class="icon-box">
        <!-- Briefcase -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
          <rect width="20" height="14" x="2" y="6" rx="2"/>
        </svg>
      </div>
      <h3>Oracle EBS Professionals</h3>
      <p>Users of legacy Oracle Purchasing modules planning to transition into Oracle Fusion Procurement Cloud.
</p>
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
      <h3>Entry Path for Non-IT Professionals</h3>
      <p>A clear and guided pathway for non-IT backgrounds to begin careers in Oracle ERP and Cloud technologies</p>
    </div>

  </div>

   <div class="highlights-header">
    <span class="highlights-label">What You Get</span>
    <h2 class="highlights-heading">
      Oracle Fusion Procurement Course <span class="gradient-text">Highlights</span>
    </h2>
    <p>This course is designed to provide clarity, flexibility, and practical exposure to procurement operations.</p>
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
      <h3>Live Classes with 2-year Recording Access</h3>
      <p>Participate in live instructor-led sessions covering procurement scenarios, with recordings available for review and revision anytime.</p>
    </div>

    <!-- Card 2 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <polygon points="6 3 20 12 6 21 6 3"></polygon>
        </svg>
      </div>
      <h3>Real-Time Procurement Use Cases</h3>
      <p>Learn through practical examples such as supplier onboarding, purchase requisitions, purchase orders, and receiving transactions.</p>
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
      <h3>6 Months Oracle Cloud Lab Access</h3>
      <p>Practice procurement configurations in a live Oracle Fusion environment, including suppliers, purchasing documents, and approval setups.</p>
    </div>

    <!-- Card 4 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
          <circle cx="12" cy="8" r="6"></circle>
        </svg>
      </div>
      <h3>Structured Learning Path</h3>
      <p>Move from procurement basics to advanced sourcing, approvals, and integration with inventory and finance modules.</p>
    </div>

    <!-- Card 5 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
          <polyline points="16 7 22 7 22 13"></polyline>
        </svg>
      </div>
      <h3>Interview & Career Support</h3>
      <p>Prepare for procurement functional roles with interview guidance, real-time scenarios, and role-based discussion points.</p>
    </div>

    <!-- Card 6 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <path d="M6 3h12"></path>
          <path d="M6 8h12"></path>
          <path d="m6 13 8.5 8"></path>
          <path d="M6 13h3"></path>
          <path d="M9 13c6.667 0 6.667-10 0-10"></path>
        </svg>
      </div>
      <h3>Course Completion Certificate</h3>
      <p>Earn a course completion certificate that validates your Oracle Fusion Procurement functional expertise.</p>
    </div>

  </div>
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
    <p>This Oracle Fusion Procurement training is designed to build practical procurement knowledge aligned with real enterprise purchasing processes.</p>
  </div>

  <div class="why-container">

    <!-- LEFT TRAINER CARD -->
    <div class="trainer-card">
      <div class="trainer-header">
        <div class="trainer-avatar">K</div>
        <div>
          <h2>Mr. Krishna</h2>
          <p>Lead Trainer & Oracle SCM & Procurement Expert</p>
        </div>
      </div>

      <ul class="trainer-points">
        <li><h3>19+ years of real-world Oracle SCM and Procurement experience</h3></li>
        <li><h3>Trained 5,000+ students across 75+ batches globally</h3></li>
        <li><h3>Known for end-to-end SCM + Procurement specialization (rare combination)</h3></li>
        <li><h3>Provides project-based, hands-on training with practical business scenarios</h3></li>
      </ul>

    </div>

    <!-- RIGHT FEATURES LIST -->
    <div class="why-features">

      <div class="feature-item">
        <div class="feature-icon">
          <!-- Shield SVG -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
            <path d="m9 12 2 2 4-4"/>
          </svg>
        </div>
        <div>
          <h3>Procurement-Centric Training Approach</h3>
          <p>The course emphasizes real purchasing operations such as supplier lifecycle management, requisitions, purchase orders, and approvals used in live organizations.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon">
          <!-- User SVG -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
        </div>
        <div>
          <h3>Trainer with Real Procurement Implementation Experience</h3>
          <p>Sessions are led by professionals who have worked on Oracle Fusion Procurement implementations and support projects across industries.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon">
          <!-- Brain SVG -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
            <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/>
            <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"/>
          </svg>
        </div>
        <div>
          <h3>End-to-End Procurement Coverage</h3>
          <p>Learners gain exposure to supplier management, purchasing, sourcing basics, receiving, and integration with inventory and finance modules.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon">
          <!-- Layers SVG -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
            <path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/>
            <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/>
          </svg>
        </div>
        <div>
          <h3>Updated with Current Oracle Cloud Practices</h3>
          <p>Training content reflects current Oracle Fusion Procurement features and standard business practices followed in modern cloud ERP projects.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon">
          <!-- Award SVG -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
            <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/>
            <circle cx="12" cy="8" r="6"/>
          </svg>
        </div>
        <div>
          <h3>Learner-Focused Training Support</h3>
          <p>Soft Online Training is known for structured delivery, clear explanations, and ongoing guidance throughout the learning journey.
</p>
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
      <td><h3>Procurement Functional Consultant</h3></td>
      <td>₹8-18 LPA</td>
      <td>$85-130K</td>
      <td>£50-80K</td>
    </tr>

    <tr class="career-Outcome">
      <td><h3>Oracle Procurement Lead</h3></td>
      <td>₹12-25 LPA</td>
      <td>$95-145K</td>
      <td>£60-95K</td>
    </tr>

    <tr class="career-Outcome">
      <td><h3>Procurement Technical Consultant</h3></td>
      <td>₹10-22 LPA</td>
      <td>$90-140K</td>
      <td>£55-90K</td>
    </tr>

    <tr class="career-Outcome">
      <td><h3>Inventory/WMS Analyst</h3></td>
      <td>₹7-15 LPA</td>
      <td>$75-115K</td>
      <td>£45-75K</td>
    </tr>

    <tr class="career-Outcome">
      <td><h3>Supply Chain Manager</h3></td>
      <td>₹15-35 LPA</td>
      <td>$110-170K</td>
      <td>£70-110K</td>
    </tr>

    <tr class="career-Outcome">
      <td><h3>Oracle Cloud Architect</h3></td>
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
                    <div class="course-sidebar sticky-top rbt-border-with-box course-sidebar-top rbt-gradient-border">
                        <div class="inner">
                            <!-- Start Viedo Wrapper  -->
                            <a class="video-popup-wrapper text-center sidebar-video-hidden mb--15" id="demo_video_form" style="display: none;" onclick="clickedFrom('demo_video')" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:void(0);">
                                <div class="video-content">
                                    <img class="w-100 rbt-radius" src="assets/images/course/custom/<?php echo $course_details[$current_slug]['thumbnail'] ?>" alt="Video Images">
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
                                    <img class="w-100 rbt-radius" src="assets/images/course/custom/<?php echo $course_details[$current_slug]['thumbnail'] ?>" alt="Video Images">
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
                                        <p class="rbt-badge-7 mt--10"><i class="feather-phone mr--5">
                                </i> Call Us: <a href="tel:+91-888-999-3194"><strong>&nbsp;+91-888-999-3194</strong></a></p>
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