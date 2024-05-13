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
    <title>Razer Kiyo</title>
</head>
<body>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="31">
                    <div class="img-con">
                    <img src="../products/rwebc.jpg" alt="">
                    </div>
                    <div class="right-con">
                      
                        <!-- (PRODUCT 31) -->
                        <h1 class="name-js">Razer Kiyo</h1>
                        <div class="description">
                        The Razer Kiyo comes with a built-in 5600 K daylight-balanced ring light that provides even lighting without the hassle of additional lighting equipment. Plus, make quick adjustments to 
                        brightness levels by simply rotating the light, with no need to configure software.
                        </div>
                        <div class="price-div"><span class="price">PHP1600.00</span>(55% off)</div>
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