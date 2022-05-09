<?php
require "../koneksi.php";
if(isset($_POST['create'])){
    $nama_buku = $_POST['nama_buku'];
    $jenis_buku=$_POST['jenis_buku'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];
    $sql = mysqli_query($koneksi,"INSERT INTO buku VALUES(null,'$nama_buku','$jenis_buku','$penerbit','$tahun','$stok')");
        if ($sql) {
            echo "<script>alert('Data Berhasil dimasukan!');
            window.location.replace('index.php')</script>";
        } else {
            echo "<script>alert('Data Gagal dimasukan!');
            window.location.replace('create.php')</script>";
        }
}

?>
<?php include "sidebar.php" ?>
<h2>Buat Data Buku</h2>
    <form class="class-input" method="post">
    <div class="col">
        <div class="row mt-5">
        <!-- <div class="mb-3">
            <label for="id_admin" class="form-label">Id Admin</label>
            <input type="text" class="form-control" name="id_admin" id="id_admin" placeholder="Id Admin">
        </div> -->
        <div class="mb-3">
            <label for="nama_buku" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_buku" id="nama_buku" required>
        </div>
        <div class="mb-3">
            <label for="jenis_buku" class="form-label">Jenis Buku</label>
            <input type="text" class="form-control" name="jenis_buku" id="jenis_buku" required>
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" required>
        </div>
        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok Buku</label>
            <input type="text" class="form-control" name="stok" id="stok" required>
        </div>
    </div>
        <a href="index.php" button type="button" class="btn btn-primary"><i class="bi bi-chevron-left"></i> Back</a>  
        <button type="submit" class="btn btn-success" name="create" onclick="return confirm('Are You Sure?')"><i class="bi bi-file-earmark-plus"></i> Create</button>
    </div>
    </form>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

