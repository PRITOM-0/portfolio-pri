<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="log";

    $con = mysqli_connect($host, $user, $password,$db);
    if(!$con){
        echo "Connection faild !!!<br><br>";
    }
    else{
        echo "Welcome to News Feed !!!<br><br>";
    }


?>