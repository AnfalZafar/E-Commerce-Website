<?php
session_start();

if ($_SERVER["REQUEST_METHOD"]=="POST") {
   if (isset($_POST['btn'])) {
    if ($_SESSION['cart']) {
        $myitems = array_column($_SESSION['cart'],'pro_name');
        if ($_POST["pro_name"] == $myitems) {
            echo "<script>alert('Item Already Added')
            window.location.href='id_product.php';
            </script>";
         
        } 
        else {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('pro_name'=>$_POST['pro_name'],'pro_price'=>$_POST['pro_price'],'pro_image'=>$_POST['pro_image'],'quantity'=>1);
            // print_r($_SESSION['cart']);
            echo "<script>alert('Item Added')
            window.location.href='id_product.php';
            </script>";
        }
    }
    else {
        $_SESSION['cart'][0]=array('pro_name'=>$_POST['pro_name'],'pro_price'=>$_POST['pro_price'], 'pro_image'=>$_POST['pro_image'],'quantity'=>1);
        // print_r($_SESSION['cart']);
        echo "<script>alert('Item Added')
        window.location.href='id_product.php';
        </script>";
    }
   }

if (isset($_POST['remove'])) {
   foreach ($_SESSION['cart'] as $key => $value) {
   if ($value['pro_name'] == $_POST['pro_name']) {
    unset($_SESSION['cart'][$key]);
    $_SESSION['cart']=array_values($_SESSION['cart']);
    echo "<script>alert('Item Removed')
        window.location.href='mycart.php';
        </script>";
   }
   }
}



}


?>