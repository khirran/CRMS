<!DOCTYPE html>
<html>
    <head>
        <title>All criminals </title>
        <link rel="stylesheet" href="viewlist.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    </head>
    <h1> CRIME RECORD MANAGEMENT SYSTEM </h1>
    <br>
    <h2> LIST OF CRIMINALS </h2>
<?php
    include 'crms.php';
    $sql = "select * from `criminals`";
    $result=mysqli_query($con,$sql);

    echo "<table style='width:100%'>
        <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Crime</th>
        <th>Gender</th>
        <th>Location</th>
        <th>Convicted</th>
        <th>Action</th>
        </tr>";

    while($record=mysqli_fetch_assoc($result)){
        $name=$record['name'];
        $age=$record['age'];
        $location=$record['location'];
        $crime=$record['crime'];
        $convicted=$record['convicted'];
        $gender=$record['gender'];
        
        include 'criminaldetails.php';
    }
    echo "</table>";

?>
</html>