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
      Why <span class="gradient-text">Oracle Fusion Financials </span> Has Strong Demand in Hyderabad
    </h2>

    <p class="about-description">
     Many organizations in Hyderabad run centralized finance and accounting services.
    </p>
    <p class="about-description">
     <strong> Reasons to learn Oracle Fusion Financials in Hyderabad: </strong>
    </p>
          <ul class="location-points">
        <li><h3>Growing adoption of cloud ERP in finance operations</h3></li>
        <li><h3>Demand for finance professionals with system expertise</h3></li>
        <li><h3>Expansion of global finance shared services</h3></li>
        <li><h3>Increased need for automated financial reporting</h3></li>
      </ul>
  </div>

  <div class="about-content mt--30">
    <h2 class="about-heading">
      What You Will <span class="gradient-text">Learn </span> in Oracle Fusion Financials Training
    </h2>
     <p class="about-description">
     <strong>You will gain knowledge in: </strong>
    </p>
          <ul class="location-points">
        <li><h3>Chart of accounts and ledger management</h3></li>
        <li><h3>Payables, receivables, and cash processes</h3></li>
        <li><h3>Financial controls and compliance basics</h3></li>
        <li><h3>Reporting and reconciliation workflows</h3></li>
        <li><h3>Cloud finance system usage</h3></li>
      </ul>
      <p>The emphasis is on real-world finance system application.</p>
  </div>

  <div class="who-header">
    <span class="who-label">Who It's For</span>
    <h2 class="who-heading">
      HYDERABAD – Who Should <span class="gradient-text">Enroll </span>in This Oracle Fusion Finance Training?
    </h2>
    <p>Oracle Fusion Financials training in Hyderabad is suitable for professionals aiming to build strong functional expertise in cloud-based financial management systems used by large enterprises.</p>
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
      <h3>Fresh Graduates & Career Starters</h3>
      <p>B.Com, BBA, and commerce graduates aiming for finance + IT hybrid careers.</p>
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
      <h3>Finance & Accounting Professionals</h3>
      <p>Accountants, finance executives, analysts, and managers handling AP, AR, GL, Assets, and CM targeting cloud ERP roles.</p>
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
      <h3>CA / CMA / MBA (Finance) / M.Com Graduates</h3>
      <p>Qualified finance and commerce graduates adding practical ERP system exposure.</p>
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
      <h3>Tally & Manual Accounting Professionals</h3>
      <p> Tally users and GST, billing, and reconciliation professionals shifting to enterprise ERP platforms.</p>
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
      <h3>ERP & IT Professionals</h3>
      <p>Oracle EBS and functional consultants upgrading to Oracle Fusion Cloud Financials.</p>
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
      <h3>Career Switchers</h3>
      <p> Non-IT or non-finance professionals building a stable, high-demand ERP finance career.</p>
    </div>

  </div>

   <div class="highlights-header">
    <span class="highlights-label">What You Get</span>
    <h2 class="highlights-heading">
      Oracle Fusion Finance Course <span class="gradient-text">Highlights</span>
    </h2>
    <p>This Oracle Fusion Financials training in Hyderabad focuses on practical finance system learning with real cloud exposure.</p>
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
      <p>Attend live instructor-led sessions and revisit recorded classes anytime for better understanding of finance workflows.</p>
    </div>

    <!-- Card 2 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <polygon points="6 3 20 12 6 21 6 3"></polygon>
        </svg>
      </div>
      <h3>Real-Time Financials Use Cases</h3>
      <p> Learn accounting and reporting scenarios commonly used by enterprises.</p>
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
      <p>Hands-on practice in Oracle Fusion Financials Cloud covering GL, AP, AR, Assets, and Cash Management.</p>
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
      <p>Receive a certificate validating your Oracle Fusion Financials training.</p>
    </div>

    <!-- Card 5 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
          <polyline points="16 7 22 7 22 13"></polyline>
        </svg>
      </div>
      <h3>Learning via Mobile App</h3>
      <p>Study Oracle Fusion Financials anytime using a mobile app with recorded sessions and LMS resources.</p>
    </div>

    <!-- Card 6 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <circle cx="9" cy="7" r="4"></circle>
  <path d="M17 11v6"></path>
  <path d="M14 14h6"></path>
  <path d="M3 21c0-4 3-7 6-7"></path>
</svg>
      </div>
      <h3>Interview & Career Support</h3>
      <p>Get job-oriented guidance aligned with Oracle Financials roles in Hyderabad.</p>
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
      Why Choose This Oracle Financials Training in <span class="gradient-text">Hyderabad</span>
    </h2>
    <p>Oracle Fusion Financials training in Hyderabad is built around real accounting and ERP usage.</p>
  </div>

  <div class="why-container">

    <!-- LEFT TRAINER CARD -->
    <div class="trainer-card">
<div class="trainer-header">
    <div class="location-content">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512">
  <image xlink:href="data:image/png;base64,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" x="0" y="0" width="512" height="512"/>
</svg>
</div>
  <div>
    <h2>Hyderabad</h2>
    <p>Demand for Oracle Financials Expertise</p>
  </div>
</div>

<ul class="trainer-points">
  <li><h3>Enterprises in Hyderabad adopt Oracle Fusion Financials for accounting and financial management</h3></li>
  <li><h3>Organizations recruit Oracle Financials professionals for GL, Payables, and Receivables roles</h3></li>
  <li><h3>Training covers enterprise financial workflows used in Oracle Cloud systems</h3></li>
  <li><h3>Professionals can explore financial consulting opportunities in Hyderabad’s IT industry</h3></li>
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
          <h3>Finance Process–Focused Training</h3>
          <p> Understand how Oracle Financials supports daily accounting operations.</p>
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
          <h3>Experienced Financials Trainers</h3>
          <p> Learn from professionals with live Oracle Financials project exposure.</p>
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
          <h3>End-to-End Financials Coverage</h3>
          <p> Covers core finance modules with integration understanding.</p>
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
          <h3>Updated Oracle Cloud Curriculum</h3>
          <p>Aligned with current Oracle Fusion Financials practices.</p>
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
          <h3>Reliable Learner Support</h3>
          <p>Ongoing guidance throughout the course.</p>
        </div>
      </div>

    </div>

  </div>

                               <div class="career-location-header">
    <span class="career-label">Career Impact</span>
    <h2 class="career-heading">
    <span class="gradient-text"> Career Opportunities </span> in Hyderabad After Oracle Financials Training 
    </h2>
      <p class="about-description"><strong> Learners can explore roles such as: </strong></p>

          <ul class="location-points">
        <li><h3>Oracle Financials Functional Consultant</h3></li>
        <li><h3>Finance ERP Analyst</h3></li>
        <li><h3>Financial Operations Specialist</h3></li>
        <li><h3>Oracle Cloud Financials Support Executive</h3></li>
      </ul>
      <p>Oracle Fusion Financials skills align well with Hyderabad’s enterprise finance ecosystem.
</p>
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