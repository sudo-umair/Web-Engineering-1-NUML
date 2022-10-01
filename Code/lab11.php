<?php
$con = mysqli_connect("localhost", "root", "", "labreport");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_errno();
} else {
  echo "Connection Successful";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      display: flex;
      flex-direction: column;

    }

    .container {
      align-self: center;
      padding: 10px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      border: 2px solid black;
    }

    td,
    th {
      text-align: center;
      width: auto;
      padding: 10px 20px 10px 20px;
      border: 1px solid black;
    }
  </style>
  <title>Lab 11</title>
</head>

<body>
  <h1>Use of database and data retrieval using php</h1>
  <div class="container">
    <table>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
      <?php

      $query = $con->prepare("SELECT * FROM users");
      $query->execute();
      $result = $query->get_result();
      while ($row = $result->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['age']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['password']; ?></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
</body>

</html>