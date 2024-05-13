<?php 

    require_once("./connection.php");
    session_start();

    if(isset($_POST["itemId"]) && isset($_SESSION["acc_id"]))
    {
        $item_id = $_POST["itemId"];
        $acc_id = $_SESSION["acc_id"];

        $query = "DELETE FROM tbl_cart WHERE item_id = ? AND acc_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $item_id, $acc_id);
        $stmt->execute();
    }

?>