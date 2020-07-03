<?php
$name=filter_input(INPUT_POST,'name');
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$mail=filter_input(INPUT_POST,'mailid');
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="users";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
 die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
 $sql="INSERT INTO registration(Name,Username,Password,Mail) values ('$name','$username','$password','$mail')";
 if($conn->query($sql))
 {
   echo "YOU HAVE BEEN SUCCESSFULLY CREATED AN ACCOUNT";
 }
 else
 {
   echo "ERROR HAS OCCURED";
 }
}
?>
