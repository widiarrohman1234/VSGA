<?php
$dbname= "perpustakaan";
$host="localhost" ;
$user="root" ;
$pass= "";

try{
    $conn= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}catch(PDOException $e){
    echo"Kenoksi anda gagal, silahkan cek pada error". $e->getMessage();
}

// echo"hai";