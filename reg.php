<html>
    <head>
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="auth-form-wrapper">
    <h2>Регистрация</h2>
    <form action="save_user.php" method="post">
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
    <label>Ваше имя:<br></label>
    <input name="name"  size="15" maxlength="15">
    </p>
    <label>Ваше фамилия:<br></label>
    <input name="surname"  size="15" maxlength="15">
    </p>
     <label>Ваше отчество:<br></label>
    <input name="otchestvo"  size="15" maxlength="15">
    </p>
    <label>Ваш email:<br></label>
    <input name="email"  size="15" maxlength="15">
    </p>
<p>
    <input class="adding-button" type="submit" name="submit" value="Зарегистрироваться">
</p></form>
</div>
    </body>
    </html>