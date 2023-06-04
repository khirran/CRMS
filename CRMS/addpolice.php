<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'crms.php';
    $name=$_POST['name'];
    $policeid=$_POST['policeid'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $position=$_POST['position'];
    $department=$_POST['department'];

    $sql="insert into `police` (name,policeid,age,gender,position,department)
    values('$name','$policeid','$age','$gender','$position','$department')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:allpolice.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Police</title>
        <link rel="stylesheet" href="CRMS.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    </head>
    <body>
        <header>
            <br>
            <br>
            <br>
            <br>
            <h1> Crime Record Management System </h1>
        </header>
        <br>
        <br>
        <main>
            <section>
                <br>
                <br>
                <br>
                <h2>User information</h2>
                <div class="card">
                <form action="addpolice.php" method="post">
                    <fieldset>
                        <p>
                            <label for="name"><b>Name</b></label>
                            <input type="text" name="name" id="name" placeholder="Enter name" required>
                        </p>
                        <p>
                            <label for="policeid"><b>PoliceID</b></label>
                            <input type="number" name="policeid" id="policeid" placeholder="Enter PoliceID" required>
                        </p>

                        <p>
                            <label for="age"><b>Age</b></label>
                            <input type="number" name="age" id="age" placeholder="Enter age" required>
                        </p>
                        <p>
                            <label for="gender"><b>Gender</b></label>
                            <input type="text" name="gender" id="gender" placeholder="Enter gender" required>
                        </p>
                        <p>
                            <label for="position"><b>Position</b></label>
                            <input type="text" name="Position" id="Position" placeholder="Enter Position" required>
                        </p>
                        <p>
                            <label for="department"><b>Department</b></label>
                            <input type="text" name="department" id="department" placeholder="Enter Department" required>
                        </p>
                    
                    <button type="submit">Submit</button>
            </fieldset>
                </form>
            </div>
            </section>

        </main>
    
    </body>
</html>