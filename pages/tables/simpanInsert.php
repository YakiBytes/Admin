<?php

  //print_r($_POST);

include "konfigurasiKoneksi.php"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "<p>";
 $sql = "INSERT INTO tabel_supplier (jenis, supplier, alamat, kontak)
VALUES ('".$_POST["jenis"]."', '".$_POST["supplier"]."', '".$_POST["alamat"]."','".$_POST["kontak"]."')";

if ($conn->query($sql) === TRUE) {
  //echo "Data baru dengan nama ".$_POST["nama"]." telah disimpan ke db";
  header("Location:data.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>