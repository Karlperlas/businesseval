<?php
   include "db.php";
   if(isset($_POST["login"])) {
      $email = $_POST['email'];
      $pass = $_POST['password'];
      $sql = ("SELECT * FROM users WHERE email = '$email';");
      $result = $conn->query($sql);
         // output data of each row
         while($row = $result->fetch_assoc()) {
            if($email == $row['email'] And password_verify($pass, $row['pass'])) {
               header("Location: ../home.html?login_success");
            } else {
               echo "Wrong Password";
            }
         }
   } else {
      header("Location:../index.html?invalid_access");
   }
?>