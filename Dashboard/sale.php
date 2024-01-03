<?php

include("../connection.php");

if (isset($_POST["btn"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $actual_price = $_POST["a_price"];
    $img_type = $_FILES["img"]["type"];
    if (strtolower($img_type) == "image/png" || strtolower($img_type) == "image/jpg" || strtolower($img_type) == "image/jpeg") {
        $img_name = $_FILES["img"]["name"];
        $target = "../img/" . basename($img_name);
        if (move_uploaded_file($_FILES['img']["tmp_name"], $target)) {
            $insert = "INSERT INTO `sales_table`(`sales_name`, `sales_img`, `sales_price`, `actual_price`) VALUES ('$name','$img_name','$price','$actual_price')";
            $run = mysqli_query($connect, $insert);

            if ($run) {
                echo ("
                <script>
                alert('Submit Successfull');
                </script>
                ");
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
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashcss/sale.css">
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
                        <li class="sidebar_main_ul_li">
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
                            <li class="sidebar_main_ul_ul_li" style="background: rgba(255,171,51);">Others</li>
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


                <!-- feature product -->

                <div class="feature_product">
                    <div class="feature_product_head">
                        <h2>Sales Product</h2>
                    </div>
                    <div class="sales_add_btn">
                        <button id="add_sales_product">Add Slaes Products</button>
                    </div>
                    <div class="feature_container">
                        <?php

                        $select = "SELECT * FROM `sales_table`";
                        $run = mysqli_query($connect, $select);
                        while ($row = mysqli_fetch_array($run)) { ?>

                            <div class="feature_card">
                                <img src="../img/<?php echo $row["sales_img"]?>" alt="">
                                <div class="feature_text">
                                    <h3><?php echo $row["sales_name"]?></h3>
                                    <p><?php echo $row["sales_price"]?></p>
                                    <del><?php echo $row["actual_price"]?></del>
                                    <div class="f_card_button">
                                        <a href="sale_delete.php?delete=<?php echo $row["sales_id"]?>" style="background: red;">Delete</a>
                                        <a href="sale_update.php?update=<?php echo $row["sales_id"]?>" style="background: rgba(255,150,0);">Update</a>

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


    <!-- add sales form -->

    <div class="add_sales_form" id="add_sales_form">
        <form method="post" enctype="multipart/form-data">

            <div class="name">
                <input name="name" type="text" placeholder="Enter Product Name">
            </div>
            <div class="name">
                <input name="price" placeholder="Enter You Price">
            </div>
            <div class="name">
                <input name="a_price" placeholder="Enter You Acutal Price">
            </div>
            <div class="name">
                <input name="img" type="file" placeholder="">
            </div>

            <div class="form_btn">
                <button name="btn">Add</button>
            </div>


        </form>
    </div>



    <script src="dashjs/sale.js"></script>


</body>

</html>