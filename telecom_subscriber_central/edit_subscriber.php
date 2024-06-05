<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Subscriber</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Edit Subscriber</h1>
    <form action="edit_subscriber.php" method="post">
        <input type="hidden" name="Sub_id" value="<?php echo $_GET['Sub-id']; ?>">
        <label for="First_Name">First Name:</label>
        <input type="text" name="First_Name" value="<?php echo $subscriber['First_Name']; ?>"><br><br>
        <label for="Last_Name">Last Name:</label>
        <input type="text" name="Last_Name" value="<?php echo $subscriber['Last_Name']; ?>"><br><br>
    
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" value="<?php echo $subscriber['phone_number']; ?>"><br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $subscriber['address']; ?>"><br><br>
        <label for="service_id">Service Type:</label>
        <select name="service_id">
            <option value="Basic Plan" <?php if ($subscriber['service_id'] == "Basic Plan") echo "selected"; ?>>Basic Plan</option>
            <!-- Add more options dynamically based on available services -->
        </select><br><br>
        <button type="submit">Update Subscriber</button>
    </form>
</body>
</html>
