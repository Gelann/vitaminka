<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/registration.css">
    <title>Регистрация</title>
</head>
<body>
<header class="d-flex flex-wrap justify-content-center  header">
            <a id="" href="#" class="d-flex align-items-center py-2 text-dark text-decoration-none">
                <span class="fs">DR.AIBOLIT</span>
            </a>
</header>
<main>
    <div class="container cont">
        <div class="block">
            <h1 class="authtext">Регистрация пользователя</h1>
    
<?php
if ($_COOKIE['user'] == ''): //если куки с названием юзер равно пустоте , то есть такого нет, то : значит что выводит код штмл 
?>
                <form action="validation-form/check.php" method="post" style="width: 500px;">
                    <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин"><br>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Введите пароль"><br>
                    <input type="text" name="pass" id="name" class="form-control" placeholder="Введите имя"><br>
                    <input type="text" name="pass" id="surname" class="form-control" placeholder="Введите фамилию"><br>
                    <input type="date" name="pass" id="bday" class="form-control" placeholder="Введите дату рождения"><br>
                    <input type="tel" name="pass" id="phone" class="form-control" placeholder="Введите номер телефона"><br>
                    <input type="text" name="mail" id="mail" class="form-control" placeholder="Введите вашу почту"><br>
                  <a href="check.php"><button class="btn" type="submit">Зарегистрироваться</button><br></a>  
                </form>
            </div>
        </div>
        <?php else: ?>//если куки не пустое то выводим след код
            <p>Привет <?= $_COOKIE['user']?>
            Чтобы выйти нажмите <a href="/registreduser/exit.php">Здесь</a>
        
        </p>
        <?php endif;?>

    </div>
        </div>
    </div>
</main>
<footer class="foot">
        <div class="row social">
            <a href="http://">
                <img class="face" src="img/facebook.png" width="50px" height="50px"></a>
            <a href="http://">
                <img class="mail" src="img/mail.png" width="50px" height="50px"></a>
            <a href="http://">
                <img class="teleg" src="img/telegram.png" width="50px" height="50px"></a>
            <a href="http://">
                <img class="twitter" src="img/twitter.png" width="50px" height="50px"></a>
        </div>
        <h4 class="licence">Лицензия ЛО-77-01-021025 от 25.01.2021 г.<br>

            выдана Департаментом здравоохранения г. Москвы. Медицинские услуги оказывает ООО "НеваКлиник"<br>

            2021 © Сеть клиник "Нева"</h4>
    </footer>
</body>
</html>