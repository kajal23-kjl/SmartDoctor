
<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin_login.php");
    exit();
}

$conn = new mysqli('localhost', 'root', 'ashok1668', 'register');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM contact_form ORDER BY `date` DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - Appointments</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
  <style>
  body {
    background-color: #f8f9fa;
  }
  .admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }
  .admin-header h2 {
    margin: 0;
    flex: 1;
    text-align: center;
  }
  .logout-btn {
    background-color: #dc3545;
    color: white;
  }
  .logout-btn:hover {
    background-color: #c82333;
  }
  .table-wrapper {
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    background: white;
    padding: 20px;
    border-radius: 10px;
  }
  h2 {
    text-align: center;
  }
  @media (max-width: 576px) {
    .admin-header {
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
    }
  }
</style>

</head>
<body>
  <div class="container mt-5">
    <div class="admin-header">
      <h2 >All Appointments</h2>
      <a href="admin_appointments.php?logout=1" class="btn logout-btn">Logout</a>
    </div>

    <div class="table-wrapper">
      <table class="table table-bordered table-hover">
        <thead class="thead-dark">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['number']) ?></td>
              <td><?= htmlspecialchars($row['date']) ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>

