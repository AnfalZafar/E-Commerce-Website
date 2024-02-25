<?php

include("connection.php");

session_start();

if (!empty($_SESSION["shopping_cart"])) {


    if (isset($_POST["remove"])) {
        foreach ($_SESSION["shopping_cart"] as $value) {
            if($value["a_p_id"] === $_POST["r_id"]){
                $key = $value["name"];
                unset($_SESSION["shopping_cart"][$key]);
                if(empty($_SESSION["shopping_cart"])){
                    unset( $_SESSION["shopping_cart"]);  // remove array
                    break;
                }
            }
        }
        header("location:view_cart.php");

    }
}
