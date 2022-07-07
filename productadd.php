<?
$id = $_POST['id'];
$Nazvanie = $_POST['Nazvanie'];
$Country = $_POST['country'];
$Proizvoditel = $_POST['Proizvoditel'];
$type = $_POST['type'];
$color = $_POST['color'];
$material = $_POST['material'];
$pol = $_POST['pol'];
$razmer = $_POST['razmer'];
$img = $_POST['img'];
$price = $_POST['price'];
$imgsecond=$_POST['imgsecond'];
$imgthird=$_POST['imgthird'];
$n=NULL; 
if ($id==$n or $Nazvanie==$n or $img==$n or $price==$n or $imgsecond==$n or $imgthird==$n) {
	echo "Вы заполнили не все поля,вернитесь и попытайтесь снова добавить товар";
	require_once "admin.php";
	exit();
}
require_once "connect.php";
 $sql8=("SELECT * FROM products WHERE id='$id'");
 $result6=$mysqli->query($sql8);
$exists = mysqli_fetch_assoc($result6);

if ($exists) {
  echo "Товар с таким артикулом уже существует,товар не добавлен";
  require_once('admin.php');
  exit();
}
if (is_numeric($Nazvanie) or $Nazvanie=="") {
	exit('В поле названия могут содержаться только буквы,поле не может быть пустым,товар не добавлен');
	require_once('admin.php');
}
if(is_numeric($id) and is_numeric($price) and !is_numeric($img) and isset($img))
{
require_once "connect.php";
 $sql2 = "SELECT * FROM products";
 $result =  $mysqli->query($sql2);
 $sqlphoto="SELECT * FROM photos";
 $sqlphotores=$mysqli->query($sqlphoto);
 $sqlphoto=("INSERT INTO `photos` VALUES ('$id','$imgsecond','$imgthird')");
 $sqlphotores=$mysqli->query($sqlphoto);
$sql2 = ("INSERT INTO `products` (`id`,`Nazvanie`, `country`,`Proizvoditel`,`type`,`color`,`material`,`pol`,`razmer`,`img`,`price`) 
VALUES ('$id','$Nazvanie','$Country','$Proizvoditel','$type','$color','$material','$pol','$razmer','$img','$price')");
$result=$mysqli->query($sql2);
if ($result==true)
{
	echo "Последний товар успешно добавлен!";
	require_once('admin.php');
}
}
else
{
	exit('Внимание,в поле артикула и цены могут содержаться только цифры,пожалуйста,вернитесь и попытайтесь снова добавить товар');
	require_once('admin.php');
}

?>