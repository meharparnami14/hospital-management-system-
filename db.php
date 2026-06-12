<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "hospital"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>
