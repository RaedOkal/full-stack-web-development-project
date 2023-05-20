<?php
include "databaseconn.php";

if (isset($_GET["deleteid"])) {
    $id = $_GET["deleteid"];
    $sql = "DELETE FROM categories where id=$id ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
       header('location:displaycat.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>