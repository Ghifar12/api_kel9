<?php 
    include "../connection.php";

    $sql = "SELECT * FROM pengembalian";

    $result = $connect->query($sql);
    
    if($result->num_rows > 0){
       $pengembalian = array();
       while($row = $result->fetch_assoc()){
        $pengembalian[] = $row;
       }

       echo json_encode(array(
        "success"=> true,
        "pengembalian"=>$pengembalian,
       ));
    }else{
    echo json_encode(array(
        "success" => false,
    ));
    }
?>

    
