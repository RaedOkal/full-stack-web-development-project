
<?php 
include "databaseconn.php";




if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $price = $_POST["price"];
    
   


    
 
    


    $sql ="INSERT INTO carts (title, price) VALUES ('$title','$price')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:cart.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

