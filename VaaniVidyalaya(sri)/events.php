<?php
include_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from alisena-html.buzline.org/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 07:05:10 GMT -->
    <head>
        <title>EVENT-VANI VIDYALAYA MATRIC.HR.SEC.SCHOOL</title>
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
    </head>
    <body class="home">
        <?php include_once "head.php"; ?> 
        <!-- End header -->
        <!-- Begin page name -->
        <section class="page-name color-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-name-content">
                            <h1>Our Events</h1>
                            <ul class="bread-crumbs">
                                <li><a href="index.php">Home</a></li>
                                <li><p>Our Events</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End page name -->
        <!-- Begin events content -->

        <main class="events-content">
            <div class="event-list-wrap">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = 1;
                        $sql1 = "SELECT  MONTH(`datetime`) as month,YEAR(`datetime`) as year,`datetime` FROM  `event`   GROUP BY YEAR(`datetime`), MONTH(`datetime`) order by `datetime` desc";
                        $result1 = mysqli_query($mysqli, $sql1);
                        while ($row1 = mysqli_fetch_array($result1)) {
                            $mth = $row1['month'];
                            $yr = $row1['year'];
                            $dateval = date('M d, Y', strtotime($row1['datetime']));
                            ?>
                            <?php if ($i != 1) { ?>

                            <?php } ?>
                            <?php
                            $sql = "SELECT * FROM  `event`  where MONTH(`datetime`)='$mth' and  YEAR(`datetime`) ='$yr' order by  datetime desc ";
                            $result = mysqli_query($mysqli, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                $image = explode(',', $row['image']);
                                $date = $row['datetime'];
                                $date1 = date('M d, Y', strtotime($date));
                                $month_s = date('M', strtotime($date));
                                $date_s = date('d', strtotime($date));
                                $time = date('h:i A', strtotime($date));
                                ?>
                                <?php if ($image[0] != '') { ?>
                                    <div class="col-md-4">                                          
                                        <figure class="event-card color-2">
                                            <a href="#" class="event-logo">
                                                <time datetime="<?php echo $date; ?>"> <span><?php echo $date_s ?></span><?php echo $month_s; ?></time>
                                                <img  src="<?php echo $image[0]; ?>" alt="event-1" style="width: 90%;height: 170px;align-items: center" >
                                            </a>
                                        </figure>
                                        <br>
                                        <h4 style="height: 70px; padding-left: 60px;"><?php echo $row['title']; ?></h4>
                                        <br>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>

        </main>
        <!-- End events content -->
        <!-- Begin footer -->
        <?php include_once "footer.php"; ?> 
    </body>

    <!-- Mirrored from alisena-html.buzline.org/events.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 07:07:40 GMT -->
</html>
