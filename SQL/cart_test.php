
<?

session_start();
$db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", 
[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

$cart = (isset($_SESSION["cart_test"])) ? $_SESSION["cart_test"] : [];

if (isset($_GET["download_chack"])) {
	header('Content-type: text/plain');
	header('Content-Disposition: attachment; filename= "'.$_GET["download_chack"].'"');
	readfile($_GET["download_chack"]); 
}; 
?>

<?
if (empty($cart)) { 
?>	
	<div class="cart_empty" 
		 style="text-align: center; 
				color: white; 
				text-transform:uppercase;
				font-family: sans-serif; 
				font-size: 1.5rem;
				padding:20px 0; 
				text-shadow: 1px 1px 1px black;">

			<? echo "<h1>Ваша корзина пуста</h1>"; ?>
			
			<a href="../landing-2/index.php" style="color:white; font-size: 1.4rem;">Вернуться на главную</a>
			<br>
			<br>
			<a href="../TOOLS/tools.php" style="color:white; font-size: 1.4rem;">Вернуться к категориям товаров</a>
	</div>
		
	<div class="smile_wrapper" style="display:flex; justify-content: center">
		<img style="width: 500; height: 500" class="smile" src="../images/background/smile.png" alt="smile">
	</div>

		<style>
			body {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				background:radial-gradient(#c41111,black);
			}
		</style> 
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
	<a class="btn-back1" href="../landing-2/index.php">Вернутся на главную</a><br><br>
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
			fetch('/My_magazine/SQL/cart_remove.php?PRODUCT_ID=' + productId, {
				method: 'GET'
			}).then(() => {
				alert("Товар успешно удалён из корзины!");
				removeBtn.parentNode.remove();
			});
		});
	}
	
	let cartRemoveAll = document.querySelector('.cart-remove-all');
	cartRemoveAll.addEventListener("click", function(){
		fetch('/My_magazine/SQL/cart_remove_all.php', {
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
	
	$fileName = $_SERVER["DOCUMENT_ROOT"]."./my_magazine/SQL/chacks/chack_".date("d_m_Y_H_i_s").".txt";
	
	file_put_contents($fileName, $chack, FILE_APPEND);
	
	$_SESSION["cart_test"] = [];
	
	header('Location: cart_test.php?download_chack='.$fileName);
}
?>

<link rel="stylesheet" href="./style.css/cart_test.css">
<link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>