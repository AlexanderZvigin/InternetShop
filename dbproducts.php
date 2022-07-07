<?php
$hostname="localhost";
	$username="root";
	$password="";
	$dbname="cotolog";
    $db = mysql_connect ($hostname,$username,$password,$dbname);
    mysql_select_db ("cotolog",$db);
    $mysqli = @new mysqli('localhost', 'root', '', 	'cotolog');
     $sql = "SET NAMES utf8";
     if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
}
$result=$mysqli->query($sql);
    ?>