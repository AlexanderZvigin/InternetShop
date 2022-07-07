<?
include 'dbcatalog.php';
$db = connect_db();
$goods = get_goods($db);
$s=$_POST['Sort'];
switch ($s) {
	case 'Повозрастанию':
		$sql = "SELECT *  FROM products ORDER BY price ";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $goodssort[] = mysqli_fetch_array($result);
 }
		break;

			case 'Поубыванию':
    $sql = "SELECT  * FROM products ORDER BY price desc ";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $goodssort[] = mysqli_fetch_array($result);
 }
					break;
  case 'АЯ':
    $sql = "SELECT *  FROM products ORDER BY Nazvanie ";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $goodssort[] = mysqli_fetch_array($result);
 }
    break;

      case 'ЯА':
    $sql = "SELECT  * FROM products ORDER BY Nazvanie desc ";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $goodssort[] = mysqli_fetch_array($result);
 }
          break;
          case 'Одежда':
    $sql = "SELECT  * FROM products WHERE type='Одежда' ";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $goodssort[] = mysqli_fetch_array($result);
 }
          break;
          case 'Обувь':
    $sql = "SELECT  * FROM products WHERE type='Обувь' ";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $goodssort[] = mysqli_fetch_array($result);
 }
          
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $goodssort[] = mysqli_fetch_array($result);
 }
          break;
          case 'ПовозрастаниюАЯОбувь':
    $sql = "SELECT  * FROM products WHERE type='обувь'  ORDER BY price ,Nazvanie  ";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $goodssort[] = mysqli_fetch_array($result);
 }
          break;

}
echo $key;
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
      <li class="nav2-item7"><a class="nav-link" href="support.php">Обратная связь</a></li>
    </ul>
  </header>
</div>
<div>
  <span class="sorttext">Поиск по названию или артикулу:</span>
  <form action="catalogpoisk.php" method="post">
    <input placeholder="Введите в это поле название товара или его артикул" type="" name="Sortpoisk">
     <button class="sortnull" type="submit">Найти</button>
  </form>
</div>
<div class="sortdiv">
<span class="Sorttext">Сортировать по :</span>
  <form action="catalogsort.php" method="post">
    <select name="Sort">
      <option></option>
      <option value="Повозрастанию">По возрастанию </option>
      <option value="Поубыванию">По убыванию</option>
       <option value="АЯ">А-Я</option>
      <option value="ЯА">Я-А</option>
      <option value="Одежда">Одежда</option>
      <option value="Обувь">Обувь</option>
  </select>
    <button class="sortnull" type="submit">Сортировать</button>
  </form>
</div>
  <button class="sortnull" onclick="window.location.href = 'catalog.php'">Сбросить сортировку</button>
<div class="product-item">
	<?php foreach ($goodssort as $item) : ?>
  <div class="product-list">
  	<div class="product-items">
    <h3 class="title"><?=$item['Nazvanie'];?></h3>
    <img src="<?= $item['img']; ?>" class="product-img">
  <button class="cart-button" onclick="window.location.href = 'product.php?id=<?=$item['id'];?>';">Просмотр</button>
      <span class="price"><?=$item['price'];?></span>
   </div>
       </div>
      <? endforeach; ?> 