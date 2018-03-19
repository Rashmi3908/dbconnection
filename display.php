<?php
include 'db.php';

$sql = "SELECT Empid, Name FROM employees";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr><th>EmpId</th>
    <th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Empid"]."</td><td>".$row["Name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


 ?>
