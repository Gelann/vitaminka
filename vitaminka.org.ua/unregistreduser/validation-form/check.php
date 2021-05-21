<?php
   $login = filter_var(trim($_POST['login']), //Filter_var-фильтр по лишним значениям штмл которые не нужны в логине(1 параметр-что именно фильтруем $_POST['login'], 2 параметр метод фильтрации FILTER_SANITIZE_STRING)
   FILTER_SANITIZE_STRING);  //trim-удаление лишних пробелов    
   $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
   $surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING); 
   $bday = filter_var(trim($_POST['bday']),FILTER_SANITIZE_STRING);
   $phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);  
   $mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);  
 
    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo 'Недопустимая длина логина';
        exit();
    }
   
    else if(mb_strlen($pass) < 4 || mb_strlen($name) > 15) {
        echo 'Недопустимая длина пароля (от 2 до 15 символов)';
        exit();
    }
    else if(mb_strlen($bday) > '01.01.2022'){
        echo 'Вы еще не родились';
        exit();
    }

    $pass = md5($pass."qwerty1234");//хэширование пароля md5 в кавычках пишем что угодно на англ чтобы хэшировать

    $par1_ip = "localhost";
    $par2_name = "mila";
    $par3_p = "R6g7P4y3";
    $par4_db = "mila";
    
    
  
    
    
    $query = mysqli_query($induction, "SELECT  * FROM `clinics`");

    
    $mysql = new mysqli('localhost', 'mila', 'R6g7P4y3', 'mila');//подключение к бд
    $mysql->query("INSERT INTO `users` (`login`, `pass`,`name`, `surname`, `bday`,`phone`) VALUES ('$login', '$pass', '$name', '$surname', '$bday', '$phone', '$mail')");//запрос

    $mysql->close();//закрываем бд

    header('Location: ../registreduser/index.html');//переход обратно на страницу входа


    
?>