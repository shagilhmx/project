<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.10.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/resized-pictures-1-83x96.jpg" type="image/x-icon">
  <meta name="description" content="">

  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <?php
  include 'src/instamojo.php';
  $api = new Instamojo\Instamojo('6e1b3a91ae8227966762fb6bbe3bb786', '7e34259a070e29a2a7fafe38bcbd34de','https://test.instamojo.com/api/1.1/');
  $payid = $_GET["payment_request_id"];
  try {
      $response = $api->paymentRequestStatus($payid);
  	echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
      echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
      echo "<h4>Payment Email: " . $response['payments'][0]['email'] . "</h4>" ;
  echo "<pre>";
     print_r($response);
  echo "</pre>";
  }
  catch (Exception $e) {
      print('Error: ' . $e->getMessage());
  }
  ?>

</head>
<body>
  <section class="menu cid-ry6I1jU7Cu" once="menu" id="menu1-g">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                         <img src="assets/images/resized-pictures-1-83x96.jpg" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.php">FINTHINK<br>Network of Upcomig Financial Advisors</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-7" href="https://mobirise.co">
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-7" href="index.php"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home &nbsp; &nbsp;</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-7" href="book.php"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
                        Book Online &nbsp; &nbsp;</a></li><li class="nav-item"><a class="nav-link link text-white display-7" href="faq.html"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span>
                        FAQ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li></ul>
            <div class="navbar-buttons mbr-section-btn">
              <?php
              session_start();
              if($_SESSION[logged] == true)
              {
                echo $_SESSION["username"];
                echo '<a id="signin" class="btn btn-sm btn-primary display-4" href="logout.php">Log out</a></div>';
              }
              else {
                echo '<a id="signin" class="btn btn-sm btn-primary display-4" href="signin.php">Sign in</a></div>';
              }
              session_destroy();
              ?>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/x">css templates</a></section><section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" id="header2-1">



    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(118, 118, 118);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">FINTHINK WELCOMES<br>YOU</h1>

                <p class="mbr-text pb-3 mbr-fonts-style display-5"><em><strong>For All of Your Accounting &amp; Financial Needs</strong></em></p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="index.php#services2-b">UPCOMING COURSES</a></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="header14 cid-ry6eKPwwkR mbr-fullscreen mbr-parallax-background" id="header14-7">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">

            <div class="mbr-figure" style="width: 60%;">
                <img src="assets/images/image5-736x524.jpg" alt="Mobirise" title="">
            </div>

            <div class="media-content">
                <h1 class="mbr-section-title pb-3 align-left mbr-white mbr-fonts-style display-2">OUR WAY</h1>

                <div class="mbr-section-text  pb-3 ">
                    <p class="mbr-text align-left mbr-white mbr-fonts-style display-7"><strong><em>Your Financial Experts</em><br></strong><br>In the world of money, it's still Time that matter's the most..
