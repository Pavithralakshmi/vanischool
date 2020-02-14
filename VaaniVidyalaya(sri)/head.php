<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from alisena-html.buzline.org/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 07:05:10 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        
               <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet" />
       <link href="css/popup-lightbox.css" rel="stylesheet" />
        <link href="css/index.css" type="text/css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <?php
    include_once "db.php";
    $sql = "select `email`,`address`,`principal`,`contact1`,`contact2`,`contact3`,`school`,`status`,`trust`,`opdate`,`founded`,`type`,`category`,`class`,`staff_no`,`land`,`rstation`,`pstation`,`bank`,`total_students`,`years`,`website` from `generalinfo`";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $email = $row['email'];
        $address = $row['address'];
        $principal = $row['principal'];
        $contact1 = $row['contact1'];
        $contact2 = $row['contact2'];
        $contact3 = $row['contact3'];
        // $principal=$row['principal'];
        $school = $row['school'];
        $status = $row['status'];
        $trust = $row['trust'];
        $opdate = $row['opdate'];
        $opdate = date('d-m-Y', strtotime($opdate));
        $founded = $row['founded'];
        $type = $row['type'];
        $category = $row['category'];
        $class = $row['class'];
        $staff_no = $row['staff_no'];
        $land = $row['land'];
        $rstation = $row['rstation'];
        $pstation = $row['pstation'];
        $bank = $row['bank'];
        $total_students = $row['total_students'];
        $years = $row['years'];
        $website = $row['website'];
    }
    ?> 
    <body>
        <!-- Begin preloader -->
