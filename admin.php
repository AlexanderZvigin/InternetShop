<?
include 'adminpanel.php';
$db = connect_db();
$country = get_goods($db);
$type=get_type($db);
$proizvoditel=get_proizvoditel($db);
$color=get_color($db);
$material=get_material($db);
$pol=get_pol($db);
$razmer=get_razmer($db);
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
	<span class="imya"><a class="buyroom" href="main.php">Главная</a></span>
		<ul class="nav-2">
			<li class="nav2-item2"><a class="nav-link" href="dostavka.php">Доставка</a></li>
			<li class="nav2-item3"><a class="nav-link" href="cart.php">Корзина</a></li>
      <li class="nav2-item1"><a class="nav-link" href="profile.php">Профиль</a></li>
		</ul>
	</header>
</div>
  <button class="admin-button3" onclick="window.location.href='adminwelcome.php'">Назад к панели управления</button>
<h1 class="main-title">Добро пожаловать на страницу добавления товара <?echo $_SESSION['login'];?></h1>
<div class="products-adding">
<form action="productadd.php" method="post">
	<div class="admin-page">
		<p>Артикул:</p>
<input  placeholder="Введите артикул,данное поле может содержать только цифры" type="" name="id">
<p>Название:</p>
<input placeholder="Введите название,данное поле может содержать только буквы" type="" name="Nazvanie">
<p>Страна :</p>
<select name="country" id="1" class="adding">
	<?php foreach ($country as $item) : ?>

           <option value="<?=$item['country'];?>"><?=$item['country'];?></option>
        <? endforeach; ?>
         </select>
          <p>Производитель:</p>
<select class="adding" name="Proizvoditel" id="2">
	<?php foreach ($proizvoditel as $item) : ?>
           <option value="<?=$item['Proizvoditel'];?>"><?=$item['Proizvoditel'];?></option>
        <? endforeach; ?>
         </select>
         <p>Тип:</p>
<select class="adding" name="type" id="3">
	<?php foreach ($type as $item) : ?>
           <option value="<?=$item['type'];?>"><?=$item['type'];?></option>
        <? endforeach; ?>
         </select>
         <p>Цвет:</p>
<select class="adding" name="color" id="4">
	<?php foreach ($color as $item) : ?>
           <option value="<?=$item['color'];?>"><?=$item['color'];?></option>
        <? endforeach; ?>
         </select><br>
          <p>Материал::</p>
         <select class="adding" name="material" id="5">
	<?php foreach ($material as $item) : ?>
           <option name="material" value="<?=$item['material'];?>"><?=$item['material'];?></option>
        <? endforeach; ?>
         </select>
         <p>Пол:</p>
         <select class="adding" name="pol" id="6">
	<?php foreach ($pol as $item) : ?>
           <option value="<?=$item['pol'];?>"><?=$item['pol'];?></option>
        <? endforeach; ?>
         </select>
         <p>Размер:</p>
         <select class="adding" name="razmer" id="7">
	<?php foreach ($razmer as $item) : ?>
           <option value="<?=$item['rr'];?>"><?=$item['rr'];?></option>
        <? endforeach; ?>
         </select><br>
         <p>Путь к основной картинке:</p>
<input placeholder="Введите путь к основной картинке(она будет показана на странице каталога)" type="" name="img"><br>
<p>Путь к второй картинке:</p>
<input  placeholder="Введите путь к второй картинке(она будет находиться на странице товара)" type="" name="imgsecond"><br>
<p>Путь к третьей картинке:</p>
<input placeholder="Введите путь к третьей картинке(она будет находиться на странице товара)" type="" name="imgthird"><br>
         <p>Цена:</p>
<input placeholder="Введите цену товара,поле может содержать только цифры" type="" name="price"><br>
         <input class="admin-save-button" type="submit"  value="Сохранить">
     </div>
 </form>
</body>