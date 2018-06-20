
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>Registration Page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/job.png" rel="icon">
  <link href="img/job.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
	
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	

	
	
	<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons" />
  
  
  
  
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
	

  
<style>
	
.icon-eye-open material-icons{display: none;}
.green{color:#2FC332;}
.red{color:#D60202;font-weight: bold}
.g{color:green;
	font-style: italic;text-decoration: underline;}	
</style>	
	
  <link href="css/style.css" rel="stylesheet">
    <style>
        body{
            background: url("img/intro-carousel/1.jpg");
            background-size:cover;
            background-repeat:repeat-y;
            color:black;
        }
        .box{
            background: rgba(0,0,0,0.1);
        }
        .add_employee_form span{
            color:red;
        }
		
		
        p{
            color:red;
        }
		
		.form-control input[type="text"]
		{
			color: blue;
		}
		
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
		
    </style>
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	
	<script>
		
		function usernamecheck() {
			
	
	jQuery.ajax({
	url: "check.php",
	data:'username='+$("#uname").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		
		
	},
	
	error:function (){}
	});
}

	
	
	
	
			
		function fun()
			{
				 document.getElementById("marriael").style.display="none";
				 document.getElementById("marriage").style.display="none";
				 var x=document.getElementById("male").checked;
				
				  	if(x==true)
										{
										var a = document.getElementById("marriage").value;
										if(a=="Married")
										{
										document.getElementById("lb1").style.display="none";
										document.getElementById("lb2").style.display="block";
										document.getElementById("pname").style.display="block";
										}
										else
										{
										document.getElementById("lb1").style.display="none";
										document.getElementById("lb2").style.display="none";
										document.getElementById("pname").style.display="none";
										}
										}
				
				 var y=document.getElementById("female").checked;
				
					if(y==true)
										{
										var a = document.getElementById("marriage").value;
										if(a=="Married")
										{
										document.getElementById("lb2").style.display="none";
										document.getElementById("lb1").style.display="block";
										document.getElementById("pname").style.display="block";
										}
										else
										{
										document.getElementById("lb1").style.display="none";
										document.getElementById("lb2").style.display="none";
										document.getElementById("pname").style.display="none";
										}
										}
					
				
				 var z=document.getElementById("others").checked;
				
					if(z==true)
										{
											document.getElementById("marriael").style.display="none";
											document.getElementById("marriage").style.display="none";
											document.getElementById("lb1").style.display="none";
											document.getElementById("lb2").style.display="none";
											document.getElementById("pname").style.display="none";
										}
									else
										{
											document.getElementById("marriael").style.display="block";
											document.getElementById("marriage").style.display="block";
										}
			}
			
			
			
						function fx()
						{
						var x=document.getElementById("pres").value;
						var y=document.getElementById("per").value;
						var z=document.getElementById("chk");
						if(z.checked==true)
							{
							  
							  document.getElementById("per").value=document.getElementById("pres").value;
							  document.getElementById("per").readOnly='true';
							 
							}
					 	else
							{
							   document.getElementById("per").readOnly=false;
							}
					 
						
						}
        </script>
	
	
    
</head>
<body> 
	<br><br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">New Member Registration</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#">Registration Page</a></li>
          <li> <a href="login.php">Login page</a> </li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header">Let's Welcome a new Member</h3>
    </div>
    <br><br>
    
    <div class="container add_employee_form">
    <form action="" method="POST" enctype="multipart/form-data">
        <h4 class="page-header" align="center">Fill Up The Form</h4>
        <div class="box">
            <div class="form-group">  
                  <div class="row">

                     <div class="col-md-2"><label id="luname">Username:<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname" onBlur="usernamecheck()" autocomplete="off" required>
						 <span id='user-availability-status'></span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="right"></span> </div>                 
                     <div class="col-md-3 text-right"><label id="lsname" style="display: none">&nbsp;&nbsp;Full&nbsp;Name:<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="sname" placeholder="Enter Your name" name="sname"  style="display: none" onkeypress="return( event.charCode >64 && event.charCode < 91 || event.charCode > 96 && event.charCode < 123)" required></div>    
                  </div>
                
                  <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3"><p id="errfname"></p> </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3"><p id="errlname"></p></div>
                  </div>
            </div>
			
			
			
			
			 <div class="form-group">
                <div class="row">
                    <div class="col-md-12"></div>
                  	  <div class="col-md-4">
                        <table id="gendert">
                            <tr><th style="padding-top:10px;"><label id="lgender" style="display: none">&nbsp;&nbsp;Gender:<span>&#42;</span>&nbsp;&nbsp;&nbsp;&nbsp;</label></th>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								
                                <td><label class="radio radio-inline" id="lmale" style="display: none" ><input type="radio" name="gender" value="male" id="male" onClick="fun()" style="display: none" required>Male&nbsp;&nbsp;</label></td>
                                <td><label class="radio radio-inline" id="lfemale" style="display: none" ><input type="radio" name="gender" id="female" value="female" onClick="fun()" style="display: none" required>Female&nbsp;&nbsp;</label></td>
								<td><label class="radio radio-inline" id="lothers" style="display: none"><input type="radio" name="gender" id="others" value="others" onClick="fun()" style="display: none" required>Others&nbsp;&nbsp;</label></td>
                            </tr>
                        </table>
					 </div>
					
					 <div class="col-md-4 text-right"><label id="lphoto" style="display: none">&nbsp;&nbsp;Photo:<span>&#42;</span</label>
						 </div>
                    <div class="col-md-3"><input type="file" class="form-control" id="photo" name="photo" placeholder="Browse From Your PC" style="height:40px;display: none" required />
						<label id="alertphoto" style="font-size: 10px;display: none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Photo Size Less Than 1MB.</label>
						 </div>
					
					
					</div> 
				 </div>
			
			
				 <br><br>
			
			
				 <div class="form-group">
               		 <div class="row">
							<div class="col-md-2 text-left">	
								<label id="marriael" style="display: none">Meretial Status:<span>&#42;</span></label>
							</div>
							<div class="col-md-2 text-left">
								<select id="marriage" name="marriage" onChange="fun()" class="form-control" style="display: none; height: 35px; width: 200px;" required>
								<option value="Unmarried" id="Unmarried" class="form-control" selected>Unmarried</option>
								<option value="Married" id="Married" class="form-control">Married</option>
								</select>
							</div>
						 
					 	<div class="col-md-4 text-right">
								<label id="lb1" style="display:none">Husbend's Name:</label>
								<label id="lb2" style="display:none">Wife's Name:</label>
						</div>
						<div class="col-md-4 text-right">
								<input type="text" id="pname" name="pname" class="form-control" style="display: none; width: 244px" placeholder="Enter Name" onkeypress="return( event.charCode >64 && event.charCode < 91 || event.charCode > 96 && event.charCode < 123)" >
						 </div>
					 </div>
				 </div>
			<br><br>
			
			
			
			
			
			
			
			<div class="form-group"> 
				<div class="row">
					 <div class="col-md-2"><label id="lmob" style="display: none">Mobile Number:<span>&#42;</span></label></div> &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" class="form-control" name="mobb" id="mobb" value="+91" style="width:50px; display: none;" disabled>
						<div class="col-md-2">
							<input type="text" name="mob" id="mob" class="form-control" placeholder="Phone Number" minlength="10" maxlength="10" style="width:130px;display: none;" onkeypress="return( event.charCode >47 && event.charCode < 58)" required> 
						</div>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <div class="col-md-3 text-right">
						  <label id="lmail" style="display: none">Email ID:<span>&#42;</span></label></div>
					<div class="col-md-3"><input type="email" class="form-control" id="mail" placeholder="Enter Your Email Address" name="mail" required style="display: none"></div> 
				</div>
			</div>
			
			<br><br>
			
			<div class="form-group"> 
				<div class="row" id="addr" style="display: none;">
					 <div class="col-md-2"><label id="lpres">Present Address:<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="pres" placeholder="Enter Your Present Address" name="pres" required> 
					 </div>                 
                     <div class="col-md-3 text-right"><label id="lper">Permanent Address:<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="per" placeholder="Enter Your Permanent Address" name="per" required></div> 
					
					<br><br>
					<div class="col-md-11 text-right">
						<label style="font-size: 10px">Present Address is Same as Permanent Address?</label><br><label style="zoom:1;"> Active The Checkbox </label>
							<input type="checkbox" id="chk" name="chk" style="zoom: 1.5;padding: 5px;" onClick="fx()">
					</div>
				</div>
			</div>	
			
			
			
			<div class="form-group"> 
				<div class="row" >
					<div class="col-md-2">
				<label id="lcity" name="lcity" style="display: none">City Name:<span>&#42;</span></label></div>
									<div class="col-md-3">
										<input list="city_list" name="city" id="city" class="form-control" required placeholder="Select Your City" style="display: none;" onkeypress="return( event.charCode >64 && event.charCode < 91 || event.charCode > 96 && event.charCode < 123)">
												<datalist id="city_list">
												<?php  
													include("city_list.php"); ?>
												</datalist>
									</div>
					
									  <script src="assets/jquery.min.js"></script>
									  <script src="assets/bootstrap-v3/js/bootstrap.js"></script>
									  <script src="bootstrap-show-password.js"></script>
									  <script>

										$('[data-attr="show-password"]').password({
										  placement: 'before',
										  eyeClass: 'material-icons',
										  eyeOpenClass: 'visibility',
										  eyeCloseClass: 'visibility_off',
										  eyeClassPositionInside: true,

										})
									 </script>
									  <div class="col-md-3 text-right"><label id="lpass" style="display: none">Password:<span>&#42;</span></label></div>
										<div class="col-md-3" id="pdiv" style="display: none"><input type="password" id="pass" name="pass" class="form-control" data-toggle="password" 
											data-eye-class="material-icons"
											data-eye-open-class="visibility"
											data-eye-close-class="visibility_off"
											data-eye-class-position-inside="true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  placeholder="Enter Your password" required>  <label style="zoom:.8;">&nbsp;&nbsp;&nbsp;&nbsp;Password Must contain at least one number and one uppercase and lowercase letter, and at least 8 characters. </label>   </div>
				</div>
			</div>
			
	</div><!-- Box Div Closed -->
        
        <br><br>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-outline-* btn-block" id="submit" name="submit" style="display: none">Register</button>
                </div>
				<div class="col-md-4"></div>
            </div>
        </div>
    </form>
    </div>
    
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>
	
	
</body>
</html>



<?php

if(isset($_POST['submit']))
{
    
    $sname = $_POST['sname'];
    $mob = $_POST['mob'];
    $gen = $_POST['gender'];
    $m_status = $_POST['marriage'];
    $pname = $_POST['pname'];
	$uname= $_POST['uname'];
	$pres= $_POST['pres'];
	$per= $_POST['per'];
	$city=$_POST['city'];
	$email=$_POST['mail'];
    $pass = $_POST['pass'];
	$scu='ghjkl19237425cvbnm';
	$su='qwertyuiopedfvbnpo657908jhg';
	$pd=$su.sha1($_POST['pass']).$scu;
	$target = "profile_photos/photoid".basename($_FILES['photo']['name']);
	
    $conn = mysqli_connect("localhost","root","","live") or die("failed to connect database");

    
	$sname = mysqli_real_escape_string($conn,$sname);
	$mob = mysqli_real_escape_string($conn,$mob);
	$city = mysqli_real_escape_string($conn,$city);
	$email = mysqli_real_escape_string($conn,$email);
	$pres = mysqli_real_escape_string($conn,$pres);
	$per = mysqli_real_escape_string($conn,$per);
	$gen = mysqli_real_escape_string($conn,$gen);
	$m_status = mysqli_real_escape_string($conn,$m_status);
	$pname = mysqli_real_escape_string($conn,$pname);
	$uname = mysqli_real_escape_string($conn,$uname);
	$pd = mysqli_real_escape_string($conn,$pd);
	$photo = $_FILES['photo']['name'];
	$tmp_name= $_FILES['photo']['tmp_name'];
  	$new_name="Profile_Photos/photoid".$uname.'@'.time().'.jpg';
    $qry="insert into reg values ('$uname','$sname','$mob','$email','$pres','$per','$city','$gen','$new_name','$m_status','$pname','$pd')";
	
	
    
	$result = mysqli_query($conn,$qry) or die("Query Failed".mysqli_error($conn));
	
	if($result==true)
	{
	
				if(move_uploaded_file($tmp_name,$new_name))
				{


					echo "<script>alert('Registration Successful')</script>";
					echo "<script>location.href='login.php'</script>";

				}

				else
				{
					echo "<script>alert('Profile Photo Has Not Been Uploaded Successfully')</script>";

				}
		
	}
	
	else
	{
				echo "<script>alert('Registration Unsuccessful')</script>";
	}
	   
	mysqli_close($conn);
}

?>
