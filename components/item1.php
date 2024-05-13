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
    <title>Razer x *A Bathing Ape® Opus</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="1">
                    <div class="img-con">
                        <img src="../products/razer headset.jpg" alt="">
                    </div>
                    <div class="right-con">
                      
                        <h1 class="name-js">Razer x *A Bathing Ape® Opus</h1>
                        <div class="description">
                        Wireless THX® Certified Headphones with Advanced Active Noise Cancellation
                        </div>
                        <div class="price-div"><span class="price">PHP2000.00</span>(46% off)</div>
                        <div class="sub-descript">
                            <li>THX® Certified Headphones</li>
                            <li>Advanced Active Noise Cancellation (Anc) Technology</li>
                            <li>Bluetooth and 3.5 mm connections</li>
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