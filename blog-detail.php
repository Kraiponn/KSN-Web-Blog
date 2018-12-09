<?php
    require_once("php/connect.php");

    $id = $_GET["id"];
    $sql = "SELECT * FROM articles WHERE id = $id";
    $result = $conn->query($sql) or die($conn->error);

    //print_r($result);
    //header('Location: http://www.example.com/');
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    }else{
        header("location: blog.html");
    }

    $sql_rand = "SELECT * FROM articles WHERE status = 'true' ORDER BY RAND() LIMIT 6";
    $result_rand = $conn->query($sql_rand);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Detail</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/maps/documentation/javascript/cgc/demos.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/main.css">
    


</head>
<body>
<!-- Navigation Menu -->
    <?php include_once("includes/include.php"); ?>

<!-- Header -->
    <header class="jarallax" data-jarallax='{"speed": 0.4}' style="background-image: url('<?php echo $row["image"]; ?>")>
        <div class="blog-image">
            <h1 class="display-4 font-weight-bold"><?php echo $row["subject"]; ?></h1>
            <p class="lead"><?php echo $row["sub_title"]; ?></p>
        </div>
    </header>

<!-- Section Blog -->
    <div class="container blog-content">
        <div class="row">
            <div class="col-12">
                <h2><strong><?php echo $row["subject"]; ?></strong></h2>
                <?php echo $row["detail"]; ?>
                <!-- <p><strong>Mobile Dev คือ</strong>สำหรับสายงานฝั่ง Mobile Developer ในตอนนี้ ก็ยังคงเป็นที่ต้องการของตลาดอยู่ และน่าจะมีผู้ที่หลงเข้ามาอ่านหลายๆคนที่ตั้งเป้าหมายอยากจะทำงานเป็น Android Developer ดังนั้นเจ้าของบล็อกจึงขอฝากบทความนี้ให้เป็นบทความแนะนำสำหรับทุกๆท่านที่อยากจะผันตัวมาทำงานสายนี้นะครับ</p>
                <h3>แล้ว Junior Android Developer ควรรู้อะไรบ้างล่ะ?</h3>
                <ol>
                    <li>Activity Life Cycle </li>
                    <li>พื้นฐาน Java, แนวคิด OOP และการเขียนโปรแกรมแบบ MVC</li>
                    <li>รู้จักการใช้ Layout หรือ Widget พื้นฐานทั้งหลาย</li>
                    <li>ฝึกฝนการจัดวาง Layout </li>
                    <li>คิดอย่างมี Logic และเข้าใจใน Workflow</li>
                    <li>พยายามอัพเดทข้อมูลและข่าวสารใหม่ๆเกี่ยวกับ Android อยู่เสมอ</li>
                    <li>รู้จักการใช้งาน Resource </li>
                    <li>Version Control</li>
                </ol> -->
                <!-- <h2><strong>Version Control ?</strong></h2>
                <p>ยุคสมัยนี้ควรใช้ Version Control ให้เป็นได้แล้วนะครับ เพราะในการทำงานหลายๆที่เดี๋ยวจะมีการใช้ Version Control เข้ามาจัดการกับงานแต่ละโปรเจคอยู่แล้ว เพื่อให้โปรเจคดำเนินไปได้ดี ไม่วุ่นวาย โดยเฉพาะการทำงานในระดับทีม</p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
                <p class="text-right text-muted">2 ธันวาคม 2561</p>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <?php while($row_rand = $result_rand->fetch_assoc()){ ?>
                    <section class="col-12 p-3">
                        <div class="card h-100">
                            <a href="blog-detail.php?id=<?php echo $row_rand['id']; ?>" class="wrapper-card-img">
                                <img class="card-img-top" src="<?php echo $row_rand['image']; ?>" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_rand['subject']; ?></h5>
                                <p class="card-text"><?php echo $row_rand['sub_title']; ?></p>
                            </div>
                            <div class="p-3">
                                <a href="blog-detail.php?id=<?php echo $row_rand['id']; ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </section>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="fb-comments"
                data-href="http://localhost/webblog/blog-detail.php?id_ksnnajaroon=<?php echo $row['id'] ?>"
                data-width="100%" data-numposts="5"></div>
            </div>

            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2';
                    fjs.parentNode.insertBefore(js, fjs);
                }
                (document, 'script', 'facebook-jssdk'));
            </script>
        </div>
    </div>
    

<!-- Footer -->
    <?php include_once("includes/footer.php"); ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDascuY1auBpRr0ZUOkVigQsklvOZUrbVk &callback=initMap&callback=initMap" async defer></script>
    <script src="asset/js/main.js"></script>


    <script>
        $(function(){
            $('nav a.nav-link:contains(Blog)').parents().addClass('active');

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

            //$('.owl-carousel').owlCarousel();

            $('.owl-carousel').owlCarousel({
                loop:false,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });

        });
    </script>

</body>
</html>