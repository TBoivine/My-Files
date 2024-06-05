<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve service details from POST request
    $title = $_POST['title'];
    $about = $_POST['about'];
    $cost = $_POST['cost'];
    //$service_id = $POST['ID'];

    // SQL query to insert service into database
    $sql = "INSERT INTO service_plans (title, about, cost) VALUES ('$title', '$about', '$cost')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "New service added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
    // Redirect back to the services page
    header("Location: ../services.html");
    exit();
}
?>
