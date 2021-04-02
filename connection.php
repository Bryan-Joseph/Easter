<?php
    $link = mysqli_connect("remotemysql.com" , "rkwNPiYRJw" , "5WEy8o0UJQ") or die(mysqli_error($link));
    mysqli_select_db($link , "rkwNPiYRJw") or die(mysqli_error($link));
?>