<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>LIST CUSTOMERS</title>
</head>

<body>
    <!-- Title -->
    <div class="jumbotron text-center p-3 my-3 border">
        <h2 class="text-primary">List Customers</h2>
    </div>

    <?php
    require "connection.php";?>
    <br>

    <!-- The button connects with the form to create a new customer.-->
    <form role="form" method="post" action="form_customer.php">
        <input type="hidden" name="action" value="new">
        <button name="id" type="submit" class="btn btn-primary ml-5 mb-4">New Customer</button>
    </form>

    <?php
    $conn=create_connection();

    //Connect with database LIST_CUSTOMER table
    $result =mysqli_query($conn, " SELECT*FROM LIST_CUSTOMER; ");
    //Error control
    if(!$result){
        echo "Error query:" . mysqli_error($conn);
    }else{?>
    <table class="table table-primary d-flex align-content-start my-2 ml-5 ">
        <tr>
            <td class="p-3 border" width="100">ID</td>
            <td class="p-3 border" width="250">Name</td>
            <td class="p-3 border" width="250">Email</td>
            <td class="p-3 border" width="250">Address</td>
        </tr>
    </table>
    <?php

// Browse and Show the customers records
  while($row=$result->fetch_assoc()){?>
    <table>
        <tr>
            <td>
                <table class="table d-flex justify-content-around my-2 pl-5 pr-2">
                    <tr>
                        <td class="p-2 border" width="100"><?php echo $row["ID"]?></td>
                        <td class="p-2 border" width="250"><?php echo $row["NAME"]?></td>
                        <td class="p-2 border" width="250"><?php echo $row["EMAIL"]?></td>
                        <td class="p-2 border" width="250"><?php echo $row["ADDRESS"]?></td>
                    </tr>
                </table>
            <td>
                <!-- The button connects with the form_customer.php to modify a customer-->
                <form method="post" action="form_customer.php">
                    <input name="id" type="hidden" value="<?php echo $row ['ID']?>">
                    <button name="action" value="modify" type="submit" class="btn btn-primary my-1">Modify</button>

                </form>
            </td>
            <!-- The button connects with the form_customer.php to delete a customer -->
            <td>
                <form method="post" action="form_customer.php">
                    <input name="id" type="hidden" value="<?php echo $row ['ID']?>">
                    <button name="action" value="delete" type="submit" class="btn btn-primary my-1 mx-1">Delete</button>

                </form>
            </td>
        </tr>
    </table>
    <?php
  }
}
      //Closing connection database
      $conn->close();
?>

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