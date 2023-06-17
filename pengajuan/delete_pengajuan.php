<?php
include "../connection.php";

$kode_pengajuan = $_POST['kode_pengajuan'];

$sql = "
        DELETE FROM pengajuan 
        WHERE
        kode_pengajuan = '$kode_pengajuan'
        ";
$result = $connect->query($sql);

echo json_encode(array(
    "success" => $result
));

?>