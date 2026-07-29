<?php

/*$other_locations_list = array();
$other_locations_list['oracle-fusion-scm-training'] = ['oracle-fusion-scm-training-in-hyderabad', 'oracle-fusion-scm-training-in-bangalore', 'oracle-fusion-scm-training-in-pune', 'oracle-apps-scm-training-in-chennai'];
$other_locations_list['oracle-fusion-scm-training-in-hyderabad'] = ['oracle-fusion-scm-training-in-hyderabad', 'oracle-fusion-scm-training-in-bangalore', 'oracle-fusion-scm-training-in-pune', 'oracle-apps-scm-training-in-chennai'];
$other_locations_list['oracle-fusion-scm-training-in-bangalore'] = ['oracle-fusion-scm-training-in-hyderabad', 'oracle-fusion-scm-training-in-bangalore', 'oracle-fusion-scm-training-in-pune', 'oracle-apps-scm-training-in-chennai'];
$other_locations_list['oracle-fusion-scm-training-in-pune'] = ['oracle-fusion-scm-training-in-hyderabad', 'oracle-fusion-scm-training-in-bangalore', 'oracle-fusion-scm-training-in-pune', 'oracle-apps-scm-training-in-chennai'];
$other_locations_list['oracle-apps-scm-training-in-chennai'] = ['oracle-fusion-scm-training-in-hyderabad', 'oracle-fusion-scm-training-in-bangalore', 'oracle-fusion-scm-training-in-pune', 'oracle-apps-scm-training-in-chennai'];

$other_locations_list['oracle-fusion-hcm-online-training'] = ['oracle-fusion-hcm-training-in-hyderabad', 'oracle-fusion-hcm-training-in-bangalore', 'oracle-fusion-hcm-training-in-pune', 'oracle-fusion-hcm-training-in-chennai'];
$other_locations_list['oracle-fusion-hcm-training-in-hyderabad'] = ['oracle-fusion-hcm-training-in-hyderabad', 'oracle-fusion-hcm-training-in-bangalore', 'oracle-fusion-hcm-training-in-pune', 'oracle-fusion-hcm-training-in-chennai'];
$other_locations_list['oracle-fusion-hcm-training-in-bangalore'] = ['oracle-fusion-hcm-training-in-hyderabad', 'oracle-fusion-hcm-training-in-bangalore', 'oracle-fusion-hcm-training-in-pune', 'oracle-fusion-hcm-training-in-chennai'];
$other_locations_list['oracle-fusion-hcm-training-in-pune'] = ['oracle-fusion-hcm-training-in-hyderabad', 'oracle-fusion-hcm-training-in-bangalore', 'oracle-fusion-hcm-training-in-pune', 'oracle-fusion-hcm-training-in-chennai'];
$other_locations_list['oracle-fusion-hcm-training-in-chennai'] = ['oracle-fusion-hcm-training-in-hyderabad', 'oracle-fusion-hcm-training-in-bangalore', 'oracle-fusion-hcm-training-in-pune', 'oracle-fusion-hcm-training-in-chennai'];

$other_locations_list['oracle-fusion-cloud-financials'] = ['oracle-finance-course-in-hyderabad', 'oracle-finance-course-in-bangalore', 'oracle-finance-course-in-pune', 'oracle-finance-course-in-chennai'];
$other_locations_list['oracle-finance-course-in-hyderabad'] = ['oracle-finance-course-in-hyderabad', 'oracle-finance-course-in-bangalore', 'oracle-finance-course-in-pune', 'oracle-finance-course-in-chennai'];
$other_locations_list['oracle-finance-course-in-bangalore'] = ['oracle-finance-course-in-hyderabad', 'oracle-finance-course-in-bangalore', 'oracle-finance-course-in-pune', 'oracle-finance-course-in-chennai'];
$other_locations_list['oracle-finance-course-in-pune'] = ['oracle-finance-course-in-hyderabad', 'oracle-finance-course-in-bangalore', 'oracle-finance-course-in-pune', 'oracle-finance-course-in-chennai'];
$other_locations_list['oracle-finance-course-in-chennai'] = ['oracle-finance-course-in-hyderabad', 'oracle-finance-course-in-bangalore', 'oracle-finance-course-in-pune', 'oracle-finance-course-in-chennai'];

$other_locations_list['oracle-fusion-technical-online-training'] = ['oracle-fusion-technical-training-in-hyderabad', 'oracle-fusion-technical-training-in-bangalore', 'oracle-fusion-technical-training-in-pune', 'oracle-fusion-technical-training-in-chennai'];
$other_locations_list['oracle-fusion-technical-training-in-hyderabad'] = ['oracle-fusion-technical-training-in-hyderabad', 'oracle-fusion-technical-training-in-bangalore', 'oracle-fusion-technical-training-in-pune', 'oracle-fusion-technical-training-in-chennai'];
$other_locations_list['oracle-fusion-technical-training-in-bangalore'] = ['oracle-fusion-technical-training-in-hyderabad', 'oracle-fusion-technical-training-in-bangalore', 'oracle-fusion-technical-training-in-pune', 'oracle-fusion-technical-training-in-chennai'];
$other_locations_list['oracle-fusion-technical-training-in-pune'] = ['oracle-fusion-technical-training-in-hyderabad', 'oracle-fusion-technical-training-in-bangalore', 'oracle-fusion-technical-training-in-pune', 'oracle-fusion-technical-training-in-chennai'];
$other_locations_list['oracle-fusion-technical-training-in-chennai'] = ['oracle-fusion-technical-training-in-hyderabad', 'oracle-fusion-technical-training-in-bangalore', 'oracle-fusion-technical-training-in-pune', 'oracle-fusion-technical-training-in-chennai'];

$other_locations = $other_locations_list[$current_slug]? $other_locations_list[$current_slug] : [];*/
$other_locations_list = array();
$other_locations_list['oracle-fusion-scm-training'] = [
    'hyderabad' => 'oracle-fusion-scm-training-in-hyderabad',
    'bangalore' => 'oracle-fusion-scm-training-in-bangalore',
    'pune' => 'oracle-fusion-scm-training-in-pune',
    'chennai' => 'oracle-apps-scm-training-in-chennai'
];

