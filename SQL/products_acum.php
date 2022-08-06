<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Аккумуляторный инструмент</title>
	<link rel="stylesheet" href="./style.css/products_acum.css">
	<link rel="stylesheet" href="../footer/style_footer.css">
	<link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
	<link rel="stylesheet" href="../BASIC_CONTENT/style.css">
                            <!--  Fonts  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
                            <!-- scripts js -->
	<script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>
    <script defer src="../BASIC_CONTENT/script_header.js"></script> 

</head>
<body>
            <div class="header">
                <nav class="items">
                    
                    
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <? require_once "../SQL/search_form.php"; ?>
                    
                    <ul>
                        <li><a href="../landing-2/index.php"><i class="fa-solid fa-house"></i>главная</a></li>
                        <li><a href="../about_us/index_about_us.php"><i class="fa-solid fa-people-group"></i>о нас</a></li>
                        <li><a href="../TOOLS/tools.php"><i class="fa-solid fa-shop"></i>Магазин</a></li>
                        <li><a href="../contacts/index_contacts.php"><i class="fa-solid fa-square-phone-flip"></i>контакты</a></li>
                    </ul>
                    <ul>
                        <li><a href="../registration/index_registration.php"><i class="fa-solid fa-id-card"></i>регистрация</a></li>
                        <li><a href="../enter_page/index_enter_page.php"><i class="fa-solid fa-arrow-right-to-bracket"></i>вход</a></li>
                        <li><a href="../SQL/cart_test.php"><i class="fa-solid fa-cart-shopping"></i>корзина</a></li>
                    </ul>
                </nav>
                <div class="burger_wrapper">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>


<!------------------------------------------------------------------------------------------------------------------>

<?
session_start();
$db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", 
[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

$categoryId = (isset($_GET["cat_id"])) ? $_GET["cat_id"] : 3;

$sort = "";
if (isset($_GET["sort"]) && isset($_GET["order"])) {
	$sort = " ORDER BY ".$_GET["sort"]." ".strtoupper($_GET["order"]);
}

$filter = "";
if (isset($_POST["min-price"]) && !empty($_POST["min-price"])) {
	$filter .= " AND price >= ".(int)$_POST["min-price"];
}
if (isset($_POST["max-price"]) && !empty($_POST["max-price"])) {
	$filter .= " AND price <= ".(int)$_POST["max-price"];
}

$dbProducts = $db->query("SELECT id, name, price, brandcountry, made FROM Product WHERE category_id = ".$categoryId.$filter.$sort);
$products = $dbProducts->fetchAll();

?>

<div class="title_product_list">

	<? echo "<h1>Список товаров: аккумуляторный инструмент</h1>"; ?>

</div>


<form class="price" method="POST">

	минимальная цена:&nbsp <input class="min_price" type="text" name="min-price">
	максимальная цена:&nbsp <input class="max_price" type="text" name="max-price">

	<button class="btn_apply_filter_acum" type="submit">Применить</button>
</form>

    <section class="section-1">

    <div class="products_box_content">
	    <? echo '<div style="display:flex; flex-wrap: wrap; width:100%; magrin: 0 auto;">'; ?> 
	</div> 

<?
foreach ($products as $product) { ?>
	
        <div class="product_box_acum">

            <h3>Название: <?= $product["name"] ?></h3>
            <p>Цена: <?= $product["price"] ?> руб.</p>
            <p>Страна бренда: <?= $product["brandcountry"] ?></p>
            <p>Страна производитель: <?= $product["made"] ?></p>
            <form class="price_form_acum" method="POST">
                <button class="btn_buy_acum" type="sumbit" name="btn-buy" value="<?= $product["id"] ?>">В корзину</button>
            </form>

        </div>
	
<? } ?>
</div>

<?
if (isset($_POST["btn-buy"])) {
	$cart = (isset($_SESSION["cart_test"])) ? $_SESSION["cart_test"] : [];
	$cart[] = (int)$_POST["btn-buy"];
	$_SESSION["cart_test"] = $cart;
}
?>


        </section>
<!------------------------------------------------------------------------------------------------------------------>

		<footer class="footer">
            <div class="footer_content">
                <div class="footer_head">
                    <ul>
                        <li><a href="../landing-2/index.php">Главная<i class="fa-solid fa-house-chimney"></i></a></li>
                        <li><a href="../TOOLS/tools.php">Магазин<i class="fa-solid fa-shop"></i></a></li>
                        <li><a href="../contacts/index_contacts.php">Контакты<i class="fa-solid fa-address-book"></i></a></li>
                        <li><a href="../registration/index_registration.php">Регистрация<i class="fa-solid fa-id-card"></i></a></li>
                        <li><a href="../enter_page/index_enter_page.php">Вход<i class="fa-solid fa-dungeon"></i></a></li>
                        <li><a href="../SQL/cart_test.php">Корзина<i class="fa-solid fa-cart-shopping"></i></a></li>
                    </ul>
            </div>
            <div class="footer_items_box">
                <ul>Информация:
                    <li><a href="http://www.consultant.ru/document/cons_doc_LAW_373622/0082fc02fd38782880841f0019209a807a218a2b/">Правила продажи</a></li>
                    <li><a href="../privacity/index_privacity.php">Политика конфиденциальности</a></li>
                    <li><a href="../bonus_program/bonus.php">Бонусная программа</a></li>
                    <li><a href="../exchange/index.php">Обмен и возврат</a></li>
                </ul>
                <ul><a href="../about_us/index_about_us.php#">О компании</a></ul>
                <ul><a href="../blog/blog.php">Отзывы покупателей</a></ul>
                <div class="adress_box">
                    <i class="fas fa-envelope"></i>
                    <p>300001 г.Тула, ул. Каракозова д.27</p>
                    <div class="social_network_main_box">
                        <div class="social_network_box"><a href="#"><img class="social_network" src="../images/200x200/icon_telegramm-200x200.jpg"></a></div>
                        <div class="social_network_box"><a href="#"><img class="social_network" src="../images/icons/ok-icon.png"></a></div>
                        <div class="social_network_box"><a href="#"><img class="social_network" src="../images/icons/vk-icon.jfif"></a></div>
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

