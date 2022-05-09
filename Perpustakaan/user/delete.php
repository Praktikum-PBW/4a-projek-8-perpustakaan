<?php
include "../koneksi.php";
require "session.php";

$id_user=$_GET['id_user'];
$sql=mysqli_query ($koneksi,"DELETE FROM user WHERE id_user='$id_user'")  or die($koneksi);
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