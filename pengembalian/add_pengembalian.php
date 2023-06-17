<?php 
    include "../connection.php";

    $kode_pengembalian       = $_POST['kode_pengembalian'];
    $kode_pengajuan   = $_POST['kode_pengajuan'];
    $tanggal_kembali       = $_POST['tanggal_kembali'];
    
    $sql1 = "SELECT * FROM pengembalian WHERE kode_pengembalian = '$kode_pengembalian'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;

    if($check->num_rows > 0){
        $success = false;
        $reason = "data pengembalian sudah ada";
    }else{
        $sql2 = "
        INSERT INTO pengembalian SET 
            kode_pengembalian = '$kode_pengembalian',
            kode_pengajuan = '$kode_pengajuan',
            tanggal_kembali = '$tanggal_kembali'
        ";
        
        $result = $connect->query($sql2);

        if(!$result){
            $success = false;
            $reason = "Gagal add data pengembalian";
        }
    }

    echo json_encode(array(
        "success" => $success,
        "reason" =>$reason,
    ));
