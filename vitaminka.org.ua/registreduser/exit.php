<?php
    setcookie('user', $user['name'], time() - 3600, "/");//setcookie устанавливает куки 
    header('Location: /unregistreduser/join.php');//переход обратно на страницу регистр

?>