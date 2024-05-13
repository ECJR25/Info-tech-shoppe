<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php require_once("../backend/connection.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/header.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="con">
            <div class="left-row">
            <a href="../index.php" class="a-js"><h1>Info Tech Shoppe</h1></a>
            </div>

            <div class="right-row">
                <a href="store.php" class="a-js"><div>Store</div></a>
                <a href="about.php" class="a-js"><div>About</div></a>
                <a href="
                <?php
                    if(!empty($_SESSION["acc_id"])){
                        echo "./cart.php";
                    }else{
                        echo "./login.php";
                    }
                ?>
                " class="a-js">
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
                    if(!empty($_SESSION["acc_id"]))
                    {
                        echo "
                        <div class='profile-logIn'>
                            <a href='./profile.php' class='a-js'>
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
                        <a href='./login.php' class='a-js profile-logIn'>
                            <i class='fa-solid fa-user fa-xl' style='color: rgb(96, 96, 96);'></i>
                        </a>
                        ";
                    }
                ?>
            </div>
        </div>
    </header>

    <script src="../scripts/header.js"></script>
</body>
</html>