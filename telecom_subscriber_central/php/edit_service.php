<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if service ID is provided
    if (isset($_GET['service_id'])) {
        $ID = $_GET['service_id'];

        // Retrieve service details from the database
        $query = "SELECT * FROM service_plans WHERE service_id = $ID";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $service = $result->fetch_assoc();
        } else {
            echo "Service not found";
            exit;
        }
    } else {
        echo "Service ID not provided";
        exit;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['about']) && isset($_POST['cost'])) {
        // Collect form data
        $id = $_POST['service_id'];
        $Title = $_POST['Title'];
        $About = $_POST['About'];
        $cost = $_POST['cost'];

        // Prepare update query
        $update_query = "UPDATE service_plans SET Title='$title', About='$about', cost='$cost' WHERE service_id=$id";

        // Execute update query
        if ($conn->query($update_query) === TRUE) {
            echo "Service updated successfully";
        } else {
            echo "Error updating service: " . $conn->error;
        }
    } else {
        echo "All fields are required";
    }
}

$conn->close();
?>
