<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Workshop</h2>

<form action="" method="post">

  <label>ID:</label><br>
  <input type="text" name="ID"><br><br>

  <label>Name:</label><br>
  <input type="text" name="Name"><br>

  <label>Qualifications:</label><br>
  <input type="text" name="Qualifications"><br>

  <label>Email:</label><br>
  <input type="text" name="Email"><br><br>

  <label>Phone_no:</label><br>
  <input type="text" name="Phone_no"><br>

  <label>Workshop:</label><br>
  <input type="text" name="Workshop"><br>

  <label>Date:</label><br>
  <input type="date" name="Date"><br><br>

  <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {

  $conn = new mysqli("localhost", "root", "", "workshop");

  if ($conn->connect_error) {
    die("Connection failed");
  }

  $sql = "INSERT INTO workshops 
  (ID, Name, Qualifications, Email, Phone_no, Workshop, Date)
  VALUES (
    '{$_POST['Name']}',
    '{$_POST['Qualifications']}',
    '{$_POST['Email']}',
    '{$_POST['Phone_no']}',
    '{$_POST['Workshop']}',
      Date DATE
  )";

  if ($conn->query($sql)) {
    echo "Data inserted successfully ✅";
  } else {
    echo "Error ❌";
  }

  $conn->close();
}
?>

</body>
</html>
