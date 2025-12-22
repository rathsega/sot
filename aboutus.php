<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include_once "all_courses_details.php"; ?>
    <?php include_once "meta-data.php"; ?>
    <?php include_once "common_css.php"; ?>
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

    <!-- Start Banner Area  -->
<div class="slider-area rbt-banner-10 height-550 bg_image bg_image--11" data-black-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <div class="section-title mb--20">
                            <span class="subtitle bg-coral-opacity">How We Work</span>
                        </div>
                        <h1 class="title display-one text-white">Take Challenge for Build Your Life. <br>The World Most
                            Lessons for Back to Your Life.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area  -->

    <!-- Start About Area  -->
    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gapTop">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail image-1">
                            <img data-parallax='{"x": 0, "y": -20}' src="assets/images/about/1.jpg" alt="About Us Images 1">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="assets/images/about/2.jpg" alt="About Us Images 2">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="assets/images/about/3.jpg" alt="About Us Images 3">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">Know About Us</span>
                            <h2 class="title">Know About Soft Online Training <br /> Learning Platform</h2>
                        </div>
                        <p class="description mt--30">At Soft Online Training, we're dedicated to revolutionizing the way you learn. Our platform is designed to offer flexible, accessible, and high-quality education tailored to your needs. Here’s what sets us apart:</p>
                        <!-- Start Feature List  -->
                        <div class="rbt-feature-wrapper mt--40">

                            <div class="rbt-feature feature-style-1">
                                <div class="icon bg-pink-opacity">
                                    <i class="feather-heart"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Flexible Classes</h6>
                                    <p class="feature-description">With our 24/7 course access, you can tailor your learning to fit your lifestyle. Anywhere, at any time, you can learn at your own pace.</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1">
                                <div class="icon bg-primary-opacity">
                                    <i class="feather-book"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Learn From Anywhere</h6>
                                    <p class="feature-description">Say goodbye to the traditional classroom. With Soft Online Training, you can learn from your laptop, tablet, or smartphone—no matter where your busy life takes you.
                                    </p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1">
                                <div class="icon bg-coral-opacity">
                                    <i class="feather-monitor"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Industry Experts</h6>
                                    <p class="feature-description">Gain insights and skills from top professionals in your field. Our courses are designed and taught by experienced industry experts, ensuring you get the most relevant and up-to-date education.</p>
                                </div>
                            </div>
                        </div>

                        <!-- End Feature List  -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->


    <div class="rbt-testimonial-area bg-color-white pb--80 overflow-hidden">
        <div class="container-fluid">
            <div class="row g-5 align-items-center">
                <div class="col-xl-3 mt--100">
                    <div class="section-title pl--100 pl_sm--30">
                        <span class="subtitle bg-pink-opacity">Learners Feedback</span>
                        <h2 class="title">What Our Learners Say</h2>
                        <div class="veiw-more-btn mt--20">
                            <a class="rbt-btn btn-gradient rbt-marquee-btn marquee-text-y" href="contactus.php">
                                <span data-text="Contact Us">Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="overflow-hidden">
                        <div class="scroll-animation-wrapper pt--50 pb--30">
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
                                                                <img src="<?php echo $value["image"] ? $value["image"] : "assets/images/reviews/client-02.png"; ?>" alt="<?php echo $key; ?>">
                                                            </div>
                                                            <div class="client-info">
                                                                <h5 class="title"><?php echo $key; ?></h5>
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
                        <div class="scroll-animation-wrapper pb--50">
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
                                                                <img src="<?php echo $value["image"] ? $value["image"] : "assets/images/reviews/client-02.png"; ?>" alt="<?php echo $key; ?>">
                                                            </div>
                                                            <div class="client-info">
                                                                <h5 class="title"><?php echo $key; ?></h5>
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
                </div>
            </div>
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

</html>