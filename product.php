<?
include'dbcatalog.php';
$db = connect_db();
$goods = get_goods($db);
$idproduct=$_GET['id'];
$productres=mysqli_query($db,"SELECT * FROM `products` WHERE `id`='$idproduct'");
$product=mysqli_fetch_assoc($productres);
$productphotos=mysqli_query($db,"SELECT * FROM `photos` WHERE `idtovara`='$idproduct'");
$productphotos=mysqli_fetch_assoc($productphotos);
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
		</ul>
	</header>
</div>
<div>
	<form action="incart.php" method="post">
          <img alt="основная картинка" class="product-writing-img" src="<?echo $product['img'];?>">
          <img alt="вторая картинка" class="product-writing-img" src="<?echo $productphotos['secondphoto'];?>">
          <img alt="третья картинка" class="product-writing-img" src="<?echo $productphotos['thirdphoto'];?>">
 <table width="60%" height="500px" class="product-table">
 	<tr>
         <td>Артикул</td>
         <td class="points">...................................</td>
 		<td><?echo $product['id'];?></td>
 		<td><input hidden="" value="<?echo $product['id'];?>" type="text" name="Id"></td>
 	</tr>
 	<tr>
         <td>Название</td>
         <td class="points">...................................</td>
 		<td><?echo $product['Nazvanie'];?></td>
 		<td><input hidden="" value="<?echo $product['Nazvanie'];?>" type="text" name="Nazvanie"></td>
 	</tr>
 	<tr>
 		<td>Страна:</td>
 		 <td class="points">...................................</td>
 		<td><?echo $product['country'];?></td>
 	</tr>
 	<tr>
 		<td>Производитель:</td>
 		<td class="points">...................................</td>
 		<td><?echo $product['Proizvoditel'];?></td>
 	</tr>
 	<tr>
 		<td>Тип:</td>
 		<td class="points">...................................</td>
 		<td><?echo $product['type'];?></td>
 	</tr>
 	<tr>
 		<td>Цвет:</td>
 		<td class="points">...................................</td>
 		<td><?echo $product['color'];?></td>
 	</tr>
 	<tr>
 		<td>Материал:</td>
 		<td class="points">...................................</td>
 		<td><?echo $product['material'];?></td>
 	</tr>
 	<tr>
 		<td>Пол:</td>
 		<td class="points">...................................</td>
 		<td><?echo $product['pol'];?></td>
 	</tr>
 	<tr name="razmer">
 		<td>Размер:</td>
 		<td class="points">...................................</td>
 		<td value="<?$product['razmer'];?>" ><?echo $product['razmer'];?></td>
 		<td><input hidden="" value="<?echo $product['razmer'];?>" type="text" name="razmer"></td>
 	</tr>
 	<tr>
 		<td>Цена:</td>
 		<td class="points">...................................</td>
 		<td value="<?$product['price'];?>"  name="price"><?echo $product['price'];?></td>
 		<td><input hidden="" value="<?echo $product['price'];?>" type="text" name="price"></td>
 	</tr>
 </table>
 <input type="submit" class="product-cart" value="В корзину"></button>
</form>

</body>
