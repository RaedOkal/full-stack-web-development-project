<?php
session_start();
session_destroy();
header("Location: login.php");//when user logesout he will go to login page
?>