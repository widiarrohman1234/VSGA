<?php
include"conn.php";

$id = $_GET['id'];

$sql = "DELETE FROM anggota WHERE id=?";
$row = $conn->prepare($sql);
$row->execute(array($id));

// echo '<script>alert("Berhasil Hapus Data");window.location.href="http://localhost/VSGA/index.php?page=anggota"</script>';
header("Location: http://localhost/VSGA/index.php?page=anggota");