<?php

    require_once("./connection.php");

    if(isset($_POST["name"]) && isset($_POST["itemName"]) && isset($_POST["message"]))
    {
        $review_name = $_POST["name"];
        $review_item_name = $_POST["itemName"];
        $review_message = $_POST["message"];
        $review_date = date('Y-m-d');

        $query = "INSERT INTO tbl_reviews 
        (review_name, review_item_name, review_message, review_date)
        VALUES(?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $review_name, $review_item_name, $review_message, $review_date);
        $stmt->execute();
    }

?>