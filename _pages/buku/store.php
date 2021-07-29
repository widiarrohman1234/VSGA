<?php
if($_POST){
    include "_lib/entities/buku.php";

    $file = $_FILES['cover'];
    if($file['size'] > 1000000){
        header("location: ?page=buku/tambah&msg=File Terlalu Besar");
    }else{
        $destination = 'assets/img/buku';
        $extension = pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
        $filename = "cover.".time().".".$_POST['nama'].".".$extension;
        move_uploaded_file($_FILES['cover']['tmp_name'], $destination."/".$filename);

        $param = [
            'nama' =>$_POST['nama'],
            'penerbit' => $_POST['penerbit'],
            'cover' => $destination."/".$filename
        ];
        store($param);
        header("Location: http://localhost/VSGA/index.php?page=buku");
    }

}