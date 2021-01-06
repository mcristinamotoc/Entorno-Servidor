<?php
require 'connection.php';

//Switch cases choose functions
if(isset($_POST["function_name"])){
    switch($_POST["function_name"]){
        case"db_create_news":
            db_create_news();
        break;
        case "db_like_news";
        db_like_News();
    break;
        case "db_modify_news":
            db_modify_news();
        break;
        case"db_delete_news":
            db_delete_news();
        break;
    }
}
//Function Create new News 
function db_create_news(){
    $conn = create_connection();
    $query = "INSERT INTO LIST_NEWS ( ID, TITLE, AUTHOR, DATE ) VALUES (";
    $query .="'" . $_POST['id'] . "', ";
    $query .="'" . $_POST['title'] . "' , ";
    $query .="'" . $_POST['author'] . "' , ";
    $query .="'" . $_POST['date'] . "'); ";

    $result = mysqli_query($conn, $query);
    if($result){
        echo "Added News";?>
        <a href="list_news.php">List News</a>
        <?php
    }else{
        echo "Error query:" . mysqli_error($conn);
    }
    //Closing connection database
$conn->close();

}
//Function Modify News
function db_modify_news(){
    $conn = create_connection();
    $query = "UPDATE LIST_NEWS ";
    $query .= "SET ";
    $query .= " TITLE = '".$_POST["title"]."',";
    $query .= " AUTHOR = '".$_POST["author"]."',";
    $query .= " DATE= '".$_POST["date"]. "' ";
    $query .= "WHERE ID='" . $_POST['id']."'";

    $result = mysqli_query($conn, $query);
   echo $query;
    if($result){
        echo "Modified News";?>
        <a href="list_news.php">List News</a>
        <?php
    }else{
        echo "Error query:".mysqli_error($conn);
    }
    //Closing connection database
    $conn->close();
}
// Function Delete News
function db_delete_news(){
    $conn = create_connection();
    $query = "DELETE FROM LIST_NEWS ";
    $query .= "WHERE ID=" . $_POST['id'];

    $result = mysqli_query($conn, $query);
    echo $query;
    if($result){
        echo "News deleted";?>
        <a href ="list_news.php">List News</a> <br>
        <?php
    }else{
        echo "Error query:" .mysqli_error($conn);
    }
//Closing connection database
    $conn->close();
}

//Function Select News From Db

function db_get_news($id){
    $conn = create_connection();
    $query = "SELECT * FROM LIST_NEWS WHERE ID= " . $id . "";
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


