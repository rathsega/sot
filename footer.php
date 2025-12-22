<footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.png" alt="Logo Image">
                            </a>
                        </div>

                        <p class="description mt--20">Welcome to Soft Online Training, where education meets convenience. Our platform offers a diverse range of expertly curated courses designed to enhance your skills and boost your career.
                        </p>

                        <ul class="social-icon social-default justify-content-start">
                            <li><a href="https://www.facebook.com/softonlinetraining1" target="_blank">
                                    <i class="feather-facebook"></i>
                                </a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/soft-online-training-sot-8766191a4/" target="_blank">
                                    <i class="feather-linkedin"></i>
                                </a>
                            </li>
                            <li><a href="https://www.youtube.com/channel/UCwHfz8ddhZs9H4Vr4SsQ1HA?view_as=subscriber" target="_blank">
                                    <i class="feather-youtube"></i>
                                </a>
                            </li>
                            <li><a href="https://www.instagram.com/soft_online_training/" target="_blank">
                                    <i class="feather-instagram"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="contact-btn mt--30">
                            <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="contactus.php">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Contact With Us</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Useful Links</h5>
                        <ul class="ft-link">
                            <li>
                                <a href="aboutus.php">About Us</a>
                            </li>
                            <li>
                                <a href="contactus.php">Contact Us</a>
                            </li>
                            <li>
                                <a href="terms-of-service.php">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="privacy-policy.php">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="blogs.php">Blogs</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Courses</h5>
                        <ul class="ft-link">
                            <?php foreach ($footer_courses as $fc) : ?>
                                <li>
                                    <a href="<?php echo $old_slug[$fc]; ?>"><?php echo $course_details[$fc]['title'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Get Contact</h5>
                        <ul class="ft-link">
                            <li><span>Phone:</span> <a href="tel:+91-799-588-3556">&nbsp;+91-799-588-3556</a></li>
                            <li><span>E-mail:</span> <a href="mailto:info@softonlinetraining.com">info@softonlinetraining.com</a></li>
                        </ul>
                        <form class="newsletter-form mt--20" method="POST" id="news_letters_form">
                            <h6 class="w-600">Subscribe to our newsletter</h6>

                            <div class="form-group right-icon icon-email mb--20">
                                <label for="email">Enter Your Email Here</label>
                                <input id="subscribe_email" required type="email">
                            </div>

                            <div class="form-group mb--0">
                                <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                                    <span data-text="Submit Now">Submit Now</span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-style-1 ptb--20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <p class="rbt-link-hover text-center text-lg-start">Copyright © 2023 Softonline Trainings All Rights Reserved
                    </p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                        <li><a href="terms-of-service.php">Terms of service</a></li>
                        <li><a href="privacy-policy.php">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>

<script>
    $("#news_letters_form").on("submit", function(event) {
        console.log(event);
        event.preventDefault();
        $.ajax({
            url: "https://admin.softonlinetraining.com/home/newsletter_subscription", // Replace with your server endpoint
            type: "POST",
            data: {
                email: $("#subscribe_email").val()
            },
            success: function(response) {
                alert("Thank You For Your Subscription.");
                $("#news_letters_form")[0].reset(); // Reset the form
            },
            error: function(xhr, status, error) {
                alert("An error occurred. Please try again.");
            }
        });
    })
</script>
<a target="_blank" href="https://api.whatsapp.com/send?phone=917995883556&text=" style="position: fixed; bottom: 20px; left: 15px;
    z-index: 99999;" class="img-icon-a nofocus wp-icon">
     <img class="img-icon ccw-analytics" id="style-9" data-ccw="style-9" style="height: 60px;" src="https://softonlinetraining.com/assets/images/icons/whatsapp-icon-square.svg" alt="WhatsApp chat">
 </a>