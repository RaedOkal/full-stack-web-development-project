<?php
include "databaseconn.php";

if (isset($_GET["deleteid"])) {
    $id = $_GET["deleteid"];
    $sql = "DELETE FROM carts where id=$id ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
       header('location:cart.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>