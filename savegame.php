<?php
require "./core/db.php";

$name = $_POST["name"];
$publisher = $_POST["publisher"];
$release = $_POST["release"];
$shop = $_POST["shop"];
$platform = $_POST["plattform"];
$imglink = $_POST["imglink"];

print_r($_POST);
print_r($db);

$sql = "INSERT INTO game (gamename, release, idpublisher, idshop, platform, imglink) VALUES ('$name','$release', '$publisher', '$shop', '$platform', '$imglink')";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
 } else {
    echo "Error: " . $sql . "" . mysqli_error($db);
 }
 $db->close();

?>