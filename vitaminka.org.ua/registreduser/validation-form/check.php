<?php
   $login = filter_var(trim($_POST['login']), //Filter_var-фильтр по лишним значениям штмл которые не нужны в логине(1 параметр-что именно фильтруем $_POST['login'], 2 параметр метод фильтрации FILTER_SANITIZE_STRING)
   FILTER_SANITIZE_STRING);  //trim-удаление лишних пробелов    
   $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
 
    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo 'Недопустимая длина логина';
        exit();
    }
    else if(mb_strlen($name) < 3 || mb_strlen($name) > 20) {
        echo 'Недопустимая длина имени';
        exit();
    }
    else if(mb_strlen($pass) < 4 || mb_strlen($name) > 15) {
        echo 'Недопустимая длина пароля (от 2 до 15 символов)';
        exit();
    }

    $pass = md5($pass."qwerty1234");//хэширование пароля md5 в кавычках пишем что угодно на англ чтобы хэшировать

    $mysql = new mysqli('localhost', 'mysql', 'mysql', 'draibolit-register');//подключение к бд
    $mysql->query("INSERT INTO `users` (`login`, `pass`,`name`) VALUES ('$login', '$pass', '$name')");//запрос

    $mysql->close();//закрываем бд

    header('Location: /registreduser/index2.php');//переход обратно на страницу регистр


    
?>