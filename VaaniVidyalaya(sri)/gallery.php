<?php
include_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from alisena-html.buzline.org/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 07:05:10 GMT -->
    <head>
        <title>GALLERY-VANI VIDYALAYA MATRIC.HR.SEC.SCHOOL</title>
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
        <!-- Begin page name -->
        <section class="page-name color-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-name-content">
                            <h1>Gallery</h1>
                            <ul class="bread-crumbs">
                                <li><a href="index.php">Home</a></li>
                                <li><p>Gallery</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><br>
        <!-- End page name -->
        <!-- Begin gallery content -->
        <main class="gallery-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                            
                        <div class="gallery-wrap">
                            <?php
                            $sql = "select `id`,`title`,`date`,`description`,`image`,`cby`,`cdate`,`cip`,`mby`,`mdate`,`mip`from `gallery` ORDER BY id DESC ";
                            $result = mysqli_query($mysqli, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                $title = $row['title'];
                                $date = $row['date'];
                                $description = $row['description'];
                                $image = explode( "," , $row['image']);
                                $cby = $row['cby'];
                                $cdate = $row['cdate'];
                                // $principal=$row['principal'];
                                $cip = $row['cip'];
                                $mby = $row['mby'];
                                $mdate = $row['mdate'];
                                $mip = $row['mip'];
                                ?>
                                <div class="gallery-card">
                                     <!--<a href="gallery1.php?id=<?php // echo  $row['id'];?>" class="color-2">-->
                                    <a href="gallery_view.php?id=<?php echo  $row['id'];?>" class="color-2">
                                        <img src="admin/master/<?php echo $image[0]; ?>"alt="gallery" style="width: 100%;height: 170px;">
                                        <span class="hide-desc h5">View</span> 
                                        <h4><?php echo $title; ?></h4>
                                    </a>                            
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        </main>
        <!-- End gallery content -->
        <!-- Begin footer -->
        <?php include_once "footer.php"; ?> 
       

    </body>
</html>
