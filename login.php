<?php 
$conn = mysqli_connect('localhost', 'root', '', 'user_db');
$lemail = $_POST['lemail'];
$lpassword = $_POST['lpassword'];

$sql = "INSERT INTO `login` (`lid`, `lemail`, `lpassword`) 
VALUES ('0','$lemail', '$lpassword')";

$rs = mysqli_query($conn,$sql);

if($rs)
{
 echo "Records Inserted";
}
?>