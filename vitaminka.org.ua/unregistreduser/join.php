<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/join.css">
    <title>Вход</title>
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
            <h1 class="authtext">Авторизация пользователя</h1>
    
<?php
if ($_COOKIE['user'] == ''): //если куки с названием юзер равно пустоте , то есть такого нет, то : значит что выводит код штмл 
?>
                <form action="/registreduser/validation-form/auth.php" method="post" style="width: 500px;">
                    <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин"><br>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Введите пароль"><br>
                    <button class="btn" type="submit">Войти</button><br>

                 
                </form> <a href="registration.php"><button class="btnn" type="submit">Зарегистрироваться</button></a>  
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
</body>
</html>