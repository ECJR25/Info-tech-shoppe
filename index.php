<!DOCTYPE html>
<?php session_start(); ?>
<?php require_once("./backend/connection.php"); ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="./style/header.css">
        <link rel="stylesheet" href="./style/gen.css">
        <link rel="stylesheet" href="./style/indexx.css">
        <link rel="stylesheet" href="./style/footer.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Home page</title>
    </head>
<body>
<header>
        <div class="con">
            <div class="left-row">
                <a href="index.php" class="a-js"><h1>Info Tech Shoppe</h1></a>
            </div>

            <div class="right-row">
                <a href="./components/store.php" class="a-js"><div>Store</div></a>
                <a href="./components/testimonials.php" class="a-js"><div>About</div></a>
                <a href="<?php
                    if(isset($_SESSION["acc_id"])){
                        echo "components/cart.php";
                    }else{
                        echo "components/login.php";
                    }
                ?>" class="a-js">
                    <div class="relative">
                        <i class="fa-solid fa-cart-shopping fa-xl" style="color: rgb(96, 96, 96);"></i>
                        <div class="count">
                            <?php
                                if(isset($_SESSION["acc_id"]))
                                {
                                    $acc_id = $_SESSION["acc_id"];
                                    $query = "SELECT * FROM tbl_cart WHERE acc_id = ?";
                                    $stmt = $conn->prepare($query);
                                    $stmt->bind_param("i", $acc_id);
                                    $stmt->execute();
                                    $result = $stmt->get_result();

                                    echo $result->num_rows;
                                }else{
                                    echo "0";
                                }
                            ?>
                        </div>
                    </div>
                </a>
                <?php
                    if(isset($_SESSION["acc_id"]))
                    {
                        echo "
                        <div class='profile-logIn'>
                            <a href='components/profile.php' class='a-js'>
                                <i class='fa-solid fa-user fa-xl' style='color: rgb(96, 96, 96);'></i>
                            </a>
                            <i class='fa-solid fa-caret-down fa-xl drop-down' style='color: rgb(96, 96, 96);'></i>
                            <div class='profile-div'>
                            <a href='./profile.php' class='profile'><div style='background-color: goldenrod; color: black;'>Profile</div></a>
                            <a href='../backend/logout.php' class='logOut'><div style='background-color: goldenrod; color: black;'>Log out</div></a>
                        </div>
                        </div>
                        ";
                    }else{
                        echo "
                        <a href='components/login.php' class='a-js profile-logIn'>
                            <i class='fa-solid fa-user fa-xl' style='color: rgb(96, 96, 96);'></i>
                        </a>
                        ";
                    }
                ?>
            </div>
        </div>
    </header>    


    <div class="bg-head">
        <img src="./images/bg1.jpg" alt="">
        <div class="absolute">
            <h2>Increase your productivity with our products</h2>
            <a href="./components/store.php"><button>Shop Now <i class="fa-solid fa-arrow-right" style="color: #0d0d0d;"></i></button></a>
        </div>
    </div>

    <main>
            <div class="featured-div">
                <hr style="margin-bottom: 40px;">
                <h1>Peripherals</h1>
                <div class="des">
                    <div>
                    Unleash the full potential of your digital domain with our state-of-the-art computer peripherals, designed to redefine the way you interact with technology.<br> Dive into a world of seamless efficiency, precision, and style that enhances every click, press, and scroll.
                    </div>
                </div>

                <div class="flex">
                    <div class="con">
                    <a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#display">
                        <img src="products/ROG Strix XG438Q (PhP 13,159).jpg" alt=""></a>
                        <div>MONITORS</div>
                    </div>

                    <div class="con">
                    <a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#keyboard">
                    <img src="products/Wireless Razer BlackWidow V3 Pro (3,222).jpg"></a>
                        <div>KEYBOARDS</div>
                    </div>

                    <div class="con">
                    <a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#keyboard">
                    <img src="products/Razer Basilisk X HyperSpeed (PhP 499).jpg" alt=""></a>
                        <div>MOUSE</div>
                    </div>
                </div>
            </div>
       

        <div class="featured-div">
          
                <h1>Accessories</h1>
                <div class="des">
                    <div>
                    Transform your computing journey into a seamless blend of performance and style with our curated collection of top-notch accessories.<br> Dive into a world of innovation and functionality that complements your every click and keystroke.
                    </div>
                </div>

                <div class="flex">
                    <div class="con">
                    <a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#cables">
                    <img src="products/HAGiBiS 8K HDMI 2_1 Cable (PhP 378).jpg" alt=""></a>
                        <div>CABLES</div>
                    </div>

                    <div class="con">
                    <a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#webcam">
                    <img src="products/Creative 2K Webcam (PhP 800).jpg" alt=""></a>
                        <div>WEBCAMS</div>
                    </div>

                    <div class="con">
                    <a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#flashdrive">
                    <img src="products/Black Flash Drive (PhP 299).jpg" alt=""></a>
                        <div>FLASHDRIVES</div>
                    </div>
                </div>
            </div>
      

        <hr>

        
            <div class="set-flex">
                <div class="set-div">
                    <div class="work-home" >Special Collaboration with Razers</div>
                    <div class="con">
                        <h1 style="color:darkgoldenrod">CodeOnederes X RAZERS</h1>
                        
                        <div class="des">
                        Discover furniture that elevates your space and mindset! Our collection is 
                        designed to ignite inspiration and fuel motivation, offering stylish, functional pieces that transform your surroundings into an oasis of creativity and productivity. 
                        <a style="color: #44d62c;" href="./components/store.php">Learn More</a>
                        </div>

                        <div class="img-con">
                            <div class="img-con-div">
                            <a href="./components/item4.php"><img src="products/Razer BlackWidow V4 Pro - Orange Switch - US.jpg" alt=""></a>
                            </div>
                            <h1>Razer BlackWidow V4 Pro - Orange Switch - US</h1>
                            <div class="details">Mechanical Gaming Keyboard with Razer Chroma™ RGB</div>
                        </div>

                        <div class="img-con">
                            <div class="img-con-div">
                            <a href="./components/item2.php"><img src="products/Razer Basilisk V3 Pro - Black.jpg" alt=""></a>
                            </div>
                            <h1>Razer Basilisk V3 Pro - Black</h1>
                            <div class="details">Customizable Wireless Gaming Mouse with Razer HyperScroll Tilt Wheel</div>
                        </div>

                        <div class="img-con">
                            <div class="img-con-div">
                            <a href="./components/item1.php"><img src="products/razer headset.jpg" alt=""></a>
                            </div>
                            <h1>Razer x *A Bathing Ape® Opus</h1>
                            <div class="details">Wireless THX® Certified Headphones with Advanced Active Noise Cancellation</div>
                        </div>

                        <div class="img-con">
                            <div class="img-con-div">
                            <a href="./components/item3.php"><img src="products/Razer Kishi V2 Pro for Android (Xbox).jpg" alt=""></a>
                            </div>
                            <h1>Razer Kishi V2 Pro for Android (Xbox)</h1>
                            <div class="details">Xbox Gaming Controller for Android</div>
                        </div>

                        <div class="img-con">
                            <div class="img-con-div">
                            <a href="./components/item5.php"><img src="products/razerchair.jpg" alt=""></a>
                            </div>
                            <h1>Razer x *A Bathing Ape® Iskur X</h1>
                            <div class="details">Premium Gaming Chair with Alcantara® Leather for All-Day Comfort</div>
                        </div>

                        <div class="img-con">
                            <div class="img-con-div">
                            <a href="./components/item6.php"><img src="products/razerblade17.jpg" alt=""></a>
                            </div>
                            <h1>Razer Blade 17 (2022)</h1>
                            <div class="details">Desktop Replacement Laptop with 12th Gen Processors</div>
                        </div>
                    </div>  
                </div>
            </div>
       
    </main> 
    
    <footer class="footer">
                <div class="footer-container">
                    <div class="footer-row">
                        <div class="footer-col">
                            <h4>Contact us</h4>
                            <ul>
                                <li><p>09565972468</p></li>
                                <li><p>CodeOnederers@gmail.com</p></li>
                                <li><p># 1 Esperanza St., Hilltop Mansion Subdivision Lagro, Quezon City Metro Manila 1118</p></li>
                                <li><a href=""></a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Get Help</h4>
                            <ul>
                                <li><a href="components/faqs.php">FaQ</a></li>
                                <li><a href="components/about.php">About Us</a></li>
                                <li><a href="components/testimonials.php">Testimonials</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                        <h4>Online shop</h4>
                            <ul>
                                <li><a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#best">Best Sellers</a></li>
                                <li><a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#new">New Items</a></li>
                                <li><a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#display">Display</a></li>
                                <li><a href="http://localhost/GROUP-PROJECT-MAIN./components/store.php#keyboard">Mouse and Keyboards</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                        <h4>About us</h4>
                            <ul>
                                <li><p>At Onederer's store, we understand the importance of high-quality computer components to build or upgrade your PC.</p></li>
                            </ul>
                        </div>
                    </div>
                    <hr><!------A white line seperates the footer and the rights reserved------>
                    <p class = "copyright" style="color:white">Created by CodeOnederers<br>©2023 All Rights Reserved</p>
                </div>
            </footer>


<script src="./scripts/addToCartIndex.js"></script>
    <script src="./scripts/header.js"></script>
</body>
</html>