$other_locations_list['oracle-fusion-hcm-online-training'] = [
    'hyderabad' => 'oracle-fusion-hcm-training-in-hyderabad',
    'bangalore' => 'oracle-fusion-hcm-training-in-bangalore',
    'pune' => 'oracle-fusion-hcm-training-in-pune',
    'chennai' => 'oracle-fusion-hcm-training-in-chennai'
];

$other_locations_list['oracle-fusion-cloud-financials'] = [
    'hyderabad' => 'oracle-finance-course-in-hyderabad',
    'bangalore' => 'oracle-finance-course-in-bangalore',
    'pune' => 'oracle-finance-course-in-pune',
    'chennai' => 'oracle-finance-course-in-chennai'
];

$other_locations_list['oracle-fusion-technical-online-training'] = [
    'hyderabad' => 'oracle-fusion-technical-training-in-hyderabad',
    'bangalore' => 'oracle-fusion-technical-training-in-bangalore',
    'pune' => 'oracle-fusion-technical-training-in-pune',
    'chennai' => 'oracle-fusion-technical-training-in-chennai'
];

function findCourseByLocation($location, $other_locations_list) {
    foreach ($other_locations_list as $course => $locations) {
        if (in_array($location, $locations)) {
            return $course;
        }
    }
    return null; // return null if the location is not found
}

if(isset($other_locations_list[$current_slug])){
    $other_locations = $other_locations_list[$current_slug];
}else{
    $other_locations_key = findCourseByLocation($current_slug, $other_locations_list);
    $other_locations = $other_locations_key ? $other_locations_list[$other_locations_key] : [];
}
?>

<?php if(count($other_locations) > 0): ?>
<div class="rbt-related-course-area bg-color-white pt--10 pb--35">
    <div class="container">
        <div class="section-title">
            <span class="subtitle bg-primary-opacity">Locations</span>
            <h2 class="about-heading">Explore this course in the following cities</h2>
        </div>
        <div class="row g-5 mt--10">
            <?php foreach ($other_locations as $key => $other_location_slug) : ?>
                <?php $other_location_details = $course_details[$other_location_slug]; ?>
                <!-- Start Single Course  -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 mt--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover" style="box-shadow: none !important; min-height:unset !important;">
                        <div class="rbt-card-img text-center">
                            <a href="<?php echo $old_slug[$other_location_slug]; ?>">
                                <img src="assets/images/locations/<?php echo $key; ?>.png" style="width:25% !important; aspect-ratio: 1 / 1;" alt="<?php echo $other_location_details['title']; ?>">
                            </a>
                        </div>
                        <div class="rbt-card-body text-center" style="padding-top: 5px !important;">
                            <h3 class="mb--0"><a href="<?php echo $old_slug[$other_location_slug]; ?>"><span style="color:#62656b;"><?php echo  ucwords($key); ?></span></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
            <?php endforeach; ?>


        </div>
    </div>
</div>
<?php endif; ?>