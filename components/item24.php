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
    <title>Carina Mechanical Keyboard</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="24">
                    <div class="img-con">
                    <img src="../products/Carina Mechanical Keyboard (PhP 1,500).jpg" alt="">
                    </div>
                    <div class="right-con">
                      
                        <!-- (PRODUCT 24) -->
                        <h1 class="name-js">Carina Mechanical Keyboard</h1>
                        <div class="description">
                        Carina Mechanical Keyboard Kit offers a cool frosty acrylic case with programmable LED lighting. This mechanical keyboard kit can be assembled in just minutes yet shines for years to come. Inspired by Carina constellation 
                        that signifies the hull of a ship in Latin, this keyboard is like one vessel with a formidable foundation.
                        </div>
                        <div class="price-div"><span class="price">PHP1500.00</span>(55% off)</div>
                        <div class="sub-descript">
                            <li>High-performance adaptive light sensor</li>
                            <li>Uncompressed 1080p 60FPS</li>
                            <li>HDR-enabled</li>
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