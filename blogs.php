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

    <?php

    $limit = 4; // Number of blogs per page
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start_from = ($page - 1) * $limit;

    $sql = "SELECT blog_id, b.title, description, thumbnail, b.banner, b.added_date, u.first_name, u.last_name FROM blogs as b left join users as u on b.user_id = u.id WHERE b.status = 1 order by b.added_date desc LIMIT $start_from, $limit";
    $result = $conn->query($sql);

    $blogs = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $blogs[] = $row;
        }
    }


    //Recent blogs
    $sql = "SELECT COUNT(blog_id) FROM blogs WHERE status = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    $total_records = $row[0];
    $total_pages = ceil($total_records / $limit);

    $sql = "SELECT blog_id, b.title, description, thumbnail, b.banner, b.added_date, u.first_name, u.last_name FROM blogs as b left join users as u on b.user_id = u.id WHERE b.status = 1 ORDER BY b.added_date DESC LIMIT 4";
    $result = $conn->query($sql);

    $recent_blogs = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $recent_blogs[] = $row;
        }
    }


    //Popular blogs

    $sql = "SELECT blog_id, b.title, description, thumbnail, b.banner, b.added_date, u.first_name, u.last_name FROM blogs as b left join users as u on b.user_id = u.id WHERE b.status = 1 and is_popular = 1 ORDER BY b.added_date DESC LIMIT 4";
    $result = $conn->query($sql);

    $popular_blogs = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $popular_blogs[] = $row;
        }
    }

    //Tags
    $sql = "SELECT keywords FROM blogs WHERE status = '1' AND is_popular = 1";
    $result = $conn->query($sql);

    $keywords_array = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $keywords = explode(',', $row['keywords']);
            foreach ($keywords as $keyword) {
                $keyword = trim($keyword);
                if (!in_array($keyword, $keywords_array)) {
                    $keywords_array[] = $keyword;
                }
            }
        }
    }

    $unique_keywords = array_slice($keywords_array, 0, 10);

    $conn->close();

    function ellipsis($text, $max_length = 150)
    {
        // Decode HTML entities
        $text = htmlspecialchars_decode($text, ENT_QUOTES);
        // Strip HTML tags
        $text = strip_tags($text);
        // Check if the text needs to be truncated
        if (strlen($text) > $max_length) {
            // Truncate the text
            $text = substr($text, 0, $max_length);
            // Append ellipsis
            $text .= '...';
        }
        return $text;
    }
    ?>

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
                                <li class="rbt-breadcrumb-item active">All Blogs</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class="title-wrapper">
                                <h1 class="title mb--0">All Blogs</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> <?php echo $total_records; ?> Blogs
                                </a>
                            </div>

                            <p class="description">Explore Insights: Dive into Our Latest Blogs on Oracle Fusion and ERP! </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->

        </div>
    </div>

    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row row--30 gy-5">

                <div class="col-lg-8">

                    <!-- Start Card Area -->
                    <div class="row g-5">

                        <?php foreach ($blogs as $blog) : ?>
                            <!-- Start Single Card  -->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>">
                                            <img src="<?php echo 'https://admin.softonlinetraining.com/uploads/blog/thumbnail/' . $blog['thumbnail']; ?>" alt="<?php echo $blog['title']; ?>"> </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <h5 class="rbt-card-title"><a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>"><?php echo $blog['title']; ?></a></h5>

                                        <ul class="blog-meta">
                                            <li><i class="feather-user"></i> <?php echo $blog['first_name'] . ' ' . $blog['last_name']; ?></li>
                                            <li><i class="feather-clock"></i> <?php echo date('F j, Y', $blog['added_date']); ?></li>
                                        </ul>
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
                            <!-- End Single Card  -->
                        <?php endforeach; ?>

                    </div>
                    <!-- End Card Area -->
                    <div class="row">
                        <div class="col-lg-12 mt--60">
                            <nav>
                                <ul class="rbt-pagination">
                                    <!-- Start Previous Button -->
                                    <?php if ($page > 1) : ?>
                                        <li><a href="blogs.php?page=<?php echo ($page - 1); ?>" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                                    <?php endif; ?>
                                    <!-- End Previous Button -->

                                    <!-- Start Page Number buttons -->
                                    <?php
                                    $max_pages_to_show = 3;
                                    $start_page = max(1, $page - floor($max_pages_to_show / 2));
                                    $end_page = min($total_pages, $start_page + $max_pages_to_show - 1);

                                    for ($i = $start_page; $i <= $end_page; $i++) : ?>
                                        <li class="<?php echo $i == $page ? 'active' : ''; ?>"><a href="blogs.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php endfor; ?>
                                    <!-- End Page Number buttons -->

                                    <!-- Start Next button -->
                                    <?php if ($page < $total_pages) : ?>
                                        <li><a href="blogs.php?page=<?php echo ($page + 1); ?>" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                                    <?php endif; ?>
                                    <!-- End Next button -->

                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <aside class="rbt-sidebar-widget-wrapper rbt-gradient-border blog-bg-color">

                        <!-- Start Widget Area  -->
                        <!-- <div class="rbt-single-widget rbt-widget-search">
                            <div class="inner">
                                <form action="#" class="rbt-search-style-1">
                                    <input type="text" placeholder="Search Courses">
                                    <button class="search-btn"><i class="feather-search"></i></button>
                                </form>
                            </div>
                        </div> -->
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-recent">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Recent Post</h4>
                                <ul class="rbt-sidebar-list-wrapper recent-post-list">
                                    <?php foreach ($recent_blogs as $blog) : ?>
                                        <li>
                                            <div class="thumbnail">
                                                <a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>">
                                                    <img src="<?php echo 'https://admin.softonlinetraining.com/uploads/blog/thumbnail/' . $blog['thumbnail']; ?>" alt="<?php echo $blog['title']; ?>">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h6 class="title"><a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>"><?php echo $blog['title']; ?></a></h6>
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-clock"></i><?php echo date('F j, Y', $blog['added_date']); ?></li>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-recent">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Popular Post</h4>
                                <ul class="rbt-sidebar-list-wrapper recent-post-list">
                                    <?php foreach ($popular_blogs as $blog) : ?>
                                        <li>
                                            <div class="thumbnail">
                                                <a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>">
                                                    <img src="<?php echo 'https://admin.softonlinetraining.com/uploads/blog/thumbnail/' . $blog['thumbnail']; ?>" alt="<?php echo $blog['title']; ?>">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h6 class="title"><a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>"><?php echo $blog['title']; ?></a></h6>
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-clock"></i><?php echo date('F j, Y', $blog['added_date']); ?></li>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <!-- <div class="rbt-single-widget rbt-widget-tag">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Tags</h4>
                                <div class="rbt-sidebar-list-wrapper rbt-tag-list">
                                    <?php foreach ($unique_keywords as $keyword) : ?>
                                        <a href="#"><?php echo $keyword; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Widget Area  -->
                    </aside>
                </div>

            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
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