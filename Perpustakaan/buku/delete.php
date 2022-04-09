<?php
include "../koneksi.php";
require "session.php";

$id_buku=$_GET['id_buku'];
$sql=mysqli_query ($koneksi,"DELETE FROM buku WHERE id_buku='$id_buku'")  or die($koneksi);
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