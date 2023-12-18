<?php

include("../connection.php");

$get = $_GET["delete"];
$delete = "DELETE FROM `about_table` WHERE `about_table`.`about_id` = $get";
$run = mysqli_query($connect, $delete);

if ($run) {
    echo "
    <script>
    alert('Delete Successfulley');
    </script>
    ";
    header("location:about.php");
}
