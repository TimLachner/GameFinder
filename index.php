<?php
require "./core/db.php";

$sql = 'SELECT game.*, publisher.name as publisherName, shops.name as shopsName FROM game LEFT JOIN publisher ON game.idpublisher = publisher.id LEFT JOIN shops ON game.idshop = shops.id;';
$result = mysqli_query($db, $sql);

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


<div class="wrapper">

	<h2><strong>All Games<span>( 27 )</span></strong></h2>

	<div class="cards">

<?php 
  if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
?>	
	
	<figure class="card">

			<img src="<?= $row["imglink"] ?>" />

			<figcaption><?= $row["gamename"] ?></figcaption>

		</figure>

<?php
    }
 } else {
    echo "0 results";
 }
?>
	</div>

	<h2><strong>What's new?</strong></h2>

	<div class="news">

		<figure class="article">

			<img src="https://mrreiha.keybase.pub/codepen/hover-fx/news1.jpg" />

			<figcaption>

				<h3>New Item</h3>

				<p>

					In today’s update, two heads are better than one, and three heads are better than that, as the all-new Flockheart’s Gamble Arcana item for Ogre Magi makes its grand debut.

				</p>

			</figcaption>

		</figure>

		<figure class="article">

			<img src="https://mrreiha.keybase.pub/codepen/hover-fx/news2.png" />

			<figcaption>

				<h3>Update</h3>

				<p>

					Just in time for Lunar New Year and the Rat’s time in the cyclical place of honor, the Treasure of Unbound Majesty is now available.

				</p>

			</figcaption>

		</figure>

	</div>

</div>


    <button class="topBtn" onclick="topFunction()" id="topBtn">
        <i class="fas fa-arrow-up"></i>
    </button>
        
    <footer class="footer"></footer>
    <script src="script.js"></script>
  
</body>
 
</html>


<?php 
    $db -> close();
?>
