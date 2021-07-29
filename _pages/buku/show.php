<?php
include"_lib/entities/buku.php";
$id = $_GET['id'];
$buku = getByid($id);

?>
<h1>Halaman Detail</h1>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=buku/ubah&id=<?php echo $buku['id']?>" class="btn btn-warning float-right"><i class="fa fa-edit"></i>Edit</a>
        <div class="card-title">
            Detail Buku
        </div>
    </div>
    <div class="card-body">
        <dl>
            <dt>Nama</dt>
            <dl><?php echo $buku['nama']?></dl>    
            <dt>Penerbit</dt>
            <dl><?php echo $buku['penerbit']?></dl> 
            <dt>Cover</dt>
            <dl><img src="<?php echo $buku['cover']?>" alt="Tidak ada" width="500" height="500"></dl> 
        <dl>
    </div>
</div>

