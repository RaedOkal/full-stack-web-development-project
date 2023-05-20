<?php
include "databaseconn.php";
?>

<?php include"templet.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/cart.css">

  <!-- bosstrab icons-->
  <link rel="stylesheet" href="images/bootstrap-icons-1.10.3/bootstrap-icons.css">
  <title>display categories</title>
 

  <style>
    table {
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

   


  <!--In the "displaycat.php" page,
    update the link for the "ADD Categories" 
    button to include a JavaScript function that will load the content of the
     "categories.php" page into the 
   main content area of the dashboard when the button is clicked. 
   Replace the link with the following code:-->
  <!--<a id="sidlink" class="link" href="#" onclick="loadContent('categories.php')">ADD Categories</a>-->


  <a class="link" href="categories.php" target="_self">ADD Categories</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>


    <tbody>

      <?php

      $sql = "SELECT * FROM categories ";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['name'];


          echo '      
            <tr>
            <td>' . $id . '</td>
            <td>' . $name . '</td>

            <td>
           
            <button class="btn btn-primary delete-btn " style="background-color:blue; "><a href="update.php?  updateid=' . $id . ' " style="color: white;"><i class="bi bi-pencil-square"></i></a></button>

           
           <button class="delete-btn"><a href="delete.php? deleteid=' . $id . '" style="color: white;"><i class="bi bi-trash2-fill   "></i></a></button>
             </td>
          
            </tr>  ';
        }
      }


    


      ?>


    </tbody>



  </table>




</body>

</html>