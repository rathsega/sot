<?php

$similar_courses_list = array();
$similar_courses_list['oracle-fusion-scm-training'] = ['oracle-fusion-procurement-training', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-oic-training', 'oracle-fusion-technical-online-training'];
$similar_courses_list['oracle-fusion-hcm-online-training'] = ['oracle-fusion-orc', 'oracle-fusion-oic-training', 'oracle-fusion-technical-online-training', 'oracle-gtm-online-training'];
$similar_courses_list['oracle-fusion-cloud-financials'] = ['oracle-gtm-online-training', 'oracle-fusion-wms-cloud-training', 'oracle-r12-apps-financial-training', 'oracle-fusion-oic-training'];
$similar_courses_list['oracle-fusion-technical-online-training'] = ['oracle-fusion-oic-training', 'oracle-fusion-scm-training', 'oracle-fusion-hcm-online-training', 'oracle-fusion-cloud-financials'];
$similar_courses_list['oracle-fusion-procurement-training'] = ['oracle-fusion-scm-training', 'oracle-fusion-wms-cloud-training', 'oracle-transportation-management-training', 'oracle-gtm-online-training'];
$similar_courses_list['oracle-fusion-wms-cloud-training'] = ['oracle-fusion-scm-training', 'oracle-fusion-procurement-training', 'oracle-transportation-management-training', 'oracle-gtm-online-training'];
$similar_courses_list['oracle-transportation-management-training'] = ['oracle-fusion-procurement-training', 'oracle-fusion-scm-training', 'oracle-fusion-oic-training', 'oracle-fusion-wms-cloud-training'];
$similar_courses_list['oracle-gtm-online-training'] = ['oracle-fusion-scm-training', 'oracle-fusion-procurement-training', 'oracle-transportation-management-training', 'oracle-fusion-oic-training'];
$similar_courses_list['oracle-scm-training-online'] = ['oracle-fusion-procurement-training', 'oracle-fusion-scm-training', 'oracle-fusion-technical-online-training', 'oracle-fusion-oic-training'];
$similar_courses_list['oracle-r12-apps-financial-training'] = ['oracle-fusion-cloud-financials', 'oracle-gtm-online-training', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-oic-training'];
$similar_courses_list['oracle-fusion-oic-training'] = ['oracle-fusion-technical-online-training', 'oracle-fusion-scm-training', 'oracle-fusion-hcm-online-training', 'oracle-fusion-wms-cloud-training'];
$similar_courses_list['oracle-fusion-orc'] = ['oracle-fusion-hcm-online-training', 'oracle-fusion-technical-online-training', 'oracle-fusion-oic-training', 'oracle-fusion-wms-cloud-training'];
$similar_courses_list['oracle-fusion-scm-training-in-hyderabad'] = ['oracle-fusion-scm-training', 'oracle-fusion-procurement-training', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-technical-online-training'];
$similar_courses_list['oracle-fusion-scm-training-in-bangalore'] = ['oracle-fusion-scm-training', 'oracle-fusion-procurement-training', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-technical-online-training'];
$similar_courses_list['oracle-fusion-scm-training-in-pune'] = ['oracle-fusion-scm-training', 'oracle-fusion-procurement-training', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-technical-online-training'];
$similar_courses_list['oracle-apps-scm-training-in-chennai'] = ['oracle-fusion-scm-training', 'oracle-fusion-procurement-training', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-technical-online-training'];
$similar_courses_list['oracle-fusion-hcm-training-in-hyderabad'] = ['oracle-fusion-hcm-online-training', 'oracle-fusion-orc', 'oracle-fusion-oic-training', 'oracle-fusion-technical-online-training'];
$similar_courses_list['oracle-fusion-hcm-training-in-bangalore'] = ['oracle-fusion-hcm-online-training', 'oracle-fusion-orc', 'oracle-fusion-oic-training', 'oracle-fusion-technical-online-training'];
$similar_courses_list['oracle-fusion-hcm-training-in-pune'] = ['oracle-fusion-hcm-online-training', 'oracle-fusion-orc', 'oracle-fusion-oic-training', 'oracle-fusion-technical-online-training'];
$similar_courses_list['oracle-fusion-hcm-training-in-chennai'] = ['oracle-fusion-hcm-online-training', 'oracle-fusion-orc', 'oracle-fusion-oic-training', 'oracle-fusion-technical-online-training'];
$similar_courses_list['oracle-finance-course-in-hyderabad'] = ['oracle-fusion-cloud-financials', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-oic-training', 'oracle-gtm-online-training'];
$similar_courses_list['oracle-finance-course-in-bangalore'] = ['oracle-fusion-cloud-financials', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-oic-training', 'oracle-gtm-online-training'];
$similar_courses_list['oracle-finance-course-in-pune'] = ['oracle-fusion-cloud-financials', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-oic-training', 'oracle-gtm-online-training'];
$similar_courses_list['oracle-finance-course-in-chennai'] = ['oracle-fusion-cloud-financials', 'oracle-fusion-wms-cloud-training', 'oracle-fusion-oic-training', 'oracle-gtm-online-training'];
$similar_courses_list['oracle-fusion-technical-training-in-hyderabad'] = ['oracle-fusion-technical-online-training', 'oracle-fusion-oic-training', 'oracle-fusion-scm-training', 'oracle-fusion-hcm-online-training'];
$similar_courses_list['oracle-fusion-technical-training-in-bangalore'] = ['oracle-fusion-technical-online-training', 'oracle-fusion-oic-training', 'oracle-fusion-scm-training', 'oracle-fusion-hcm-online-training'];
$similar_courses_list['oracle-fusion-technical-training-in-pune'] = ['oracle-fusion-technical-online-training', 'oracle-fusion-oic-training', 'oracle-fusion-scm-training', 'oracle-fusion-hcm-online-training'];
$similar_courses_list['oracle-fusion-technical-training-in-chennai'] = ['oracle-fusion-technical-online-training', 'oracle-fusion-oic-training', 'oracle-fusion-scm-training', 'oracle-fusion-hcm-online-training'];
$similar_courses = $similar_courses_list[$current_slug];
?>

<div class="rbt-related-course-area bg-color-white pt--60 rbt-section-gap2Bottom">
    <div class="container">
        <div class="section-title mb--30">
            <span class="subtitle bg-primary-opacity">More Similar Courses</span>
            <h2 class="about-heading">Related Oracle Fusion Cloud Training Courses</h2>
        </div>
        <div class="row g-5">
            <?php foreach ($similar_courses as $similar_course_slug) : ?>
                <?php $similar_course_details = $course_details[$similar_course_slug]; ?>
                <!-- Start Single Course  -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="<?php echo $old_slug[$similar_course_slug]; ?>">
                                <img src="assets/images/course/custom/<?php echo $similar_course_details['thumbnail']; ?>" alt="<?php echo $similar_course_details['title']; ?>" width="270" height="180" loading="lazy" decoding="async">
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

                            <h3 class="rbt-card-title"><a href="<?php echo $old_slug[$similar_course_slug]; ?>"><?php echo $similar_course_details['title']; ?></a>
                            </h3>

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
    </div>
</div>


<?php include_once "location_buttons.php"; ?>