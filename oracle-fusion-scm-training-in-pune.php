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
      Why <span class="gradient-text">Oracle Fusion SCM </span> is a Strong Career Choice in Pune
    </h2>

    <p class="about-description">
     Pune’s industrial ecosystem requires professionals who can manage end-to-end supply chain operations using cloud ERP platforms.
    </p>
    <p class="about-description">
     <strong> Key reasons professionals in Pune choose Oracle Fusion SCM: </strong>
    </p>
          <ul class="location-points">
        <li><h3>Strong automotive and industrial manufacturing ecosystem</h3></li>
        <li><h3>Increasing adoption of Oracle Cloud ERP across enterprises</h3></li>
        <li><h3>High demand for functional SCM consultants and operations specialists</h3></li>
        <li><h3>Ideal city for professionals focused on manufacturing and supply chain systems</h3></li>
      </ul>
      <p>Oracle SCM skills align closely with Pune’s manufacturing-driven job market.</p>
  </div>

  <div class="about-content mt--30">
    <h2 class="about-heading">
      What You Will <span class="gradient-text">Learn </span> in Oracle Fusion SCM Training
    </h2>
    <p class="about-description">The training emphasizes enterprise workflow understanding, not just software navigation.</p>
     <p class="about-description">
     <strong>Core learning areas include: </strong>
    </p>
          <ul class="location-points">
        <li><h3>Inventory and cost management processes</h3></li>
        <li><h3>Procurement lifecycle management</h3></li>
        <li><h3>Order management and fulfillment execution</h3></li>
        <li><h3>RSSP and Product management fundamentals</h3></li>
        <li><h3>SCM Cloud reporting and business visibility</h3></li>
      </ul>
      <p>Each topic is explained through real operational use cases.</p>
  </div>

  <div class="who-header">
    <span class="who-label">Who It's For</span>
    <h2 class="who-heading">
      Who Should <span class="gradient-text">Enroll </span>Oracle Fusion SCM Training in Pune
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
      <h3>Graduates & Entry-Level Professionals</h3>
      <p>Candidates seeking a structured foundation in Oracle SCM Cloud functional roles.</p>
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
      <h3>Oracle EBS SCM Practitioners</h3>
      <p>Professionals transitioning from legacy Oracle EBS SCM to Oracle Fusion SCM Cloud.</p>
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
      <h3>Manufacturing & Supply Chain Executives</h3>
      <p>Professionals involved in procurement, inventory control, and production planning.</p>
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
      <h3>Functional & Techno-Functional Consultants</h3>
      <p>ERP professionals expanding into Oracle SCM Cloud implementations and support roles.</p>
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
      <h3>Retail, Warehouse & Operations Staff</h3>
      <p>Tailored for store managers, shopkeepers, warehouse executives, and operations personnel focused on improving business performance through Oracle Fusion SCM Cloud.</p>
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
      <h3>Career Transition Professionals</h3>
      <p>Individuals moving into Oracle Cloud SCM careers through structured learning.</p>
    </div>

  </div>

   <div class="highlights-header">
    <span class="highlights-label">What You Get</span>
    <h2 class="highlights-heading">
      Oracle Fusion SCM Course <span class="gradient-text">Highlights</span>
    </h2>
    <p>This Oracle Fusion SCM training in Pune is designed to build practical SCM cloud expertise.</p>
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
      <p> Interactive sessions with access to recordings for reinforcement.</p>
    </div>

    <!-- Card 2 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <polygon points="6 3 20 12 6 21 6 3"></polygon>
        </svg>
      </div>
      <h3>Enterprise SCM Use Cases</h3>
      <p> Learn SCM workflows used in manufacturing-driven organizations.</p>
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
      <p>Hands-on Oracle Fusion SCM lab practice for real-time configurations.</p>
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
      <p>Certification that strengthens your SCM professional profile.
</p>
    </div>

    <!-- Card 5 -->
    <div class="highlight-card">
      <div class="icon-wrapper">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
          <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
          <polyline points="16 7 22 7 22 13"></polyline>
        </svg>
      </div>
      <h3>Flexible Mobile-Based Learning</h3>
      <p>Learn Oracle Fusion SCM through a dedicated mobile app featuring recorded classes and self-paced LMS learning.</p>
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
      <h3>Interview & Career Guidance</h3>
      <p> Career-oriented preparation aligned with Oracle SCM roles in Pune.</p>
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
      Why Choose Our Oracle Fusion SCM Training in<span class="gradient-text"> Pune</span>
    </h2>
    <p>Oracle Fusion SCM training in Pune emphasizes real-world system understanding.</p>
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
    <h2>Pune</h2>
    <p>Supply Chain Technology Careers</p>
  </div>
</div>

<ul class="trainer-points">
  <li><h3>Pune’s consulting firms and technology companies increasingly adopt Oracle Fusion SCM platforms</h3></li>
  <li><h3>Organizations require professionals capable of managing digital procurement and logistics systems</h3></li>
  <li><h3>Skilled professionals can explore opportunities within Pune’s expanding consulting and IT industry</h3></li>
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
          <h3>Practical SCM Training Approach</h3>
          <p>Focus on how SCM is used in real organizations.</p>
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
          <h3>Trainers with Oracle SCM Project Knowledge</h3>
          <p> Learn from experts with implementation exposure.</p>
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
          <h3>Complete SCM Process Coverage</h3>
          <p> Covers all major SCM functions and integrations.</p>
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
          <h3>Updated Oracle Fusion SCM Curriculum</h3>
          <p> Aligned with current Oracle Cloud standards.</p>
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
          <h3>Strong Learner Support System</h3>
          <p>Guidance and support throughout the training journey.</p>
        </div>
      </div>

    </div>

  </div>

                               <div class="career-location-header">
    <span class="career-label">Career Impact</span>
    <h2 class="career-heading">
    <span class="gradient-text"> Career Scope </span>After Oracle Fusion SCM Training in Pune
    </h2>
      <p class="about-description"><strong> Learners can pursue roles such as: </strong></p>

          <ul class="location-points">
        <li><h3>Oracle SCM Functional Analyst</h3></li>
        <li><h3>Supply Chain Consultant</h3></li>
        <li><h3>Procurement Operations Specialist</h3></li>
        <li><h3>ERP SCM Support Analyst</h3></li>
      </ul>
      <p>Oracle SCM expertise opens doors across manufacturing and IT sectors in Pune.</p>
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