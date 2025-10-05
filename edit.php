<?php

require 'function.php';


$id = $_GET['id'];

$mhs = query("SELECT * FROM guru WHERE id=$id")[0];


$hub = mysqli_connect("localhost", "root", "", "sekolah_dasar");

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
    <div>
        <div>
            <form action="" method="POST">
                <input type="hidden" value="<?=$mhs['id']?>">
                <div>
                    <div>
                        <div>
                            <label for="" >NAMA</label>
                        </div>
                        <div>
                            <input type="text" required name="nama" value="<?=$mhs['nama']?>">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="" >MATKUL_DIAJAR</label>
                        </div>
                        <div>
                            <input type="text" required name="matkul_diajar" value="<?=$mhs['matkul_diajar']?>">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="" >USIA</label>
                        </div>
                        <div>
                            <input type="number" required name="usia" value="<?=$mhs['usia']?>">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="" >ALAMAT</label>
                        </div>
                        <div>
                            <input type="text" required name="alamat" value="<?=$mhs['alamat']?>">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="" >GAJI</label>
                        </div>
                        <div>
                            <input type="number" required name="gaji" value="<?=$mhs['gaji']?>">
                        </div>
                    </div>
                    <button class="btn btn-primary" name="ubah" type="submit" >Ubah</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>