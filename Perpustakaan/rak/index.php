<?php include "sidebar.php" ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h3>Data Rak </h3>
            <a href="create.php" class="btn btn-primary">tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>ID Rak</th>
                        <th>Nama Rak</th>
                        <th>Lokasi Rak</th>
                        <th>ID Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, 'SELECT *FROM rak');
                    $no = 1;
                    foreach ($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_rak']?></td>
                        <td><?= $data['lokasi_rak']?></td>
                        <td><?= $data['id_buku']?></td>

                        <td>
                            <div class="btn-group">
                                <a href="edit.php?page=rak_edit&id_rak=<?= $data['id_rak']?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?page=rak_delete&id_rak=<?= $data['id_rak']?>"
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