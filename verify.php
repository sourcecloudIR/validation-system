<?php
/*
    برسی صحت لایسنسی که کاربر وارد می کند
Product Name :              oxoo
Version :                   1.3.3
URI :                       Sourcecloud.IR
Email :                     support@Sourcecloud.IR
Developer Team :            Codegraphi team
*/
require 'lis/lisdata.php';
if (isset($_POST['submit_ok']))
    {
         $license_code           = ($_POST['LICENSE_CODE']);
         $my_file = 'lis/config.php';
         $handle = fopen($my_file, 'w') or die('Cannot open file:  ' . $my_file);
        $data = '<?php 
        $license_code= "' . $license_code . '"; 
        ?>';
        fwrite($handle, $data);
        
$result = send_lis($api_main_url . $license_active . "&license=". $license_code ."&url=" . $domain ."&token=" . $token);	
        if(is_array($result["data"])){
            $license_data_data=$result["data"]['code'];
            $license_data_data_error=$result['data']['error'];
            }else{
            $license_data_data=$result["data"];    
            }
		    switch ($license_data_data){
		        case 100 : $error_text = "کد لایسنس شما معتبر و لایسنس با موفقیت فعال گردید"; break;
		        case 101 : $error_text = "کد توکن نامعتبر می باشد. شرح خطا را از طریق تیکت با فروشنده مطرح نمائید"; break;
		        case 102 : $error_text = "محصول فوق، فاقد لایسنس می باشد. شرح خطا را از طریق تیکت با فروشنده مطرح نمائید"; break;
		        case 103 : $error_text = "کد لایسنس وارد شده صحیح نمی باشد"; break;
				case 104 : $error_text = "لایسنس فوق قبلاً ثبت شده است و یا ظرفیت فعال سازی لایسنس تکمیل شده است"; break;
		        case 105 : $error_text = "لایسنس فوق غیرفعال شده است. جهت بررسی، موضوع را از طریق تیکت با فروشنده مطرح نمائید"; break;
		        case 106 : $error_text = "اطلاعات ارسالی درست نمی باشند. کد و شرح خطا را از طریق تیکت با فروشنده مطرح نمائید"; break;
		        case 107 : $error_text = "ثبت کد توکن الزامی می باشد"; break;
		        case 108 : $error_text = "آدرس دامنه ارسالی معتبر نمی باشد"; break;
		        case 109 : $error_text = "ثبت کد لایسنس الزامی می باشد"; break;
		        case 110 : $error_text = "یک خطای نامشخص رخ داده است"; break;
				case 111 : $error_text = "شما مجاز به نصب محصول فقط در مسیر $license_data_data_error می باشید"; break;
		        case 112 : $error_text = "محصول شما در تاریخ $license_data_data_error  منقضی شده است. جهت تمدید می توانید درخواست تمدید مجدد را از طریق تیکت برای فروشنده ارسال نمائید."; break;
		        case 113 : $error_text = "کاربر گرامی، شما فقط مجاز به نصب محصول بصورت لوکال می باشید"; break;
		        case 114 : $error_text = "کاربر گرامی، شما فقط مجاز به نصب محصول بر روی هاست می باشید"; break;
                }}?>

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
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://sourcecloud.ir/wp-content/uploads/2020/12/SC255-copy.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title" >
					    <font face=tahoma style="font-size:25px">
						اعتبار سنجی محصول خریداری شده
						</font>
					</span>
					<span class="login100-form-title" >
					    <font face=tahoma style="font-size:14px">
						    لایسنس درست برای تست 7e8fd76178f41b59ab2a9436c817653aa5e3b73f
						</font>
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="txt" id="LICENSE_CODE" name="LICENSE_CODE"  placeholder="کد لایسنس سورس کلود">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="submit_ok" class="login100-form-btn">
					     <font face=tahoma style="font-size:20px">
							اعتبار سنجی
						 </font>
						</button>
					</div>
					
					<div class="text-center p-t-136">
						<a class="txt2" href="https://sourcecloud.ir/panel/?page=orders">
					    <font face=tahoma style="font-size:15px">
							دریافت کد اعتبار سنجی
						</font>
						</a>
					</div>
				</form>

			</div>
		
		
		    <?php if (!empty($ok) && $ok==='yes'){ ?>
		        <span class="login100-form-title" style='font-family:Tahoma;font-size:30px;text-align:center'><?php echo $error_text; ?></span><?php
		        
		    }else{
		        echo "<span class='login100-form-title' style='font-family:Tahoma;font-size:30px;text-align:center' >$error_text</span>" ;
		        
		    } ?>
		    
				<?php
					if ($result["success"] === true && $result["data"] === 100) {
				        /* اگر لایسنس وارد شده درست باشد */
                        echo "<script>location.href='check.php';</script>";
                        
                       	} else{
                       	    
                       } ?>   
                       
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

