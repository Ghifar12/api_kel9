<?php
include "../connection.php";

$kode_pengajuan	       = $_POST['kode_pengajuan'];
$tanggal   = $_POST['tanggal'];
$npm_peminjam       = $_POST['npm_peminjam'];
$nama_peminjam       = $_POST['nama_peminjam'];
$prodi       = $_POST['prodi'];
$no_handphone       = $_POST['no_handphone'];

$sql = "
        UPDATE pengajuan 
        SET 
        tanggal = '$tanggal'
        ,npm_peminjam = '$npm_peminjam'
        ,nama_peminjam = '$nama_peminjam'
        ,prodi = '$prodi'
        ,no_handphone = '$no_handphone'
        WHERE
        kode_pengajuan = '$kode_pengajuan'
        ";

$result = $connect->query($sql);
echo json_encode(array(
    "success" => $result
));
