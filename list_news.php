<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>LIST NEWS</title>
</head>

<body>
    <!-- Title -->
    <div class="jumbotron text-center p-3 my-3 border">
        <h2 class="text-primary">List News</h2>
    </div>
    <?php
require "connection.php";?>
    <br>

    <!-- Form to create a new News. Connect with the form_news.php page -->
    <form role="form" method="post" action="form_news.php">
    <input type="hidden" name="action" value="new">
        <button name ="id" type="submit" class="btn btn-primary ml-5 mb-4">New News</button>
    </form>

    <?php
    $conn=create_connection();

    //Show all the News
    $result =mysqli_query($conn, " SELECT*FROM LIST_NEWS; ");
    if(!$result){
        echo "Error query:" . mysqli_error($conn);
    }else{?>
    <table class="table table-primary d-flex align-content-start my-2 ml-5 ">
        <tr>
            <td class="p-3 border" width="100">ID</td>
            <td class="p-3 border" width="400">Title</td>
            <td class="p-3 border" width="200">Author</td>
            <td class="p-3 border" width="150" >Date</td>
        </tr>
    </table>
    <?php
    // Browse and Show the news records
  while($row=$result->fetch_assoc()){?>
    <table>
        <tr>
            <td>
                <table class="d-flex align-content-around my-2 pl-5 pr-2">
                    <tr>
                        <td class="p-2 border" width="100"><?php echo $row["ID"]?></td>
                        <td class="p-2 border" width="400"><?php echo $row["TITLE"]?></td>
                        <td class="p-2 border" width="200"><?php echo $row["AUTHOR"]?></td>
                        <td class="p-2 border" width="150"><?php echo $row["DATE"]?></td>
                    </tr>
                </table>
                <td>
            <!-- The button connects with the form_news.php to like a news-->
                <form method="post" action="form_news.php">
                    <button name ="action" value="like" type="submit" value="<?php echo $row ['LIKE']?>"
                        class="btn btn-primary my-1">LIKE</button>
                </form>
            </td>
            <td>
            <!-- The button connects with the form_news.php to modify a news-->
                <form method="post" action="form_news.php">
                <input name="id" type="hidden" value="<?php echo $row ['ID']?>">
                    <button name ="action" value="modify" type="submit" class="btn btn-primary my-1">Modify</button>

                </form>
            </td>
            <td>
             <!-- The button connects with the form_news.php to delete a customer -->
                <form method="post" action="form_news.php">
                <input name="id" type="hidden" value="<?php echo $row ['ID']?>">
                    <button name="action" value ="delete" type="submit" class="btn btn-primary my-1 mx-1">Delete</button>

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