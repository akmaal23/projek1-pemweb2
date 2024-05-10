<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM pasien";
$pasiens = $dbh->query($query)
?>

<head>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="Template/css/styles.css" rel="stylesheet" />

</head>
<style>
    h1{
        font-family: poppins, sans-serif;
        font-weight: 500;
        text-decoration: underline;
    }
</style>

<main>
    <div class="container-fluid px-4">

        <div class= "d-flex mt-4">
        <h3>Data Pasien</h3>
        <a href="pasien_create.php" class="btn btn-primary ms-auto"><strong>+Tambah Pasien</strong></a>
        </div>

<table class="table mt-5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tgl Lahir</th>
        <th>Gender</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Opsi</th>
    </tr>

    <?php 
    $no = 0;
    foreach ($pasiens as $pasien): 
    ?>


    <tr>

        <td><?php echo $no = $no + 1; ?></td>
        <td><?= $pasien['nama']?></td>
        <td><?= $pasien['tmp_lahir']?></td>
        <td><?= $pasien['tgl_lahir']?></td>
        <td><?= $pasien['gender']?></td>
        <td><?= $pasien['alamat']?></td>
        <td><?= $pasien['email']?></td>
       

        <td>
            <a href="pasien_edit.php?id=<?= $pasien['id']?>" class="btn btn-primary">
            <i  class="fas fa-edit"></i>
            </a>
            <a href="pasien_delete.php?id=<?= $pasien['id']?>" class="btn btn-danger">
            <i  class="fas fa-trash"></i>
            </a>
        </td>

    </tr>



    <?php endforeach; ?>
</table>




    </div>
</main> 



<?php
include_once('bottom.php');
?>