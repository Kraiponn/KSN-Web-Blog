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
    <title>Blog</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/maps/documentation/javascript/cgc/demos.css">


</head>
<body id="blog">
<!-- Navigation Menu -->
    <?php include("includes/include.php"); ?>

<!-- Header -->
    <header data-jarallax data-speed="0.4" class="page-title jarallax" style="background-image: url('https://images.unsplash.com/photo-1520583457224-aee11bad5112?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d22936a15c78895fbf7994cea959c7ea&auto=format&fit=crop&w=1350&q=60');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 font-weight-bold">บทความ</h1>
                    <p class="lead">สั่งคมแห่งการพัฒนาเว็ปไซต์</p>
                </div>
            </div>
        </div>
    </header>

<!-- Section Blog -->
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=all">
                        <button class="btn btn-primary <?php echo $tag == 'all' ? 'active' : '' ?>">ทั้งหมด</button>
                    </a>
                    <a href="blog.php?tag=mobile-dev">
                        <button class="btn btn-primary <?php echo $tag == 'mobile-dev' ? 'active' : '' ?>">Mobile Dev.</button>
                    </a>
                    <a href="blog.php?tag=asp.net-core-mvc">
                        <button class="btn btn-primary <?php echo $tag == 'asp.net-core-mvc' ? 'active' : '' ?>">ASP.Net MVC</button>
                    </a>
                    <a href="blog.php?tag=laravel">
                        <button class="btn btn-primary <?php echo $tag == 'laravel' ? 'active' : '' ?>">Laravel</button>
                    </a>
                    <a href="blog.php?tag=node.js">
                        <button class="btn btn-primary <?php echo $tag == 'node.js' ? 'active' : '' ?>">Node.JS</button>
                    </a>
                    <a href="blog.php?tag=react.js">
                        <button class="btn btn-primary <?php echo $tag == 'react.js' ? 'active' : '' ?>">React.JS</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                if($result->num_rows){
                     while($row = $result->fetch_assoc()) { 
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

        });
    </script>

</body>
</html>