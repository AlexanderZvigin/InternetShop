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
<button onclick="window.location.href='adminwelcome.php'" class="category-button">Назад в панель управления</button>
<h1 class="main-title">Добро пожаловать на страницу добавления категорий</h1>
<div class="admin-page2">
	<div class="products-adding">
		<form  method="post" action="categoryadding.php">
	<p>Новая страна:</p>
	<input type="" name="ncountry">
	<p>Новый производитель:</p>
	<input type="" name="nproizvoditel">
	<p>Новый тип:</p>
	<input type="" name="ntype">
	<p>Новый цвет:</p>
	<input type="" name="ncolor">
	<p>Новый материал:</p>
	<input type="" name="nmaterial">
	<p>Новый размер:</p>
	<input type="" name="nrazmer"><br>
	<input class="admin-save-button" type="submit" name="" value="Сохранить">
</form>
</div>
</div>



</body>