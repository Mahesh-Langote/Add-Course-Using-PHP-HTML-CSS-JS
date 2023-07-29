<?php
// save_course.php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Database connection parameters
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "course";

    // Create a connection to the database
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST["name"];
    $description = $_POST["description"];
    $duration = $_POST["duration"];
    
    // Handle the image file
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $image_path = "images/" . $image;

    // Move the uploaded image to the "images" directory
    move_uploaded_file($tmp_name, $image_path);

    // Prepare the INSERT statement
    $stmt = $conn->prepare("INSERT INTO cd (name, discription, duration, img) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $description, $duration, $image_path);

    // Execute the statement
    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Course added successfully!";
    } else {
        // Error occurred while inserting data
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
