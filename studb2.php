
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout1.css" rel="stylesheet" type="text/css" media="all">
<link href="bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="s.css">
</head>

<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
 <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="leftsrusti">
	 <img src="logo11.png" class="img-responsive">
 
     <!-- <h1><a href="index.html" color="white">ASHRAY HOSTEL</a></h1>
      <p>Home Like Hostel</p-->
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><a href="fullform.html" target="_blank"><button><strong>Book Now</strong></button></a></li>
       
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.html">Home</a></li>
      <li><a  href="form.html" target="_blank">ENQUIRY</a>
       
      </li>
     
	 <li><a  href="gallary.html">Gallary</a>
        <!--<ul>
          <li><a href="#">Address</a></li>
          <li><a class="drop" href="#">Level 2 </a>
            <ul>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>

            </ul>
          </li>
          <li><a href="#">Level 2</a></li>
        </ul>
		-->
      </li>
      <li><a href="Contact Us.html">Contact Us</a></li>
      <li><a href="Aboutt Us.html">About Us</a></li>
      <li><a href="index.html" target="_blank">LogOut</a></li>
      
    </ul> 
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

*<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->



</br>


  

	
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

if(isset($_GET['logout']))
{
	session_unset();
	session_destroy();
}

if(isset($_POST['user_id']))
{
$user_id= $_POST['user_id'];
$pass=$_POST['password'];



$mysql = "select * from login where User_Id='".$user_id."' AND Password='".$pass."' AND Account_Type='0' limit 1";
$mysql1 = "select * from login where User_Id='".$user_id."' AND Password='".$pass."' AND Account_Type='1' limit 1";
$mysql2 = "select * from login where User_Id='".$user_id."' AND Password='".$pass."' AND Account_Type='2' limit 1";

$result=mysqli_query($con,$mysql);
$result1=mysqli_query($con,$mysql1);
$result2=mysqli_query($con,$mysql2);


if(mysqli_num_rows($result)==1)
{
	$_session['user_id']=$user_id;
	$_session['password']=$pass;
	
$result1=mysqli_query($con,"select * from booking_personal p,booking_gaurdian g,booking_localgaurdian l,booking_educational e
                      where p.user_id='".$user_id."' AND g.user_id='".$user_id."' AND  l.user_id='".$user_id."' AND e.user_id='".$user_id."'  ");


while($row=mysqli_fetch_array($result1))
{

?>
<div class="container">
  <div class="card mt-2">
    <div class="card-header">
      <h2>Profile</h2>
    </div>
    <div class="card-body">


      <table class="table table-bordered">
        <tr>
          <td><b>ID</b></td><td><?php echo $row['user_id'];?></td>
		 </tr>
          
		 <tr> 
		  <td><b>Name</td></b> <td><?php echo $row['name'];?></td>
		 </tr>
		 
		 <tr>
		  <td><b>Address</td></b><td><?php echo $row['address'];?></td>
		 </tr>
		 
		 <tr>
		  <td><b>Mobile No.</td></b><td><?php echo $row['mobile_no'];?></td>
		 </tr>
		 
		 <tr>
		  <td><b>Email_Id</td></b><td><?php echo $row['email'];?></td>
		 </tr>
		  
         
		 
		 <tr>
		  <td><b>D.O.B</td></b><td><?php echo $row['date_of_birth'];?></td>
		  </tr>
		  
		  <tr>
		  <td><b>Nationality</td></b><td><?php echo $row['nationality'];?></td>
		  </tr>
		  
		  <tr>
		  <td><b>Package</td></b><td><?php echo $row['package'];?></td>
		  </tr>
		  
		  <tr>
		  <td><b>Blood Group</td></b><td><?php echo $row['bloodgroup'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Gaurdian/Parent full name</td></b><td><?php echo $row['g_name'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Gaurdian/Parent address:</td></b><td><?php echo $row['g_address'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Relationship :</td></b><td><?php echo $row['relationship'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Gaurdian/Parent</br> Mobile No </td></b><td><?php echo $row['g_mobile'];?></td>
		  </tr>
		  
		  <tr>
		  <td><b>Guardian Email_id</td></b><td><?php echo $row['g_email'];?></td>
		  </tr>
		  
		  <tr>
		  <td><b>Guardian Occupation:</td></b><td><?php echo $row['occupation'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Guardian Annual Income:</td></b><td><?php echo $row['anual_income'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Local Gaurdian full name:</td></b><td><?php echo $row['LG_name'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Local Gaurdian address:</td></b><td><?php echo $row['LG_address'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Relationship :</td></b><td><?php echo $row['LG_relationship'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Local Gaurdian</br> Mobile No :</td></b><td><?php echo $row['LG_mobile'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Local Guardian Email-id:</td></b><td><?php echo $row['LG_email'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>College name:</td></b><td><?php echo $row['college_name'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>College address:</td></b><td><?php echo $row['college_address'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Degree:</td></b><td><?php echo $row['degree'];?></td>
		  </tr>
		  
		   <tr>
		  <td><b>Branch:</td></b><td><?php echo $row['Branch'];?></td>
		  </tr>
		  
		  <tr>
		  <td><b> Year:</td></b><td><?php echo $row['year'];?></td>
		  </tr>
		  
		  
		   
          
     </table>
	    </div>
  </div>
</div>

	  <?php
}
}
elseif(mysqli_num_rows($result1)==1)
{
	header("refresh:0,url=index1.php");
}

elseif(mysqli_num_rows($result2)==1)
{
	echo"admin";
	header("refresh:0,url=stu_profile.php");
}


else
{
	echo"<span style='color:red;'>Enter valid password/user_id</span></br></br>";
	header("refresh:4,url=stu_profile.php");
}
}


?>


 
<br>

<footer>
    <div class="container">
        <div class="float-left">
            <img src="logo11.png" class="img-responsive">
        </div>
        <!--ul class="social-links ">
                                <li><a target="_blank" href="#"><i class="icons fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="icons fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="icons fa fa-instagram"></i></a></li>                              
                                <li><a target="_blank" href="#"><i class="icons fa fa-linkedin "></i></a></li>
                                <li><a target="_blank" href="#"><i class="icons fa fa-pinterest-p"></i></a></li>
                                <li><a target="_blank" href="#"><i class="icons fa fa-tumblr"></i></a></li>
                                <li><a target="_blank" href="#"><i class="icons fa fa-youtube"></i></a></li>
                                <li><a target="_blank" href="#"><i class="icons fa fa-tripadvisor"></i></a></li>
                    </ul-->
      <ul class="social-links ">
    <li><a href="https://www.facebook.com/pages/Aashray-Hostel/1494230720791006" target="_blank"><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://twitter.com/AashrayHostel" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://plus.google.com/u/0/100039931619072837747/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
    <li ><a href="https://www.tripadvisor.in/Hotel_Review-g297613-d10295559-Reviews-Aashray_Hostel-Vadodara_Gujarat.html" target="_blank">
      <i class="icons fa fa-tripadvisor"></i></a></li>
    <li class="social-pinterest"><a href="https://in.pinterest.com/aashrayhostel/pins/" target="_blank">
      <i class="icons fa fa-pinterest-p"></i></a></li>
    <li class="social-instagram"><a href="https://www.instagram.com/aashrayhostel/?hl=en" target="_blank">
       <i class="icons fa fa-instagram"></i></a></a></li>
    <li class="social-tumblr"><a href="https://www.tumblr.com/blog/aashrayahostel" target="_blank">
      <i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
    <li class="social-tumblr"><a href="https://www.linkedin.com/company/ashrayhostel/" target="_blank">
      <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
  </ul>
    </div>
</footer>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#"><b>Ashray Hostel</b></a></p>
    <p class="fl_right">Powered by <a target="_blank" href="#" title="Team"><b>Little Home</b></a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>
