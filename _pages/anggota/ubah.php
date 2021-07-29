<?php
include"_lib\conn.php";

$id=$_GET['id'];
$query = "select * from anggota where id=? ";
$data = $conn->prepare($query);
$data->execute(array($id));
$anggota = $data->fetch();
// var_dump($anggota);
?>

<form action="_lib/anggota_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $anggota['id']?>">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $anggota['nama']?>" class="form-control" >
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" value="<?php echo $anggota['alamat']?>" class="form-control" >
    </div>
    <div class="form-group">
        <label>No Handphone</label>
        <input type="text" name="no_handphone" value="<?php echo $anggota['no_handphone']?>"" class="form-control" >
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $anggota['email']?>" class="form-control" >
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" >
    </div>
    <br>
    <button type="input" class="btn btn-dark">Simpan</button>
</form>