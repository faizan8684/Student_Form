<?php

$db = mysqli_connect('localhost','root','password','crud');

echo "<thead>";
echo "<tr>";

echo "<th> First Name </th>";
echo "<th> Last Name </th>";
echo "<th> Class </th>";
echo "<th> Divison </th>";
echo "<th> Roll No. </th>";
echo "<th> Action </th>";
echo "</tr>";
echo "</thead>";

$query=("SELECT * FROM studentss");




if($result = mysqli_query($db,$query))
{
if(mysqli_num_rows($result)>0){

echo"<tbody>";

while($row=mysqli_fetch_array($result)){

echo"<tr>";

echo"<td>{$row['fname']}</td>";
echo"<td>{$row['lname']}</td>";
echo"<td>{$row['classs']}</td>";
echo"<td>{$row['divison']}</td>";
echo"<td>{$row['rollno']}</td>";
echo"<td><a href='editing.php?edit={$row['id']}'>Edit</a>  <a href='deletion.php?del={$row['id']}'>Delete</a></td>";
echo"</tr>";
}

echo"</tbody>";
}

}

?>
