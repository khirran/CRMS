<?php
$name=$_GET['name'];
include 'crms.php';
$sql = "delete from `criminals` where name = '$name'";
mysqli_query($con,$sql);
header('Location:  /crms/allcriminals.php');
?>