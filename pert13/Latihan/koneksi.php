<?php
$koneksi = mysqli_connect("localhost", "root", "");
mysqli_select_db($koneksi, "db-artikel");
date_default_timezone_set('Asia/Jakarta');