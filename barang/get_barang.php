<?php 
    include "../connection.php";

    $sql = "SELECT * FROM barang";

    $result = $connect->query($sql);
    
    if($result->num_rows > 0){
       $barang = array();
       while($row = $result->fetch_assoc()){
        $barang[] = $row;
       }

       echo json_encode(array(
        "success"=> true,
        "barang"=>$barang,
       ));
    }else{
    echo json_encode(array(
        "success" => false,
    ));
    }
?>

    
