<?php
$par1_ip = "localhost";
$par2_name = "mila";
$par3_p = "R6g7P4y3";
$par4_db = "mila";


$induction = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);

if ($induction == false){
    echo "Ошибка подключения";
}
?>