<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "databaseconnection.php"; ?>

    <?php


    if (isset($_GET['id'])) {
        $blog_id = $_GET['id'];
    } else {
        echo '<script type="text/javascript">location.href = "404.php";</script>';
    }

    $sql = "SELECT blog_id, b.title, meta_description, description, blog_category_id, keywords, thumbnail, b.banner, b.added_date, u.first_name, u.last_name, u.image, u.title as designation FROM blogs as b left join users as u on b.user_id = u.id WHERE b.status = 1 and blog_id = " . $blog_id;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $blog = $result->fetch_assoc();
        //var_dump($blog );
    } else {
        echo '<script type="text/javascript">location.href = "404.php";</script>';
    }

    if (!function_exists('htmlspecialchars_decode_')) {
        function htmlspecialchars_decode_($description = '')
        {
            return htmlspecialchars_decode($description ?? "");
        }
    }
    //if (!function_exists('ellipsis')) {
        function ellipsis_new($text, $max)
        {
            return (strlen($text) > $max) ? substr($text, 0, $max) . '...' : $text;
        }
    //}

    ?>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $blog['title']; ?></title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once "common_css.php"; ?>


    <meta name="keywords" content="<?php echo $blog['keywords']; ?>" />
    <meta name="description" content="<?php echo strip_tags(htmlspecialchars_decode_($blog['meta_description'])); ?>" />
    <meta property="og:title" content="<?php echo $blog['title']; ?>" />
    <?php $blog_banner = 'uploads/blog/banner/' . $blog['banner']; ?>
    <?php if (@file_get_contents("https://admin.softonlinetraining.com/" . $blog_banner, false, null, 0, 1) === false) : ?>
        <?php $blog_banner = 'uploads/blog/banner/placeholder.jpg'; ?>
    <?php endif; ?>
    <?php $blog_banner = "https://admin.softonlinetraining.com/" . $blog_banner; ?>
    <meta property="og:image" content="<?php echo $blog_banner; ?>">
</head>

<body class="rbt-header-sticky">
    <!-- Start Header Area -->
    <?php include_once "header.php"; ?>

    <?php



    //Related blogs
    $sql = "SELECT blog_id, b.title, b.thumbnail FROM blogs as b WHERE b.status = 1 and blog_category_id = " . $blog['blog_category_id'] . " and blog_id !=" . $blog_id . " ORDER BY b.added_date DESC LIMIT 4";
    $result = $conn->query($sql);

    $related_blogs = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $related_blogs[] = $row;
        }
    }

    function ellipsis($text)
    {
        // Decode HTML entities
        $text = htmlspecialchars_decode($text, ENT_QUOTES);
        // Strip HTML tags
        return strip_tags($text);
    }

    ?>

    <!-- Mobile Menu Section -->
    <?php include_once "mobile_menu.php"; ?>
    <!-- Start Side Vav -->
    <?php include_once "side_nav.php"; ?>
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>


    <div class="rbt-overlay-page-wrapper">
        <div class="breadcrumb-image-container breadcrumb-style-max-width">
            <div class="breadcrumb-image-wrapper">
                <img src="assets/images/bg/bg-image-10.jpg" alt="Background Image">
            </div>
            <div class="breadcrumb-content-top text-center">
                <ul class="meta-list justify-content-center mb--10">
                    <li class="list-item">
                        <div class="author-thumbnail">
                            <img src="<?php echo "https://admin.softonlinetraining.com/uploads/user_image/optimized/" . $blog['image'] . '.jpg'; ?>" alt="blog-image">
                        </div>
                        <div class="author-info">
                            <a href="#"><strong><?php echo $blog['first_name'] . " " . $blog['last_name']; ?></strong></a> </a>
                        </div>
                    </li>
                    <li class="list-item">
                        <i class="feather-clock"></i>
                        <span><?php echo date('F j, Y', $blog['added_date']); ?></span>
                    </li>
                </ul>
                <h1 class="title"><?php echo $blog['title']; ?></h1>
            </div>
        </div>

        <div class="rbt-blog-details-area rbt-section-gapBottom breadcrumb-style-max-width">
            <div class="blog-content-wrapper rbt-article-content-wrapper">
                <div class="content no-bootstrap">
                    <div class="post-thumbnail mb--30 position-relative wp-block-image alignwide">
                        <figure>
                            <img src="<?php echo "https://admin.softonlinetraining.com/uploads/blog/banner/" . $blog['banner']; ?>" alt="<?php echo $blog['title']; ?>">
                        </figure>
                    </div>


                    

                    <p class=""><?php echo htmlspecialchars_decode($blog['description']); ?></p>



                    <!-- BLog Tag Clound  -->
                    <div class="tagcloud">
                        <?php $keywords = explode(',', $blog['keywords']);
                        foreach ($keywords as $keyword) : ?>
                            <a href="javascript:void(0);" ;><?php echo $keyword; ?></a>
                        <?php endforeach; ?>
                    </div>



                </div>
                <div class="related-post pt--60">
                    <div class="section-title text-start mb--40">
                        <span class="subtitle bg-primary-opacity">Similar Post</span>
                        <h2>Related Articles</h2>
                    </div>

                    <!-- Start Single Card  -->
                    <?php foreach ($related_blogs as $blog) : ?>
                        <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                            <div class="rbt-card-img">
                                <a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>">
                                    <img src="<?php echo 'https://admin.softonlinetraining.com/uploads/blog/thumbnail/' . $blog['thumbnail']; ?>" alt="<?php echo $blog['title']; ?>"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h3 class="rbt-card-title"><a href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>"><?php echo $blog['title']; ?></a>
                                </h3>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="blog/<?php echo convertTitleToURL($blog['title']); ?>/<?php echo $blog['blog_id']; ?>">Read
                                        Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- End Single Card  -->

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

<style>
    .no-bootstrap li::before,
    .no-bootstrap li::after {
        content: none !important;
    }

    .no-bootstrap li {
        list-style-type: disc !important;
        margin: 10px 10px !important;
    }

    .no-bootstrap p b {
        font-size: 16px !important;
    }

    .no-bootstrap p {
        margin-top: 10px !important;
        margin-bottom: 10px !important;
        font-size: 14px !important;
    }

    .no-bootstrap h2 {
        font-size: 25px !important;
        color: #42464e !important;
    }

    .no-bootstrap h3 {
        font-size: 18px !important;
        color: #42464e !important;
    }

    .no-bootstrap,
    b {
        color: #42464e !important;
    }

    .no-bootstrap h1 {
        padding-top: 1px !important;
    }

    .no-bootstrap br,
    .no-bootstrap p b br {
        display: none !important;
    }

    .no-bootstrap {
        font-family: Euclid Circular !important;
    }
</style>

</html>
