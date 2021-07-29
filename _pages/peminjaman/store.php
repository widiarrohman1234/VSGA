<?php

if($_POST){
    include"_lib/entities/peminjaman.php";

    $param = [
        'id_anggota' => $_POST['id_anggota'],
        'id_buku' => $_POST['id_buku'],
        'tanggal_peminjaman' => $_POST['tanggal_peminjaman'],
        'tanggal_pengembalian' => $_POST['tanggal_pengembalian']
    ];

    store($param);

    header("location:?page=peminjaman");

}