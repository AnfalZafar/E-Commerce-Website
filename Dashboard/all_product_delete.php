<?php

include("../connection.php");

$get = $_GET["delete"];
$delete = "DELETE FROM `all_products` WHERE `all_products`.`a_p_id` = $get";
$run = mysqli_query($connect , $delete);

if($run){
    echo "
    <script>
    alert('Data Deleted');
    </script>
    ";
    header("location:all_product.php");
}else{
    echo "
    <script>
    alert('Opps Something Wrong');
    </script>
    ";
}

?>