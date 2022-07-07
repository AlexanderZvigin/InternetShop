<?
session_start();
$userid=$_SESSION['id'];
require_once "connect.php";
$email=$_POST['email'];
$letter=$_POST['letter'];
echo "Спасибо за обращение!";
$sql="SELECT * FROM letters";
$result=$mysqli->query($sql);
$sql="INSERT INTO letters(`userid`,`email`,`letter`) VALUES('$userid','$email','$letter')";
$result=$mysqli->query($sql);
require_once "main.php";
?>