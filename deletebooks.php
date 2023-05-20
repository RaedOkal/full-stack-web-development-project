<?php
include "databaseconn.php";

if (isset($_GET["deleteid"])) {
    $id = $_GET["deleteid"];
    $sql = "DELETE FROM books where id=$id ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
       header('location:displayB.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>