
<?php
require 'connection.php';

//Switch cases choose functions
if(isset($_POST["function_name"])){
    switch($_POST["function_name"]){
        case"db_create_customer":
            db_create_customer();
        break;
        case "db_modify_customer":
            db_modify_customer();
        break;
        case"db_delete_customer":
            db_delete_customer();
        break;
    }
}
//Function Create new customer 
function db_create_customer(){
    $conn = create_connection();
    $query = "INSERT INTO LIST_CUSTOMER ( ID, NAME, EMAIL, ADDRESS ) VALUES (";
    $query .="'" . $_POST['id'] . "', ";
    $query .="'" . $_POST['name'] . "' , ";
    $query .="'" . $_POST['email'] . "' , ";
    $query .="'" . $_POST['address'] . "'); ";

    $result = mysqli_query($conn, $query);
    if($result){
        echo "Added Client";?>
        <a href="list_customer.php">List Customer</a>
        <?php
    }else{
        echo "Error query:" . mysqli_error($conn);
    }
    //Closing connection database
$conn->close();

}
//Function Modify Customer
function db_modify_customer(){
    $conn = create_connection();
    $query = "UPDATE LIST_CUSTOMER ";
    $query .= "SET ";
    $query .= " NAME ='" . $_POST['name']. "',";
    $query .= " EMAIL ='" . $_POST['email']. "',";
    $query .= " ADDRESS ='" . $_POST['address']. "' ";
    $query .= "WHERE ID='" . $_POST['id']."'";


    $result = mysqli_query($conn, $query);
   echo $query;
  
    if($result){
        echo "Modified Customer";?>
        <a href="list_customer.php">List Customer</a>
        <?php
    }else{
        echo "Error query:".mysqli_error($conn);
    }
    //Closing connection database
    $conn->close();
}

//Function Delete Customer
function db_delete_customer(){
    $conn = create_connection();
    $query = "DELETE FROM LIST_CUSTOMER ";
    $query .= "WHERE ID={$_POST['id']}";

    $result = mysqli_query($conn, $query);
    echo $query;
   
    if($result){
        echo "Customer deleted";?>
        <a href ="list_customer.php">List Customer</a> <br>
        <?php
    }else{
        echo "Error query:" .mysqli_error($conn);
    }
//Closing connection database
    $conn->close();
}

//Function Select Customer From Db

function db_get_customer($id){
    $conn = create_connection();
    $query = "SELECT * FROM LIST_CUSTOMER WHERE ID= '$id'";
    $result = mysqli_query($conn, $query);
    $row = NULL;
    
    if($result){
        return $row = $result->fetch_assoc();
    }else{
        echo "Error query:" . mysqli_error($conn);
    }
    //Closing connection database
    $conn->close();  
 }?>


