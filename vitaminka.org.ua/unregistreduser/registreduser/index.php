<?php 
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Пример вывода формы бронирования (заказа) - Ag Booking CMS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<style>
	body {padding:0;margin:0;font-family:Tahoma,Arial;background:#fff;color:#000;line-height:1;font-size:16px}
	h1,h2,h3,h4 {font-weight:normal;line-height:1.6}
	h1 {font-size:160%}
	h2 {font-size:140%}
	h3 {font-size:120%}
	h4 {font-size:110%}
	a {color:#FC8F1A}
	.header {padding:36px;background:#f3f3f5;border-bottom: 1px solid #e7e7ea;}
	.content {padding:36px;}
	.inner {width:70%;padding:0;margin:0 auto;}
	.footer {padding:36px;background:#232329;color:#a3a3a9;text-align:right}
	.footer a {color:#fff}
	@media screen and (max-width:1020px){
	.inner {width:100%}
	.header,.content,.footer {padding:16px;}
	}
	</style>
  </head>
  <body>
  
    <div class="header">
	  <div class="inner">
	    <h1>Пример вывода формы бронирования (заказа) - Ag Booking CMS</h1>
	  </div>
	</div>
	
    <div class="content">
	  <div class="inner">
<?php include('site_form.php'); // форма ?> 
      </div>
	</div>
	
	<div class="footer">
	  <div class="inner">
	    <a href="#">Your Site</a> Copyright &copy; 2018
	  </div>
	</div>
	
  </body>
</html>