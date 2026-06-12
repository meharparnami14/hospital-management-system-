<?php
include("db.php");

$result = mysqli_query($conn, "SELECT * FROM patients");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Patients</title>
</head>
<body>

<h2>Patient Records</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Phone</th>
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
</tr>
<?php
}
?>

</table>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>
