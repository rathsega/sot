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

                                <h4><strong>Overview of Oracle Fusion HCM Training in Chennai</strong></h4>
                                <p>In the rapidly evolving landscape of human resource management, staying ahead with the latest technology is key to succeeding in today's dynamic business environment. As organizations in Chennai embrace digital transformation, the demand for cloud-based HR solutions is rising. Oracle Fusion HCM (Human Capital Management) is at the forefront of this shift, providing a comprehensive platform to streamline HR operations, from recruitment to performance management.</p>
                                <p>Our Oracle Fusion HCM Training in Chennai is designed to empower HR professionals, IT consultants, and aspiring ERP specialists to master this powerful tool, helping them drive greater efficiency and value within their organizations.</p>

                                <h5><strong>Why Oracle Fusion HCM is Essential for HR Professionals</strong></h5>
                                <p>Oracle Fusion HCM offers a unified cloud-based platform that simplifies every aspect of human resource management. Whether managing employee data, automating payroll, or analyzing workforce performance, Oracle Fusion HCM ensures smooth, efficient, and compliant HR processes. With features like talent acquisition, employee engagement, and HR analytics, this platform provides everything HR teams need to function at their best.</p>

                                <h5><strong>What You'll Learn in Our Oracle Fusion HCM Training in Chennai</strong></h5>
                                <p>Our course is designed to provide a comprehensive learning experience tailored to meet the specific needs of professionals in Chennai's dynamic business environment. Whether in HR or IT, the training will equip you with practical skills and knowledge to excel.</p>

                                <ol>
                                    <li><strong>Introduction to Oracle Fusion HCM Cloud:</strong>
                                        <ul>
                                            <li>Overview of the cloud architecture and key features of Oracle Fusion HCM.</li>
                                            <li>Benefits of using Oracle Fusion for managing human resources in the modern digital workplace.</li>
                                            <li>Understanding the global HR system and how it applies to local Indian businesses.</li>
                                        </ul>
                                    </li>
                                    <li><strong>HR Administration and Employee Lifecycle Management:</strong>
                                        <ul>
                                            <li>Managing employee records, positions, promotions, and pay raises.</li>
                                            <li>Configuring organizational structures, business units, and legal entities.</li>
                                            <li>Handling onboarding, transfers, and termination processes efficiently.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Payroll and Compensation:</strong>
                                        <ul>
                                            <li>Automating payroll processes to ensure accuracy and compliance with local regulations.</li>
                                            <li>Setting up employee compensation plans, bonuses, and benefits.</li>
                                            <li>Managing payroll and tax deductions specific to the Indian market.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Talent Acquisition and Performance Management:</strong>
                                        <ul>
                                            <li>Using Oracle Fusion's talent acquisition tools to attract, recruit, and hire the best talent.</li>
                                            <li>Implementing goal-setting strategies and tracking employee performance.</li>
                                            <li>Developing and nurturing talent through career development plans and succession planning.</li>
                                        </ul>
                                    </li>
                                    <li><strong>HR Analytics and Reporting:</strong>
                                        <ul>
                                            <li>Utilizing embedded analytics and dashboards to gain insights into workforce performance.</li>
                                            <li>Customizing reports to satisfy demands from a given organization.</li>
                                            <li>Making data-driven decisions with the help of Oracle's powerful analytics tools.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Employee Self-Service and Mobile HCM:</strong>
                                        <ul>
                                            <li>Empowering employees to manage their own HR profiles and payroll information.</li>
                                            <li>Setting up mobile HR applications for real-time access and decision-making.</li>
                                        </ul>
                                    </li>
                                </ol>

                                <h5><strong>Why Chennai is the Ideal Place for Oracle Fusion HCM Training</strong></h5>
                                <p>Chennai, a major hub for IT, manufacturing, and services industries, thrives on innovation and talent. With its expanding business landscape, there is a growing need for professionals who can efficiently manage human resources through advanced cloud-based solutions like Oracle Fusion HCM. From startups to large corporations, businesses in Chennai are rapidly adopting digital solutions to streamline HR processes, making Oracle Fusion HCM expertise highly valuable.</p>
                                <p>Our Oracle Fusion HCM Training in Chennai is tailored to meet the needs of this dynamic market. Whether you are an HR professional seeking to enhance your skills or an IT consultant transitioning into the HR domain, this course will prepare you for success in Chennai's competitive business ecosystem.</p>

                                <h5><strong>Who Should Enroll in Oracle Fusion HCM Training in Chennai?</strong></h5>
                                <p>Our Oracle Fusion Cloud HCM Training in Chennai is suitable for a wide range of professionals, including:</p>
                                <ul>
                                    <li><strong>HR Managers and Executives:</strong> Looking to automate and optimize their HR processes with the latest technology.</li>
                                    <li><strong>ERP Consultants:</strong> Seeking to expand their service portfolio by gaining expertise in Oracle Fusion HCM.</li>
                                    <li><strong>IT Professionals:</strong> Transitioning into the cloud-based HR solutions space to stay competitive.</li>
                                    <li><strong>Business Analysts:</strong> Interested in understanding HR operations and how to drive efficiencies with technology.</li>
                                    <li><strong>Project Managers:</strong> Working on Oracle Fusion HCM implementations or HR technology projects.</li>
                                </ul>

                                <h5><strong>Why Choose Our Oracle Fusion Cloud HCM Training in Chennai?</strong></h5>
                                <p>We pride ourselves on offering top-notch Oracle Fusion HCM training, combining in-depth theoretical learning and hands-on practical experience. Here's what sets our course apart:</p>
                                <ul>
                                    <li><strong>Experienced Trainers:</strong> Learn from industry experts with real-world experience in Oracle Fusion HCM implementations and consulting.</li>
                                    <li><strong>Practical Learning:</strong> Our training program includes hands-on labs, case studies, and real-world projects to ensure you gain practical skills.</li>
                                    <li><strong>Certification Preparation:</strong> We provide full support to help you prepare for Oracle Fusion HCM certification exams, boosting your career credentials.</li>
                                    <li><strong>Flexible Learning Options:</strong> Choose between classroom training or online sessions to fit your schedule and learning preferences.</li>
                                    <li><strong>Post-Training Support:</strong> We offer continuous support even after you've completed the course, ensuring you have the resources needed to succeed.</li>
                                </ul>

                                <h5><strong>Career Opportunities After Completing Oracle Fusion HCM Training in Chennai</strong></h5>
                                <p>After completing the Oracle Fusion Cloud HCM Training in Chennai, you'll be prepared to take on various HR and ERP roles, such as:</p>
                                <ul>
                                    <li>Oracle Fusion HCM Consultant</li>
                                    <li>HR Systems Analyst</li>
                                    <li>Talent Acquisition Manager</li>
                                    <li>Payroll Manager</li>
                                    <li>HRIS Specialist</li>
                                    <li>ERP Implementation Specialist</li>
                                </ul>
                                <p>In Chennai's rapidly growing job market, professionals with Oracle Fusion HCM expertise are in high demand across industries like IT, manufacturing, finance, healthcare, and services. With this certification, you will gain a competitive advantage and improved employment possibilities.</p>

                                <h5><strong>Enroll in Oracle Fusion HCM Training in Chennai Today!</strong></h5>
                                <p>Take advantage of the opportunity to boost your career with Oracle Fusion Cloud HCM Training in Chennai. Gain the skills and certification you need to excel in HR technology and become an in-demand professional in Chennai's thriving business landscape.</p>
                                <p>Contact us today to learn more about course schedules, fees, and enrollment options. Take your career to the next level with our expert-led Oracle Fusion HCM training program!</p>

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