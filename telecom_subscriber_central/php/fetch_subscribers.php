<?php
include 'db.php';

$sql = "SELECT subscribers.Sub_id, subscribers.First_Name, subscribers.Last_Name, subscribers.phone_number, subscribers.Address, service_plans.Title
FROM subscribers
JOIN service_plans ON subscribers.service_id = service_plans.service_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Sub_id']}</td>
                <td>{$row['First_Name']}</td>
                <td>{$row['Last_Name']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['Title']}</td>
                <td>
                    <a href='edit_subscriber.php?id={$row['Sub_id']}' class='edit'><i class='fas fa-edit'></i> Edit</a>
                    <a href='php/delete_subscriber.php?id={$row['Sub_id']}' class='delete' onclick='return confirm(\"Are you sure you want to delete this subscriber?\")'><i class='fas fa-trash-alt'></i> Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No subscribers found</td></tr>";
}

$conn->close();
?>
