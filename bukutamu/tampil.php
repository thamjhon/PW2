<html>

<head>
<title>Contact</title>
</head>
<body>
<h1>Lutfi Septian (171011401149)</h1>
<a href="index.php"> Kembali ke Buku Tamu</a>
<br>
<h2>BUKU TAMU</h2>
<a href="tampil.php"> Lihat Buku Tamu</a>
<hr size=1>

<?php
include ("connect.php");
// sql menampilkan record
$sql = "SELECT id, nama, email, alamat, kota, msg FROM tamu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data setiap baris
    while($row = $result->fetch_assoc()) {

  echo "<br>".
  "id: ". $row["id"]. "<br>".
  "Name: ". $row["nama"]. "<br>".
  "Email: ". $row["email"]. "<br>".
  "Alamat: ". $row["alamat"]. "<br>".
  "Kota: ". $row["kota"]. "<br>".
  "Pesan: ". $row["msg"]. "<br>";
    }				
	
} else {
    echo "0 results";
}
$conn->close()
?>


</body>
</html>