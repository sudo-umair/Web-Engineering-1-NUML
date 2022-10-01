<?php
$con = mysqli_connect("localhost", "root", "", "labreport");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_errno();
} else {
  echo "Connection Successful";
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
?>

<!DOCTYPE html>
<html lang=”en”>

<head>
  <meta charset=”UTF-8”>
  <meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0”>
  <title>Lab 12 | Update Form</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
    }
    #updateForm { 
      align-self: center;
      width: 400px;
      border: 2px solid black;
      padding: 10px;
      margin-top: 30px;
    }

    .row {
      display: flex;
      flex-direction: row;
      margin-top: 10px;
    }

    .row label {
      width: 40%;
    }

    .row input {
      width: 60%;
    }

    .row input,
    .row label {
      height: 20px;
    }

    .row button {
      width: 50%;
      margin: 20px;
      border-radius: 25px;
      padding-top: 5px;
      padding-bottom: 5px;
    }
  </style>
</head>

<body>
  <h1>Enter Updated details</h1>
  <div id="updateForm">
    <form method="POST">
      <div class="row">
        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" required>
      </div>
      <div class="row">
        <label for="age">Age (years):</label>
        <input type="number" name="age" id="age">
      </div>
      <div class="row">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" autocomplete="ON" required>
      </div>
      <div class="row">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
      </div>
      <div class="row">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" name="confirm-password" id="confirm-password" required>
      </div>
      <div class="row">
        <button style="background-color: blue; color: white;" name="submit" type="submit" id="submit">Submit</button>
        <button style="background-color: red; color: white;" type="reset" id="reset">Reset</button>
      </div>
    </form>
  </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  if ($_POST['password'] == $_POST['confirm-password']) {
    $password = $_POST['password'];
  } else {
    echo "Password and Confirm Password do not match";
  }

  $query = $con->prepare("UPDATE users SET id='$id', name='$name', age='$age', email='$email', password='$password' WHERE id='$id'");
  $query->execute();
  $query->close();
  header("Location:lab12.php");
}
?>