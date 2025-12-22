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
                            <h2 class="title"><?php echo $course_details[$current_slug]['title'] ?></h2>
                            <p class="description"><?php echo $short_descriptions[$current_slug]; ?> </p>

                            <div class="d-flex align-items-center flex-wrap rbt-course-details-feature">

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
                        <div class="rbt-course-feature-box overview-wrapper rbt-border-with-box mt--30 has-show-more" id="overview">
                            <div class="rbt-course-feature-inner has-show-more-inner-content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">About
                                        <?php echo $course_details[$current_slug]['title'] ?></h4>
                                </div>
                                <!-- Overview Start -->

                                <h4><strong>Overview of Oracle Fusion HCM Training in Hyderabad</strong></h4>
                                <p>In today's fast-paced business world, Human Capital Management (HCM) is crucial for every organization aiming for operational excellence and employee satisfaction. As companies in Hyderabad increasingly adopt cloud technologies, Oracle Fusion HCM has become the leading platform for managing human resources more efficiently. Our Oracle Fusion HCM Training in Hyderabad is designed to equip HR professionals, IT experts, and aspiring ERP consultants with the skills to manage core HR processes, recruitment, payroll, and more, all powered by Oracle's cutting-edge cloud technology.</p>

                                <h5><strong>Why Choose Oracle Fusion HCM?</strong></h5>
                                <p>Oracle Fusion Human Capital Management (HCM) is a complete suite of tools that ensures seamless management of an organization's most valuable asset—its people. This cloud-based solution offers features for core HR, workforce management, payroll, talent acquisition, and analytics, ensuring that HR professionals can maximize their strategic contribution. The flexibility and scalability of Oracle Fusion HCM make it a top choice for startups and large enterprises in Hyderabad and beyond.</p>

                                <h5><strong>What You Will Learn in Our Oracle Fusion Cloud HCM Training in Hyderabad?</strong></h5>
                                <p>Our comprehensive course is tailored for individuals seeking practical knowledge and hands-on experience in Oracle Fusion HCM. By the end of the training, you'll be proficient in the following areas:</p>
                                <ol>
                                    <li><strong>Introduction to Oracle Fusion HCM Cloud:</strong>
                                        <ul>
                                            <li>Overview of Oracle Fusion HCM architecture</li>
                                            <li>Key features and benefits of the cloud-based HCM solution</li>
                                            <li>Understanding global workforce management and core HR functions</li>
                                        </ul>
                                    </li>
                                    <li><strong>Workforce Lifecycle Management:</strong>
                                        <ul>
                                            <li>Managing employee data, position hierarchies, and organizational structures</li>
                                            <li>Utilizing self-service HR modules for employees and managers</li>
                                            <li>Onboarding processes, recruitment, and termination</li>
                                        </ul>
                                    </li>
                                    <li><strong>Global Human Resources:</strong>
                                        <ul>
                                            <li>Core HR setup and configuration</li>
                                            <li>Defining business units, legal entities, and locations</li>
                                            <li>Managing employee transfers, promotions, and pay raises</li>
                                        </ul>
                                    </li>
                                    <li><strong>Payroll and Compensation:</strong>
                                        <ul>
                                            <li>Automating payroll processes and integrating with finance</li>
                                            <li>Managing benefits, deductions, and employee compensation plans</li>
                                            <li>Ensuring compliance with legal and tax requirements</li>
                                        </ul>
                                    </li>
                                    <li><strong>Talent Management:</strong>
                                        <ul>
                                            <li>Developing talent acquisition strategies</li>
                                            <li>Setting up goals, performance reviews, and career development plans</li>
                                            <li>Building succession plans and identifying key talent</li>
                                        </ul>
                                    </li>
                                    <li><strong>Advanced Reporting &amp; Analytics:</strong>
                                        <ul>
                                            <li>Leveraging embedded analytics and dashboards</li>
                                            <li>Generating custom reports to meet specific business needs</li>
                                            <li>Using data visualization tools for better decision-making</li>
                                        </ul>
                                    </li>
                                </ol>

                                <h5><strong>Why is Hyderabad the Perfect Place to Learn Oracle Fusion HCM?</strong></h5>
                                <p>Hyderabad, known as "Cyberabad," has grown into one of India's premier tech hubs, with a successful IT ecosystem. With top global companies setting up their operations in Hyderabad, the demand for skilled professionals in technologies like Oracle Fusion HCM is on the rise.</p>

                                <p>Whether you're an HR professional looking to upgrade your skills, an ERP consultant aiming for career advancement, or an IT specialist transitioning into cloud-based HR solutions, our Oracle Fusion Cloud HCM Training in Hyderabad will prepare you to meet these demands.</p>

                                <p>Hyderabad's dynamic business environment offers abundant career opportunities for Oracle Fusion HCM-certified professionals. Whether it's working in a large multinational corporation or an emerging startup, your expertise will be in high demand.</p>

                                <h5><strong>Who Should Enroll in Oracle Fusion HCM Training?</strong></h5>
                                <p>Our Oracle Fusion HCM Training in Hyderabad is designed for a broad range of professionals, including:</p>
                                <ul>
                                    <li><strong>HR Professionals:</strong> Looking to enhance their knowledge of modern HCM tools and technologies</li>
                                    <li><strong>ERP Consultants:</strong> Aiming to expand their portfolio with expertise in Oracle Fusion HCM Cloud</li>
                                    <li><strong>Business Analysts:</strong> Seeking to understand HR processes from a strategic and technological perspective</li>
                                    <li><strong>IT Professionals:</strong> Looking to transition into cloud-based HR systems or ERP technologies</li>
                                    <li><strong>Project Managers:</strong> Involved in HR implementations who want a deeper understanding of Oracle Fusion HCM</li>
                                </ul>

                                <h5><strong>Why Choose Our Oracle Fusion Cloud HCM Training?</strong></h5>
                                <p>At our training centre in Hyderabad, we provide:</p>
                                <ul>
                                    <li><strong>Expert Trainers:</strong> Learn from seasoned professionals with real-world experience implementing Oracle Fusion HCM across various industries.</li>
                                    <li><strong>Hands-on Learning:</strong> Our course emphasises practical exercises and real-time scenarios, ensuring you can apply your knowledge immediately in your role.</li>
                                    <li><strong>Certification Assistance:</strong> Prepare for Oracle Fusion HCM certification exams with our in-depth training materials and mock tests.</li>
                                    <li><strong>Flexible Learning Options:</strong> Whether you prefer classroom learning or online sessions, we provide flexible schedules to accommodate your busy lifestyle.</li>
                                </ul>

                                <h5><strong>Career Opportunities After Completing Oracle Fusion HCM Training</strong></h5>
                                <p>After completing the Oracle Fusion HCM Training in Hyderabad, you'll be prepared for various career paths, including:</p>
                                <ul>
                                    <li>Oracle Fusion HCM Consultant</li>
                                    <li>HR Systems Analyst</li>
                                    <li>ERP Specialist</li>
                                    <li>Talent Acquisition Manager</li>
                                    <li>Payroll Manager</li>
                                    <li>HRIS Analyst</li>
                                </ul>

                                <p>Oracle Fusion HCM professionals are in high demand across industries, especially in technology, finance, healthcare, and manufacturing. Certified experts often see a significant increase in earning potential and job prospects.</p>

                                <h5><strong>Enroll in Oracle Fusion HCM Training in Hyderabad Today!</strong></h5>
                                <p>Take advantage of the opportunity to advance your career with Oracle Fusion Cloud HCM Training in Hyderabad. Whether you want to enhance your current role or pursue new job opportunities, our course will equip you with the skills and credentials needed to succeed in the competitive HR and ERP landscape.</p>

                                <p><strong>Contact us today</strong> to learn more about the course schedule, fees, and enrollment process. With our assistance, you can take the next step in your career!</p>

                                <!-- Overview End -->
                            </div>
                            <div class="rbt-show-more-btn">Show More</div>
                        </div>
                        <!-- End Course Feature Box  -->

                        <!-- Start Course Content  -->
                        <?php require_once "curriculum.php"; ?>

                        <!-- End Course Content  -->

                        <!-- Start Course Feature Box  -->
                        <div class="rbt-course-feature-box rbt-border-with-box details-wrapper mt--30" id="details">
                            <div class="row g-5">
                                <!-- Start Feture Box  -->
                                <div class="col-lg-6">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3 mb--20">Requirements</h4>
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
                                        <h4 class="rbt-title-style-3 mb--20">What Will You Learn</h4>
                                    </div>
                                    <ul class="rbt-list-style-1">
                                        <?php foreach ($learnings[$current_slug] as $learn) : ?>
                                            <li><i class="feather-check"></i><?php echo $learn; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- End Feture Box  -->
                            </div>
                        </div>
                        <!-- End Course Feature Box  -->

                        <!-- Start Intructor Area  -->

                        <!-- End Intructor Area  -->

                        <!-- Start Edu Review List  -->
                        <?php include_once "ratings.php"; ?>
                        <!-- End Edu Review List  -->

                        <?php include_once "reviews.php"; ?>



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