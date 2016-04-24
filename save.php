<?php
    header("content-Type: text/html; charset=gbk");
    error_reporting(E_ALL | E_STRICT);
    $mysqil = new mysqli("localhost", "root", "root", "myDiary");//创建sql连接
    if(! $conn )
    {
      die('Could not connect: ' . mysql_error());
    }    
    $createDiary = $mysql->prepare("INSERT INTO diary (tomato,zhichu,sport,content) VALUES (?, ?, ?, ?)");//增加用户
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $toamto = htmlspecialchars($_POST["tomato"]);
        $zhichu = htmlspecialchars($_POST["zhichu"]);
        $sport = htmlspecialchars($_POST["sport"]);
        $content = htmlspecialchars($_POST["content"]);
        $createDiary->bind_param($toamto, $zhichu, $sport, $content);
        $mysqli->query($createDiary);
    }     
?>
