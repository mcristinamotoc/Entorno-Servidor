<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>FORM CUSTOMER</title>
</head>

<body>
    <!-- Title -->
    <div class="jumbotron text-center p-3 my-3 border">
        <h2 class="text-primary">Form Customers</h2>
    </div>

    <?php
    require"db_functions.php";

     //Error control
     if(!isset($_POST["action"])){
        echo "Error: Action undefined"?> <br>
    <a href="list_customer.php">Back</a>
    <?php exit();
    }
    if(!isset ($_POST["id"])){
        echo"Error: ID undefined";?> <br>
    <a href="list_customer.php">Back</a>
    <?php exit();
    }?>

<!-- Container -->
    <div class="container" mx-3 my-1> 
    <?php
    echo "Action: " .$_POST["action"]."<br>";
    echo "Id Customer: " .$_POST["id"]."<br>";?>
   </div><?php
   
//Based on the selected action, it calls one function or the other 
switch($_POST["action"]){
    case "new":
        createFormCustomer();
    break;
    case "modify":
        modifyFormCustomer();
    break;
    case "delete";
        deleteFormCustomer();
break;
}
//Show interface with empty fields to create a new client
function createFormCustomer(){?>
    <div class="container p-3 my-3 border">
        <div class="text-primary mx-5"> Add register</div>

        <form action="db_functions.php" method="post">
            <input type="hidden" name="function_name" value="db_create_customer">
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" class="form-control" placeholder="Enter id" name="id">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" placeholder="Enter address" name="address">
            </div>
            <button type="submit" class="btn btn-primary">Accept</button>
        </form>
    </div>
    <?php
}
//Show fields to modify the client.
function modifyFormCustomer(){
    $customer = db_get_customer($_POST['id']);?>
    <div class="container p-3 my-3 border">
        <div class="text-primary mx-5"> Modify register</div>

        <form action="db_functions.php" method="post">
            <input type="hidden" name="function_name" value="db_modify_customer">
            <input type="hidden" name="id" value="<?php echo $customer['ID']?>">
            
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $customer['NAME']?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $customer['EMAIL']?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" value="<?php echo $customer['ADDRESS']?>">
            </div>
            <button type="submit" class="btn btn-primary">Accept</button>
        </form>
    </div>
    <?php
}

//Show fields to delete the client
function deleteFormCustomer(){?>
    <!-- <div class="text-primary mx-5"> Delete register</div> -->
    <form action="db_functions.php" method="post">
        <input type="hidden" name="function_name" value="db_delete_customer">
        <input type="hidden" name="id" value="<?php echo $_POST['id']?>">
        <label class= "lead font-weight-bolder text-danger mx-5" for="isDeleteCustomer">Delete Customer?</label>
        <input class="btn btn-info" type="submit" value="YES">
        <a href="list_customer.php" class="btn btn-info mx-3" role="button">NO</a>
    </form>
    <?php
}?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js "
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js "
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous ">
    </script>
</body>

</html>