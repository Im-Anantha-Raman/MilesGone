<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous" ></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css" >
    </head>
    <body>
        <!-- Nav bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-project">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ulakam</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Account Settings</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="row p-2">
                <div class="col-md-10 offset-md-2">
                    <div class="card">
                        <div class="card-header primary">
                            <h2>Add Location</h2>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form  class="row justify-content-center" method="post" action="../php-firebase/action.php" enctype="multipart/form-data">
                                    <div class="col-md-6 form-group m-2">
                                        <input type="text" name="name"class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6 form-group m-2">
                                        <input type="text" name="location"class="form-control" placeholder="Location" required>
                                    </div>
                                    <div class="col-md-6 form-group m-2">
                                        <input type="text" name="state"class="form-control" placeholder="State" required>
                                    </div>
                                    <div class="col-md-6 form-group m-2">
                                        <input type="text" name="country"class="form-control" placeholder="Country" required>
                                    </div>
                                    <div class="col-md-6 form-group m-2">
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 form-group m-2 text-center">
                                        <button class="btn btn-success" type="submit" name="add-loc">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
