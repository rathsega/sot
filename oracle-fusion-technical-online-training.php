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
      What is <span class="gradient-text">Oracle Fusion Technical?</span>
    </h2>

    <p class="about-description">
      Oracle Fusion Technical refers to the technical framework used to customize, extend, and integrate Oracle Fusion Applications without disrupting core cloud functionality. It enables developers and technical consultants to build scalable, secure, and upgrade-safe solutions within the Oracle ERP Cloud ecosystem.
    </p>

    <p class="about-description">
      Oracle Fusion Technical includes tools and technologies such as BI Publisher, OTBI, BIP reports, REST and SOAP integrations, Oracle Integration Cloud concepts, data migration utilities, personalization frameworks, and extension capabilities. These tools allow organizations to meet complex business requirements while maintaining compliance with Oracle Cloud standards.
    </p>
    <p class="about-description">Oracle Fusion Technical training equips professionals with the skills required to work on the technical layer of Oracle ERP Cloud applications. As enterprises move from legacy Oracle systems to cloud-based ERP platforms, the demand for technical consultants who understand integrations, extensions, and reporting has increased significantly.</p>
    <p class="about-description">This training emphasizes practical learning across Oracle Fusion technical components, helping learners understand how business requirements are translated into technical solutions. The course structure supports real-world project readiness by covering development, integration, and reporting concepts aligned with modern Oracle Cloud architecture.</p>
  </div>
  
  <h3 class="who-label" style="margin-top:20px;">Key Modules</h3>
<div class="tag-container">
  <div class="tag">VBCS</div>
  <div class="tag">PCS</div>
  <div class="tag">BI Publisher</div>
  <div class="tag">Data Migration</div>
  <div class="tag">Extensions</div>
  <div class="tag">Integrations</div>
  <div class="tag">APIs</div>
  <div class="tag">Custom Applications</div>
  <div class="tag">Process Automation</div>
  <div class="tag">Scheduling & Migration</div>
  <div class="tag">OTBI reports</div>
  <div class="tag">BIP reports</div>
  <div class="tag">REST & SOAP Integration</div>
  <div class="tag">Oracle Integration Cloud (OIC)</div>
</div>


  <div class="who-header">
    <span class="who-label">Who It's For</span>
    <h2 class="who-heading">
      Who Should <span class="gradient-text">Enroll </span>in This Oracle Fusion Technical Course?
    </h2>
    <p>This Oracle Fusion Technical training is ideal for professionals aiming to build or strengthen technical skills in Oracle Cloud ERP environments.</p>
  </div>

  <div class="who-grid">

    <!-- Card 1 -->
    <div class="who-card">
      <div class="icon-box">
        <!-- Graduation Cap -->
<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <circle cx="12" cy="12" r="3"></circle>
  <path d="M12 2v2"></path>
  <path d="M12 20v2"></path>
  <path d="M4.93 4.93l1.41 1.41"></path>
  <path d="M17.66 17.66l1.41 1.41"></path>
  <path d="M2 12h2"></path>
  <path d="M20 12h2"></path>
  <path d="M4.93 19.07l1.41-1.41"></path>
  <path d="M17.66 6.34l1.41-1.41"></path>
</svg>
      </div>
      <h3>Technical Consultants</h3>
      <p>Professionals working on Oracle ERP implementations who want to handle integrations, reports, and extensions confidently.</p>
    </div>

    <!-- Card 2 -->
    <div class="who-card">
      <div class="icon-box">
        <!-- Building -->
<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <polyline points="23 4 23 10 17 10"></polyline>
  <polyline points="1 20 1 14 7 14"></polyline>
  <path d="M3.5 9a9 9 0 0 1 14-3.5"></path>
  <path d="M20.5 15a9 9 0 0 1-14 3.5"></path>
</svg>
      </div>
      <h3>Oracle EBS Technical Professionals</h3>
      <p> Developers transitioning from legacy Oracle Applications to Oracle Fusion Cloud technologies.</p>
    </div>

    <!-- Card 3 -->
    <div class="who-card">
      <div class="icon-box">
        <!-- Chart -->
