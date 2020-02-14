<?php
include_once "db.php";
?>
<?php
if (isset($_POST['submit'])) {
    $cdate=date('y/m/d');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email_id = $_POST['email_id'];
    $message = $_POST['message'];
    $str = "INSERT INTO `feedback`(`fname`, `lname`, `email_id`, `message`,`date`) VALUES ('$fname','$lname','$email_id','$message','$cdate')";
    $res = mysqli_query($mysqli, $str);
    if ($res > 0) {
        echo "<script type='text/javascript'>alert('Thank You!!Your Feedback Successfully Recived');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from alisena-html.buzline.org/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 07:05:10 GMT -->
    <head>
        <title>CONTACTS-VANI VIDYALAYA MATRIC.HR.SEC.SCHOOL</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!--====>> Favicon icon CSS <<====-->
        <link href="img/s1.jpg" type="image/x-icon" rel="shortcut icon" >

<!--====>> Bootstrap V3 CSS <<====-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!--====>> Google fonts CSS <<====-->
        <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700" rel="stylesheet">

<!--====>> Material design icons CSS <<====-->
        <link href="https://cdn.materialdesignicons.com/2.7.94/css/materialdesignicons.min.css" rel="stylesheet">

        <!--====>> Slick Slider CSS <<====-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" type="text/css" rel="stylesheet" />

        <!-- Custom select -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

        <!-- Data picker -->
        <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" type="text/css" rel="stylesheet" />

<!--====>> Feather light CSS <<====-->
        <link href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" type="text/css" rel="stylesheet" />

        <!--====>> Index CSS <<====-->
        <link href="css/index.css" type="text/css" rel="stylesheet" />
    </head>
    <body class="home">
        <?php include_once "head.php"; ?> 

        <!-- Begin page name -->
        <section class="page-name color-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-name-content">
                            <h1>Contact</h1>
                            <ul class="bread-crumbs">
                                <li><a href="index.php">Home</a></li>
                                <li><p>Contact</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End page name -->
        <!-- Begin contact content -->
        <main class="contact-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <p>Vani Vidyalaya Matric.Hr.Sec.School is located in Sankari Main Road, Uppupalayam, Namakkal District in a clean and hygienic environment.</p>
                            <!-- Begin contact list -->
                            <ul class="contact-list"><br>
                                <li>
                                    <i class="mdi mdi-phone color-1"></i>
                                    <div class="footer-contact-text"><b>PHONE:</b>
                                        <a href="tel:98427 49278"><?php echo "$contact1"; ?></a>
                                        <a href="tel:98427 33278"><?php echo "$contact2"; ?></a>
                                        <a href="tel:04288-278278"><?php echo "$contact3"; ?></a>
                                    </div>
                                </li>
                                <li>
                                    <i class="mdi mdi-email-open-outline color-3"></i>
                                    <div class="footer-contact-text"><b>EMAIL :</b>
                                        <a href="mailto:vanividyalayaedu@gmail.com"><?php echo "$email"; ?></a>
                                    </div>
                                </li>
                                <li>
                                    <i class="mdi mdi-map-marker color-2"></i>
                                    <div class="footer-contact-text"><b>ADDRESS:</b>
                                        <a href="https://goo.gl/maps/1urxu9j9As72"><?php echo "$address"; ?></a>
                                    </div>
                                </li>
                            </ul>
                            <!-- End contact list -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="apply-form-wrap">
                            <h2>Send Us a  Message</h2>
                            <form action=""  method="POST" class="apply-form color-1">
                                <div class="inner-apply-form">
                                    <div class="input-wrap">
                                        <label for="apply_name">First Name</label>
                                        <input type="text" name="fname" id="fname" required>
                                    </div>
                                    <div class="input-wrap">
                                        <label for="apply_subject">Last Name</label>
                                        <input type="text" name="lname" id="lname" required>
                                    </div>
                                    <div class="input-wrap">
                                        <label for="apply_email">Your E-mail</label>
                                        <input type="email" name="email_id" id="email_id" required>
                                    </div>
                                </div>
                                <label for="apply-message">Enter Your Message</label>
                                <textarea  name="message" id="message" required></textarea>
                                <button type="submit" name="submit" class="color-4" style="float: right;" >Send</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1305.0573298558013!2d77.80840510313979!3d11.425438325544087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba9671490470089%3A0x95c788638353fa29!2sVani+Vidyalaya+Matric+Higher+Secondary+School!5e0!3m2!1sen!2sin!4v1550725897034" width="100%" height="80%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End contact content -->
    <!-- Begin footer -->
    <?php include_once "footer.php"; ?> 
</body>
<!-- Mirrored from alisena-html.buzline.org/contacts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 07:07:58 GMT -->
</html>
