<!DOCTYPE html>
<html lang="en">

<head>
<?php include('./php/reg.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/usluga.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper-header">
        <div class="header">
            <div class="header-row">
                <a href="./main.php"><img src="./img/Безымянный-1 1.png" alt="" class="logo"></a>
                <div class="usluga">
                    <img src="./img/Rectangle 6.png" alt="" class="usliga-img">
                    <a class="usluga-text">Выберите услугу</a>
                </div>
                <div class="marka">
                    <img src="./img/Rectangle 6.png" alt="" class="marka-img">
                    <a href="./usluga.html" class="marka-text">Выберите марку</a>
                </div>
                <a href="./about.html" class="about">О нас</a>
                <a href="./contact.html" class="contacts">Контакты</a>
                <a href="#"><img src="./img/521-5218494_mobile-icon-clip-art-mobile-icon-png-download 1.png" alt=""
                        class="login"></a>
            </div>
        </div>
    </div>
    <div class="video">
        <p class="video-text">ОБСЛУЖИВАНИЕ И РЕМОНТ </p>
        <video autoplay="autoplay" loop="loop" muted poster="/netcat_files/2/49/h_b61a9da2200126c3de25ceb7f31c8">

            <source src="https://москва-тюнинг.рф/netcat_files/2/49/1.mp4" type="video/mp4" />
        </video>
    </div>
    <div class="marks-block">
        <div class="marks-row">
            <hr class="hr">
            <div class="marks-block-text">
                <h1>Выберите вашу марку</h1>
            </div>
        </div>
        <div class="wrapper">
            <div class="button-row">
                <button class="marks-button">BMW</button>
                <button class="marks-button">Mersedes</button>
                <button class="marks-button">Audi</button>
                <button class="marks-button">Toyota</button>
                <button class="marks-button">Lexus</button>
            </div>
            <div class="button-row">
                <div class="button-big">
                    <p class="big-txt">Суперкары</p>
                    <p class="big-txt-low">Maserati</p>
                    <p class="big-txt-low">Ferrari</p>
                    <p class="big-txt-low">Lamborghini</p>
                    <p class="big-txt-low">Rolls-Royce</p>
                </div>
                <div class="button-big">
                    <p class="big-txt">Другие марки</p>
                    <p class="big-txt-low">Jaguar</p>
                    <p class="big-txt-low">Volkswagen</p>
                    <p class="big-txt-low">Cadillac</p>
                    <p class="big-txt-low">Mini</p>
                    <p class="big-txt-low">Volvo</p>
                </div>
            </div>
        </div>

    </div>
    <footer class="footer">
        <div class="footer-wrapper">
            <div class="footer-flex">
                <div class="footer-left">
                    <img src="./img/Безымянный-1 3.png" alt="" class="footer-logo">
                    <p class="copyright">© 2023-2023 «EAE»<br>
                        Все права<br>
                        защищены</p>
                </div>
                <div class="footer-center">
                    <p class="center-text">8 (495) 133-9663<br>г. Москва, Мадада, д8<br>kek@eae-tuning.ru</p>
                </div>
                <div class="footer-right">
                    <div class="right-flex1">
                        <a href="./usluga.html" class="right-text1">Выберите услугу</a>
                        <a href="./usluga.html" class="right-text">Выберите марку</a>
                    </div>
                    <div class="right-flex1">
                        <a href="./usluga.html" class="right-text">О нас</a>
                        <a href="./usluga.html" class="right-text">Контакты</a>
                        <a href="./usluga.html" class="right-text">Отзывы</a>
                    </div>
                    <img src="./img/foot-soc-icons2 1.png" alt="" class="socials">
                </div>
            </div>
        </div>
    </footer>
    <div class="auth">
        <div class="form-auth">
            <div class="form-block1">
                <button class="x">X</button>
                <form method="post"action="" class="form">
                    <input type="text" name="username" placeholder="Логин" class="input"><br>
                    <input type="text" name="email"placeholder="E-mail" class="input"><br>
                    <input type="text" name="password"placeholder="Пароль" class="input"><br>
                    <button type="submit" name="reg"class="reg">Регистрация</button>
                </form>

                <p class="ss">Уже прошли регистрацию?</p>
                <a href="#" class="reg-link">
                    Авторизируйтесь</a>
            </div>
        </div>
    </div>
    <div class="reg-block">
        <div class="form-auth">
            <div class="form-block1">
                <button class="x2">X</button>
                <form action="" class="form">
                    <input type="text" placeholder="Логин или e-mail" class="input"><br>
                    <input type="text" placeholder="Пароль" class="input"><br>
                    <button  type ="submit" name ="login"class="reg">Войти</button>
                </form>

                <p class="ss">Всё ещё не зарегистрированы?</p>
                <a href="#" class="reg-link2">
                    Зарегистрируйтесь</a>
            </div>
        </div>
    </div>
    <div class="pop-block">
        <div class="form-auth">
            <div class="form-block1">
                <button class="x3">X</button>
                <a href="./usluga.html" class="products-link">Чип-тюнинг</a>
                <a href="" class="products-link">Ремап двигателя</a>
                <a href="" class="products-link">Техническое обслуживание</a>
                <a href="" class="products-link">Установка деталей</a>
                <a href="" class="products-link">Продажа запчастей</a>
            </div>
        </div>
    </div>
    <script src="./js/popup.js"></script>
    <script src="./js/popup-prod.js"></script>
    <script src="./js/popup.js"></script>
</body>

</html>