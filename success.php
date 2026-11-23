<?php
$first_name = htmlspecialchars($_POST["first_name"]);
$last_name  = htmlspecialchars($_POST["last_name"]);
$dob        = htmlspecialchars($_POST["dob"]);
$gender     = htmlspecialchars($_POST["gender"]);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
</head>
<body>
  <h2>Submitted!</h2>
  <p>First Name: <?php echo $first_name; ?></p>
  <p>Last Name: <?php echo $last_name; ?></p>
  <p>DOB: <?php echo $dob; ?></p>
  <p>Gender: <?php echo $gender; ?></p>
</body>
</html>