<br>And so, here we are with an efficient solution to all your FINANCIAL AMBIGUITIES, where self accounting would no longer be an unreasonable target. Financial expenses are sure to be minimized and accounting confidentiality would be given to your business.
<br>FinThink offers you an affordable and effective educational exposure to boost your financial skill set and proefficiency by offering a wide range of courses to choose from.
<br>These all round courses not just offer you an aid to all your financial difficulties but also gives an individual an added advantage of FINANCIAL EXPERTISE over others along with guest lectures from several experienced faculties and an opportunity to work with the various organisations.&nbsp;<em><br></em></p>
                </div>

                <div class="media-container-column" data-form-type="formoid">
                    <!---Formbuilder Form--->
                    <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="YoDwE2g9Y5PXJH1YdmA67UgLU6XHMM9BBEtDqLtP7mOgSx1EyBxW3krZdDbxm4JfONQyW7w8N9+/rQWIBfG9m+p5lGDfc1FpNe3HsVcz7L+6OsAuvgiKcYsc9nz03jmn">
                        <div class="row form-inline">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row form-inline">
                            <div class="col-auto form-group" data-for="email">
                                <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control input-sm input-inverse display-7" id="email-header14-7">
                            </div>
                            <div class="col-auto buttons-wrap"><button type="submit" class="btn btn-primary display-4" href="#">SUBSCRIBE</button></div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services2 cid-ry6iZCff0P" id="services2-b">
    <!---->

    <!---->
    <!--Overlay-->

    <!--Container-->
    <div class="container">
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 70%;">
                    <img src="assets/images/image6-952x472.jpg" alt="Mobirise" title="">
                </div>
                <div class="align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">UPCOMING COURSES</h2>
                    <div class="mbr-section-text">
                      <?php
                      include"config.php";

                      $stmtment = $con->prepare("SELECT * FROM courses where no='1' or Date_='?' or name='?' or Session='?' or price='?' ");
                        /* execute statement */
                        $stmtment->execute();

                        /* bind result variables */
                        $stmtment->bind_result($no, $date, $name, $Session, $course, $price, $title, $img, $sched, $url, $s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8);

                        /* fetch values */
                        while ($stmtment->fetch())
                        {

                        }


                    if($no == 1)
                    		{
                         $msgA2 = $date;
                         $msgA3 = $name;
                         $msgA4 = $Session;
                         $msgA5 = $price;
                         $msgA6= true;


                         		// Redirect user to index.php

                    		}
                    		else
                    		{
                        $_SESSION['session']=false;
                    	  $msg = "no new courses avaliable";
                    		}

                        $stmtment->close();

                       ?>
                        <?php
                        echo '<p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-7"><em>'.$msgA2.'</em><br><br></p>';
                        echo '<p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-7">'.$msgA3.'<br></p>';
                        echo '<p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-7">'.$msgA4.'<br></p>';
                        ?>
                        <p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-7">or refer book online tab in top right corner<br></p>
                        <?php
                        echo '<p class="mbr-text text2 pt-4 mbr-light mbr-fonts-style display-2">'.$msgA5;'</p>';
                         ?>
                    </div>
                    <!--Btn-->
                    <div class="mbr-section-btn pt-3 align-left"><a href="buy.php" class="btn btn-warning-outline display-4" target="_blank">
                            Book Now
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counters4 counters cid-ry6h1G4mHQ" id="counters4-a">





    <div class="container pt-4 mt-2">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Why Choose Us</h2>
        <h3 class="mbr-section-subtitle pb-5 align-center mbr-fonts-style display-5"></h3>
        <div class="media-container-row">
            <div class="media-block m-auto" style="width: 49%;">
                <div class="mbr-figure">
                    <img src="assets/images/background6.jpg">
                </div>
            </div>
            <div class="cards-block">
                <div class="cards-container">
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    1
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">ONLINE FINANCIAL COURSES</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7"><em>Enabling Growth</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    2
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">ACCOUNTING SERVICES</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7"><em>Enabling&nbsp;Reliability</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    3
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">ADVISORS FORUM</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7"><em>Connecting upcoming financial advisors</em></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="team1 cid-ry6sFtAoD7" id="team1-e">



    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
            OUR FINANCIAL FAMILY</h2>
        <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5"><em>We Work For Your Success</em><br><br>Our team of Financial professionals work tirelessly to bring you the financial services you deserve along with some financial courses. We are committed to our clients &amp; students, helping them work and live without worrying about their financial management concerns. Schedule a course today and see what financial services we can offer</h3>
        <div class="row media-row">

        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/0-510x510.jpg" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">CA SANCHIT AGGARWAL</p>
                    </div>
                    <div class="item-role px-2">
                        <p><em><strong>Founder, Mentor, Advisor</strong></em><br>From qualifying CA in first attempt and Securing Job as Financial controller at Barclays, He's also fulfilling his social responsibility by handling the position of National Accounts Manager at GRAMIKSHA (NGO).
<br>''He has a clear vision backed by definite plans''
<br><br></p>
                    </div>
                    <div class="item-social pt-2">

                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>


                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>


                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-googleplus socicon"></span>

                        <a href="https://www.linkedin.com/in/casanchitaggarwal?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BhXL4YhA%2BSyaWEmaqLO4vNg%3D%3D" target="_blank">
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-linkedin socicon"></span>
                        </a>
                        <a href="https://www.instagram.com/mobirise/" target="_blank">

                        </a>
                        <a href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw" target="_blank">

                        </a>
                    </div>
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/1-375x375.jpg" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">CA ROHAN GOSWAMI</p>
                    </div>
                    <div class="item-role px-2">
                        <p><em><strong>CO Founder, Mentor, Advisor</strong></em><br>CA Rohan Goswami has been the backbone of Finthink from the very beginning, being sure at answering even the most complex accounting questions.
