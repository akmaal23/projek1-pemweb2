<?php
include_once('koneksi.php');

//tangkap data

$id = $_POST['id'];
$layanan = $_POST['layanan'];
$jam_operasional = $_POST['jam_operasional'];


//queryinsert
$query = "UPDATE unitkerja SET layanan='$layanan', jam_operasional='$jam_operasional' WHERE id ='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: unit_kerja.php');
} else {
    echo "Gagal menyimpan data";
}

?>