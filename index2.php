<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>OOP in PHP</title>
<?php include("konstruktor4.php"); ?>
</head>
<body>
<?php
$pulut = new person("Pulut Suryati","Yogyakarta");
echo "Nama Lengkap : " . $pulut->get_name()."<br />";
echo "Alamat : " . $pulut->get_alamat()."<br />";
?>
</body>
</html>