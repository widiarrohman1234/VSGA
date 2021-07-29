<?php
include"_lib\conn.php";

function getAll(){
    global $conn;
    $query = "select * from buku";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
    
}

function getByid($id){
    global $conn;
    $param=[
        'id'=>$id
    ];
    $query = "select * from buku where id=:id";
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetch();
}

function store($param){
    global $conn;
    $query = "insert into buku (nama, penerbit, cover) 
            VALUES (:nama,:penerbit,:cover)";
    $statement = $conn->prepare($query);
    $statement->execute($param);

}

function update($param){
    global $conn;
    $query = "update buku set nama=:nama, penerbit=:penerbit where id=:id";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function delete($param){
    global $conn;
    $query = "delete from buku where id=:id";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}