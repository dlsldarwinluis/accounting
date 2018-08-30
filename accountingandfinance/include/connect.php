<?php
$con = mysqli_connect("localhost","root","","it3ahcts");

// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>