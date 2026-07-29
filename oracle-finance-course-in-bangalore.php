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
                    Why <span class="gradient-text">Oracle Fusion Financials </span> Has Strong Demand in Bangalore
                  </h2>

                  <p class="about-description">
                    Bangalore’s consulting-driven environment fuels demand for cloud finance expertise.
                  </p>
                  <p class="about-description">
                    <strong> Reasons to learn Oracle Fusion Financials in Bangalore: </strong>
                  </p>
                  <ul class="location-points">
                    <li>
                      <h3>High demand for ERP financial consultants</h3>
                    </li>
                    <li>
                      <h3>Continuous migration from legacy finance systems</h3>
                    </li>
                    <li>
                      <h3>Enterprise financial transformation projects</h3>
                    </li>
                    <li>
                      <h3>Exposure to global Oracle Cloud implementations</h3>
                    </li>
                  </ul>
                </div>

                <div class="about-content mt--30">
                  <h2 class="about-heading">
                    What You Will <span class="gradient-text">Learn </span> in Oracle Fusion Financials Course
                  </h2>
                  <p class="about-description">
                    <strong>You will gain knowledge in: </strong>
                  </p>
                  <ul class="location-points">
                    <li>
                      <h3>Financial structures and accounting setups</h3>
                    </li>
                    <li>
                      <h3>Payables, receivables, and expense management</h3>
                    </li>
                    <li>
                      <h3>Reporting and consolidation overview</h3>
                    </li>
                    <li>
                      <h3>Compliance and control processes</h3>
                    </li>
                    <li>
                      <h3>Financial analytics basics</h3>
                    </li>
                  </ul>
                  <p>The learning focuses on understanding finance systems used in real implementations.</p>
                </div>


                <div class="who-header">
                  <span class="who-label">Who It's For</span>
                  <h2 class="who-heading">
                    BANGALORE – Who Should <span class="gradient-text">Enroll </span>in This Oracle Fusion Finance Training?
                  </h2>
                  <p>Oracle Fusion Financials training in Bangalore is ideal for professionals working in technology-driven finance, shared services, and ERP consulting environments.</p>
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
                    <h3>Early-Career Finance Professionals & Graduates</h3>
                    <p>Candidates aiming to enter Oracle Financials Cloud roles with a strong foundation in enterprise finance processes.</p>
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
                    <h3>Tally & GST Practitioners</h3>
                    <p> Billing executives and accounting staff advancing into corporate ERP environments.</p>
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
                    <h3>Oracle EBS Financials Professionals</h3>
                    <p>Users looking to modernize their skill set by transitioning from legacy Oracle Financials to Oracle Fusion Financials Cloud.</p>
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
                    <h3>ERP & Cloud Consultants</h3>
                    <p> Consultants planning to work on Oracle Financials Cloud implementations, enhancements, or support projects.</p>
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
                    <h3>Business Leaders</h3>
                    <p>Managers and directors who need to understand Oracle Finance for digital transformation.</p>
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
                    <h3>Finance Leads & Controllers</h3>
                    <p> Professionals seeking functional clarity on Oracle Financials to improve reporting, compliance, and financial controls.</p>
                  </div>

                </div>

                <div class="highlights-header">
                  <span class="highlights-label">What You Get</span>
                  <h2 class="highlights-heading">
                    Oracle Fusion Finance Course <span class="gradient-text">Highlights</span>
                  </h2>
                  <p>This Oracle Fusion Financials training in Bangalore is designed for professionals seeking cloud-based finance system skills.
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
                    <p> Join interactive sessions and revise recorded content at your convenience.</p>
                  </div>

                  <!-- Card 2 -->
                  <div class="highlight-card">
                    <div class="icon-wrapper">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                      </svg>
                    </div>
                    <h3>Practical Financial Scenarios</h3>
                    <p> Learn accounting workflows followed by IT and corporate organizations.</p>
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
                    <p>Practice Oracle Fusion Financials configurations in a real cloud environment.</p>
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
                    <p>Certification that strengthens your Oracle Financials profile.</p>
                  </div>

                  <!-- Card 5 -->
                  <div class="highlight-card">
                    <div class="icon-wrapper">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                        <polyline points="16 7 22 7 22 13"></polyline>
                      </svg>
                    </div>
                    <h3>Mobile App Training Access</h3>
                    <p>Get Oracle Fusion Financials training through a mobile app with flexible anytime learning and LMS access.
                    </p>
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
                    <h3>Interview & Career Support
                    </h3>
                    <p>Career guidance aligned with Oracle Financials opportunities in Bangalore.</p>
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
                  Why Choose This Oracle Financials Training in <span class="gradient-text">Bangalore</span>
                </h2>
              </div>

              <div class="why-container">

                <!-- LEFT TRAINER CARD -->
                <div class="trainer-card">
                  <div class="trainer-header">
                    <div class="location-content">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512">
                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAQAElEQVR4AeydCfw31dj/v/3bpCwt0kJIi5JChRYKFULZWoQn20MeZFd5VFTILusjO0mSLCUp2rSvKJQWpVJZkkopLf/P577vX/dv+S4z55yZOTPzvl/XdZ/5zZzrOue8Z74z15w5c+b/DfgHAQj0icCj1NiPSi+U3iq9t6V6m+p9ufRE6V7SdaQIBCBQggABQAlYZIVAiwksorr7Qnmx0ndK15MuLW2rLKWKry7dUvpB6e+kR0vdLiUIBCAwnsBgQAAwiRDbIdANAh9XM3yhXEJpV+W5ativpO+WIhCAwAQCBAATALEZAh0g8CK14W3SPsiiauSHpV+Xcn4TBAQCwwh4HT8QU0Ah0F0Ci6hpH5L2TXZVg/eXIhCAwAgCBAAjwLAaAh0hsKHasZa0j+IxD34s0Me202YIjCEwfxMBwHwO/A+BrhLYqKsNK9Au93547MNiBfKSBQK9I0AA0LtdToN7RuAhPWvv7OaurRW7SBEIQGABgamEAGCKBCkEuknAg+K62bLirdqheFZyQqA/BAgA+rOvaSkE+kpgKzX8/lIEAhAYLERAALCQBUsQgEA3CdxPzfKkQUoQCEBgigABwBQJUghAoMsEVuly42gbBIoSmJ6PAGA6DZYhAIGuEli2qw2jXRAIJUAAEEoOOwhAoE0E/Epgm+pLXSFQAYGZLgkAZvLgLwhAAAIQgEAvCBAA9GI300gIBBF4n6x855yLHqb6IBCAQCCB2WYEALOJ8DcEIAABCECgBwQIAHqwk2kiBCAAAQj0ncDc9hMAzGXCGghAAAIQgEDnCRAAdH4X00AIQAACEOg7gWHtJwAYRoV1EIAABCAAgY4TIADo+A6meRCAAAQg0HcCw9tPADCcC2shAAEIQAACnSZAANDp3UvjIAABCECg7wRGtZ8AYBQZ1kMAAhCAAAQ6TIAAoMM7l6ZBAAIQgEDfCYxuPwHAaDZsgQAEIAABCHSWAAFAZ3ctDYMABCAAgb4TGNd+AoBxdNjWVgJrquJ7Sf3xmOOVHiLdXbqqFIHAOAI+Rt6iDD5mfOz4GNpTf68hRSDQKQIEAJ3anb1vzDIi8GXp76UflO4k3Ur6MulB0sukH5IuJkUmE3idspybkW6julQli8vxgdLLpZ+S+pjxseNjyMfMxVr3JenSUgQCLSEwvpoEAOP5sLU9BJZVVU+Vvka6qHSY3E8rfTf3E6VLSJHxBFbR5g0z0uVUlypkSTn1MbGHUi8rmSM+pl6rtT7GHqwUgUDrCRAAtH4X0oAFBA5VuoG0iPhO8hNFMpKnFwR8x791wZY+Xvn8eEAJAoG8CUyqHQHAJEJsbwOB56mSz5aWkd2UeT0p0g8CN49o5vpa70cdSgrLc5VzWykCgVYTIABo9e6j8gsIuGt2wWLhxF26ryqcm4xtJ3DtiAa8WutDzoN+1CRTBAK5Ephcr5ADf7JXckCgXgJPCyxuy0A7zNpF4G5V9yrpMOHYGUaFdb0gQADQi93c6UYupdZ5AKCS0uJXvkobYdA6AqerxjdJh4kHOg5bP2mdByT62JuUj+0QaIRAkUIJAIpQIk/OBEaN2i5S5xjbIv7JkweBI8dUI+YYiLEdUyU2QaAeAgQA9XCmFAhAoBkCf1GxX5EiEOgRgWJNJQAoxolcEIBAOwnso2rfIkUgAIFZBAgAZgHhTwhAoDME3PV/cGdaQ0MgUJBA0WwEAEVJkQ8CEGgTgTNU2VdI75UiEIDAEAIEAEOgsAoCEGg1AX/A55lqwW1SBAI9I1C8uQQAxVmREwIQyJuAP+Tjj/e8VNW8XYpAAAJjCBAAjIHDJghAIHsCN6qGvuP3hX9dLR8uRSDQWwJlGk4AUIYWeSHQLwJfVHM3ylTXUb2WkS4v9R2/L/x3ahmBAAQKEiAAKAiKbBDoIYHr1ObzMtWLVa9/SREIQOA+AuUWCADK8SI3BCAAAQhAoBMECAA6sRtpBAQgAAEI9J1A2fYTAJQlRn4IQAACEIBABwgQAHRgJ9IECEAAAhDoO4Hy7ScAKM8MCwhAAAIQgEDrCRAAtH4X0gAIQAACEOg7gZD2EwCEUMMGAhCAAAQg0HICBAAt34FUHwIQgAAE+k4grP0EAGHcsMqDwANVjYOlofJgGX5Ten8p0i8CS6q5B0l9DCgJEh87ywVZYgSBDAgQAGSwE6hCEIENZXW+dAdpjPiTsefIgeeRV4L0gMAj1cZTpLtLY+T5Mr5AuokUgUBjBEILJgAIJYddkwRep8JPlz5amkJ88T9TjnaWIt0m8AI1zxftJylNIavJiYOJPZQuIkUg0BoCBACt2VVUVATc5e8vv/kjNUvo75TyADn7jtTdukspRbpFYKrL/wdqVky3v8znyGJac6DUvpdVikCgRgLhRREAhLPDsl4CT1Bx/jDNTkqrFD8SOE0FrCFFukHgEWrGSdLYLn+5GCvba6t7F56iFIFA9gQIALLfRVRQBP5LWudFua5gQ81CKiZQ90V5Kth4S8Xtwj0E5hGI+Y8AIIYetlUTcLf8oSrkG9K6u+WrfNyg5iAVE2iyW96PGz6l9vmRQOrHDXKLQCANAQKANBzxkp7AY+TyXOlLpU2KBxx6kNfKTVaCsksR8L46VRZND8zzgMOzVQ8fy0oQCKQmEOePACCOH9bVENhabs+QriXNQZ6sSjgY8auHWkQyJrC+6uZjx/tMi43LmqqBg4DnKkUgkBUBAoCsdgeVEYFXSo+R5tZ1uorqdLLUwYkSJEMC3jd+PdTP4XOqnh9l/VAV8gBTJQgE0hCI9UIAEEsQ+5QEXixnX5L6+a2S7GRp1cgn8i2VInkR2FTVOVLqfaQkO/Ex/TXVqulHWqoCAoH5BAgA5nPg/+YJbKcq+D18nyi1mK142uAfq3YbS5E8CHhfHKuqLCPNWRZV5Tyg9XlKEQhEEog3JwCIZ4iHeAJ+1v8tuVlc2gZxl66DgJXaUNmO13FFtc93/t4nWsxefIw70F0n+5pSwc4TIADo/C7OvoG+a/PrUn7tLnVlPfjKPQuXpXYsf774H6LUd3VKkAYImL1fE31YBWX7mPGx42MotXsf84fLaa6PK1Q1JHcCKepHAJCCIj5iCPh9ac/FH+Njtu29WvFp6VOlR0k9ev97SlPLM+XQr5opQRogYPbeB6mL9rHiY8bHjo8hH0upy1hPDj8pRSDQGAECgMbQU7AIbCZ9tTSl3Cxn/qiPZ2K7U8sWr9tRC7tKb5emlPfK2epSpF4CHun/nsRF3iF/b5X6WPExo8WBjyEfS36n/x9ekVBfK18evKgEgUAZAmnyEgCk4YiX8gQ82O+zMkv5BbXz5c93bu5e1eIc8Yd+Ntfay6WpxDMUfi6VM/wUJuBjJ2UX+p9Ust/uOEjpMPmRVnqK6LOUphIf+/6wlccFpPKJHwgUJkAAUBgVGRMT8Pv+j0/o0xdh30352e04tw4SNlIGjztQkkSeLS9bSZF6CJh1ypH0HkToCYT8SehxLbhKG7eQfl6aSvwowD1TqfzhpwcEUjWRACAVSfyUIeDBW+8uYzAm7y3a5ner36TUXbhKJspNyvEi6eul7uJVEi2pu6OjK9RhB37skqJ5d8nJntKXSP8pLSI+xt6ojD5+fBxpMVr2kgf3iClBIFAfAQKA+lhT0kICfkbvKVIXrglbulhmvps/TGmIHCwj39FdrzRWni4Hm0iRagl43Ij3WWwp18mBB/h9WKkHjSopJe5B8nTDl5SyGp7ZY0g87mD4VtZCYAaBdH8QAKRjiafiBHznXTz38JzurvUF9w/DNxdeaz8+kacYF+APBxUumIxBBFIw9mMi73Pv+6BKLDDysedjMMWrginataBaJBAoRoAAoBgncqUj8Ci58kA8JcHyW1luK03VBesBYH6ufIN8xoinMvZMgTE+sB1NwIP+3PU+OsfkLe7t8b6+enLWQjn8ZoDHgPyuUO7RmZ6mTY+UIhAYSyDlRgKAlDTxVYTALsrk0c9KgsTP/H2h9Yk3yMEIoyu13o8m7lYaKp6NzpPHhNpjN57A9trsSXSUBImf+e8kSw/mU5JMfCz6mLw1wqN/Ex7LEuECUwiUI0AAUI4XueMJPCvSxd6yT/HcVW7myEla8wVpjGwTY4ztWAKxx47fFDllbAnhGz0eZZ9w83mWHDvzMPDfaAJptxAApOWJt/EE3IXrZ6/jc43eeqk2+SSupDJxgDE1CUxIIVXMTBdSjy7aPCOiUR7lv2+EfRHTzyiTxxcoCRKPJ+ARUhA6jEIIEACEUMMmlIAv/kuEGsvuY1J34yqpTDyuwJOzhBawmgw9S50SJCEBjx2JmfPfPTsOAhJWaY4rH5sfn7O2+IollfVJUgQCQwmkXkkAkJoo/sYReOy4jRO2eQrfb0/Ik2rzlyIdpf62QWR1OmEec+wYQOw+tY8i6g9E+VgtkndYHo6dYVRYVwkBAoBKsOJ0BIHHjFhfZPVxyvQvaR3iRw0XRRTESTwC3gjTmGPnN/J5hbQO8UDA4yMK4tiJgNdt0/StIwBIzxSPowm4G3f01vFbTh2/OfnW0yI8xrQzothOm8Yw5djp9KFB40IJEACEksMuhMCyIUYLbHwXt2CxliSmvJh21tK4FhYSwzRmX4agiikvpp0hdcWmJQSqqCYBQBVU8TmKwHKjNhRY76lbC2RLlsUTxoQ6e3CoIXYjCXDsjETDBgiEESAACOOGVRiBmM+e+tlqWKlhVjGvAsa86RBW2+5bcex0fx/TwpEEqtlAAFANV7wOJ/Dv4asLra37/WjPWVCoYkMyxYwCH+KOVSLQpmMnZrZCjh3tbKQeAgQA9XCmlPkEYk7iK8x3Udv/y0eU5E/GRphjOoRAzLETsy+HVGXiqpjyOHYm4u1fhqpaTABQFVn8DiPw12ErC65br2C+VNkeF+HoLxG2mA4nwLEznAtrIRBMgAAgGB2GAQT+GGAzZeJZBKeW60hjZmTzh4XqqGOfyuDY6dPepq3TCFS3SABQHVs8zyUQcxJ/rtzFDASTeWFZWTmfIg2VmHaGltl1uximmwrOQ6V1iAeAbhtRUEw7I4rFtI8ECAD6uNeba/MFEUX7NTAHAREuCpv6k8Uxv41fFS6JjEUJxBw7i6oQ71MllcvzVELMu/wcOwKILCRQ5VLMSa7KeuG7mwTOVLPulobKXqGGJezcy7B7ifyzs/r5f8wX4Wb74+/5BDw98w3zF4P+f7usfHeupFJ5Z4T3e2R7lhSBQC0ECADCMZvd42XuiH9rpY+UIjMJ+M5rI63aTrqD9FnSmMFcfi6/h3zYV1V6oPz7i35KgsQXqam6+djwYMJFgjz128jMzM4Mp3iabSgVf0nwQzKe8lVF6mPTn/RVMUHi4NG/EdfNvxn/dvwbCnLWYSNPC+1zro+NDdROn4uVdFGqbRPgyvN9gEz2k3pmOndLHqVlf6jGz+48Bai7Gn3y0ureimfC+7Ba7xP2OUp/JD18ga6kNEZ8gZ7yVUXqO8WY+vmi+2D1mAAAEABJREFUNVUvHxs+Jq6Ww3dL7ydFxhNYSpt9Ib1GqdmZ4RTP9bUuRrxvp3xVkfrYjKmffxtT9fJvxr8d/4YcuPg3FeO77bY+p75MjbhQ6g87+ZzrY8OPTHwufr/W+9ysBClKgACgKKn5+dZWcp50b+mK0tnik78/Wfs9bah74hoVmYX4dT0HRr7gxbwPnUVjElViVflxQOQPDPlOVH8iQwiYjRn5QrrKkO19XOXf0J5q+PnS2E8iy0UrxefSI1Rzf2rZ5xctzhCfi/fRmnOla0k7I1U3hACgOGFH58cr+5rSSfJiZfim1FGrkt6IL3SOzHkcMnyXP1GrfyrlTkUQZskD9fex0idIkbkE3O3t35Z/Y3O3dneNr1G+8L+oQBN98fc5uq43PgpUKe8shpt3DfOp3adUlYdLi4qDAD8OKJq/C/k+q0b4FTolyAgCvoPZd8S2Pq92F25f73CL7nf3ihxUNHNH8r1C7XihtKh4/M4nimbOO1/1tSMAKMb40cq2o7SsvKesQYvzP0Z1316KTCbwRmXxHa8SRAQeJH2DFJlMwHfCfhQ5OWc3cvjxR9mW7CwD95goQcYRIAAYR2fhNo82DenOX1cu1pD2QZ6vRoYwklnvxIMBPYq5dw0f0eBttH5JKTKZgH9j/q1Nztn+HH7c6huLsi3xdc3n7LJ2WeWvozIGVUc5bS/Dz5ZC2+CDONS2TXZ9aWeqfRJzTKWqQy5+OHbK7Ym+8Ir5jcTYltsbLc5NAFBs57mLsljOubliZgWb6y3fNXVMspJv68vXjDvehcw4dhayKLLkHqQi+dqep8fn3Xp2HQFA9ZzdZVd9Kc2XcG3zVWhVDTw3QKsqXGFlOXbKwe3LsdOXc2e5vZ8wNwFAQpg9d/Xznre/bPNPKGvQ4fx+davDzUveNHglR5qXw7pqQwBQF+nul3OKmvg7KTKZwDHK4pkjlSAicKX0Z1JkMoGLlOVUKQKBaAIEANEIcbCAgD/y82YtO1WCjCBwi9a/Q4rMJOBpem+duYq/ZhG4S3/zGxOEbkt9rSMAqI91H0pyt/ZuaqhPVEqQWQT+pb/9jvLFSpGZBNx7ZDa3zVzNXwsI+Dfl39ZJC/4mgUA0AQKAaIQ4mEXgy/rb73W7q1KLyAIC7rbdVMvu/leCDCHwE60zI38PQIvIAgL+LXneiK8s+JukwwTqbBoBQJ20+1PWiWrqBtItpf5y4jeU+gNJw/QSbQsVfy1umM+y6y4PrYDs/JGWUeX5hO0PR22sfE+Vur5KkDEEfq1tm0vNzOzMcBRfs1fWIPE+H+W3zPqYfepjf1RZ/s34t7OFWuffEnf+AoGkJUAAkJYn3hYSuEeLJ0s97/0rlXoq5WH6Y20LFX8kZJjPsutiBqD5AjWqvNeqYQdI/ZUyJUgJAmZmdmY4iq/Zl3A5I6v3+Si/Zdb7GJzhuMQfPvZHleXfjH87Hlzr31IJt2RtL4F6a04AUC9vSoMABCAAAQhkQYAAIIvdQCUgAAEIQKDvBOpuPwFA3cQpDwIQgAAEIJABAQKADHYCVYAABCAAgb4TqL/9BAD1M6dECEAAAhCAQOMECAAa3wVUAAIQgAAE+k6gifYTADRBnTIhAAEIQAACDRMgAGh4B1A8BCAAAQj0nUAz7ScAaIY7pUIAAhCAAAQaJUAA0Ch+CocABCAAgb4TaKr9BACTya+uLJ6XXEmQPF9WS0kRCEAAAhAoRsDnTJ87i+Wem8vnbJ+7525hzX0ECADuQzF0YTut9ZzkaykNlZ1kaB+PVYpAAAIQgMB4Aj7fnqEsPncqCRL7uECW/taCkpyluboRAAxnv5hWHyj9oXRZaaysKwc+oF+qFIEABCAAgeEEXqTVZ0n9BUQlUfJAWX9X+kXpElJkFgECgFlA9OfDpf4C1x5KF5GmkgfI0aHSb0rvL0UgAAEIQGA+gSWVHCT9vvTB0pTyOjk7XZrlIwHVqzEhAJiJ3s+cfqVVm0irklfI8anSNaQIBCAAgb4TeIQAnCzdXVqVbCjH50tfIkUWECAAmA/CXf7v06K7/JdTWrU8QQX4YIx5xiUXCAQgAIFWE3iBau+bricrrVoepAIOl7qnIZNHAqpNg0IAMBg8TPxPku4rrZOHHwkcpjL9fMrdX1pEIAABCPSCwOJqpcdZHak0dZe/XI4UP9Z1T4N7YR81MldPNtR5wcsR6VaqlEfob6a0KZl6PvXopipAuRCAAARqJLCayqpinJXcFha/JniOcj9X2pg0XXBfA4CpLv+faQc8VNq0PFEV8COBHZQiEIAABLpKwK9Wu8v/KRk0cHnV4SipHwm4R0KL/ZI+BgCrahefIK27y19FjpUHaqufT/mRAM+nBAOBAAQ6Q8A3Xe7y9zirFK9WpwIz/ZHAI1M5Lean+Vx9CwCeIeTu8n+q0lzFjwROU+V4ZUUQEAhAoPUE/Gq1R/mnfrU6JZgnyZkfCTxHaW+kLwHAotqjHuV/vNKVpLnLRqqgHwnwyopAIBCAQGsJPE81d5f/pkpzlxVUwZ9Ia3kkoHIalz4EACuK8k+luXX5q0pjhVdWxuJhIwQgkDEBd/n7putHqmMdr1armCQy9Ujg5/K2irTT0vUAwKP8f6M9uLW0KvmxHP9BWoVMHYwnyrm70ZQgEIAABLIm4HOVu/yrvOnyOdfn3qpAPE2O3Qvra4gWU0se/roaAPjCuY8QVznK/075f6vUE1m4y97v9OvPSsTdZ/6wxTaVeMcpBCAAgTQEfI7yucrnrDQe53rxudbnXJ97fQ72uXhurvg1fkPM1xBfS3xNifeYmYcuBgD3E+NvSd8vrap9V8v3llI/K7pX6S1Sf+hnV6W3SasQv7JyjBx7II0SBAIQgEBWBDyA+WjVyOcqJcnlDnn0Bd/nWp9zfe71OdjBxhXaVoX4GuJrid/QSvYNlyoqGuLTjQuxy9VmZVXME0y8TGlV4vdGHy/n/rqfkhniD/1srjWXSasQD2b0qzR+VbCX761WARWfEIBAFAE/7/+0PFR5XrpK/t0t7wu+FmfIefrL06sfobQq8YBsv53lxxtVlVG73y4FAD4AzhZBz/CkJLn8Rx7fKd1eeqN0lLj7yx+e+N6oDAnWO9L2aFUPFEzgDhcQgAAEggh4Gl8Psn5zkHUxI59L11dWn9+VDJWbtXZHqc/RPldrMbn4xs9fFXQa4Twf064EAN4hvxBWz+uvJLn8SR63kH5c6m4nJWNl6mD0j8LdVmMzB270wMZjZetvCihBMiTgSaf89UffHfm5pQctfV319DPFpyulF2cw8KRXnp/DA8bMxoy+Iza+03u5UjNUgmRIwOcen4OqGijnc6fPob6w+5w6CYHPzT5H+1ztc/ak/CHbfY3xRHIbhBjnZtOFAGAdQT1OWtXsUr7T9lS9w7r8VexY+ay2+pFAVc+nPJ2mT5hLqRwkHwKeaMrHjU9Cfizkk5i//OjPTXuciJ8p+iTi7Qeo2n3syfGd4wfVdo+ncfDuV8bMxox21np/sMVjedz16+fK/h1pNZIJAT8P9+PQqr7i53Om97nPoWWb7HO1z9n+DZa1LZLf1xpfc3ztKZJ/Rp6c/mh7AOAP6Ph9zYdUAPUu+dxT6hPS35WGimce9COBH4Q6mGDnwYj2zRcFJ4CqYbNPDN9QOX4Falulk35fnpTqf5XvYqnvcpQkFz+fDXW6aKjhBDsHQ27zXsrneTqUjBTXwR9s8dge9xCY8cjMbKiFgM81Puf4TruKAu3b50yfO0P9+5ztc7fP4T6Xh/oZZefj1tceX4NG5cl+/aQTVM4N8MnTdw5VTNZwjRruLtoPK3W3kpIouUnWL5Z6BGsVr6w8S76/Le3kqypqVxvEA5R+rYr+l7TsfvCx/F3Z+QLnblUtRovr8BZ5eYc0VN4lQ/de2JcWo8Vtc4DkxyF+xaqMQ9fBPQSeVc6sy9iSNx0B74dD5c6v+ylJKj43+hzpc6XPmbHOfe72Odzncp/TY/3Ntve1x9cg/35nbxvxd16r2xoA+K7A3YOPqACnu2Y9kPDUxL59MPq5ZlWvrPhH42g3cbVxN4GAj0V3X/u4iR0h7AucJ67abEKZkza7R8yPhj6ljH4tVkmQ2NbjF/wutN+wCXKywMi/KY/WdoC0YFVQspqsTpL6t8QYCoGoWd6j8l4kTS1+FOTeTO9XnytT+ve53IPEPVgxpV/78jXIAW1MT5v9NKJtDQD87DD1wJO7tQfeK/XguuuVViU+CXoSC5+gU5exvxw62lWC1ETAx6IHsDkQSFGkv0jmmR/dPR7y+3y2KnGh1HOwK0ki/k14VjT3NJV1aC6+aPgVqjXLGo/I77tQjxHw8T4iC6srIPBM+fT4FSVJxedCD6rzs/ukjqc5+5uW/ZvwOd7nev2ZTPwoxGN5JjrMLUPICabpNvi5jrsmU9bjL3Lmr0B9QOk90qrlHyqgilmsfLJ1NMrIaQGuSZapoBzf2TqwcPeiRx0XKcLPZT1HhAc+le1eL+Lf3Zy+g/IdmssqYuMeEbfBvyu3qYhNmTx+pFAmP3nDCbgH6BCZ+xyjJIn42bwDihfKm8+JSioVn9t9LPqtkz8nLund8ldFz4jcVidtCwDc3eKuf98BpKLigRyPkzN/KVBJbeJuLp9M3e3l7q9UBXtwip/RtW3fpmp/l/z42PC4gkknlnXV6LOkniWyyv3u353vvM9UWZNGQPuRlJ/X++5I2ZEWE/Ax5ZnwHASmaobPeR7L4cdnvjCn8lvEjweU+pGAz/1F8hfJ49/GV5TRj6iUDJP81nnH5ler0TXyBTPVK1M+6Bx9ulvTPQCjS612i7u9fDD6fdpUJfmH9ZpUzvDTKAF/Se37qsHBUr96pWSG7Ka/PFraXaharEU874bLfP2Q0pbWOtfVs7K57voTaTmB/1b9/UqekiTic53PeT73JXEY4MTnfJ/7fQ3wtSDAxRwTv9rqa9ScDbmuaFMA4K5/z8KXiqVni/IkLZfK4eUNq2e4eozqkFLcHezBYCl94qs5Aj4Je/yIT5yuhedb9+tSX9AfTcwD4WDk/1S26+C6aHHgd69dR9fVf6PtJ+BziB9HpWyJz3U+5zV93vW539cAXwtStc+Pdj3WYI6/HFe0JQDwycajkVMy9HPM1eUwF/XgL1Unmfju6yPJvOEoBwI+cfqu6aOqjB8N+GSjxUbFdXBdXCfXbe1Ga0PhqQl4v/pcktKvz3W5nHddD18LUrbvM3Lma5aSvKUtAYBHbvqgyZtmfrXza2WelS6/mlGjUAI+WXm+85wGerourpOn9Q1tF3b5EfC5I/a1zfxaVX2NfK3yBF/TSspzsQ0BgEefenKIPAnmXSsPTPFEGHnXktpBAAI5EnDXv88hOdYt9zq9XRV0YKwkX2lDAOD3oZt4xpnvXitXs02U3YNdlCAQgAAEChHwOSPlwL9ChXYokyfR8quB85qU63+5BwB+pY0BRfFHTyu6o+KbiQcIQCARAd/BJnLVW0OyEegAABAASURBVDevVstTvbUmV+kl9wDAF39HUulb3i+PfpY3NXq8Xy3Pq7WpXjdK1SrPRWFN5S+Fn9wYpWhT23x4IKdnf2xbvXOrrycJ23UwyK1aC+uTcwDguZX9jvPC2rIUQ8AfdYmxxzacgGc821vmnrDnHKU5iN+D9qu126kyf5XmIH41zIzMysxyqFMf6/A/ajTP/gUhgWTNMucAwBFo0WlQE+ynzrvw52YdkXa+oZk18CrVxzP6ea7wS7Tsj0F58pHU85HLdWHxDGjuEfK0wUfLaj3pMdKmxL0Qfs3XPVVmZFbmdFlTFepxuT5H+O2hHiNI2vS15c3fUFCSn+QcAOySH65W18gztKWcSKnVMGqqvOdOX19l+UM4SuaJ72w9/akD3GvmranvvztUlJ/tbqN0+lzo7g3w5CV+lc95tLk2MQPPzf4WlXindErcU7Kh/vi2FKmPgM+7WT+3rg9FspLekMxTYke5BgB+19kTjCRubu/d7dx7AvUAuFnFvFzqWca8rMU54i/+efreI+dsqWbF7+X2KdJPSn3HrWSGeN3HtcZvjVystA5x283An/cdVp7ZTeI4zI514QT8YZ5wayxnEZj357P1f5ZvsuUaALjL1F1R4oYkJOCuqFbMUJWwzXW78nPsoneuN6py/miOu1z/peWqxB/Q2ljO/XEeJWPlAm31lL7uktdiJXK7vHpuD7fdDPTnWJnqSTl1bC42xhJwL6HPvbF+sJ9JwOdc93LNXJvBX7kGAP40bwZ4OlcFR6FZHogdIO1n+vurHZtJyz67/qZsNpL64qskmfxdnvwlQc/mVibA8AXaXfJFL9AqprC4jQ4wyn40xWMpnq5SPD7ArLWIJCawlfzx1pUgpJJpfp47bTmbxVwDAN+pZgOpYxWBbfoderVcOrDaR6mf8SspLe52f7KsPEAwxatwfsTgr/b5Yz1yGyTuon+sLH8mjRU/YnCvQswjBrP1GwKeoOaK2AphP4eAx4HMWcmKJATMNrs3K3IMAJYVbr8KpASpgIDvUCtw21uX/rSpB/qdkoCAv0rmAYLuAStzxz67aAcRvpvzALvZ28r+fb0MtpXuJw2VW2Xo56DuVUgxyPBM+XOPidlrEUlEwMddIle4GQxmMHi4/sruupZjAOCBSjH1sv2jBbvL6umR1cQg8etffiYVZIzRHAJHac1N0pRynJz5wqskSPzMP0UvwlTh9uXn8FN/l02vk4HbpCSZ/EOezF4JkoDASvIRM3f9nrLv8jnXbfO1Rc0MFo8NCjauwjDmQltFfezT3ZZOQ/QiGZ0ldfdgl/UwtTFUPMGSu3VD7bGDAAS6R8BvY8S0yuekLp9z3TZfW35XFNKQfO4pHLK6uVU5BgAxF6e+dAleqUPGE6YoCZLHBVlhBAEIdJVATADgV0w9SLOrbKa3K+YaE8N4eh2SLecYAHge6tAGnhBq2EK7X0TUObtnURFtwRQCEIgnEHNTEHMuiq95vR4KXmOGVooegKFYZq70s6iZa4r/9eviWVuf8zcRLXhEhC2mEIBA9wh4OujQVsWci0LLbMou5hrjr9tam6r7nHJz6wHwaxKhgDyhyPTpTec0tmMrPN4htEmrhRpiBwEIdJLAyhGtujDCtm2mfrNm4qDfMY2KucEd4zZsU24BgF8BXCKsKYPfBtq11SymvTE/9rbyot4QgMBoAg8evWnilpiBcROdZ5gh5ty7XE7tyS0AeGgEnJjXpiKKbczUUWjoO9UOtBqrOAVDAAJZEfC06/7+SkilbpORv9mgpDdyw/iWjt26/NitNW/MLQAI7f43Nr8X7LRP6sceIe31nN9+HTDEFhsIQKBbBGJuCPp43o1pMz0AY347MRel0IvhmOpkvyn0QPRYi9BHLdlDoYIQgEApAjEBQB/Pu2PbPIF8DOsJrstvzq0HwHN9l2/FfIs+fiAkps257fv5e5H/IQCBugl4psfQMmPOQaFlNm0X0+YY1snbndtFwHOhhzbSX7oLtW2rHV/uauueo94QyIeAn+OH1qaP590xbZ6IMYb1ROdlM+QWAMREVn28GIa22V9mu73swUJ+CECgkwRizgWh56A2g4xpMwHAmD0f0wOQ1bOVMW1MuelBgc7+LbuYYEvmCAQg0BECMRelmNcH24pvZJsLNCgm2CrgvlyW3HoAbilX/Rm5HzXjr+7/8RA18YHSEPErhCF22EAAAt0jEHNR8k1IVq+21bB7Vo8oIybYiih2uGluAcCfVM3QQRIxO0XFtk78ecrQSvdpxsRQRthBoC8E7lRD/yoNlb7dfK0xHFShtVcXylVTptwCAE9sc11g2z2HQEzXTGCxjZmtFVFyKOOIIjGFAAQyJvCHiLrFnIsiim3EdAWVGvq42WOvLpN9NpJbAGAwMZ+V3MQOeqKbRrTz8ghbTCEAge4RiAkAOO8OBoMCh4RvvG4tkK+2LDkGAH+MaP3TImzbZvrUiApfEmGLKQQg0D0Cl0Y0aYsI27aZxpx3Y4KsSjjlGABcEdHSvhyIHgC4TgSniyNsMYUABLpHIObi9Fjh6MtAwBE3mSIwWbLq/nd1cwwAznfFAvXJsnuYtOvyQjXQ0/kqKS0eZHleaSsMIACBLhM4M6Jxvo68IMK+LaYPV0U3koZKDOPQMsfaeceNzdDAxrMjynR7do6wb4vpyyIq6k939u3rXRG4Jppuphyvq0BDX/FUVQb+DaSu0052HKh+VSx1fezP7AOrhNksAtfq75hegJhzkopuheyiWvoao2SmFPzrxIL5assW05iqKulX1K6McN71A3E1sdlcGiqnhhpiN5SATwpf1JbU6sc8chskB8gqdX32l89Q8Rs6qetjf2YfWifs5hL4xdxVhdf48WvXe19jri0e2xbzeLvwjiiTMccAwPU/3v8F6uNlF3OBlHnW8j+qXcx+i2GrohEIQKCjBGLuUH1O2q2jXNwsP/t/nBfmaqE1McFVoQJCMnmnhdhVbXNcZAF7Rdrnau55Dt4QUTl/bfGECHtMIQCB7hJwAOAxQqEtfJMM/bhHSeck9ppittlByTUAOFakYqan3Fb2G0q7Jm9Ug2KeDTsKZRpgQUQgAIE5BP6mNTEXKl/8fY6Sm07JBmrNs6RDpcBKX8uOKZCv9iy5BgCeLOGnkTT2jbTPzdx3/2+LrNThkfaYQwAC3SbwtcjmvV32Plcp6Yx4/EvoW1eG8H39l+WNV64BgHgNDvV/Efp82cZM2iDzrGQP1SbmXVtHoUfKBwIBCEBgFAGfI/45amOB9T5H+VxVIGsrsvga4mvJiMoWWv31QrkayJRzAPAj8fAbAUqC5WOyjIncZJ6FrKpa7C6Nke/KOMsoVPVCIACBPAj4RuGwyKq8VfZ+Z15J6+XAyBZ4avuYxyqRxY83zzEA8OtPfuZijQX3JDXfXVJbKW2zfkL1v780Rjz739PlYF3p0lIEAhCAwBSBZbTgGf18joj9Vsj95Ms3X20+57ru71A7xn5zRdsnybnK8AzpE6S+tinJR3IJABYTEk/scYHSv0h/JTW4mPcu5WKe+ED0q29t1h3ntSTuP0eyfgPgt3Lzd+lPpLEHt1wgEIBAiwn4/X0Pur5RbbhI6nPER5TGis9ZbT7nuu6+dsRyeLEc2JdnuPW1zbOwvlrrFpU2LjkEACuJwilST+zhd/i1iFRMYEn595sSpyn1jz2H40BVQSAAgZoI+Kbr0yrrJKlHuC+uFClFICjzE2X1FakDrRWUNipNn/jd7eR3/jdplEK/C3+Xmu8gQAkCAQj0hIAv/m/uSVtzbKYnFvK1r9HHsU0HAO6WjpldKccd28Y6+VnXlm2sOHWGAARKE3DvX8yEYqUL7KJBgjZ5XECjr6s3GQA8VAD93F8JkgGBfTKoA1WAAASqJ7B39UVQQkEC7oVZtmDe5NmaDACep9bw3EkQMhF3Sfkd3kyqQzUgAIEKCKwin/5suhIknEAyS78x8Zxk3ko6ajIAeEzJupK9WgIelbp2tUV00ru/rniwWoYOBnUzMHuhR0oQ8G+8C3OjlGhy9lnXaaqGTQYAHgDYVLspdzgB9slwLuPWfkcbX48OmmBg9kKPlCDAb7wErFFZE69vbJ80GQBclxgi7uIJxM68GF8DPEAAAlUS4LxbJd0w342dd5sMAE4OY4VVRQQ8ScXvK/KNWwhAIA8Cv1Y1/iFFggkkN/RcDMmdFnHYZADg53eXFKkkeWoh4K+A3V1LSRQCAQg0ReA/KvhbUiQPAg7IPOttI7VpMgDwxcbz9N/TSMspdDqBq/XHh6UIBCDQfQIHqInXS5EAAglNfA18m/zdK21EmgwA3OBj9N8e0sYAqOy+i78L8AJBoFtQEBAI9IDAX9XGF0r5OqggNCS+8X2Lyo794J1chEvTAYBr7g8u7KCFa6VIvQT87MnvBPtDFfWWTGkQgECTBM5U4U+R+nsgSpBiBJLkukpetpd+Ttqo5BAAGMD39d+a0pdKvyr115P81aRhGjNi8gr5/nmA3iCbULlQhiFl3iq7UPGPe1SZP5ZTz/2/udKnSy+XIhCAQP8IeAyWzwOeBvzjav5R0lHnjbO1LVRuluEov+PW+8ulMg0Sv+0wzveobVcGlTbf6DIlo/z+VNu+JPXNrudiOFrLjUsuAYBB3K7/DpO+RrqNdKMR6slGtClIPPhla1mWVd8pyyxIPiCrsuU5v4MVmQbJbrKyj2HqyNOPXYj8BQmBAAQGfiPrneKwnXTYOcPrPGWtNgeJAw37KKu+UQkqUEa+iSxbnvOPnVtCfseJb17tY5j6+wue+v4IObhDmoXkFABkAYRKQAACEIAABPpAgACgD3uZNkIAAhCAQCSB7pkTAHRvn9IiCEAAAhCAwEQCBAATEZEBAhCAAAT6TqCL7ScA6OJepU0QgAAEIACBCQQIACYAYjMEIAABCPSdQDfbTwDQzf1KqyAAAQhAAAJjCRAAjMXDRghAAAIQ6DuBrrafAKCre5Z2QQACEIAABMYQIAAYA4dNEIAABCDQdwLdbT8BQHf3LS2DAAQgAAEIjCRAADASDRsgAAEIQKDvBLrcfgKALu9d2gYBCEAAAhAYQYAAYAQYVkMAAhCAQN8JdLv9BADd3r+0DgIQgAAEIDCUAAHAUCyshEA0gaXk4WXSr0kvkv5FerP0T9KTpPtJHy+tU1ZWYW+T/lB6qfSmBerlH2j5rdKVpHXKE1TY/tKTpWZjRjdo2cz8ffVdtHw/KQKB2gl0vUACgK7vYdpXNwFfrPZRoddKD5G+UvpY6UOkD5A+XLqFdG/pBdLTpZtKq5RV5dx1uUrpJ6TbS9eQPmiBevkFWv6k1Bfhbym1jZLKZDN5PkN6vvS90qdJzcaMVtSymb1K6belZuk8Zqs/EQhAIAUBAoAUFPEBgfkENlFyofT90mWlRcQ2pyrj/0mXlqaW3eTw91L3RiyudJI4z8uVyTavV5pa3Ea39Zdy/BRpEVlOmdxLYLbmpT8RCFRNoPs5xIsnAAAQAElEQVT+CQC6v49pYfUE/Dt6i4pxN7bvprVYShZRbl9sz1P6RGkKebCcHCb9gtR31UpKiW18ofajgeVLWY7OvJ42+a7fbXWb9WcpMdtTZPE+6aJSBAIQiCDgE1eEOaYQ6D2B1UTAz/Q/pdR3z0qCZW1Z+gL5TqUhF0iZzZNn6n8/Q99Jaaz40cCv5eQZ0lBxW94hYwc4j1MaI4vJeF/piVKzV4JAID2BPngkAOjDXqaNVRLYQ86fKk0lS8jRR6XHS8s+h/fF0XfHxwXYymSkuB4/19aDpK6fksLi5/lHK/fHpGVtZTJSzNzsR2ZgAwQgMJ4AAcB4PmyFQFMEfBf/KxW+nbSIPEqZ3D3uu+Mqfte+i99dZZwmXUtaRLZRJvcebKsUgUCLCPSjqlWcKPpBjlZCoHoCK6iIH0m/Kb2/dJT8lzb8RlrHALmNVI4DE4950OJQ8Wh99xYcq611v1aoIhEIQKAIAQKAIpTIA4FmCbxCxZ8rnT1vgF/j82ty39C2ZaR1iec48JiHI1SgR+gruU/W1dKZUvcWuNdAiwgE2kWgL7UlAOjLnqadbSewjhrgAYJ+7u3frV+h8zv0nihHmxqRF6tU9wb4HX5f7F+nv8+RbiBFIACBzAn4RJJ5FakeBCCwgIC71g/U8tlSzx2wutKmxZP3nKBK+ML/RaXjHlVoMwKB3An0p34EAP3Z17S0OwQ2VFNyeg/edXGdVC0EAhBoCwECgLbsKeoJAQhAAAKVE+hTAQQAfdrbtBUCEIAABCCwgAABwAIQJBCAAAQg0HcC/Wo/AUC/9jetbY7A3Sr6CmlO8ndV5kZpTnK5KmNWShAIQKBKAgQAVdLFNwTmE7haiefSf4xSfynwHqVNi+fS9+t6fm//Z01XRuXfK/201J8B3lxpbsGSqoR0nUDf2kcA0Lc9TnvrJnCkCvQEPp6m9z9a9lz9z1L6Z2kTcpcKdRCytdJrpTdInyN9q/ROaRPyFxX6PKlnF7xDqScS8lcRD9UyAgEIVESAAKAisLjtPYHbRcAXVU+WM7ub3R/WcVBwlPLUKVeqsC2kDkKmd7P77ttT926mbZdK6xR/uMgsjplV6D/198uku0pvlSIQqJhA/9wTAPRvn9Pi6gmcpyJ8UfNFVYtD5a9au7309dLbpFXLt1TA46SnS0eJpxv2+/wHj8qQcP2/5csB0rOVXicdJf4Owvra6FkQlSAQgEAqArkFAEurYctOUM+GpixBYttJ/odtj/mMaZE2DSvTk6sENVJGD5QO8zl9XUyb5B4ZQsDP9j+i9ZtK/yCdJL7z9sXW0/peNClz4PabZLez1B8MKnInfYvyOih5qVLfhStJLm7rxvLqAMkMtDhW/qitW0r9mWQz1iKSkIDPBdPPDcOWHxBRnj9TPcznpHUxs0ouqfpO8j9j+4L8/s6FFoOkyPXF14Mg51UYNRUA+AK1nRrkD4p4GtFrtOwftk9Q7i4dp3sqb6h4HvVxvkdte2FogbL7inSU33HrPRhKpkHi583jfHubn7VafaH6sUrZW+ou4JjAQy56K36mv41a72Os7LP0C2X3JOnnpEUuiMpWSDxdsHsivlso98xMh+lP256mNJW4bZ+VM1/8HQRosbCY6buVu8nxEyq+1eILsQdY+rfux0/+7ZurzwM+J4xTP7YKbfwTZDjO96htX5BdqOwkw1F+x613r5RMg2QfWY3z7W2+xvla52veL5T/k9LnS31NVFKv1B0APFPN84nFA4/8mVMP+nm61q0q9cdElCA1EnDkv6bK8wG4n1JfMHxgflzLj5YixQj4WPaIev+gi1nMzeUxA2/Saj8W8OMBLQaLB/rtK2vfNV+lNFSmjxmwz1A/tvNAPx9nb9Yf7v5XEiS+EJm1mQc5SGzkoCaxy+Tu1pDHT0j9Nsovlfq37kGX/u0vrr+RQa0IfK3zNc9vBjng8A3Y9arBd6Rep6QeqSsA2ErNOUvqH68jM3eV6E8kQwIrqU5vl14i/bb0kVJkNAG/uvYCbf6bNIX4zswXuBh/ro9P8tMH+oXWzT781sCLQh3IzgGN2/QTLacQs3EbzT6FvxgffsQSav+PUMOCdo9SPr9JcbHSt0n921aCZEjAjx78qM43EX4LppZAoOoA4CEC7ajmeKXu4lSCtISAHwX4U7O/VX3dre2/tYjMIuBAadaq6D89KC7m+btP+NGVmOUgxqcvkr7DmeUy+s8q2Jet1GVlDablr+qNC/9W91I5/u16LIf/1p/IKAKZrX+y6uNAwMHbClquTKoMAJ6qWl8gdVSjBGkpAQ/EOVB19+ta3EEIBAKBaQQ8RsLPdqetKrToxyD+TRXKXCLTysrrntYPKvVdpRKkpQQcvPka6rFZlTShqgDAg+Z8cPs5RyUVx2ntBNwl5a6ptWsvmQIhkC8BT+70sYDqeTDkzQF240w8bsfP+D32Y1w+ts0gkPUfD1PtPFC+khvpKgIAT9xxhCrNc35B6Jg8Qu3xCcZT2moRgQAERMAD7MrMU+A3IDxGQ6bJZB15ch0cBGgR6RABD9b2eCy/ypu0WakDAI8s/bJqmNqvXCKZEPC4jmNVF3p3BAGBgAj4NTq/1uzgWH+OFXfpeuplz7cwNmOJjb5L9Pcc/NssYUZWE2iJ+prqa6uPnWRVttNUzvyqiaMUv2uayid+8iTgngC/W86+znP/UKv6CfjNBL/m7Ncc/frk7Br4uwseTOtJovyq7eztoX/7Nb7DZfxwKdJtAt7XHhi4eqpmpgoAPMrUo/0bmcwgFQz8lCLggSl+17yUEZkh0GECHg/gZ/t+/c4TeXneA/cM+BVIX6A9S6QH/6VE4O86bJLSYb98ta61D1aNfa31NVeLcZIqAPAEJhvFVQXrFhLwzGx+9tjCqlNlCFRK4HfyfrTU8zr8RmkVEwatK7/vkiL9IuBX6ndL0eQUAYDnU/ZEISnqg492EfDglJAR0O1qJbWFQJ4EPGOnu4XzrF0LatXiKu6vuj9IGiUpAgDf/UdXJKoVGDdJYFsVTu+PICAQqJGA59f3dxFqLJKiMiLgG+83xtYnNgDwILDoSsQ2AvvGCezeeA2oAAT6RcDTdXtO+X61OmlrW+/MA059DQ5uSGwA8GyV/FBpKvEHRzw/NjoYVMnAU7Om2mf243nil/ECCgEIVE7gASrBk60pSSY+J1R5zsH3/HO6r3GpdppnZt06xllsAPDimMIX2HrOc49k9WAyP1NeTuvRwaBKBu4+WlKct5AeIvXnKZUEi79xTXdkMD4MIVCKgG+8/JsrZTQrs3/z39K6p0l9LvA5ocpzTna+1e4m6uRrnAdvetycr32qRpREXYNjA4CnR1V9MDhH9lMw/LGRKkbKqghkCIE7te4U6Suk20gdoSsJFk8VHGyMIQQgUJhA7G/N3y7wF1o9s5wnL/K5oHDhZIwi4Gvc7+XBN71+VfRcLcdI1LEQEwCsolp7QhglQeIvYfmu8c9B1hilJOAvT/nzqn6POdSvJzgJtcUOAhAoTiDmvX9f7LdXUSdKeyxZNN2TQ/kaeFlEbTznhB8FBLmICQBi54P3AIbYu86gRmM0lIB7Aw4euqXYyrWULeZ4kjkCAQhMIODf2JoT8ozb/AVtPFWK5EHAvTGxg6iDP9DmgykUgyOPUFtHPJ67OtQeu2oIeBazUM/+bHDKAaGh9cAOAl0m4N+Yf2uhbfx8qGGX7DJry09Vn8uloRI8NXBMABAz7e/JoS3FrlICHodxfUQJzAcRAQ9TCBQgEPMb8+PWPxQogyz1E4i5JgYfEzEBQMxrXzEXmfp3Tb9KvC6iuTHHRESxmEKgNwRiRv/f0BtKYxua5cZGzrsxAUCMbcp3IbPcmy2uVMy+iTkmWoyMqkOgNgIxv7GY33ZtDexpQTH7JvjDQDEHU0/3E82GAAQgAIG2EqDeCwkQACxkwVI8gQ/KxeEldTvlD5WXy7BsecPy+1UcuQqS18hqmM/YdR7sJddB8hlZxZY/2/4g+QyVlWU421+Kv81eroPE+zxFHer28aGg1mIEgSEECACGQGFVMIFnynKHkhr8CovKWV9atrxh+R8tP6HyRBkO8xm7LmY8xXMqqJN9ym2QuC2xPIbZm31QhWTkfT7MZ+7r/BtT9ZEwAlhNJ0AAMJ0GyxCAAAQgAIGeECAA6MmOppkQgAAE+k6A9s8kQAAwkwd/QQACEIAABHpBgACgF7uZRkIAAhDoOwHaP5sAAcBsIvwNAQhAAAIQ6AEBAoAe7GSaCAEIQKDvBGj/XAIEAHOZsAYCEIAABCDQeQIEAJ3fxTQQAhCAQN8J0P5hBAgAhlFhHQQgAAEIQKDjBAgAOr6DaR4EIACBvhOg/cMJEAAM58JaCEAAAhCAQKcJEAB0evfSOAhAAAJ9J0D7RxEgABhFhvUQgAAEIACBDhMgAOjwzm2gaXupzB3RAQwGMKjod+DfmFwjRQmQbzQBAoDRbNhSnsAvZPI9dACDAQwq+h34NybXCATiCRAAxDPEAwQgAAEIZEmASo0j0FQAsIMqdTg6yJHBo7VfEAhAoHsE/NvO8ZxDnQYDXxNrP+KaCgDWVUvdYHQwb8fnxGE57RsEAhDoHgH/tnM611ReF+3CtpSxrupauzQVANTeUAqEAAQgAAEIQGAhAQKAhSxYggAEIACBzhCgIZMIEABMIsR2CEAAAhCAQAcJEAB0cKfSJAhAAAJ9J0D7JxMgAJjMiBwQgAAEIACBzhEgAOjcLqVBEIAABPpOgPYXIUAAUIQSeSAAAQhAAAIdI0AA0LEdSnMgAAEI9J0A7S9GgACgGCdyQQACEIAABDpFgACgU7uTxkAAAhDoOwHaX5QAAUBRUuSDAAQgAAEIdIgAAUCHdiZNgQAEINB3ArS/OAECgOKsyAkBCEAAAhDoDIGmAoAjRHBHdJAjg8u1XxAIQKB7BPzbzvGck7BOWZ5Ti7TP18Taj7imAoDfqqXfQwc5MrhR+wWBAAS6R8C/7RzPOdRpMPA1sfYjrqkAoPaGUiAEIAABCHSbAK0rR4AAoBwvckMAAhCAAAQ6QYAAoBO7kUZAAAIQ6DsB2l+WAAFAWWLkhwAEIAABCHSAAAFAB3YiTYAABCDQdwK0vzwBAoDyzLCAAAQgAAEItJ4AAUDrdyENgAAEINB3ArQ/hAABQAg1bCAAAQhAAAItJ0AA0PIdSPUhAAEI9J0A7Q8jQAAQxg0rCEAAAhCAQKsJEAC0evdReQhAAAJ9J0D7Qwk0FQBsrgrvgQ5yZLCy9gsCAQh0j4B/2zmec6jTYOBrYu1HXFMBwDPV0gPRQY4MHqb9gkAAAt0j4N92juecqDppN3XB3tdENaVeaSoAqLeVlAYBCEAAAhCAwAwCBAAzcPAHBCAAAQi0hwA1jSFAABBDD1sIQAACEIBASwkQALR0x1FtCEAAAn0nQPvjCBAAxPHDGgIQgAAEINBKAgQArdxtVBoCEIBA3wnQ/lgCBACxBLGHAAQgAAEIQXalIAAAEABJREFUtJAAAUALdxpVhgAEINB3ArQ/ngABQDxDPEAAAhCAAARaR4AAoHW7jApDAAIQ6DsB2p+CAAFACor4yI3A0qrQY6VPk26VQJ8kHytI6xJP2bqpCktRd3wMBjEMfAz5WLq/9gcCgU4RIADo1O7sdWMeqta/S3qO9CbpRdKTpccn0LPk4wbpGdIXSquQxeX0f6S/k14tPU2aou74GAxiGPgY8rH0T+2Ps6XvlK4oRRokQNFpCBAApOGIl+YILKmi95FeLv2IdCPpYtLU4t/KU+T0SOlh0qWkqcRfafulnH1Ouo4UyY+Aj6mNVa2PSq+Q7i31sacEgUA7Cfik1kTNfXfzYRWMDga5MbhO+6Utspoq6gvn+5W6219JLbKTSvm2NMXvZxn5OVb6ZCnSDgI+1vZTVd074Mc1WmyF+Led2/kmoD7ZnTNTtMHXxNoPohQnsJBK/1xGe6KDHBlco/3SBnm4KukTsO/KtFi7+FHArglKPUA+1pci7SPgoM3H4Kotqbp/2zmec6jTYOBrYu2HUVMBQO0NpcBOEbifWnO09JHSJuW9kYUvL/vdpEh7CayuqvtY5HGAQNQhlJGOAAFAOpZ4qo/A/ioqh7tmn/w3UF1C5Tky5MIhCC2Xx6v+fgylBIFAewgQALRnX1HT+QTc9f/m+YtZ/P+YiFrE2EYUi2kFBN4qnz42lSDVEcBzSgIEAClp4qsOAu9QITndNce8H57yTQJhQRok4GPSx2aDVaBoCJQjQABQjhe5myXg0devbLYKc0q/ds6a4is8Krt4bnLmTsDHpo/R3OvZ2vpR8bQECADS8sRbtQReLvcPkuYid6ginhxISZCcGGSFUa4EfGz6GM21ftQLAjMIEADMwMEfmRN4Q2b184RAt0TU6XzZWpUgHSHg2Rw70pTcmkF9UhMgAEhNFH9VEdhcjmNG3Ms8qdwob54NTkmw3CtLDx67SynSDQJ+O8XHajdaQys6TYAAoNO7t1ONy+nOynf9LxZdz9mvJEo8k6F7Nu6O8oJxTgRyOlZz4hJVF4zTEyAASM8Uj+kJ+EM/vuCm91ze4+ky8Zf6TlKaSr4sR9tKL5Ui7SfgY9XHbPtbQgs6TYAAoNO7tzON+2+1ZAlpqPxZhp5qM1S/L3vP9+1Pw26mZX8dTklSOU7e/NnZ7ZR+RvpjaWh9sZs/tWoMBx8z2gVB4mPVx2yQMUbDCLCuCgIEAFVQxWdKAv4K2+sjHfr97K3lI1RfIlvPV+7uei1WJv+R56Oku0u3l4bWF7vBIJbBO8U/RvxYZ/EYB9hCoGoCBABVE8Z/LAHfEcd8ce16VcCf8FWCQKAwgSOUM6YXYBXZP0+KJCCAi2oIEABUwxWv6QjEDqj6kqpypxSBQBkC7o35ahmDIXnfOGQdqyCQDQECgGx2BRUZQsBz5T9jyPqiq/x63cFFM5MPArMIfEF/OxBQEiTPlJXHdShBwglgWRUBAoCqyOI3BQHf/S8S4cgD6a6JsMe03wT8CODoSASvi7THHAKVESAAqAwtjiMJLCP7/5LGyOdijLGFgAjEHkOvko8HSJFAAphVR4AAoDq2eI4j4DnVPbd6qJeLZchc+4KARBH4hax/Kw0VX/x3CTXGDgJVEiAAqJIuvmMI+DWqGPvPy9hT7SpBIBBFIHYcyZujSu+1MY2vkgABQJV08R1K4Kky9JzqSoLkVll9U4pAIAWBr8mJp39WEiQeCMj3AYLQYVQlAQKAKuniO5SAB/+F2truEP33TykCgRQEfPE/NNJR7DEdWXw7zal1tQQIAKrli/fyBFaSyYukMeLXt2LssYXAbAKennn2ujJ/ezZJTw5Uxoa8EKiUAAFApXhxHkDAc6h7LvUA03kmnq73N/OW+A8C6Qh4IOCpEe48LfCrI+x7aEqTqyZAAFA1YfyXIeB5/2Pfm/bgvzJlkhcCRQnEHlse2OpAoGh55INApQQIACrFi/OSBJj3vyQwstdKgO8D1IiboqonQABQPWNKKE4gdu505v0vzpqc5Ql4WmC+D1CeGxaZEiAAyHTH9LBanvf/6RHtZt7/CHiYFibgAaYOBAobzMrI9wFmARn+J2vrIEAAUAdlyihCwM9Hmfe/CCnyNEnA3wc4KrICseNcIovHHALzCRAAzOfA/80S8OC/nSOrEDtne2TxmPeIQOxgwJeKlY95JcgwAqyrhwABQD2cKWU8gU20eUVpqHjmvzVl7DsrdDCAQbUM1tCx5mNOSZA8RFZPkiIQaJQAAUB5/P64x44y+7T0Z9JzpWdKfyjdT+opPxdVihQnsFHxrENz+suB/6ctX0QHMBhUzsDHmo85HW7BEnvMBxecv+HQGvqcuoW2HCD9kdTnXJ97j9Xyp6Qvli4tRUoQIAAoDmtVZT1I6meA31XqD3xso3RD6ZOl20v3lnoimj8o9dSfMRPayEVv5GG9aSkNhcB8Ag+fn/D/BAL30/bdpZdLT5L+r9SvC/uc63Pvs/T3W6R+RfM6pR+XejZRJcgkAgQAkwgNBssry0ekl0p9IBaJ/FdXXj+TvkTprlJHr0qQEQTuP2I9qyHQVQIc8yP27ILVHiPxWi37Zso3Xo/Q8iRx7+zbleky6Qely0qRMQQIAEbD8YXed/SOPN+lbEtJy8ojZfB16YVSz28fM8pdLjorMc9TOwuFhnWawL863brwxvkc6UesF8mF5/UI6Snxo4C9ZO9zt1P/rT+R2QQIAGYTGQzcbe9BVL7j9zP9B83NUnrNOrL4vvTX0h2kyEwCf5z5J39BoPMEfJfa+UaWbOBWg8HgHNn4EevaSmPFPQDuCbhSjvaQ+nGCEmSKAAHAFInBYFEt+mMdvvB7IFUVz5EepzIOl54gfYoUmU/AA3rmL/E/BPpBgGN+4X7eVIunSI+X+rm+kqSygrwdKP291I9kue4JhAUQpjAYeHau87X4Felq0qrFM96drkK+I62jPBWTtVyg2l0tRSDQBwK+I/VjwT60dVwbH6WNviHyVxafquVBxTr1SNZvD2xZcVmtcN/3AMDv4x6mPfVz6frSOmURFebJby5W+g6peyCU9FLuVav9apUSBAKdJ+Bj3cd85xs6ooEe4Lentv1O6keiPhdqsTZ5gko6UXqIdDlpb6XPAYBf2/NAk50a3vseXPgx1cGvDz5aaV/lM2q4X+NRgkCgswR8jPsNoc42cELD1tL206Qfks56Jq819crLVNxvpc+V9lL6GAA4+vQF9wfa4zGzz8k8qXg2PHdNOTBJ6rglzm5RPf01wD7fGQkB0mECPrY9P0hf33rxZD0e5JfTLIge6+VvOzgg6V0vbN8CgAfr5HKc1F3udXc7qdiJ4vo5MNl3Ys5uZnDb/UPsZutoVd8JeBY7zxjaNw4+17rt31PDHygdKg2udP38SOKnqkOO9VO1qpE+BQCebc7d7B6AVw3NNF59ML5Prjwg0b0VWuyVeKYvBwG+W+pVw2lsZwn4WPYFcJ/OtnB0wxbXpq9J/bv2uU2L2crWqpnfRlhFaS+kLwGAR9p7x67Xor3qVxIPVX37GAS8R+324KAblCIQaDOB61X5l0g9qZiSXokv/h5k7VfvJjQ8m80bqCa+VviGUYvdlj4EAJ5JyiM+/cpJ2/amL4Ieqdq7Z1PaUZ446TFK3yu9RopAoE0E/Fqr73p9DB/ZpoonqqtvXPyas2dATeSyNjcejO25WjrfE9D1AMDPc36iw8Zz8ytppfgthU+0subxlb5JLj4gdQ/Oxko9SNAf+4h5h/oM+Tk4E/X8B6pKkHgwVS7tcF2CGiEjM8ilHT42VKUg8THpY9PHqI9Vz13vWej+GeSt/UZ+q8eD/gq1JMNMa6pOR0s9JbySbkqXAwBHoJ5kwrPvVbn3HClWPZWtP0Lkrw9W2Y6cffsZqt+Q+Lwq+U6p521QEiQeiPR6Weagx6geoeJPoubQBtfBdQlthxnYRw7qYyO0HT4mfWz6GPWx6mM21Ffb7fxBnt0qboTn+ffXAassxvMF+BFGZ3tguxwAeCCdPxVZ1QFylhxvJfUsgp632icwfypYqyoR9wJsVolnnEIAAhBIQ+BpcvNhaQkplfWvyu0R+49V6gHdnkHQg7v1ZyXiOQL8GLIS50077WoAsI3A+itQSpKLu/r8rr7n8v/FAu//UepuTHcbudx/6O/U4h4NP1NbPrVj/EEAAhBIQMAzq1Y1cPnvqt+7pX604gDjDi1bPI3wFlp4odST+ihJLh7A+YzkXjNw2MUAwM/9/Qpd6rZdpf3lu3x3C/1Yy8PkNq30Ryd8kDpKvVl/pxQPaPx0Sof4ggAEIJCIgGc4XLWsrwn5/6XtvuCvofSj0tuls8WPWzy/gqdz31EbL5OmFD8C+KYcep4WJd2R1BfJHMj4IEn5Cocv6r6r99297/LvLtBIz2rng3Yd5fWnLZUkk13k6XlSBAIQgEAuBNwr6reWUtbHvQk+7/pmygOCJ/m+Rxk8jsOPB9xtPyxYUJYgcWDjQZ1BxrkadS0A8BST/50Qtt8g8MHku3p385d17TEB/uCPxyKkHCjoEbZNz6NdlgX5IQCBbhLw90wCeyaHAvEdvMdXea5+fzthaKYxK+/UNr895HlffqblVOIe4I1SOcvBT9cCAL+Gk2K2KXcp+Q5+O+2kK6Wx4umHfeB4pHCsL9v7s5Z+M8DLKAQgAIEmCXhqdb+qm6IOPlf6Rm5qfFWMzytk/BypexB8TtdilPh66WtMlJOcjN2gnOoTUxdfrDePcbDA1l3+fo7kg8ZdSgtWRyc3yoMPRr8mpMVo8WOJB0V7wQEEIACBcAL+nK4H5wV5mGXkXoRttS7lIGpf+H0z50en/5bvWPFbDq5jrJ8s7LsUAPiCHQvV3fx+jnVErKMR9ndpvScK+aTSWPGAFH9ZLNYP9hCAAARCCXh+kgeEGk+z+6yW3yItMsZK2UqL3+f3jZ3PwaWNZxn4rYBZq9r5Z1cCgC2F35/TVRIsvtt/paw9MYmSSsUThniAS2whb5UDxgIIAgIBCNRO4P4q0QGAkhC5z+YbWqrjkeZRKue1UvcKKAkWvwKeorc5uAKpDLsSALwhAZD95CPFRVluJspUsHH2xJzjM6yozW2ca1vVRiAAgZYTcG9p7Lwkp4tBiouy3BQSBxspRvOnuOYUqnCVmboQAKwgQH4FRUmwnCfLFAeF3BQWP27wcym/MljYaEhG/3iGrGYVBCAAgUoJRL1xpZr5HX/3uqbolpe7wuJZYj2Ta2GDIRl94+XxD0M2tWdVFwIAP9dZMgK5B/29VPa+ICupVTyfdewAGj/+SDnvQa0AKAwCEGglAb+JFDs1+dvU8kuldYsDjl1VaMw8AX70+hL5aLV0IQBwJBazE/xOfRMH4VSdPbnQb6b+CEj92qOnwQwwxQQCEIBAEIHIc87gIpXqGVuVNCKXqNTYN7JiGagKzUrbAwC/BufXMkIpeqpezxwYap/CzuMB3h/pKPYRSGTxmEMAAi115OMAAAwNSURBVD0j8PzI9nqmPp/7It1Emfv1wFsjPPj7AJ56PsJFs6ZtDwA8EnPxCIR+79QfmYhwkcT0B/Lya2mobCrDmMcgMkcgAAEIFCLg7u+Yt67OUymjvqeiTbWJvyzo1w9DC1xChrGPQeSiOWl7AOCvQMXQ84jQGPtUtn4t5WsRzjwV58YR9phCAAIQKErgycroIEBJkPhc53NekHFiIz+GiKmLP0ecuEr1uWt7AOADMZTWGTL0nNNKshB/NChmEowYFlkAoBIQgEArCMSca+4aDAaHZ9RKXwPOiaiP5wSIMG/WtO0BgD/2EErQF9xQ2yrsrpfTE6WhEsMitEzsIACB/hGIOdecIFzueleSjcRcC2JYNA6gzQHAyqIX8x7mqbLPTWLq1OoDMbcdQX0gAIGRBPyF1JEbJ2w4dcL2Jjb/MqLQh8j2odJWSpsDAL+HGgrdH4WIefUutNxJdjFdUY+Y5JztEIAABBIQiDn3xk7Ak6D6c1x4APYdc9YWX9Hac2+bAwD3ABTfRTNzeoc3MfHPzFrM/evcuasKr/GMiB6VWtiAjBCAAARKEvDgv2VL2kzLPjh/+h+ZLN+pesTcEK4i+1ZKmwOAmG6XazLdW39RvUIjUU8I5G8DyAUCAQhAoBICPsf4XBPi3D2vfwsxrMEm5poQcy2qoWmji2hzAOAvUY1u2fgtN47f3OjWmG9h+3XARitP4RCAQKcJRJ13MyYTc01o7Xm3zQGAu6JCj6eYi2xomUXtenkgFoVDPghAoFECnHfn4icAmMuk8jWLRZQQ8xGIiGILmfrjRIUyDsnEGIAhUFgFAQgkIxBx3h3kfN6NqVtrz7tt7gFIdkTjCAIQgAAEek0gZjbA1oIjAGjtrqPiEIAABNpDgJrmR4AAIL99Qo0gAAEIQAAClRMgAKgcMQVAAAIQ6DsB2p8jAQKAHPcKdYIABCAAAQhUTIAAoGLAuIcABCDQdwK0P08CBAB57hdqBQEIQAACEKiUAAFApXhxDgEIQKDvBGh/rgQIAHLdM9QLAhCAAAQgUCEBAoAK4eIaAhCAQN8J0P58CRAA5LtvqBkEIAABCECgMgIEAJWhxTEEIACBvhOg/TkTIADIee9QNwhAAAIQgEBFBAgAKgKLWwhAAAJ9J0D78yZAAJD3/qF2EIAABCAAgUoIEABUghWnEIAABPpOgPbnToAAIPc9RP0gAAEIQAACFRAgAKgAKi4hAAEI9J0A7c+fAAFA/vuIGkIAAhCAAASSEyAASI4UhxCAAAT6ToD2t4EAAUAb9hJ1hAAEIAABCCQmQACQGCjuIAABCPSdAO1vBwECgHbsJ2oJAQhAAAIQSEqAACApTpxBAAIQ6DsB2t8WAgQAbdlT1BMCEIAABCCQkAABQEKYuIIABCDQdwK0vz0ECADas6+oKQQgAAEIQCAZAQKAZChxBAEIQKDvBGh/mwgQALRpb1FXCEAAAhCAQCICBACJQOIGAhCAQN8J0P52ESAAaNf+orYQgAAEIACBJAQIAJJgxAkEIACBvhOg/W0jQADQtj1GfSEAAQhAAAIJCBAAJICICwhAAAJ9J0D720eAAKB9+4waQwACEIAABKIJEABEI8QBBCAAgb4ToP1tJEAA0Ma9Rp0hAAEIQAACkQQIACIBYg4BCECg7wRofzsJEAC0c79RawhAAAIQgEAUAQKAKHwYQwACEOg7AdrfVgIEAG3dc9QbAhCAAAQgEEGAACACHqYQgAAE+k6A9reXAAFAe/cdNYcABCAAAQgEEyAACEaHIQQgAIG+E6D9bSZAANDmvUfdIQABCEAAAoEECAACwWEGAQhAoO8EaH+7CRAAtHv/UXsIQAACEIBAEAECgCBsGEEAAhDoOwHa33YCBABt34PUHwIQgAAEIBBAgAAgABomEIAABPpOgPa3nwABQPv3IS2AAAQgAAEIlCZAAFAaGQYQgAAE+k6A9neBAAFAF/YibYAABCAAAQiUJEAAUBIY2SEAAQj0nQDt7wYBAoBu7EdaAQEIQAACEChFgACgFC4yQwACEOg7AdrfFQIEAF3Zk7QDAhCAAAQgUIIAAUAJWGSFAAQg0HcCtL87BAgAurMvaQkEIAABCECgMAECgMKoyAgBCECg7wRof5cIEAB0aW/SFghAAAIQgEBBAgQABUGRDQIQgEDfCdD+bhEgAOjW/qQ1EIAABCAAgUIECAAKYSITBCAAgb4ToP1dI0AA0LU9SnsgAAEIQAACBQgQABSARBYIQAACfSdA+7tHYHYAsJia+CrpcdK/S+8do+/TtlDZV4bjfBfZ1nT5ReoYkmcjsQmVc2QYUuZ0m43lI1TOluF0X1Utv03lhMonZFhVvcr6/V/VJVQOkGHZ8qrK77qoOkFiBlXVq6xfHxtBjZCRj8my5YXk929MxQWJf9shZU638TkmqHAZ+dw23VdOy74mqYpB4mtRbFuqLP9vatXPpLtKfY1XMl+mBwBra9WvpF+Vbi1dTopAAAIQgEDvCQCgxQSWV923kX5deoF0Lek8mQoAfPE/XWseK0UgAAEIQAACEOgegfXUJF/r11Q6cACwqBa+J+WOXxAQCEAAAhCYSYC/OkXAPQK+5i/qAGAXNe1xUgQCEIAABCAAge4T2EBN3NkBwM5aQCAAAQhAAAJDCLCqowTmBQAbdrRxNAsCEIAABCAAgeEENnQPwArDt7EWAhCAAAT6ToD2d5bAig4APAiwsy2kYRCAAAQgAAEIzCEwbxDgnLWsgAAEIAABCAwGMOgyAfcAdLl9tA0CEIAABCAAgSEECACGQGEVBCAAAQgMBjDoNgECgG7vX1oHAQhAAAIQGEqAAGAoFlZCAAIQ6DsB2t91AgQAXd/DtA8CEIAABCAwhEBsALCIfKKDAQxgwDHAMdCpY2Aw4Lw2GLSCwSD0X2wAEFoudhCAAAQgAAEINEiAAKBB+BQNAQhAIE8C1KoPBAgA+rCXaSMEIAABCEBgFgECgFlA+BMCEIBA3wnQ/n4QIADox36mlRCAAAQgAIEZBBwA3DNjTbk/+JBQOV7khgAEIJA5AarXIgIx1+B7HADcFtHYFSNsMYUABCAAAQhAIJzAyuGmg1sdANwc4WDjCFtMIQABCEAgMwJUp1UENoqo7c0OAK6KcLBLhC2mEIAABCAAAQiEE4i5Bl/lAOCS8LIHO8h2QykCAQhAAAKtJ0ADWkTgSarrS6ShcokDgHNDrWVn+yOUPlSKQAACEIAABCBQPYGVVMThUk8/rSRIzvUF/IQg04VGj9TimdKYZxEyRyAAAQhAoEkClN0KAr7z9zX3EZG1PcEBwMVycrk0RhwEnCUHh0m3k64ijXk9QeYIBCAAAQhAoPcEfC31NXV7kfiu9Axp7MX/UvmY9wjgXi0cIo0VBxM7ycmPpNdK75LaNzoYwAAGHAMcA5kfA5ynMr1m+Vrqa+oPVb8dpb7WKomSb9l6ytFX9cd/pAgEIAABCEAAAt0l4Gv9N9y8qQDgT/rj21IEAhCAAAR6SIAm94aAL/6+5g+mAgC3fH/9928pAgEIQAACEIBA9wjcriZ9QDpPpgcAV2jNgVIEAhCAAAR6RYDG9oTAB9XOK6XzZHoA4BUOAM7zAgoBCEAAAhCAQGcInKOWfER6n8wOAO7QFo/kv0kpAgEIQAACPSBAEztP4B9qoa/tdyq9T2YHAN7gOQH8viHjAUwDhQAEIAABCLSXgK/lvqb/cXYThgUAznOK/vP7hjbUIgIBCEAAAt0kQKs6TMDXcF/LfzmsjaMCAOc9Sv89W8rjAEFAIAABCEAAAi0i4G7/Z6m+vpYrmSvjAgDnPln/PV7qeYeVIBCAAAQg0CUCtKWTBM5XqzaWujdfyXCZFADY6ir9t6V0X6nfIVSCQAACEIAABCCQGQFfo/dWnTaRejyfktFSJACwtd8O2E8L60m/JvVUgkoQCEAAAhBoLwFq3hECviZ7Sv911Z4DpDNG++vvoVI0AJgy9mRBr9Yfa0jfJ50YYSgPAgEIQAACEIBAegKXyaWvxb4mv0bL903yo+WJUjYAmHLoeYTfrz9cqCOON2nZPQOnK/VXi/6pFIEABCAAgYwJULXWEPA11ddWX2N9p/9G1Xwd6ZpSX4t9TdZiOfn/AAAA//8Fd6FfAAAABklEQVQDAAjEEApPZ4ZSAAAAAElFTkSuQmCC" x="0" y="0" width="512" height="512" />
                      </svg>
                    </div>
                    <div>
                      <h2>Bangalore</h2>
                      <p>Financial Cloud Skills in Demand</p>
                    </div>
                  </div>

                  <ul class="trainer-points">
                    <li>
                      <h3>Enterprises in Bangalore implement Oracle Fusion Financials to streamline accounting and financial reporting systems</h3>
                    </li>
                    <li>
                      <h3>Companies recruit professionals capable of managing cloud-based finance and accounting applications</h3>
                    </li>
                    <li>
                      <h3>Learners with Oracle Financials knowledge can pursue opportunities within Bangalore’s global business ecosystem</h3>
                    </li>
                  </ul>

                </div>

                <!-- RIGHT FEATURES LIST -->
                <div class="why-features">

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- Shield SVG -->
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                        <path d="m9 12 2 2 4-4" />
                      </svg>
                    </div>
                    <div>
                      <h3>Business-Oriented Financials Training</h3>
                      <p>Learn how Oracle Financials supports enterprise finance operations.</p>
                    </div>
                  </div>

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- User SVG -->
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                      </svg>
                    </div>
                    <div>
                      <h3>Trainers with Enterprise Experience</h3>
                      <p>Guidance from experts experienced in Oracle Financials implementations.</p>
                    </div>
                  </div>

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- Brain SVG -->
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z" />
                        <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z" />
                      </svg>
                    </div>
                    <div>
                      <h3>Complete Financials Lifecycle Coverage</h3>
                      <p> From journal entries to reporting and period close.</p>
                    </div>
                  </div>

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- Layers SVG -->
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z" />
                        <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65" />
                      </svg>
                    </div>
                    <div>
                      <h3>Modern Oracle Cloud Practices</h3>
                      <p>Training aligned with current finance cloud workflows.</p>
                    </div>
                  </div>

                  <div class="feature-item">
                    <div class="feature-icon">
                      <!-- Award SVG -->
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" />
                        <circle cx="12" cy="8" r="6" />
                      </svg>
                    </div>
                    <div>
                      <h3>Learner-Centric Support</h3>
                      <p>Structured explanations and continuous assistance.</p>
                    </div>
                  </div>

                </div>

              </div>

              <div class="career-location-header">
                <span class="career-label">Career Impact</span>
                <h2 class="career-heading">
                  <span class="gradient-text"> Career Opportunities </span> in Bangalore After Oracle Financials Training
                </h2>
                <p class="about-description"><strong> Learners can explore roles such as: </strong></p>

                <ul class="location-points">
                  <li>
                    <h3>Oracle Financials Functional Consultant</h3>
                  </li>
                  <li>
                    <h3>ERP Finance Implementation Analyst</h3>
                  </li>
                  <li>
                    <h3>Finance Technology Consultant</h3>
                  </li>
                  <li>
                    <h3>Oracle Cloud Financials Support Professional
                    </h3>
                  </li>
                </ul>
                <p>Oracle Fusion Financials skills match Bangalore’s consulting and IT market needs.</p>
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