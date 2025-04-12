<?php
    session_start();
    require_once '../db/connect.php';

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $age = $_SESSION['age'];
    $address = $_SESSION['address'];

    $upload_dir = "../uploads/";
    if(!is_dir($upload_dir)){
        mkdir($upload_dir);
    }

    $photo_name = basename($_FILES["photo"]["name"]);
    $target_file = $upload_dir . $photo_name;
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

    $stmt = $conn->prepare("INSERT INTO users(name, email, age, address, photo) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $name, $email, $age, $address, $photo_name);
    $stmt->execute();

    session_destroy();
    echo"<h2 style='text-align: center;'>Data Berhasil Disimpan!</h2>";

?>