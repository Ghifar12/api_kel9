<?php
include "../connection.php";

$kode_barang    = $_POST['kode_barang'];
$nama_barang       = $_POST['nama_barang'];
$jumlah   = $_POST['jumlah'];


$sql = "
        UPDATE barang 
        SET 
        nama_barang = '$nama_barang'
        ,jumlah = '$jumlah'
        WHERE
        kode_barang = '$kode_barang'
        ";

$result = $connect->query($sql);
echo json_encode(array(
    "success" => $result
));
