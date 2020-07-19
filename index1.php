<?php
require 'db.php';
$sql = 'SELECT * FROM booking_personal';
$sql1 = 'SELECT * FROM booking_gaurdian';
$sql2 = 'SELECT * FROM booking_localgaurdian';
$sql3 = 'SELECT * FROM booking_educational';


$statement = $connection->prepare($sql);
$statement1 = $connection->prepare($sql1);
$statement2 = $connection->prepare($sql2);
$statement3 = $connection->prepare($sql3);

$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);

$statement1->execute();
$people1 = $statement1->fetchAll(PDO::FETCH_OBJ);

$statement2->execute();
$people2 = $statement2->fetchAll(PDO::FETCH_OBJ);

$statement3->execute();
$people3 = $statement3->fetchAll(PDO::FETCH_OBJ);

 ?>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  
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





<div class="container" style="margin-left:0px;">
  <div class="card mt-2" style="width:1500px">
    <div class="card-header" >
      <h2>Personal Details</h2>
    </div>
    <div class="card-body" >
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Student Name</th>
		  <th>Address</th>
		  <th>Mobile No</th>
          <th>Email_Id</th>
		  <th>D.O.B</th>
		  <th>Nationality</th>
		  <th>Package</th>
          <th>Blood Group</th>
		  <th style="padding:30px 53px;">Action</th>
		  
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->user_id; ?></td>
            <td><?= $person->name; ?></td>
			<td><?= $person->address; ?></td>
            <td><?= $person->mobile_no; ?></td>
			<td><?= $person->email; ?></td>
			<td><?= $person->date_of_birth; ?></td>
			<td><?= $person->nationality; ?></td>
			<td><?= $person->package; ?></td>
			<td><?= $person->bloodgroup; ?></td>
		    
            <td>
              <a href="edit.php?id=<?= $person->user_id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->user_id ?>" class='btn btn-danger'>Delete</a>
            
            
            </td>
        
          
        <?php endforeach; ?>	
			</tr>
            
      </table>
    </div>
  </div>
</div>

<div class="container" style="margin-left:0px;">
  <div class="card mt-2" style="width:1300px;">
    <div class="card-header">
      <h2>Gaurdian Details</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>G_Name</th>
		  <th>G_Address</th>
		  <th>G_Mobile</th>
		  <th>G_Email</th>
		  <th>Occupation</th>
		  <th>Annual_Income</th>
		  <th>Relationship</th>
		  <th>Action</th>
		  
        </tr>
        	
			
			
			<?php foreach($people1 as $person1): ?>
			<tr>
			<td><?= $person1->user_id; ?></td>
			<td><?= $person1->g_name; ?></td>
			<td><?= $person1->g_address; ?></td>
			<td><?= $person1->g_mobile; ?></td>
			<td><?= $person1->g_email; ?></td>
			<td><?= $person1->occupation; ?></td>
			<td><?= $person1->anual_income; ?></td>
			<td><?= $person1->relationship; ?></td>
			
			<td>
              <a href="edit1.php?id=<?= $person1->user_id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person1->user_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          
        <?php endforeach; ?>	
			</tr>
            
      </table>
    </div>
  </div>
</div>

<div class="container" style="margin-left:0px;">
  <div class="card mt-2" style="width:1300px;">
    <div class="card-header">
      <h2> Local Gaurdian Details</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>full name</th>
		  <th>address</th>
		  <th>Relationship</th>
		  <th>Mobile No</th>
		  <th>Email-id</th>
		  <th>Action</th>
		  
        </tr>
        	
			
			
			<?php foreach($people2 as $person2): ?>
			<tr>
			<td><?= $person2->user_id; ?></td>
			<td><?= $person2->LG_name; ?></td>
			<td><?= $person2->LG_address; ?></td>
			<td><?= $person2->LG_relationship; ?></td>
			<td><?= $person2->LG_mobile; ?></td>
			<td><?= $person2->LG_email; ?></td>
			
			<td>
              <a href="edit2.php?id=<?= $person2->user_id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person2->user_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          
        <?php endforeach; ?>	
			</tr>
            
      </table>
    </div>
  </div>
</div>

<div class="container" style="margin-left:0px;">
  <div class="card mt-2" style="width:1300px;">
    <div class="card-header">
      <h2> Eduactional Details</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>College name</th>
		  <th>College address</th>
		  <th>Degree</th>
		  <th>Branch</th>
		  <th>Year</th>
		  <th>Action</th>
		  
        </tr>
        	
			
			
			<?php foreach($people3 as $person3): ?>
			<tr>
			<td><?= $person3->user_id; ?></td>
			<td><?= $person3->college_name; ?></td>
			<td><?= $person3->college_address; ?></td>
			<td><?= $person3->degree; ?></td>
			<td><?= $person3->Branch; ?></td>
			<td><?= $person3->year; ?></td>
			
			<td>
              <a href="edit3.php?id=<?= $person3->user_id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person3->user_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          
        <?php endforeach; ?>	
			</tr>
            
      </table>
    </div>
  </div>
</div>

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
