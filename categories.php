
<?php
include "databaseconn.php";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];

    $sql = "INSERT INTO categories (name) VALUES ('$name')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:displaycat.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<?php include"templet.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>

       <!-- bosstrab -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
    <!--A few modifications to the style-->
    <style>
 
  .form {
    margin: 0 auto;
    margin-top: 0.5%;
    width: 70%;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: none;
  }


  .link {
  margin-left: 70%;
  margin-top: 13%;
  display: inline-block;
  padding: 10px 20px;
  border: 1px solid #ccc;
  color: #000;
  font-size: 16px;
  background-color: transparent;
  text-decoration: none;
  cursor: pointer;
}

.link:hover {
    background-color: rgb(193, 188, 188);
}






</style>

</head>

<body>





<!--<a id="sidlink" class="link" href="#" onclick="loadContent('displaycat.php')">All Categories</a>-->

<a class="link" href="displaycat.php" target="_self">All Categories</a>
    <form class="form" method="post">

        <label for="name">Name:</label>
        <input class="r-name" type="text" id="name" name="name" placeholder=" Name" required>
        <br>
        <input type="submit" name="submit" value="ADD">

</body>
</html>