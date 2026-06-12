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

    echo "Patient Added Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
</head>
<body>

<h2>Add Patient</h2>

<form method="POST">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Age:
    <input type="number" name="age" required>
    <br><br>

    Gender:
    <select name="gender">
        <option>Male</option>
        <option>Female</option>
    </select>
    <br><br>

    Phone:
    <input type="text" name="phone" required>
    <br><br>

    <input type="submit" name="submit" value="Add Patient">

</form>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>
