<?php

include("../connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashcss/contact.css">
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
                        <li class="sidebar_main_ul_li" style="background: rgba(255,171,51);">
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
                    <h2>MONEY</h2>
                </div>

                <div class="table">
                    <table class="main_table">
                        <thead class="main_table_thead">
                            <tr class="main_table_thead_tr">
                                <th class="main_table_thead_th">Name</th>
                                <th class="main_table_thead_th">Email</th>
                                <th class="main_table_thead_th">Phone</th>
                                <th class="main_table_thead_th">Description</th>

                            </tr>
                        </thead>
<?php

$select = "SELECT * FROM `contact_table`";
$run = mysqli_query($connect , $select);
while($fetch = mysqli_fetch_array($run)){?>


<tbody class="main_table_tbody">

<tr class="main_table_tbody_tr">
    <td class="main_table_tbody_td">
        <p class="fw-bold mb-1"><?php echo $fetch["c_name"]?> <?php echo $fetch["c_l_name"]?></p>
    </td>
    <td class="main_table_tbody_td">
        <p class="fw-bold mb-1"><?php echo $fetch["c_email"]?></p>
    </td>
    <td class="main_table_tbody_td">
        <p class="fw-bold mb-1"><?php echo $fetch["c_phone"]?></p>
    </td>
    <td class="main_table_tbody_td">
        <p><?php echo $fetch["c_message"]?></p>
    </td>

</tr>

</tbody>


<?php
}

?>

                    </table>
                </div>


            </div>

            <!-- main text end -->


        </div>


    </div>







    <script src="dashjs/contact.js"></script>


</body>

</html>