<?php
require "./core/db.php";

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
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <script
      src="https://kit.fontawesome.com/bb308353d9.js"
      crossorigin="anonymous">
    </script>
  
  </head>
 
<body> 
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
                                        <button class="btn btn-outline-primary" type="submit">Search</button>
                                    </form>
                        </div>
                    </div>
                </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">

                        <div class="tabelletext">ID-Übersicht Shops:</div>

                            <ul class="list-group">
                                <li class="list-group-item">1: Steam</li>
                                <li class="list-group-item">2. EpicGames</li>
                                <li class="list-group-item">3. Rockstar Games</li>
                                <li class="list-group-item">4. Uplay</li>
                                <li class="list-group-item">5. Laden</li>
                                <li class="list-group-item">6. Microsoft Store</li>
                                <li class="list-group-item">7. Eigener Shop</li>
                            </ul>
                        </div>
                    
                
                        </div>
            <div class="col-6">
                <form method="POST" action="./savegame.php">
                    <div class="adgame">
                        
                        <div class="addgametext">Datenbank eintrag:</div>
                    
                        
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Name:" name="name" aria-label="name">
                        </div>
            
                        <div class="input-group mb-3">
                            <select class="form-select" name="publisher">
                            <?php 
                            
                            $sql = 'SELECT * FROM publisher';
                            $result = mysqli_query($db, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while($publisher = mysqli_fetch_assoc($result)) {
                                ?>	
                                    
                                <option value="<?php echo $publisher['id'] ?>"><?php echo $publisher['name'] ?></option>
                                <?php
                                }
                            }
                            ?>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="date" class="form-control" placeholder="Release:" name="release" aria-label="release">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Shop-ID:" name="shop" aria-label="shop" list="shops">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Plattform:" name="plattform" aria-label="plattform" list="plattformen">
                                <datalist id="plattformen">
                                <option value="PC">
                                <option value="Play Station 4">
                                <option value="Play Station 3">
                                <option value="Xbox 360">
                                <option value="Xbox One">
                                <option value="Nintendo Switch">
                                </datalist>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="ImgLink:" name="imglink" aria-label="ImgLink">
                        </div>

                        <div>
                        <input type="submit" value="Speichern" class="btn btn-outline-primary" value="Speichern"/>
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