<?php
$par1_ip = "localhost";
$par2_name = "mila";
$par3_p = "R6g7P4y3";
$par4_db = "mila";


$induction = mysqli_connect("localhost", "mila", "R6g7P4y3", "mila");


$query = mysqli_query($induction, "SELECT  * FROM `clinics`");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js"></script>
<link rel="stylesheet" href="chatbot/chatbot.css">
    <title>Main Page</title>
</head>

<body>
    <header class="d-flex flex-wrap justify-content-center py-4 ml-5 mr-5 header">
        <div class="col-4">
            <a id="" href="#" class="d-flex align-items-center py-2 text-dark text-decoration-none">
                <span class="fs">DR.AIBOLIT</span>
            </a>
        </div>
        <div class="col-8">
            <ul class="nav nav-pills headlist justify-content-end ">
                <li class="nav-item">
                    <a class="nav-link link-dark text-dark" href="index.php">Главная</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link link-dark text-dark" href="meet.html">Наша команда</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-dark text-dark" href="services.html">Услуги</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-dark text-dark" href="#">Отзывы</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-dark text-dark" href="contact.html">Контакты</a>
                </li>

                <li class="nav-item ">
                    <a class="btn btn-outline-dark" href="join.php">Вход</a>
                </li>
            </ul>
        </div>

    </header>

    <div class="row logo d-flex " style="height: 600px; flex-wrap: nowrap;">
        <div class="col mx-5 pett">
            <h1 class="blog-post-title" style="font-family: 'Montserrat', sans-serif !important; font-size: 80px !important; color: #333333 !important">
                <strong>Pet<br> Care</strong>
            </h1>

            <h5 style="font-family: 'Montserrat', sans-serif !important;; font-size: 35px !important; ">House Call
                Veterinarian</h5>
            <a class="btn btn-outline-light butonmain" href="join.php">Записаться на приём</a>
        </div>
        <div class="col-md-6">

            <img class="dog mt-4 img-fluid" src="img/dog4.png" style="width: 433px; height: 415px; margin-top: 40px !important;">

        </div>
    </div>

    <h1 class="services mt-md-4 mb-4">Услуги</h1>
    <img class="dogs img-fluid mx-auto d-block" src="img/u28.png">
    <div class="row">
        <div class="col-4 endo">

            -ЭНДОСКОПИЯ<br>
            -СТАЦИОНАР<br>
            -ХИРУРГИЯ<br>
            <a class="btn btn-outline-dark buy" href="#">Купить</a>

        </div>
        <div class="col-4 endo1">
            -ЭНДОСКОПИЯ<br>
            -СТАЦИОНАР<br>
            -ХИРУРГИЯ<br>
            <a class="btn btn-outline-dark buy" href="#">Купить</a>
        </div>
        <div class="col-4 endo2">
            -ЭНДОСКОПИЯ<br>
            -СТАЦИОНАР<br>
            -ХИРУРГИЯ<br>
            <a class="btn btn-outline-dark buy" href="#">Купить</a>
        </div>
    </div>
    <div class="container">
        <div class="about">
            <h1 class="abouth1">О нас</h1>
            <h3 class="lor">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat accusamus, assumenda
                expedita accusantium magni repellat quos eveniet ullam nam aliquam repellendus optio. Cumque, vero labore
                eius placeat nulla voluptatibus.<br>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex architecto ipsam est laudantium ea id inventore
                animi, dicta, saepe esse quam nesciunt provident repudiandae mollitia amet cumque consectetur, ab iure?<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nostrum dolorem consectetur,
                perferendis delectus nemo quo optio hic et corrupti! Quidem dolor assumenda voluptates aperiam accusamus
                nostrum doloribus, accusantium repudiandae!<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odio quae sint sunt explicabo. Aliquam ea
                provident voluptas? Magnam ducimus, tempora obcaecati ipsa reprehenderit perspiciatis pariatur laudantium
                eos nisi. Unde!</h3>
        </div>
    </div>
    <div class="adress">
        <h1 class="medh1">Медицинский центр "Доктор Айболит"</h1>
        <div class="container cont">
            <div class="row">
                <?php
                while ($result = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="col-6">
                        <div class="pic">
                            <img src="<?php echo $result['pic']; ?>.png">
                        </div>

                        <h4 class="yl"><?php echo $result['adress']; ?></h4>
                    </div>

                <?php
                }
                ?>

            </div>
            <div class="container cont">
                <div class="row">
                <?php
                    while ($result = mysqli_fetch_assoc($query)){
                        ?>
                        <div class="col-6">
                        <div class="pic">
                            <img src="<?php echo $result['pic']?>.png" alt="" srcset="">
                        </div>
                        <h4 class="yl"><?php echo $result['adress']?></h4>
                    </div>
                    <?php
                    }
                ?>

                   
                   
                </div>
            </div>
        </div>
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
        <div class="botsocial">
       
       <div class="chatbot-btn"><img src="img/bot.png" width="50px" height="50px">
           <div class="chatbot-toggle-tooltip">Есть вопрос?</div>
       </div>
 
 <!-- FingerPrint JS -->
 <script src="chatbot/fp2.js"></script>
 <!-- ChatBot JS -->
 <script src="chatbot/chatbot.js"></script>

 <script>
   // 1 - Указание ключа в localstorage, в котором будет храниться отпечаток браузера
   const keyLS = 'fingerprint';
   // 2 - Указание CSS селектора кнопки, с помощью которой будем вызывать окно диалога с чат-ботом
   const chatbotBtnSel = '.chatbot-btn';
   // 3 - URL к chatbot.php
   const url = '../chatbot/chatbot.php';
   // 4 - Описание данных, определяющие сценарий диалога для чат-бота
   const data = {
     bot: {
       0: {
         content: ['Привет!', 'Я Том - бот поддержки сайта DR AIBOLIT'], human: [0, 1, 2]
       },
       1: { content: 'Я тоже рад, как мне к Вам обращаться?', human: [3] },
       2: { content: 'Как мне к Вам обращаться?', human: [3] },
       3: { content: '{{name}}, что Вас интересует?', human: [4, 5, 7] },
       4: { content: '{{name}}, Наши клиники работают с 9:00-19:00 с понедельника по пятницу', human: [6] },
       5: { content: '{{name}}, Цены на услуги указаны на сайте во вкладке Услуги', human: [6] },
       7: { content: '{{name}}, С нами можно связаться по контактам указанным во вкладке Контакты', human: [6] },
     },
     human: {
       0: { content: 'Привет!', bot: 1 },
       1: { content: 'Салют!', bot: 2 },
       2: { content: 'Приветик, Том!', bot: 2 },
       3: { content: '', bot: 3, name: 'name' },
       4: { content: 'Время работы больниц', bot: 4 },
       5: { content: 'Где посмотреть цены на услуги?', bot: 5 },
       6: { content: 'В начало', bot: 3 },
       7: { content: 'Как можно с вами связаться?', bot: 7, name: '' },

       
     }
   }
   // добавление хэша fingerprint в localstorage
   let fingerprint = localStorage.getItem(keyLS);
   if (!fingerprint) {
     Fingerprint2.get(function (components) {
       fingerprint = Fingerprint2.x64hash128(components.map(function (pair) { return pair.value }).join(), 31)
       localStorage.setItem(keyLS, fingerprint)
     });
   }
   // инициализация ChatBotByItchief посредством вызова следующей функции с передачи ей нужных параметров
   chatBotByItchiefInit({
     chatbotBtnSel: chatbotBtnSel,
     data: data,
     url: url,
     keyLS: keyLS
   });

   setTimeout(function () {
     const chatbotToggleTooltip = document.querySelector('.chatbot-toggle-tooltip');
     chatbotToggleTooltip.classList.add('chatbot-toggle-tooltip_show');
     setTimeout(function () {
       chatbotToggleTooltip.classList.remove('chatbot-toggle-tooltip_show');
     }, 10000)
   }, 10000);
 </script>

</body>

</html>