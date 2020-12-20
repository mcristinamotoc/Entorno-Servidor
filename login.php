<?php 
// Connection database
 $conn= new mysqli("localhost","root", "");

   
 if($conn->connect_errno){
      echo "Error connecting MySQL:(". $conn->connect_errno.")";
 }
 else{
 $conn->select_db("M07");
      
 //Variables
 $email=$_POST["email"];
 $password=$_POST["password"];

 //User and password query

 $result="SELECT EMAIL PASSWORD FROM LIST_CUSTOMER
 WHERE EMAIL='$email' and PASSWORD='$password'";
 if($query= $conn->query($result)){
 $row=$query->fetch_array(); 
 $nr =$query->num_rows; 

 //If the user exists he will be redirected to the List Customer
 if($nr == 1){ 
   header ("Location:list_customer.php"); 
 }

 //If the user or password is incorrect, error message
 else if($nr <= 0) { 
 echo "<div style ='color:red' <b>The user name or password is incorrect. Try again.</b> </div>";
 }  
 }
 else{
 echo $conn->error;  
 }
}  
?>