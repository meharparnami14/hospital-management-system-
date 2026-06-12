<?php
include("db.php");

$result = mysqli_query($conn, "SELECT * FROM patients");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Patients</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>🏥 Hospital Management System</h1>
</div>

<div class="container">

    <div class="card">

        <h2>Patient Records</h2>

        <table>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>

            <?php
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['phone']; ?></td>

                <td>
                    <a class="btn" href="delete_patient.php?id=<?php echo $row['id']; ?>">
                        Delete
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>

        </table>

        <br>

        <a class="btn" href="index.php">
            Back Home
        </a>

    </div>

</div>

</body>
</html>