<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <polyline points="16 18 22 12 16 6"></polyline>
  <polyline points="8 6 2 12 8 18"></polyline>
</svg>
      </div>
      <h3>Software Developers</h3>
      <p> Developers interested in working with enterprise ERP systems and cloud-based integration frameworks.</p>
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
      <h3>Integration Developers</h3>
      <p> Developers working on OIC, REST APIs, and third-party integrations.</p>
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
      <h3>PL/SQL & Reporting Developers</h3>
      <p>Technical professionals expanding skills into Fusion technical components.
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
      <h3>Oracle Careers for Career Switchers</h3>
      <p>Ideal for professionals planning a structured move from non-IT roles into Oracle ERP and Cloud careers.</p>
    </div>

  </div>

   <div class="highlights-header">
    <span class="highlights-label">What You Get</span>
    <h2 class="highlights-heading">
      Oracle Fusion Technical Course <span class="gradient-text">Highlights</span>
    </h2>
  </div>

  <div class="highlights-grid">

  <!-- Card 1 -->
  <div class="highlight-card">
    <div class="icon-wrapper">
      <!-- Live Class (Video Camera - Simple) -->
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="3" y="6" width="12" height="12" rx="2"></rect>
        <path d="M15 10l6-3v10l-6-3z"></path>
      </svg>
    </div>
    <h3>Live Classes with 2-year Recording Access</h3>
    <p>Learn through interactive live training backed by one-year LMS recordings for revision and continuous practice.</p>
  </div>

  <!-- Card 2 -->
  <div class="highlight-card">
    <div class="icon-wrapper">
      <!-- Hands-on (Code Brackets - Light) -->
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="8 6 2 12 8 18"></polyline>
        <polyline points="16 6 22 12 16 18"></polyline>
      </svg>
    </div>
    <h3>Hands-On Real-Time Technical Scenarios</h3>
    <p>Learn through practical technical tasks such as reports, integrations, role setups, and extensions based on real Oracle Fusion project requirements.</p>
  </div>

  <!-- Card 3 -->
  <div class="highlight-card">
    <div class="icon-wrapper">
      <!-- Cloud Lab (Cloud - Minimal) -->
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M20 17a4 4 0 0 0-2-7.5 5 5 0 0 0-9.5-1.5A4 4 0 0 0 4 17h16z"></path>
      </svg>
    </div>
    <h3>6 Months Oracle Cloud Lab Access</h3>
    <p>Work directly in Oracle Fusion Cloud environments to practice setups, configurations, and technical activities like integrations, security, and data management.
</p>
  </div>

  <!-- Card 4 -->
  <div class="highlight-card">
    <div class="icon-wrapper">
      <!-- Structured Path (Layers - Clean) -->
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
        <polyline points="2 17 12 22 22 17"></polyline>
        <polyline points="2 12 12 17 22 12"></polyline>
      </svg>
    </div>
    <h3>Mobile App Study Access</h3>
    <p>Learn Oracle Fusion Technical and Integration Cloud anytime using a mobile app with recorded content and LMS support.
