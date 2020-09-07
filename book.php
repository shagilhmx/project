
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/resized-pictures-1-83x96.jpg" type="image/x-icon">
  <meta name="description" content="Web Builder Description">

  <title>Book Online</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
                    <a href="index.php#header2-1">
                         <img src="assets/images/resized-pictures-1-83x96.jpg" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.php#header2-1">FINTHINK
<br>Network of Upcomig Financial Advisors</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php">
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Home &nbsp; &nbsp; &nbsp;</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="book.php">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>Book Online &nbsp; &nbsp;</a></li><li class="nav-item"><a class="nav-link link text-white display-7" href="faq.html"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span>
                        FAQ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="signin.php">Sign In</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/v">free html templates</a></section><section class="services1 cid-rya4GQYuCF" id="services1-l">

    <?php
    include"config.php";
    $number = 1;
    $stmtment = $con->prepare("SELECT * FROM courses where no='$number' or Date_='?' or name='?' or Session='?' or course = '?' or price='?' or title='?' or image='?' or url='?' or Schedule='?' or s1='?' or s2='?' or s3='?' or s4='?' or s5='?' or s6='?' or s7='?' or s8='?'");
      /* execute statement */
      $stmtment->execute();

      /* bind result variables */
      $stmtment->bind_result($no, $date, $name, $Session, $course, $price, $title, $img, $url, $sched, $s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8);

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
       $msgA7 = $title;
       $image = $img;
       $schedule = $sched;
       $courses = $course;
       $Url  = $url;
       $S1 = $s1;
       $S2 = $s2;
       $S3 = $s3;
       $S4 = $s4;
       $S5 = $s5;
       $S6 = $s6;
       $S7 = $s7;
       $S8 = $s8;
       $msgA6 = true;


          // Redirect user to index.php

      }
      else
      {
      $_SESSION['session']=false;
      $msg = "no new courses avaliable";
      }

      $stmtment->close();

     ?>
    <div class="container">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left pb-3 mbr-fonts-style display-1"><strong>All Courses</strong></h2>

            </div>
            <!--Card-1-->
            <div class="card col-12 col-md-6 p-3 last-child">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src=<?php echo "$image";?> alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                      <?php
                        echo '<h4 class="card-title mbr-fonts-style display-5">'.$msgA3.'</h4>';
                        echo '<p class="mbr-text mbr-fonts-style display-7"><strong>'.$msgA7.'</strong><br><em><strong>'.$msgA2.'</strong></em><br><br>';
                        ?>
                          <p class="mbr-text mbr-fonts-style display-7">Fill out this form and you will receive the registration details on your email:-
                          <br>
                          <?php echo '<br><a href='.$Url.'>'.$Url.'</a></p>';?>
                          <p><br></p>
                          <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">More Info</button>

                          <div class="mbr-section-btn align-left"><a href="http://buy.php" class="btn btn-warning-outline display-4"><?php echo "$msgA5";?></a></div>
                        <div class="w3-container">

                          <div id="id01" class="w3-modal">
                            <div class="w3-modal-content">
                              <div class="w3-container">
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <?php echo '<h2>'.$msgA3.'<br><br></h2>';
                                echo '<p class="mbr-text mbr-fonts-style display-7" color="black">'.$courses.'<br><br>';?>
          <p class="mbr-text mbr-fonts-style display-7" color="black">Fill out this form and you will receive the registration details on your email(pay before or after filling of this form as you wish):-
<br></p>
<?php echo '<br><a href='.$Url.'>'.$Url.'</a>';?>
<p class="mbr-text mbr-fonts-style display-7" color="black"><br>
<br>You can also mail us at : <a href="mailto:info@finthink.in" class="text-info">info@finthink.in</a><br><br><strong><em>Schedule</em></strong></p>
<?php
echo '<br><br>'.$schedule;
echo '<br>Dates: '.$S1;
echo '<br>'.$S2;
echo '<br>'.$S3;
echo '<br>'.$S4;
echo '<br>'.$S5;
echo '<br>'.$S6;
echo '<br>'.$S7;
echo '<br>'.$S8.'<br><br><strong><em>Location &amp; Contact Details</em></strong><br><br>Email: <a href="mailto:takegst@gmail.com" class="text-info">takegst@gmail.com</a>
<br>Online Platform.<br><br><em><strong><br></strong></em></p>';?>
                        <!--Btn-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <!--Card-2-->

            <!--Card-3-->

            <!--Card-4-->

        </div>
    </div>
</section>

<section class="footer4 cid-ryafMLWsM1" id="footer4-o">





    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
                <div class="mb-3 img-logo">
                    <a href="index.php#header2-1">
                        <img src="assets/images/resized-pictures-1-83x96.jpg" alt="Mobirise" title="">
                    </a>
                </div>
                <p class="mb-3 mbr-fonts-style foot-title display-7">Finthink</p>
                <p class="mbr-text mbr-fonts-style mbr-links-column display-7">
                    <a href="index.php#team1-e" class="text-white">About Us</a>
                    <br>Terms&nbsp;<br><a href="privacy.html" class="text-white">Privacy&nbsp;</a><br><a href="mailto:info@finthink.in" class="text-white">Get In Touch</a>
                </p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title mbr-fonts-style display-7"></p>
                <p class="mbr-text mbr-fonts-style foot-text display-7"></p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
                <p class="mb-4 foot-title mbr-fonts-style display-7">
                    SUBSCRIBE
                </p>
                <p class="mbr-text mbr-fonts-style form-text display-7">
                    Get monthly updates and free resources.
                </p>
                <div class="media-container-column" data-form-type="formoid">
                    <!---Formbuilder Form--->
                    <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="DWBy6QdU0E+Uqwp9yRv27LGI9hg67J+KwdKfinm/kmIfg/IHISPGK7vne7J7cLhSxT30U3DIJK8JJY7fdmBG8wGSzAOee8mncbVmjbV3eAx7YWHVL8B6EsDn1pzqfldc">
                        <div class="row form-inline justify-content-center">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                                    </div>
                        </div>
                        <div class="dragArea row form-inline justify-content-center">
                            <div class="col-auto  form-group " data-for="email">
                                <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control input-sm input-inverse my-2 display-7" id="email-footer4-o">
                            </div>
                            <div class="col-auto  input-group-btn  m-2">
                                <button type="submit" class="btn btn-primary m-0 display-4">Subscribe</button>
                            </div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
                <p class="mb-4 mbr-fonts-style foot-title display-7">
                    CONNECT WITH US
                </p>
                <div class="social-list pl-0 mb-0">
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
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-12 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 Finthink - All Rights Reserved
                    </p>
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
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


  <input name="animation" type="hidden">
  </body>
</html>
