
<?php
 include("userinfobd.php");
    $name= mysql_escape_string($_POST['namename']);
    $surname = mysql_escape_string($_POST['surname']);
    $otchestvo= mysql_escape_string($_POST['otchestvo']);
    $email= mysql_escape_string($_POST['email']);
    $adress= mysql_escape_string($_POST['adress']);
    $telephone= mysql_escape_string($_POST['telephone']);
    $cardnumber= mysql_escape_string($_POST['cardnumber']);
 
    $strSQL = "INSERT INTO userinfo(name,surname, otchestvo, email,adress,telephone,cardnumber) values ('$name','$surname','$otchestvo','$email', '$adress',$telephone,$cardnumber) ";
    
    // SQL-оператор выполняется
    mysql_query($strSQL) or die (mysql_error());
 
    // Закрытие соединения
    mysql_close();
    ?>