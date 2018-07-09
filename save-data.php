<?php
    include('dbconfig.php');

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(isset($_POST['save'])) {
      $sql = "INSERT INTO Users (firstname,lastname,email,phone)
      VALUES('$fname','$lname','$email','$phone')";

      $result = mysqli_query($conn,$sql);

      if(!$result) {
        printf("Errormessage: %s\n", mysqli_error($conn));
      }
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Form</title>
  </head>
  <body>
    <h1>Data saved!</h1>
    <p>First Name: <?php echo $fname ?></p>
    <p>Last Name: <?php echo $lname ?></p>
    <p>Email: <?php echo $email ?></p>
    <p>Phone: <?php echo $phone ?></p>
  </body>
</html>
