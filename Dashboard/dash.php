<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashcss/dash.css">
    <script src="https://kit.fontawesome.com/0962378758.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", { packages: ["corechart"] });
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Total Money', 0.3],
                ['Users', 1.7],
                ['Money Per Day', 18]
            ]);

            var options = {
                title: 'My Earns',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>

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
                        <li class="sidebar_main_ul_li" style="background: rgba(255,171,51);">
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

                <!-- head cards -->
                <div class="head_card_container">

                    <div class="head_cards">
                        <h3>TOTAL MONEY</h3>
                        <h5>$1000</h5>
                    </div>

                    <div class="head_cards">
                        <h3>TOTAL USERS</h3>
                        <h5>$1500</h5>
                    </div>

                </div>
                <!-- head cards end -->

                <!-- chart -->
                <div class="chart">
                    <div id="piechart_3d" class="peichart" ></div>

                </div>
            </div>

            <!-- main text end -->


        </div>


    </div>




    </div>


    <script src="dashjs/dash.js"></script>


</body>

</html>