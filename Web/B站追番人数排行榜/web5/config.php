<?php
define("DB_HOST", "localhost");
define("DB_USER", "yiruma");
define("DB_PASS", "kaoyanyaojin");
define("DB_DATABASE", "web5");


//�������ݿ⣬������Ƿ�ƥ��
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
if (!$mysqli)
    dir($mysqli->connect_error);
$mysqli->set_charset('utf-8');
?>

