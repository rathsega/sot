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
      Why <span class="gradient-text">Oracle Fusion Financials </span> Has Strong Demand in Chennai
    </h2>

    <p class="about-description">
     Organizations in Chennai operate finance functions that require accuracy, compliance, and scalability.
    </p>
    <p class="about-description">
     <strong> Reasons to learn Oracle Fusion Financials in Chennai: </strong>
    </p>
          <ul class="location-points">
        <li><h3>Adoption of cloud ERP for financial control and reporting</h3></li>
        <li><h3>Demand for finance professionals with ERP system knowledge</h3></li>
        <li><h3>Growth of shared finance and accounting operations</h3></li>
        <li><h3>Need for standardized financial processes across enterprises</h3></li>
      </ul>
  </div>

  <div class="about-content mt--30">
    <h2 class="about-heading">
      What You Will <span class="gradient-text">Learn </span> Financials Training in Chennai
    </h2>
     <p class="about-description">
     <strong>You will gain knowledge in: </strong>
    </p>
          <ul class="location-points">
        <li><h3>General ledger and financial structures</h3></li>
        <li><h3>Payables and receivables process overview
</h3></li>
        <li><h3>Expense and asset accounting concepts</h3></li>
        <li><h3>Financial reporting and reconciliation</h3></li>
        <li><h3>Cloud financial system navigation</h3></li>
      </ul>
      <p>The focus is on how Oracle Fusion Financials supports real business finance operations.</p>
  </div>

  <div class="who-header">
    <span class="who-label">Who It's For</span>
    <h2 class="who-heading">
    CHENNAI – Who Should <span class="gradient-text">Enroll </span>in This Oracle Fusion Finance Training?
    </h2>
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
      <h3>New Graduates</h3>
      <p>B.Com, BBA, and commerce graduates starting ERP-focused finance careers.</p>
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
      <h3>Accounting Operations Professionals</h3>
      <p>Tally and manual accounting users transitioning to enterprise finance systems.</p>
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
      <h3>Oracle EBS Financials Professionals</h3>
      <p> Users planning to transition their skills from Oracle EBS Financials to Oracle Fusion Financials Cloud.</p>
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
      <h3>ERP & Oracle Consultants</h3>
      <p> Consultants looking to add Oracle Financials Cloud expertise to their consulting portfolio.</p>
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
      <h3>Finance Decision-Makers</h3>
      <p> Managers seeking functional visibility into Oracle Financials to drive digital finance initiatives.</p>
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
      <h3> Managers seeking functional visibility into Oracle Financials to drive digital finance initiatives.
</h3>
      <p> Individuals moving from traditional finance roles into Oracle ERP and Cloud-focused careers.
</p>
    </div>

  </div>

   <div class="highlights-header">
    <span class="highlights-label">What You Get</span>
    <h2 class="highlights-heading">
      Oracle Fusion Finance Course <span class="gradient-text">Highlights</span>
    </h2>
    <p>This Oracle Fusion Financials training in Chennai helps learners build strong finance system fundamentals.
</p>
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
      <p> Instructor-led sessions with long-term access to recorded classes.</p>
    </div>

    <!-- Card 2 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <polygon points="6 3 20 12 6 21 6 3"></polygon>
        </svg>
      </div>
      <h3>Scenario-Based Financial Learning</h3>
      <p>Understand accounting and compliance-related finance use cases.</p>
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
      <p>Hands-on Oracle Fusion Financials lab practice for real-time transactions.</p>
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
      <p> Certificate validating Oracle Fusion Financials skills.</p>
    </div>

    <!-- Card 5 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
          <polyline points="16 7 22 7 22 13"></polyline>
        </svg>
      </div>
      <h3>Smart Mobile Learning</h3>
      <p>Learn Oracle Fusion at your convenience with mobile app access and LMS-based learning.</p>
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
      <p> Job-oriented preparation aligned with Financials roles in Chennai.
</p>
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
      Why Choose This Oracle Financials Training in <span class="gradient-text">Chennai</span>
    </h2>
    <p>Oracle Fusion Financials training in Chennai emphasizes real system usage.</p>
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
    <h2>Chennai</h2>
    <p>Financial Systems & Cloud Accounting</p>
  </div>
</div>

<ul class="trainer-points">
  <li><h3>Several multinational companies in Chennai rely on Oracle Fusion Financials for financial operations and reporting</h3></li>
  <li><h3>Businesses require professionals with knowledge of enterprise accounting systems and finance cloud platforms</h3></li>
  <li><h3>Training explains financial workflows used in Oracle-based enterprise environments</h3></li>
  <li><h3>Professionals with Oracle Financials skills can pursue opportunities across Chennai’s finance and IT industries</h3></li>
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
          <h3>Process-Centric Financials Training</h3>
          <p> Learn how finance teams use Oracle Financials in real environments.</p>
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
          <h3>Trainers with Practical Financials Experience</h3>
          <p> Learn from professionals with hands-on Oracle Financials exposure</p>
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
          <h3>End-to-End Financials Functional Coverage</h3>
          <p>Covers GL, AP, AR, Assets, and Cash Management.</p>
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
          <h3>Updated Cloud-Based Content</h3>
          <p>Aligned with modern Oracle Financials workflows.</p>
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
          <h3>Continuous Learner Support</h3>
          <p>Support provided throughout the learning journey.</p>
        </div>
      </div>

    </div>

  </div>

                               <div class="career-location-header">
    <span class="career-label">Career Impact</span>
    <h2 class="career-heading">
    <span class="gradient-text"> Career Opportunities </span> in Chennai After Oracle Financials Training
    </h2>
      <p class="about-description"><strong> Learners can explore roles such as: </strong></p>

          <ul class="location-points">
        <li><h3>Oracle Financials Functional Consultant</h3></li>
        <li><h3>Finance Systems Analyst</h3></li>
        <li><h3>ERP Financials Support Professional</h3></li>
        <li><h3>Accounting Operations Specialist</h3></li>
      </ul>
      <p>Oracle Fusion Financials skills offer stable and long-term career growth in Chennai.</p>
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