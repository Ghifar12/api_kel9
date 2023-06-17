<?php
include "../connection.php";

    $kode_pengembalian       = $_POST['kode_pengembalian'];
    $kode_pengajuan   = $_POST['kode_pengajuan'];
    $tanggal_kembali       = $_POST['tanggal_kembali'];


$sql = "
        UPDATE pengembalian 
        SET 
        kode_pengajuan = '$kode_pengajuan'
        ,tanggal_kembali = '$tanggal_kembali'
        WHERE
        kode_pengembalian = '$kode_pengembalian'
        ";

$result = $connect->query($sql);
echo json_encode(array(
    "success" => $result
));
