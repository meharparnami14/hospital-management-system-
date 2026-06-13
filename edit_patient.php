<?php
include("db.php");

$id = $_GET['id'];

$result = mysqli_query($conn,
    "SELECT * FROM patients WHERE id=$id");

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    mysqli_query($conn,
        "UPDATE patients
        SET
        name='$name',
        age='$age',
        gender='$gender',
        phone='$phone'
        WHERE id=$id");

    header("Location: view_patients.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Patient</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>🏥 Hospital Management System</h1>
</div>

<div class="container">
    <div class="card">

        <h2>Edit Patient</h2>

        <form method="POST">

            <label>Name</label>
            <input type="text"
                   name="name"
                   value="<?php echo $row['name']; ?>"
                   required>

            <label>Age</label>
            <input type="number"
                   name="age"
                   value="<?php echo $row['age']; ?>"
                   required>

            <label>Gender</label>

            <select name="gender">

                <option
                <?php if($row['gender']=="Male") echo "selected"; ?>>
                Male
                </option>

                <option
                <?php if($row['gender']=="Female") echo "selected"; ?>>
                Female
                </option>

            </select>

            <label>Phone</label>
            <input type="text"
                   name="phone"
                   value="<?php echo $row['phone']; ?>"
                   required>

            <input class="btn"
                   type="submit"
                   name="update"
                   value="Update Patient">

        </form>

        <br>

        <a class="btn" href="view_patients.php">
            Back
        </a>

    </div>
</div>

</body>
</html>
