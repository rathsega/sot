<?php

function convertAbbreviationToNumber($abbreviated)
{
    // Remove any commas from the input
    $abbreviated = str_replace(',', '', $abbreviated);

    // Check for the presence of 'k', 'm', 'b', etc.
    if (stripos($abbreviated, 'k') !== false) {
        return (float)$abbreviated * 1000;
    } elseif (stripos($abbreviated, 'm') !== false) {
        return (float)$abbreviated * 1000000;
    } elseif (stripos($abbreviated, 'b') !== false) {
        return (float)$abbreviated * 1000000000;
    } elseif (stripos($abbreviated, 't') !== false) {
        return (float)$abbreviated * 1000000000000;
    } else {
        // If no abbreviation is found, just return the number
        return (float)$abbreviated;
    }
}

preg_match('/₹([\d,]+)/', $course_details[$current_slug]['discounted_price'] ? $course_details[$current_slug]['discounted_price'] : $course_details[$current_slug]['price'], $matches);
// Check if the regex matched and extracted a value
if (isset($matches[1])) {
    // The extracted number with commas
    $numberWithCommas = $matches[1];

    // Remove commas to get the raw number
    $number = str_replace(',', '', $numberWithCommas);

    // Convert the string to an integer
    $schema_price = (string)$number; // Outputs: Extracted number: 30000
}

$startDate = strtotime("now");
$endDate = strtotime("+2 month");

// Generate a random timestamp between start date and end date
$randomTimestamp = rand($startDate, $endDate);

// Convert the random timestamp to a date
$randomFutureDate = date("Y-m-d", $randomTimestamp);
$startDate = date("Y-m-d", $startDate);
$endDate = date("Y-m-d", $endDate);
$schema_data = [
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => $course_details[$current_slug]['title'],
    "image" => "https://softonlinetraining.com/assets/images/course/custom/" . $course_details[$current_slug]['thumbnail'],
    "description" => $seo_details[$current_slug]["meta-description"],
    "sku" => "SOT" . array_search($current_slug, $slugs),
    "mpn" => "SOT" . array_search($current_slug, $slugs),
    "brand" => [
        "@type" => "Brand",
        "name" => "Soft Online Training"
    ],
    "review" => [
        "@type" => "Review",
        "reviewRating" => [
            "@type" => "Rating",
            "ratingValue" => $course_details[$current_slug]['rating'],
            "bestRating" => "5"
        ],
        "author" => [
            "@type" => "Person",
            "name" => "Joshiram"
        ]
    ],
    "aggregateRating" => [
        "@type" => "aggregateRating",
        "ratingValue" => $course_details[$current_slug]['rating'],
        "reviewCount" => convertAbbreviationToNumber($course_details[$current_slug]['rating_count'])
    ],
    "offers" => [
        "@type" => "Offer",
        "url" => "https://softonlinetraining.com/" . $current_slug,
        "priceCurrency" => "INR",
        "price" => $schema_price,
        "priceValidUntil" => $randomFutureDate,
        "itemCondition" => "https://schema.org/UsedCondition",
        "availability" => "https://schema.org/InStock"
    ]
];

?>

<!-- <script type="application/ld+json">
    <?php //echo json_encode($schema_data); ?>
</script> -->

<?php

$review_schema = [
    "@context" => "https://schema.org",

    "@type" => "EducationEvent",
    "name" => "Weekday-" . $course_details[$current_slug]['title'],
    "description" => $seo_details[$current_slug]["meta-description"],
    "performer" => "Soft Online Training",
    "eventStatus" => "https://schema.org/EventScheduled",
    "eventAttendanceMode" => "https://schema.org/OnlineEventAttendanceMode",

    "location" => [
        "@type" => "VirtualLocation",
        "url" => "https://softonlinetraining.com/" . $current_slug
    ],

    "organizer" => [
        "@type" => "Organization",
        "name" => "Soft Onlien Training",
        "url" => "https://softonlinetraining.com/"
    ],

    "startDate" => $startDate,
    "endDate" => $endDate,

    "url" => "https://softonlinetraining.com/" . $current_slug,
    "duration" => $course_details[$current_slug]['lessons']
];

?>

<?php if ($current_slug == 'oracle-fusion-scm-training' || $current_slug == 'oracle-fusion-hcm-online-training' || $current_slug == 'oracle-fusion-cloud-financials'): ?>
<script type="application/ld+json">
    <?php

     echo json_encode($schema_data);
     echo json_encode($review_schema); 
     
     ?>
</script>
<?php endif; ?>

<?php 

    if($current_slug == 'oracle-fusion-scm-training'){
        require_once 'schema_scm.php';
    } else if($current_slug == 'oracle-fusion-hcm-online-training'){
        require_once 'schema_hcm.php';
    } else if($current_slug == 'oracle-fusion-cloud-financials'){
        require_once 'schema_financials.php';
    }
?>