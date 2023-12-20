<?php 
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/0962378758.js" crossorigin="anonymous"></script>
</head>
<style>
    .swiper {
        width: 100%;
        height: 100%;
        z-index: -11;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<body id="body">

    <!-- header -->

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

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/header slider1.png" alt="">
                    <div class="slide_text">
                        <h1>Hot Right Now</h1>
                        <p>Summer White and bridge tropical prints capture a brasey.</p>
                        <button>Shop Now</button>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="img/header slider4.png" alt="">
                    <div class="slide_text">
                        <h1>Hot Right Now</h1>
                        <p>Summer White and bridge tropical prints capture a brasey.</p>
                        <button>Shop Now</button>
                    </div>
                </div>


                <div class="swiper-slide">
                    <img src="img/header slider2.png" alt="">
                    <div class="slide_text">
                        <h1>Hot Right Now</h1>
                        <p>Summer White and bridge tropical prints capture a brasey.</p>
                        <button>Shop Now</button>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>


        </div>

    </div>

    <!-- our security -->

    <div class="security">

        <div class="secu_card">
            <div class="secu_logo">
                <i class="fa-solid fa-money-bill" style="color: #ff9600;"></i>
            </div>
            <div class="secu_text">
                <h3>FREE DELIVERY</h3>
                <p>JUST GET AMOUNT</p>
            </div>
        </div>

        <div class="secu_card">
            <div class="secu_logo">
                <i class="fa-solid fa-shield-halved" style="color: #ff9600;"></i>
            </div>
            <div class="secu_text">
                <h3>ORDERED PROTECTION</h3>
                <p>SECURE INFORMATION</p>
            </div>
        </div>

        <div class="secu_card">
            <div class="secu_logo">
                <i class="fa-solid fa-gift" style="color: #ff9600;"></i>
            </div>
            <div class="secu_text">
                <h3>PROMOTION GIFT</h3>
                <p>SPECTIAL OFFERS</p>
            </div>
        </div>

        <div class="secu_card">
            <div class="secu_logo">
                <i class="fa-solid fa-film" style="color: #ff9600;"></i>
            </div>
            <div class="secu_text">
                <h3>MONEY BACK</h3>
                <p>RETURN IN 30 DAYS</p>
            </div>
        </div>

        <div class="secu_card">
            <div class="secu_logo">
                <i class="fa-solid fa-globe" style="color: #ff9600;"></i>
            </div>
            <div class="secu_text">
                <h3>BIGG SAVING</h3>
                <p>WEEKEN SALES</p>
            </div>
        </div>


    </div>

    <!-- our product -->

    <div class="our_product">
        <div class="product_head">
            <h2>OUR PRODUCTS</h2>
        </div>
        <div class="container_p_card">

        <?php 
        
        $select = "SELECT * FROM `e_product`";
        $run = mysqli_query($connect , $select);
        while($fetch = mysqli_fetch_array($run)){?>

               <a href="" class="p_card">
                <img src="img/<?php echo $fetch["product_img"]?>" alt="">
                <div class="p_card_text">
                    <h3><?php echo $fetch["product_name"]?></h3>
                </div>
            </a>
    
    <?php
    }
        ?>

     

          

        </div>
    </div>

    <!-- Promotion -->

    <div class="our_promotion">
        <div class="promotion_head">
            <h2>OUR PROMOTION</h2>
        </div>
        <div class="promotion_container">

            <!-- card 1 -->
            <div class="card1_head">

                <div class="card1_head_1">
                    <div class="card1_head_text">
                        <h2>GET UP TO 60%</h2>
                        <p>ON SUMMER VICATION</p>
                    </div>
                </div>

                <div class="card1_head_2">
                    <div class="card1_head_2_text">
                        <h2>GET UP TO 40%</h2>
                        <p>ON WINTER VACATION</p>
                    </div>
                </div>


            </div>

            <!-- card 2 -->

            <div class="card2">
                <div class="card2_text">
                    <p>GET THE T-SHIRT</p>
                    <div class="card2_text_price">
                        <del>$200</del>
                        <p>$150</p>
                    </div>
                </div>
                <div class="card2_img">
                    <img src="img/promotion2.webp" alt="">
                </div>
            </div>

            <!-- card 3 -->

            <div class="card3">
                <div class="card2_text">
                    <p>GET THE T-SHIRT</p>
                    <div class="card2_text_price">
                        <del>$200</del>
                        <p>$150</p>
                    </div>
                </div>
                <div class="card2_img">
                    <img src="img/promotion3.webp" alt="">
                </div>
            </div>

            <div class="card4">
                <div class="card4_text">
                    <h2>GET UP TO 40%</h2>
                    <p>ON WINTER VACATION</p>
                </div>
            </div>


        </div>
    </div>

    <!-- feature product -->

    <div class="feature_product">
        <div class="feature_product_head">
            <h2>OUR FEATURE PRODUCTS</h2>
        </div>
        <div class="feature_container">

        <?php 
        
        $select = "SELECT * FROM `feature_product`";
        $run = mysqli_query($connect , $select);
        while($fetch = mysqli_fetch_array($run)){?>

            <div class="feature_card">
                <img src="img/<?php echo $fetch["fea_img"]?>" alt="">
                <div class="feature_text">
                    <h3><?php echo $fetch["fea_name"]?></h3>
                </div>
            </div>
<?php
        }
        ?>
           

        </div>
    </div>

    <!-- Sales -->

    <div class="sales">
        <div class="sales_blur">
            <img class="sales_img" src="img/holl_sell_head_img.avif" alt="">

            <div class="sales_head">
                <h1>HAPPEY SLAES</h1>
            </div>

            <?php 
        
        $select = "SELECT * FROM `sales_table`";
        $run = mysqli_query($connect , $select);
        while($fetch = mysqli_fetch_array($run)){?>

            <div class="sales_card">
                <img src="img/<?php echo $fetch["sales_img"]?>" alt="">
                <div class="sales_text">
                    <h2><?php echo $fetch["sales_name"]?></h2>
                    <div class="sales_text_price">
                        <del><?php echo $fetch["sales_price"]?></del>
                        <h3><?php echo $fetch["actual_price"]?></h3>
                    </div>
                </div>
            </div>
<?php
}
?>


        </div>
    </div>

    <!-- BRANDS -->

    <div class="brands">
        <div class="brands_head">
            <div class="brands_card">
                <img src="img/brands_1.png" alt="">
            </div>
            <div class="brands_card">
                <img src="img/brands_1.png" alt="">
            </div>
            <div class="brands_card">
                <img src="img/brands_1.png" alt="">
            </div>
            <div class="brands_card">
                <img src="img/brands_1.png" alt="">
            </div>
            <div class="brands_card">
                <img src="img/brands_5.png" alt="">
            </div>
        </div>
    </div>


    <!-- Blogs -->

    <div class="blogs">
        <div class="blogs_head">
            <h2>LATEST BLOGS</h2>
        </div>
        <div class="blogs_card_head">

            <div class="blogs_card">
                <img src="img/block1.jpg" alt="">
                <div class="blogs_card_text">
                    <h3>3 AUGUST 2019</h3>
                    <P>by:Anfal Zafar</P>
                </div>
            </div>

            <div class="blogs_card">
                <img src="img/block2.jpg" alt="">
                <div class="blogs_card_text">
                    <h3>15 SETEMBER 2020</h3>
                    <P>by:Anfal Zafar</P>
                </div>
            </div>

            <div class="blogs_card">
                <img src="img/block3.jpg" alt="">
                <div class="blogs_card_text">
                    <h3>10 JANUARI 2021</h3>
                    <P>by:Anfal Zafar</P>
                </div>
            </div>

            <div class="blogs_card">
                <img src="img/block4.jpg" alt="">
                <div class="blogs_card_text">
                    <h3>28 JULY 2023</h3>
                    <P>by:Anfal Zafar</P>
                </div>
            </div>

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



    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/index.js"></script>



</body>

</html>