<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["age"] = $_POST["age"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Step 2</title>
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <div class="container">
            <img src="../images/LOGO.png" alt="Logo" width="150">
            <h2>Step 2 : Address Info</h2>
            <form action="../pages/form3.php" method="post">
                <textarea name="address" placeholder="Add address" maxlength="255" required></textarea>
                <button type="submit">Next</button>
            </form>
        </div>
    </body>
</html>