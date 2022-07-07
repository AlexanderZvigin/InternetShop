<?
header('Location: http://magaz/catalog.php ');
session_start();
include 'dbcatalog.php';
$db = connect_db();
$cart = get_cart($db);
$id=$_POST['Id'];
$nazvanie=$_POST['Nazvanie'];
$rr=$_POST['razmer'];
$price=$_POST['price'];
$iduser=$_SESSION['id'];
echo $id;
echo $iduser;
var_dump($_POST);
$sql="SELECT * FROM 'Cart'";
 	$result =  $db->query($sql);
 		$sql=("INSERT INTO `Cart`(`idtovara`,`iduser`,`Nazvanie`,`razmer`,`price`) VALUES('$id','$iduser','$nazvanie','$rr','$price') ");
 		 
 				$result =  $db->query($sql);

?>