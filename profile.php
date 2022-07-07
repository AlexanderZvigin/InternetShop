<?php
include ("usersdatabd.php");
	session_start();
	$k=$_SESSION['id'];
	$result = mysql_query("SELECT * FROM users WHERE id='$k'",$db);
	$info=mysql_fetch_assoc($result);
	
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
			<li  class="nav2-item1"><a class="nav-link" href="profile.php">Профиль</a></li>
			<li class="nav2-item2"><a class="nav-link" href="dostavka.php">Доставка</a></li>
			<li class="nav2-item3"><a class="nav-link" href="cart.php">Корзина</a></li>
			<li class="nav2-item7"><a class="nav-link" href="support.php">Обратная связь</a></li>
		</ul>
	</header>
	</div>
	<div class="info">
	<p>Ваше имя:<?echo $info['name']?></p>
	<p>Ваша фамилия:<?echo $info['surname']?></p>
	<p>Ваше отчество:<?echo $info['otchestvo']?></p>
	<p>Ваш email:<?echo $info['email']?></p>
	<p>пока что не знаю что еще добавить</p>
	
	<button onclick="window.location.href='exit.php'" value="exit">Выйти</button>
</div>
<div>
</div>
</body> 