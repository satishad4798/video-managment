<?php
include("config.php");

$rate = $_POST['rating'];
$id = $_POST['userid'];
// $rate=43;
// $id=3;
echo $id;
echo "<br>";  


   $query = "UPDATE `videos` SET `rating` = $rate WHERE `videos`.`id` =$id; ";
   echo "<br>".$query;
              mysqli_query($con,$query);
              echo "Upload rating.";

              // header('location:video.php');


?>