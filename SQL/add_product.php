<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Добавление товара</title>
	<link rel="stylesheet" href="./style.css/product_test.css">
	<link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
</head>
<body>
<?
// $db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", 
// [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

require_once '../connect.php';

$dbCategories = $db->query("SELECT id, name FROM Category");
$categories = $dbCategories->fetchAll();

?>
<h1>Добавление товара</h1>

<form class="forms_product" method="POST">
	<select class="select-category" name="category-id">
		<? foreach ($categories as $category) { ?>
			<option value="<?= $category["id"] ?>"><?= $category["name"] ?></option>
		<? } ?>
	</select>
	<br>
	<br>

	<input class="input-str" type="text" name="name" placeholder="Название товара"><br><br>
	<input class="input-str" type="text" name="price" placeholder="Цена товара"><br><br>
	<input class="input-str" type="text" name="brandcountry" placeholder="Страна бренда"><br><br>
	<input class="input-str" type="text" name="made" placeholder="Страна производитель"><br><br>
	
	<button class="btn-add_product" type="submit" name="add-product" disabled>Добавить товар</button>
</form>

<script>
	let field = document.querySelector("input[name='name']");
	let btn = document.querySelector("button[name='add-product']");
	field.addEventListener("input", function(){
		if (field.value.length > 0) {
			btn.removeAttribute("disabled");
		} else {
			btn.setAttribute("disabled", true);
		}
	});
</script>

<?
if (isset($_POST["add-product"])) {
	
	$name = trim(htmlspecialchars($_POST["name"]));
	$price = (int)trim(htmlspecialchars($_POST["price"]));
	$brandcountry = trim(htmlspecialchars($_POST["brandcountry"]));
	$made = trim(htmlspecialchars($_POST["made"]));
	
	$categoryId = (int)$_POST["category-id"];
	if (
		strlen($name) > 0 &&
		$price > 0 &&
		strlen($brandcountry) &&
		strlen($made) > 0
	) {
		$result = $db->query(
			"INSERT INTO Product 
			(name, price, brandcountry, made) 
			VALUE 
			('$name', $price,'$brandcountry','$made')"
		);
		if ($result) {
			?> 
				<div class="success">
					<? echo "Товар успешно добавлен"; ?>
			    </div> 
			<?   
		} else {
			?> 
				<div class="error">
			    	<? echo "Ошибка.Товар не добавлен!"; ?>
			   	</div>
			<?
		}
	} else {
		?>
		<div class="error-2">
			<?	echo"Критическая ошибка, товар не добавлен,<br> пожалуйста проверьте 
					что бы все пункты были зполнены корректно 
					<br>
					<br>
					<span>Critical error, product not added, please check that <br> all items
					are filled out correctly</span>"; ?>
		</div>
		<?
	}
}
?>
	
</body>
</html>