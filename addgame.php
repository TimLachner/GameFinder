<?php
require "./config.php";

?>

<!DOCTYPE html>
<html lang="en">
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GameFinder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="./assets/img/icon.ico"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Rubik&display=swap"
      rel="stylesheet"/>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script
      src="https://kit.fontawesome.com/bb308353d9.js"
      crossorigin="anonymous">
    </script>
  
  </head>
 
<body> 
    <div class="container">
        <div class="row">
            <div class="col">
    
            </div>
            <div class="col-6">
                <form method="POST" action="./checklogin.php">
                    <div class="adgame">
                        

                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="./index.php">GF</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="./adminlogin.php">Login</a>
                                        </li>   
                                    </ul>
                                        <form class="d-flex">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success" type="submit">Search</button>
                                        
                                        
                                        
                                        
                </form>
                
            
            
            
            
            </div>
                        </div>
                    </nav>

                    
                    
                    <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Name:" name="name" aria-label="name">
                        </div>
            
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Publisher:" name="publisher" aria-label="publisher">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Release:" name="release" aria-label="release">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Shop:" name="shop" aria-label="shop">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Plattform:" name="plattform" aria-label="plattform">
                        </div>

                       

                    </div>
                </form>

            </div>
            <div class="col">
            
            </div>
        </div>
    </div>
</body>
 
</html>