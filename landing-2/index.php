<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page 2</title>
    <link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
    <link rel="stylesheet" href="./section-1.css">
    <link rel="stylesheet" href="./section-2.css">
    <link rel="stylesheet" href="../footer/style_footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
    <!-- <script defer src="./script.js"></script> -->
    <script defer src="./script_2.js"></script>
    <script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="main_wrapper">
        <section class="section-1">

            <div class="header">
                <nav class="items">
                    <h1>Магазин инструментов</h1>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-house"></i>главная</a></li>
                        <li><a href="../about_us/index_about_us.php"><i class="fa-solid fa-people-group"></i>о нас</a></li>
                        <li><a href="../TOOLS/tools.php"><i class="fa-solid fa-screwdriver-wrench"></i></i>инструменты</a></li>
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

            <div class="slider_wrapper"> 
                    
                <div class="title">
                    <h2>Магазин инструментов <br> <span>"Жёлтый молоток"</span></h2>
                    <div class="sub_title">
                        <h3>Нас выбирают профессионалы!</h3>
                    </div>
                    <a class="btn-start" href="../TOOLS/tools.php">магазин</a>
                </div>

                    <div class="slider_button-left">
                        <button class="btn_prev"><i class="fa-solid fa-circle-chevron-left"></i></button>
                    </div>

                    <div class="slider_container">    
                        <div class="slider_track">   
                            <div class="slider_item" style="background-image: url(./img/stihl-big-2.jpg);"></div>
                            <div class="slider_item" style="background-image: url(./img/bolgarka-makita-veryBig.jpg);"></div>
                            <div class="slider_item" style="background-image: url(./img/metabo-big.jpg);"></div>
                            <div class="slider_item" style="background-image: url(./img/karher-big-1.jpg);"></div>
                            <div class="slider_item" style="background-image: url(./img/gardena-big-3.jpg);"></div>
                            <div class="slider_item" style="background-image: url(./img/de-walt-big-4.jpg);"></div>
                            <div class="slider_item" style="background-image: url(./img/husqvarna-big-2.jpg);"></div>
                        </div>
                    </div> 

                    <div class="slider_button-right">
                        <button class="btn_next"><i class="fa-solid fa-circle-chevron-right"></i></i></button>
                    </div> 

                </div>      
        </section>

        <section class="section-2">
            <div class="popular_title">
                <h4>популярные товары</h4>
            </div>
            <div class="slider_main_wrapper1">
                 <div class="slider_wrapper1">
                    <div class="slider_buttons1">
                        <button class="btn_prev1"><i class="fa-solid fa-circle-chevron-left"></i></button>
                    </div>
                    <div class="slider_container1"> 
                        <div class="slider_track1">   
                            <a href="../stock_tools/rubanok-makita/rubanok_makita.php" class="slider_item1"></a>
                            <a href="../stock_tools/benzopila-huter/benzopila-huter.php" class="slider_item1"></a>
                            <a href="../stock_tools/bolgarka-makita/bolgarka_makita.php" class="slider_item1"></a>
                            <a href="../stock_tools/cirkulyarka-makita/cirkulyarka_makita.php" class="slider_item1"></a>
                            <a href="../stock_tools/drel-metabo/drel_metabo.php" class="slider_item1"></a>
                            <a href="../stock_tools/electrolobzik-interSkol/lobzik_interskol.php" class="slider_item1"></a>
                            <a href="../stock_tools/fen-iNGCO/fen_iNGCO.php" class="slider_item1"></a>
                            <a href="../stock_tools/frezernaya-graphite/frezerka_graphite.php" class="slider_item1"></a>
                            <a href="../stock_tools/gazon-huter/gazon_huter.php" class="slider_item1"></a>
                            <a href="../stock_tools/kley-pistol/kley-pistol.php" class="slider_item1"></a>
                            <a href="../stock_tools/kustorez-bosch/kustorez_bosch.php" class="slider_item1"></a>
                            <a href="../stock_tools/miksser-zubr/mikser_zubr.php" class="slider_item1"></a>
                            <a href="../stock_tools/otboiniy-molotot-makita/otboinik_makita.php" class="slider_item1"></a>
                            <a href="../stock_tools/perforator-makita/perforator_makita.php" class="slider_item1"></a>
                            <a href="../stock_tools/shlifmashina-makita/shleifmashine.php" class="slider_item1"></a>
                        </div>
                    </div>
                    <div class="slider_buttons1">
                        <button class="btn_next1"><i class="fa-solid fa-circle-chevron-right"></i></button>
                    </div>
                </div>
            </div> 

            <div class="yellow_line">
                <div class="yellow_line_content">
                    <p>
                        <span>Тоько лучший</span>&nbsp инструмент и оборудование!
                    </p>
                </div>
            </div>

            <div class="container_2">
                <div class="container_2_content">
                <h1>Преимущества магазина<span>&nbsp жёлтый молоток:</span></h1>
                <br>
                <p><span>Гарантия качества!</span><span>&nbsp Качество</span> – это самый 
                главный показатель долговечности любой продукции, 
                поэтому мы неустанно работаем над поддержанием данного 
                параметра на должном уровне. Исходя из этого стремления, 
                мы сотрудничаем только лишь с проверенными временем партнёрами, 
                зарекомендовавшими себя как надёжные производители. В целях 
                сохранения своей репутации мы строго следим за тем, 
                чтобы в продажу поступали только оригинальные инструменты.
                </p>
                <br>

                <p><span>Широкий ассортимент!</span>&nbsp Наш магазин предоставляет 
                широкий ассортимент различных инструментов.
                Такое разнообразие инструмента позволяет покупать всё необходимое 
                в одном месте, что без сомнений является плюсом и экономит Ваше время, 
                которое пришлось бы потратить на поиск необходимых инструментов 
                в других магазинах и торговых точках.
                </p>
                <br> 

                <p><span>Быстрый поиск!</span>&nbsp Наши покупатели имеют возможность 
                выбрать и купить инструмент, 
                находясь у себя дома, – интернет магазин ЖЁЛТЫЙ МОЛОТОК - 
                инструмент в их распоряжении. Разработчиками нашего сайта всё продумано 
                до мелочей для того,чтобы облегчить поиск необходимого инструмента. 
                Кроме того, к каждому инструменту есть подробное описание его 
                характеристик
                </p>
                <br>

                <p><span>Различные способы оплаты товара!</span>&nbsp Оплатить 
                заказанный товар в нашем интернет-магазине можно любым удобным для 
                Вас способом - пластиковой картой, безналично через банк, с помощью 
                электронных платежей или наличными в офисе магазина.
                </p>  
                <div class="pay_box">
                    <div class="sub_pay_box">
                        <div class="pay_sistem_lable sber"></div>
                        <div class="pay_sistem_lable qiwi"></div>
                        <div class="pay_sistem_lable unionPay"></div>
                        <div class="pay_sistem_lable mir"></div>
                    </div>
                </div> 
            </div>    
        </section>

        <footer class="footer">
            <div class="footer_content">
                <div class="footer_head">
                    <ul>
                        <li><a href="#">Главная<i class="fa-solid fa-house-chimney"></i></a></li>
                        <li><a href="../TOOLS/tools.php">Инструменты<i class="fa-solid fa-screwdriver-wrench"></i></a></li>
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
                    <li><a href="#">Образцы документов</a></li>
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
    </main>
</body>
</html>