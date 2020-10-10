<?php 
  $host       = "localhost";
  $kullanici  = "root";
  $parola     = "";
  $veritabani = "rentCar";
 
  if (@$vt=mysqli_connect($host,$kullanici,$parola)){
     echo "";
  } else {
     echo "Veri tabanınına bağlanırken sorun oluştu.";
  }   
 
  if ( mysqli_select_db($vt,$veritabani) ){
     echo "";
  } else {
     echo "<br>Veri tabanı çekme hatası.";
  }
 ?>