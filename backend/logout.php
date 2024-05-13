<?php
    session_start();
    unset($_SESSION["acc_id"]);
    unset($_SESSION["item_qnty"]);
    header("Location: ../index.php");
?>