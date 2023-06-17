<?php 
    include "../connection.php";

    $kode_barang       = $_POST['kode_barang'];
    $nama_barang   = $_POST['nama_barang'];
    $jumlah       = $_POST['jumlah'];
    
    $sql1 = "SELECT * FROM barang WHERE kode_barang = '$kode_barang'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;

    if($check->num_rows > 0){
        $success = false;
        $reason = "barang sudah ada";
    }else{
        $sql2 = "
        INSERT INTO barang SET 
            kode_barang = '$kode_barang',
            nama_barang = '$nama_barang',
            jumlah = '$jumlah'
        ";
        
        $result = $connect->query($sql2);

        if(!$result){
            $success = false;
            $reason = "Gagal add barang";
        }
    }

    echo json_encode(array(
        "success" => $success,
        "reason" =>$reason,
    ));
