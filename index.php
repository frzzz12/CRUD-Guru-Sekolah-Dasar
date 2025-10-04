<?php 
    $hub = mysqli_connect("localhost", "root", "Frozzyt123", "sekolah_dasar");

    $query = mysqli_query($hub, "SELECT * FROM guru");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css" type="text/css">
    <title>Dashboard</title>
</head>
<body>
    <div class="m-3">
        <div>
            <div>
                <button class="btn btn-primary"><a href="tambah.php" class="text-white text-decoration-none">Tambah data</a></button>
            </div>
            <div>
                <?php 
                echo "<table class='table my-2 rounded table-primary table-hover table-striped-columns border-2'>";
                 echo "<tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Matkul_diajar</th>
                        <th>Usia</th>
                        <th>Alamat</th>
                        <th>Gaji</th>
                        <th>Aksi</th>
                    </tr>";
                    while($row = mysqli_fetch_assoc($query)) {
                        echo "<tr>".
                            "<td>".$row["id"]."</td>".
                            "<td>".$row["nama"]."</td>".
                            "<td>".$row["matkul_diajar"]."</td>".
                            "<td>".$row["usia"]."</td>".
                            "<td>".$row["alamat"]."</td>".
                            "<td>".$row["gaji"]."</td>".
                            "<td class='text-primary'>"."<a href='tambah.php' class='text-decoration-none'>Edit</a>". "<a class='text-decoration-none'> | </a>" ."<a href=delete.php?id=". $row['id'] ." class='hover text-decoration-none'>Delete</a>"."</td>".
                        "</tr>";
                    }
                echo '</table>'
                ?>
            </div>
        </div>
    </div>
</body>
</html>