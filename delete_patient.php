<?php
include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM patients WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: view_patients.php");
exit();
?>
