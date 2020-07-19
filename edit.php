<?php
require 'db.php';
$id = $_GET['id'];

$sql = 'SELECT * FROM booking_personal WHERE user_id=:id';
 
$statement = $connection->prepare($sql);

$statement->execute([':id' => $id ]);

$person = $statement->fetch(PDO::FETCH_OBJ);

if (isset ($_POST['name'])  )
{
  
$name=$_POST['name'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$address=$_POST['address'];
$package=$_POST['package'];
$date_of_birth=$_POST['date_of_birth'];
$bloodgroup=$_POST['bloodgroup'];
$nationality=$_POST['nationality'];

  $sql = 'UPDATE booking_personal SET name=:name,mobile_no=:mobile_no,email=:email,address=:address,package=:package,date_of_birth=:date_of_birth,bloodgroup=:bloodgroup,nationality=:nationality WHERE user_id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name,':mobile_no' => $mobile_no, ':email' => $email,':address' => $address,':package' => $package,':date_of_birth' => $date_of_birth,':bloodgroup' => $bloodgroup,':nationality' => $nationality,':id' => $id])) {
    header("refresh:0,url=index1.php");
  }
}




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
      <li><a href="stu_profile.php" target="_blank">Login</a></li>
      
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

 

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Personal Details</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
	  
	  
      <form  method="post">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input value="<?= $person->name; ?>" type="text" name="name"  class="form-control">
        </div>
		 <div class="form-group">
          <label for="mobile_no">Mobile No</label>
          <input value="<?= $person->mobile_no; ?>" type="number" name="mobile_no"  class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email Id</label>
          <input type="email" value="<?= $person->email; ?>" name="email"  class="form-control">
        </div>
		 <div class="form-group">
          <label for="address">Address</label>
          <input value="<?= $person->address; ?>" type="text" name="address"  class="form-control">
        </div>
		 <div class="form-group">
          <label for="package">Package</label>
          <input value="<?= $person->package; ?>" type="text" name="package"  class="form-control">
        </div>
		 <div class="form-group">
          <label for="date_of_birth">D.O.B</label>
          <input value="<?= $person->date_of_birth; ?>" type="text" name="date_of_birth"  class="form-control">
        </div>
		 <div class="form-group">
          <label for="bloodgroup">Bloodgroup</label>
          <input value="<?= $person->bloodgroup; ?>" type="text" name="bloodgroup"  class="form-control">
        </div>
		<div class="form-group">
          <label for="nationality">Nationality</label>
          <input value="<?= $person->nationality; ?>" type="text" name="nationality"  class="form-control">
        </div>
		
		
		
		 
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
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