<?php
include 'db.php';

$sql = "UPDATE employees SET Address='Gadag' WHERE Empid=7";
$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

 ?>
