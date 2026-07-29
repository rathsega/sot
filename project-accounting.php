<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include_once "all_courses_details.php"; ?>
    <title>Course Details - <?php echo $course_details[$current_slug]['title'] ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        color: #000000;
    }

    ul li {
        color: #000000;
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

                            <div class="d-flex align-items-center flex-wrap rbt-course-details-feature mt--10">

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
              <?php include_once "claim_instant_offer.php"; ?>
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
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><strong><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>Short Description:</span></strong></p>
                                <h3 style='margin-top:16.0pt;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:115%;font-size:19px;font-family:"Arial",sans-serif;color:#434343;font-weight:normal;'><strong><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;color:black;'>What is Oracle Fusion WMS Cloud (Logfire)?</span></strong></h3>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>Oracle Fusion Warehouse Management System (WMS) Cloud, also known as Logfire, is a cutting-edge, cloud-based solution designed to streamline and enhance warehouse operations. This advanced system integrates seamlessly with Oracle&rsquo;s suite of cloud applications, providing a comprehensive platform for managing complex warehouse processes with efficiency and precision.</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><strong><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>Key Features:</span></strong></p>
                                <ol style="list-style-type: decimal;margin-left:26px;">
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Cloud-Native Architecture</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: Being cloud-based, Oracle Fusion WMS Cloud offers unparalleled scalability, flexibility, and accessibility. It eliminates the need for on-premises infrastructure, reducing IT costs and simplifying deployment.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Real-Time Visibility</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: The system provides real-time insights into warehouse operations, enabling managers to monitor inventory levels, track shipments, and optimize resource allocation. This visibility enhances decision-making and operational efficiency.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Advanced Inventory Management</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: Oracle Fusion WMS Cloud supports sophisticated inventory tracking and management capabilities. It includes features such as automated replenishment, cycle counting, and lot/serial number tracking to ensure accurate inventory control.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Mobile Capabilities</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>: With mobile access, warehouse personnel can perform tasks such as picking, packing, and shipping using handheld devices. This mobility increases productivity and reduces errors by providing workers with up-to-date information at their fingertips.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Integration with Oracle Cloud Applications</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: The seamless integration with other Oracle Cloud applications, including Oracle ERP Cloud, ensures a unified and cohesive approach to managing enterprise operations. This integration facilitates data sharing and process synchronization across different business functions.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Scalability and Flexibility</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: Oracle Fusion WMS Cloud is designed to scale with your business. Whether you are operating a single warehouse or managing a global supply chain, the system can be tailored to meet your specific needs.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Enhanced Security</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>: Leveraging Oracle&rsquo;s robust cloud security framework, Oracle Fusion WMS Cloud ensures that your data is protected against unauthorized access and cyber threats. Regular updates and security patches keep the system secure and compliant with industry standards.</span></li>
                                </ol>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><strong><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>Benefits:</span></strong></p>
                                <ul style="list-style-type: undefined;margin-left:26px;">
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Improved Operational Efficiency</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: By automating and optimizing warehouse processes, Oracle Fusion WMS Cloud helps businesses reduce operational costs and increase efficiency.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Better Customer Service</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: Accurate and timely order fulfillment leads to higher customer satisfaction and loyalty.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Data-Driven Decisions</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: The system&rsquo;s analytical tools provide valuable insights that help businesses make informed decisions and drive continuous improvement.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Reduced IT Overhead</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>: As a cloud-based solution, it minimizes the need for extensive IT resources, allowing businesses to focus on core activities.</span></li>
                                </ul>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <h3 style='margin-top:16.0pt;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:115%;font-size:19px;font-family:"Arial",sans-serif;color:#434343;font-weight:normal;margin:0cm;'><strong><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>Why Should You Learn Oracle Fusion&nbsp;</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;color:black;'>Fusion WMS Cloud (Logfire)</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>&nbsp;Training from Soft Online Training?</span></strong></h3>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>Investing in Oracle Fusion WMS Cloud (Logfire) training from Soft Online Training offers numerous benefits that can significantly enhance your career prospects and organizational efficiency. Softonlinetraining is renowned for its comprehensive and hands-on training programs, designed to equip learners with in-depth knowledge and practical skills in Oracle Fusion WMS Cloud. Here are several compelling reasons to choose Soft Online Training for your Oracle Fusion WMS Cloud (Logfire) training:</span></p>
                                <ol style="list-style-type: decimal;margin-left:26px;">
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Expert Instructors</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>: Our expert instructors are seasoned professionals with extensive experience in Oracle Fusion WMS Cloud. Their industry insights and real-world examples ensure a comprehensive understanding of the system&apos;s functionalities and applications.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Comprehensive Curriculum</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: Soft Online Training offers a meticulously crafted curriculum that covers all essential aspects of Oracle Fusion WMS Cloud, from basic concepts to advanced features. Our training modules include real-time scenarios, hands-on exercises, and case studies to enhance your learning experience.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Practical Hands-On Training</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: Our emphasis on practical, hands-on training ensures that you can effectively apply your knowledge in real-world situations. Interactive sessions and lab exercises help you develop the skills necessary to manage and optimize warehouse operations using Oracle Fusion WMS Cloud.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Flexible Learning Options</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: At Soft Online Training, we understand the importance of flexibility. That&apos;s why we offer a range of learning options, including online classes, self-paced courses, and live instructor-led sessions. This flexibility allows you to learn at your own pace and according to your schedule, making it easier to balance training with your professional and personal commitments.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Certification Preparation</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: Our training programs are designed to prepare you for Oracle Fusion WMS Cloud certification exams. Earning a certification demonstrates your expertise and enhances your credibility, making you a valuable asset to potential employers.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Career Advancement</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>: Mastering Oracle Fusion WMS Cloud (Logfire) can open doors to numerous career opportunities in the field of warehouse management and supply chain logistics. Our training helps you stay ahead of the competition and positions you for roles that demand proficiency in cutting-edge warehouse management technologies.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Support and Resources</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>: Softonlinetraining provides continuous support and access to a wealth of learning resources, including study materials, practice exams, and a community forum. Our dedicated support team is always available to assist you with any questions or challenges you may encounter during your learning journey.</span></li>
                                    <li><strong><span style='line-height:115%;font-family:"Calibri",sans-serif;font-family:"Calibri",sans-serif;font-size:13.0pt;color:#0E101A;'>Proven Track Record</span></strong><span style='line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>: Soft Online Training is a trusted provider in the field of Oracle training. With a proven track record of successful training programs and satisfied learners, our alumni have gone on to achieve significant career milestones and contribute to the success of their organizations.</span></li>
                                </ol>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;color:#0E101A;'>Choosing Soft Online Training for your Oracle Fusion WMS Cloud (Logfire) training ensures that you receive top-quality, practical, and relevant education. Equip yourself with the skills and knowledge needed to excel in the dynamic world of warehouse management and take your career to the next level with Soft Online Training.</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:17px;line-height:115%;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
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

                        <?php include_once "faq.php";  ?>



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