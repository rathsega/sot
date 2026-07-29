<!DOCTYPE html>
<html lang="en">

<head>
        
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include_once "all_courses_details.php"; ?>
    <?php include_once "meta-data.php"; ?>
    <?php include_once "common_css.php"; ?>
    <?php include_once "databaseconnection.php"; ?>

</head>

<body class="rbt-header-sticky">

    <!-- Start Header Area -->
    <?php include_once "header.php"; ?>
    <!-- Mobile Menu Section -->
    <?php include_once "mobile_menu.php"; ?>
    <!-- Start Side Vav -->
    <?php include_once "side_nav.php"; ?>
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <?php require_once "schema_home.php"; ?>

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1 variation-2 height-600">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="content">
                        <div class="inner">
                            <div class="rbt-new-badge rbt-new-badge-one">
                                <span class="rbt-new-badge-icon">🏆</span> The Leader in Online Learning
                            </div>
                            <h1 class="title">Top-Rated <span class="color-primary">Oracle Fusion & EBS Online Training </span>in India.</h1>
                            <p class="description">Learn from real-time Oracle-certified experts — Oracle Fusion SCM, HCM, Financials, Technical & more. Live online classes | Flexible batches | Placement support included.
                            </p>
                            <div class="slider-btn">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="courses.php">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Explore Oracle Courses</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content">
                        <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active">
                            <div class="swiper-wrapper">
                                <?php $card_index = 0; foreach ($home_page_cards as $hc) : ?>
                                    <!-- Start Single Card  -->
                                    <div class="swiper-slide">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="<?php echo $old_slug[$hc]; ?>">
                                                    <?php if ($card_index === 0): ?>
                                                    <img src="assets/images/course/custom/<?php echo $course_details[$hc]['thumbnail'] ?>" 
                                                         alt="<?php echo $course_details[$hc]['title'] ?>"
                                                         width="370" height="208"
                                                         fetchpriority="high" loading="eager" decoding="sync">
                                                    <?php else: ?>
                                                    <img src="assets/images/course/custom/<?php echo $course_details[$hc]['thumbnail'] ?>" 
                                                         alt="<?php echo $course_details[$hc]['title'] ?>"
                                                         width="370" height="208"
                                                         loading="lazy" decoding="async">
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i><?php echo $course_details[$hc]['lessons'] ?> Lessons</li>
                                                    <li><i class="feather-users"></i><?php echo $course_details[$hc]['students'] ?> Students</li>
                                                </ul>
                                                <p class="rbt-card-title fw-bold"><a href="<?php echo $old_slug[$hc]; ?>"><?php echo $course_details[$hc]['title'] ?></a>
                                                </p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (<?php echo $course_details[$hc]['rating_count'] ?> Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <?php if ($course_details[$hc]['discounted_price']) : ?>
                                                            <span class="current-price"><?php echo $course_details[$hc]['discounted_price']; ?></span>
                                                            <span class="off-price"><?php echo $course_details[$hc]['price']; ?></span>
                                                        <?php else : ?>
                                                            <span class="current-price"><?php echo $course_details[$hc]['price']; ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                <?php $card_index++; endforeach; ?>
                            </div>
                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End Banner Area -->

    <div class="Home-hero-form">
        <?php include_once "claim_instant_offer.php"; ?>
    </div>


    <!-- Start Service Area -->

    <!-- End Service Area -->

    <div class="rbt-service-area bg-color-white rbt-section-gap2 rbt-section-gap2Bottom">
        <div class="container">
            <div class="row row--15 mt_dec--30">
                <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="section-title text-start">
                        <h2 class="title">Explore Our Oracle Fusion & ERP Training Categories</h2>
                        <p class="description mt--20">Explore our full catalog of courses to find the perfect fit for your career growth.</p>
                        <div class="read-more-btn">
                            <a class="rbt-btn btn-gradient radius rbt-marquee-btn marquee-text-y" href="courses.php">
                                <span data-text="All Courses">
                                    All Courses
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6 bg-color bg-card-color-1">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/category/fusion.png" alt="Oracle Fusion" width="60" height="60" loading="lazy" decoding="async">
                                <img class="opacity_image" src="assets/images/category/fusion.png" alt="Oracle Fusion" width="60" height="60" loading="lazy" decoding="async">
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="courses.php?category=fusion">Oracle Fusion Cloud Specialized Training</a></h3>
                                <p class="description">Master Oracle Fusion with comprehensive courses covering implementation, administration, and customization for enterprise success.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6 bg-color bg-card-color-2">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/category/erp.png" alt="Oracle EBS" width="60" height="60" loading="lazy" decoding="async">
                                <img class="opacity_image" src="assets/images/category/erp.png" alt="Oracle EBS" width="60" height="60" loading="lazy" decoding="async">
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="courses.php?category=ebs">Oracle EBS R12 Functional & Technical Training</a></h3>
                                <p class="description">Dive into Oracle E-Business Suite with expert-led courses covering implementation, modules, and administration for effective enterprise management.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

            </div>
        </div>
    </div>




    <!-- Start Course Area -->
    <div class="rbt-course-area bg-color-white rbt-section-gap1">
        <div class="container">
            <div class="row mb--55 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">Popular Courses</span>
                        <h2 class="title">Most Popular <span class="color-primary">Oracle Fusion Online Courses</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="load-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="courses.php">
                            <span data-text="View All Courses">View All Courses</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5 mb--40">
                <?php foreach ($popular_courses as $pc) : ?>
                    <!-- Start Single Course  -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="<?php echo $old_slug[$pc]; ?>">
                                    <img src="assets/images/course/custom/<?php echo $course_details[$pc]['thumbnail'] ?>" 
                                         alt="<?php echo $course_details[$pc]['title'] ?>"
                                         width="370" height="208"
                                         loading="lazy" decoding="async">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (<?php echo $course_details[$pc]['rating_count'] ?> Reviews)</span>
                                    </div>
                                    <!-- <div class="rbt-bookmark-btn">
                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                    </div> -->
                                </div>

                                <h3 class="rbt-card-title"><a href="<?php echo $old_slug[$pc]; ?>"><?php echo $course_details[$pc]['title'] ?></a>
                                </h3>

                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i><?php echo $course_details[$pc]['lessons'] ?> Lessons</li>
                                    <li><i class="feather-users"></i><?php echo $course_details[$pc]['students'] ?> Students</li>
                                </ul>

                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <?php if ($course_details[$pc]['discounted_price']) : ?>
                                            <span class="current-price"><?php echo $course_details[$pc]['discounted_price']; ?></span>
                                            <span class="off-price"><?php echo $course_details[$pc]['price']; ?></span>
                                        <?php else : ?>
                                            <span class="current-price"><?php echo $course_details[$pc]['price']; ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                <?php endforeach; ?>

            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Course Area -->


    <!-- Start Why Choose US -->

    <div class="service-wrapper bg-color-white rbt-section-gap2">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">Soft Online Training Feature</span>
                        <h2 class="title">Why Choose SOT for Your Oracle Career Growth?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row row--15 mt_dec--30" style="align-items: stretch;">
                        <!-- Start Single Card  -->
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30 why-opt" style="display:flex;">
                            <div style="display:flex;flex:1;">
                                <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-1" style="flex:1;">
                                    <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/tutor.png" alt="Expert-Led Guidance Icon" width="60" height="60" loading="lazy" decoding="async">
                                        </div>
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0);">Expert-Led Guidance</a></h3>
                                            <p>Learn from industry professionals and certified trainers who bring real-world experience to every course.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30 why-opt" style="display:flex;">
                            <div style="display:flex;flex:1;">
                                <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-2" style="flex:1;">
                                    <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/tutorial.png" alt="Flexible Learning Icon" width="60" height="60" loading="lazy" decoding="async">
                                        </div>
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0);">Flexible Learning</a></h3>
                                            <p>Access courses anytime, anywhere, with 24/7 availability to fit your schedule and learning pace.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30 why-opt" style="display:flex;">
                            <div style="display:flex;flex:1;">
                                <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-3" style="flex:1;">
                                    <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/document.png" alt="Up-to-date Curriculum Icon" width="60" height="60" loading="lazy" decoding="async">
                                        </div>
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0);">Up-to-date Curriculum</a></h3>
                                            <p>Gain in-depth knowledge with a wide range of courses covering the latest technologies and trends.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30 why-opt" style="display:flex;">
                            <div style="display:flex;flex:1;">
                                <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-4" style="flex:1;">
                                    <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/career.png" alt="Career Advancement Icon" width="60" height="60" loading="lazy" decoding="async">
                                        </div>
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0);">Career Advancement</a></h3>
                                            <p>Equip yourself with skills that are in high demand, enhancing your career prospects.</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Why Choose US -->


    <!-- Start Testimonial Area   -->
    <div class="rbt-testimonial-area bg-color-white overflow-hidden rbt-section-gap1">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb--10">
                            <span class="subtitle bg-primary-opacity">Empowering Your Path to Career Growth</span>
                            <h2 class="title">Student Reviews: <br />Hear from Our Successful Oracle Learners
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-animation-wrapper no-overlay mt--50">
            <div class="scroll-animation scroll-right-left">

                <?php foreach ($all_reviews as $key => $value) : ?>
                    <?php $i = 0;
                    if ($i < 5) : ?>
                        <!-- Start Single Testimonial  -->
                        <div class="single-column-20 bg-theme-gradient-<?php echo $i % 2 == 0 ? "even" : "odd"; ?>">
                            <div class="rbt-testimonial-box">
                                <div class="inner">

                                    <div class="description">
                                        <p class="subtitle-3"><?php echo $value["description"]; ?></p>
                                        <div class="clint-info-wrapper">
                                            <div class="thumb">
                                                <img src="<?php echo $value["image"] ? $value["image"] : "assets/images/reviews/client-02.png"; ?>" alt="<?php echo $key; ?>" width="50" height="50" loading="lazy" decoding="async">
                                            </div>
                                            <div class="client-info">
                                                <p class="title fw-bold"><?php echo $key; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial  -->
                    <?php endif;
                    ++$i; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="scroll-animation-wrapper no-overlay mt--30">
            <div class="scroll-animation scroll-left-right">

                <?php foreach ($all_reviews as $key => $value) : ?>
                    <?php $i = 5;
                    if ($i >= 5) : ?>
                        <!-- Start Single Testimonial  -->
                        <div class="single-column-20 bg-theme-gradient-<?php echo $i % 2 == 0 ? "even" : "odd"; ?>">
                            <div class="rbt-testimonial-box">
                                <div class="inner">

                                    <div class="description">
                                        <p class="subtitle-3"><?php echo $value["description"]; ?></p>
                                        <div class="clint-info-wrapper">
                                            <div class="thumb">
                                                <img src="<?php echo $value["image"] ? $value["image"] : "assets/images/reviews/client-02.png"; ?>" alt="<?php echo $key; ?>" width="50" height="50" loading="lazy" decoding="async">
                                            </div>
                                            <div class="client-info">
                                                <p class="title fw-bold"><?php echo $key; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial  -->
                    <?php endif;
                    ++$i; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area   -->


    <!-- Start Learning Community -->
    <div class="rbt-counterup-area bg-gradient-5 rbt-section-gap2">
        <div class="conter-style-2">
            <div class="container">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="row row--30">
                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="rbt-counterup rbt-hover-03">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/counter-01.png" alt="Icons Images" width="50" height="50" loading="lazy" class="mx-auto" decoding="async">
                                        </div>
                                        <div class="content">
                                            <p class="counter"><span class="odometer" data-count="18747">00</span>
                                            </p>
                                            <span class="subtitle">Learners &amp; counting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->

                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--60">
                                <div class="rbt-counterup rbt-hover-03">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/counter-02.png" alt="Icons Images" width="50" height="50" loading="lazy" class="mx-auto" decoding="async">
                                        </div>
                                        <div class="content">
                                            <p class="counter"><span class="odometer" data-count="16">00</span>
                                            </p>
                                            <span class="subtitle">Courses & Video</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->

                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--40">
                                <div class="rbt-counterup rbt-hover-03 transform-sm-none" data-parallax='{"x": 0, "y": -60}'>
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/counter-03.png" alt="Icons Images" width="50" height="50" loading="lazy" class="mx-auto" decoding="async">
                                        </div>
                                        <div class="content">
                                            <p class="counter"><span class="odometer" data-count="15439">00</span>
                                            </p>
                                            <span class="subtitle">Certified Students</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->

                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--20 mt_mobile--40">
                                <div class="rbt-counterup rbt-hover-03 transform-sm-none" data-parallax='{"x": 0, "y": 60}'>
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/counter-04.png" alt="Icons Images" width="50" height="50" loading="lazy" class="mx-auto" decoding="async">
                                        </div>
                                        <div class="content">
                                            <p class="counter"><span class="odometer" data-count="20">00</span>
                                            </p>
                                            <span class="subtitle">Expert Trainers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="inner pl--50 pl_sm--0 pl_md--0">
                            <div class="section-title text-start">
                                <span class="subtitle bg-pink-opacity">Why Choose Us</span>
                                <h2 class="title"> Transform Your Career with Professional Certification</h2>
                                <p class="description has-medium-font-size mt--20 mb--0">Choose SOT for our commitment to expert-led instruction, flexible learning options, comprehensive course offerings, career-focused results, and supportive community, all designed to empower your professional growth and success.</p>
                            </div>

                            <div class="rbt-feature-wrapper mt--30">

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title">Career Support Services</h3>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-secondary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title">Learn From Anywhere</h3>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-aperture"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title">Industry-Expert Instructors</h3>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Learning Community -->

    <?php

    $sql = "SELECT blog_id, b.title, description, thumbnail, b.banner, b.added_date, u.first_name, u.last_name FROM blogs as b left join users as u on b.user_id = u.id WHERE b.status = 1 order by b.added_date desc LIMIT 0, 4";
    $result = $conn->query($sql);

    $blogs = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $blogs[] = $row;
        }
    }

    ?>
    <!-- Start Blog Style -->
    <div class="rbt-rbt-blog-area rbt-section-gap bg-gradient-1">
        <div class="container">
            <div class="row mb--55 row--30 align-items-end">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">Our Posts</span>
                        <h2 class="title">Latest Oracle Fusion Industry Insights & Technical Blogs</h2>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">

                <!-- Start Single Card  -->
                <?php foreach ($blogs as $blog) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>">
                                    <img src="<?php echo 'https://admin.softonlinetraining.com/uploads/blog/thumbnail/' . $blog['thumbnail']; ?>" alt="<?php echo $blog['title']; ?>" width="370" height="208" loading="lazy" decoding="async"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h3 class="rbt-card-title"><a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>"><?php echo $blog['title']; ?></a></h3>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>">Learn
                                        More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- End Single Card  -->

            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Blog Style -->

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiperEl = document.querySelector('.swiper');
            if (swiperEl && swiperEl.swiper) {
                var swiper = swiperEl.swiper;
                var counter = 0;

                setInterval(function() {
                    if (counter < 3) {
                        swiper.slideNext();
                    } else if (counter < 6) {
                        swiper.slidePrev();
                    }
                    counter = (counter + 1) % 6;
                }, 1500);
            }
        });
    </script>
</body>

</html>