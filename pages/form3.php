<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION["address"] = $_POST["address"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Step 3</title>
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <div class="container">
            <img src="../images/LOGO.png" alt="Logo" width="150">
            <h2>Step 3 : Upload Photo</h2>
            <form action="../db/submit.php" method="post" enctype="multipart/form-data">
                <div class="upload-box">
                    <input type="file" name="photo" required>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
    </body>
</html>