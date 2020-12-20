<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>FORM NEWS</title>
</head>

<body>
    <!-- Title -->
    <div class="jumbotron text-center p-3 my-3 border">
        <h2 class="text-primary">Form News</h2>
    </div>

    <?php
    require"db_functions_news.php";

    //Error control
    if(!isset($_POST["action"])){
        echo "Error: Action undefined"?> <br>
    <a href="list_news.php">Back</a>
    <?php exit();
    }
    if(!isset ($_POST["id"])){
        echo"Error: ID undefined";?> <br>
    <a href="list_news.php">Back</a>
    <?php exit();
    }?>

    <!-- Container -->
    <div class="container" mx-3 my-1> 
    <?php
    echo "Action: " .$_POST["action"]."<br>";
    echo "Id News: " .$_POST["id"]."<br>";?>
   </div><?

//Based on the selected action, it calls one function or the other 
switch($_POST["action"]){
    case "new":
        createFormNews();
    break;
    case "like":
        likeNews();
    break;
    case "modify":
        modifyFormNews();
    break;
    case "delete";
        deleteFormNews();
break;
}
//Show empty fields to create the client.
function createFormNews(){?>
    <div class="container p-3 my-3 border">
        <div class="text-primary mx-5"> Add new News</div>

        <form action="db_functions_news.php" method="post">
            <input type="hidden" name="function_name" value="db_create_news">
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" class="form-control" placeholder="Enter id" name="id">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" placeholder="Enter title" name="title">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" placeholder="Enter author" name="author">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" placeholder="Enter date" name="date">
            </div>
            <button type="submit" class="btn btn-primary">Accept</button>
        </form>
    </div>
    <?php
}

//Show fields to modify the client.
function modifyFormNews(){
    $news = db_get_news($_POST['id']);?>
    <div class="container p-3 my-3 border">
        <div class="text-primary mx-5"> Modify News</div>

        <form action="db_functions_news.php" method="post">
            <input type="hidden" name="function_name" value="db_modify_news">
            <input type="hidden" name="id" value="<?php echo $news["id"]?>">
            
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="<?php echo $news["title"]?>">
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" name="author" value="<?php echo $news["author"]?>">
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="text" class="form-control" name="date" value="<?php echo $news["date"]?>">
            </div>
            <button type="submit" class="btn btn-primary">Accept</button>
        </form>
    </div>
    <?php
}

//Show fields to delete the client
function deleteFormNews(){?>
    <!-- <div class="text-primary mx-5"> Delete News</div> -->
    <form action="db_functions_news.php" method="post">
        <input type="hidden" name="function_name" value="db_delete_news">
        <input type="hidden" name="id" value="<?php echo $_POST['id']?>">
        <label class =" lead font-weight-bolder text-danger mx-5"for="isDeleteNews">Delete News?</label>
        <input class="btn btn-info" type="submit" value="YES">
        <a href="list_news.php" class="btn btn-info mx-3" role="button">NO</a>
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