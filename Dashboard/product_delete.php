<?php

include("../connection.php");

$get = $_GET["delete"];
$delete = "DELETE FROM `e_product` WHERE `e_product`.`product_id` = $get";
$run = mysqli_query($connect , $delete);

if($run){
    echo "
    <script>
    alert('Data Deleted');
    </script>
    ";
    header("location:product.php");
}else{
    echo "
    <script>
    alert('Opps Something Wrong');
    </script>
    ";
}

?>