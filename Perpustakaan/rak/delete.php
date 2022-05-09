<?php
include "../koneksi.php";
require "session.php";

$id_rak=$_GET['id_rak'];
$sql=mysqli_query ($koneksi,"DELETE FROM rak WHERE id_rak='$id_rak'")  or die($koneksi);
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