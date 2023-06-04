<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Criminals</title>
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
                <h2>Criminal details</h2>
                <div class="card">
                <form action="update.php" method="post">
                    <fieldset>
                        <input type="text" name="oldname" value = <?php echo $oldname ?> hidden>
                        <p>
                            <label for="name"><b>Name</b></label>
                            <input type="text" name="name" id="name" value = <?php echo $name ?> required>
                        </p>
                        <p>
                            <label for="age"><b>Age</b></label>
                            <input type="number" name="age" id="age" value = <?php echo $age ?>  required>
                        </p>
                        <p>
                            <label for="location"><b>Location</b></label>
                            <input type="text" name="location" id="location" value = <?php echo $location ?>  required>
                        </p>
                        <p>
                            <label for="crime"><b>Crime</b></label>
                            <input type="text" name="crime" id="crime" value = <?php echo $crime ?>  required>
                        </p>
                        <p>
                            <label for="convicted"><b>Convicted</b></label>
                            <input type="number" name="convicted" id="convicted" value = <?php echo $convicted ?>  required>
                        </p>
                        <p>
                            <label for="gender"><b>Gender</b></label>
                            <input type="text" name="gender" id="gender" value = <?php echo $gender ?>  required>
                        </p>
                    
                    <button type="submit">Submit</button>
            </fieldset>
                </form>
            </div>
            </section>

        </main>
    
    </body>
</html>