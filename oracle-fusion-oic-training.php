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
                                <p>&nbsp;</p>
<h4 ><strong>What is Oracle Integration Cloud?</strong></h4>
<p>Oracle Integration Cloud (OIC) stands out as a comprehensive, cloud-based integration platform that excels in streamlining and simplifying the process of connecting different applications, data sources, and business processes across both cloud and on-premises environments. Its robust suite of tools and features, including pre-built adapters, low-code development environments, and real-time analytics, sets it apart, enabling businesses to create seamless, automated workflows with minimal coding effort. By leveraging OIC, organizations can significantly enhance operational efficiency, accelerate digital transformation, and ensure secure, reliable data exchange, ultimately driving innovation and improved business outcomes.</p>

<h5><strong>Key Features of Oracle Integration Cloud:</strong></h5>
<ol>
<li><strong>Pre-Built Adapters</strong>: OIC includes a vast library of pre-built adapters for popular enterprise applications such as Oracle ERP, Salesforce, SAP, and others. These adapters simplify the integration process, allowing for quick and easy connections between different systems.</li>
<li><strong>Low-Code Development</strong>: The platform offers a visual, low-code development interface that empowers users to create integrations with minimal coding. This feature accelerates the development process, making it accessible to both technical and non-technical users.</li>
<li><strong>Real-Time Analytics</strong>: OIC provides real-time analytics and monitoring tools that enable organizations to track integration performance, identify issues promptly, and optimize processes for better efficiency.</li>
<li><strong>API Management</strong>: With comprehensive API management capabilities, OIC allows businesses to create, manage, and secure APIs efficiently. This facilitates better governance and enhances overall integration strategies.</li>
<li><strong>Security and Compliance</strong>: The platform prioritizes security with features such as data encryption, secure connectivity, and compliance with industry standards and regulations. This ensures that data is protected throughout the integration lifecycle.</li>
<li><strong>Scalability</strong>: Designed to scale with business needs, OIC can handle integrations of varying complexity, from simple connections to complex enterprise-wide workflows, ensuring consistent performance as the organization grows.</li>
</ol>
<h5><strong>Benefits of Using Oracle Integration Cloud:</strong></h5>
<ul>
<li><strong>Enhanced Operational Efficiency</strong>: OIC automates and streamlines integration processes, reducing manual effort, minimizing errors, and speeding up the deployment of new initiatives.</li>
<li><strong>Improved Business Agility</strong>: The platform allows organizations to quickly adapt to changing business requirements, integrating new applications and data sources without significant delays.</li>
<li><strong>Cost Savings</strong>: By reducing the need for extensive custom coding and leveraging pre-built adapters, OIC lowers development costs and resource requirements.</li>
<li><strong>Future-Proof Integration</strong>: Oracle continuously updates OIC with the latest technologies and best practices, ensuring that businesses stay ahead of integration challenges.</li>
</ul>
<p>Oracle Integration Cloud is an essential tool for modern enterprises aiming to achieve seamless connectivity, improve data accuracy, and drive innovation through efficient and secure integrations.</p>

<h4 ><strong>Why Should You Learn Oracle Integration Cloud Training from Soft Online Training?</strong></h4>
<p>In today&rsquo;s rapidly evolving technological landscape, mastering integration tools like Oracle Integration Cloud (OIC) is crucial for IT professionals who want to enhance their skills and career prospects. Soft Online Training offers a comprehensive and well-designed Oracle Integration Cloud training program that stands out for several reasons.</p>

<h5><strong>Expert-Led Training</strong></h5>
<p>At Soft Online Training, our courses are led by industry experts with extensive experience in Oracle Integration Cloud. These instructors bring real-world insights and practical knowledge, ensuring that learners gain a deep understanding of both fundamental concepts and advanced features of OIC. Their expertise helps bridge the gap between theoretical learning and practical application, preparing students for real-world challenges.</p>

<h5><strong>Comprehensive Curriculum</strong></h5>
<p>Our Oracle Integration Cloud training covers a wide range of topics, from basic integration concepts to advanced use cases and best practices. The curriculum includes hands-on exercises, case studies, and project work, enabling learners to apply their knowledge in practical scenarios. This holistic approach ensures that students are well-versed in all aspects of OIC, including pre-built adapters, low-code development, real-time analytics, API management, and security features.</p>

<h5><strong>Flexible Learning Options</strong></h5>
<p>Understanding the diverse needs of our learners, Soft Online Training offers flexible learning options, including self-paced online courses and live instructor-led sessions. This flexibility allows students to learn at their own pace and convenience, making it easier to balance training with other professional and personal commitments.</p>

<h5><strong>Practical Hands-On Experience</strong></h5>
<p>Our training program emphasizes hands-on experience, allowing learners to work on real-life projects and simulations. This practical approach helps students build confidence in using Oracle Integration Cloud in actual work environments. By working through real-world scenarios, learners gain valuable skills that are immediately applicable to their jobs.</p>

<h5><strong>Ongoing Support and Resources</strong></h5>
<p>At Soft Online Training, we provide continuous support to our learners. Our students have access to a wealth of resources, including recorded sessions, reference materials, and forums where they can interact with instructors and peers. This ongoing support ensures that learners can continually build on their skills and stay updated with the latest developments in Oracle Integration Cloud.</p>
<p>&nbsp;</p>
<h5><strong>Career Advancement Opportunities</strong></h5>
<p>Learning Oracle Integration Cloud from Soft Online Training can open up numerous career opportunities. With businesses increasingly relying on integration platforms to streamline operations and drive innovation, professionals skilled in OIC are in high demand. Our training program not only enhances your technical skills but also boosts your employability, positioning you for advanced roles in IT and business integration.</p>
<p>Choosing Soft Online Training for your Oracle Integration Cloud training ensures that you receive high-quality education, practical experience, and the support needed to excel in your career. Whether you are an IT professional looking to upskill or a business aiming to improve your integration capabilities, our training program provides the tools and knowledge to achieve your goals.</p>

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