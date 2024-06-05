<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Edit Service</h1>
    <form action="edit_service.php" method="post">
        <input type="hidden" name="service_id" value="<?php echo $_GET['service_id']; ?>">
        <label for="name">Service Name:</label>
        <input type="text" name="Title" value="<?php echo $service['Title']; ?>"><br><br>
        <label for="description">Description:</label>
        <textarea name="about"><?php echo $service['about']; ?></textarea><br><br>
        <label for="cost">Cost:</label>
        <input type="text" name="cost" value="<?php echo $service['cost']; ?>"><br><br>
        <button type="submit">Update Service</button>
    </form>
</body>
</html>
