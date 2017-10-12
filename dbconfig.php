<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "calendar";
    $link = mysql_connect($host,$user,$password);
    mysql_select_db($database);

    $fbt = "GET_A_TOKEN";
    $key = "GET_A_KEY";
?>