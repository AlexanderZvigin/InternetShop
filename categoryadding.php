<?
$ncountry=$_POST['ncountry'];
$nproizvoditel=$_POST['nproizvoditel'];
$ntype=$_POST['ntype'];
$ncolor=$_POST['ncolor'];
$nmaterial=$_POST['nmaterial'];
$nrazmer=$_POST['nrazmer'];
$a=NULL;
if ($ncountry==$a and $nproizvoditel==$a and $ntype==$a and $ncolor==$a and $nmaterial==$a and $nrazmer==$a  ) {
	exit('Все поля пустые,данные не отправлены');
}
//Сначала чекаем есть ли в бд указанная категория,если есть пишем ошибку
if ($ncountry!=$a){
	require_once "connect.php";
 $sql2=("SELECT * FROM countrys WHERE country='$ncountry'");
 $result=$mysqli->query($sql2);
$country = mysqli_fetch_assoc($result);

if ($country) {
  echo "Такая страна уже существует!";
  require_once('categoryadd.php');
}
 
else {
 require_once "connect.php";
$sql2=("INSERT INTO `countrys`(`country`) VALUES('$ncountry')");
 $result=$mysqli->query($sql2);
 if($result==true) {
  echo "страна успешно добавлена!";
  require_once('categoryadd.php');
}
}

}
 if ($nproizvoditel!=$a){
	require_once "connect.php";
 $sql3=("SELECT * FROM proizvoditel WHERE Proizvoditel='$nproizvoditel'");
 $result1=$mysqli->query($sql3);
$proizvoditel = mysqli_fetch_assoc($result1);
 
if ($proizvoditel) {
  echo "Такой производитель уже существует!";
  require_once('categoryadd.php');
}
 
else {
 require_once "connect.php";
$sql3=("INSERT INTO `proizvoditel`(`Proizvoditel`) VALUES('$nproizvoditel')");
 $result1=$mysqli->query($sql3);
 if($result1==true) {
  echo "производитель успешно добавлен!";
  require_once('categoryadd.php');
}
}

}
if ($ntype!=$a){
	require_once "connect.php";
 $sql4=("SELECT * FROM type WHERE type='$ntype'");
 $result2=$mysqli->query($sql4);
$type = mysqli_fetch_assoc($result2);
 
if ($type) {
  echo "Такой тип уже существует!";
  require_once('categoryadd.php');
}
 
else {
 require_once "connect.php";
$sql4=("INSERT INTO `type`(`type`) VALUES('$ntype')");
 $result2=$mysqli->query($sql4);
 if($result2==true) {
  echo "Тип успешно  добавлен!";
  require_once('categoryadd.php');
}
}

}
if ($ncolor!=$a){
	require_once "connect.php";
 $sql5=("SELECT * FROM color WHERE color='$ncolor'");
 $result3=$mysqli->query($sql5);
$color = mysqli_fetch_assoc($result3);
 
if ($color) {
  echo "Такой цвет уже существует!";
  require_once('categoryadd.php');
}
 
else {
 require_once "connect.php";
$sql5=("INSERT INTO `color`(`color`) VALUES('$ncolor')");
 $result3=$mysqli->query($sql5);
 if($result3==true) {
  echo "Цвет успешно  добавлен!";
  require_once('categoryadd.php');
}
}

}
if ($nmaterial!=$a){
	require_once "connect.php";
 $sql6=("SELECT * FROM materials WHERE material='$nmaterial'");
 $result4=$mysqli->query($sql6);
$material = mysqli_fetch_assoc($result4);
 
if ($material) {
  echo "Такой материал уже существует!";
  require_once('categoryadd.php');
}
 
else {
 require_once "connect.php";
$sql6=("INSERT INTO `materials`(`material`) VALUES('$nmaterial')");
 $result4=$mysqli->query($sql6);
 if($result4==true) {
  echo "Материал  успешно добавлен!";
  require_once('categoryadd.php');
}
}
}
if ($nrazmer!=$a){
	require_once "connect.php";
 $sql7=("SELECT * FROM rr WHERE rr='$nrazmer'");
 $result5=$mysqli->query($sql7);
$razmer = mysqli_fetch_assoc($result5);
 
if ($razmer) {
  echo "Такой размер уже существует!";
  require_once('categoryadd.php');
}
 
else {
 require_once "connect.php";
$sql7=("INSERT INTO `rr`(`rr`) VALUES('$nrazmer')");
 $result5=$mysqli->query($sql7);
 if($result5==true) {
  echo "Размер  успешно добавлен!";
  require_once('categoryadd.php');
}
}
}
?>