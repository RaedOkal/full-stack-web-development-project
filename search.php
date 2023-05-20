<?php

include "databaseconn.php";

// Retrieve the search term from the URL parameter
$searchTerm = $_GET['search'];

// Perform the database query
$sql = "SELECT * FROM books WHERE title LIKE '%$searchTerm%'";
$result = mysqli_query($conn, $sql);

// Check if any results are found
if (mysqli_num_rows($result) > 0) {
  // Loop through the results and display them
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<h3>' . $row['title'] . '</h3>';
    echo '<p>' . $row['description'] . '</p>';
    echo '<img src="' . $row['image'] . '" alt="Book Image">';
    // Add any other relevant book information
  }
} else {
  echo 'No results found.';
}

// Close the database connection
mysqli_close($conn);
?>
