<?php
include 'db.php'; // Include database connection

// SQL query to select all services
$sql = "SELECT * FROM service_plans";
$result = $conn->query($sql);
$name='tile';
// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Title']}</td>
                <td>{$row['About']}</td>
                <td>{$row['Cost']}</td>
                <td>
                    <a href='edit_service.html?id={$row['service_id']}' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i> Edit</a>
                    <a href='php/delete_service.php?id={$row['service_id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this service?\")'><i class='fas fa-trash'></i> Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No services found</td></tr>";
}

// Close database connection
$conn->close();
?>
