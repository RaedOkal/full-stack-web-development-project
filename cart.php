<?php
include "databaseconn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="css/cart.css">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="images/bootstrap-icons-1.10.3/bootstrap-icons.css">
    <title>Your Cart</title>
</head>
<body>
    <div class="topnav">
        <p>Book Store</p>
        <a class="main hd" href="home.php" target="_blank">Home</a>
        <a class="main l" href="cart.php" target="_blank">Cart</a>
        <a class="main r" href="signout.php" target="_blank">Logout</a>
    </div>

    <h1>Your Cart <i class="bi bi-cart-dash-fill"></i></h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Book</th>
                <th>Price</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalPrice = 0; // Variable to store the total price

            $sql = "SELECT * FROM carts ";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];

                    $totalPrice += $price; // Calculate the total price

                    echo '
                    <tr>
                        <td>' . $id . '</td>
                        <td>' . $title . '</td>
                        <td>' . $price . '</td>
                        <td><button  class="delete-btn"><a id="cart" href="deletecart.php? deleteid=' . $id . '"> <i class="bi bi-trash3-fill"></i> </a></button></td>
                   
                    </tr>
                    ';
                }
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Total</td>
                <td>$<?php echo number_format($totalPrice, 2); ?></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
    <br>
    <br>
</body>
</html>

<script src="js/script.js"></script>