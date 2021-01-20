
<?php

// $conn = mysqli_connect("localhost", "root", "", "banking_system");

$conn = mysqli_connect("remotemysql.com", "4ISS3KYSdd", "G7nqbKK27y", "4ISS3KYSdd");

if (!$conn) {
  die("Could not connect to the database due to the following error --> " . mysqli_connect_error());
}

?>
