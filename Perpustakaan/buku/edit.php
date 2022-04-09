<?php
include "../koneksi.php";

$id_buku=$_GET['id_buku'];
$query=mysqli_query ($koneksi," SELECT * FROM buku WHERE id_buku='$id_buku'");
$r=mysqli_fetch_array($query);
if(isset($_POST['edit'])){
    $nama_buku = $_POST['nama_buku'];
    $jenis_buku=$_POST['jenis_buku'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];
    $sql=mysqli_query ($koneksi,"UPDATE buku SET id_buku='$id_buku', nama_buku='$nama_buku', jenis_buku='$jenis_buku',penerbit='$penerbit', tahun_terbit='$tahun', stok='$stok' WHERE id_buku='$id_buku'" ) or die($koneksi);
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
                <label for="nama_buku" class="form-label">Nama Buku</label>
                <input type="text" name="nama_buku" value="<?php echo $r['nama_buku']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="jenis_buku" class="form-label">Jenis Buku</label>
                <input type="text" name="jenis_buku" value="<?php echo $r['jenis_buku']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" value="<?php echo $r['penerbit']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" value="<?php echo $r['tahun_terbit']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" name="stok" value="<?php echo $r['stok']?>" class="form-control" >
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