<?
session_start();
$k=$_SESSION['id'];
echo $k;
require_once 'connect.php';
$idproduct=$_GET['id'];
$sql="SELECT * FROM 'cart' WHERE `idtovara`='$idproduct'";
 $result =  $mysqli->query($sql);
$sql ="DELETE  FROM `cart` WHERE `idtovara` = '$idproduct' AND `iduser`='$k' ";;
$result =  $mysqli->query($sql);
require_once 'cart.php';
?>