<?php
include_once('koneksi.php');

//tangkap data

$nama = $_POST['nama'];
$kode = $_POST['kode'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$tmp_lahir = $_POST['tmp_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$kelurahan = $_POST['kelurahan_id'];

//queryinsert
$query = "INSERT INTO pasien (nama, kode, email, tgl_lahir, tmp_lahir, gender, alamat, kelurahan_id) VALUES 
('$nama', '$kode' , '$email' , '$tgl_lahir' , '$tmp_lahir' , '$gender' , '$alamat' , '$kelurahan') ";


//eksekusi query
if ($dbh->query($query)){
    header('location: pasien.php');
} else {
    echo "Gagal menyimpan data";
}











?>