<?php
 $connect = mysqli_connect("localhost", "srie1831", "srie1831", "srie1831");
 $sql = "INSERT INTO recipes(name, author, type, description) VALUES('".$_POST["name"]."', '".$_POST["author"]."','".$_POST["type"]."','".$_POST["description"]."')";
 if(mysqli_query($connect, $sql))
 {
      echo 'Data Inserted';
 }
 ?>
