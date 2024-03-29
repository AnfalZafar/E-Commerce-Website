<?php

use function PHPSTORM_META\elementType;

include("connection.php");
session_start(); 

if(isset($_POST["add_to"])){
$id = $_POST["p_id"];
$select = "SELECT * FROM `all_products` WHERE `a_p_id` = $id";
$query = mysqli_query($connect , $select);
$fetch = mysqli_fetch_array($query);
$id = $fetch["a_p_id"];
$name = $fetch["a_p_name"];
$price = $fetch['a_p_price'];
$img = $fetch["a_p_img"];


$cartArray = array(
    $name => array(
    "a_p_id" => $id,
    "name" => $name,
    "price" => $price,
    "quantity"=> 1,
    "img" => $img,
    )
    );

    if(empty($_SESSION["shopping_cart"])){
        $_SESSION["shopping_cart"] = $cartArray;
	echo "<script>alert('Product is added to your cart!')</script>";

    }else{
        $arrey_key = array_keys($_SESSION["shopping_cart"]);
        if (in_array($name, $arrey_key)) { // if in shoping cart this name is exist
            foreach( $_SESSION['shopping_cart'] as &$value) {
        if($value["a_p_id"] === $_POST["p_id"]){
            $value["quantity"] +=1 ;
            echo "<script>alert('Quanity of this product in your cart is".$value['quantity']."')</script>";
                break; // Stop the loop after we've found the product
        }else if($value["a_p_id"] !=  $_POST["p_id"]){
            $value["quantity"] += 1;
            echo("<script>alert('Done')</script>");
        }// If
    }


}else{
    $_SESSION["shopping_cart"] = array_merge( $_SESSION["shopping_cart"], $cartArray);
	echo "<script>alert('Another Product is added to your cart!')</script>";
    
}
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/0962378758.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="header">

        <div class="head">
            <!-- holl sell div  -->

            <div class="sell">
                <img src="img/sell_section.PNG" alt="">
            </div>

            <!-- account div -->

            <div class="account">
                <div class="account_text">
                    <p>The Holley day sesstion</p>
                </div>
                <nav class="account_nav">
                    <ul class="account_ul" id="account">
                        <li>
                            <p>My Account</p>
                            <i class="fa-solid fa-caret-down"></i>
                        </li>
                    </ul>
                </nav>
                <div class="nav_drop" id="nav_drop">
                    <ul class="drop_ul">
                        <li><a href="">Account</a></li>
                        <li><a href="">Sign Out</a></li>

                    </ul>
                </div>
            </div>

            <!-- card -->

            <div class="cart">

                <div class="cart_logo">
                    <a href="index.php"><img src="img/logo-removebg-preview (2).png" alt=""></a>
                </div>

                <div class="nav_search">

                    <div class="nav_search_container">
                        <input type="search" placeholder="Search Your Item" id="search_input">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>

                    <div class="search_result" id="search_result">
                        <div class="search_croos">
                            <i class="fa-solid fa-xmark" id="search_croos"></i>
                        </div>

                        <div class="search_result_form">

                            <div class="search_result_text">

                                <div class="search_img_name">
                                    <img src="img/cofa1.jpg" alt="">
                                    <div class="search_result_text_name">
                                        <h3>Cofa</h3>
                                    </div>
                                </div>

                                <div class="price">
                                    <p>$400</p>
                                </div>



                            </div>


                        </div>



                    </div>

                </div>

                <div class="my_cart">
                    <ul class="my_cart_li" id="cart_click">
                        <?php 
                        if(!empty($_SESSION["shopping_cart"])){
                            $count = count(array_keys( $_SESSION["shopping_cart"]));
                        }else{
                            $count = 0;
                        }                      
                        
                        ?>
                        <span><?php echo $count?></span>
                        <li class="bag_li"><i class="fa-solid fa-sack-dollar"></i></li>
                    </ul>
                </div>

                <!-- mycart -->

                <div class="mycart" id="cart">
                    <div class="cart_head">
                        <h3>MY CART</h3>
                    </div>
                    <?php
                    
                    if(isset($_SESSION["shopping_cart"])){
                        $total_price = 0;
                    }
                    ?>
                    <?php
                    if(!empty($_SESSION["shopping_cart"])){
                    foreach($_SESSION["shopping_cart"] as $product){
                        ?>
                        <div class="cart_container">
                        <div class="cart_item">
                            <img src="img/<?php echo $product["img"]?>" alt="">
                            <div class="cart_item_text">
                                <h4><?php echo $product["name"]?></h4>
                                <p><?php echo "$".$product["price"]?></p>
                                <input type="hidden" value="<?php echo $product["quantity"]?>" name="" id="">
                                <form action="cart_remove.php" method="post">
                                    <td>
                                        <input type="hidden" name="r_id" value="<?php echo $product["a_p_id"]?>">
                                        <button name="remove">Remove</button>
                                    </td>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
                else{
?>

                    <div class="cart_container">
                        <h4>Your Cart Is Empty</h4>
                            
                   
                        </div>
<?php
                }
                    
                    ?>
                   
                    <div class="cart_button">
                        <button>CHEAK OUT</button>
                       <a href="view_cart.php"><button>VIEW CART</button></a>

                    </div>
                </div>



            </div>

            <!-- main nav -->

            <div class="main_navbar">
                <div class="main_nav" id="main_nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="blog.php">Blog</a></li>

                    </ul>
                </div>
                <div class="burger">
                    <i class="fa-solid fa-bars" id="bar"></i>
                </div>
            </div>

        </div>

    </div>

    <!-- our product -->

    <div class="our_product">
        <div class="container_p_card">

<?php

$select = "SELECT * FROM `all_products`";
$run = mysqli_query($connect , $select);
while($fetch = mysqli_fetch_array($run)){?>

<div class="p_card">
    <form method="post">
                <img src="img/<?php echo $fetch["a_p_img"]?>" alt="">
                <div class="p_card_text">
                <input type="hidden" name="p_id" value="<?php echo $fetch["a_p_id"]?>" id="">
                    <h3><?php echo $fetch["a_p_name"]?></h3>
                    <p><?php echo $fetch["a_p_price"]?></p>
                    <p><?php echo $fetch["a_p_descript"]?></p>
                    <div class="p_card_btn">
                        <button name="add_to">Add to Cart</button>
                        <button>Watch More</button>

                    </div>
                </div>
                </form>
            </div>


<?php

}

?>
           

        </div>
    </div>



    <!-- footer -->


    <footer>

        <div class="footer_container">

            <div class="footer_1">
                <div class="footer1_head">
                    <h3>Contact Us</h3>
                    <p>+92 30468777777</p>
                </div>
                <div class="footer1_text">
                    <img src="img/discover.png" alt="">
                    <img src="img/cradit2.webp" alt="">
                    <img src="img/cradit3.webp" alt="">
                    <img src="img/cradit4.webp" alt="">

                </div>
            </div>

            <div class="footer_2">
                <ul class="footer2_ul">
                    <li>
                        <h3>T-Shirts</h3>
                    </li>
                    <li>
                        <h3>Head Phones</h3>
                    </li>
                    <li>
                        <h3>Watches</h3>
                    </li>
                    <li>
                        <h3>Shoes</h3>
                    </li>

                </ul>
            </div>

            <div class="footer_3">
                <ul class="footer3_ul">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="">Blogs</a></li>
                </ul>
            </div>

            <div class="footer_4">
                <ul class="footer4_ul">
                    <li>
                        <h3>Pakistan:Karachi Ittehad Town Karachi</h3>
                    </li>
                    <li>
                        <h3>+92 30468777777</h3>
                    </li>
                    <li>
                        <h3> OnlineShop@gmail.com</h3>
                    </li>
                    <li>
                        <h3>Opening Time 7:00AM to 10:30PM</h3>
                    </li>

                </ul>
            </div>

        </div>


    </footer>


    <!-- responsive footer -->

    <footer class="main_footer">

        <div class="mainfooter_container">

            <div class="mainfooter_2">
                <div class="mainfooter2_head" id="footer_2">
                    <h3>PRODUCTS</h3>
                    <i class="fa-solid fa-angle-up"></i>
                </div>
                <ul class="mainfooter2_ul" id="ul_2">
                    <li>
                        <h3>T-Shirts</h3>
                    </li>
                    <li>
                        <h3>Head Phones</h3>
                    </li>
                    <li>
                        <h3>Watches</h3>
                    </li>
                    <li>
                        <h3>Shoes</h3>
                    </li>

                </ul>
            </div>

            <div class="mainfooter_3">
                <div class="mainfooter3_head" id="footer_3">
                    <h3>CATEGARES</h3>
                    <i class="fa-solid fa-angle-up"></i>

                </div>
                <ul class="mainfooter3_ul" id="ul_3">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="">Blogs</a></li>
                </ul>
            </div>

            <div class="mainfooter_4">
                <div class="mainfooter4_head" id="footer_4">
                    <h3>INFORMATION</h3>
                    <i class="fa-solid fa-angle-up"></i>
                </div>
                <ul class="mainfooter4_ul" id="ul_4">
                    <li>
                        <h3>Pakistan:Karachi Ittehad Town Karachi</h3>
                    </li>
                    <li>
                        <h3>+92 30468777777</h3>
                    </li>
                    <li>
                        <h3> OnlineShop@gmail.com</h3>
                    </li>
                    <li>
                        <h3>Opening Time 7:00AM to 10:30PM</h3>
                    </li>

                </ul>
            </div>

        </div>


    </footer>


    <!-- scrool top button -->

    <button class="scroll_top" id="scroll_top" onclick="topFunction()"><i class="fa-solid fa-angle-up"></i></button>

    <script src="js/product.js"></script>

</body>

</html>