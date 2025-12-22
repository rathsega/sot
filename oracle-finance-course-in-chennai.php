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
                                <h4><strong>Overview of Oracle Fusion Financials Training in Chennai</strong></h4>

                                <p>Managing your company's finances efficiently and accurately is crucial for success in the fast-paced financial landscape. Oracle Fusion Financials, a key part of the Oracle Fusion Cloud suite, empowers businesses to streamline their financial processes, improve reporting accuracy, and ensure compliance with global financial standards. Suppose you're looking to advance your career in finance or enterprise resource planning (ERP). In that case, our Oracle Fusion Financials Training in Chennai provides a comprehensive and practical approach to mastering this cutting-edge financial management solution.</p>
                                <p>Chennai, a vibrant metropolitan city known for its robust IT and business landscape, is growing in demand for professionals skilled in cloud-based financial management solutions like Oracle Fusion Financials. With our expertly designed training program, you will gain the skills to thrive in this competitive market and unlock new career opportunities in Chennai's thriving financial and IT sectors.</p>
                                <h5><strong>Why Opt for Oracle Fusion Financials Training in Chennai?</strong></h5>

                                <ul>
                                    <li><strong>Designed for Chennai's Evolving Job Market</strong>: Chennai is home to some of the largest IT companies, financial institutions, and manufacturing giants. Businesses here are increasingly adopting cloud-based ERP solutions to streamline their financial processes, and Oracle Fusion Financials is at the forefront of this transition. Our Oracle Fusion Financials Training in Chennai is tailored to meet the specific demands of this dynamic market, helping you secure roles in leading organizations that rely on cloud-based financial management systems.
                                    </li>
                                </ul>
                                <ul>
                                    <li><strong>Led by Industry Experts</strong>: Our course is delivered by seasoned professionals with experience working with Oracle Fusion Financials in real-world business environments. Their insights will help you understand Oracle Fusion Cloud Financials' technical and functional aspects, ensuring you can apply what you learn directly to your work environment.
                                    </li>
                                </ul>
                                <ul>
                                    <li><strong>Flexible Learning Options</strong>: We know that working professionals and students need flexibility. That's why our Oracle Fusion Cloud Financials Training in Chennai offers online and classroom-based sessions. Whether you prefer the convenience of learning from home or want the structure of attending live classes, we have an option that suits your needs.
                                    </li>
                                </ul>
                                <ul>
                                    <li><strong>Hands-On, Practical Learning</strong>: Our training program focuses heavily on practical, hands-on learning. You'll work on real-time projects and case studies that simulate business challenges, helping you understand and apply the concepts in real-world scenarios. This practical exposure is vital in gaining confidence to implement Oracle Fusion Financials in your workplace.
                                    </li>
                                </ul>
                                <ul>
                                    <li><strong>Certification and Career Support</strong>: Preparing for an Oracle certification can be daunting, but we provide full support to guide you through the process. Our training program includes dedicated certification preparation, giving you the knowledge and confidence to pass the Oracle Fusion Financials certification exams. Additionally, we offer career counselling and job placement assistance to help you land your dream job in Chennai's competitive financial sector.
                                    </li>
                                </ul>
                                <h5><strong>Key Features of Our Oracle Fusion Financials Training</strong></h5>

                                <ul>
                                    <li><strong>Comprehensive Curriculum</strong>: Our training covers the entire Oracle Fusion Financials suite, including core modules like General Ledger, Accounts Payable, Accounts Receivable, Fixed Assets, Cash Management, and Financial Reporting. Whether you are new to financial management or an experienced professional, our curriculum provides in-depth knowledge to help you succeed.</li>
                                    <li><strong>Live Instructor-Led Sessions</strong>: Our live sessions offer an interactive learning environment where you can engage with expert trainers, ask questions, and receive personalized guidance. These sessions ensure that complex topics are explained in a way that is easy to understand and apply.</li>
                                    <li><strong>Access to Learning Resources</strong>: You will have access to our online learning portal, where you can review recorded sessions, download additional study materials, and practice with Oracle Fusion Financials labs. This flexibility allows you to learn quickly, ensuring thorough preparation.</li>
                                    <li><strong>Real-World Projects and Case Studies</strong>: We believe in learning by doing. Our practical assignments, case studies, and real-world projects provide hands-on experience, helping you apply theoretical concepts to actual financial processes.</li>
                                    <li><strong>Certification Guidance</strong>: We provide dedicated support to help you prepare for Oracle Fusion Financials certification exams. Our study materials, mock tests, and expert coaching ensure you are well-prepared to achieve Oracle certification and gain global recognition for your expertise.</li>
                                    <li><strong>Ongoing Support</strong>: Even after you complete the course, we continue to offer post-training support to ensure you can effectively apply your skills. We also provide job placement assistance and career guidance to help you transition smoothly into new opportunities in Chennai's growing financial and IT sectors.</li>
                                </ul>
                                <h5><strong>Who Should Enroll in Oracle Fusion Financials Training in Chennai?</strong></h5>

                                <ul>
                                    <li><strong>Finance Professionals</strong>: If you are a finance professional looking to enhance your skills and transition into cloud-based financial management, this course will help you do so seamlessly.</li>
                                    <li><strong>ERP Consultants</strong>: For ERP consultants who want to expand their expertise in financial modules, learning Oracle Fusion Financials will add a valuable skill set to your portfolio.</li>
                                    <li><strong>IT Professionals</strong>: IT professionals working in financial services or ERP solutions will benefit from understanding how Oracle Fusion Financials integrates with other systems and supports efficient financial operations.</li>
                                    <li><strong>Fresh Graduates</strong>: If you're a recent graduate aiming to build a career in finance or ERP, this course will give you a solid foundation in Oracle Fusion Cloud Financials, helping you get a head start.</li>
                                </ul>
                                <h5><strong>Benefits of Oracle Fusion Financials Training in Chennai</strong></h5>

                                <ul>
                                    <li><strong>High-Demand Skills for Chennai's Job Market</strong>: As a growing hub for IT and finance, Chennai offers a wealth of job opportunities for professionals skilled in cloud-based ERP solutions. With our training, you'll gain expertise in Oracle Fusion Financials, making you a strong candidate for high-demand roles in the city's leading companies.</li>
                                    <li><strong>Practical Experience</strong>: Our training emphasizes hands-on learning through real-world projects and simulations. By completing the course, you'll have the practical experience to implement Oracle Fusion Financials in your organization.</li>
                                    <li><strong>Global Recognition with Oracle Certification</strong>: Oracle certifications are highly respected worldwide. By completing our training and earning certification, you can work with top companies worldwide, expanding your career opportunities.</li>
                                    <li><strong>Networking Opportunities</strong>: During our Oracle Fusion Financials Training in Chennai, you'll have the opportunity to network with fellow professionals, industry experts, and trainers, expanding your connections in the financial and IT sectors.</li>
                                    <li><strong>Career Growth and Competitive Salaries</strong>: Oracle Fusion Financials professionals are in high demand and often command higher salaries due to their specialized skills. With our training and certification support, you'll be well-positioned for lucrative job offers in Chennai's competitive market.</li>
                                </ul>
                                <h5><strong>Enroll Now in Oracle Fusion Financials Training in Chennai</strong></h5>

                                <p>Take the chance to elevate your career in financial management with our Oracle Fusion Financials Training in Chennai. Whether you're looking to upskill, transition into a new role, or start your job, our expert-led course provides the knowledge, skills, and certification support you need to succeed.</p>
                                <p>Contact us today for more information on course schedules, fees, and enrollment options. Take the first step toward mastering Oracle Fusion Cloud Financials and securing a prosperous future in Chennai's dynamic job market!</p>
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