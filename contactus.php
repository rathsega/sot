<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include_once "all_courses_details.php"; ?>
    <?php include_once "meta-data.php"; ?>
    <?php include_once "common_css.php"; ?>
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

    <div class="rbt-conatct-area bg-gradient-11 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <span class="subtitle bg-secondary-opacity">Contact Us</span>
                        <h2 class="title">Get in Touch with Soft Online Training</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-headphones"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Contact Phone Number</h4>
                            <p><a href="tel:+917995883556">&nbsp;+91-799-588-3556</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-mail"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Email Address</h4>
                            <p><a href="mailto:info@softonlinetraining.com">info@softonlinetraining.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-map-pin"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Location</h4>
                            <p>HIG 302/303,
                                HARSHINI ELITE APARTMENT,
                                402, KPHB 6 th PHASE,
                                Hyderabad - 500072</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-contact-address">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="w-100 radius-6" src="assets/images/about/contact.jpg" alt="Contact Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                        </div>
                        <h3 class="title">Expert Assistance, Just a Message Away!</h3>
                        <form id="contact_us_form" method="POST" class="rainbow-dynamic-form max-width-auto">
                            <div class="form-group">
                                <input name="contact_us_name" required id="contact_us_name" type="text">
                                <label>Name</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="contact_us_email" required id="contact_us_email" type="email">
                                <label>Email</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group focused">
                                <input name="contact_us_phone" required id="contact_us_phone" type="text">
                                <label>Phone</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <textarea name="contact_us_message" id="contact_us_message"></textarea>
                                <label>Message</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-submit-group">
                                <button name="submit" type="submit" id="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">SUBMIT</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-google-map bg-color-white rbt-section-gapTop">
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.3992006959393!2d78.38363111487774!3d17.488447088018084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91874524715f%3A0xbf88adf8a1d9093e!2sOracle%20Fusion%20SCM%7C%20HCM%20%7C%20Financials%20%7C%20Technical%20Online%20Training%20-%20Soft%20Online%20Training!5e0!3m2!1sen!2sin!4v1586779126364!5m2!1sen!2sin" height="600" style="border:0"></iframe>
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
    <!-- Modernizer JS -->
    <?php include_once "common_js.php"; ?>

</body>

<script>
    const phoneInputContactUs = document.querySelector("#contact_us_phone");
    const contactUsPhoneField = window.intlTelInput(phoneInputContactUs, {
        preferredCountries: ["in"],
        hiddenInput: "full",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    $(document).ready(function() {



        $("#contact_us_form").on("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Validate the form
            let isValid = true;
            let message = "";
            let phonenumber = contactUsPhoneField.getNumber(intlTelInputUtils.numberFormat.E164);
            console.log(phonenumber);

            if ($("#contact_us_name").val().trim() === "") {
                isValid = false;
                message += "Please enter your name.\n";
            }
            if ($("#contact_us_email").val().trim() === "") {
                isValid = false;
                message += "Please enter your email.\n";
            }

            if (isValid) {
                // Form data
                const formData = {
                    contact_name: $("#contact_us_name").val(),
                    contact_email: $("#contact_us_email").val(),
                    contact_phone: phonenumber,
                    contact_message:  $("#contact_us_message").val(),
                    contact_from: 'contact_page'
                };

                // AJAX request
                $.ajax({
                    url: "https://admin.softonlinetraining.com/home/contactus_submitted", // Replace with your server endpoint
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        alert("Thank You For Contacting Us.");
                        $("#contact_us_form")[0].reset(); // Reset the form
                        $("#contact_form_cls_btn").click();
                    },
                    error: function(xhr, status, error) {
                        alert("An error occurred. Please try again.");
                    }
                });
            } else {
                alert(message);
            }
        });
    });
</script>

</html>