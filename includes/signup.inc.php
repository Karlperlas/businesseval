<?php
   include "db.php";
   if(isset($_POST["submit"])) {
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];
      $pass = $_POST["password"];
      $sql = ("INSERT INTO users (firstname, lastname, email, pass) VALUES ('$fname','$lname','$email','$pass');");
      $conn->query($sql);

   } else {
      header("Location:../signup.html");
   }
?>