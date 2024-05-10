<?php
include_once('koneksi.php');

//tangkap data

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$berat_badan = $_POST['berat_badan'];
$tinggi_badan = $_POST['tinggi_badan'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];

//queryinsert
$query = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan ) VALUES 
('$tanggal', '$berat' , '$tinggi' , '$tensi' , '$keterangan' ) ";


//eksekusi query
if ($dbh->query($query)){
    header('location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}











?>