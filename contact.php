<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="/maps/documentation/javascript/cgc/demos.css"> -->
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/main.css">
    


</head>
<body id="contact">
<!-- Navigation Menu -->
    <?php include("includes/include.php"); ?>

<!-- Header -->
    <header class="jarallax" data-jarallax data-speed="0.2" style="background-image: url('https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-0.3.5&s=01ecf1b5dc59d106e635bd76500bbb07&auto=format&fit=crop&w=1350&q=60');">
        <div class="blog-image">
            <h1 class="display-4 font-weight-bold">ข้อมูลการติดต่อ</h1>
            <p class="lead">คุณสามารถติดต่อสอบถามข้อเพิ่มเติมตามด้านล่าง</p>
        </div>
    </header>

<!-- Section Blog -->
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-short-bottom">รายละเอียด</h2>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-address-card fa-3x text-info py-2" aria-hidden="true"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p>99/9 คลองหลวง ปทุมธานี</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-phone-square fa-3x text-info py-2" aria-hidden="true"></i>
                        <h4 class="card-title">เบอร์โทร</h4>
                        <p>(+66)95-7396209</p>
                    </div>
                </div>
            </div>  
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-envelope-o fa-3x text-info py-2" aria-hidden="true"></i>
                        <h4 class="card-title">อีเมล์</h4>
                        <p>kraipon.na10@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">แบบฟอร์มติดต่อเรา</h4>
                        <form action="php/contacts.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" id="name" name="name" class="form-control" require placeholder="ชื่อของคุณ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">เบอร์โทร</label>
                                    <input type="text" id="phone" name="phone" class="form-control" require placeholder="เบอร์โทรของคุณ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">อีเมล์</label>
                                    <input type="email" id="email" name="email" class="form-control" require placeholder="เมล์ของคุณ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">ข้อความแสดงความเห็น</label>
                                <textarea name="message" id="message" rows="3" class="form-control" require placeholder="แสดงความเห็น"></textarea>
                            </div>
                            <div id="recaptcha-wrapper" class="text-center my-2">
                                <div class="g-recaptcha d-inline-block" data-callback="recaptchaCallBack" data-sitekey="6Leno34UAAAAAF9XWoQkdtboYAMC_l3_MYeFKnJQ"></div>
                            </div>
                            <button id="btn-submit" name="btn-submit" disabled class="btn btn-primary d-block mx-auto" type="submit">ส่งข้อความ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<!-- Footer -->
    <?php include_once("includes/footer.php"); ?>

 <!-- On to Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDascuY1auBpRr0ZUOkVigQsklvOZUrbVk &callback=initMap&callback=initMap" async defer></script>
    <script src="asset/js/main.js"></script>


    <script>
        function resizeCaptcha() {
            if (captchaWrapper.width() >= captchaWidth) {
                if (captchaResized) {
                    captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                    captchaWrapper.height(captchaHeight);
                    captchaResized = false;
                }
            } else {
                var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
                captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
                captchaWrapper.height(captchaHeight * scale);
                if (captchaResized == false) captchaResized = true;
            }
        }
        // resizeCaptcha();


        $(function(){


            // global variables
            captchaResized = false;
            captchaWidth = 304;
            captchaHeight = 78;
            captchaWrapper = $('#recaptcha-wrapper');
            captchaElements = $('#rc-imageselect, .g-recaptcha');

            $(window).on('resize', function() {
                resizeCaptcha();
            });

            resizeCaptcha();

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
                loop:true,
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

            if($(window).scroll(function(){
                if($(window).scrollTop() > 1){
                    $('.to-top').slideDown(450);
                    //$('.to-top').show();
                }else{
                    $('.to-top').slideUp(300);
                }
            }));
            

            $('.to-top').click(function(){
                $('html, body').animate({'scrollTop': '0px'}, 400);
                //console.log('to top click');
            });

        });

        function recaptchaCallBack(){
            //console.log("test");
            $('#btn-submit').removeAttr("disabled");
        }
    </script>

</body>
</html>