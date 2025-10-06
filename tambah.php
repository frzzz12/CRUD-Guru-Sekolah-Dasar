<?php

require 'function.php';

$hub = mysqli_connect("localhost", "root", "Frozzyt123", "sekolah_dasar");

if(isset($_POST["tambah"])) {

    if(tambah($_POST > 0 )) {
        echo "<script>
        alert('data berhasil ditambahkan!')
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!')
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
    <title>Tambah Data Guru</title>
</head>
<body>
    <div class="d-flex  justify-content-center align-items-center min-vh-100" style="background-color: #EAEAEA">
        <div class="p-4 bg-primary text-white rounded fw-medium w-25 d-flex justify-content-center">
            <form action="" method="POST">
                <h3 class="text-center mb-3">Tambah Data</h3>
                <div>
                    <div class="mt-2">
                        <div>
                            <label for="" class="fs-6">Id</label>
                        </div>
                        <div>
                            <input type="text" required name="id" class="rounded border-0" autocomplete="off" autofocus>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label for="" >Nama</label>
                        </div>
                        <div>
                            <input type="text" required name="nama" class="rounded border-0" autocomplete="off">
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label for="" >Mata Kuliah</label>
                        </div>
                        <div>
                            <input type="text" required name="matkul_diajar" class="rounded border-0" autocomplete="off">
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label for="" >Usia</label>
                        </div>
                        <div>
                            <input type="number" required name="usia" class="rounded border-0" autocomplete="off">
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label for="" >Alamat</label>
                        </div>
                        <div>
                            <input type="text" required name="alamat" class="rounded border-0" autocomplete="off">
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label for="" >Gaji</label>
                        </div>
                        <div>
                            <input type="number" required name="gaji" class="rounded border-0" autocomplete="off">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn btn-light fw-medium" name="tambah" type="submit" >Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>