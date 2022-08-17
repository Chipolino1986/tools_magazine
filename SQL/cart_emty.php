<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css/cart_empty.css">
</head>
<body>
    

<?
if (empty($cart)) { 
?>	
<div class="cart_empty">
	
	<? echo "<h1>Ваша корзина пуста!</h1>"; ?>
    	
	<div class="smile_wrapper">
		<img class="smile" src="../images/background/smile.png" alt="smile">
	</div>

</div> 
	<?	
	return; 
} 

$sqlCart = implode(", ", $cart);

$dbProducts = $db->query("SELECT id, name, price ,brandcountry, made FROM Product WHERE id IN (".$sqlCart.")");
$products = $dbProducts->fetchAll();

echo "<h1>Список товаров корзины:</h1>";
echo '<div class="card_product_box">';

foreach ($products as $product) { ?>
	
	<div class="card_product">
		<p><span>Товар:</span> <?= $product["name"] ?></p>
		<p>Цена: <?= $product["price"] ?> руб.</p>
		<button type="button" class="cart-remove" data-id="<?= $product["id"] ?>">удалить товар<i class="fa-solid fa-trash-can"></i></button>
	</div>
	
<? } ?>
</div>

</body>
</html>