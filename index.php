<?php
 include "db.php";

$empid = $_GET["empid"];
$name = $_GET["name"];
$age = $_GET["age"];
$contact = $_GET["contact"];
$email = $_GET["email"];
$address = $_GET["address"];

echo $name;

$sql = "INSERT INTO employees VALUES('$empid','$name','$age','$contact','$email','$address')";

if(mysqli_query($conn,$sql)){
  echo "New record inserted successfully";
}
else{
  echo "Error" .$sql. "<br>" .mysqli_error($conn);
}


?>
