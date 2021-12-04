<?php

include "../config/koneksi.php";

$Id = @$_POST['Id'];

$data = [];

$query = mysqli_query($kon, "DELETE FROM `barang` 
g` WHERE `Id`='". $Id ."'");

if($query){ 
    $status = true;
    $pesan = "reaquest success";
    $data[] = $query;
}else{
    $status = false;
    $pesan = "reaquest failed";
}

$json = [
    "status" => $status,
    "pesan" => $pesan,
    "data" => $data
];

header("content-Type: application/json");
echo json_encode($json);

?>