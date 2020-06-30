<?php
include("config.php");

$newtag=$_GET['name'];
$id=$_GET['id'];
$page=$_GET['page'];
echo $newtag;
echo "<br>";



 $fetch = mysqli_query($con, "SELECT * FROM `videos` WHERE id=$id  ");

     while($row = mysqli_fetch_assoc($fetch)){
       $id=$row['id'];
       $tag=$row['tags'];

       echo $id;
       echo "<br>tag:".$tag;
   }
if($tag!="")
$finaltag=$tag.",".$newtag;
else
$finaltag=$newtag;
echo "<br>finaltag:".$finaltag;
   $query = "UPDATE `videos` SET `tags` ='$finaltag' WHERE `videos`.`id` =$id; ";
   echo "<br>".$query;
              mysqli_query($con,$query);
              echo "Upload successfully.";
              if($page=="index.php")
              header('location:index.php');
            else
                header('location:video2.php');



?>