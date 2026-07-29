<?php
/**
 * Performance Optimization Configuration
 * This file contains non-critical data that can be lazy-loaded
 * Reduces initial page load time by deferring data processing
 */

// Function to get course details on demand
function get_course_details($course_key = null) {
    $course_details = array();
    $course_details['oracle-fusion-scm-training'] = array('thumbnail' => 'scm.jpg', 'rating' => '4.9', 'rating_count' => '2.9K', 'title' => 'Oracle Fusion SCM Online Training', 'lessons' => '80', 'students' => '3.6K', 'price' => '₹35,000<span class="taxes"> + Taxes</span>', 'discounted_price' => '₹30,000<span class="taxes"> + Taxes</span>', 'broucher' => '1718697092.pdf','mobile_demo_video'=>'https://www.youtube.com/embed/ZqQ95_6YT8w', 'demo_video' => 'https://www.youtube.com/watch?v=ZqQ95_6YT8w', 'duration' => '3 Months', 'instance_access' => '6 Months', 'video_access' => '1 Year');
    $course_details['oracle-fusion-hcm-online-training'] = array('thumbnail' => 'hcm.jpg', 'rating' => '4.8', 'rating_count' => '1.7K', 'title' => 'Oracle Fusion HCM Online Training', 'lessons' => '50', 'students' => '2.4K', 'price' => '₹30,000<span class="taxes"> + Taxes</span>', 'discounted_price' => '₹25,000<span class="taxes"> + Taxes</span>', 'broucher' => '1718697092.pdf','mobile_demo_video'=>'https://www.youtube.com/embed/ru5-gu_K9uQ', 'demo_video' => 'https://www.youtube.com/watch?v=ru5-gu_K9uQ', 'duration' => '3 Months', 'instance_access' => '6 Months', 'video_access' => '1 Year');
    
    if ($course_key === null) {
        return $course_details;
    }
    return isset($course_details[$course_key]) ? $course_details[$course_key] : null;
}

// Function to get SEO details on demand
function get_seo_details($page_key = null) {
    $seo_details = array();
    $seo_details['oracle-fusion-scm-training'] = array("og-title"=>"Master Oracle Fusion SCM Online Training with Redwood AI Integration | Soft Online Training","meta-title"=>"Oracle Fusion SCM Online Training - Expert SCM Course", "meta-description"=>"Join the best Oracle Fusion SCM online training for comprehensive Oracle SCM Cloud Training. Get skilled with real projects and 100% placement support", "meta-keywords"=>"Oracle Fusion SCM Training,oracle fusion scm online training,Oracle Fusion SCM Course,Oracle SCM Cloud Training");
    
    if ($page_key === null) {
        return $seo_details;
    }
    return isset($seo_details[$page_key]) ? $seo_details[$page_key] : null;
}

// Compression helper
function compress_json_data($data) {
    return json_encode($data, JSON_UNESCAPED_SLASHES);
}

// Cache key generator
function get_cache_key($prefix, $identifier = '') {
    return $prefix . ($identifier ? '_' . md5($identifier) : '');
}
?>
