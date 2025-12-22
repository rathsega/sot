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
                                <h4><strong>What is Oracle Transportation Management (OTM Cloud)?</strong></h4>
                                <p>Oracle Transportation Management (OTM) Cloud is an advanced logistics management solution offered by Oracle that is designed to optimize transportation operations across industries. As part of Oracle's comprehensive suite of cloud-based applications, OTM Cloud empowers businesses to efficiently plan, execute, and monitor transportation activities from a single, integrated platform. Key features include:</p>
                                <ol>
                                    <li><strong>End-to-End Visibility</strong>: Gain real-time visibility into shipments, routes, and logistics operations, enabling proactive decision-making and exception management.</li>
                                    <li><strong>Optimized Transportation Planning</strong>: Advanced algorithms are used to optimize route planning, load consolidation, and mode selection, reducing transportation costs and improving efficiency.</li>
                                    <li><strong>Real-Time Analytics</strong>: Access actionable insights through built-in analytics and reporting tools, allowing for continuous performance monitoring and strategic improvements.</li>
                                    <li><strong>Compliance and Regulatory Support</strong>: Ensure adherence to global trade regulations and sustainability initiatives with comprehensive compliance management capabilities.</li>
                                    <li><strong>Scalability and Flexibility</strong>: Scale operations effortlessly with a flexible, configurable platform that adapts to evolving business needs and growth.</li>
                                </ol>
                                <h5><strong>Benefits of Oracle Transportation Management (OTM) Cloud:</strong></h5>
                                <ul>
                                    <li><strong>Cost Efficiency</strong>: Reduce transportation costs through optimized planning and execution, efficient resource utilization, and streamlined processes.</li>
                                    <li><strong>Enhanced Customer Service</strong>: Improve delivery reliability and responsiveness, leading to enhanced customer satisfaction and loyalty.</li>
                                    <li><strong>Operational Agility</strong>: Quickly adapt to changing market conditions, customer demands, and regulatory requirements with agile transportation management capabilities.</li>
                                    <li><strong>Integrated Supply Chain</strong>: Seamlessly integrate transportation management with other supply chain processes and enterprise systems for end-to-end visibility and collaboration.</li>
                                    <li><strong>Sustainability</strong>: Support environmental sustainability goals by minimizing carbon footprint through efficient route planning and load optimization.</li>
                                </ul>
                                <p>Oracle Transportation Management (OTM) Cloud empowers businesses to achieve operational excellence, drive cost savings, and deliver superior customer experiences in today's competitive global marketplace.</p>

                                <h4><strong>Why Should You Learn Oracle Transportation Management (OTM Cloud) Training from Soft Online Training?</strong></h4>
                                <p>At Soft Online Training, we offer a comprehensive and specialized Oracle Transportation Management (OTM) Cloud training program designed to equip professionals with the skills and knowledge needed to excel in logistics and supply chain management. Our training stands out for several compelling reasons:</p>

                                <ol>
                                    <li><strong>Expert Trainers</strong>: Learn from industry experts with extensive hands-on experience in implementing and managing OTM Cloud solutions, ensuring practical insights and best practices.</li>
                                    <li><strong>Customized Curriculum</strong>: Our training curriculum is meticulously crafted to cover all aspects of OTM Cloud, from fundamentals to advanced topics, tailored to meet the diverse learning needs of participants.</li>
                                    <li><strong>Hands-on Experience</strong>: You will gain practical experience through hands-on labs and real-world simulations, allowing you to apply theoretical knowledge in realistic scenarios.</li>
                                    <li><strong>Flexible Learning Options</strong>: Choose from flexible learning modes, including live instructor-led sessions, self-paced learning modules, and on-demand resources, to suit your schedule and learning preferences.</li>
                                    <li><strong>Industry Recognition</strong>: Acquire a certification recognized by industry leaders, enhancing your credibility and career prospects in the competitive job market.</li>
                                    <li><strong>Career Support</strong>: Benefit from career guidance and placement assistance, including resume building, interview preparation, and access to job opportunities in logistics and supply chain management.</li>
                                </ol>
                                <p>By enrolling in our Oracle Transportation Management (OTM) Cloud training, you'll not only master essential skills but also gain the confidence to tackle complex logistics challenges and drive operational efficiencies within your organization. Join Soft Online Training today and embark on a rewarding journey towards becoming a certified OTM Cloud professional.</p>


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