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

    $foto = upload();

    if(!$foto) {
        return false;
    };

    $query = "INSERT INTO guru
                VALUES
                ('$id', '$nama', '$matkul', '$usia', '$alamat', '$gaji', '$foto');
    ";

    mysqli_query($hub, $query);

    return mysqli_affected_rows($hub);
}



function upload() {
    $namaFile = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $size = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];

    if($error === 4) {
        echo "<script>
            alert('silahkan pilih gambar dulu');
            </script>";
        return false;
    };

    $ekstensiGambar = ['jpg', 'jpeg', 'png'];
    $eksgambar = explode('.', $namaFile);
    $eksgambar = strtolower(end($eksgambar));
    if(!in_array($eksgambar, $ekstensiGambar)) {
        echo "<script>
            alert('yang kamu upload bukan gambar');
            </script>";
        return false;
    };

    if($size > 1000000) {
        echo "<script>
            alert('ukuran foto terlalu besar');
            </script>";
        return false;
    }

    $namafileBaru = uniqid();
    $namafileBaru .= '.';
    $namafileBaru .= $eksgambar;

    move_uploaded_file($tmp, 'img/' . $namafileBaru);

    return $namafileBaru;


};


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
    $fotoLama = htmlspecialchars($data["gambarLama"]);



    if( $_FILES['foto']['error'] === 4) {
        $foto = $fotoLama;
    } else {
        $foto = upload();
    };



    $query = "UPDATE guru SET 
            nama = '$nama', 
            matkul_diajar = '$matkul', 
            usia = '$usia', 
            alamat = '$alamat', 
            gaji = '$gaji',
            foto = '$foto' 
            WHERE id = $id;
    ";

    mysqli_query($hub, $query);

    return mysqli_affected_rows($hub);
}


function cari($search) {
    $kru = "SELECT * FROM guru 
    WHERE
    nama LIKE '%$search%' OR 
    matkul_diajar LIKE '%$search%' OR
    usia LIKE '%$search%' OR 
    alamat LIKE '%$search%' OR
    gaji LIKE '%$search%' 
    ";
    return query($kru);
}

?>