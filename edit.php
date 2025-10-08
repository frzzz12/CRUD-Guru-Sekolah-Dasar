<?php

require 'function.php';


$id = $_GET['id'];

$mhs = query("SELECT * FROM guru WHERE id=$id")[0];


$hub = mysqli_connect("localhost", "root", "Frozzyt123", "sekolah_dasar");

if(isset($_POST["ubah"])) {

    if(ubah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil di ubah!')
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert('data gagal di ubah!')
        document.location.href = 'index.php'
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css" type="text/css">
    <title>Edit Data Guru</title>
</head>
<body>
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="bg-primary text-white p-4 rounded fw-semibold">
            <h3 class="text-center">Edit Data</h3>
            <hr>
            <div class="d-flex justify-content-center">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$mhs['id']?>">
                    <input type="hidden" name="gambarLama" value="<?=$mhs['foto']?>">
                    <div class="d-flex flex-column align-items-center">
                        <div>
                            <div>
                                <label for="" >Nama</label>
                            </div>
                            <div>
                                <input type="text" required name="nama" value="<?=$mhs['nama']?>" class="rounded form-control">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="" >Matkul_diajar</label>
                            </div>
                            <div>
                                <input type="text" required name="matkul_diajar" value="<?=$mhs['matkul_diajar']?>" class="rounded form-control">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="" >Usia</label>
                            </div>
                            <div>
                                <input type="number" required name="usia" value="<?=$mhs['usia']?>" class="rounded form-control">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="" >Alamat</label>
                            </div>
                            <div>
                                <input type="text" required name="alamat" value="<?=$mhs['alamat']?>" class="rounded form-control">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="" >Gaji</label>
                            </div>
                            <div>
                                <input type="number" required name="gaji" value="<?=$mhs['gaji']?>" class="rounded form-control">
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div>
                                <label for="" >Foto</label>
                            </div>
                            <img src="img/<?= $mhs['foto']?>" width="50" height="50">
                            <div class="form-control form-group my-3">
                                <input type="file" name="foto" class="rounded form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-light" name="ubah" type="submit" >Ubah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>