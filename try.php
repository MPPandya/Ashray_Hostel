<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ashray hostel";




// Create connection
$con=mysqli_connect($servername, $username, $password);
if($con)
{
echo" connect to server";
}

if(mysqli_select_db($con,$dbname))
{
	echo"db selected";
}


//personal_inserting data

$fullname=     $_POST['fullname'];
$address=      $_POST['address'];
$mobileno=     $_POST['mobileno'];
$email=        $_POST['email'];
$dob=          $_POST['date'];
$nationality=  $_POST['nationality'];
$package=      $_POST['package'];
$bloodgroup=   $_POST['bloodgroup'];

$personal = "INSERT INTO booking_personal(name,mobile_no,email,address,package,date_of_birth,bloodgroup,nationality)
 values('$fullname','$mobileno','$email','$address','$package','$dob','$bloodgroup','$nationality')";
 
if (mysqli_query($con,$personal))
{
    echo "New record created successfully";
} 
else
{
	echo"not inserted";
}

//local_gaurdian_inserting data

$lgname=         $_POST['lgname'];
$lgaddress=      $_POST['lgaddress'];
$relationship=   $_POST['relationship'];
$lgmobileno=     $_POST['lgmobileno'];
$lgemail=        $_POST['lgemail'];

$local = "INSERT INTO booking_localgaurdian(user_id,LG_name,LG_address,LG_relationship,LG_mobile,LG_email)
values('','$lgname','lgaddress','$relationship','$lgmobileno','$lgemail')";
if (mysqli_query($con,$local))
{
    echo "New record created successfully";
} 
else
{
	echo"not inserted";
}



//gaurdian_inserting data
$gaurdianname=   $_POST['gaurdianname'];
$gaddress=       $_POST['gaddress'];

$gmobileno=      $_POST['gmobileno'];
$gemail=         $_POST['gemail'];
$occupation=     $_POST['occupation'];
$annual_income=  $_POST['annual_income'];
$relationship=   $_POST['relationship'];

$gaurdian = "INSERT INTO booking_gaurdian(user_id,g_name,g_address,g_mobile,g_email,occupation,anual_income,relationship)
values('','$gaurdianname','$gaddress','$gmobileno','$gemail','$occupation','$annual_income','$relationship')";
if (mysqli_query($con,$gaurdian))
{
    echo "New record created successfully";
} 
else
{
	echo"not inserted";
}

//education_data

$cname=       $_POST['cname'];
$caddress=    $_POST['caddress'];
$degree=      $_POST['degree'];  
$branch=      $_POST['branch'];
$year=        $_POST['year'];

$education = "INSERT INTO booking_educational(user_id,college_name,college_address,degree,branch,year)
values('','$cname','$caddress','$degree','$branch','$year')";

if (mysqli_query($con,$education))
{
    echo "New record created successfully";
} 
else
{
	echo"not inserted";
}

?>
