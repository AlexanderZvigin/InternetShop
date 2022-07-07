<?php
function connect_db() {
 $db = mysqli_connect('localhost','root','','cotolog');
 if(!$db) {
  exit('Error'.mysqli_error());
 }
 mysqli_query($db,"SET NAMES utf8");
 
 return $db;
}
function get_goods($db,$id = FALSE) {
 $sql = "SELECT * FROM countrys";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $country[] = mysqli_fetch_array($result);
 }
 
 return $country;
}
function get_type($db,$id = FALSE) {
 $sql = "SELECT * FROM type";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $type[] = mysqli_fetch_array($result);
 }
 
 return $type;
}
function get_proizvoditel($db,$id = FALSE) {
 $sql = "SELECT * FROM proizvoditel";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $proizvoditel[] = mysqli_fetch_array($result);
 }
 
 return $proizvoditel;
}
function get_color($db,$id = FALSE) {
 $sql = "SELECT * FROM color";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $color[] = mysqli_fetch_array($result);
 }
 
 return $color;
}
function get_material($db,$id = FALSE) {
 $sql = "SELECT * FROM materials";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $material[] = mysqli_fetch_array($result);
 }
 
 return $material;
}
function get_pol($db,$id = FALSE) {
 $sql = "SELECT * FROM Pol";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $pol[] = mysqli_fetch_array($result);
 }
 
 return $pol;
}
function get_razmer($db,$id = FALSE) {
 $sql = "SELECT * FROM rr";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $razmer[] = mysqli_fetch_array($result);
 }
 
 return $razmer;
}
?>