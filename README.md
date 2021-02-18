# validation-system

**Sourcecloud validation system** is **Iranian** system for licensing source codes. you can also licensing your php project with this code , so that whenever ours are goes to this special page this license is checked and if there is any different program doesn't flow you to enter.

# How to use

1 - first you should receive your products token from sourcecloud website support
+ What is the token code : In fact we use this code for find your product from that license
enter your token code In **```lis/lisdata.php```** line 12th.

2 - there's two way for checking license in  this  script
+ **```verify.php```** file is for license primitive check for user. (First time user inter his license)
+ License code save in **```lis/config.php```** file.
+ **```check.php```** file is for checking the sooth of user's license in **```verify.php```** file he entered he's fine helps you whenever you're licensed accessibility was closed programs start working

3 - you can put this code inside your source then whenever your other license was locked system will guide you to **```verify.php```** page.

```
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
```

4 - In **```verify.php```** file if the entire license was correct you can make 140 line for user to guide to your page.

# Type of response
After sending the request to the server, it responds in the form of **Jason**. 
This **Jason** has two values :
+ **1 - success :** If this value is equal to true, it means that the entered license is correct, and if it is equal to false, it means it is false.
+ **2 - data :** To determine the license status, the server responds as a number to determine the license status. The various server responses are listed below : 

```
100 : $error_text = "کد لایسنس شما معتبر و لایسنس با موفقیت فعال گردید"; 
101 : $error_text = "کد توکن نامعتبر می باشد. شرح خطا را از طریق تیکت با فروشنده مطرح نمائید"; 
102 : $error_text = "محصول فوق، فاقد لایسنس می باشد. شرح خطا را از طریق تیکت با فروشنده مطرح نمائید"; 
103 : $error_text = "کد لایسنس وارد شده صحیح نمی باشد"; 
104 : $error_text = "لایسنس فوق قبلاً ثبت شده است و یا ظرفیت فعال سازی لایسنس تکمیل شده است"; 
105 : $error_text = "لایسنس فوق غیرفعال شده است. جهت بررسی، موضوع را از طریق تیکت با فروشنده مطرح نمائید"; 
106 : $error_text = "اطلاعات ارسالی درست نمی باشند. کد و شرح خطا را از طریق تیکت با فروشنده مطرح نمائید"; 
107 : $error_text = "ثبت کد توکن الزامی می باشد"; 
108 : $error_text = "آدرس دامنه ارسالی معتبر نمی باشد"; 
109 : $error_text = "ثبت کد لایسنس الزامی می باشد"; 
110 : $error_text = "یک خطای نامشخص رخ داده است";
113 : $error_text = "کاربر گرامی، شما فقط مجاز به نصب محصول بصورت لوکال می باشید"; 
114 : $error_text = "کاربر گرامی، شما فقط مجاز به نصب محصول بر روی هاست می باشید"; 
```

# For example

I nice and sink my project this way :
code snippet in **```index.php```** file for checking his license first whenever outer once enter to my project file and if user's license was incorrect or whatever you got to verify that **PHP** page.
You can put your code wherever you want to protect you from hackers and being cracked.

+ For more tips you can send your ticket to **sourcecloud.ir** website support.
