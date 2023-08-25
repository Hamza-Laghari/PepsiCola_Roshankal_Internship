<?php
session_start();

// Store form values in session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["userId"] = $_POST["userId"];
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["fullname"] = $_POST["fullname"];
    $_SESSION["city"] = $_POST["city"];
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["phone"] = $_POST["phone"];
    // You should securely hash and store passwords, not in plain text
    $_SESSION["password"] = $_POST["password"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Dashboard</title>
  <style>
    body {
      background-color: #0055a6; /* Pepsi cola branding blue */
      color: white;
    }
    .container {
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Sukkur Beverages Limited</h1>
    <h2>Dashboard</h2>
    <p>User ID: <?php echo $_SESSION["userId"]; ?></p>
    <p>Username: <?php echo $_SESSION["username"]; ?></p>
    <p>Email: <?php echo $_SESSION["email"]; ?></p>
    <p>Fullname: <?php echo $_SESSION["fullname"]; ?></p>
    <p>City: <?php echo $_SESSION["city"]; ?></p>
    <p>Address: <?php echo $_SESSION["address"]; ?></p>
    <p>Phone: <?php echo $_SESSION["phone"]; ?></p>
    <!-- Avoid displaying password for security reasons -->
  </div>
</body>
</html>
