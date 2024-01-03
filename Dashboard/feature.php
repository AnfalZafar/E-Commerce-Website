<?php

include("../connection.php");

if (isset($_POST["f_add"])) {
    $name = $_POST["f_name"];
    $img_type = $_FILES["f_img"]["type"];
    if (strtolower($img_type) == "image/png" || strtolower($img_type) == "image/jpg" || strtolower($img_type) == "image/jpeg") {
        $img_name = $_FILES["f_img"]["name"];
        $target = "../img/" . basename($img_name);
        if (move_uploaded_file($_FILES["f_img"]["tmp_name"], $target)) {
            $insert = "INSERT INTO `feature_product`( `fea_name`, `fea_img`) VALUES ('$name','$img_name')";
            $run = mysqli_query($connect, $insert);
            if ($run) {
                echo "
            <script>
            alert('Add Successfully');
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
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashcss/feature.css">
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
                        <h2>OUR FEATURE PRODUCTS</h2>
                    </div>
                    <div class="main_container_add">
                        <button id="add_product">ADD PRODUCTS</button>
                    </div>
                    <div class="feature_container">

                        <?php

                        $select = "SELECT * FROM `feature_product`";
                        $run = mysqli_query($connect, $select);
                        while ($data = mysqli_fetch_array($run)) { ?>

                            <div class="feature_card">
                                <img src="../img/<?php echo $data["fea_img"]?>" alt="">
                                <div class="feature_text">
                                    <h3><?php echo $data["fea_name"]?></h3>
                                    <div class="f_card_button">
                                        <a href="feature_delete.php?delete=<?php echo $data['fea_id']?>" style="background: red;">Delete</a>
                                        <a href="feature_update.php?update=<?php echo $data['fea_id']?>" style="background: rgba(255,150,0);">Update</a>

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
                <input type="text" name="f_name" placeholder="Enter Your Product Name">
            </div>
            <div class="name">
                <input type="file" name="f_img">
            </div>
            <div class="form_btn">
                <button name="f_add">Add</button>
            </div>
        </form>
    </div>




    <script src="dashjs/feature.js"></script>


</body>

</html>