<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $phone_number = $_POST['Phone_number'];
    $address = $_POST['Address'];
    $service_id=$_POST['service_id'];
   
// Check if the phone_number satisfies the constraint
//if (preg_match("/^[0-9]{09}$/", $phone_number)) {
    $sql = "INSERT INTO subscribers (First_Name, Last_Name, phone_number, Address, service_id) VALUES ('$First_Name', '$Last_Name', '$phone_number', '$address', '$service_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New subscriber added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../subscriber.php");
    exit();
}
?>