<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";




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
 
 $log="INSERT INTO login(password,Account_Type) values ('$dob','0')";
 
/*if (mysqli_query($con,$personal) && mysqli_query($con,$log))
{
    echo "New record created successfully";
} 
else
{
	echo"not inserted";
}*/



//gaurdian_information
$gaurdianname=   $_POST['gaurdianname'];
$gaddress=       $_POST['gaddress'];

$gmobileno=      $_POST['gmobileno'];
$gemail=         $_POST['gemail'];
$occupation=     $_POST['occupation'];
$annual_income=  $_POST['annual_income'];
$relationship=   $_POST['relationship'];

$gaurdian = "INSERT INTO booking_gaurdian(g_name,g_address,g_mobile,g_email,occupation,anual_income,relationship)
values('$gaurdianname','$gaddress','$gmobileno','$gemail','$occupation','$annual_income','$relationship')";
/*if (mysqli_query($con,$gaurdian))
{
    echo "New record created successfully";
} 
else
{
	echo"not inserted";
}*/

 
//local_gaurdian_inserting data

$lgname=         $_POST['lgname'];
$lgaddress=      $_POST['lgaddress'];
$relationship=   $_POST['relationship'];
$lgmobileno=     $_POST['lgmobileno'];
$lgemail=        $_POST['lgemail'];

$local = "INSERT INTO booking_localgaurdian(LG_name,LG_address,LG_relationship,LG_mobile,LG_email)
values('$lgname','lgaddress','$relationship','$lgmobileno','$lgemail')";
/*if (mysqli_query($con,$local))
{
    echo "New record created successfully";
} 
else
{
	echo"not inserted";
}*/

//booking_educational
$cname=       $_POST['cname'];
$caddress=    $_POST['caddress'];
$degree=      $_POST['degree'];  
$branch=      $_POST['branch'];
$year=        $_POST['year'];

$education = "INSERT INTO booking_educational(college_name,college_address,degree,branch,year)
values('$cname','$caddress','$degree','$branch','$year')";

if (mysqli_query($con,$education) && mysqli_query($con,$local) && mysqli_query($con,$gaurdian) && mysqli_query($con,$personal) && mysqli_query($con,$log))
{
    echo "New record created successfully";
	header("refresh:5,url=index.html");
} 
else
{
	echo"not inserted";
}

  
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";




// Create connection
$con=mysqli_connect($servername, $username, $password,$dbname);
if(!$con)
{
echo"Not connect to server";
}



$condb=mysqli_select_db($con,$dbname);



$fullname=$_POST['fullname'];
$user=mysqli_query($con,"select * from booking_personal where name='".$fullname."'  ");

$userid=mysqli_fetch_array($user);

$user_id=$userid['user_id'];

if(isset($_POST['submit']))
{



$result=mysqli_query($con,"select * from booking_personal p,booking_gaurdian g,booking_localgaurdian l,booking_educational e,login n
                      where n.User_Id='".$user_id."' AND p.user_id='".$user_id."' AND g.user_id='".$user_id."' AND  l.user_id='".$user_id."' AND e.user_id='".$user_id."' ");


while($row=mysqli_fetch_array($result))
{

	
	$Name= $row['name'];
	$address=$row['address'];
	$mobile_no=$row['mobile_no'];
	$email=$row['email'];
	$dob=$row['date_of_birth'];
	$nationality=$row['nationality'];
	$package=$row['package'];
	$blood=$row['bloodgroup'];
	$gname=$row['g_name'];
	$gaddress=$row['g_address'];
	$relationship=$row['relationship'];
	$gmobile=$row['g_mobile'];
	$gemail=$row['g_email'];
	$occupation=$row['occupation'];
	$annual_income=$row['anual_income'];
	$lgname= $row['LG_name'];
	$lgaddress=$row['LG_address'];
	$lgrelation=$row['LG_relationship'];
	$lgmobile=$row['LG_mobile'];
	$lgemail=$row['LG_email'];
	$cname=$row['college_name'];
	$caddress=$row['college_address'];
	$degree=$row['degree'];
	$branch=$row['Branch'];
	$year= $row['year'];
	$password=$row['Password'];
	
    $to = "$email";
	
    $subject = "Verification Mail";

    $txt ="Dear,  \n
	       Mr/Mrs.$Name ,Your Full Details of 'Ashray Hostel Registration' as below.\n
		   User_Id:$user_id\n
		   Password:$password\n\n
		   
		   Name:$Name\n
		   Address:$address\n
		   Mobile No.:$mobile_no \n
		   Email Id:$email \n
		   D.O.B:$dob \n
		   Nationality:$nationality \n
		   Package:$package \n
		   Blood Group:$blood \n
		   
		   Gaurdian Details, \n
		   
		   Gaurdian Name:$gname \n
		   Address:$gaddress \n
		   Relationship:$relationship \n
		   Mobile No:$gmobile \n
		   Email Id:$gemail \n
		   Occupation:$occupation \n
		   Annual Income:$annual_income \n
		   
		   Local Gaurdian Details, \n
		   
		   Name:$lgname \n
		   Address:$lgaddress \n
		   Relationship:$lgrelation \n
		   Mobile No.:$lgmobile \n
		   Email Id:$lgemail \n
		   
		   Educational Details, \n
		   
		   College Name:$cname \n
		   College Address:$caddress \n
		   Degree:$degree \n
		   Branch:$branch \n
		   Year:$year \n
		   
		   Please visit our hostel with required documents." ;
    $headers = "From:adpanchal15@gmail.com" . "\r\n";

    mail($to,$subject,$txt,$headers);

}}
?>
