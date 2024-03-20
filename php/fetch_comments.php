<?php
    $host = 'localhost'; // or your database host
    $dbname = 'devoid';
    $username = 'root';
    $password = 'CedRew!eQi&R5tet76iy';


    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Prepare SQL statement
        $stmt = $pdo->prepare("SELECT * FROM comments");
    
        // Execute the statement
        $stmt->execute();
    
        // Fetch all comments as an associative array
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }

    $response = ['comments' => $comments];
    echo json_encode($response);
?>