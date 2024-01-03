<?php

include("../connection.php");

$get = $_GET["delete"];
$delete = "DELETE FROM `sales_table` WHERE `sales_table`.`sales_id` = $get";
$run = mysqli_query($connect , $delete);

if($run){
    echo "
    <script>
    alert('Data Deleted');
    </script>
    ";
    header("location:sale.php");
}else{
    echo "
    <script>
    alert('Opps Something Wrong');
    </script>
    ";
}

?>