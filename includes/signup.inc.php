<?php
   include "db.php";
   if(isset($_POST["submit"])) {
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];
      $pass = password_hash($_POST["password"],PASSWORD_DEFAULT);
      echo "Hashed password = " . $pass;
      $sql = ("INSERT INTO users (firstname, lastname, email, pass) VALUES ('$fname','$lname','$email','$pass');");
      $conn->query($sql);
      header("Location:../index.html");
   } else {
      header("Location:../signup.html?invalid_access");
}
?>