<?php
include "../koneksi.php";
require "session.php";

$id_pengembalian=$_GET['id_pengembalian'];
$sql=mysqli_query ($koneksi,"DELETE FROM pengembalian WHERE id_pengembalian='$id_pengembalian'")  or die($koneksi);
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