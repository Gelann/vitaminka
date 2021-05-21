<?php
 $login = filter_var(trim($_POST['login']), //Filter_var-фильтр по лишним значениям штмл которые не нужны в логине(1 параметр-что именно фильтруем $_POST['login'], 2 параметр метод фильтрации FILTER_SANITIZE_STRING)
 FILTER_SANITIZE_STRING);  //trim-удаление лишних пробелов    
 $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);


 $pass = md5($pass."qwerty1234");//хэширование пароля md5 в кавычках пишем что угодно на англ чтобы хэшировать

 $mysql = new mysqli('localhost', 'mila', 'R6g7P4y3', 'mila');//подключение к бд


 $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");//ищем значения логин и пароль есть ли в бд
 $user = $result->fetch_assoc();//fetch_assoc()конвертирует все эти данные в массив
 if(count($user) == 0){ //если длинна массива равно 0 то значит такого пользователя нет
     echo "Такой пользователь не найден";
     exit();
 }

setcookie('user', $user['name'], time() + 3600, "/");//setcookie устанавливает куки 
//первый парам - имя любое, значение кот устанавл (name),
//2 парам время в сек сколько она живет 3600 сек или можно еще *24 и получится плюс день и тд
//3 парам указываем где куки живет "/" - значит на всех страницах сайта


 $mysql->close();//закрываем бд

 header('Location: /registreduser/index.html');//пользователь зарегистрирован


?>