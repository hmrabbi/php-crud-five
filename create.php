<?php

include "config.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['full_name'];

    $email = $_POST['email'];

    $gender = $_POST['gender'];

    $birthday = $_POST['dath_of_birth'];

    $code = $_POST['country_code'];

    $create = $_POST['created_at'];

    $sql = "INSERT INTO `users` (full_name, email, gender, dath_of_birth, country_code, created_at) VALUES ('$name','$email','$gender','$birthday','$code','$create')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";
      

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    Full name:<br>

    <input type="text" name="full_name">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Gender:<br>

    <input type="text" name="gender">

    <br>

    Birthday:<br>

    <input type="text" name="dath_of_birth">

    <br>

    Country Code:<br>

    <input type="text" name="country_code">
    <br>

    Created:<br>

    <input type="text" name="created_at">


    <br><br>

    <input type="submit" name="submit" value="submit">

   </fieldset>

</form>

</body>

</html>

