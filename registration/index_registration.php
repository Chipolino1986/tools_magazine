<?$db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", 
[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
?>
<?
    if (isset($_POST["btn"])) {
        $errors = [];
        $name = trim(htmlspecialchars($_POST["name"]));
        $surname = trim(htmlspecialchars($_POST["surname"]));
        $login = trim(htmlspecialchars($_POST["login"]));
        $password = trim(htmlspecialchars($_POST["password"]));
        $phone = trim(htmlspecialchars($_POST["phone"]));
        
        if (strlen($name) < 3 || strlen($name) > 20) {
            $errors[] = "Username is too short / long";
        }
        
        $sql = "SELECT id FROM Users WHERE login = '".$login."'";
        $result = $db->query($sql);
        if ($result->fetch()) {
            $errors[] = "User already exists";
        }
        
        if (strlen($password) < 6) {
            $errors[] = "Password is too short";
        }
        
        if (!empty($errors)) {
            echo '<p style="color:red;">'.implode("; ", $errors).'</p>';
        } else {
            $password = md5($password);
            $insertsSql = "INSERT INTO Users (login, password, name, surname,
            phone) VALUES ('$login', '$password', '$name', '$surname',
            $phone)";
            $result = $db->query($insertsSql);
            if ($result) {
                header("Location: /My_magazine/successful_page/index_reg.php");
                // echo '<p style="color:green; font-family: Arial;"> РЕГИСТРАЦИЯ ПРОШЛА УСПЕШНО! </p>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
    <link rel="stylesheet" href="../BASIC_CONTENT/style.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/style_footer.css">
    <link rel="stylesheet" href="../registration/style.css">
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script defer src="http://kit.fontawesome.com/b8991598b2.js"></script> 
    <script defer src="../BASIC_CONTENT/script_header.js"></script> 
    <script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="main_wrapper">

                            <!-- Header -->

            <div class="header">
                <nav class="items">
                    <h1>Магазин инструментов</h1>
                    <ul>
                        <li><a href="../landing-2/index.php"><i class="fa-solid fa-house"></i>главная</a></li>
                        <li><a href="../about_us/index_about_us.php"><i class="fa-solid fa-people-group"></i>о нас</a></li>
                        <li><a href="../TOOLS/tools.php"><i class="fa-solid fa-hammer"></i>инструменты</a></li>
                        <li><a href="../contacts/index_contacts.php"><i class="fa-solid fa-square-phone-flip"></i>контакты</a></li>
                    </ul>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-star"></i>избранное</a></li>
                        <li><a href="../registration/index_registration.php"><i class="fa-solid fa-id-card"></i>регистрация</a></li>
                        <li><a href="../enter_page/index_enter_page.php"><i class="fa-solid fa-arrow-right-to-bracket"></i>вход</a></li>
                        <li><a href="../SQL/cart_test.php"><i class="fa-solid fa-cart-shopping"></i>корзина</a></li>
                    </ul>
                </nav>
            </div>

                            <!-- Container 1 -->

        <div class="container_1">
            <div class="container_1_content">
                <div class="main_title_box">
                    <a href="../landing/index.php"><img class="arrow-go-home" src="../images/back(arrow).png" alt="arrow"></a>
                    <div class="title_box">
                        <p class="subTitle_text">Магазин ЭЛЕКТРО и БЕНЗОинструментов</p>
                        <p class="title_text">Жёлтый молоток</p>
                    </div>
                    <img class="hummer-label" src="../images/yellow-hummer-4.png" alt="hummer">
                </div>

                <div class="text_registration_title">
                    <h2>Регистрация</h2>
                </div>

                <div class="registration_box">

                    <form class="form_regestration" method="POST">
                        <label class="label">Логин</label>
	                    <input class="input" type="text" name="login" placeholder="Login:">
                        <label class="label">Пароль</label>
	                    <input class="input" type="password" name="password" placeholder="Password:">
                        <label class="label">Имя</label>
	                    <input class="input" type="text" name="name" placeholder="Name:">
                        <label class="label">Фамилия</label>
	                    <input class="input" type="text" name="surname" placeholder="Surname:">
                        <label class="label">Телефон без 8</label>
	                    <input class="input" type="tel" name="phone" placeholder="Phone: +7" pattern="\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}">
	                    <button class="btn_reg" type="submit" name="btn">Зарегистрироваться</button>
                        <label class="label_reg">
                            <input type="checkbox" class="hidden_checkbox">
                            <span class="fake_checkbox"></span>
                            <p>Запомнить меня</p>
                        </label>
                    </form>

                </div>
            </div>
        </div>

                                <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="footer_head">
                    <ul>
                        <li><a href="../landing-2/index.php">Главная<i class="fa-solid fa-house-chimney"></i></a></li>
                        <li><a href="../TOOLS/tools.php">Инструменты<i class="fa-solid fa-screwdriver-wrench"></i></a></li>
                        <li><a href="../contacts/index_contacts.php">Контакты<i class="fa-solid fa-address-book"></i></a></li>
                        <li><a href="#">Регистрация<i class="fa-solid fa-id-card"></i></a></li>
                        <li><a href="../enter_page/index_enter_page.php#">Вход<i class="fa-solid fa-dungeon"></i></a></li>
                        <li><a href="../SQL/cart_test.php">Корзина<i class="fa-solid fa-cart-shopping"></i></a></li>
                    </ul>
            </div>
            <div class="footer_items_box">
                <ul>Информация:
                    <li><a href="http://www.consultant.ru/document/cons_doc_LAW_373622/0082fc02fd38782880841f0019209a807a218a2b/">Правила продажи</a></li>
                    <li><a href="../privacity/index_privacity.php">Политика конфиденциальности</a></li>
                    <li><a href="#">Образцы документов</a></li>
                    <li><a href="../exchange/index.php">Обмен и возврат</a></li>
                </ul>
                <ul><a href="../about_us/index_about_us.php">О компании</a></ul>
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
    </main>
</body>
</html>