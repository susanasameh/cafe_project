<?php 

include "../dbconnection.php";
$id =$_GET['id'];



$sql="DELETE FROM products where product_id =$id";
$conn->exec($sql);

echo "Recorded Deleted Successfully";
//to refresh the page and turn to another page we use header function
header("Refresh:2;URL=products.php");




?>