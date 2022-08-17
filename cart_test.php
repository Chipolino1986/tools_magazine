<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Корзина</title>
	<link rel="stylesheet" href="./style.css/cart_test.css">
	<link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>
</head>
<body>
	
</body>
</html>

<?
session_start();

// $db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", 
// [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

require_once '../connect.php';

$cart = (isset($_SESSION["cart_test"])) ? $_SESSION["cart_test"] : [];

if (isset($_GET["download_chack"])) {
	header('Content-type: text/plain');
	header('Content-Disposition: attachment; filename= "'.$_GET["download_chack"].'"');
	readfile($_GET["download_chack"]); 
}; 
?>


<?
require_once './cart_emty.php';
?>

<button type="button" class="cart-remove-all">Очистить корзину</button>
<br>
<br>

<form method="POST">
	<label>
		<input type="radio" name="pay" value="cash">
		Оплатить наличными
	</label>
	<br>
	<label>
		<input type="radio" name="pay" value="card">
		Оплатить картой
	</label>
	<br>
	<br>
	<button class="btn-pay" type="submit" disabled>Оплатить</button>
</form>

<div class="back">
	<a class="btn-back1" href="../index.php">Вернутся на главную</a><br><br>
	<a class="btn-back2" href="../TOOLS/tools.php">Вернуться к категориям товаров</a>
</div>

<script>
	let radio = document.querySelectorAll('input[type="radio"]');
	let submit = document.querySelector('button[type="submit"]');
	for (btn of radio) {
		btn.addEventListener("click", function(){
			submit.removeAttribute("disabled");
		});
	}
	
	let cartRemoveButtons = document.querySelectorAll('.cart-remove');
	for (let removeBtn of cartRemoveButtons) {
		removeBtn.addEventListener("click", function(){
			let productId = removeBtn.dataset.id;
			fetch('./cart_remove.php?PRODUCT_ID=' + productId, {
				method: 'GET'
			}).then(() => {
				alert("Товар успешно удалён из корзины!");
				removeBtn.parentNode.remove();
			});
		});
	}
	
	let cartRemoveAll = document.querySelector('.cart-remove-all');
	cartRemoveAll.addEventListener("click", function(){
		fetch('./cart_remove_all.php', {
			method: 'GET'
		}).then(() => {
			alert("Корзина успешно очищена!");
			window.location.reload();
		});
	});
</script>

<?
if (isset($_POST["pay"])) {
	$totalPrice = 0;
	$chack = "Date: ".date("d/m/Y").PHP_EOL;
	$chack .= "--------------------".PHP_EOL;
	$chack .= "Products:".PHP_EOL;
	$chack .= "--------------------".PHP_EOL;
	foreach ($products as $product) {
		$chack .= "Name: ".$product["name"].PHP_EOL;
		$chack .= "Price: ".$product["price"].PHP_EOL;
		$chack .= "Amount: 1".PHP_EOL;
		$chack .= "Total price: ".$product["price"].PHP_EOL;
		$chack .= "--------------------".PHP_EOL;
		$totalPrice += $product["price"];
	}
	$chack .= "TOTAL PRICE: ".$totalPrice.PHP_EOL;
	$chack .= "--------------------".PHP_EOL;
	$chack .= "Pay by ".$_POST["pay"].PHP_EOL;
	
	$fileName = $_SERVER["DOCUMENT_ROOT"]."./chacks/chack_".date("d_m_Y_H_i_s").".txt";
	
	file_put_contents($fileName, $chack, FILE_APPEND);
	
	$_SESSION["cart_test"] = [];
	
	header('Location: cart_test.php?download_chack='.$fileName);
}
?>

