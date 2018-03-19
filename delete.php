<?php
include 'db.php';

$sql =  "DELETE FROM employees WHERE Empid=3";
$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



 ?>
