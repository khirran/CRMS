
<!DOCTYPE html>
<html>
    <head>
        <title>All Police</title>
        <link rel="stylesheet" href="viewlist.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    </head>
    <h1> CRIME RECORD MANAGEMENT SYSTEM </h1>
    <br>
    <h2> LIST OF POLICE OFFICERS</h2>

<?php
    include 'crms.php';
    $sql = "select * from `police`";
    $result=mysqli_query($con,$sql);

    echo "<table style='width:100%'>
        <tr>
        <th>Name</th>
        <th>Policeid</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Position</th>
        <th>Department</th>
        </tr>";

    while($record=mysqli_fetch_assoc($result)){
        $name=$record['name'];
        $policeid=$record['policeid'];
        $age=$record['age'];
        $gender=$record['gender'];
        $position=$record['position'];
        $department=$record['department'];

        
        include 'policedetails.php';
    }
    echo "</table>";

?>
</body>
</html>