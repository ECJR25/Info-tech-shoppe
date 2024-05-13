<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/item.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Razer BlackWidow V3</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="12">
                    <div class="img-con">
                    <img src="../products/keyboard.jpg" alt="">
                    </div>
                    <div class="right-con">

                        <!--(PRODUCT 12)-->
                        <h1 class="name-js">Razer BlackWidow V3</h1>
                        <div class="description">
                        The GlideTech ProKeys offers a seamless typing experience designed for efficiency and comfort. With its responsive keys and ergonomic layout, this keyboard enhances productivity and reduces typing fatigue. Its sleek and durable design ensures reliability, making it an ideal companion for seamless work or leisurely browsing. Elevate your typing experience with this versatile and user-friendly laptop keyboard.
                        </div>
                        <div class="price-div"><span class="price">PHP1200.00</span>(46% off)</div>
                        <div class="sub-descript">
                            <li>Wired Keyboard</li>
                            <li>RGB Lighting</li>
                            <li>Wireless Keyboard</li>
                        </div>
                        
                        <div class="add-div">
                            <div class="qnty-td">
                                <div class="minus-btn">-</div>
                                <div class="qnty-js"><input type="text" class="qnty-input" min="1" value="1"></div>
                                <div class="add-btn">+</div>
                            </div>
                            <button class="add-cart">Add to cart</button>    
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </main>
    

    <?php include("./footer.php"); ?>

    <script src="../scripts/quantity.js"></script>
    <script src="../scripts/cartSolo.js"></script>
</body>
</html>