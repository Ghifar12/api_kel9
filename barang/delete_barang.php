<?php
include "../connection.php";

$kode_barang = $_POST['kode_barang'];

$sql = "
        DELETE FROM barang 
        WHERE
        kode_barang = '$kode_barang'
        ";
$result = $connect->query($sql);

echo json_encode(array(
    "success" => $result
));

?>