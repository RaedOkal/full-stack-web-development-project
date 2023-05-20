<?php
include "databaseconn.php";

$id = $_GET['id']; //to accses my prameter 

//to fetch and desplay the old data
$sql = "SELECT * FROM books where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد شراء المنتج</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>



input{
    display: none;
}

 form {

    margin-top: 15%;
   
  }

  button {
  display: inline-block;
  padding: 10px 20px;
  background-color:#3e9041; /* Orange */
  color: white;
  font-size: 16px;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
}

  a {
  margin-top: 15px;
  display: inline-block;
  padding: 10px 20px;
  background-color: #484747;
  color: white;
  font-size: 16px;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
}

.main{
    margin-top: 15px;
    width: 30%;
    padding:20px;
    box-shadow: 1px 1px 10px silver;
}


</style>
</head>

<body>

<center>
        <div class="main">
            <form  method="post" action="addtocart.php" enctype="multipart/form-data" >
                <h3>Are you sure you want this product to be added to your cart </h3>
                <br>

                <input type="text" name="id" value='<?php echo $row['id']?>'>
                <input type="text" name="title" value='<?php echo $row['title']?>'>
                <input type="text" name="price" value='<?php echo $row['price']?>'>
                
                
                <a href="home.php">Back</a>
                
                <button name="submit" type="submit" >confirmed</button>
                
                

            </form>
        </div>


</center>
   





</body>

</html>