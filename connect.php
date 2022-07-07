<?$hostname="localhost";
	$username="root";
	$password="";
	$dbname="cotolog";

 $mysqli = @new mysqli($hostname, 	$username, $password, 	$dbname);
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
   $sql = "SET NAMES utf8";
$result =  $mysqli->query($sql);
        ?>