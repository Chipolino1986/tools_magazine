<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
    <link rel="stylesheet" href="./blog.css">
    <link rel="stylesheet" href="../footer/style_footer.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../BASIC_CONTENT/style.css">
    <link rel="stylesheet" href="../NORMALIZE!!!/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script defer src="./comments.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script defer src="../header/header.js"></script>
    <script defer src="https://kit.fontawesome.com/9ca67525c0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <nav class="items">
            <h1>Магазин инструментов</h1>
            <ul>
                <li><a href="../landing-2/index.php"><i class="fa-solid fa-house"></i>главная</a></li>
                <li><a href="../about_us/index_about_us.php"><i class="fa-solid fa-people-group"></i>о нас</a></li>
                <li><a href="../TOOLS/tools.php"><i class="fa-brands fa-shopify"></i>магазин</a></li>
                <li><a href="../contacts/index_contacts.php"><i class="fa-solid fa-square-phone-flip"></i>контакты</a></li>
            </ul>
            <ul>
                <li><a href="../registration/index_registration.php"><i class="fa-solid fa-id-card"></i>регистрация</a></li>
                <li><a href="../enter_page/index_enter_page.php"><i class="fa-solid fa-arrow-right-to-bracket"></i>вход</a></li>
                <li><a href="../SQL/cart_test.php"><i class="fa-solid fa-cart-shopping"></i>корзина</a></li>
            </ul>
            <a href="../landing-2/index.php" class="burger_wrapper">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </a>
        </nav>
    </div>

    <div class="wrapper_dialog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Оставте свой отзыв</h2>
                </div>
                <div class="col-lg-6 out">
                    <div id="comment-field"></div>
                </div>
                <div class="col-lg-6 input">
                    <form>
                        <div class="form-group">
                            <label for="comment-name">Имя:</label>
                            <input type="name" class="form-control" id="comment-name" placeholder="Ваше Имя">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="comment-body">Отзыв:</label>
                            <input type="name" class="form-control" id="comment-body" placeholder="Ваш отзыв">
                        </div>
                        <br>
                        <div class="form-group-3">
                            <button type="submit" id="comment-remove" class="btn btn-danger">удалить комментарии</button>
                            <button type="submit" id="comment-add" class="btn btn-primary">добавить комментарий</button>
                        </div>
                    </form>
                </div>    
            </div>   
        </div>     
    </div>



        <footer class="footer">
            <div class="footer_content">
                <div class="footer_head">
                    <ul>
                        <li><a href="../landing-2/index.php">Главная<i class="fa-solid fa-house-chimney"></i></a></li>
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
                    <li><a href="#">Образцы документов</a></li>
                    <li><a href="../exchange/index.php">Обмен и возврат</a></li>
                </ul>
                <ul><a href="../about_us/index_about_us.php#">О компании</a></ul>
                <ul><a href="#">Отзывы покупателей</a></ul>
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