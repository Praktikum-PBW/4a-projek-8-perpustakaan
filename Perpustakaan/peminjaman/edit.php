<?php
include "../koneksi.php";

$id_peminjaman=$_GET['id_peminjaman'];
$query=mysqli_query ($koneksi," SELECT * FROM peminjaman WHERE id_peminjaman='$id_peminjaman'");
$r=mysqli_fetch_array($query);
if(isset($_POST['edit'])){
    $id_peminjaman = $_POST['id_peminjaman'];
    $pinjam =$_POST['tgl_pinjam'];
    $kembali = $_POST['tgl_kembali'];
    $buku = $_POST['id_buku'];
    $user = $_POST['id_user'];
    $admin = $_POST['id_admin'];
    $sql=mysqli_query ($koneksi,"UPDATE peminjaman SET id_peminjaman='$id_peminjaman', tgl_pinjam='$pinjam', tgl_kembali='$kembali', id_buku='$buku', id_user='$user', id_admin='$admin' WHERE id_peminjaman='$id_peminjaman'" ) or die($koneksi);
    if ($sql){
        echo"
            <script> 
            alert('Data Berhasil diedit!');
            document.location.href='index.php';
            </script>
        ";
    } else{
        echo"
        <script> 
        alert('Data Gagal diedit!');
        document.location.href='index.php';
        </script>
    "; 
    }
}
?>
<?php include "sidebar.php" ?>
<h2>Data Peminjaman</h2>
<div class="col">
    <div class="row mt-5">
        <form class="form-input" method="POST">
            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
                <input type="text" name="tgl_pinjam" value="<?php echo $r['tgl_pinjam']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                <input type="text" name="tgl_kembali" value="<?php echo $r['tgl_kembali']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="id_buku" class="form-label">ID Buku</label>
                <input type="text" name="id_buku" value="<?php echo $r['id_buku']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="id_user" class="form-label">ID User</label>
                <input type="text" name="id_user" value="<?php echo $r['id_user']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="id_admin" class="form-label">ID Admin</label>
                <input type="text" name="id_admin" value="<?php echo $r['id_admin']?>" class="form-control" >
            </div>
            <a href="index.php" button type="button" class="btn btn-primary"><i class="bi bi-chevron-left"></i> Kembali</a>  
            <button type="submit" class="btn btn-success" name="edit" onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-file-earmark-plus"></i> Simpan</button>    
        </form>                                     
    </div>
        
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>