<?php
include_once 'includes/db.php'; 

if (isset($_POST['cancel'])) {
    $number = trim($_POST['number']);


    $stmt = $conn->prepare("SELECT * FROM contact_form WHERE number = ? AND DATE(date) >= CURDATE()");
    $stmt->bind_param("s", $number);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
    
        $delete = $conn->prepare("DELETE FROM contact_form WHERE number = ? AND DATE(date) >= CURDATE()");
        $delete->bind_param("s", $number);
        $delete->execute();

        $message = "Your appointment has been cancelled successfully.";
    } else {
        $message = "No upcoming appointment found with this mobile number.";
    }

    $stmt->close();
    $conn->close();


    header("Location: cancel_appointment.php?message=" . urlencode($message));
    exit();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cancel Appointment</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h2 class="text-center mb-4">Cancel Your Appointment</h2>

  <?php
  if (isset($_GET['message'])) {
      echo '<div class="alert alert-info text-center mt-3">' . htmlspecialchars($_GET['message']) . '</div>';
  }
  ?>

  <form method="post" class="form-inline justify-content-center">
    <input type="text" name="number" placeholder="Enter your mobile number" required class="form-control mb-2 mr-2" pattern="[0-9]{10}" title="Enter a valid 10-digit mobile number">
    <input type="submit" name="cancel" value="Cancel Appointment" class="btn btn-danger mb-2">
  </form>
</div>
</body>
</html>
