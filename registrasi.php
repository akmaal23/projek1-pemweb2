<?php

$prodi = [
    'SI' => 'Sistem Informasi',
    'TI' => 'Teknik Informatika',
    'BD' => 'Bisnis Digital'
];
$skills = [
    'HTML' => 10,
    'CSS' => 10,
    'Javascript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50
];
$domisili = ['Jakarta', 'Depok', 'Bogor', 'Tangerang', 'Bekasi', 'Lainnya'];

include_once("top.php");
include_once("menu.php");
?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Registrasi</h1>
<fieldset class="mx-5 border p-2">
        <legend>Form registrasi </legend>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form action="proses_registrasi.php" method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki" required="required">
                        <label for="jk_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select" required="required">
                        <?php foreach ($prodi as $key => $value) : ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
          
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select" required="required">
                        <?php foreach ($domisili as $value) : ?>
                            <option value="<?php echo $value ?>"><?php echo $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </fieldset>

    </div>
</main>

<?php
include_once("bottom.php");
?>