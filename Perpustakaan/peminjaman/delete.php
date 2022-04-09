<?php
include "../koneksi.php";
require "session.php";

$id_peminjaman=$_GET['id_peminjaman'];
$sql=mysqli_query ($koneksi,"DELETE FROM peminjaman WHERE id_peminjaman='$id_peminjaman'")  or die($koneksi);
if ($sql){
    echo"
        <script> 
        alert('Data Berhasil dihapus!');
        document.location.href='index.php';
        </script>
    ";
} else{
    echo"
    <script> 
    alert('Data Gagal dihapus!');
    document.location.href='index.php';
    </script>
"; 
}

?>