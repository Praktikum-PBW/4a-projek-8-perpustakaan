<?php
include "../koneksi.php";

$id_user=$_GET['id_user'];
$query=mysqli_query ($koneksi," SELECT * FROM user WHERE id_user='$id_user'");
$r=mysqli_fetch_array($query);
if(isset($_POST['edit'])){
    $nama_user=$_POST['nama_user'];
    $jk=$_POST['jk_user'];
    $no=$_POST['no_telp'];
    $alamat=$_POST['alamat_user'];
    $sql=mysqli_query ($koneksi,"UPDATE user SET id_user='$id_user', nama_user='$nama_admin', jk_user='$jk', no_telp='$no', alamat_user='$alamat' WHERE id_user='$id_user'" ) or die($koneksi);
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
<h2>Edit Data User</h2>
<div class="col">
    <div class="row mt-5">
        <form class="form-input" method="POST">
            <div class="mb-3">
                <label for="nama_user" class="form-label">Nama User</label>
                <input type="text" name="nama_user" value="<?php echo $r['nama_user']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="jk_user" class="form-label">Jenis Kelamin</label>
                <input type="text" name="jk_user" value="<?php echo $r['jk_user']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telp</label>
                <input type="text" name="no_telp" value="<?php echo $r['no_telp']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="alamat_user" class="form-label">Alamat</label>
                <input type="text" name="alamat_user" value="<?php echo $r['alamat_user']?>" class="form-control" >
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