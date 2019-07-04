<html>
<head>
	<body style="background-image:url(22.jpg); "></body>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<!DOCTYPE html>
<html>
<head><style>
		table{
	font-family : Arial;
	border-collapse: collapse;
	width :100%;
	height: 100%;
}
td,th{
	border :1px solid :white;
	background-color: white;
	text-align: Left ;
	padding:30px;
}
tr:nth-child(even){
	background-color: white;
}
</style>
	<title>Tugas Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="css/style6.css">
	<script language="javascript" src="js/javascript.js"></script>
</head>
<body>

	<div class="menubar">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="news.html">Maluku Tengah</a></li>
			<li><a href="news2.html">Maluku Tenggara</a></li>
			<li><a href="news3.html">Papua</a></li>
			<li><a href="admin.html">Biodata Saya</a></li>
			 <li><a  href="lihat.php">Lihat Pengunjung</a></li>
			<form name="formcari" onSubmit="cari()"><pre>
  		<input class="search" name="keyword" type="text" placeholder="Cari..." required><input class="button" type="submit" value="Cari">		
			</form></pre>
		</ul>
</div>	



<div class="menu2">
	<center>
	<br><br>
	<h2><font color="white">Data Pengunjung</font></h2>
	<hr width="80%">

</div>
</body>
</html>

<?php
echo "<head><title>Data Pengunjung</title></head>";
$fp = fopen("datapengunjung.txt","r");//untuk membuka file data pengunjung yang kita inputkan
echo "<table border=20>";
while ($isi = fgets($fp,80))//fgets untuk membaca baris
{
$pisah = explode("|",$isi);

echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";// untuk Menampilkan nama  
echo "<tr><td>Umur </td><td>: $pisah[1]</td></tr>";//untuk Menampilkan umur  
}

echo "</table>";
echo "<a class=btn href=buku.html> Isi Buku Pengunjung </a>";

?>

</html>