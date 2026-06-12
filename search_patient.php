<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Patient</title>
</head>
<body>

<h2>Search Patient</h2>

<form method="GET">
    <input type="text" name="search" placeholder="Enter Patient Name">
    <input type="submit" value="Search">
</form>

<br>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Phone</th>
</tr>

<?php

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $sql = "SELECT * FROM patients
            WHERE name LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);

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
}
?>

</table>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>
