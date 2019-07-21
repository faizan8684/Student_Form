<?php
 
 $db = mysqli_connect('localhost', 'root','password', 'crud');

if(isset($_POST['update'])) {
     
	$id = $_POST['id'];
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $classs = $_POST['classs'];
    $divison = $_POST['divison'];
    $rollno = $_POST['rollno']; 
}
  
mysqli_query($db, "UPDATE studentss SET fname='$fname',lname='$lname', classs='$classs',divison='$divison',rollno='$rollno' WHERE id=$id");

echo "<script>alert('Record Successfully updated'); document.location='http://localhost/php/show.php'</script>";

?>

