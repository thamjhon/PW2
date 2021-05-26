<html>

<head>
<title>Contact</title>
</head>
<body>
<h1>BUKU TAMU</h1>
<a href="index.php"> Kembali ke Buku Tamu</a>
<br>
<h2>BUKU TAMU</h2>
<a href="tampil.php"> Lihat Buku Tamu</a>
<hr size=1>

<?php
include ("connect.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$pesan=$_POST['msg'];

// sql entry data pada tabel
$sql = "INSERT INTO tamu (nama, email, alamat, kota, msg)
VALUES ('$nama','$email','$alamat','$kota','$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Pesan telah terkirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>