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
    <div>
        <div>
            <form action="" method="POST">
                <div>
                    <div>
                        <div>
                            <label for="" >ID</label>
                        </div>
                        <div>
                            <input type="text" required name="id">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="" >NAMA</label>
                        </div>
                        <div>
                            <input type="text" required name="nama">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="" >MATKUL_DIAJAR</label>
                        </div>
                        <div>
                            <input type="text" required name="matkul_diajar">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="" >USIA</label>
                        </div>
                        <div>
                            <input type="number" required name="usia">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="" >ALAMAT</label>
                        </div>
                        <div>
                            <input type="text" required name="alamat">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="" >GAJI</label>
                        </div>
                        <div>
                            <input type="number" required name="gaji">
                        </div>
                    </div>
                    <button class="btn btn-primary" name="tambah" type="submit" >Tambah</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>