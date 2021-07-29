<?php
include"_lib\conn.php";

function getAll(){
    global $conn;
    $query = "SELECT peminjaman.*, anggota.nama as nama_anggota, anggota.alamat, anggota.no_handphone, anggota.email, buku.nama as nama_buku, buku.penerbit, buku.cover FROM `peminjaman` 
    join anggota on peminjaman.id_anggota=anggota.id
    join buku on peminjaman.id_buku=buku.id";

    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function listBuku(){
    global $conn;
    $query = "SELECT * from buku";

    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function listAnggota(){
    global $conn;
    $query = "SELECT * from anggota";

    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function store($param){
    global $conn;
    $query = "insert into peminjaman (id_anggota, id_buku, tanggal_peminjaman, tanggal_pengembalian)
            values (:id_anggota, :id_buku, :tanggal_peminjaman, :tanggal_pengembalian)";

    $statement = $conn->prepare($query);
    $statement->execute($param);
}