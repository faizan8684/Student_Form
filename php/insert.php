<?php

session_start();

$db = mysqli_connect('localhost','root','password','crud');

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$classs= $_POST['classs'];
$divison = $_POST['divison'];
$rollno = $_POST['rollno'];


$query = "INSERT INTO studentss VALUES (NULL,'$fname','$lname','$classs','$divison','$rollno')";

mysqli_query($db,$query);

echo"<script>alert('Record Successfully inserted in db'); document.location='http://localhost/php/index.php' </script>"
?>
