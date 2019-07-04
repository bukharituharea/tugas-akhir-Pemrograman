<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Form HTML Dengan PHP</h1>
<form action="proses2.php" method="post">
	<div>
		<label>Nama</label><input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div>
		<label>umur</label><input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
	</div>
	<input type="submit" name="submit" value="Simpan"/>
</form>
<?php
if (isset($_POST['submit'])) {
	echo 'Nama Anda  : ' . $_POST['nama'] . '<br/>';
	echo 'Umur Anda : ' . $_POST['Umur']; 
</body>
</html>
<?php

 ?>