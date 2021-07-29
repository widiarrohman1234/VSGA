<?php
include"conn.php";

$id = $_POST['id'];

$data[] = $_POST['nama'];
$data[] = $_POST['alamat'];
$data[] = $_POST['no_handphone'];
$data[] = $_POST['email'];
$data[] = $_POST['password'];

$sql = "UPDATE anggota SET nama=?, alamat=?, no_handphone=?, email=?, password=? WHERE anggota.id=$id";
$row = $conn->prepare($sql);
$row->execute($data);

header("location:http://localhost/VSGA/index.php?page=anggota");