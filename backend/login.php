<?php
require_once("./connection.php");
session_start();

if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM tbl_account WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
        $acc_id = $data["acc_id"];
        $hashedPassword = $data["password"];

        if(password_verify($password, $hashedPassword))
        {
            echo "success";
            $_SESSION["acc_id"] = $data["acc_id"];
        }else{
            echo "invalid";
        }
    }else{
        echo "not found";
    }
}

?>