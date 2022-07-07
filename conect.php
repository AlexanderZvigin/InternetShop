<?php
$conn=new mysqli("localhost","root","","catalog");
if ($conn->connect_error) {
  echo "ошибка подключения";
  $conn->connect_error;
}
echo "Успешное подключение!";
 ?>
