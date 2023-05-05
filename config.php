
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$port ="3306";
$dbname="hotel";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


?>