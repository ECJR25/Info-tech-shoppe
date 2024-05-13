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
    <title>Razer Kiyo Pro</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="7">
                    <div class="img-con">
                        <img src="../products/rwebcam.jpg" alt="">
                    </div>
                    <div class="right-con">
                      
                        <!-- (PRODUCT 7) -->
                        <h1 class="name-js">Razer Kiyo Pro</h1>
                        <div class="description">
                        Achieve professional video standards for streaming and video conferencing with the Razer Kiyo Pro—an FHD USB webcam that has a high-performance adaptive light sensor, so you can enjoy crisp, clear quality in any setup and lighting condition.
                        </div>
                        <div class="price-div"><span class="price">PHP5,710.00</span>(55% off)</div>
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