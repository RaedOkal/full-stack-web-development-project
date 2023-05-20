<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>

    
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




    <h1>Create new account</h1>
    <form id="form" action="Reg.php" method="post">

      <label  for="name">Name:</label>
      <input class="r-name" type="text" id="name" name="name" placeholder=" Name" required>
      <br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder=" Email" required>
      <br>
      <label for="url">URL:</label>
      <input type="url" id="url" name="url" placeholder=" https://example.com" required>
      <br>
      <label for="age">Age:</label> 
      <input type="number" id="age" name="age" min=18  max=100 placeholder=" 18" required>
      <br>

      <label for="age">Phone Number:</label> 
      <input type="phone number" id="phone number" name="phone" placeholder=" Phone Number" required>
      <br>

      <label for="url">Country:</label>
      <input type="country" id="country" name="country" placeholder=" Country" required>
      <br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder=" Password" required>
      <br>
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" placeholder=" Confirm Password" required>
      <br>
      <input type="submit" name="submit" value="Register">

    </form>
  </body>
</html>
