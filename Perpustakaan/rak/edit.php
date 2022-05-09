<?php
include "../koneksi.php";

$id_rak=$_GET['id_rak'];
$id_buku=$_GET['id_buku'];
$query=mysqli_query ($koneksi," SELECT * FROM rak WHERE id_rak='$id_rak'");
$r=mysqli_fetch_array($query);
if(isset($_POST['edit'])){
    $nama_rak = $_POST['nama_rak'];
    $lokasi = $_POST['lokasi_rak'];
    $id_buku = $_POST['id_buku'];
    $sql=mysqli_query ($koneksi,"UPDATE rak SET id_rak='$id_rak', nama_rak='$nama_rak', lokasi_rak='$lokasi', id_buku='$id_buku' WHERE id_buku='$id_buku'" ) or die($koneksi);
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
<h2>Edit Data Rak</h2>
<div class="col">
    <div class="row mt-5">
        <form class="form-input" method="POST">
            <div class="mb-3">
                <label for="nama_rak" class="form-label">Nama Rak</label>
                <input type="text" name="nama_rak" value="<?php echo $r['nama_rak']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="lokasi_rak" class="form-label">Lokasi Rak</label>
                <input type="text" name="lokasi_rak" value="<?php echo $r['lokasi_rak']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="id_buku" class="form-label">ID Buku</label>
                <input type="text" name="id_buku" value="<?php echo $r['id_buku']?>" class="form-control" >
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