<?php

function getAll(){
    global $conn;
    $query="select * from anggota";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function getByid($id){
    $query="select * from anggota where id=:id";
    $statement = $conn->prepare();
    $statement->execute($id);
    return $statement->fecthAll();

}