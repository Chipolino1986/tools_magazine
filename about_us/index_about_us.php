<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>

    <link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
    <link rel="stylesheet" href="./aboutUs.css">
    <link rel="stylesheet" href="../burger.css">
    <link rel="stylesheet" href="../footer/style_footer.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../BASIC_CONTENT/style.css">


    <script defer src="../BASIC_CONTENT/script_header.js"></script> 
    <script defer src="../burger.js"></script> 
    <script defer src="../header/header.js"></script> 
    <script defer src="http://kit.fontawesome.com/b8991598b2.js"></script>
    <script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <div class="main_wrapper">

                                <!-- Header -->

            <div class="header">
                <nav class="items">
                    <h1>Магазин инструментов</h1>
                    <ul>
                        <li><a href="../index.php"><i class="fa-solid fa-house"></i>главная</a></li>
                        <li><a href="../TOOLS/tools.php"><i class="fa-solid fa-shop"></i>магазин</a></li>
                        <li><a href="../contacts/index_contacts.php"><i class="fa-solid fa-square-phone-flip"></i>контакты</a></li>
                    </ul>
                    <ul>
                        <li><a href="../registration/index_registration.php"><i class="fa-solid fa-id-card"></i>регистрация</a></li>
                        <li><a href="../enter_page/index_enter_page.php"><i class="fa-solid fa-arrow-right-to-bracket"></i>вход</a></li>
                        <li><a href="../SQL/cart_test.php"><i class="fa-solid fa-cart-shopping"></i>корзина</a></li>
                    </ul>
                    <div id="open_popUp" class="burger_wrapper">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <div class="pop_up" id="pop_up">
                        <div class="pop_up_container">
                            <div class="pop_up_body" id="pop_up_body">
                                <a href="../index.php">Главная</a>
                                <a href="../TOOLS/tools.php">Магазин</a>
                                <a href="../SQL/products_garden.php">Садовый инструмент</a>
                                <a href="../SQL/products_electro.php">Электро инструмент</a>
                                <a href="../SQL/products_acum.php">Аккумуляторный инструмент</a>
                                <a href="../registration/index_registration.php">Регистрация</a>
                                <a href="../enter_page/index_enter_page.php">Вход</a>
                                <a href="../SQL/cart_test.php">Корзина</a>
                                <div class="pop_up_close" id="pop_up_close">&#10006</div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

                            <!-- Container 1 -->

        <div class="container_1">
            <div class="container_1_content">
                <div class="main_title_box">
                    <a href="../index.php"><img class="arrow-go-home" src="../images/icons/arrowBack-2 (1).png" alt="arrow"></a>
                    <div class="title_box">
                        <h2 class="subTitle_text">Магазин ЭЛЕКТРО и БЕНЗОинструментов</h2>
                        <h1 class="title_text">Жёлтый молоток</h1>
                    </div>
                    <img class="hummer-label" src="../images/icons/molotok.png" alt="submarine">
                </div>
                <div class="about_us_text_box">
                    <div class="about_us_text">
                        <h1>О нас:</h1>
                        <p>Наша компания занимается продажей электроинструмента, 
                           строительного, садового и другого оборудования. 
                           Магазин <span>«Жёлтый молоток»</span> – официальный дилер известных мировых брендов. 
                           К нам обращаются как частные клиенты, так и сервисные центры. Мы ценим доверие наших покупателей и дорожим своей репутацией, 
                           поэтому предлагаем только качественные товары и отличное обслуживание.
                        </p>
                        <p>УДОБНЫЙ ПОИСК:</p>
                        <p>На нашем сайте вы быстро найдёте нужный вам инструмент. Для этого можно:</p>
                        <ul>
                            <li>воспользоваться поисковой строкой;</li>
                            <li>раскрыть каталог с фильтрами;</li>
                            <li>оставить заявку техническому консультанту.</li>
                        </ul>
                        <p>НАДЁЖНЫЕ ГАРАНТИИ</p>
                        <p>Может случиться так, что инструмент вышел из строя(не по вашей вине) или например не подошёл(мало мощный) и нужен другой... Мы спокойно относимся к таким фактам и гарантируем возврат суммы в размере 100%,
                           или заменем на аналогичный.Строго соблюдаем закон «О защите прав потребителей».</p>  
                    </div>
                    <div class="home_box">
                        <img src="../images/icons/back(arrow).png" alt="arrow"><a class="butt_home" href="../index.php">Вернуться на гланую</a>
                    </div>
                </div>
            </div>
        </div>

                                <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="footer_head">
                    <ul>
                        <li><a href="../index.php">Главная<i class="fa-solid fa-house-chimney"></i></a></li>
                        <li><a href="../TOOLS/tools.php">Магазин<i class="fa-solid fa-shop"></i></a></li>
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
                    <ul><a href="../about_us/index_about_us.php">О компании</a></ul>
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
            </div>
        </footer>
    </div>
</body>
</html>