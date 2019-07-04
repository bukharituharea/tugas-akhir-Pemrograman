
<?php
echo "<head><title>DATA PENGUNJUNG</head></title>";
$fp = fopen("datapengunjung.txt","a+");//untuk membuka file data pengunjung yang kita inputkan
$nama = $_POST['nama'];//untuk menampilkan nama
$umur = $_POST['umur'];//untuk menampilkan umur


fputs($fp,"$nama|$umur\n");//untuk menulis file terbuka
fclose($fp);// untuk menutup file data pengunjung
if($fp!=0){
	header("location: index.html"); //jika data tidak sama dengan 0, maka langsung menuju ke index html
}
else{
	"data error";// jika data sama dengan 0, maka data error
}

?>
