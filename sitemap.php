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

    <?php include_once "header.php"; ?>
    <?php include_once "mobile_menu.php"; ?>
    <?php include_once "side_nav.php"; ?>
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <?php
    $blog_items = array();
    $blog_sql = "SELECT blog_id, title FROM blogs WHERE status = 1 ORDER BY added_date DESC";
    $blog_result = $conn->query($blog_sql);
    if ($blog_result && $blog_result->num_rows > 0) {
        while ($row = $blog_result->fetch_assoc()) {
            $blog_items[] = $row;
        }
    }
    $conn->close();
    ?>

    <div class="rbt-page-banner-wrapper">
        <div class="rbt-banner-image"></div>
        <div class="rbt-banner-content">
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="/">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Sitemap</li>
                            </ul>

                            <div class="title-wrapper mb--0" style="flex-wrap: wrap; gap: 12px;">
                                <h1 class="about-us-h1 mb--0">Sitemap</h1>
                                <a href="#courses" class="rbt-badge-2 mt--10">
                                    <div class="image">📚</div> <?php echo count($slugs); ?> Courses
                                </a>
                                <a href="#blogs" class="rbt-badge-2 mt--10">
                                    <div class="image">📝</div> <?php echo count($blog_items); ?> Blogs
                                </a>
                            </div>

                            <h2 class="description blog-content mt--20">Find every course and blog title in one place and jump straight to the page you want.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" id="courses">
                    <div class="rbt-card variation-01 rbt-hover h-100">
                        <div class="rbt-card-body">
                            <div class="rbt-card-top mb--20">
                                <h2 class="title mb--0">Courses</h2>
                            </div>
                            <ul class="ft-link sitemap-link-list">
                                <?php foreach ($slugs as $slug) : ?>
                                    <?php if (!isset($course_details[$slug]) || !isset($old_slug[$slug])) continue; ?>
                                    <li>
                                        <a href="<?php echo $old_slug[$slug]; ?>"><?php echo $course_details[$slug]['title']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" id="blogs">
                    <div class="rbt-card variation-01 rbt-hover h-100">
                        <div class="rbt-card-body">
                            <div class="rbt-card-top mb--20">
                                <h2 class="title mb--0">Blogs</h2>
                            </div>
                            <ul class="ft-link sitemap-link-list">
                                <?php foreach ($blog_items as $blog_item) : ?>
                                    <li>
                                        <a href="blog/<?php echo convertTitleToURL($blog_item['title']); ?>/<?php echo $blog_item['blog_id']; ?>"><?php echo $blog_item['title']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "footer.php"; ?>

    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <?php include_once "common_js.php"; ?>
</body>

</html>