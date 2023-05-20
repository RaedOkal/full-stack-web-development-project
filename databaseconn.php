
<?php
               

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bookstoredb';

// connect using the info above.
$conn = mysqli_connect(hostname:$DATABASE_HOST, 
                      username:$DATABASE_USER, 
                      password:$DATABASE_PASS,  
                      database:$DATABASE_NAME);

//// Check connection
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}