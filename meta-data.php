    <title><?php echo $seo_details[$current_slug]["meta-title"]; ?></title>
    <meta name="keywords" content="<?php echo $seo_details[$current_slug]["meta-keywords"]; ?>" />
	<meta name="description" content="<?php echo $seo_details[$current_slug]["meta-description"]; ?>" />

	<meta property="og:title" content="<?php echo $seo_details[$current_slug]["og-title"]; ?>" />
    <?php if(isset($course_details[$current_slug])): ?>
	<meta property="og:image" content="<?php echo "https://".$_SERVER["HTTP_HOST"] .'/'; ?>assets/images/course/custom/<?php echo $course_details[$current_slug]["thumbnail"]; ?>" />
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Dynamic Canonical Tag -->
    <?php
    // var_dump($_SERVER);
    $canonical_url = "https://" . $_SERVER["HTTP_HOST"];
    if ($current_slug == "index") {
        $canonical_url .= "/";
    } else {
        $canonical_url .=  $_SERVER['REQUEST_URI'];
    }
    ?>
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />

