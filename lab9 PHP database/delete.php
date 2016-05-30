<?php
$connect = mysqli_connect("localhost", "srie1831", "srie1831", "srie1831");
$sql = "DELETE FROM recipes WHERE id = '".$_POST["id"]."'";
if(mysqli_query($connect, $sql))
{
     echo 'Data Deleted';
}
?>
