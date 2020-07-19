<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";




// Create connection
$con=mysqli_connect($servername, $username, $password);
if(!$con)
{
echo"Not connect to server";
}
 
if(!mysqli_select_db($con,$dbname))
{
	echo"db not selected";
}




$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$college=$_POST['college'];
$reference=$_POST['reference'];

$mysql = "INSERT INTO enquiry (first_name, last_name, email,mobile_no,city,college,reference)
VALUES ('$fname', '$lname','$email','$mobile','$city','$college','$reference')";

if (mysqli_query($con,$mysql))
{
    echo "New record created successfully";
} 
else
{
	echo"not inserted";
}
header("refresh:2,url=form.html");
?>
