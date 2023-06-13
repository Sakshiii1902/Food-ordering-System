<?php 
   // start Session
   session_start();


   //create constant to store non repeating value
   define('SITEURL', 'http://localhost/food-order/resto.html');
   define('LOCALHOST', 'localhost');  
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_NAME', 'food-order');


   // Execute Query and Data in Database
   $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));  //Database connection
   $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn)); //selecting database
