<?php include "sidebar.php" ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h3>Data Buku </h3>
            <a href="create.php" class="btn btn-primary">tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Buku</th>
                        <th>Jenis Buku</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, 'SELECT *FROM buku');
                    $no = 1;
                    foreach ($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_buku']?></td>
                        <td><?= $data['jenis_buku']?></td>
                        <td><?= $data['penerbit']?></td>
                        <td><?= $data['tahun_terbit']?></td>
                        <td><?= $data['stok']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="edit.php?page=buku_edit&id_buku=<?= $data['id_buku']?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?page=buku_delete&id_buku=<?= $data['id_buku']?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</div>