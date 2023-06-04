<?php 
include 'crms.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{$oldname=$_POST ['oldname'];
$name=$_POST['name'];
$age=$_POST['age'];
$location=$_POST['location'];
$crime=$_POST['crime'];
$convicted=$_POST['convicted'];
$gender=$_POST['gender'];
$sql="update criminals set name='$name', age=$age , location='$location' , crime='$crime' ,convicted=$convicted , gender='$gender' where name = '$oldname'";
mysqli_query($con,$sql);
header('Location:  /crms/allcriminals.php');
}
else {$oldname = $_GET['name'];
$sql = "select * from criminals where name = '$oldname'";
$record=mysqli_fetch_assoc(mysqli_query($con,$sql));
$name=$record['name'];
$age=$record['age'];
$location=$record['location'];
$crime=$record['crime'];
$convicted=$record['convicted'];
$gender=$record['gender'];
include 'updatecriminal.php';}
?>
