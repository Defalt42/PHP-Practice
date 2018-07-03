<?php

  $conn=mysqli_connect("192.168.1.168","root","mysql","simple_form");

  if(!$conn)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

?>
