<?php
include"conn.php";

$data[] = $_POST['nama'];
$data[] = $_POST['alamat'];
$data[] = $_POST['no_handphone'];
$data[] = $_POST['email'];
$data[] = $_POST['password'];

$sql = "insert into anggota (nama,alamat,no_handphone,email,password) values(?,?,?,?,?)";
$row = $conn->prepare($sql);
$row->execute($data);

header("Location: http://localhost/VSGA/index.php?page=anggota");