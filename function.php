<?php 
$hub = mysqli_connect("localhost", "root", "", "sekolah_dasar");

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

function query($query) {
        global $hub;
        $result = mysqli_query($hub, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
}

function hapus($id) {
    global $hub;
    mysqli_query($hub, "DELETE FROM guru WHERE id=$id;");
    return mysqli_affected_rows($hub);
}

function ubah($data) {
    global $hub;

    $id = $_GET['id'];
    $nama = htmlspecialchars($data["nama"]);
    $matkul = htmlspecialchars($data["matkul_diajar"]);
    $usia = htmlspecialchars($data["usia"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $gaji = htmlspecialchars($data["gaji"]);

    $query = "UPDATE guru SET 
            nama = '$nama', 
            matkul_diajar = '$matkul', 
            usia = '$usia', 
            alamat = '$alamat', 
            gaji = '$gaji' 
            WHERE id = $id;
    ";

    mysqli_query($hub, $query);

    return mysqli_affected_rows($hub);
}

?>