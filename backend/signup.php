<?php
require_once("./connection.php");
session_start();

if(isset($_POST["fName"]) && isset($_POST["lName"])
    && isset($_POST["username"]) && isset($_POST["address"])
    && isset($_POST["contact"]) && isset($_POST["password"]))
    {
        $first_name = $_POST["fName"];
        $middle_name = $_POST["mName"];
        $last_name = $_POST["lName"];
        $username = $_POST["username"];
        $address = $_POST["address"];
        $contact = $_POST["contact"];
        $password = $_POST["password"];

        $query = "SELECT * FROM tbl_account WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $resut = $stmt->get_result();

        if($result->num_rows > 0)
        {
            echo "existed";
        }else{
            $query = "INSERT INTO 
            tbl_account_details(first_name, middle_name, last_name, address, contact)
            VALUES(?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sssss", $first_name, $middle_name, $last_name, $address, $contact);
            $stmt->execute();

            $query = "INSERT INTO 
            tbl_account(username, password)
            VALUES(?, ?)";
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $username, $hashPassword);
            $stmt->execute();
        }
    }


?>