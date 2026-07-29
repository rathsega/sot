<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include_once "all_courses_details.php"; ?>
    <title>Thank You | Soft Online Training</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="Thank you for contacting Soft Online Training. Our team will get back to you shortly." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once "common_css.php"; ?>
    <style>
        .thankyou-section {
            padding: 100px 0 80px;
            background: #fff;
            min-height: 60vh;
            display: flex;
            align-items: center;
        }
        .thankyou-icon-wrap {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2f57ef 0%, #b966e7 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 32px;
            box-shadow: 0 12px 40px rgba(47,87,239,0.25);
        }
        .thankyou-icon-wrap i {
            font-size: 46px;
            color: #fff;
        }
        .thankyou-section .title {
            font-size: 42px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 16px;
            line-height: 1.2;
        }
        .thankyou-section .subtitle-text {
            font-size: 18px;
            color: #6b7385;
            max-width: 560px;
            margin: 0 auto 40px;
            line-height: 1.7;
        }
        .thankyou-info-card {
            background: #f7f8fc;
            border-radius: 12px;
            padding: 28px 32px;
            display: inline-flex;
            align-items: center;
            gap: 14px;
            margin: 8px;
            transition: box-shadow 0.2s;
        }
        .thankyou-info-card:hover {
            box-shadow: 0 6px 24px rgba(47,87,239,0.12);
        }
        .thankyou-info-card .card-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2f57ef 0%, #b966e7 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .thankyou-info-card .card-icon i {
            font-size: 20px;
            color: #fff;
        }
        .thankyou-info-card .card-text strong {
            display: block;
            font-size: 14px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 2px;
        }
        .thankyou-info-card .card-text span {
            font-size: 14px;
            color: #6b7385;
        }
        .thankyou-cta-wrap {
            margin-top: 48px;
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }
        @media (max-width: 576px) {
            .thankyou-section .title { font-size: 28px; }
            .thankyou-info-card { padding: 20px; }
        }
    </style>
</head>

<body class="rbt-header-sticky">

    <!-- Start Header Area -->
    <?php include_once "header.php"; ?>

    <!-- Mobile Menu Section -->
    <?php include_once "mobile_menu.php"; ?>
    <!-- Start Side Nav -->
    <?php include_once "side_nav.php"; ?>
    <!-- End Side Nav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start Banner Area -->
    <div class="slider-area rbt-banner-10 height-350 bg_image bg_image--11 relative " style="padding: 80px 0px!important;" data-black-overlay="6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <div class="section-title mb--20">
                            <span class="subtitle bg-coral-opacity">Form Submitted</span>
                        </div>
                        <h1 class="text-white">Thank You for Reaching Out!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start Thank You Content -->
    <div class="thankyou-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <div class="thankyou-icon-wrap">
                        <i class="feather-check"></i>
                    </div>

                    <h2 class="title">We've Received Your Details!</h2>
                    <p class="subtitle-text">
                        Thank you for contacting <strong>Soft Online Training</strong>. One of our expert advisors will reach out to you within <strong>24 hours</strong> to guide you on the best course for your career.
                    </p>

                    <!-- Contact Info Cards -->
                    <div class="d-flex flex-wrap justify-content-center mt--20">
                        <div class="thankyou-info-card">
                            <div class="card-icon">
                                <i class="feather-phone"></i>
                            </div>
                            <div class="card-text">
                                <strong>Call Us Directly</strong>
                                <span><a href="tel:+917995883556">+91-799-588-3556</a></span>
                            </div>
                        </div>

                        <div class="thankyou-info-card">
                            <div class="card-icon">
                                <i class="feather-mail"></i>
                            </div>
                            <div class="card-text">
                                <strong>Email Us</strong>
                                <span><a href="mailto:info@softonlinetraining.com">info@softonlinetraining.com</a></span>
                            </div>
                        </div>

                        <div class="thankyou-info-card">
                            <div class="card-icon">
                                <i class="feather-clock"></i>
                            </div>
                            <div class="card-text">
                                <strong>Response Time</strong>
                                <span>Within 24 hours</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="thankyou-cta-wrap">
                        <a href="/" class="rbt-btn btn-gradient hover-icon-reverse">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Back to Home</span>
                                <span class="btn-icon"><i class="feather-home"></i></span>
                                <span class="btn-icon"><i class="feather-home"></i></span>
                            </span>
                        </a>
                        <a href="courses.php" class="rbt-btn btn-border hover-icon-reverse">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Explore Courses</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Thank You Content -->

    <!-- Start Footer area -->
    <?php include_once "footer.php"; ?>
    <!-- End Footer area -->

    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <?php include_once "common_js.php"; ?>

</body>

</html>
