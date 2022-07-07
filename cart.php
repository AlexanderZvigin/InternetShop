<?
session_start();
include "dbcatalog.php";
error_reporting(0);
$k=$_SESSION['id'];
$db=connect_db();
$sql = "SELECT * FROM cart WHERE iduser='$k' ";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $cart[] = mysqli_fetch_array($result);
 }
$button='<button type="submit" class="cart-button2">Оформить заказ-></button>';
$_SESSION[mas] = $cart;
echo $k;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ИНТЕРНЕТ МАГАЗИН</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="first-element">
	<header class="header">
	<nav>
		<ul class="nav">
			<li class="nav-item1"><a class="nav-link" href="catalog.php">Каталог</a></li>
			
		</ul>
	</nav>
	<span class="imya"><a class="buyroom" href="index.php">Главная</a></span>
		<ul class="nav-2">
			<li class="nav2-item2"><a class="nav-link" href="dostavka.php">Доставка</a></li>
			<li class="nav2-item3"><a class="nav-link" href="cart.php">Корзина</a></li>
			<li class="nav2-item1"><a class="nav-link" href="profile.php">Профиль</a></li>
			<li class="nav2-item7"><a class="nav-link" href="support.php">Обратная связь</a></li>
		</ul>
	</header>
</div>
<div class="cart-wrap">
	
<table class="tablecart" >
	<tr>
		<td>Название:</td>
		<td>Размер:</td>
		<td>Цена:</td>
		<td>Удалить:</td>
	</tr>
</table>
<form action="zakazinsert.php" method="post">
<?php foreach ($cart as $item) : ?>
	<table class="tablecart" width="30%">
		<tr>
			<td><?=$item['Nazvanie'];?></td>
			<td><?=$item['razmer'];?></td>
			<td><?=$item['price'];?></td>
			<td><a href="delete.php?id=<?=$item['idtovara'];?>">Удалить</a></td>
			<?$a=$item['price'];?>
		</tr>
	</table>
	<? endforeach; ?> 
</div>
<?if (isset($a)) {
 echo $button;
}
else{
	echo "В корзине ничего нету";
}
?>
</form>
</body>
