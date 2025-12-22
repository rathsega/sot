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
<style>
.rbt-banner-1{
    background-color:#f5f7fa;
    background-image: none;
}
hr:not([size]) {
    height: 1px;
}
hr {
    background-color: #000000;
}
</style>

<body>
       <!-- Start Header Area -->
       <?php include_once "header.php"; ?>
    <!-- Mobile Menu Section -->
    <?php include_once "mobile_menu.php"; ?>
    <!-- Start Side Vav -->
    <?php include_once "side_nav.php"; ?>
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>


    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1 variation-2  pb-5">
        <div class="container terms-o-s">
           <h1 class="title text-center pt-5">Privacy <span class="text-success"> Policy</span></h1>
             <h6 class="pb-5">
             Welcome to Soft Online Training. This Privacy Policy outlines how we collect, use, disclose, and protect your personal information when you use our online training platform. By using our services, you agree to the terms of this policy.</h6>
       
          <h4 class="fw-bold text-dark text-center">Information We Collect</h4>
          <h5 class="fw-bold text-success">Personal Information</h5>
          <ul>
            <li><span class="fw-bold text-dark">Contact Information: </span> We collect your name, email address, phone number, and address when you register for courses or contact us.</li>
            <li><span class="fw-bold text-dark">Payment Information:</span> We process billing details for course enrollments. We do not store payment information on our servers.
            </li>
          </ul>
          

          <h5 class="fw-bold text-success">Usage Information</h5>
          <ul>
            <li><span class="fw-bold text-dark">Website Usage: </span> We collect data on your interactions with our website, such as pages visited and time spent on each page.</li>
            <li><span class="fw-bold text-dark">Device and Browser Information:</span> Information about your device and browser used to access our platform is collected.
            </li>
          </ul>


         
          <h5 class="fw-bold text-success">How We Use Your Information</h5>
         <p>We use your information for the following purposes:</p>
         <ul>
            <li><span class="fw-bold text-dark">Providing Services:</span>  To deliver our courses, process enrollments, and provide support.</li>
            <li><span class="fw-bold text-dark">Communication:</span> To respond to inquiries, send important notices, and provide course updates.
            </li>
            <li><span class="fw-bold text-dark">Improving Services:</span> To analyze usage patterns and enhance the user experience.
            </li>
            <li><span class="fw-bold text-dark">Marketing:</span> With your consent, we may send promotional materials about new courses or events.
            </li>
          </ul>


          <h5 class="fw-bold text-success">Information Sharing</h5>
         <p>Your personal information is never traded, sold, or rented to any parties. We may share data with trusted service providers who assist us in delivering our services, such as payment processors or technical support.</p>
         

         <h5 class="fw-bold text-success">Data Security</h5>
        <p>To secure your information, we employ industry-standard security methods. However, electronic storage or communication over the Internet is only somewhat secure.</p>


        <h5 class="fw-bold text-success">Your Choices</h5>
         <p>You have the right to:</p>
         <ul>
            <li><span class="fw-bold text-dark">Access and Update:</span> View and modify your data through your account settings.</li>
            <li><span class="fw-bold text-dark">Opt-Out:</span>Opt out of marketing communications by following the instructions in our emails or contacting us.
            </li>
            <li><span class="fw-bold text-dark">Delete Account:</span> Request the deletion of your account and associated data by contacting us.
            </li>
          </ul>
          <hr>
            <p class="text-center"><span class="fw-bold text-dark">Contact Us:</span> If you have any questions or concerns about this Privacy Policy, please email us at info@softonlinetraining.com</p>

        

        </div>
    </div>
    <!-- End Banner Area -->
    <?php include_once "footer.php"; ?>
    <?php include_once "common_js.php"; ?>
</body>
</html>