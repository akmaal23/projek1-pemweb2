<?php
include_once('koneksi.php');

//tangkap data


$tgl_periksa = $_POST['tanggal'];
$berat_badan = $_POST['berat_badan'];
$tinggi_badan = $_POST['tinggi_badan'];
$tensi_pasien = $_POST['tensi'];
$keterangan_pasien = $_POST['keterangan'];
$namadok = $_POST["dokter_id"];
$namapas = $_POST["pasien_id"];

//queryinsert
$query = "INSERT INTO periksa (dokter_id, pasien_id, tanggal, berat_badan, tinggi_badan, tensi, keterangan) VALUES ('$namadok', '$namapas', '$tgl_periksa', '$berat_badan', '$tinggi_badan', '$tensi_pasien', '$keterangan_pasien')";

//eksekusi query
if ($dbh->query($query)){
    header('location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}











?>