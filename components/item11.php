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
    <title>JBL Pulse</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="11">
                    <div class="img-con">
                    <img src="../products/JBL Pulse (PhP 3,449).jpg" alt="">
                    </div>
                    <div class="right-con">
                      
                          <!-- (PRODUCT 11) -->
                        <h1 class="name-js">JBL Pulse</h1>
                        <div class="description">
                        Your ultimate audio companion. With its sleek design and impressive sound quality, it transforms any space into a vibrant soundstage. Enjoy your music, movies, and more with crystal-clear JBL sound.
                        </div>
                        <div class="price-div"><span class="price">PHP3,449.00</span>(46% off)</div>
                        <div class="sub-descript">
                            <li>Bluetooth Speaker</li>
                            <li>RGB Lighting</li>
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