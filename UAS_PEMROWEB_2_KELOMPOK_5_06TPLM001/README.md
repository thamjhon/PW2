# UAS
UAS Pemrograman Web 2 2021

1. Pada File koneksi.php digunakan fungsi mysqli_connect($hostName, $DbUsername, $DbPassword, $DbName) yang digunakan untuk menghubungkan aplikasi dengan database yang ingin digunakan.

2. Pada File validateUser terdapat: session_start() untuk mengawali sebuah aktivitas session. kemudian $_POST[..] untuk memanggil data yang sudah diinputkan pada halaman form, lalu fungsi $_SESSION[..] yang digunakan untuk membuat sebuah session pada variable data tertentu.

3. Pada File index.php terdapat code : if(isset($_GET ... ) yang berfungsi untuk mengambil data dari sebuah form dapat berupa text field, combobox maupun select option.

4. Pada File AddOrderQuery yaitu $query = "INSERT INTO tbl_datapesanan SET jenisRestoran='$jenisRestoran' , makanan='$makanan' , harga='$harga' , alamatPemesan='$alamat' , namaPemesan='$nama' , telpPemesan='$nomorHP' , emailPemesan='$email'"; @$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan DROP nmrPesanan"); @$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST"); mysqli_query($connect , $query);

5. Digunakannya INSERT INTO... SET... untuk proses add / tambah data masuk ke dalam table yang ada di database.

- Pada File EditOrderQuery terdapat $query = "UPDATE tbl_datapesanan SET jenisRestoran='$restoranLama' , makanan='$makananLama' , harga='$hargaLama' , alamatPemesan='$alamat' , namaPemesan='$nama' , telpPemesan='$nomorHP' , emailPemesan='$email' WHERE nmrPesanan='$nmrPesanan'"; @$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan DROP nmrPesanan"); @$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST"); mysqli_query($connect , $query); yang digunakan untuk insert data data yang dinginkan ke table database yang digunakan untuk nanti data yang akan ditampilkan.

- Digunakannya UPDATE ... SET... untuk mengupdate data tertentu yang dipilih dari sebuah table di database. Dan terdapat juga code: $nmrPesanan = $_GET['nmrPesanan']; $select = "SELECT * FROM tbl_datapesanan WHERE nmrPesanan='$nmrPesanan'"; $getData = mysqli_query($connect,$select); /* Mengambil Data Dari Database Menggunakan PHP */ while($a = mysqli_fetch_array($getData)) SELECT * FROM ... berfungsi untuk mengambil data pada sebuah table database. lalu ada mysqli_fetch_array yaitu untuk mengambil data yang berupa tumbukan data pada sebuah table yang diinginkan.

6. Kemudian Pada File DeleteOrderQuery yaitu

- $query = mysqli_query($connect, "DELETE FROM tbl_datapesanan WHERE nmrPesanan='". $_GET["nmrPesanan"] . "'"); @$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan DROP nmrPesanan"); @$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST"); mysqli_multi_query($connect , $query);

- Digunakannya DELETE FROM ... untuk menghapus data tertentu yang diinginkan pada table database. Dan ALTER TABLE ... DROP untuk menghilangkan record pada field data tertentu di table database. Lalu adanya ALTER TABLE ... ADD ... untuk menambahkan record field pada field data tertentu di table database.

7. Pada File logout.php terdapat session_destroy(); untuk mengakhiri session pada aplikasi.

8. Pada PreviewDocument terdapat date_default_timezone_set('Asia/Jakarta'); yang difungsikan untuk menggunakan tampilan jam sesuai dengan waktu di ASIA Jakarta.
