<?php
include_once('koneksi.php');

//tangkap data
$layanan = $_POST['layanan'];
$jam_operasional = $_POST['jam_operasional'];

//queryinsert
$query = "INSERT INTO unitkerja ( layanan, jam_operasional) VALUES 
('$layanan', '$jam_operasional' ) ";


//eksekusi query
if ($dbh->query($query)){
    header('location: unit_kerja.php');
} else {
    echo "Gagal menyimpan data";
}


?>