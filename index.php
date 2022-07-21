<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>SPA-салон "Золотой лотос"</title>
</head>

<body>
    <?php
    session_start();
    include_once 'php/user.php';
    include_once 'php/head.php';
    // Если ползователь залогинился - покажем подарочную акцию для него
    var_dump($_COOKIE);
    echo '<br>';
    ?>
    <main>
        <div class="page-content">
            <div class="main-header content-block">
                <div style="flex: 1; margin: 0; text-align: center;">
                    <img src="images/lotos-12.png">
                </div>
                <div style="flex: 2; margin-left: 20px"" >
                    <p><strong><span style=" font-size: x-large; color: #adad14;">7(999)777-66-55</span></strong></p>
                    <p><strong><span style="font-size: x-large; color: #adad14;">7(888)666-55-44</span></strong></p>
                    <p></p>
                    <p><span style="color: #adad14; font-size: medium;"><strong>с 10 утра и до последнего вздоха</strong></span></p>
                    <p>+7 (123) 333-44-22 м.ВДНХ</p>
                    <p>+7 (594) 444-22-00 м.Краснопресненская</p>
                    <p>+7 (345) 666-55-11 м.Авиамоторная</p>
                    <p></p>
                    <p style="text-align: center;">
                        <span style="text-decoration: underline;">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener"><img style="border: 0px none; vertical-align: middle; margin: 10px; float: left;" src="images/facebook-256-1.png" alt="" width="25" height="25"></a>
                            <a href="https://www.youtube.com/" target="_blank" rel="noopener"><img style="border: 0px none; vertical-align: middle; margin: 10px; float: left;" src="images/youtube-256-1.png" alt="" width="25" height="25"></a>
                            <a href="https://twitter.com/" target="_blank" rel="noopener"><img style="border: 0px none; vertical-align: middle; margin: 10px; float: left;" src="images/twitter-256-1.png" alt="" width="25" height="25"></a>
                            <a href="https://www.ok.ru/" target="_blank" rel="noopener"><img style="border: 0px none; vertical-align: middle; margin: 10px; float: left;" src="images/ok-1.png" alt="" width="25" height="25"></a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener"><img style="border: 0px none; vertical-align: middle; margin: 10px; float: left;" src="images/instagram-256-1.png" alt="" width="25" height="25"></a>
                            <a href="https://vk.com/" target="_blank" rel="noopener"><img style="border: 0px none; vertical-align: middle; margin: 10px; float: left;" src="images/vk-1.png" alt="" width="25" height="25"></a>
                        </span>
                    </p>
                    <p></p>

                </div>
            </div>
            <div class="content">
                <div class="side-content content-block">
                    <a class="side-content-item" href="/">Он-лайн запись</a>
                    <a class="side-content-item" href="/">СПА</a>
                    <a class="side-content-item" href="/">Сауна</a>
                    <a class="side-content-item" href="/">Все услуги</a>
                    <a class="side-content-item" href="/">Подарочные сертификаты</a>
                </div>
                <script>
                    // если в cookie записана дата регистрация на сайте и еще не прошло 24 часа - предложим акцию
                    if (checkCookieEnabled()) {
                        if (document.cookie.indexOf('reg_time=') != -1) {
                            let cookieUserReg = getCookie('reg_time');
                            let tsUserReg = cookieUserReg * 1000;
                            tsUserReg += 24 * 3600 * 1000;
                            let timeUseReg = new Date(tsUserReg);
                            //alert(timeUseReg);
                            window.setInterval(function() {
                                let now = new Date();
                                let actTime = new Date(tsUserReg - now);
                                let clock = document.getElementById("act_time");
                                clock.innerHTML = actTime.getDay() + ' дней ' + actTime.getHours() + ' часов ' + actTime.getMinutes() + ' минут ' + actTime.getSeconds() + ' секунд ';
                            }, 1000);
                        } else {
                            console.log('Время регистрации не установлено');
                        }
                    } else {
                        console.log('Coockie не доступны');
                    }
                </script>
                <div class="main-content ">
                    <div id="action_content" class="main-content-item content-block">
                        <h2>Подарочный сертификат каждому новому клиенту </h2><br>
                        <hr>
                        <img src="images/actionl.png" alt="Подарочный сертификат" style="width: 100%;">
                        <div class="slide-text text-bottom">
                            <span style="font-size: 16px;">СПА программа на выбор. Для активации сертификата свяжитесь с администратором любого нашего салона в течении <span id="act_time">0 часов 5 минут 10 секунд</span>
                            </span>
                        </div>
                    </div>
                    <div class="main-content-item content-block">
                        <img src="images/new.jpg" alt="Новые услуги" style="width: 100%;">
                        <div class="slide-text text-top">
                            <span style="font-size: 16px;">Новая услуга. Специально для молодых родителей: Высыпание в течении 8 часов! И никто не побеспокоит!
                            </span>
                        </div>
                    </div>
                    <div class="main-content-item content-block">
                        <h2>СПА для двоих </h2><br>
                        <div style="display: flex; margin: 0 10px;">
                            <img src="images/2x2.jpg" alt="СПА для двоих" style="width: 40%;">
                            <span style="margin: 0 10px;">Если Вы хотите сделать приятный подарок своему любимому человеку, тащите его к нам - мы знаем что с ним делать :) <br> Посещение СПА вдвоем в нашей сети - это целый ритуал, который позволит Вам насладиться приятными часами общения, проводя их с пользой для Вашего здоровья.
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer content-block">
                <div class="links">
                    <a href="#">Вакансии</a>
                    <a href="#">Контакты</a>
                    <a href="#">О нас</a>
                </div>
                <div class="copyright">
                    Copyright © DVSt 2022
                </div>
            </div>
        </div>
    </main>
</body>

</html>