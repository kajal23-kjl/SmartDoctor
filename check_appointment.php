<?php
include_once 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Check Appointment</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h2 class="text-center mb-4">Check Your Appointment</h2>
  <form method="post" class="form-inline justify-content-center">
    <input type="text" name="check_number" placeholder="Enter your mobile number" required class="form-control mb-2 mr-2" pattern="[0-9]{10}" title="Enter a valid 10-digit mobile number">
    <input type="submit" name="check_appointment" value="Check" class="btn btn-primary mb-2">
  </form>

  <?php
  if (isset($_POST['check_appointment'])) {
    $number = $_POST['check_number'];

    $stmt = mysqli_prepare($conn, "SELECT name, date FROM contact_form WHERE number = ?");
    mysqli_stmt_bind_param($stmt, "s", $number);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    echo '<div class="mt-4">';
    if (mysqli_num_rows($result) > 0) {
      echo "<h5>Appointments for <strong>" . htmlspecialchars($number) . "</strong>:</h5><ul class='list-group'>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<li class='list-group-item'>Name: " . htmlspecialchars($row['name']) . " | Date: " . htmlspecialchars($row['date']) . "</li>";
      }
      echo "</ul>";
    } else {
      echo "<p>No appointments found for <strong>" . htmlspecialchars($number) . "</strong>.</p>";
    }
    echo "</div>";
  }
  
  ?>
</div>
</body>
</html>
