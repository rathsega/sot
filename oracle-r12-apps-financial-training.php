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
    .course-sub-title{
        color:#000;
    }
    b, strong {
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
                                        <span class="image"><img src="assets/images/icons/card-icon-1.png"
                                                alt="Best Seller Icon"></span> Bestseller
                                    </span>
                                </div>

                                <div class="feature-sin rating">
                                    <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                                    <a
                                        href="javascript:void(0);">(<?php echo $course_details[$current_slug]['rating'] ?>)</a>

                                </div>

                                <div class="feature-sin total-rating">
                                    <a class="rbt-badge-4"
                                        href="javascript:void(0);"><?php echo $course_details[$current_slug]['rating_count'] ?>
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
                        <div class="rbt-course-feature-box overview-wrapper rbt-border-with-box mt--30 has-show-more"
                            id="overview">
                            <div class="rbt-course-feature-inner has-show-more-inner-content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">About
                                        <?php echo $course_details[$current_slug]['title'] ?></h4>
                                </div>
                                <!-- Overview Start -->
                               
<h4><strong>What is Oracle EBS R12 Financials?</strong></h4>
<p>Oracle E-Business Suite (EBS) R12 Financials is a comprehensive enterprise software solution designed to streamline and optimize financial management processes for organizations. It encompasses modules such as General Ledger, Accounts Payable, Accounts Receivable, Cash Management, and Fixed Assets, offering integrated functionalities that facilitate efficient financial reporting, compliance, and decision-making. Oracle EBS R12 Financials enables businesses to automate transaction processing, enhance financial controls, and gain real-time insights into their financial performance. With its robust features for managing financial data across multiple currencies and legal entities, Oracle EBS R12 Financials supports organizations in achieving greater operational efficiency and strategic financial management.</p>

<h5><strong>Key Features:</strong></h5>
<ol>
<li><strong>General Ledger:</strong> Centralizes financial information and supports multi-currency transactions, enabling accurate financial reporting.</li>
<li><strong>Accounts Payable:</strong> Automated invoice processing, payment generation, and vendor management to optimize cash flow and improve payment accuracy.</li>
<li><strong>Accounts Receivable:</strong> Manages customer invoices, receipts, and collections, enhancing cash flow management and customer relationships.</li>
<li><strong>Cash Management:</strong> Provides real-time visibility into cash positions, forecasts cash requirements, and facilitates bank reconciliation to ensure optimal liquidity management.</li>
<li><strong>Fixed Assets:</strong> Tracks and manages fixed assets throughout their lifecycle, ensuring compliance with accounting standards and optimizing asset utilization.</li>
</ol>

<h5><strong>Benefits:</strong></h5>
<ul>
<li><strong>Operational Efficiency:</strong> Automates financial processes, reduces manual errors, and enhances productivity.</li>
<li><strong>Financial Control:</strong> Strengthens internal controls, ensures compliance with regulatory requirements, and minimizes financial risks.</li>
<li><strong>Real-time Insights:</strong> Provides actionable insights into financial performance, supporting informed decision-making.</li>
<li><strong>Global Capabilities:</strong> Supports multi-national operations with capabilities for managing diverse currencies, legal entities, and regulatory environments.</li>
<li><strong>Scalability:</strong> Adapts to organizational growth and evolving business needs, maintaining performance and reliability.</li>
</ul>
<p>Oracle EBS R12 Financials empowers organizations to achieve greater financial transparency, operational agility, and strategic alignment, thereby enabling sustained growth and competitiveness in a dynamic business environment.</p>

<h4><strong>Why Should You Learn Oracle EBS R12 Financials Training from Soft Online Training?</strong></h4>
<p>Embarking on Oracle EBS R12 Financials training with Soft Online Training offers a transformative learning experience tailored to professionals aiming to master enterprise financial management. Our comprehensive training program is meticulously crafted to impart practical skills and in-depth knowledge essential for leveraging Oracle EBS R12 Financials effectively in real-world scenarios.</p>

<h5><strong>Key Benefits of Choosing Soft Online Training:</strong></h5>
<ol>
<li><strong>Expert-Led Instruction:</strong> Learn from certified Oracle EBS instructors with extensive industry experience, ensuring high-quality education and practical insights.</li>
<li><strong>Comprehensive Curriculum:</strong> Gain proficiency in all facets of Oracle EBS R12 Financials, including General Ledger, Accounts Payable, Accounts Receivable, Cash Management, and Fixed Assets.</li>
<li><strong>Hands-On Experience:</strong> Engage in hands-on labs and real-world simulations that reinforce theoretical concepts and build confidence in using Oracle EBS R12 Financials.</li>
<li><strong>Flexible Learning Options:</strong> Access flexible learning schedules with self-paced modules and interactive live sessions, accommodating diverse learning preferences and busy professional schedules.</li>
<li><strong>Career Advancement:</strong> Enhance your career prospects with a globally recognized certification in Oracle EBS R12 Financials, validating your expertise and opening doors to new opportunities.</li>
</ol>
<p>At Soft Online Training, we are committed to empowering individuals with the skills and knowledge needed to excel in Oracle EBS R12 Financials. Whether you are starting your career in finance or aiming to advance in your current role, our training equips you with the competencies to drive organizational success and innovation.</p>
                                
                                
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
                                        <?php foreach ($requirements[$current_slug] as $requirement): ?>
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
                                        <?php foreach ($learnings[$current_slug] as $learn): ?>
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
                            <a class="video-popup-wrapper text-center sidebar-video-hidden mb--15" id="demo_video_form" style="display: none;"
                                onclick="clickedFrom('demo_video')" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" href="javascript:void(0);">
                                <div class="video-content">
                                    <img class="w-100 rbt-radius"
                                        src="assets/images/course/custom/<?php echo $course_details[$current_slug]['thumbnail'] ?>"
                                        alt="Video Images">
                                    <div class="position-to-top">
                                        <span class="rbt-btn rounded-player-2 with-animation">
                                            <span class="play-icon"></span>
                                        </span>
                                    </div>
                                    <span class="play-view-text d-block color-white"><i class="feather-eye"></i> Preview
                                        this course</span>
                                </div>
                            </a>
                            <a class="video-popup-wrapper text-center popup-video sidebar-video-hidden mb--15"
                                id="demo_video_link" href="<?php echo $course_details[$current_slug]['demo_video'] ?>">
                                <div class="video-content">
                                    <img class="w-100 rbt-radius"
                                        src="assets/images/course/custom/<?php echo $course_details[$current_slug]['thumbnail'] ?>"
                                        alt="Video Images">
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
                                <div
                                    class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="rbt-price">
                                        <?php if ($course_details[$current_slug]['discounted_price']): ?>
                                            <span
                                                class="current-price"><?php echo $course_details[$current_slug]['discounted_price']; ?></span>
                                            <span
                                                class="off-price"><?php echo $course_details[$current_slug]['price']; ?></span>
                                        <?php else: ?>
                                            <span
                                                class="current-price"><?php echo $course_details[$current_slug]['price']; ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="add-to-card-button mt--15">
                                    <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center"
                                        data-bs-toggle="modal" name="enroll_now" onclick="clickedFrom('enroll_now')"
                                        data-bs-target="#exampleModal" href="javascript:void(0);">
                                        <span class="btn-text">Enroll Now</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </a>
                                </div>
                                <span class="subtitle"></span>


                                <div class="rbt-widget-details has-show-more">
                                    <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                        <li><span>Lectures</span><span
                                                class="rbt-feature-value rbt-badge-5"><?php echo $course_details[$current_slug]['lessons'] ?></span>
                                        </li>
                                        <li><span>Duration</span><span
                                                class="rbt-feature-value rbt-badge-5"><?php echo $course_details[$current_slug]['duration'] ?></span>
                                        </li>
                                        <li><span>Skill Level</span><span
                                                class="rbt-feature-value rbt-badge-5">Advanced</span></li>
                                        <li><span>Video Access</span><span
                                                class="rbt-feature-value rbt-badge-5"><?php echo $course_details[$current_slug]['video_access'] ?></span>
                                        </li>
                                        <li><span>Instant Access</span><span
                                                class="rbt-feature-value rbt-badge-5"><?php echo $course_details[$current_slug]['instance_access'] ?></span>
                                        </li>
                                        <li><span>Language</span><span
                                                class="rbt-feature-value rbt-badge-5">English</span></li>

                                        <li><span>Certificate</span><span
                                                class="rbt-feature-value rbt-badge-5">Yes</span></li>

                                    </ul>
                                    <div class="rbt-show-more-btn">Show More</div>
                                </div>

                                <div class="social-share-wrapper mt--30 text-center">
                                    <?php include_once "course_social_links.php"; ?>
                                    <hr class="mt--20">
                                    <div class="contact-with-us text-center">
                                        <p>For details about the course</p>
                                        <p class="rbt-badge-7 mt--10"><i class="feather-phone mr--5">
                                </i> Call Us: <a
                                                href="tel:+91-888-999-3194"><strong>&nbsp;+91-888-999-3194</strong></a></p>
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