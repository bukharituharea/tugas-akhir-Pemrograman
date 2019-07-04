<?php
echo "<head><title>DATA PENGUNJUNG</head></title>";
$fp = fopen("datapengunjung.txt","a+");//untuk membuka file data pengunjung yang kita inputkan
$nama = $_POST['nama'];//untuk menampilkan nama
$umur = $_POST['umur'];//untuk menampilkan umur

?>