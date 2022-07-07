<?
require_once 'connect.php';
$idproduct=$_GET['id'];
$sql="SELECT * FROM 'Cart'";
 $result =  $mysqli->query($sql);
$sql ="DELETE FROM `cart` WHERE id = '$idproduct'";
$result =  $mysqli->query($sql);
require_once('zakazinsert.php');
?>