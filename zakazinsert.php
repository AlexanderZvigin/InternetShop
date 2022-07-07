<?

session_start();
$k=$_SESSION['id'];
require_once 'connect.php';
if (isset($_POST['knopka'])) {
	$sql="SELECT * FROM 'Cart'";
 $result =  $mysqli->query($sql);
 $sql ="DELETE FROM `cart` WHERE iduser = '$k'";
$result =  $mysqli->query($sql);
}
 var_dump($result);
echo $k;
$oplata='<div class="oplata">ЗАКАЗ ОПЛАЧЕН</div>';
$svet='<div class="svet"></div>';
include 'dbcatalog.php';
$db=connect_db();
$mas=($_SESSION[mas]);
$cityd=get_cityd($db);
$countryd=get_country($db);
$adress=get_adress($db);
?>
<!DOCTYPE html>
<html lang="en ">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ИНТЕРНЕТ МАГАЗИН</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?
	if (isset($_POST['knopka'])) {
	echo $svet;
}
?>
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
		</ul>
	</header>
	</div>
	<h1 class="main-title">Проверьте ваш заказ:</h1>
	<div class="cart-wrap">
	<table class="tablecart2" >
	<tr>
		<td>Название:</td>
		<td>Размер:</td>
		<td>Цена:</td>
	</tr>
</table>
<?php foreach ($mas as $item) : ?>
	<table  class="tablecart2" width="30%">
		<tr>
			<td><?=$item['Nazvanie'];?></td>
			<td><?=$item['razmer'];?></td>
			<td><?=$item['price'];?></td>
			<td hidden=""><a>Удалить</a></td>
			<?$a=$item['price'];?>
		</tr>
	</table>
	</div>
	<? endforeach; ?>
	<div class="products-adding">
		<?
	if (isset($_POST['knopka'])) {
	echo $oplata;
	echo $svet;
}
?>
	<p>Выберите адрес доставки:</p>
	<p>Страна:</p>
	<select name="countryd"  class="adding">
	<?php foreach ($countryd as $item) : ?>

           <option value="<?=$item['country'];?>"><?=$item['country'];?></option>
        <? endforeach; ?>
         </select>
         <p>Город:</p>
         <select name="cityd"  class="adding">
	<?php foreach ($cityd as $item) : ?>
           <option value="<?=$item['city'];?>"><?=$item['city'];?>
           	
           </option>
        <? endforeach; ?>
         </select><br>
         <p>Пункт выдачи:</p>
         <select name="adress"  class="adding">
	<?php foreach ($adress as $item) : ?>
           <option value="<?=$item['adress'];?>"><?=$item['adress'];?>
           	
           </option>
        <? endforeach; ?>
         </select>
        
         <form method="post">
         	<input value="Оплатить" class="admin-save-button" type="submit" name="knopka">
         </form>
</div>
</body>