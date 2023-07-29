<?php
// fetch_courses.php

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

// Prepare the SELECT statement to fetch all courses from the database
$sql = "SELECT * FROM cd";
$result = $conn->query($sql);

// Check if there are any courses in the database
if ($result->num_rows > 0) {
    $courses = array();

    // Fetch each row from the result and add it to the $courses array
    while ($row = $result->fetch_assoc()) {
        $courses[] = array(
            'name' => $row['name'],
            'description' => $row['discription'],
            'duration' => $row['duration'],
            'image' => $row['img']
        );
    }

    // Convert the $courses array to JSON and send it as the response
    header('Content-Type: application/json');
    echo json_encode($courses);
} else {
    // If there are no courses in the database, send an empty array as the response
    echo json_encode(array());
}

// Close the database connection
$conn->close();
?>
