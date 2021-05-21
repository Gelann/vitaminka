<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">

<?php
if ($_COOKIE['user'] == ''): //если куки с названием юзер равно пустоте , то есть такого нет, то : значит что выводит код штмл 
?>
        <div class="row">
            <div class="col">
                <h2 class=" mt-5">Registration Form</h2>
                <form action="/registreduser/validation-form/check.php" method="post" style="width: 500px;">
                    <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин"><br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Введите имя"><br>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Зарегистрировать</button>
                </form>
            </div>

            <div class="col">
                <h2 class=" mt-5">Authorization Form</h2>
                <form action="/registreduser/validation-form/auth.php" method="post" style="width: 500px;">
                    <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин"><br>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Войти</button>
                </form>
            </div>
        </div>
        <?php else: ?>//если куки не пустое то выводим след код
            <p>Привет <?= $_COOKIE['user']?>
            Чтобы выйти нажмите <a href="/registreduser/exit.php">Здесь</a>
        
        </p>
        <?php endif;?>

    </div>
</body>

</html>