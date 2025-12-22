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

                                <h4><strong>Overview of Oracle Fusion HCM Training in Bangalore</strong></h4>
                                <p>Bangalore, one of the fastest-growing tech hubs in the world, is home to innovative companies and a successful community of IT and HR professionals. Staying ahead of the curve with cutting-edge technology is essential in this highly competitive environment. Our Oracle Fusion HCM Training in Bangalore is designed to help HR professionals and IT consultants develop the skills to effectively manage modern human capital operations using Oracle's cloud-based Human Capital Management (HCM) platform.</p>
                                <p>Whether you're a seasoned HR expert or a tech professional looking to break into the HR domain, mastering Oracle Fusion HCM is key to enhancing your career in Bangalore's bustling business landscape.</p>

                                <h5><strong>Why Oracle Fusion HCM?</strong></h5>
                                <p>Oracle Fusion HCM is a comprehensive cloud solution designed to streamline every aspect of HR management, from recruitment and payroll to performance management and workforce analytics. The platform provides the agility, flexibility, and innovation needed to keep up with the evolving demands of a modern workforce.</p>

                                <h5><strong>What Our Oracle Fusion Cloud HCM Training in Bangalore Covers?</strong></h5>
                                <p>This specialized training program in Bangalore is carefully crafted to provide a hands-on learning experience that will help you understand the complexities of Oracle Fusion HCM. The course covers key areas such as:</p>
                                <ol>
                                    <li><strong>Introduction to Oracle Fusion HCM Cloud:</strong>
                                        <ul>
                                            <li>Overview of cloud architecture and Oracle Fusion HCM's core functionalities.</li>
                                            <li>Understanding global HR management and how it applies to the Indian market.</li>
                                            <li>Insights into Oracle's unified HCM platform for seamless integration across all HR functions.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Workforce Management:</strong>
                                        <ul>
                                            <li>Managing employee lifecycle, from hire to retire, including transfers, promotions, and exits.</li>
                                            <li>Utilizing Oracle's tools for scheduling, time management, and workforce planning.</li>
                                            <li>Configuring organizational structures, job roles, and legal entities to reflect real-world setups.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Payroll and Benefits:</strong>
                                        <ul>
                                            <li>Streamlining payroll processes with Oracle's integrated system, reducing errors and compliance risks.</li>
                                            <li>Managing compensation plans, bonuses, and employee benefits.</li>
                                            <li>Setting up payroll for the Indian market, focusing on compliance and tax regulations.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Performance and Goal Setting:</strong>
                                        <ul>
                                            <li>Establishing performance management processes that align with business goals.</li>
                                            <li>Using Oracle's tools to track employee performance, set objectives, and drive career development.</li>
                                            <li>Creating succession plans to ensure business continuity.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Employee Self-Service and Mobile HCM:</strong>
                                        <ul>
                                            <li>Setting up self-service portals for employees to manage their HR profiles, benefits, and payroll.</li>
                                            <li>Integrating mobile HCM for on-the-go HR management and real-time employee engagement.</li>
                                        </ul>
                                    </li>
                                    <li><strong>HR Analytics & Reporting:</strong>
                                        <ul>
                                            <li>Utilizing Oracle's advanced analytics to gain actionable insights into workforce performance.</li>
                                            <li>Customizing reports and dashboards to meet specific organizational needs.</li>
                                            <li>Forecasting trends and making data-backed strategic HR decisions.</li>
                                        </ul>
                                    </li>
                                </ol>

                                <h5><strong>Why is Bangalore Ideal for Oracle Fusion HCM Training?</strong></h5>
                                <p>Bangalore, often called the Silicon Valley of India, is renowned for its tech innovation and dynamic business environment. It is home to leading global enterprises, startups, and unicorns, all requiring advanced HR solutions to manage their growing workforce. As more companies migrate to cloud-based systems, there's a rising demand for experts proficient in platforms like Oracle Fusion HCM.</p>
                                <p>Enrolling in Oracle Fusion HCM Training in Bangalore will give you a distinct advantage in this competitive job market. The training equips you with the knowledge to tackle real-world HR challenges in Bangalore's fast-paced, tech-driven economy.</p>

                                <h5><strong>Who Should Enroll in Our Oracle Fusion HCM Training in Bangalore?</strong></h5>
                                <p>Our Oracle Fusion Cloud HCM Training in Bangalore is suitable for a variety of professionals, including:</p>
                                <ul>
                                    <li><strong>HR Professionals:</strong> Looking to upgrade their skills and master a leading HR cloud platform.</li>
                                    <li><strong>ERP Consultants:</strong> Seeking to specialize in Oracle Fusion HCM to broaden their service offerings.</li>
                                    <li><strong>Business Analysts:</strong> Wanting to enhance their knowledge of HR operations and technology.</li>
                                    <li><strong>IT and System Administrators:</strong> Transitioning into cloud-based HR solutions to stay competitive.</li>
                                    <li><strong>HR Managers:</strong> Focused on improving workforce management efficiency and talent development.</li>
                                </ul>

                                <h5><strong>Why Choose Our Oracle Fusion Cloud HCM Training in Bangalore?</strong></h5>
                                <p>We are committed to delivering world-class training that covers theoretical knowledge and gives you hands-on experience through real-life case studies and scenarios. Here's what sets our course apart:</p>
                                <ol>
                                    <li><strong>Industry Experts as Trainers:</strong> Our instructors bring years of real-world experience in Oracle Fusion HCM implementations, helping you understand the software and its practical applications in Bangalore's business context.</li>
                                    <li><strong>Practical, Job-Ready Skills:</strong> We ensure that you can apply your knowledge directly in the workplace through workshops, hands-on labs, and real-world projects.</li>
                                    <li><strong>Certification Support:</strong> We help you prepare for Oracle Fusion HCM certification exams, boosting your credentials in the job market.</li>
                                    <li><strong>Flexible Learning Modes:</strong> We offer classroom and online training options, allowing you to learn independently without disrupting your current job or schedule.</li>
                                    <li><strong>Post-Training Support:</strong> Access to our trainers and resources even after completing the course, so you're never alone in your journey toward expertise.</li>
                                </ol>

                                <h5><strong>Career Opportunities After Oracle Fusion HCM Training in Bangalore</strong></h5>
                                <p>Upon completing the Oracle Fusion Cloud HCM Training in Bangalore, you will be well-positioned to take on roles such as:</p>
                                <ul>
                                    <li>Oracle Fusion HCM Consultant</li>
                                    <li>HR Technology Specialist</li>
                                    <li>Talent Acquisition Manager</li>
                                    <li>HRIS Analyst</li>
                                    <li>Payroll and Benefits Manager</li>
                                    <li>ERP Implementation Specialist</li>
                                </ul>
                                <p>The demand for Oracle Fusion HCM professionals in Bangalore continues to rise as businesses move towards cloud-based HR solutions. Whether you aim to work for a multinational corporation or a rapidly growing startup, Oracle Fusion HCM certification will open doors to exciting career opportunities.</p>

                                <h5><strong>Enroll in Oracle Fusion HCM Training in Bangalore Today!</strong></h5>
                                <p>Take the next step in your career by joining our Oracle Fusion HCM Training in Bangalore. Gain the skills needed to become an expert in cloud-based HR management and stand out in Bangalore's competitive job market. With flexible schedules, expert trainers, and hands-on learning, this course is your gateway to success in Oracle Fusion HCM.</p>
                                <p>Contact us today for more information on our course schedules, fees, and enrollment process.</p>

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