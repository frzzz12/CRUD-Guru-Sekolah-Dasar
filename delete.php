<?php 

require 'function.php';

$id = $_GET['id'];

if(hapus($id) > 0) {
    echo "
    <script>
    alert('ingin menghapus data?');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Gagal menghapus data');
    document.location.href = 'index.php';
    </script>
    ";
}

?>