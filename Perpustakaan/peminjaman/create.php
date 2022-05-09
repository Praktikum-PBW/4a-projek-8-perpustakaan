<?php
require "../koneksi.php";
if(isset($_POST['create'])){
    $id_peminjaman = $_POST['id_peminjaman'];
    $pinjam =$_POST['tgl_pinjam'];
    $kembali = $_POST['tgl_kembali'];
    $buku = $_POST['id_buku'];
    $user = $_POST['id_user'];
    $admin = $_POST['id_admin'];  
    $sql = mysqli_query($koneksi,"INSERT INTO peminjaman VALUES(null,'$pinjam','$kembali','$buku','$user','$admin')");
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
<h2>Buat Data Peminjaman</h2>
    <form class="class-input" method="post">
    <div class="col">
        <div class="row mt-5">
        <!-- <div class="mb-3">
            <label for="id_admin" class="form-label">Id Admin</label>
            <input type="text" class="form-control" name="id_admin" id="id_admin" placeholder="Id Admin">
        </div> -->
        <div class="mb-3">
            <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
            <input type="text" class="form-control" name="tgl_pinjam" id="tgl_pinjam" required>
        </div>
        <div class="mb-3">
            <label for="tgl_kembali" class="form-label">Tanggal Pengembalian</label>
            <input type="text" class="form-control" name="tgl_kembali" id="tgl_kembali" required>
        </div>
        <div class="mb-3">
            <label for="id_buku" class="form-label">ID Buku</label>
            <input type="text" class="form-control" name="id_buku" id="id_buku" required>
        </div>
        <div class="mb-3">
            <label for="id_user" class="form-label">ID User</label>
            <input type="text" class="form-control" name="id_user" id="id_user" required>
        </div>
        <div class="mb-3">
            <label for="id_admin" class="form-label">ID Admin</label>
            <input type="text" class="form-control" name="id_admin" id="id_admin" required>
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

