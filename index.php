<?php
    require_once("php/connect.php");
    
    $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
    //echo $tag;

    $sql = "SELECT * FROM articles WHERE tag LIKE '%".$tag."%' AND status = 'true' ORDER BY RAND() LIMIT 6";
    $result = $conn->query($sql);

    if(!$result){
        header('location: blog.php');
    }

    //print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>Main Page</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="asset/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="asset/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="asset/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="asset/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="asset/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="maps/documentation/javascript/cgc/demos.css">


</head>
<body id="home">
<!-- Navigation Menu -->
    <?php include("includes/include.php"); ?>

<!-- Show Slide Image -->
    <div id="img-indicator" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#img-indicator" data-slide-to="0" class="active"></li>
            <li data-target="#img-indicator" data-slide-to="1"></li>
            <li data-target="#img-indicator" data-slide-to="2"></li>
            <li data-target="#img-indicator" data-slide-to="3"></li>
            <li data-target="#img-indicator" data-slide-to="4"></li>
            <li data-target="#img-indicator" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img" style="background-image: url('asset/images/car1.png')">
                    <div class="carousel-caption">
                        <h5 class="display-4 font-weight-bold">Honda Accord G10</h5>
                        <p class="lead">All new 2018 honda accord geration 10th สามารถชมตัวจริงได้ที่งาน Thailand motor Expro 2018</p>
                    </div>
                    <div class="back-screen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('asset/images/car2.png')">
                    <div class="carousel-caption">
                        <h5 class="display-4 font-weight-bold">Toyota Fortuner</h5>
                        <p class="lead">All new 2018 honda accord geration 10th สามารถชมตัวจริงได้ที่งาน Thailand motor Expro 2018</p>
                    </div>
                    <div class="back-screen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('asset/images/car3.png')">
                    <div class="carousel-caption">
                        <h5 class="display-4 font-weight-bold">Toyota Fortuner TRD</h5>
                        <p class="lead">All new 2018 honda accord geration 10th สามารถชมตัวจริงได้ที่งาน Thailand motor Expro 2018</p>
                    </div>
                    <div class="back-screen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('asset/images/car4.png')">
                    <div class="carousel-caption">
                        <h5 class="display-4 font-weight-bold">Chevrolet CRUZE LTZ</h5>
                        <p class="lead">All new 2018 honda accord geration 10th สามารถชมตัวจริงได้ที่งาน Thailand motor Expro 2018</p>
                    </div>
                    <div class="back-screen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('asset/images/car5.png')">
                    <div class="carousel-caption">
                        <h5 class="display-4 font-weight-bold">Honda Accord G9</h5>
                        <p class="lead">All new 2018 honda accord geration 10th สามารถชมตัวจริงได้ที่งาน Thailand motor Expro 2018</p>
                    </div>
                    <div class="back-screen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('asset/images/car6.png')">
                    <div class="carousel-caption">
                        <h5 class="display-4 font-weight-bold">Honda Accord G8</h5>
                        <p class="lead">All new 2018 honda accord geration 10th สามารถชมตัวจริงได้ที่งาน Thailand motor Expro 2018</p>
                    </div>
                    <div class="back-screen"></div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#img-indicator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#img-indicator" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!-- Policy -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">นโยบายของเรา</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

<!-- Web Blog -->
    <section class="container">
        <h3 class="border-short-bottom display-4 text-center">
            เว็ปบล็อค
        </h3>
        <div class="row">
            <?php 
                if($result->num_rows){
                    while($row = $result->fetch_assoc()){
            ?>

            <section class="col-12 col-sm-6 col-md-4 p-3"> 
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row["id"]; ?>" class="wrapper-card-img">
                        <img class="card-img-top" src="<?php echo $row["image"]; ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["subject"]; ?></h5>
                        <p class="card-text"><?php echo $row["sub_title"]; ?></p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>

            <?php }
                }else{
            ?>
            <div class="col-12">
                <p class="text-center">ไม่มีข้อมูลตามที่ร้องขอ</p>
            </div>
            <?php } ?>
        </div>
    </section>

<!-- Footer -->
    <?php include_once("includes/footer.php"); ?>

<!-- Button Go To Sroll Top -->
    <img id="img-scroll-top" src="asset/images/go_top.png" alt="Scroll To Top">

<!-- Form Alert Dialog -->
    <form id="form-alert-dialog" class="p-3">
        <div class="row">
            <div class="col-md-8">
                <h5 class="">ร่วมสนุกกับเรา</h5>
            </div>
            <div class="col-md-4">
                <a href="#" class="float-right text-dark font-weight-bold"><h4>[X]</h4></a>
            </div>
        </div>

        <hr>
        <div class="form-group">
            <label for="">อีเมล์</label>
            <input type="text" class="form-control form-control-sm">
        </div>
        <div class="form-group">
            <label for="">รหัสผ่าน</label>
            <input type="text" class="form-control form-control-sm">
        </div>

        <button class="btn btn-default float-right">ยืนยัน</button>
    </form>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDascuY1auBpRr0ZUOkVigQsklvOZUrbVk &callback=initMap&callback=initMap" async defer></script>
    <script src="asset/js/main.js"></script>

    <script>
        $(function(){
            $(window).scroll(function(){
                var scrollTop = $(this).scrollTop();
                if(scrollTop > 1){
                    $('#navbar').css("padding", "5px 25px");
                    $('#img-scroll-top').show();
                }else{
                    $('#navbar').css("padding", "25px");
                    $('#img-scroll-top').hide();
                }
            });


            $('#img-scroll-top').hover(
                function(){ $(this).css('opacity', 1); },
                function() { $(this).css('opacity', 0.5); } 
            );

            $('#img-scroll-top').click(function(){
                $(window).scrollTop(0);
            });

            // Form Alert Dialog
            $('#form-alert-dialog').slideDown(1500);

            $('#form-alert-dialog :button, #form-alert-dialog a').click(function(event){
                event.preventDefault();
                $('#form-alert-dialog').slideUp(500);
            });;


            
            // $("#home a:contains('Home')").parents().addClass("active");
            // $("#about a:contains('about')").parents().addClass("active");
            // $("#blog a:contains('Blog')").parents().addClass("active");
            // $("#contact a:contains('Contact')").parents().addClass("active");

        });
    </script>

</body>
</html>