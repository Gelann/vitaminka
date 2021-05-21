<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/allmeets.css">
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

	.content {padding:36px;}
	.inner {width:70%;padding:0;margin:0 auto;}
	.footer {padding:36px;background:#232329;color:#a3a3a9;text-align:right}
	.footer a {color:#fff}
	@media screen and (max-width:1020px){
	.inner {width:100%}
	.header,.content,.footer {padding:16px;}
	}
	</style>
   <title>All Meets</title>
</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-4  header">
        <div class="col-4">
            <a id="" href="#" class="d-flex align-items-center py-2 text-dark text-decoration-none">
                <span class="fs">DR.AIBOLIT</span>
            </a>
        </div>
        <div class="col-8">
            <ul class="nav nav-pills headlist justify-content-end ">
                <li class="nav-item">
                    <a class="nav-link link-dark text-dark" href="index.html">Главная</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-dark text-dark" href="index.php">Приемы</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-dark text-dark" href="services.html">Услуги</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-dark text-dark" href="index2.php">Отзывы</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-dark text-dark" href="contact.html">Контакты</a>
                </li>
                <li class="nav-item ">
                    <a class="btn btn-outline-dark" href="#">Профиль</a>
                </li>
            </ul>
        </div>

    </header>
<main>
    <h1>Запись на прием</h1>
    <h3>Выберете</h3>
    
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
	
</main>
</body>
</html>