<?php

include("../connection.php");

$get = $_GET["update"];
$select = "SELECT * FROM `all_products` WHERE `all_products`.`a_p_id` = $get";
$run = mysqli_query($connect, $select);
$fetch = mysqli_fetch_array($run);

if(isset($_POST["p_add"])) {
    $name = $_POST["p_name"];
    $price = $_POST["p_price"];
    $title = $_POST["p_title"];
    $img_type = $_FILES["p_img"]["type"];

    if (strtolower($img_type) == "image/png" || strtolower($img_type) == "image/jpg" || strtolower($img_type) == "image/jpeg") {

        $img_name = $_FILES["p_img"]["name"];
        $target = "../img/" . basename($img_name);

        if (move_uploaded_file($_FILES["p_img"]["tmp_name"], $target)) {
            $update = "UPDATE `all_products` SET `a_p_name`='$name',`a_p_img`='$img_name',`a_p_price`='$price',`a_p_descript`='$title' WHERE `all_products`.`a_p_id` = $get";
            $ru = mysqli_query($connect, $update);
            if ($ru) {
                echo "
        <script>
        alert('Edit Successfulley');
        </script>
        ";
                header("location:all_product.php");
            } else {
                echo "
        <script>
        alert('Opps Something Wrong');
        </script>
        ";
            }
        }
        else{
            echo "
            <script>
            alert('Opps Something Wrong');
            </script>
            ";
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
    <link rel="stylesheet" href="dashcss/product_update.css">
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
                                    <li class="sidebar_main_ul_others_content_ul_li"><a href="promotion.php">Promotion</a></li>

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
                        <img src="../img/manimg.webp" alt="">
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
                    <h2>Edit Products</h2>
                </div>



                <!-- main text end -->


            </div>


        </div>




        <div class="product_form" id="product_form">
            <form method="post" enctype="multipart/form-data">
                <div class="name">
                    <input type="text" name="p_name" placeholder="Enter Your Product Name" value="<?php echo $fetch["a_p_name"] ?>">
                </div>
                <div class="name">
                    <input type="text" name="p_price" placeholder="Enter Your Price" value="<?php echo $fetch["a_p_price"] ?>">
                </div>
                <div class="name">
                    <input type="text" name="p_title" placeholder="Enter Your Product Name" value="<?php echo $fetch["a_p_descript"] ?>">
                </div>
                <div class="name">
                    <input type="file" name="p_img" value="<?php echo $fetch["a_p_img"] ?>">
                </div>
                <div class="form_btn">
                    <button name="p_add">Edit</button>
                </div>
            </form>
        </div>




</body>

</html>