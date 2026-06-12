<?php
include("db.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO patients(name, age, gender, phone)
            VALUES('$name', '$age', '$gender', '$phone')";

    mysqli_query($conn, $sql);

    echo "<script>alert('Patient Added Successfully!');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>🏥 Hospital Management System</h1>
</div>

<div class="container">
    <div class="card">

        <h2>Add Patient</h2>

        <form method="POST">

            <label>Name</label>
            <input type="text" name="name" required>

            <label>Age</label>
            <input type="number" name="age" required>

            <label>Gender</label>
            <select name="gender">
                <option>Male</option>
                <option>Female</option>
            </select>

            <label>Phone</label>
            <input type="text" name="phone" required>

            <input class="btn" type="submit" name="submit" value="Add Patient">

        </form>

        <br>

        <a class="btn" href="index.php">Back Home</a>

    </div>
</div>

</body>
</html>
