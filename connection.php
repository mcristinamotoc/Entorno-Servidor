<?php
// Exercise 1: Establish a connection to the database 

function create_connection(){
    $conn=mysqli_connect("localhost", "root","","M07");
    if(!$conn){
        echo "Connection error".mysqli_connect_error();
    }
    return $conn;
}

?>