<?php


if(isset($_GET['edit'])){

$id=$_GET['edit'];
$update=true;



$db = mysqli_connect('localhost','root','password','crud');
$query = "SELECT * FROM studentss WHERE id=$id";
$record= mysqli_query($db,$query);

$row = mysqli_fetch_array($record);
$fname= $row['fname'];
$lname= $row['lname'];
$classs= $row['classs'];
$divison = $row['divison'];
$rollno = $row['rollno'];
}

echo"<form method='post' action='update.php'>";
echo"<input type='hidden' name='id' value=$id>";
echo"<input type='text' name='fname' value=$fname> <br>";
echo"<input type='text' name='lname' value=$lname><br> ";
echo"<input type='text' name='classs' value=$classs><br> ";
echo"<input type='number' name='divison' value=$divison><br> ";
echo"<input type='number' name='rollno' value=$rollno><br> ";
echo"<button type='submit' value='Save'>Save</button><br>";

echo"</form>";


?>
