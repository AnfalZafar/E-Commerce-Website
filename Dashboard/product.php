<?php

include("../connection.php");

if(isset($_POST["p_add"])) {

    $name = $_POST["p_name"];
    $img_type = $_FILES["p_img"]["type"];
    if(strtolower($img_type) == "image/png" || strtolower($img_type) == "image/jpg" || strtolower($img_type) == "image/jpeg") {
        $img_name = $_FILES["p_img"]["name"];
        $target = "../img/" .basename($img_name);
        if(move_uploaded_file($_FILES["p_img"]["tmp_name"] , $target)) {
            $insert = "INSERT INTO `e_product`( `product_name`, `product_img`) VALUES ('$name','$img_name')";
            $run = mysqli_query($connect, $insert);
            if ($run) {
                echo "
        <script>
        alert('Submit Successfuley');
        </script>
        ";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Dashboard</title>
    <link rel="stylesheet" href="dashcss/product.css">
    <script src="https://kit.fontawesome.com/0962378758.js" crossorigin="anonymous"></script>

<body>


    <div class="container">

        <!-- sidebar -->

        <div class="sidebar" id="sidebar">

            <div class="sidebar_container">

                <div class="sidebar_head">
                    <h2>DASHBOARD</h2>
                </div>

                <div class="sidebar_main">
                    <ul class="sidebar_main_ul">
                        <li class="sidebar_main_ul_li">
                            <i class="fa-solid fa-grid"></i>
                            <a href="dash.php">Dashboard</a>
                        </li>
                        <li class="sidebar_main_ul_li">
                            <i class="fa-sharp fa-solid fa-grid-round-2"></i>
                            <a href="pament.php">Paments</a>
                        </li>
                        <li class="sidebar_main_ul_li" style="background: rgba(255,171,51);">
                            <i class="fa-sharp fa-solid fa-grid-round-2"></i>
                            <a href="product.php">Products</a>
                        </li>
                        <li class="sidebar_main_ul_li">
                            <i class="fa-sharp fa-solid fa-grid-round-2"></i>
                            <a href="all_product.php"> All Products</a>
                        </li>
                        <li class="sidebar_main_ul_li">
                            <i class="fa-sharp fa-solid fa-grid-round-2"></i>
                            <a href="about.php">About</a>
                        </li>
                        <li class="sidebar_main_ul_li">
                            <i class="fa-solid fa-grid"></i>
                            <a href="contact.php">Contact</a>
                        </li>
                        <ul class="sidebar_main_ul_ul" id="side_bar_head">
                            <li class="sidebar_main_ul_ul_li">Others</li>
                            <div class="sidebar_main_ul_others_content" id="side_bar_content">
                                <ul class="sidebar_main_ul_others_content_ul">
                                    <li class="sidebar_main_ul_others_content_ul_li"><a href="sale.php">Sales</a></li>
                                    <li class="sidebar_main_ul_others_content_ul_li"><a href="blog.php">Blogs</a></li>
                                    <li class="sidebar_main_ul_others_content_ul_li"><a href="feature.php">Feature
                                            Products</a>
                                    </li>
                                    <li class="sidebar_main_ul_others_content_ul_li"><a
                                            href="promotion.php">Promotion</a></li>

                                </ul>
                            </div>
                        </ul>

                </div>
                </ul>

                </ul>
            </div>

        </div>

        <!-- sidebar end -->

        <div class="main">

            <!-- navbar -->

            <div class="navbar">
                <div class="grid">
                    <i class="fa-solid fa-bars" id="bar"></i>
                </div>
                <div class="nav">
                    <div class="profile" id="profile">
                        <h3>AnfalZafar</h3>
                        <img src="../../img/manimg.webp" alt="">
                    </div>
                    <div class="pro_detail" id="profile_detail">
                        <ul class="pro_ul">
                            <li class="pro_li"><a href="">Profile</a></li>
                            <li class="pro_li"><a href="">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- navbar end -->


            <!-- main text -->

            <div class="main_container">

                <div class="main_container_head">
                    <h2>PRODUCTS</h2>
                </div>

                <div class="main_container_add">
                    <button id="add_product">ADD PRODUCTS</button>
                </div>

                <!-- our product -->

                <div class="our_product">
                    <div class="container_p_card">

                    <?php
$select = "SELECT * FROM `e_product`";
$run = mysqli_query($connect , $select);
while($row = mysqli_fetch_array($run)){?>
                        <div class="p_card">
                            <img src="../img/<?php echo $row["product_img"]?>" alt="">
                            <div class="p_card_text">
                                <h3><?php echo $row["product_name"]?></h3>
                                <div class="p_card_button">
                                    <a href="product_delete.php?delete=<?php echo $row["product_id"]?>" style="background: red;">Delete</a>
                                    <a href="product_update.php?update=<?php echo $row["product_id"]?>" style="background: rgb(255 , 150 ,0);">Update</a>

                                </div>
                               
                            </div>
                        </div>

                        <?php
}

?>
       

                    </div>
                </div>



            </div>

            <!-- main text end -->


        </div>


    </div>




   <div class="product_form" id="product_form">
    <form method="post" enctype="multipart/form-data"> 
        <div class="name">
            <input type="text" name="p_name" placeholder="Enter Your Product Name">
        </div>
      
        <div class="name">
            <input type="file" name="p_img">
        </div>
        <div class="form_btn">
            <button name="p_add">Add</button>
        </div>
    </form>
   </div>


    <script src="dashjs/product.js"></script>


</body>

</html>