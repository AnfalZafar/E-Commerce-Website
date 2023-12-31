<?php 

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/about.css">
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
                        <span>5</span>
                        <li class="bag_li"><i class="fa-solid fa-sack-dollar"></i></li>
                    </ul>
                </div>

                <!-- mycart -->

                <div class="mycart" id="cart">
                    <div class="cart_head">
                        <h3>MY CART</h3>
                    </div>
                    <div class="cart_container">
                        <div class="cart_item">
                            <img src="img/watch1.webp" alt="">
                            <div class="cart_item_text">
                                <h4>Watch</h4>
                                <p>$50</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart_button">
                        <button>CHEAK OUT</button>
                        <button>VIEW CART</button>

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

    <!-- about us -->

    <div class="about_us">
        <div class="about_head">
            <h2>ABOUT OUR STORE</h2>
        </div>

        <div class="about_container">

            <div class="about_img">
                <img src="img/aboutus.jpg" alt="">
            </div>

            <div class="about_text">
                <h3>Welcome to our e-commerce store, your one-stop destination for high-quality watches, stylish
                    t-shirts, premium headphones, and trendy shoes. We are passionate about providing you with the best
                    selection of products to suit your style and needs.</h3>
                <h3>Our team is dedicated to offering top-notch customer service, quick shipping, and a secure shopping
                    experience. With a commitment to quality and style, we strive to make your online shopping
                    experience as enjoyable as possible.</h3>

            </div>

        </div>

    </div>

    <!-- Our Team -->


    <div class="our_team">
        <div class="team_head">
            <h2>OUR TEAM</h2>
        </div>
        <div class="team_container">


            <div class="team_card">
                <img src="img/ourteam.jpg" alt="">
                <div class="team_card_text">
                    <h3>John Son</h3>
                    <p>OPRATOR</p>
                </div>
            </div>

            <div class="team_card">
                <img src="img/ourteam2.jpg" alt="">
                <div class="team_card_text">
                    <h3>John Son</h3>
                    <p>OPRATOR</p>
                </div>
            </div>

            <div class="team_card">
                <img src="img/ourteam3.jpg" alt="">
                <div class="team_card_text">
                    <h3>John Son</h3>
                    <p>OPRATOR</p>
                </div>
            </div>

            <div class="team_card">
                <img src="img/ourteam4.jpg" alt="">
                <div class="team_card_text">
                    <h3>John Son</h3>
                    <p>OPRATOR</p>
                </div>
            </div>


        </div>
    </div>

    <!-- our mission -->






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

    <script src="js/about.js"></script>

</body>

</html>