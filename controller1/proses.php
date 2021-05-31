<?php
include '../model1/database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
    $db->input($_POST['nama'],$_POST['alamat'],$_POST['usia']);
    header("location:../view1/tampil.php");
 }elseif($aksi == "hapus") {
     $db->hapus($_GET['id']);
    header("location:../view1/tampil.php");
 }elseif($aksi == "update") {
    $db->edit($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
   header("location:../view1/tampil.php");
}
// Hai wanda, saya menambahkan komen disini :)
?>
