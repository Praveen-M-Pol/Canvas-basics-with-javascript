<?php
$conn=mysqli_connect('localhost','root','','subscribe');
if(!$conn)
echo "Error:".mysql_connect_error();
$a=$_GET['email'];
$in="INSERT INTO emails (email) VALUES ('$a')";
if(!mysqli_query($conn,$in))
echo "Error:".mysqli_error($conn);
echo "Thank you for subscribing";
?>