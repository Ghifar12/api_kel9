<?php 
    include "../connection.php";

    $kode_pengajuan	       = $_POST['kode_pengajuan'];
    $tanggal   = $_POST['tanggal'];
    $npm_peminjam       = $_POST['npm_peminjam'];
    $nama_peminjam       = $_POST['nama_peminjam'];
    $prodi       = $_POST['prodi'];
    $no_handphone       = $_POST['no_handphone'];
    
    $sql1 = "SELECT * FROM pengajuan WHERE kode_pengajuan = '$kode_pengajuan'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;

    if($check->num_rows > 0){
        $success = false;
        $reason = "data sudah ada";
    }else{
        $sql2 = "
        INSERT INTO pengajuan SET 
            kode_pengajuan = '$kode_pengajuan',
            tanggal = '$tanggal',
            npm_peminjam = '$npm_peminjam',
            nama_peminjam = '$nama_peminjam',
            prodi = '$prodi',
            no_handphone = '$no_handphone'
        ";
        
        $result = $connect->query($sql2);

        if(!$result){
            $success = false;
            $reason = "Gagal add data";
        }
    }

    echo json_encode(array(
        "success" => $success,
        "reason" =>$reason,
    ));
