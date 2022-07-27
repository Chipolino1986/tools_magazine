<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Инструменты</title>
    <link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
    <link rel="stylesheet" href="../BASIC_CONTENT/style.css">
    <link rel="stylesheet" href="./style_tools.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/style_footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script defer src="http://kit.fontawesome.com/b8991598b2.js"></script>
    <script defer src="../BASIC_CONTENT/script_header.js"></script> 
    <script defer src="./input.js"></script>
    <script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>
</head>
<body>
            <div class="header">
                <nav class="items">
                    <h1>Магазин инструментов</h1>
                    <ul>
                        <li><a href="../landing-2/index.php"><i class="fa-solid fa-house"></i>главная</a></li>
                        <li><a href="../about_us/index_about_us.php"><i class="fa-solid fa-people-group"></i>о нас</a></li>
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

<!-----------------------------------------------SECTION_I--------------------------------------------------------------->

        <div class="container_1">
            <div class="container_1_content">
                <div class="main_title_box">
                    <a href="../landing-2/index.php"><img class="arrow-go-home" src="../images/back(arrow).png" alt="arrow"></a>
                    <div class="title_box">
                        <h2 class="subTitle_text">Магазин ЭЛЕКТРО и БЕНЗОинструментов</h2>
                        <h1 class="title_text">Жёлтый молоток</h1>
                    </div>
                    <img class="hummer-label" src="../images/yellow-hummer-4.png" alt="submarine">
                </div>
                <h1 class="title_tools">Выберете категорию или воспользуйтесь поиском
                    <i class="fa-solid fa-arrow-down-short-wide"></i>
                </h1>

                <div class="search_form_tools">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <? require_once "../SQL/search_form.php"; ?>
                </div>

                <div class="tool_box">
                    <div class="tool_block_wrapper">
                        <a href="../SQL/products_garden.php" class="toots_block_garden">
                            <div class="border">
                                <div class="overlay">
                                    <p>Садовый инструмент</p>
                                </div>
                            </div>
                        </a>
                        <p>Садовый инструмент</p>
                    </div>
                    <div class="tool_block_wrapper">
                        <a href="../SQL/products_electro.php" class="toots_block_electro">
                            <div class="border">
                                <div class="overlay">
                                    <p>Электро-инструмент</p>
                                </div>
                            </div>
                        </a>
                        <p>Электро-инструмент</p>
                    </div>
                    <div class="tool_block_wrapper">
                        <a href="../SQL/products_acum.php" class="toots_block_acum">
                            <div class="border">
                                <div class="overlay">
                                    <p>Аккумуляторный инструмент</p>
                                </div>
                            </div>
                        </a>
                        <p>Аккумуляторный инструмент</p>
                    </div>

                </div>
            </div>
        </div>

<!-------------------------------------------------FOOTER------------------------------------------------------------------->

        <footer class="footer">
            <div class="footer_content">
                <div class="footer_head">
                    <ul>
                        <li><a href="../landing-2/index.php">Главная<i class="fa-solid fa-house-chimney"></i></a></li>
                        <li><a href="../contacts/index_contacts.php">Контакты<i class="fa-solid fa-address-book"></i></a></li>
                        <li><a href="../registration/index_registration.php">Регистрация<i class="fa-solid fa-id-card"></i></a></li>
                        <li><a href="../enter_page/index_enter_page.php#">Вход<i class="fa-solid fa-dungeon"></i></a></li>
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