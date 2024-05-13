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
    <title>VGA Cable</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="26">
                    <div class="img-con">
                    <img src="../products/VGA Cable (PhP 259).jpg" alt="">
                    </div>
                    <div class="right-con">
                      
                        <!-- (PRODUCT 26) -->
                        <h1 class="name-js">VGA Cable</h1>
                        <div class="description">
                        VGA cable can be used with a variety of supported VGA resolutions, ranging from 
                        320×400px @70 Hz, or 320×480px @60 Hz (12.6 MHz of signal bandwidth) to 1280×1024px 
                        (SXGA) @85 Hz (160 MHz) and up to 2048×1536px (QXGA) @85 Hz (388 MHz).
                        </div>
                        <div class="price-div"><span class="price">PHP259.00</span>(55% off)</div>
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