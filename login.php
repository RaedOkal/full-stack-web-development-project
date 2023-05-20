




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- bosstrab خط اكبر وتناسق افضل-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div class="topnav">
    <p>Book Store</p>
    
    <a class="main hd" href="home.php" target="_blank">Home</a> 
    <a class="main l"  href="login.php" target="_blank">Login</a>
    <a class="main  r"  href="register.php" target="_blank">Register</a>
    </div>

      
    <h1>Login to your account</h1>
    <form id="form" action="" method="POST">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"  placeholder=" Email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder=" Password" required>
      <br>
      <input type="submit" name="login" value="Login">
    </form>




    <?php
          

            // Check if the login POST variable is set when prees login
            if (isset($_POST["login"])) {

            // Get the email and password from the POST variables
               $email = $_POST["email"];
               $password = $_POST["password"];

             // Connect to the database
               require_once "databaseconn.php";

             // Select the user from the database whose email address matches the email address that was submitted in the POST request
               $sql = "SELECT * FROM accounts WHERE email = '$email'";
               $result = mysqli_query($conn, $sql);

               //Fetch "get" the user from the database
               $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

               // Check if the user is found
               if ($user) {
                   if (password_verify($password, $user["password"])) {
                       // Check if email address contains the word "admin"
                       if (strpos($email, 'admin') !== false) {
                           // Redirect to dashboard page
                           header("Location: dashboard.php");
                       } else {
                           // Redirect to home page
                           header("Location: home.php");
                       }
                       //after he login he will strt his session 
                       session_start();
                       $_SESSION["user"] = "yes";
                       die();//exit fun()
                   }else{
                       echo "<div class='alert alert-danger'>Password does not match</div>";
                   }
               }else{
                   echo "<div class='alert alert-danger'>Email does not match</div>";
               }
            }
            ?>
    
  </body>







</html>
