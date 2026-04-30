<?php
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO programs (name, type, date, status)
            VALUES ('$name', '$type', '$date', '$status')";

    if ($conn->query($sql)) {
        echo "Program added!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Add Program</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Program Name" required><br><br>
    <input type="text" name="type" placeholder="Program Type" required><br><br>
    <input type="date" name="date" required><br><br>
    <input type="text" name="status" placeholder="Status" required><br><br>
    <button type="submit">Add Program</button>
</form>

<a href="view.php">Back</a>

