<?php
$conn = new mysqli('localhost', 'root', 'root', 'register'); 
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name   = trim($_POST['name']);
    $email  = trim($_POST['email']);
    $number = trim($_POST['number']);
    $dateInput = trim($_POST['date']); 
 
    $inputDate = date('Y-m-d', strtotime($dateInput));
    $inputTime = date('H:i:s', strtotime($dateInput));
    if (!$inputTime || $inputTime === '00:00:00') {
        $inputTime = '10:00:00'; 
    }

    while (true) {
        $stmt = $conn->prepare("SELECT COUNT(*) FROM contact_form WHERE DATE(date) = ?");
        $stmt->bind_param("s", $inputDate);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count < 2) {
            break; 
        } else {
            $inputDate = date('Y-m-d', strtotime($inputDate . ' +1 day')); 
        }
    }

    $finalDateTime = $inputDate . ' ' . $inputTime;

    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, number, date) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $number, $finalDateTime);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $message = "Appointment scheduled successfully on $finalDateTime";
        } else {
            $message = "Failed to schedule appointment. Try again.";
        }

        $stmt->close();
    } else {
        $message = "Query preparation failed.";
    }

    $conn->close();
    header("Location: index.php?message=" . urlencode($message));
    exit();
}
?>


