<?php
include "../connection.php";

$kode_pengembalian = $_POST['kode_pengembalian'];

$sql = "
        DELETE FROM pengembalian 
        WHERE
        kode_pengembalian = '$kode_pengembalian'
        ";
$result = $connect->query($sql);

echo json_encode(array(
    "success" => $result
));

?>