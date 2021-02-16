<?php
/*
      برسی فعال بودن لایسنس اولیه کاربر
Product Name :              oxoo
Version :                   1.3.3
URI :                       Sourcecloud.IR
Email :                     support@Sourcecloud.IR
Developer Team :            Codegraphi team
*/
?>
<head>
	<title>اعتبار سنجی</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://license.sourcecloud.ir/verify/css/main.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://license.sourcecloud.ir/verify/css/util.css">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="https://sourcecloud.ir/wp-content/uploads/2020/12/SC255-copy.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://license.sourcecloud.ir/verify/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://license.sourcecloud.ir/verify/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://license.sourcecloud.ir/verify/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://license.sourcecloud.ir/verify/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://license.sourcecloud.ir/verify/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/flaticon.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/slicknav.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/animate.min.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/themify-icons.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/slick.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/nice-select.css">
    <link rel="stylesheet" href="http://license.sourcecloud.ir/verify/assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<!--===============================================================================================-->
</head>

<body>
	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100">
			    <?php    
                   require 'lis/lisdata.php';
                   require 'lis/config.php';
                   $valid_lis = send_lis($api_main_url . $license_check . "&license=". $license_code ."&url=" . $domain ."&token=" . $token);	
                   if ($valid_lis["success"] === true && $valid_lis["data"] === 100) {
                      echo "<span class='login100-form-title' style='font-family:Tahoma;font-size:30px;text-align:center' >لایسنس وارد شده درست است</span>" ;
                         /* اگر لایسنس وارد شده درست باشد */
                      
                    } else{
		              echo "<span class='login100-form-title' style='font-family:Tahoma;font-size:30px;text-align:center' >لایسنس وارد شده اشتباه است</span>" ;
                        /* اگر لایسنس وارد شده درست نباشد */
                    }?>
                    
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn">
					     <a class="login100-form-btn" href="../system/verify.php">
					    <font face=tahoma style="font-size:20px">
							 وارد کردن لایسنس
						</font>
						</a>
						</button>
				</div>
			</div>
		</div>
	</div>
	
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="https://sourcecloud.ir/wp-content/uploads/2020/12/SC255-copy.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
	
<!--===============================================================================================-->	
	<script src="http://license.sourcecloud.ir/verify/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://license.sourcecloud.ir/verify/vendor/bootstrap/js/popper.js"></script>
	<script src="http://license.sourcecloud.ir/verify/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="http://license.sourcecloud.ir/verify/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="http://license.sourcecloud.ir/verify/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="http://license.sourcecloud.ir/verify/js/main.js"></script>
<!--===============================================================================================-->
    <script src="http://license.sourcecloud.ir/verify/assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- Jquery, Popper, Bootstrap -->
	<script src="http://license.sourcecloud.ir/verify/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/popper.min.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/bootstrap.min.js"></script>
	<!-- Jquery Mobile Menu -->
    <script src="http://license.sourcecloud.ir/verify/assets/js/jquery.slicknav.min.js"></script>
	<!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="http://license.sourcecloud.ir/verify/assets/js/owl.carousel.min.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="http://license.sourcecloud.ir/verify/assets/js/gijgo.min.js"></script>
	<!-- One Page, Animated-HeadLin -->
    <script src="http://license.sourcecloud.ir/verify/assets/js/wow.min.js"></script>
	<script src="http://license.sourcecloud.ir/verify/assets/js/animated.headline.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/jquery.magnific-popup.js"></script>
	<!-- Scrollup, nice-select, sticky -->
    <script src="http://license.sourcecloud.ir/verify/assets/js/jquery.scrollUp.min.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/jquery.nice-select.min.js"></script>
	<script src="http://license.sourcecloud.ir/verify/assets/js/jquery.sticky.js"></script>
    <!-- contact js -->
    <script src="http://license.sourcecloud.ir/verify/assets/js/contact.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/jquery.form.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/jquery.validate.min.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/mail-script.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/jquery.ajaxchimp.min.js"></script>
	<!-- Jquery Plugins, main Jquery -->	
    <script src="http://license.sourcecloud.ir/verify/assets/js/plugins.js"></script>
    <script src="http://license.sourcecloud.ir/verify/assets/js/main.js"></script>
<!--===============================================================================================-->
</body>
</html>