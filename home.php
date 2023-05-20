
<?php include "databaseconn.php";?>


<?php
//checks to see if the user session variable is set.
 //If it is not set, thats mean he is not loged in yet.

session_start();
if (!isset($_SESSION["user"])) {

      
   
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">-->

<!-- bosstrab icons-->
<link rel="stylesheet" href="images/bootstrap-icons-1.10.3/bootstrap-icons.css">
<!-- bosstrab خط اكبر وتناسق افضل-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<!--at last to override it-->
<link rel="stylesheet" href="css/style.css">   

<title>Home</title>


    
</head>


<body>



    
    <div class="topnav">
        <p>Book Store</p>
        


        <?php
        // Check if the user is logged in or not
        if(isset($_SESSION['user'])) {
          // User is logged in, show Home, Cart, and Logout links
          echo '<a class="main hd" href="home.php" target="_blank">Home</a>';
          echo '<a class="main l" href="cart.php" target="_blank">Cart</a>';
          echo '<a class="main r" href="signout.php" target="_blank">Logout</a>';
      } else {
          // User is not logged in, show Home, Login, and Register links
          echo '<a class="main hd" href="home.php" target="_blank">Home</a>';
          echo '<a class="main l" href="login.php" target="_blank">Login</a>';
          echo '<a class="main r" href="register.php" target="_blank">Register</a>';
      }
        ?>
      
 

    
        </div>




<div class="search-container" >

<h1>Search about any Book you need </h1>

<form class="example" action="search.php" method="get">
  <input class="h-search" type="text" name="search" placeholder="Search..." aria-hidden="true">
  <button class="h-b" type="submit" name="submit"><i class="bi bi-search"></i></button>
</form>

</div>













<div class="about">

    <h2>About Our Library</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rerum laborum, officiis nemo quae debitis totam ab cumque quibusdam voluptatem eligendi. Velit, <br>non dignissimos ut commodi reprehenderit error quis distinctio.</p>


</div>


<div class="category-section">
    
    <h2>Explore our latest categories</h2>
    <br>


   <!-- <div class="main-box sdiv1"><h3>name</h3></div>
    <div class="main-box sdiv2"><h3>name</h3></div>
    <div class="main-box sdiv3"><h3>name</h3></div>-->



    <?php


    // Retrieve the latest three categories from your database
$sql = "SELECT name FROM categories ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $sql);

// Check if any categories were retrieved
if (mysqli_num_rows($result) > 0) {
    // Loop through each category and display the name in the corresponding div
    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        echo '<div class="main-box sdiv'.$i.'"><h3>'.$name.'</h3></div>';
        $i++;
    }
} else {
    echo "No categories found.";
}
    
    ?>


  </div>
  

  

<!--df-->




<div class="product">
    <h2>Explore our latest Books</h2>

    <div class="book-container">
        <?php
        $sql = "SELECT * FROM books ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $count = 0; // Variable to track the number of books displayed
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $image_path = $row['image'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                $category = $row["category"];

                // Start a new line after every third book
                if ($count % 3 === 0) {
                    echo '<div class="book-row">';
                }

                echo '
                <div class="book-details">
                    <img width="300" height="300" src="' . $image_path . '" />
                    <h1>' . $title . '</h1>
                    <p>' . $description . '</p>
                    <h3>Price: <span>' . $price . '</span></h3>
                    <p>' . $category . '</p>
                    <br>
                    <br>';

                // Check if the user is logged in or not
                if (isset($_SESSION['user'])) {
                    // User is logged in, show add to Cart
                    echo '
                      
                    <a href="validationcart.php? id=' . $id . '"><i class="bi bi-cart-dash-fill"></i>Add</a>     
                ';
               
                
                } else {
                    // User is not logged in, show Login
                    echo '<form>
                    <a href="login.php" target="_self">Login</a>
                  </form>';
                }

                echo '</div>';

                // Close the row after every third book
                if ($count % 3 === 2) {
                    echo '</div>';
                }

                $count++;
            }

            // Close the row if the last row does not contain three books
            if ($count % 3 !== 0) {
                echo '</div>';
            }
        }
        ?>
    </div>
</div>













      
    

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
  <div class="copyright  text-center">
    <p>Copyright &copy; 2023 <span style="color:crimson ;"> Raed Okal.</span> All rights reserved.</p>
  </div>
</footer>
  




</body>
</html>