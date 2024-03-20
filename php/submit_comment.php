<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection parameters
    $host = 'localhost'; // or your database host
    $dbname = 'devoid';
    $username = 'root';
    $password = 'CedRew!eQi&R5tet76iy';

    // Data for the new row
    if(isset($_SESSION["login"]["email"])) $email = $_SESSION["login"]["email"];
    else{
        $email = "no email";
    }
    $image = $_SESSION["login"]["picture"];
    $name = $_SESSION["login"]["name"];
    $comment = $_POST['comment'];

    // Connect to the database
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement
        $stmt = $pdo->prepare("INSERT INTO comments (email, image, name, comment) VALUES (:email, :image, :name, :comment)");

        // Bind parameters
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':comment', $comment);

        // Execute the statement
        $stmt->execute();
        $response = ['success' => true];
    } catch (PDOException $e) {
        $response = ['success' => false];
        die("Error: " . $e->getMessage());

    }
    
    echo json_encode($response);
}
?>