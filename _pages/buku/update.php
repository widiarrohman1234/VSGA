<?php
if($_POST){
    include"_lib/entities/buku.php";
    $param = [
        'id' => $_GET['id'],
        'nama' => $_POST['nama'],
        'penerbit' => $_POST['penerbit']
    ];

    update($param);

    echo"
    <script>
    console.log('Data Berhasil Diubah');
    window.location.href = '?page=buku'
    </script>
    ";
}