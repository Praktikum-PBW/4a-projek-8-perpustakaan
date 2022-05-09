<?php
include "../koneksi.php";

$id_admin=$_GET['id_admin'];
$query=mysqli_query ($koneksi," SELECT * FROM admin WHERE id_admin='$id_admin'");
$r=mysqli_fetch_array($query);
if(isset($_POST['edit'])){
    $nama_admin=$_POST['nama_admin'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $jk=$_POST['jk_admin'];
    $no=$_POST['no_telp'];
    $alamat=$_POST['alamat_admin'];
    $sql=mysqli_query ($koneksi,"UPDATE admin SET id_admin='$id_admin', nama_admin='$nama_admin', username='$username',password='$password', jk_admin='$jk', no_telp='$no', alamat_admin='$alamat' WHERE id_admin='$id_admin'" ) or die($koneksi);
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
<h2>Edit Data Admin</h2>
<div class="col">
    <div class="row mt-5">
        <form class="form-input" method="POST">
            <div class="mb-3">
                <label for="nama_admin" class="form-label">Nama</label>
                <input type="text" name="nama_admin" value="<?php echo $r['nama_admin']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" value="<?php echo $r['username']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" value="<?php echo $r['password']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="jk_admin" class="form-label">Jenis Kelamin</label>
                <input type="text" name="jk_admin" value="<?php echo $r['jk_admin']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telp</label>
                <input type="text" name="no_telp" value="<?php echo $r['no_telp']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="alamat_admin" class="form-label">Alamat</label>
                <input type="text" name="alamat_admin" value="<?php echo $r['alamat_admin']?>" class="form-control" >
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