</p>
  </div>

  <!-- Card 5 -->
  <div class="highlight-card">
    <div class="icon-wrapper">
      <!-- Career Support (Target - Minimal) -->
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="9"></circle>
        <circle cx="12" cy="12" r="4"></circle>
      </svg>
    </div>
    <h3>Interview & Career Support</h3>
    <p>Get technical interview preparation, resume guidance, and job-oriented mentoring aligned with current Oracle Fusion Technical hiring needs.</p>
  </div>

  <!-- Card 6 -->
  <div class="highlight-card">
    <div class="icon-wrapper">
      <!-- Certificate (Badge - Simple) -->
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="8" r="6"></circle>
        <path d="M9 14l-1 7 4-2 4 2-1-7"></path>
      </svg>
    </div>
    <h3>Course Completion Certification</h3>
    <p>Receive a course completion certificate that confirms your Oracle Fusion Technical skills and helps strengthen your profile for technical consultant roles.</p>
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
  </div>

  <div class="why-container">

    <!-- LEFT TRAINER CARD -->
    <div class="trainer-card">
      <div class="trainer-header">
        <div class="trainer-avatar">K</div>
        <div>
          <h2>Mr. Vijay </h2>
          <p>Oracle Technical Industry Expert</p>
        </div>
      </div>

      <ul class="trainer-points">
        <li><h3>Oracle-certified technical expert with 16+ years of ERP experience</h3></li>
        <li><h3>Expertise in Fusion architecture, BI reports, integrations, and extensions</h3></li>
        <li><h3>Hands-on training using real implementation scenarios</h3></li>
        <li><h3>Ideal for non-IT to IT technical career transitions
</h3></li>
      </ul>

    </div>

    <!-- RIGHT FEATURES LIST -->
    <div class="why-features">

      <div class="feature-item">
  <div class="feature-icon">
    <!-- Real Project (Briefcase - Simple) -->
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <rect x="3" y="7" width="18" height="14" rx="2"></rect>
      <path d="M8 7V5h8v2"></path>
    </svg>
  </div>
  <div>
    <h3>Real Project–Focused Technical Training</h3>
    <p>The training goes beyond theory and screens, helping you understand how Oracle Fusion technical components work in real implementation and support projects.</p>
  </div>
</div>


<div class="feature-item">
  <div class="feature-icon">
    <!-- Trainer (User - Clean) -->
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="12" cy="8" r="4"></circle>
      <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
    </svg>
  </div>
  <div>
    <h3>Experienced Oracle Fusion Technical Trainer</h3>
    <p>Learn from a trainer with hands-on experience in Oracle Fusion technical areas like reports, integrations, security, and extensions used in live environments.</p>
  </div>
</div>


<div class="feature-item">
  <div class="feature-icon">
    <!-- Skill Coverage (Check Circle - Simple) -->
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="12" cy="12" r="9"></circle>
      <path d="M9 12l2 2 4-4"></path>
    </svg>
  </div>
  <div>
    <h3>Complete Technical Skill Coverage</h3>
    <p>Covers key technical areas including BI reports, BIP, OTBI basics, integrations, security roles, data migration concepts, and Fusion architecture understanding.</p>
  </div>
</div>


<div class="feature-item">
  <div class="feature-icon">
    <!-- Single Trainer (Link - Minimal) -->
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M10 13a5 5 0 0 0 7 0l2-2a5 5 0 0 0-7-7l-1 1"></path>
      <path d="M14 11a5 5 0 0 0-7 0l-2 2a5 5 0 0 0 7 7l1-1"></path>
    </svg>
  </div>
  <div>
    <h3>Single-Trainer Learning Experience</h3>
    <p>One dedicated trainer handles the full course, ensuring consistency, clarity, and smooth progression across all technical topics.</p>
  </div>
</div>


<div class="feature-item">
  <div class="feature-icon">
    <!-- Modern Tools (Wrench - Minimal) -->
<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <circle cx="12" cy="12" r="3"></circle>
  <path d="M12 2v2"></path>
  <path d="M12 20v2"></path>
  <path d="M4.93 4.93l1.41 1.41"></path>
  <path d="M17.66 17.66l1.41 1.41"></path>
  <path d="M2 12h2"></path>
  <path d="M20 12h2"></path>
  <path d="M4.93 19.07l1.41-1.41"></path>
  <path d="M17.66 6.34l1.41-1.41"></path>
</svg>
  </div>
  <div>
    <h3>Modern Fusion Tools & Concepts</h3>
    <p>Get exposure to current Oracle Fusion technical features, tools, and frameworks relevant to today’s cloud ERP projects.</p>
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
      <td><h3>Technical Functional Consultant</h3></td>
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
      <td><h3>Technical Technical Consultant</h3></td>
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