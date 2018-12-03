<?php
$servername = "数据库服务器地址";
$sqlusername = "数据库用户名";
$sqlpasswd = "用户密码";
$sqlname = "数据库名";


$conn = new mysqli($servername,$sqlusername,$sqlpasswd,$sqlname);
$conn->set_charset('utf8');
?>