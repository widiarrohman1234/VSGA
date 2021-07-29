<?php
include"_lib/entities/buku.php";
?>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=buku/tambah" class="btn btn-primary btn-sm float-right"> <i class="fa fa-plus"></i> Tambah</a>
        <div class="card-title">
        Tabel Buku
        </div>
    </div>
    <div class="card-body">
        <table class="table table-datatable table-bordered table-hover table-sm">
            <thead>
                <th width="5%">NO</th>
                <th width="10%">Aksi</th>
                <th>Nama</th>
                <th>Penerbit</th>
            </thead>
            <tbody>
                <?php foreach(getAll() as $key => $buku) :?>
                <tr>
                    <td><?php echo $key+1 ?></td>
                    <td>
                        <div class="btn btn-group">
                            <a href="?page=buku/show&id=<?php echo $buku['id']?>" class="btn btn-dark"><i class="fa fa-info"></i></a>
                            <a href="?page=buku/ubah&id=<?php echo $buku['id']?>" class="btn btn-warning " > <i class="fa fa-edit"></i></a>
                            <a href="?page=buku/hapus&id=<?php echo $buku['id']?>" class="btn btn-danger " onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"> <i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td><?php echo $buku['nama']?></td>
                    <td><?php echo $buku['penerbit']?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>

