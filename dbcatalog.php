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
 $sql = "SELECT * FROM products";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $goods[] = mysqli_fetch_array($result);
 }
 return $goods;
}
function get_cart($db,$id = FALSE) {
 $sql = "SELECT * FROM cart ";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $cart[] = mysqli_fetch_array($result);
 }
 return $cart;
}
function get_cityd($db,$id = FALSE) {
 $sql = "SELECT * FROM cityd";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $cityd[] = mysqli_fetch_array($result);
 }
 return $cityd;
}
function get_country($db,$id = FALSE) {
 $sql = "SELECT * FROM countryd";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $countryd[] = mysqli_fetch_array($result);
 }
 return $countryd;
}
function get_adress($db,$id = FALSE) {
 $sql = "SELECT * FROM sentadress";
 
 $result = mysqli_query($db,$sql);
 for($i = 0;$i < mysqli_num_rows($result); $i++) {
  $adress[] = mysqli_fetch_array($result);
 }
 return $adress;
}
?>