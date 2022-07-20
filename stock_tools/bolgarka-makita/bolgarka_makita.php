<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>УШМ Makita</title>
    <link rel="stylesheet" href="../../NORMALIZE!!!/normalize.css">
    <link rel="stylesheet" href="./bolgarka_makita.css">
    <link rel="stylesheet" href="../../header/header.css">
    <link rel="stylesheet" href="../../footer/style_footer.css">
    <link rel="stylesheet" href="../../BASIC_CONTENT/style.css">

    <script defer src="../stock.js"></script>
    <script defer src="../../BASIC_CONTENT/script_header.js"></script>
    <script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <section class="section-1">
    <div class="header">
                <nav class="items">
                    <div class="search_form">
                        <? require_once "../../SQL/search_form.php"; ?>
                    </div>
                    <ul>
                        <li><a href="../../landing-2/index.php"><i class="fa-solid fa-house"></i>главная</a></li>
                        <li><a href="../../about_us/index_about_us.php"><i class="fa-solid fa-people-group"></i>о нас</a></li>
                        <li><a href="../../TOOLS/tools.php"><i class="fa-solid fa-hammer"></i>инструменты</a></li>
                        <li><a href="../../contacts/index_contacts.php"><i class="fa-solid fa-square-phone-flip"></i>контакты</a></li>
                    </ul>
                    <ul>
                        <li><a href="../registration/index_registration.php"><i class="fa-solid fa-id-card"></i>регистрация</a></li>
                        <li><a href="../enter_page/index_enter_page.php"><i class="fa-solid fa-arrow-right-to-bracket"></i>вход</a></li>
                        <li><a href="../SQL/cart_test.php"><i class="fa-solid fa-cart-shopping"></i>корзина</a></li>
                    </ul>
                </nav>
            </div>

        <div class="container">
            <h1>У.Ш.М Makita</h1>
                <div class="img_box_wrapper">

                    <div class="img_box">
                        <img
                            class="img_huter"
                            src="../../images/img_tools_500x500/electro/bolgarka-makita_ga5030.png"
                            id="open_pop_up"
                            alt=""
                        >
                        <div class="pop_up" id="pop_up">
                            <div class="pop_up_container">
                                <div class="pop_up_body">

                                    <img src="../../images/img_tools_500x500/electro/bolgarka-makita_ga5030.jpg">

                                    <div id="pop_up_close" class="pop_up_close">&#10006</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            <div class="description_box">
                <div class="options">
                    <ul>
                        <li>бренд:</li>
                        <li>тип:</li>
                        <li>Потребляемая мощность:</li>
                        <li>Макс.частота вращения диска:</li>
                        <li>Диаметр посад.отверстия:</li>
                        <li>Резьба шпинделя:</li>
                        <li>Макс.диаметр диска:</li>
                        <li>Питание:</li>
                    </ul>
                </div>
                <div class="options_descriptions">
                    <p>Makita</p>
                    <p>УШМ</p>
                    <p>720 Вт</p>
                    <p>11000 об/мин</p>
                    <p>22.23 мм</p>
                    <p>M14</p>
                    <p>125 мм</p>
                    <p>От сети 220v</p>
                </div>
            </div>
            <div class="dastination">
                <p>
                    Углошлифовальная машина от одного из лидеров в 
                    разработке строительных инструментов отличается 
                    компактными размерами при достаточно неплохой мощности 
                    720 Вт. Надёжная защита якоря и статора специальным 
                    лаком способствует их длительной бесперебойной работе 
                    в любых условиях. Домашнего мастера обязательно 
                    порадуют лёгкая замена оснастки, которая обеспечивается 
                    блокировкой шпинделя и возможность зафиксировать пуск 
                    во включенном состоянии. Теперь необязательно удерживать 
                    палец на курке при долгой работе с инструментом. 
                </p>
            </div>


            <form class="form-buy_button">
                <a href="../../SQL/products_electro.php" class="btn-buy" type="submit">Перейти к товару</a>
            </form>
           
        </div>
    </section>
    <footer class="footer">
            <div class="footer_content">
                <div class="footer_head">
                    <ul>
                        <li><a href="../../landing-2/index.php">Главная<i class="fa-solid fa-house-chimney"></i></a></li>
                        <li><a href="../../TOOLS/tools.php">Инструменты<i class="fa-solid fa-screwdriver-wrench"></i></a></li>
                        <li><a href="../../contacts/index_contacts.php">Контакты<i class="fa-solid fa-address-book"></i></a></li>
                        <li><a href="../../registration/index_registration.php">Регистрация<i class="fa-solid fa-id-card"></i></a></li>
                        <li><a href="../../enter_page/index_enter_page.php#">Вход<i class="fa-solid fa-dungeon"></i></a></li>
                        <li><a href="../../SQL/cart_test.php">Корзина<i class="fa-solid fa-cart-shopping"></i></a></li>
                    </ul>
            </div>
            <div class="footer_items_box">
                <ul>Информация:
                    <li><a href="http://www.consultant.ru/document/cons_doc_LAW_373622/0082fc02fd38782880841f0019209a807a218a2b/">Правила продажи</a></li>
                    <li><a href="../../privacity/index_privacity.php">Политика конфиденциальности</a></li>
                    <li><a href="../../bonus_program/bonus.php">Бонусная программа</a></li>
                    <li><a href="../../exchange/index.php">Обмен и возврат</a></li>
                </ul>
                <ul><a href="../../about_us/index_about_us.php#">О компании</a></ul>
                <ul><a href="../../blog/blog.php">Отзывы покупателей</a></ul>
                <div class="adress_box">
                    <i class="fas fa-envelope"></i>
                    <p>300001 г.Тула, ул. Каракозова д.27</p>
                    <div class="social_network_main_box">
                        <div class="social_network_box"><a href="#"><img class="social_network" src="../../images/200x200/icon_telegramm-200x200.jpg"></a></div>
                        <div class="social_network_box"><a href="#"><img class="social_network" src="../../images/ok-icon.png"></a></div>
                        <div class="social_network_box"><a href="#"><img class="social_network" src="../../images/vk-icon.jfif"></a></div>
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