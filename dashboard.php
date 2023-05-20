<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<?php include"templet.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-SYkP+LTnlyrgyi7UJL3nFXpLru1U2ejwBqae5D78v+9LgNT8kF03Sg/rXnWTltYh+O6f7Ls7V8fLj+Y/xbWvzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Dashboard</title>
    <link rel="stylesheet" href="css/cart.css">  


    <style>
  

 

    
  #main-content {
          margin-left: -800px;
          margin-top: 50px;
        }
     
      

      
        
      </style>


</head>
<body>
    







<!-- Main content -->
<div id="main-content">
        <h1>Dashboard</h1>
       
      </div>











</body>
</html>