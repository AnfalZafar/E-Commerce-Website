<?php

include("../connection.php");

if (isset($_POST["a_add"])) {
    $text = $_POST["a_text"];
    $team_name = $_POST["a_t_name"];
    $team_work = $_POST["a_t_work"];
    $img_type = $_FILES["a_img"]["type"];
    $img_team_type = $_FILES["a_t_img"]["type"];

    if (strtolower($img_type) && ($img_team_type) == "image/png" || strtolower($img_type) && ($img_team_type) == "image/jpg" || strtolower($img_type) && ($img_team_type) == "image/jpeg") {
        $img_name = $_FILES["a_img"]["name"];
        $img_team_name = $_FILES["a_t_img"]["name"];
        $target = "../img/" . basename($img_name);
        $target2 = "../img/" . basename($img_team_name);

        if (move_uploaded_file($_FILES["a_img"]["tmp_name"], $target) && move_uploaded_file($_FILES["a_t_img"]["tmp_name"], $target2)) {
            $selectss = "INSERT INTO `about_table`(`about_text`, `about_img`, `about_team_img`,`about_team_name`,`about_team_work`) VALUES ('$text','$img_name','$img_team_name','$team_name','$team_work')";
            $runss = mysqli_query($connect, $selectss);
            if ($runss) {
                echo "
                <script>
                alert('Add Successfulley');
                </script>
                ";
            }
        } else {
            echo "
            <script>
            alert('Add ');
            </script>
            ";
        }
    } else {
        echo "
        <script>
        alert('Add 1rtyfgdh');
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashcss/about.css">
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
                            <a href="all_product.php">All Products</a>
                        </li>
                        <li class="sidebar_main_ul_li" style="background: rgba(255,171,51);">
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

                <div class="main_head">
                    <h2>ABOUT PAGE</h2>
                </div>
                <div class="main_about_add">
                    <button id="add_about">ADD CONTANT</button>
                    <?php
                    $gain = "SELECT * FROM `about_table` ";
                    $go = mysqli_query($connect, $gain);
                    $capture = mysqli_fetch_array($go);

                    ?>
                    <a href="about_delete.php?delete=<?php echo $capture["about_id"]?>" style="background: red;width: 120px;height: 35px;border-radius: 5px;color: #fff;text-decoration: none;display: flex;align-items: center;justify-content: center;">Delete</a>
                </div>


                <div class="main_head_content">

                    <?php

                    $select = "SELECT * FROM `about_table` ";
                    $run = mysqli_query($connect, $select);
                    while ($fetch = mysqli_fetch_array($run)) { ?>


                        <div class="about_container">

                            <div class="about_img">
                                <img src="../img/<?php echo $fetch["about_img"] ?>" alt="">
                            </div>

                            <div class="about_text">
                                <h3><?php echo $fetch["about_text"] ?></h3>

                            </div>

                        </div>


                    <?php
                    }

                    ?>
                </div>

                <!-- Our Team -->
                <div class="our_team">
                    <div class="team_head">
                        <h2>OUR TEAM</h2>
                    </div>
                    <?php

                    $selects = "SELECT * FROM `about_table` ";
                    $runs = mysqli_query($connect, $selects);
                    while ($fetchs = mysqli_fetch_array($runs)) { ?>



                        <div class="team_container">


                            <div class="team_card">
                                <img src="../img/<?php echo $fetchs["about_team_img"]?>" alt="">
                                <div class="team_card_text">
                                    <h3><?php echo $fetchs["about_team_name"]?></h3>
                                    <p><?php echo $fetchs["about_team_work"]?></p>
                                </div>
                            </div>



                        </div>

                    <?php
                    }
                    ?>

                </div>


            </div>

            <!-- main text end -->


        </div>


    </div>


    <div class="about_form" id="about_form">
        <form method=" post" enctype="multipart/form-data" >
            <div class="name">
                <input type="text" name="a_name" placeholder="Enter Your About Text">
            </div>
            <div class="name">
                <input type="file" name="a_img">
            </div>
            <div class="team_form">
                <div class="team_form_head">
                    <h2>Choose Your Team Img</h2>
                </div>
                <div class="name">
                <input type="text" name="a_t_work" placeholder="Enter Your Team Work">
            </div>
                <div class="name">
                    <input type="file" name="a_t_img">
                </div>
             
            </div>
            <div class="form_btn">
                <button name="a_add">Add</button>
            </div>
        </form>
       </div>
    



    <script src="dashjs/about.js"></script>


</body>

</html>