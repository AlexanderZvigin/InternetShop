<?php
    session_start();
    ?>
    <html>
    <head>
    <title>Авторизация</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="auth-form-wrapper">
    <h2>Авторизация</h2>
    <form action="testreg.php" method="post" class="auth-form">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
 <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15" class="auth-form">
    </p>


    <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
 
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15" class="auth-form">
    </p>

    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 

    <p>
    <input class="adding-button" type="submit" name="submit" value="Войти">

    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
<br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 

    </p></form>
    <button class="adding-button" onclick="window.location.href = 'reg.php';">регистрация</button>
    <br>
</div>
    <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим 
    echo "Вы вошли на сайт, как гость";
    }
   
    ?>

    </body>
    </html>