<br>Presently engaged with Vedanta PLC as Financial Analyst.
<br>''You can count on Rohan Goswami to be with you every step of the way''<em><strong><br></strong></em><br></p>
                    </div>
                    <div class="item-social pt-2">

                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>


                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>


                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-googleplus socicon"></span>

                        <a href="https://www.linkedin.com/in/ca-rohan-goswami-389892141?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BeheUHzFnSK67m7MbzXwUIw%3D%3D" target="_blank">
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-linkedin socicon"></span>
                        </a>
                        <a href="https://www.instagram.com/mobirise/" target="_blank">

                        </a>
                        <a href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw" target="_blank">

                        </a>
                    </div>
                </div>
            </div></div>
    </div>
</section>

<section class="mbr-section form4 cid-ry6ld6D5JP" id="form4-c">




    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1751.589631139657!2d77.38044343036108!3d28.594398539143647!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef81c9940021%3A0x3a43811105d580c4!2sPan+Oasis!5e0!3m2!1sen!2sin!4v1564891995087!5m2!1sen!2sin" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">Contact Us</h2>
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Don't hesitate to contact us
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7">
                            Ready for offers and cooperation
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7"><a href="mailto:info@finthink.in" class="text-info">info@finthink.in
</a><br><a href="tel:+91-9796424000">+91-9796424000&nbsp;</a><br></p>
                    </div>
                </div>
                <div data-form-type="formoid">
                    <!---Formbuilder Form--->
                    <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="qupapmN9WTGWtyAneYGbXHUTKPVjwsY0mVU06C2bnn4RxhsJKOzNaNijihVr6ADYRbRdWoYhEmDe4oCKRamXFWp/iE7w8seYIrM6P5HKb8bEBV5gsSiBwMFrdTZi5JPV">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-6  form-group" data-for="name">
                                <input type="text" name="name" placeholder="Your Name" data-form-field="Name" required="required" class="form-control input display-7" id="name-form4-c">
                            </div>
                            <div class="col-md-6  form-group" data-for="phone">
                                <input type="text" name="phone" placeholder="Phone" data-form-field="Phone" required="required" class="form-control input display-7" id="phone-form4-c">
                            </div>
                            <div data-for="email" class="col-md-12  form-group">
                                <input type="text" name="email" placeholder="Email" data-form-field="Email" class="form-control input display-7" required="required" id="email-form4-c">
                            </div>
                            <div data-for="message" class="col-md-12  form-group">
                                <textarea name="message" placeholder="Message" data-form-field="Message" class="form-control input display-7" id="message-form4-c"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center"><button type="submit" class="btn btn-primary btn-form display-4">SEND MESSAGE</button></div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cid-qTkAaeaxX5" id="footer1-2">





    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="index.php#header2-1">
                        <img src="assets/images/resized-pictures-1-83x96.jpg" alt="Mobirise" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">GH - 01, Pan Oasis Society, Sector 70, Noida, Uttar Pradesh 201301</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text"><a href="mailto:info@finthink.in" class="text-white">
                    Email: info@finthink.in</a><br><a href="tel:+91-9796424000">Phone: &nbsp;+91-9796424000</a><br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text"><a href="index.php#team1-e" class="text-white">About Us</a><br><a href="term.html" class="text-white">Terms</a>&nbsp;<br><a href="privacy.html" class="text-white">Privacy</a></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">©2019 by Finthink.in&nbsp;- All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://www.linkedin.com/company/finthink/about/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-linkedin socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                              <a href="https://www.facebook.com/finthink/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                              </a>
                        </div>
                        <div class="soc-item">

                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>

                        </div>
                        <div class="soc-item">

                                <span class="mbr-iconfont mbr-iconfont-social socicon-googleplus socicon"></span>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


  <input name="animation" type="hidden">
  </body>
</html>
