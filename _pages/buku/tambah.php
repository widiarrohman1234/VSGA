<div class="card card-default">
<div class="card-header">
    <div class="card-title">
        Tambah Data Buku
    </div>
</div>
<div class="card card-body">
<form action="?page=buku/store" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label">Nama</label>
        <input type="text" name="nama" class="form-control" >
    </div>
    <div class="form-group">
        <label class="control-label">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" >
    </div>
    <div class="form-group">
        <label class="control-label">Cover</label>
        <input type="file" name="cover" class="form-control" >
    </div>
    <br>
    <button type="input" class="btn btn-dark float-right">Simpan</button>
</form>
</div>
</div>