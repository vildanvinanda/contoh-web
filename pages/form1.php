<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Step 1</title>
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <div class="container">
            <img src="../images/LOGO.png" alt="Logo" width="150">
            <h2>Step 1 : Personal Info</h2>
            <form action="../pages/form2.php" method="post">
                <input type="text" name="name" placeholder="Add full name" required>
                <input type="email" name="email" placeholder="Add email" required> 
                <input type="number" name="age" placeholder="Add age" required> 
                <button type="submit">Next</button>
            </form>
        </div>
    </body>
</html>