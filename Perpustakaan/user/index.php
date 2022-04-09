<?php include "sidebar.php" ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h3>Data User </h3>
            <a href="create.php" class="btn btn-primary">tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama User</th>
                        <th>Jenis Kelamin</th>
                        <th>No Handphone</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, 'SELECT *FROM user');
                    $no = 1;
                    foreach ($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_user']?></td>
                        <td><?= $data['jk_user']?></td>
                        <td><?= $data['no_telp']?></td>
                        <td><?= $data['alamat_user']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="edit.php?page=user_edit&id_user=<?= $data['id_user']?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?page=user_delete&id_user=<?= $data['id_user']?>"
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