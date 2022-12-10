<?php

include "config.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container" style="margin-top:10px;">

        <button class="btn btn-success"><a href="create.php">Add User</a></button>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>Full Name</th>

        <th>Email</th>

        <th>Gender</th>

        <th>Birthday</th>

        <th>Country Code</th>

        <th>Created</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody>

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

            ?>

                <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['full_name']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['gender']; ?></td>

                    <td><?php echo $row['dath_of_birth']; ?></td>

                    <td><?php echo $row['country_code']; ?></td>

                    <td><?php echo $row['created_at']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>

          <?php       }

            }

       ?>

    </tbody>

</table>

    </div>

</body>

</html>