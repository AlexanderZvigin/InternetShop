<?php
session_start();
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($surname);} }
    if (isset($_POST['surname'])) { $surname=$_POST['surname']; if ($surname =='') { unset($surname);} }
     if (isset($_POST['otchestvo'])) { $otchestvo=$_POST['otchestvo']; if ($otchestvo =='') { unset($otchestvo);} }
      if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
 if (empty($login) or empty($password) or empty($name) or empty($surname) or empty($otchestvo) or empty($email) )
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = stripslashes($login);///такие же функции лежат в в файле testreg,комментарии там
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include ("usersdatabd.php");// 
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }

    $result2 = mysql_query ("INSERT INTO users (login,password,name,surname,otchestvo,email) VALUES('$login','$password','$name','$surname','$otchestvo','$email')");
var_dump($result2);
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт.";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>

<?php
    ?>
    <html>
    <head>
    <title>Главная страница</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <h2>Главная страница</h2>
    <div class="auth-form-wrapper">
    <form action="testreg.php" method="post">

 <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
    <input class="adding-button" type="submit" name="submit" value="Войти">
<br>
    </p></form>
    <button class="adding-button" onclick="window.location.href = 'reg.php';">регистрация</button>
    </p></form>
</div>
    <br>
    <?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость";
    }
    ?>
    </body>
    </html>