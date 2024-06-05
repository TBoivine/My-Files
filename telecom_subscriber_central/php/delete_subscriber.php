<?php
include 'db.php';

if (isset($_GET['id'])) {
    $Sub_id = $_GET['id'];

    $sql = "DELETE FROM subscribers WHERE Sub_id = $Sub_id";

    if ($conn->query($sql) === TRUE) {
        echo "Subscriber deleted successfully";
    } else {
        echo "Error deleting subscriber: " . $conn->error;
    }

    $conn->close();
    header("Location: ../subscriber.php");
    exit();
}
?>
