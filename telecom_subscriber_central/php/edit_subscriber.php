<?php
include 'db.php';

// Retrieve the subscriber ID from the URL
$Sub_id = $_GET['id'];

// Fetch the subscriber data from the database
$sql = "SELECT * FROM subscribers WHERE Sub_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $Sub_id);
$stmt->execute();
$result = $stmt->get_result();
$subscriber = $result->fetch_assoc();

// Check if the subscriber was found
if ($subscriber) {
    ?>

    <!-- HTML form to edit the subscriber -->
    <form action="update_subscriber.php" method="post">
        <input type="hidden" name="id" value="<?php echo $subscriber['Sub_id']; ?>">
        First Name: <input type="text" name="First_Name" value="<?php echo $subscriber['First_Name']; ?>"><br>
        Last Name: <input type="text" name="Last_Name" value="<?php echo $subscriber['Last_Name']; ?>"><br>
        Phone Number: <input type="text" name="phone_number" value="<?php echo $subscriber['phone_number']; ?>"><br>
        Address: <input type="text" name="address" value="<?php echo $subscriber['Address']; ?>"><br>
        Service Type:
        <select name="service_id">
            <!-- Populate the service type options based on the service_plans table -->
            <?php
            $sql = "SELECT service_id, Title FROM service_plans";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                $selected = ($row['service_id'] == $subscriber['service_id']) ? 'selected' : '';
                echo "<option value='{$row['service_id']}' $selected>{$row['Title']}</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Save Changes">
    </form>

    <?php
} else {
    echo "Subscriber not found.";
}

$conn->close();
?>