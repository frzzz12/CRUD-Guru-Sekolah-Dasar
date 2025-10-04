<?php 
$hub = mysqli_connect("localhost", "root", "Frozzyt123", "sekolah_dasar");

function tambah($data) {
    global $hub;

    $id = htmlspecialchars($_POST["id"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $matkul = htmlspecialchars($_POST["matkul_diajar"]);
    $usia = htmlspecialchars($_POST["usia"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $gaji = htmlspecialchars($_POST["gaji"]);

    $query = "INSERT INTO guru
                VALUES
                ('$id', '$nama', '$matkul', '$usia', '$alamat', '$gaji');
    ";

    mysqli_query($hub, $query);

    return mysqli_affected_rows($hub);
}

function hapus($id) {
    global $hub;
    mysqli_query($hub, "DELETE FROM guru WHERE id=$id;");
    return mysqli_affected_rows($hub);
}

?>