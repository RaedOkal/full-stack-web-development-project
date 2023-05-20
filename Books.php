<?php
include "databaseconn.php";

if (isset($_POST["submit"])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $category = $_POST['category'];

    // Handling file upload
    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];
    $image_path = "images/" . $image;
    move_uploaded_file($temp_image, $image_path);






    $sql = "INSERT INTO books (title, image, price, description, author, category) VALUES ('$title', '$image_path', '$price', '$description', '$author', '$category')";
    

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:displayB.php');
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
    <title>update</title>
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

  .link{
  margin-left: 70%;
  margin-top: 0.6%;
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


<a class="link" href="displayB.php">All Books</a>
    <form class="form" method="post"  enctype="multipart/form-data">

        <label for="name">Title:</label>
        <input class="r-name" type="text" id="name" name="title" placeholder=" Title" required >

       

       <input type="file" name="image" id="image" accept="image/*" placeholder="No image selected" required>


       <br>
        <br>
        <label for="name">Price:</label>
       <input class="r-name" type="text" id="name" name="price" placeholder=" Price" required >
        <br>
        
        
        <label for="d">Description:</label>
        <textarea name="description" id="d" cols="45" rows="2" required ></textarea>
        <br>
        
        <label for="name">Author:</label>
       <input class="r-name" type="text" id="name" name="author" placeholder="--SELECT--" required > 
        <br>
        <label for="name">Category:</label>
       <input class="r-name" type="text" id="name" name="category" placeholder="--SELECT" required >

        <br>
        <input id="sidlink" type="submit" name="submit" value="ADD">
    </form>
</body>
</html>