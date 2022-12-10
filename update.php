<?php

include "config.php";

    if (isset($_POST['update'])) {

        $user_id = $_POST['id'];

        $name = $_POST['full_name'];

        $email = $_POST['email'];

        $gender = $_POST['gender'];

        $birthday = $_POST['dath_of_birth'];

        $code = $_POST['country_code'];

        $creade = $_POST['created_at'];

        $sql = "UPDATE users SET full_name='$name',email='$email',gender='$gender',dath_of_birth='$birthday',country_code='$code',created_at='$creade' WHERE id='$user_id'";

         $result = $conn->query($sql);

        if ($result == TRUE) {

            echo "Record updated successfully.";
            header('location:view.php');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    }

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $id = $row['id'];

            $name = $row['full_name'];

            $email = $row['email'];

            $gender = $row['gender'];

            $birthday = $row['dath_of_birth'];

            $code = $row['country_code'];

            $creade = $row['created_at'];

            

        }

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Full Name:<br>

            <input type="text" name="full_name" value="<?php echo $name; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Gender:<br>

            <input type="gender" name="gender" value="<?php echo $gender; ?>">

            <br>

            Birthday:<br>

            <input type="text" name="dath_of_birth" value="<?php echo $birthday; ?>">

            <br>

            Country Code:<br>

            <input type="number" name="country_code" value="<?php echo $code; ?>">

            <br>

            Created:<br>

            <input type="text" name="created_at" value="<?php echo $creade; ?>">

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form>

        </body>

         </html>

    <?php

    } else{

        header('Location: view.php');

    }

}

?>