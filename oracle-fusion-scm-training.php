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
                            <h2 class="title">Master Oracle Fusion SCM Online Training with Redwood AI Integration</h2>
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
                                    <h4 class="rbt-title-style-3">Understanding Oracle Fusion SCM and the Importance of Oracle Fusion SCM Training</h4>
                                </div>
                                <!-- Overview Start -->
                                 <p><b>Oracle Fusion SCM</b> is a cloud-based solution from Oracle’s Fusion Applications suite designed to help businesses manage and optimize end-to-end supply chain activities using advanced technologies like AI, machine learning, and IoT. Oracle Fusion SCM Training equips professionals with the expertise required to leverage these tools for enhancing supply chain efficiency, visibility, and decision-making. By mastering the platform through dedicated <b>Oracle Fusion SCM Training</b>, learners can streamline operations, adapt quickly to market changes, and improve compliance and strategic growth for their organizations. This training is essential because it ensures users can fully utilize the platform’s features to reduce costs, increase agility, and achieve a competitive advantage in today’s complex logistics environment. For SCM professionals and organizations, Oracle Fusion SCM Training is a transformative step to becoming proficient in managing modern supply chains on the cloud.</p>

                                <h4><strong>What is Oracle Fusion SCM?</strong></h4>
                                <p>Oracle Fusion SCM is part of the Oracle Fusion Applications suite. It leverages Oracle's cloud infrastructure to deliver robust and scalable solutions. It combines advanced technologies such as AI, machine learning, and IoT to enhance supply chain visibility, agility, and efficiency.</p>

                                <h5><strong>Key Features of Oracle Fusion SCM</strong></h5>
                                <ol>
                                    <li><strong>Integrated Supply Chain Planning</strong>
                                        <ul>
                                            <li><strong>Demand Management</strong>: Predict and manage demand accurately to ensure optimal inventory levels.</li>
                                            <li><strong>Supply Planning</strong>: Balance supply and demand efficiently to meet customer requirements.</li>
                                            <li><strong>Sales and Operations Planning</strong>: Align sales, operations, and financial plans for improved decision-making.</li>
                                        </ul>
                                    </li>
                                </ol>

                                <ol start="2">
                                    <li><strong>Procurement</strong>
                                        <ul>
                                            <li><strong>Supplier Qualification Management</strong>: Ensure that suppliers meet the required standards before engaging in business.</li>
                                            <li><strong>Sourcing</strong>: Conduct strategic sourcing to select the best suppliers and negotiate favourable terms.</li>
                                            <li><strong>Procurement Contracts</strong>: Manage contracts effectively to ensure compliance and control costs.</li>
                                            <li><strong>Self-Service Procurement</strong>: Enable employees to purchase goods and services easily through a user-friendly interface.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <ol start="3">
                                    <li><strong>Order Management</strong>
                                        <ul>
                                            <li><strong>Order Capture</strong>: Streamline the process of capturing orders from various channels.</li>
                                            <li><strong>Order Orchestration</strong>: Automate order fulfillment processes to ensure timely delivery.</li>
                                            <li><strong>Pricing and Incentives</strong>: Manage complex pricing and promotional structures to maximize revenue.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <ol start="4">
                                    <li><strong>Manufacturing</strong>
                                        <ul>
                                            <li><strong>Discrete and Process Manufacturing</strong>: Support both discrete and process manufacturing with a single solution.</li>
                                            <li><strong>Manufacturing Execution</strong>: Monitor and control shop floor operations in real time.</li>
                                            <li><strong>Cost Management</strong>: Accurately track and manage manufacturing costs.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <ol start="5">
                                    <li><strong>Product Lifecycle Management (PLM)</strong>
                                        <ul>
                                            <li><strong>Product Development</strong>: Accelerate product development cycles by collaborating effectively across teams.</li>
                                            <li><strong>Product Data Management</strong>: Maintain a single source of truth for all product information.</li>
                                            <li><strong>Configuration Management</strong>: Ensure products meet customer requirements through effective configuration management.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <ol start="6">
                                    <li><strong>Logistics</strong>
                                        <ul>
                                            <li><strong>Transportation Management</strong>: Optimize transportation plans to reduce costs and improve delivery performance.</li>
                                            <li><strong>Global Trade Management</strong>: Ensure compliance with trade regulations and streamline customs processes.</li>
                                            <li><strong>Warehouse Management</strong>: Enhance warehouse operations to improve inventory accuracy and reduce handling costs.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <ol start="7">
                                    <li><strong>Supply Chain Collaboration</strong>
                                        <ul>
                                            <li><strong>Supplier Collaboration</strong>: Improve collaboration with suppliers for better visibility and coordination.</li>
                                            <li><strong>Customer Collaboration</strong>: Enhance customer relationships by providing better visibility into order status and delivery schedules.</li>
                                        </ul>
                                    </li>
                                </ol>
                    
                                <h5><strong>Benefits of Oracle Fusion SCM</strong></h5>
                                <ul>
                                    <li><strong>Improved Visibility</strong>: Gain real-time visibility into supply chain operations, enabling better decision-making.</li>
                                    <li><strong>Enhanced Efficiency</strong>: Automate and streamline processes to reduce manual efforts and improve productivity.</li>
                                    <li><strong>Cost Savings</strong>: Optimize inventory levels, reduce transportation costs, and improve procurement processes to achieve significant cost savings.</li>
                                    <li><strong>Scalability</strong>: Easily scale your supply chain operations as your business grows without compromising on performance.</li>
                                    <li><strong>Innovation</strong>: Leverage advanced technologies such as AI, machine learning, and IoT to drive innovation and stay ahead of the competition.</li>
                                </ul>
                                <h5><strong>Use Cases of Oracle Fusion SCM</strong></h5>
                                <p><strong>Case Study 1: Retail Industry</strong></p>
                                <p>A leading retail chain implemented Oracle Fusion SCM to enhance its inventory management. By leveraging real-time inventory tracking and demand forecasting, the company reduced stockouts and overstock situations, leading to a 20% reduction in inventory costs.</p>

                                <p><strong>Case Study 2: Manufacturing Sector</strong></p>
                                <p>A global manufacturing company adopted Oracle Fusion SCM to streamline its production planning and quality management processes. The integrated solution enabled the company to improve production efficiency by 15% and ensure consistent product quality.</p>

                                <h4><strong>Why Choose Soft Online Training for Oracle Fusion SCM Online Training?</strong></h4>
                                <p>Soft Online Training offers a specialized Oracle Fusion SCM Course and Oracle SCM Cloud Training designed to help professionals gain deep functional and technical expertise in supply chain management. The program integrates expert-led sessions, real-time projects, and complete placement support to ensure career success in the cloud-driven SCM domain.</p>
                                
                                <h5><strong>Comprehensive and Updated Curriculum</strong></h5>
                                <p>The Oracle Fusion SCM Course includes all major modules such as procurement, inventory, order management, and product lifecycle management. The curriculum is continuously updated to reflect the latest advancements in Oracle SCM Cloud Training and enterprise supply chain operations</p>
                                <ul>
                                    <li><strong>Supply Chain Planning</strong>: Learn about demand management, supply planning, and sales and operations planning.</li>
                                    <li><strong>Procurement</strong>: Gain insights into supplier qualification, strategic sourcing, procurement contracts, and self-service procurement.</li>
                                    <li><strong>Order Management</strong>: Understand order capture, orchestration, and pricing management.</li>
                                    <li><strong>Manufacturing</strong>: Explore discrete and process manufacturing, manufacturing execution, and cost management.</li>
                                    <li><strong>Product Lifecycle Management (PLM)</strong>: Dive into product development, data management, and configuration management.</li>
                                    <li><strong>Logistics</strong>: Study transportation management, global trade management, and warehouse management.</li>
                                    <li><strong>Collaboration</strong>: Improve supplier and customer collaboration skills.</li>
                                </ul>

                                <h5><strong>Experienced Trainers</strong></h5>
                                <p>Soft Online Training prides itself on its team of experienced trainers who are industry experts. They bring years of practical experience and in-depth knowledge of Oracle Fusion SCM, ensuring you receive a top-notch education. Their real-world insights and practical examples help bridge the gap between theory and practice. With their comprehensive Oracle Fusion SCM Course learners gain the necessary skills to excel in supply chain management using Oracle’s cutting-edge cloud solutions.</p>

                                <h5><strong>Flexible Learning Options</strong></h5>
                                <p>Understanding the varied needs of learners, Soft Online Training offers flexible learning options:</p>
                                <ul>
                                    <li><strong>Live Online Classes</strong>: Interactive live sessions that allow you to engage with trainers in real time.</li>
                                    <li><strong>Self-Paced Learning</strong>: Access to recorded sessions and study materials for learning at your own pace.</li>
                                    <li><strong>Weekend Batches</strong>: Special batches for working professionals who can&rsquo;t commit to weekday sessions.</li>
                                </ul>

                                <h5><strong>Real-Time Projects and Practical Experience</strong></h5>
                                <p>Learners get exposure to real-time projects that replicate industry applications. This practical learning approach helps participants strengthen their understanding of end-to-end supply chain processes using Oracle Fusion tools.</p>
                                <ul>
                                    <li><strong>Real-Time Projects</strong>: Work on real-time projects that simulate actual business scenarios.</li>
                                    <li><strong>Case Studies</strong>: Analyze case studies to understand the application of Oracle Fusion SCM in different industries.</li>
                                    <li><strong>Lab Exercises</strong>: Gain practical experience through guided lab exercises and assignments.</li>
                                </ul>
                                <h5><strong>Certification and Job Assistance</strong></h5>
                                <p>Upon completing the training, you will receive a certification that validates your knowledge and skills in Oracle Fusion SCM. Soft Online Training also provides job assistance, including:</p>
                                <ul>
                                    <li><strong>Resume Building</strong>: Get help crafting a professional resume that highlights your skills and training.</li>
                                    <li><strong>Interview Preparation</strong>: Participate in mock interviews and receive tips on how to succeed in job interviews.</li>
                                    <li><strong>Job Placement</strong>: Benefit from Soft Online Training&rsquo;s network of industry connections to help you find job opportunities.</li>
                                </ul>
                                <h5><strong>Personalized Support</strong></h5>
                                <p>Soft Online Training offers personalized support to ensure your learning experience is smooth and effective. Their Oracle SCM Cloud Training includes flexible scheduling, and continuous progress tracking. This personalized approach helps learners master complex supply chain concepts and Oracle cloud functionalities at their own pace, while receiving expert guidance tailored to individual needs:</p>
                                <ul>
                                    <li><strong>24/7 Access to Resources</strong>: Enjoy round-the-clock access to training materials, recordings, and other resources.</li>
                                    <li><strong>Dedicated Support Team</strong>: A dedicated support team is available to address any queries or issues you may encounter during the training.</li>
                                </ul>
                                <h5><strong>Positive Reviews and Testimonials</strong></h5>
                                <p>Soft Online Training has a track record of positive reviews and testimonials from satisfied learners. Many of their alums have successfully transitioned into roles where they effectively utilize Oracle Fusion SCM, attributing their success to the quality training received.</p>

                                <h5><strong>Cost-Effective Training</strong></h5>
                                <p>Investing in your education is crucial, but it doesn&rsquo;t have to be expensive. Soft Online Training offers competitive pricing and flexible payment options, making high-quality Oracle Fusion SCM training accessible without breaking the bank.</p>

                                <h5><strong>Flexible Learning and Individual Mentorship</strong></h5>
                                <p>Soft Online Training provides flexible modes of learning, including self-paced and instructor-led options. Dedicated mentors support learners at every step, ensuring a smooth and productive training experience.</p>

                                <h5><strong>100% Placement Support and Career Growth</strong></h5>
                                <p>The institute offers 100% placement support, mock interviews, and resume assistance to help learners secure roles in top organizations. Graduates from Soft Online Training’s Oracle SCM Cloud Training program are highly sought after in the supply chain domain.</p>

                                <h5><strong>Proven Success and Learner Satisfaction</strong></h5>
                                <p>Soft Online Training has trained thousands of professionals worldwide, earning a strong reputation for delivering high-quality Oracle Fusion SCM online training. Its commitment to practical learning and career-oriented guidance sets it apart as a trusted choice for aspiring SCM professionals.</p>
                                
                                <h5><strong>Key Features of oracle fusion SCM online training</strong></h5>
                                <p>The <b>Oracle Fusion SCM Course</b> offers comprehensive learning on cloud-based supply chain management modules. Gain real-time expertise through interactive sessions and expert-led Oracle Fusion SCM online training.</p>
                                <ol>
                                    <li><strong>Comprehensive Supply Chain Modules</strong>: Oracle Fusion SCM training covers essential cloud-based modules like procurement and inventory management to optimize supply chain processes efficiently.</li>
                                    <li><strong>Real-Time Visibility and Analytics</strong>: Gain skills to monitor supply chain activities in real time, enabling faster, data-driven decisions and improved operational transparency.</li>
                                    <li><strong>Automation and Efficiency</strong>: Learn to automate routine tasks, reducing manual errors and enhancing the speed and accuracy of supply chain operations.</li>
                                    <li><strong>Collaboration Across the Supply Chain</strong>: Oracle Fusion SCM facilitates seamless communication between stakeholders, improving collaboration and supply chain coordination.</li>
                                    <li><strong>Dynamic Demand and Inventory Planning</strong>: Master forecasting and inventory optimization techniques that adjust supply strategies instantly to meet changing market demands.</li>
                                </ol>
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
                                        <p class="rbt-badge-7 mt--10"><i class="feather-phone mr--5"></i> Call Us: <a href="tel:+91-888-999-3194"><strong>&nbsp;+91-888-999-3194</strong></a></p>
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