<!--        <div class="preloader-container">
            <div class="dash dash-one"></div>
            <div class="dash dash-two"></div>
            <div class="dash dash-three"></div>
            <div class="dash dash-four"></div>
        </div>-->
        <!-- End preloader -->
        <!-- Begin header -->
        <header>
            <!-- Begin header top info -->
            <div class="header-top-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top-info ">
                                <?php
                                $sql = "select `school` from `generalinfo`";
                                $result = mysqli_query($mysqli, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    $school = $row['school'];
                                }
                                ?> 
                                <!--<p style=" font-weight: 200;" class="h4">Welcome to Our <?php // echo "$school"; ?></p>-->
                                <p style="font-size: 12px; font-weight: 900;">Welcome to Our <?php echo "$school"; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End header top info -->

            <!-- Begin header main info -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-header">
                            <!-- Begin main header info -->
                            <div class="main-header-info">
                                <a href="index.php" class="logo" style=" padding-bottom: 10px;"><img src="img/s1.jpg" alt="logo" width="50%" height="25%"></a>
                                <div class="show-search"><a href="https://www.eduqfix.com/PayDirect/#/student/pay/0iue1K8zjaRJK1awwgA72HZTSio6tojTcqu8kV5DcYpqc9RAe9V18hKJTVUOcGkQ/1735" target="_blank" class="button color-4 ">Pay Fees</a></div>
                                <div class="humburger"><span></span><span></span><span></span></div>
                            </div>
                            <!-- End main header info -->

                            <!-- Begin inner header -->
                            <div class="inner-main-header">
                                <!-- Begin contact list -->
                                <ul class="contact-list">
                                    <li>
                                        <i class="mdi mdi-phone color-1"></i>
                                        <div class="footer-contact-text">
                                            <a href="tel:98427 49278"> 98427 49278</a>
                                            <a href="tel:04288-278278"> 04288-278278</a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-map-marker color-2"></i>
                                        <div class="footer-contact-text">
                                            <a href="https://goo.gl/maps/1urxu9j9As72" target="_blank">Sankari Main road,<br> Uppupalayam, Veppadai,<br> Komarapalayam (Tk), </a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email-open-outline color-3"></i>
                                        <div class="footer-contact-text">
                                            <a href="mailto:vanividyalayaedu@gmail.com"><?php echo "$email"; ?></a>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://www.eduqfix.com/PayDirect/#/student/pay/0iue1K8zjaRJK1awwgA72HZTSio6tojTcqu8kV5DcYpqc9RAe9V18hKJTVUOcGkQ/1735"class="button color-4 " target="_blank">Pay fees</a>
                                    </li>

                                </ul>
                                <!-- End contact list -->

                                <!-- Begin sidebar search -->
                                <!-- End sidebar search -->
                            </div>
                            <!-- End inner header -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Begin header main info -->


            <!-- Begin header menu -->
            <nav class="header-nav">
                <div class="close-menu"><i class="mdi mdi-close"></i></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="header-nav-list">
                                <li class="color-1">
                                    <a href="index.php" class="active">Home</a>
                                </li>
                                <li class="color-5 drop-right">
                                    <div class="wrap-to-show">
                                        <p>About Us</p>
                                        <i class="mdi mdi-chevron-down"></i>
                                    </div>
                                    <ul class="hide-lvl">
                                        <!-- <li><a href="teacher.php">Our Teachers</a></li> -->
                                        <li><a href="teachers.php#Management">Management</a></li>
                                        <li><a href="teachers.php#VisionMIssion">Vision & Mission</a></li>
                                        <li><a href="teachers.php#ChairmanDesk">Chairman's Desk</a></li>
                                        <li><a href="teachers.php#PrincipalNote">Principal's Note</a></li>
                                        <li><a href="teachers.php#Schoolinfo">School Info</a></li>

                                    </ul>
                                </li>
                                <li class="color-2">
                                    <div class="wrap-to-show">
                                        <p>Acadamics</p>
                                        <i class="mdi mdi-chevron-down"></i>
                                    </div>
                                    <ul class="hide-lvl">
                                        <li><a href="about.php#Curriculum">Curriculum</a></li>
                                        <!--<li><a href="about.php#Syllabus">Syllabus</a></li>-->
                                        <li>
                                            <div class="wrap-to-show">
                                                <a href="events.php">Events</a>
                                                <i class="mdi mdi-chevron-down"></i>
                                            </div>

                                        </li>
                                        <!--<li><a href="enroll.php">Enroll</a></li>-->
                                        <li>
                                            <!--                                        <li>
                                                                                        <a href="blog.php#Teching">Teaching methodologies</a>
                                                                                    </li>-->
                                        <li>
                                            <a href="blog.php#Examination"> Teaching methodologies</a>
                                        </li>
                                        <!--                                            <div id="RULESREGULATIONS" class="wrap-to-show">-->
                                        <li><a href="about.php#RULESREGULATIONS">Rules & Regulations</a></li>
                                        <i class="mdi mdi-chevron-down"></i>
                                        <!--                                            </div>-->
                                </li>
                            </ul>
                            </li>
                            <li class="color-3">
                                <div class="wrap-to-show">
                                    <p>Beyond Academics </p>
                                    <i class="mdi mdi-chevron-down"></i>
                                </div>
                                <ul class="hide-lvl">
                                    <!--<li><a href="classes.php">Our Classes</a></li>-->
                                    <li><a href="single-classes.php#CoCurricularActivities">Co-Curricular Activities</a></li>
                                    <!--<li><a href="single-classes.php#HouseActivities">House Activities</a></li>-->
                                    <li><a href="single-classes.php#ClubActivities">Club Activities</a></li>
                                    <!--<li><a href="single-classes.php#SkillDevelopment">Skill Development</a></li>-->
                                </ul>
                            </li>
                            <li class="color-4">
                                <div class="wrap-to-show">
                                    <a href="gallery.php">Gallery</a>
                                    <i class="mdi mdi-chevron-down"></i>
                                </div>
                                <ul class="hide-lvl">
                                    <!-- <li><a href="events.php">Our events</a></li> -->
                                    <!-- <li><a href="single-event.php">Event details</a></li> -->
                                </ul>
                            </li>
                            <li class="color-2 drop-right">
                                <div class="wrap-to-show">
                                    <a href="single-post.php">Admission</a>
                                    <i class="mdi mdi-chevron-down"></i>
                                </div>
                                <!--                                    <ul class="hide-lvl">
                                                                        <li><a href="single-post.php">Procedure</a></li>
                                                                        <li><a href="blog-left-sidebar.php">Age criteria</a></li>
                                                                    </ul>-->
                            </li>
                            <li class="color-1 drop-right">
                                <div class="wrap-to-show">
                                    <p>Facilities</p>
                                    <i class="mdi mdi-chevron-down"></i>
                                </div>
                                <ul class="hide-lvl">
                                    <li><a href="timetable.php#WhyVaniVidyalaya">Why Vani Vidyalaya?</a></li>
                                    <li><a href="timetable.php#SmartClassrooms">Smart Classrooms</a></li>
                                    <!--<li><a href="timetable.php#ecampus">E-campus</a></li>-->
                                    <li><a href="lab.php#Laboratories">Laboratories</a></li>
                                    <li><a href="timetable.php#Playground">Playground</a></li>
                                    <li><a href="timetable.php#Transport">Transport</a></li>

                                </ul>
                            </li>								
                            <li class="color-3 drop-right"><a href="contacts.php">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End header menu -->
        </header>
        <!-- End header -->
    </body>
</html>

<!--https://bootsnipp.com/snippets/GzKKE-->