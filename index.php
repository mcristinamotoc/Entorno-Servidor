<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>INDEX</title>
</head>

<body>
    <!-- Title -->
    <div class="jumbotron text-center">
        <h1 class="text-primary">DAW_M07: Actividad de desarrollo (UF3)</h1>
    </div>

    <!-- NavBar navigation menu -->
    <nav class="navbar navbar-expand-sm justify-content-center navbar-primary">
        <ul class="navbar-nav">

            <!-- List Customer link
            <li class="nav-item mt-2">
                <a href="list_customer.php" class="text-primary ">LIST CUSTOMER </a>
            </li> -->

            <!-- List News link -->
            <li class="nav-item mt-2">
                <a href="body.php" class="text-primary ml-4 ">LATEST NEWS</a>
            </li>
            <!-- List News link -->
            <li class="nav-item mt-2">
                <a href="list_news.php" class="text-primary ml-4 ">LIST NEWS</a>
            </li>

            <!-- Form create new customer link -->
            <li class="nav-item">
                <!-- The button connects with the form to create a new customer.-->
                <form role="form" method="post" action="form_customer.php">
                    <input type="hidden" name="action" value="new">
                    <button name="id" type="submit" class="btn btn-primary ml-4">New Customer</button>
                </form>
            </li>

            <!-- Form create new news link -->
            <li class="nav-item">
                <!-- Form to create a new News. Connect with the form_news.php page -->
                <form role="form" method="post" action="form_news.php">
                    <input type="hidden" name="action" value="new">
                    <button name="id" type="submit" class="btn btn-primary ml-5 mb-4">New News</button>
                </form>
            </li>

            <!-- Form LOGIN link -->
           
            <li class="nav-item">
                <!-- Modal LOGIN-->
                <div class=" form col-sm-4">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary ml-5 mb-4 " data-toggle="modal" data-target="#myModal">
                        Login to Edit List Customer</button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-75 text-primary"> Formulario de Login</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form role="form" method="post" action="login.php">
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form role="form" method="POST" action="login.php" name="loginForm">
                                            <div class="modal-body mx-3">

                                                <div class="text-primary md-form mb-4">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control validate"
                                                        required>
                                                </div>

                                                <div class=" text-primary md-form mb-4">
                                                    <label for="password">Contraseña</label>
                                                    <input type="password" name="password" class="form-control validate"
                                                        required>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Modal footer -->
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="submit" value="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>



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