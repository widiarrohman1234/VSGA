<?php
include"_lib/entities/peminjaman.php";

?>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=peminjaman/tambah" class="btn btn-primary btn-sm float-right"> <i class="fa fa-plus"></i> Tambah</a>
        <div class="card-title">
        Tabel Peminjaman Buku
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-datatable table-bordered table-hover table-sm">
                <thead>
                    <th width="5%">NO</th>
                    <th width="10%">Aksi</th>
                    <th>Nama Anggota</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Nama Buku</th>
                    <th>Penerbit</th>
                    <th>Cover</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                </thead>
                <tbody>
                <?php foreach(getAll() as $key => $d) :?>
                    <tr>
                        <td><?php echo $key+1 ?></td>
                        <td>
                            <div class="btn btn-group">
                                <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#info">
                                    <i class="fa fa-info"></i>
                                </button>
                                <a href="?id=???&page=anggota/ubah" class="btn btn-warning " > <i class="fa fa-edit"></i></a>
                                <a href="_lib/anggota_destroy.php?id=???" class="btn btn-danger " onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"> <i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td><?php echo $d['nama_anggota']?></td>
                        <td><?php echo $d['email']?></td>
                        <td><?php echo $d['no_handphone']?></td>
                        <td><?php echo $d['nama_buku']?></td>
                        <td><?php echo $d['penerbit']?></td>
                        <td><?php echo $d['cover']?></td>
                        <td><?php echo $d['tanggal_peminjaman']?></td>
                        <td><?php echo $d['tanggal_pengembalian']?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
</div>