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

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="/">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">All Courses</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">All Courses</h1>
                            </div>

                            <p class="description">Learn, Grow, and Succeed with Our Expert-Led Courses!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
            <!-- Start Course Top  -->
            <!-- <div class="rbt-course-top-wrapper mt--40">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                <div class="rbt-short-item">
                                    <span class="course-index">Showing 1-9 of 19 results</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                <div class="rbt-short-item">
                                    <form action="#" class="rbt-search-style me-0">
                                        <input type="text" placeholder="Search Your Course..">
                                        <button type="submit" class="rbt-search-btn rbt-round-btn">
                                            <i class="feather-search"></i>
                                        </button>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
            <!-- End Course Top  -->
        </div>
    </div>

    <!-- Start Card Style -->
    <div class="rbt-section-overlayping-top">
        <div class="container">
            <!-- Start Card Area -->
            <div class="row g-5">


                <?php foreach ($slugs as $slug) : ?>
                    <?php $similar_course_details = $course_details[$slug]; ?>
                    <!-- Start Single Course  -->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="<?php echo $old_slug[$slug]; ?>">
                                    <img src="assets/images/course/custom/<?php echo $similar_course_details['thumbnail']; ?>" alt="<?php echo $similar_course_details['title']; ?>">
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
                                        <span class="rating-count"> (<?php echo $similar_course_details['rating_count']; ?> Reviews)</span>
                                    </div>
                                </div>

                                <h4 class="rbt-card-title"><a href="<?php echo $old_slug[$slug]; ?>"><?php echo $similar_course_details['title']; ?></a>
                                </h4>

                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i><?php echo $similar_course_details['lessons']; ?> Lessons</li>
                                    <li><i class="feather-users"></i><?php echo $similar_course_details['students']; ?> Students</li>
                                </ul>

                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <?php if ($similar_course_details['discounted_price']) : ?>
                                            <span class="current-price"><?php echo $similar_course_details['discounted_price']; ?></span>
                                            <span class="off-price"><?php echo $similar_course_details['price']; ?></span>
                                        <?php else : ?>
                                            <span class="current-price"><?php echo $similar_course_details['price']; ?></span>
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
            <!-- <div class="row">
                <div class="col-lg-12 mt--60">
                    <nav>
                        <ul class="rbt-pagination">
                            <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div> -->
        </div>
    </div>
    <!-- End Card Style -->

    <!-- Start Call To Action  -->

    <!-- End Call To Action  -->

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