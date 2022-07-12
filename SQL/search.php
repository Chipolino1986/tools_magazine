<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Поиск</title>
	<link rel="stylesheet" href="./style.css/products_garden.css">
	<link rel="stylesheet" href="./style.css/products_electro.css">
	<link rel="stylesheet" href="./style.css/products_acum.css">
	<link rel="stylesheet" href="./style.css/search.css">
	<link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
	<link rel="stylesheet" href="../BASIC_CONTENT/style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

	<script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>
    <script defer src="../BASIC_CONTENT/script_header.js"></script> 

</head>
<body>
        <header class="header">
            <div class="header_content">
                <nav class="nav">
                    <img src="../images/submarine (1).png" alt="submarine">

                    <? require_once "./search_form.php"; ?>
                    
					<div class="items">
						<ul>
							<li><a href="http://localhost/My_magazine/about_us/index_about_us.php#">О нас</a></li>
							<li><a href="http://localhost/My_magazine/TOOLS/tools.php">Инструменты</a></li>
							<li><a href="http://localhost/My_magazine/contacts/index_contacts.php">Контакты</a></li>
						</ul>
					</div>
                </nav>
                <div class="heder_content_right">
                    <div class="registration_item"> 
                        <a href="http://localhost/My_magazine/registration/index_registration.php" class="registration">Регистрация
                        <i class="fa-solid fa-id-card"></i></a>

                        <a href="http://localhost/My_magazine/enter_page/index_enter_page.php#" class="registration">Вход
                        <i class="fa-solid fa-dungeon"></i></a>
                              
                        <a href="cart_test.php" class="registration">Корзина
                        <i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
                <div class="burger_box">
                    <div class="burger_line"></div>
                    <div class="burger_line"></div>
                    <div class="burger_line"></div>
                    </div>
                </div>
            </div>
        </header>


<!------------------------------------------------------------------------------------------------------------------>

<?
$db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", 
[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

$products = [];
if (isset($_POST["search"]) && strlen($_POST["search"]) > 0) {
	$query = $_POST["search"];
	$dbProducts = $db->query("SELECT id, name, price FROM Product WHERE name LIKE '%".$query."%'");
	$products = $dbProducts->fetchAll();
}
?>

<div class="h1">

	<? echo "<h1>Список товаров: </h1>"; ?>

</div>


<form class="price" method="POST">

	Минимальная цена: <input class="min_price" type="text" name="min-price">
	Максимальная цена: <input class="max_price" type="text" name="max-price">

	<button class="btn_apply_filter_garden" type="submit">Применить</button>
</form>


    <div class="products_box_content">
	    <? echo '<div style="display:flex; flex-wrap: wrap; width:100%; magrin: 0 auto;">'; ?> 
	</div> 

<?
if (count($products) > 0) {
	foreach ($products as $product) { ?>
		<div class="product_box">
			<p>Название: <?= $product["name"] ?></p>
			<p>
				<form class="price_form_garden" method="POST">
					<p>Цена: <?= $product["price"] ?> руб.</p>
					<button class="btn_buy_garden" type="sumbit" name="btn-buy" value="<?= $product["id"] ?>">Купить</button>
				</form>
			</p>
		</div>
	<? }
} else { ?>
	<div class="not_found">Ничего не найдено!</div>
<? }

if (isset($_POST["btn-buy"])) {
	$cart = (isset($_SESSION["cart_test"])) ? $_SESSION["cart_test"] : [];
	$cart[] = (int)$_POST["btn-buy"];
	$_SESSION["cart_test"] = $cart;
}
?>

<!-- <h2><a href="http://localhost/My_magazine/landing/index.php">Вернутся на главную</a></h2> -->
<!-- <h2><a class="cart_garden" href="cart_test.php">Перейти в корзину<i class="fa-solid fa-cart-shopping"></i></a></h2> -->

<!------------------------------------------------------------------------------------------------------------------>

		<footer class="footer">
            <div class="footer_content">
                <div class="footer_head">
                    <ul>
                        <li><a href="http://localhost/My_magazine/landing/index.php">Главная<i class="fa-solid fa-house-chimney"></i></a></li>
                        <li><a href="http://localhost/My_magazine/tools/index_tool.php">Инструменты<i class="fa-solid fa-screwdriver-wrench"></i></a></li>
                        <li><a href="http://localhost/My_magazine/contacts/index_contacts.php">Контакты<i class="fa-solid fa-address-book"></i></a></li>
                        <li><a href="http://localhost/My_magazine/registration/index_registration.php">Регистрация<i class="fa-solid fa-id-card"></i></a></li>
                        <li><a href="http://localhost/My_magazine/enter_page/index_enter_page.php#">Вход<i class="fa-solid fa-dungeon"></i></a></li>
                        <li><a href="cart_test.php">Корзина<i class="fa-solid fa-cart-shopping"></i></a></li>
                    </ul>
            </div>
            <div class="footer_items_box">
                <ul>Информация:
                    <li><a href="#">Правила продажи</a></li>
                    <li><a href="http://localhost/My_magazine/privacity/index_privacity.php">Политика конфиденциальности</a></li>
                    <li><a href="#">Образцы документов</a></li>
                    <li><a href="#">Оплата</a></li>
                </ul>
                <ul><a href="http://localhost/My_magazine/about_us/index_about_us.php#">О компании</a></ul>
                <ul><a href="#">Отзывы покупателей</a></ul>
                <div class="adress_box">
                    <i class="fas fa-envelope"></i>
                    <p>300001 г.Тула, ул. Каракозова д.27</p>
                    <div class="social_network_main_box">
                        <div class="social_network_box"><a href="#"><img class="social_network" src="../images/200x200/icon_telegramm-200x200.jpg"></a></div>
                        <div class="social_network_box"><a href="#"><img class="social_network" src="../images/ok-icon.png"></a></div>
                        <div class="social_network_box"><a href="#"><img class="social_network" src="../images/vk-icon.jfif"></a></div>
                    </div>
                </div>
            </div>
            <div class="warning_box">
                <div class="warning_box_content">
                     <p>Вся информация на сайте размещена в целях предоставления возможности покупателю ознакомиться с товаром перед его приобретением, 
                        и не является публичной офертой (статья 437 ГК РФ).
                        Информация о товарах на сайте может обновляться в течение нескольких часов.
                        О наличии и стоимости товара уточняйте у менеджера по телефону 8(000)000-00-00 с 9:00 до 18:00.</p>
                </div>
            </div>
        </footer>
</body>
</html>