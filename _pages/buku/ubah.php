<?php
include"_lib/entities/buku.php";
$id = $_GET['id'];
$buku = getByid($id);
?>
<form action="?page=buku/update&id=<?php echo $buku['id']?>" method="POST">
    <input type="hidden" name="id" value="">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $buku['nama']?>" class="form-control" >
    </div>
    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" value="<?php echo $buku['penerbit']?>" class="form-control" >
    </div>
    <button type="input" class="btn btn-dark">Ubah</button>
</form>