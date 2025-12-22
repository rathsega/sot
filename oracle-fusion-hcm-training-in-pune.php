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

                                <h4><strong>Overview of Oracle Fusion HCM Training in Pune</strong></h4>
                                <p>Pune has long been recognized as one of India’s top IT and educational hubs, with a rapidly expanding workforce and a booming corporate culture. Managing human resources effectively and efficiently in this fast-paced environment is critical for business success. Oracle Fusion HCM (Human Capital Management) is the leading cloud-based HR solution, offering an integrated approach to managing every aspect of the employee lifecycle, from recruitment and onboarding to payroll, performance management, and beyond.</p>

                                <p>Our Oracle Fusion HCM Training in Pune is designed to help HR professionals, IT consultants, and business leaders understand how Oracle’s cloud-based platform can drive better HR outcomes. Whether you want to streamline operations or adopt data-driven HR strategies, this course will equip you with the skills needed to succeed in Pune’s competitive job market.</p>

                                <h5><strong>Why Choose Oracle Fusion HCM?</strong></h5>
                                <p>Oracle Fusion HCM is a comprehensive, scalable platform that allows businesses to manage global workforces efficiently. With modules designed to enhance everything from talent acquisition to payroll and performance reviews, Oracle Fusion HCM offers the tools necessary to meet the evolving needs of modern organisations. By mastering Oracle Fusion HCM Cloud, professionals can significantly improve how they manage human capital and drive business success.</p>

                                <h5><strong>What You’ll Learn in Our Oracle Fusion HCM Training?</strong></h5>
                                <p>Our Oracle Fusion HCM Training in Pune offers a robust learning experience combining theoretical knowledge and practical applications. The course is structured to give participants a deep understanding of the platform’s capabilities, helping them apply these insights to real-world scenarios.</p>

                                <ol>
                                    <li><strong>Introduction to Oracle Fusion HCM Cloud:</strong>
                                        <ul>
                                            <li>Overview of the cloud-based architecture and core features of Oracle Fusion HCM.</li>
                                            <li>Understanding the key benefits of implementing Oracle Fusion HCM in modern enterprises.</li>
                                            <li>Insights into Oracle’s unified HCM platform and how it supports end-to-end HR operations.</li>
                                        </ul>
                                    </li>
                                    <li><strong>HR Administration and Employee Lifecycle Management:</strong>
                                        <ul>
                                            <li>Managing employee data, promotions, pay raises, and organisational structures.</li>
                                            <li>Efficiently handling the full employee lifecycle, from hiring to retirement.</li>
                                            <li>Configuring legal entities, business units, and job roles to fit organisational needs.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Payroll and Benefits Management:</strong>
                                        <ul>
                                            <li>Streamlining payroll operations with Oracle’s cloud-based payroll solutions.</li>
                                            <li>Setting up and managing employee benefits programs, including insurance and leave policies.</li>
                                            <li>Ensuring compliance with Indian payroll regulations, tax laws, and local benefits requirements.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Talent Acquisition and Development:</strong>
                                        <ul>
                                            <li>Utilising Oracle’s advanced recruitment tools to identify, interview, and onboard candidates.</li>
                                            <li>Enhancing talent management with career development plans and succession planning.</li>
                                            <li>Using tools for performance appraisals and tracking employee progress.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Performance Management and Goal Setting:</strong>
                                        <ul>
                                            <li>Designing performance management systems that help employees grow and succeed.</li>
                                            <li>Setting and monitoring performance goals aligned with company objectives.</li>
                                            <li>Using Oracle Fusion’s tools to improve employee engagement and retention.</li>
                                        </ul>
                                    </li>
                                    <li><strong>HR Analytics and Reporting:</strong>
                                        <ul>
                                            <li>Harnessing Oracle’s advanced analytics to gain insights into workforce performance.</li>
                                            <li>Building custom reports and dashboards to meet your company’s HR reporting needs.</li>
                                            <li>Using data-driven insights for better workforce planning and decision-making.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Employee Self-Service and Mobile HCM:</strong>
                                        <ul>
                                            <li>Enabling employees to access their HR data and manage tasks through self-service portals.</li>
                                            <li>Offering mobile access for HR managers and employees for real-time decision-making.</li>
                                            <li>Improving communication and transparency within the organisation through technology.</li>
                                        </ul>
                                    </li>
                                </ol>

                                <h5><strong>Why is Pune the Perfect Location for Oracle Fusion HCM Training?</strong></h5>
                                <p>Pune is a growing technology, education, and innovation hub, attracting many multinational corporations, startups, and HR-driven industries. With a booming workforce and a strong focus on digital transformation, businesses in Pune are increasingly adopting cloud-based HR solutions like Oracle Fusion HCM to streamline their operations and manage their growing teams efficiently.</p>

                                <p>By enrolling in our Oracle Fusion Cloud HCM Training in Pune, you will gain the expertise needed to handle the complexities of HR and position yourself for success in one of India’s most competitive and dynamic job markets. Whether you are an HR professional seeking to upgrade your skills or an IT expert launching into cloud-based HR solutions, this training program will help you stay ahead of the curve.</p>

                                <h5><strong>Why Choose Our Oracle Fusion HCM Training in Pune?</strong></h5>
                                <p>We stand out for our hands-on approach to Oracle Fusion HCM training, which combines expert instruction with practical, real-world applications. Here’s why our training is the best choice for professionals in Pune:</p>

                                <ul>
                                    <li><strong>Expert Instructors:</strong> Learn from certified professionals with experience in Oracle Fusion HCM implementation and consulting.</li>
                                    <li><strong>Practical Learning Experience:</strong> Our curriculum includes live demos, case studies, and hands-on labs to ensure practical, job-ready skills.</li>
                                    <li><strong>Certification Preparation:</strong> We provide full support to help you prepare for the Oracle Fusion HCM certification exams, adding credibility to your skill set.</li>
                                    <li><strong>Flexible Learning:</strong> Whether you prefer classroom training or online learning, we offer flexible schedules to meet your needs.</li>
                                    <li><strong>Post-Training Support:</strong> After completing the course, you’ll have access to our trainers and additional resources for ongoing support.</li>
                                </ul>

                                <h5><strong>Career Opportunities After Oracle Fusion HCM Training:</strong></h5>
                                <p>Completing our Oracle Fusion HCM Training opens the door to a variety of exciting career opportunities, including:</p>

                                <ul>
                                    <li>Oracle Fusion HCM Consultant</li>
                                    <li>HR Technology Specialist</li>
                                    <li>Payroll and Benefits Manager</li>
                                    <li>HRIS Analyst</li>
                                    <li>ERP Implementation Consultant</li>
                                    <li>Talent Acquisition Manager</li>
                                </ul>

                                <p>As more companies in Pune adopt Oracle Fusion HCM, the demand for skilled professionals continues to grow. With this training, you’ll be equipped to take on leadership roles in HR technology and drive digital transformation in any organisation.</p>

                                <h4><strong>Enroll Today in Oracle Fusion HCM Training in Pune!</strong></h4>
                                <p>Take your HR career to the next level with our Oracle Fusion HCM Training in Pune. Whether you want to enhance your skills, gain certification, or prepare for a new role, our comprehensive training program is the ideal stepping stone. Contact us today to learn more about course schedules, fees, and enrollment options. Transform your HR expertise with Oracle Fusion Cloud technology!</p>

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