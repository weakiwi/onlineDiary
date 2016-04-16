<?php
    header("content-Type: text/html; charset=gbk");
    error_reporting(E_ALL | E_STRICT);
    $conn = mysql_connect("localhost", "root", "root");//创建sql连接
    if(! $conn )
    {
      die('Could not connect: ' . mysql_error());
    }    
    mysql_select_db("myDiary");    
    $createDiary = 'INSERT INTO diary (tomato,zhichu,sport,content) VALUES ("%s", "%u","%s","%s");';//增加用户
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $toamto = $_POST["tomato"];
        $zhichu = $_POST["zhichu"];
        $sport = $_POST["sport"];
        $content = $_POST["content"];
        $createDiary = sprintf($createDiary, $toamto, $zhichu, $sport, $content);
        mysql_query($createDiary);
    }     
?>
