<?php
define('DB_SERVER', 'localhost'); //location where db is hosted.
define('DB_USERNAME', 'root'); //Database username
define('DB_PASSWORD', '');  //insert you database password here. 
define('DB_NAME', 'phpprojects'); //replace with your database name. 

#Connec to DB
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check Connection
if ($conn === false) {
    die('ERROR: Could not connect.' . mysqli_connect_error());
}

?>