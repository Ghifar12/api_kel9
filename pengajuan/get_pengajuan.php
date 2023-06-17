<?php 
    include "../connection.php";

    $sql = "SELECT * FROM pengajuan";

    $result = $connect->query($sql);
    
    if($result->num_rows > 0){
       $pengajuan = array();
       while($row = $result->fetch_assoc()){
        $pengajuan[] = $row;
       }

       echo json_encode(array(
        "success"=> true,
        "pengajuan"=>$pengajuan,
       ));
    }else{
    echo json_encode(array(
        "success" => false,
    ));
    }
?>

    
