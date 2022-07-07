<?php
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    else
    
    $login = stripslashes($login);
    $login = htmlspecialchars($login);///замена управляющей последовательности символов(?) без этого должно все также работать,но лучше не удалять
$password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    if ($login=="administrator" and $password=="147852369") {
        header("Location: adminwelcome.php");
    }
    include ("usersdatabd.php");// тут бд с логинами и паролями 
$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];//присваиваем переменной SESSION айди и логин пользователя,их можно будет вывести в любом другом файле,предварительно стартанув сессию
    echo require_once('main.php');
     }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами login или пароль неверный.");
    }
}
    ?>}
