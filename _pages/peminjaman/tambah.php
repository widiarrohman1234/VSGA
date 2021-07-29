<?php
include"_lib/entities/peminjaman.php";
?>
<div class="card card-default">
<div class="card-header">
    <div class="card-title">
        Tambah Data Peminjaman
    </div>
</div>
<div class="card card-body">
<form action="?page=peminjaman/store" method="POST" >
    <div class="form-group">
        <label class="control-label">Nama Anggota</label>
        <select name="id_anggota" class="form-control select2">
        <?php foreach(listAnggota() as $key=>$d) :?>
            <option value="<?php echo $d['id'] ?>"><?php echo $d['nama'] ?></option>
        <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">Nama Buku</label>
        <select name="id_buku" class="form-control select2">
        <?php foreach(listBuku() as $key=>$d) :?>
            <option value="<?php echo $d['id'] ?>"><?php echo $d['nama'] ?></option>
        <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
        <label class="control-label">Tanggal Peminjaman</label>
        <input type="date" name="tanggal_peminjaman" class="form-control">
    </div>

    <div class="form-group">
        <label class="control-label">Tanggal Pengembalian</label>
        <input type="date" name="tanggal_pengembalian" class="form-control">
    </div>

    <br>
    <button type="input" class="btn btn-dark float-right">Simpan</button>
</form>
</div>
</div>