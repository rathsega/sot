<?php
//$data = explode('/', $_SERVER['SCRIPT_FILENAME']);
//$data = explode('.', end($data));
//var_dump($data[0]);
?>

<div class="about-author-list rbt-border-with-box featured-wrapper mt--30 has-show-more" id="faq">
    <div class="section-title">
        <h4 class="rbt-title-style-3">Frequently Asked Questions about <?php echo $course_details[$current_slug]['title'] ?></h4>
    </div>
    <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">
        <?php foreach ($course_faqs[$current_slug] as $faq) : ?>
            <div class="rbt-course-review about-author">
                <div class="media">
                    <div class="media-body">
                        <div class="author-info">
                            <h5 class="title">
                                <a class="hover-flip-item-wrapper" href="javascript:void(0);">
                                    <?php echo $faq["question"]; ?>
                                </a>
                            </h5>
                        </div>
                        <div class="content">
                            <p class="description"><?php echo $faq["answer"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="rbt-show-more-btn">Show More</div>
</div>