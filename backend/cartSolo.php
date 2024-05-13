<?php 

    require_once("./connection.php");
    session_start();

    if(isset($_POST["itemId"]) && isset($_POST["itemName"]) 
    && isset($_POST["itemPrice"]) && isset($_POST["itemSrc"])
    && isset($_POST["qnty"]))
    {
        $item_id = $_POST["itemId"];
        $item_name = $_POST["itemName"];
        $item_price = $_POST["itemPrice"];
        $item_src = $_POST["itemSrc"];
        $acc_id = $_SESSION["acc_id"];
        $item_qnty = $_POST["qnty"];
        
        $query = "SELECT * FROM tbl_cart WHERE item_id = ? AND acc_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $item_id, $acc_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0)
        {
            $data = $result->fetch_assoc();
            $qnty = intval($data["item_qnty"]);
            $qnty += intval($item_qnty);
            $query = "UPDATE tbl_cart SET item_qnty = ? WHERE acc_id = ? AND item_id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("iii", $qnty, $acc_id, $item_id);
            $stmt->execute();
            echo "existed";
        }else{
            $query = "INSERT INTO tbl_cart(item_qnty, item_id, acc_id, item_name, item_price, item_src)
            VALUES(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("iiisis", $item_qnty, $item_id, $acc_id, $item_name, $item_price, $item_src);
            $stmt->execute();

            $query = "SELECT * FROM tbl_cart WHERE acc_id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i", $acc_id);
            $stmt->execute();
            $result = $stmt->get_result();
            echo $result->num_rows;
        }

    }

?>