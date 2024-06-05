<?php
include 'db.php';

$sql = "SELECT service_id, Title FROM service_plans";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='{$row['service_id']}'>{$row['Title']}</option>";
    }
} else {
    echo "<option value=''>No services available</option>";
}

$conn->close();
?>
