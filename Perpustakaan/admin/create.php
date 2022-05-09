<?php
require "../koneksi.php";
if(isset($_POST['create'])){
    $nama_admin = $_POST['nama_admin'];
    $username=$_POST['username'];
    $password = $_POST['password'];
    $jk = $_POST['jk_admin'];
    $no = $_POST['no_telp'];
    $alamat = $_POST['alamat_admin'];  
    $sql = mysqli_query($koneksi,"INSERT INTO admin VALUES(null,'$nama_admin','$username','$password','$jk','$no','$alamat')");
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
<h2>Buat Data Admin</h2>
    <form class="class-input" method="post">
    <div class="col">
        <div class="row mt-5">
        <!-- <div class="mb-3">
            <label for="id_admin" class="form-label">Id Admin</label>
            <input type="text" class="form-control" name="id_admin" id="id_admin" placeholder="Id Admin">
        </div> -->
        <div class="mb-3">
            <label for="nama_admin" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_admin" id="nama_admin" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="mb-3">
            <label for="jk_admin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jk_admin" id="jk_admin" required>
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telp</label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" required>
        </div>
        <div class="mb-3">
            <label for="alamat_admin" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat_admin" id="alamat_admin" required>
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

