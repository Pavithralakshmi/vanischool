<?php
include_once "db.php";
$id = $_GET['id'];
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>GALLERY-VANI VIDYALAYA MATRIC.HR.SEC.SCHOOL</title>
        <style>
            *{ margin: 0; padding: 0;}
            body { background-color: #fafafa; }
            /*.container21 { margin: 150px auto; max-width: 960px; text-align: center; }*/
            .container21 { text-align: center; }
            .img-container {
                /*margin: 20px;*/
            }
           .gallery-card  img {   height: 250px; width: 535px;padding-bottom: 12px;}
        </style>

        <link href="css/index.css" type="text/css" rel="stylesheet" />
    </head>
    <body  class="home">
        <?php include_once "head.php"; ?> 
        <section class="page-name color-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-name-content">
                            <h1>Gallery</h1>
                            <ul class="bread-crumbs">
                                <li><a href="index.php">Home</a></li>
                                <li><p><a href="gallery.php">Back</a></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><br>

        <main class="gallery-content">
            <div class="container21">
                <div class="row">
                    <div class="col-md-12">  
                        <?php
                        $sql = "select `id`,`title`,`date`,`description`,`image`,`cby`,`cdate`,`cip`,`mby`,`mdate`,`mip`from `gallery` where id=$id ORDER BY id DESC ";
                        $result = mysqli_query($mysqli, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            $title = $row['title'];
                            $date = $row['date'];
                            $description = $row['description'];
                            $image = explode(",", $row['image']);
                            $cby = $row['cby'];
                            $cdate = $row['cdate'];
                            $cip = $row['cip'];
                            $mby = $row['mby'];
                            $mdate = $row['mdate'];
                            $mip = $row['mip'];
                            ?>
                            <center><h3><?php echo $title; ?></h3></center>
                            <div class="img-container">
                                <div class="gallery-wrap">
                                    <?php foreach ($image as $key) { ?>
                                        <div class="gallery-card">
                                            <img src="admin/master/<?php echo $key; ?>"alt="<?php echo $title; ?>" >
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div></div></div></main><br>
        <?php include_once "footer.php"; ?> 
        <script src="js/jquery.popup.lightbox.js"></script>
        <script>
            $(document).ready(function () {
                $(".img-container").popupLightbox({
                    width:"90%",
                    height: "96%",
                });
            });
        </script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function () {

                var ga
                        = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBef
                ore(ga, s);
            })();

        </script>


    </body>
</html>
