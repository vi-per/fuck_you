<?php

$Id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','project');
mysqli_query($conn, "DELETE FROM `product` WHERE Id = $Id");
header("location:mystore.php");

?>