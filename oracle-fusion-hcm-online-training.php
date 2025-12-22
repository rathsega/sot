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
                            <h2 class="title">Master Oracle Fusion HCM Online Training with Redwood AI Features</h2>
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
                                    <li>
                                        <a href="#faq">Faq</a>
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
                                <h6><strong>Master Oracle Fusion HCM Online Training and Understand Why Oracle Fusion HCM is Important</strong></h6>
                                <p>Master Oracle Fusion HCM online training to gain expertise in Oracle's comprehensive cloud-based Human Capital Management system. Oracle Fusion HCM integrates core HR functions such as recruitment, payroll, performance management, and talent development into one seamless platform. This training empowers professionals to optimize employee lifecycle management, improve decision-making with real-time analytics, and enhance workforce productivity. Oracle Fusion HCM is important because it streamlines HR processes, boosts employee engagement, ensures compliance with global standards, and facilitates strategic talent management for business growth. Led by experienced trainers, this course is ideal for advancing your HR career and mastering digital transformation in human resources.</p>
                                <h4><strong>What is Oracle Fusion HCM?</strong></h4>
                                <p>Oracle Fusion Human Capital Management (HCM) is an integrated suite of cloud-based applications designed to manage and optimize an organization's human resources functions. As part of the Oracle Fusion Applications suite, it combines the best features from Oracle's various HR solutions into a unified platform, offering a comprehensive approach to managing a global workforce.</p>

                                <h5><strong>Key Features of Oracle Fusion HCM</strong></h5>
                                <ol>
                                    <li><strong>Comprehensive HR Management:</strong>
                                        <ul>
                                            <li><strong>Core HR:</strong> Manage employee data, organizational structures, and workforce administration.</li>
                                            <li><strong>Workforce Directory:</strong> A comprehensive directory with rich employee profiles.</li>
                                            <li><strong>Global HR:</strong> Support for complex global HR requirements, including multiple languages, currencies, and regulatory compliance.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Talent Management:</strong>
                                        <ul>
                                            <li><strong>Recruiting:</strong> Streamlined processes for attracting and hiring top talent.</li>
                                            <li><strong>Onboarding:</strong> Efficient onboarding processes to integrate new hires quickly.</li>
                                            <li><strong>Performance Management:</strong> Tools for managing employee performance and development.</li>
                                            <li><strong>Learning and Development:</strong> Programs and courses to enhance employee skills and knowledge.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Payroll and Compensation:</strong>
                                        <ul>
                                            <li><strong>Payroll Processing:</strong> Efficient and accurate payroll processing.</li>
                                            <li><strong>Compensation Management:</strong> Comprehensive tools for managing employee compensation and rewards.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Benefits Administration:</strong>
                                        <ul>
                                            <li><strong>Benefits Enrollment:</strong> Self-service options for employees to enroll in benefits.</li>
                                            <li><strong>Benefits Management:</strong> Tools for managing and administering employee benefits programs.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Workforce Analytics:</strong>
                                        <ul>
                                            <li><strong>Reporting:</strong> Robust reporting capabilities to analyze HR data.</li>
                                            <li><strong>Analytics:</strong> Advanced analytics to gain insights into workforce trends and metrics.</li>
                                        </ul>
                                    </li>
                                    <li><strong>User Experience:</strong>
                                        <ul>
                                            <li><strong>Intuitive Interface:</strong> Easy-to-use interface designed for HR professionals and employees.</li>
                                            <li><strong>Mobile Access:</strong> Access HR functions on the go with mobile compatibility.</li>
                                        </ul>
                                    </li>
                                </ol>

                                <h5><strong>Benefits of Oracle Fusion HCM</strong></h5>
                                <ul>
                                    <li><strong>Unified Platform:</strong> A single system that integrates all HR functions, reducing complexity and improving efficiency.</li>
                                    <li><strong>Scalability:</strong> Scalability to meet the needs of organizations of all sizes, from small businesses to large enterprises.</li>
                                    <li><strong>Global Reach:</strong> Support for global operations with multi-currency, multi-language, and multi-country capabilities.</li>
                                    <li><strong>Compliance:</strong> Tools to help organizations stay compliant with local, regional, and global regulations.</li>
                                    <li><strong>Enhanced Decision-Making:</strong> Advanced analytics and reporting provide valuable insights for strategic HR decision-making.</li>
                                    <li><strong>Employee Engagement:</strong> Self-service features and a user-friendly interface enhance employee engagement and satisfaction.</li>
                                </ul>
                                <h3><strong>Why Should You Learn Oracle Fusion HCM Course from Soft Online Training?</strong></h3>
                                <p>Oracle Fusion Human Capital Management (HCM) is a leading cloud-based HR solution that helps organizations manage their human resources more effectively. Learning how to use Oracle Fusion HCM can significantly enhance your career prospects in HR and IT. Softonlinetraining offers a comprehensive oracle fusion hcm course designed to equip you with the necessary skills and knowledge to excel in this field. Enrolling in an oracle fusion hcm course provides hands-on training in core HR, payroll, talent management, and real-world HR projects to boost your professional growth.</p>

                                <ol>
                                    <li><strong>Expert Instructors</strong>
                                        <ul>
                                            <li><strong>Industry Experience:</strong> Our trainers are seasoned professionals with extensive experience in implementing and managing Oracle Fusion HCM in various organizations.</li>
                                            <li><strong>Certified Experts:</strong> All instructors are certified by Oracle, ensuring that they provide the most accurate and up-to-date information.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Comprehensive Curriculum</strong>
                                        <ul>
                                            <li><strong>In-Depth Coverage:</strong> The training program covers all aspects of Oracle Fusion HCM, including Core HR, Payroll, Benefits, Talent Management, and Workforce Analytics.</li>
                                            <li><strong>Hands-On Training:</strong> Practical exercises and real-world scenarios are incorporated to ensure you gain hands-on experience.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Flexible Learning Options</strong>
                                        <ul>
                                            <li><strong>Online Classes:</strong> Attend live online classes from the comfort of your home or office.</li>
                                            <li><strong>Self-Paced Learning:</strong> Access pre-recorded sessions and course materials at your convenience, allowing you to learn at your own pace.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Interactive Learning Experience</strong>
                                        <ul>
                                            <li><strong>Live Projects:</strong> Work on live projects to apply your learning in real-world situations.</li>
                                            <li><strong>Q&amp;A Sessions:</strong> Regular Q&amp;A sessions with instructors to clarify doubts and gain deeper insights.</li>
                                            <li><strong>Discussion Forums:</strong> Participate in discussion forums to interact with fellow learners and share knowledge.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Support and Resources</strong>
                                        <ul>
                                            <li><strong>24/7 Support:</strong> Our support team is available around the clock to assist you with any technical or course-related issues.</li>
                                            <li><strong>Extensive Resources:</strong> Access a wealth of resources, including eBooks, video tutorials, and case studies.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Certification Assistance</strong>
                                        <ul>
                                            <li><strong>Exam Preparation:</strong> Comprehensive preparation for Oracle Fusion HCM certification exams.</li>
                                            <li><strong>Practice Tests:</strong> Multiple practice tests will help you assess your knowledge and readiness for the certification exams.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Career Support</strong>
                                        <ul>
                                            <li><strong>Resume Building:</strong> Assistance with creating a professional resume that highlights your new skills and expertise.</li>
                                            <li><strong>Job Placement:</strong> Our job placement assistance program connects you with potential employers looking for Oracle Fusion HCM experts.</li>
                                            <li><strong>Interview Preparation:</strong> Mock interviews and tips to help you succeed in job interviews.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Affordable Pricing</strong>
                                        <ul>
                                            <li><strong>Competitive Fees:</strong> Our training programs are competitively priced to offer the best value for your investment.</li>
                                            <li><strong>Payment Plans:</strong> Flexible payment plans and discounts are available to make the training accessible to everyone.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <h5><strong>Benefits of Oracle Fusion HCM Training Online</strong></h5>
                                <p>Oracle Fusion HCM training online enables learners to master advanced cloud-based HR skills from anywhere, helping boost career growth, efficiency, and industry relevance. An oracle fusion hcm course offers hands-on experience in optimizing HR processes, improving analytics, and ensuring compliance—all in a flexible, remote learning format. Completing oracle fusion hcm training online significantly enhances salary prospects, job security, and opens up global career opportunities in HR and IT.</p>
                                <h5><strong>Enhanced Career Growth</strong></h5>
                                <p>Oracle fusion hcm training opens the door to high-demand HR and IT roles, allowing professionals to earn higher salaries and unlock global career potential. Completing an oracle fusion hcm course demonstrates advanced skills to employers and enhances job security in competitive industries. By choosing oracle fusion hcm online training, candidates can continually upskill and future-proof their careers as digital HR leaders.</p>
                                <h5><strong>Hands-On Practical Experience</strong></h5>
                                <p>Oracle fusion hcm training provides real-world projects and interactive labs, ensuring strong practical knowledge for every learner. An oracle fusion hcm course covers the full HR lifecycle, teaching how to implement cloud processes and manage workforce effectively. Through oracle fusion hcm online training, students apply concepts directly, gaining confidence and expertise for organizational impact.</p>
                                <h5><strong>Flexibility and Remote Access</strong></h5>
                                <p>With oracle fusion hcm online training, professionals enjoy flexible schedules and remote learning from any location, fitting education around work and life. Oracle fusion hcm course platforms offer self-paced options and one-to-one sessions to match different learning styles. This flexibility makes oracle fusion hcm training online accessible for anyone seeking to grow without interrupting their career</p>
                                <h5><strong>Real-Time Analytics and Reporting</strong></h5>
                                <p>Oracle fusion hcm training gives participants hands-on experience in dashboards, analytics, and strategic HR reporting for data-driven decisions. The oracle fusion hcm course teaches how to generate actionable insights for workforce planning, performance tracking, and payroll management. Learners of oracle fusion hcm training online master advanced analytics tools to optimize processes and improve efficiency​</p>
                                <h5><strong>Better Compliance and Risk Management</strong></h5>
                                <p>Mastering compliance modules is a core part of oracle fusion hcm training, helping professionals reduce errors and meet global regulations. An oracle fusion hcm course covers automated compliance tracking, legal frameworks, and risk assessment for HR teams. Oracle fusion hcm training online ensures expertise in minimizing legal risks and maintaining organizational integrity in every region.</p>
                                <h5><strong>Global Job Opportunities</strong></h5>
                                <p>Professionals who complete oracle fusion hcm training online qualify for HR, consulting, and IT roles in multinational companies worldwide. Oracle fusion hcm course certification is recognized across industries, boosting credentials and employability in global markets. The practical skills from oracle fusion hcm training online open pathways to lucrative job offers and career advancement internationally.</p>
                                <!-- Overview End -->

                                <h5><strong>Key Features of Oracle Fusion HCM Course:</strong></h5>
                                <p>Oracle Fusion HCM courses cover core HR, payroll, and talent management with real-world scenarios and hands-on labs. Learners gain practical skills in workflow, approvals, analytics, and global compliance essential for HR transformation.</p>
                                <ol>
                                    <li><strong>Core HR and Payroll Processes</strong>: Oracle Fusion HCM covers essential HR and payroll processes, enabling efficient employee data and payroll management across global organizations.</li>
                                    <li><strong>Talent Management and Development</strong>: Learn to handle talent acquisition, performance tracking, and succession planning for driving workforce growth and retention.</li>
                                    <li><strong>Workflow, Approvals, and Analytics</strong>: Gain practical skills in managing workflows, approvals, and real-time analytics to enhance HR decision-making and operational efficiency.</li>
                                    <li><strong>Global Compliance and Payroll Integration</strong>: Oracle Fusion HCM ensures adherence to global regulatory requirements and seamless payroll integration for accurate processing.</li>
                                    <li><strong>Hands-On Labs and Real-World Scenarios</strong>: The course offers practical exposure through hands-on labs and real-life scenarios to build job-ready skills for HR transformation.</li>
                                </ol>
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

                        <!-- Start Faq Area  -->
                        <?php include_once "faq.php"; ?>


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