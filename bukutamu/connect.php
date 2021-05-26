bukutamu-master<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "data";
$conn = mysqli_connect ($hostmysql, $username, $password, $database);
if ($conn){
 echo "<b> Koneksi Berhasil </b>";
}
else{
 die ("<b> Koneksi Gagal </b>");
}
?>