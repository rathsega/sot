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
                            <h2 class="title">Oracle Fusion Financials Training – Learn from Certified Industry Experts</h2>
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
                                <h4><strong>What is Oracle Fusion </strong><strong>Financials</strong><strong>?</strong></h4>
                                <p><b>Oracle Fusion Financials</b> is a comprehensive cloud-based financial management solution by Oracle that automates and streamlines core financial processes such as general ledger, accounts payable, and accounts receivable. It provides real-time insights, advanced analytics, and automation to improve accuracy, compliance, and decision-making. This platform helps organizations increase efficiency, reduce manual effort, and gain better control over their financial operations.</p>
                                <h4>Why Oracle Fusion Financials Training is Important?</h4>
                                <p><b>Oracle Fusion Financials training</b> is designed to equip professionals with the skills to use Oracle Fusion Financials, a modern cloud-based financial management solution that streamlines essential financial processes for organizations of all sizes. This platform is part of the Oracle Fusion Applications suite and is built to deliver powerful automation, real-time insights, and robust compliance for all financial operations.</p>
                                <h5><strong>Key Features:</strong></h5>
                                <ol>
                                    <li><strong>General Ledger</strong>
                                        <ul>
                                            <li><strong>Comprehensive Financial Management:</strong> Manages all financial transactions and consolidates data across multiple ledgers and entities.</li>
                                            <li><strong>Real-Time Reporting:</strong> Provides real-time financial insights and analytics, enabling informed decision-making.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Accounts Payable</strong>
                                        <ul>
                                            <li><strong>Streamlined Invoice Processing:</strong> This system automates invoice capture, approval workflows, and payment processes, reducing manual effort and errors.</li>
                                            <li><strong>Supplier Management:</strong> Enhances supplier collaboration and ensures timely payments, improving supplier relationships.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Accounts Receivable</strong>
                                        <ul>
                                            <li><strong>Efficient Billing and Collections:</strong> Manages customer invoicing, credit memos, and collections, ensuring accurate and timely revenue recognition.</li>
                                            <li><strong>Customer Relationship Management:</strong> Integrates with CRM systems to provide a holistic view of customer transactions and balances.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Cash Management</strong>
                                        <ul>
                                            <li><strong>Optimized Cash Flow:</strong> Tracks and manages cash positions, forecasts, and reconciliations to ensure effective liquidity management.</li>
                                            <li><strong>Bank Account Reconciliation:</strong> Automates the reconciliation process, reducing discrepancies and manual effort.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Fixed Assets</strong>
                                        <ul>
                                            <li><strong>Asset Tracking and Management:</strong> Manages the lifecycle of fixed assets from acquisition to disposal, ensuring accurate depreciation and asset accounting.</li>
                                            <li><strong>Compliance and Reporting:</strong> Ensures compliance with financial regulations and generates comprehensive asset reports.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Expense Management</strong>
                                        <ul>
                                            <li><strong>Automated Expense Reporting:</strong> Streamlines the capture, approval, and reimbursement of employee expenses, enhancing policy compliance and reducing processing time.</li>
                                            <li><strong>Mobile Accessibility:</strong> Allows employees to submit expenses on the go via mobile devices, improving user convenience and efficiency.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <h5><strong>Benefits of Oracle Fusion Financials:</strong></h5>
                                <ul>
                                    <li><strong>Integrated Data Model:</strong> This model ensures consistency and accuracy of financial data across different modules, facilitating better reporting and analysis.</li>
                                    <li><strong>Advanced Analytics:</strong> Leverages embedded business intelligence and analytics tools to provide actionable insights and enhance strategic planning.</li>
                                    <li><strong>Automation and Efficiency:</strong> Automates routine financial processes, reducing manual workload and increasing operational efficiency.</li>
                                    <li><strong>Scalability and Flexibility:</strong> Scales with business growth and adapts to changing financial management needs, offering a future-proof solution.</li>
                                    <li><strong>Enhanced Security and Compliance:</strong> Incorporates robust security measures and compliance tools to protect financial data and meet regulatory requirements.</li>
                                </ul>
                                <h5><strong>Use Cases:</strong></h5>
                                <ol>
                                    <li><strong>Financial Consolidation</strong>
                                        <ul>
                                            <li><strong>Scenario:</strong> A multinational corporation needs to consolidate financial data from various subsidiaries.</li>
                                            <li><strong>Solution:</strong> Oracle Fusion Financials provides a unified platform for consolidating and reporting financial information, ensuring consistency and accuracy.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Procurement Optimization</strong>
                                        <ul>
                                            <li><strong>Scenario:</strong> An organization wants to streamline its procurement and accounts payable processes.</li>
                                            <li><strong>Solution:</strong> Oracle Fusion Financials automates invoice processing and supplier management, improving efficiency and reducing procurement costs.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Expense Management</strong>
                                        <ul>
                                            <li><strong>Scenario:</strong> A company aims to enhance its employee expense reporting and reimbursement process.</li>
                                            <li><strong>Solution:</strong> Oracle Fusion Financials offers automated expense management tools, enabling quick expense submission, approval, and reimbursement.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <h3><strong>Why Choose Soft Online Training for Your Oracle Fusion Financials Course?</strong></h3>
                                <p>Choosing <b>Soft Online Training</b> for your <b>Oracle Fusion Financials course</b> means learning from highly experienced instructors who bring real-world insights to help you master the platform effectively. Their comprehensive course covers all essential Oracle Fusion modules, combining theory with hands-on practice to ensure you gain practical skills. Flexible online training allows you to learn at your own pace, while the platform’s trusted reputation and supportive environment make it ideal for career growth in cloud-based financial management. This training equips you with the knowledge and certification needed to excel in today’s competitive finance roles.</p>

                                <h5><strong>Learn from Industry Experts</strong></h5>
                                <p>Our oracle fusion financials course is delivered by seasoned professionals with deep domain expertise and real-world experience. They offer valuable insights and practical knowledge that make the training relevant and actionable for learners aiming to excel in financial management using Oracle Fusion applications.</p>
                                <h5><strong>Hands-On Experience with Real Projects</strong></h5>
                                <p>We emphasize practical learning by incorporating live project simulations and real-time business scenarios. This hands-on approach builds your confidence and equips you with essential skills for the job market in Oracle fusion financials online training environments.</p>
                                
                                <h5><strong>Comprehensive Curriculum Aligned with Oracle</strong></h5>
                                <p>Our curriculum covers all critical Oracle Fusion Financials modules, including General Ledger, Accounts Payable, and Financial Reporting. The oracle fusion financials course content is regularly updated to reflect the latest Oracle Fusion Applications training standards and certifications.</p>
                                
                                <h5><strong>Strong Reputation and Proven Results</strong></h5>
                                <p>Thousands of students have trusted our oracle fusion financials course to advance their careers. We have a track record of positive reviews, success stories, and graduates who have secured positions in top companies specializing in Oracle-based financial management systems.</p>
                                
                                <h5><strong>Transparent, Reliable Learning Environment</strong></h5>
                                <p>We provide detailed course outlines, secure payment options, and dedicated student support. This transparency and reliability foster trust and create a smooth learning journey, making our oracle fusion financials online training platform a preferred choice.</p>
                                
                                <h5><strong>Flexible Online Training for Busy Professionals</strong></h5>
                                <p>Our oracle fusion financials course is offered entirely online, allowing you to learn at your own pace and from any location. This flexibility suits working professionals who want to upgrade their skills without disrupting their current job commitments.</p>

                                <h5><strong>Continuous Support and Resources</strong></h5>
                                <p>Soft Online Training is dedicated to your success beyond the training sessions. We provide continuous support through dedicated mentors, discussion forums, and a wealth of learning resources. Whether you need assistance with specific topics or career guidance, our support team is always available to help you. This ongoing support ensures that you can effectively implement what you've learned and continue to grow professionally.</p>

                                <h5><strong>Certification and Career Advancement</strong></h5>
                                <p>Completing the Oracle Fusion Financials training from Soft Online Training earns you a prestigious certification that is highly recognized in the industry. This certification validates your expertise and knowledge, enhancing your resume and making you a more competitive candidate in the job market. With the increasing demand for skilled professionals in Oracle Fusion Financials, this training can significantly boost your career prospects and open up new opportunities.</p>

                                <h5><strong>Proven Track Record</strong></h5>
                                <p>Soft Online Training has a strong track record of success, with numerous testimonials from satisfied learners who have benefited from our training programs. Our alums have successfully implemented Oracle Fusion Financials solutions in their organizations and achieved significant career advancements. This proven track record underscores the quality and effectiveness of our training programs.</p>
                                
                                
                                <h5><strong>Key Features Of Oracle Fusion Applications training:</strong></h5>
                                <p><b>Oracle Fusion Applications training</b> equips you with the skills to configure, manage, and optimize Oracle's comprehensive cloud suite. This training covers essential features such as integrated financial management, automated business processes, real-time reporting, and seamless cloud integration, enabling organizations to enhance efficiency and drive smarter business decisions.</p>

                                <h5><strong>Integrated Financial Management</strong></h5>
                                <p>Oracle Fusion Financials training teaches managing financial processes seamlessly within a unified cloud platform, enhancing accuracy and control through Oracle Fusion Financials online training.</p>
                                <h5><strong>Automated Business Processes</strong></h5>
                                <p>Learn how to automate workflows to improve operational efficiency and reduce manual intervention across various business functions.</p>
                                <h5><strong>Real-Time Reporting and Analytics</strong></h5>
                                <p>Gain skills in leveraging embedded analytics and real-time reporting tools for informed decision-making and performance tracking.</p>
                                <h5><strong>Seamless Cloud Integration</strong></h5>
                                <p>The training covers integration with other cloud services and enterprise systems, ensuring smooth data flow and process coordination.</p>
                                <h5><strong>Configurable and Scalable Solutions</strong></h5>
                                <p>Master configuring Oracle Fusion Applications to adapt to specific business needs, enabling scalable and flexible enterprise solutions.</p>
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

                        <!-- Start Faq Area  -->
                        <?php include_once "faq.php"; ?>

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