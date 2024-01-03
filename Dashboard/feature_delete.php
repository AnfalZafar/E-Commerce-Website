<?php

include("../connection.php");

$get = $_GET["delete"];
$delete = "DELETE FROM `feature_product` WHERE `feature_product`.`fea_id` = $get";
$run = mysqli_query($connect , $delete);
if($run){
    echo "<script>alert('Data Deleted Successfully')</script>";
    header("location:feature.php");
}else{
    echo "<script>alert('Network Error')</script>";

}

?>