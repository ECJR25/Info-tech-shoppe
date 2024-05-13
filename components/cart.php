<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/gen.css">
    <link rel="stylesheet" href="../style/cart.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Cart</title>
</head>
<body>
    
    <?php include("header.php"); ?>

    <div class="center">
        <div class="h1-div">
            <h1>Cart</h1>
        </div>
    </div>
    <?php 
        $query = "SELECT * FROM tbl_cart WHERE acc_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $_SESSION["acc_id"]);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
    ?>
    <main>
        <div class="center">
            <div class="div">
                <div class="left-con">
                    <div class="cart-con">
                        <table class="styled-table">
                            <thead>
                                <th></th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th></th>
                            </thead>

                            <tbody>
                                <?php
                                    $acc_id = $_SESSION["acc_id"];
                                    $query = "SELECT * FROM tbl_cart WHERE acc_id = ?";
                                    $stmt = $conn->prepare($query);
                                    $stmt->bind_param("i", $acc_id);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $total = 0;
                                    $subTotal = 0;
                                    while($data = $result->fetch_assoc()){        
                                        $total = $total + (intval($data["item_price"]) * intval($data["item_qnty"]));
                                        $subTotal = intval($data["item_price"]) * intval($data["item_qnty"]);      
                                ?>
                                <tr>
                                    <td class="img-con"><img src="<?php echo $data["item_src"]; ?>" alt=""></td>
                                    <td><?php echo $data["item_name"]; ?></td>
                                    <td>P<span class="price-js"><?php echo $data["item_price"]; ?></span>.00</td>
                                    <td>
                                        <div class="qnty-td">
                                            <div class="minus-btn">-</div>
                                            <div class="qnty-js"><input type="text" class="qnty-input" min="1" value="<?php echo $data["item_qnty"]; ?>"></div>
                                            <div class="add-btn">+</div>
                                        </div>
                                    </td>
                                    <td class="total-price-js">P<span class="subtotal-js"><?php echo $subTotal; ?></span>.00</td>
                                    <td class="delete-js" value="<?php echo $data["item_id"]; ?>"><i class="fa-solid fa-x"></i></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="right-con">
                    <div class="total-con">
                        <h1>Cart totals</h1>
                        <div class="price-div">
                            <div class="text">
                                <div>Subtotal:</div>
                                <span class="text-price">P<?php echo $total; ?>.00</span>
                            </div>
                            <div class="text">
                                <div>Total:</div>
                                <span class="text-total">P<?php echo $total; ?>.00</span>
                            </div>
                            <!-- <div class="text">
                                <div>Discount: </div>
                                <span class="discount">0</span>
                            </div> -->
                            <div class="voucher-div">
                                <!-- <div class="flex">
                                    <button class="voucher-btn"><i class="fa-solid fa-chevron-right" style="color: #404040;"></i></button>
                                    <input type="text" class="voucher" placeholder="Enter your voucher">
                                </div> -->
                            </div>
                            <button class="proceed-btn">Proceed to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php }else{
    ?>
        <div class="center">
            <div class="no-item">
                <h2>No Item in your cart</h2>
                <a href="./store.php"><button>Shop now <i class="fa-solid fa-arrow-right" style="color: #0d0d0d;"></i></button></a>
            </div>
        </div>
    <?php } ?>

    <?php include("./footer.php"); ?>
    <script src="../scripts/quantity.js"></script>
    <script src="../scripts/deleteItem.js"></script>
</body>
</html>