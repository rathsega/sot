<?php
//$data = explode('/', $_SERVER['SCRIPT_FILENAME']);
//$data = explode('.', end($data));
//var_dump($data[0]);
?>

<div class="about-author-list rbt-border-with-box featured-wrapper mt--30 has-show-more">
    <div class="section-title">
        <h4 class="rbt-title-style-3">Featured Reviews</h4>
    </div>
    <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">
        <?php foreach ($course_reviews[$current_slug] as $reviewer) : ?>
            <div class="rbt-course-review about-author">
                <div class="media">
                    <div class="media-body">
                        <div class="author-info">
                            <h5 class="title">
                                <a class="hover-flip-item-wrapper" href="javascript:void(0);">
                                    <?php echo $reviewer; ?>
                                </a>
                            </h5>
                            <div class="rating">
                                <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <p class="description"><?php echo $all_reviews[$reviewer]["description"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="rbt-show-more-btn">Show More</div>
</div>