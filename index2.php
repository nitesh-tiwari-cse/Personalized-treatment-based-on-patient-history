

<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Fitness  </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta  http-equiv="content-Type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1,user-scalable=0"/>
    <meta name="description" content="global"/>
    <meta name="distribution" content="global"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge,chrome=1"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
       <style type="text/css">
       	.r1:hover ,.r2:hover ,.r3:hover ,.r4:hover ,.r5:hover ,.r6:hover 
       	{
           opacity:0.8;
       	}
       	#title{
       		color: #00cc44;
       	}
       	#bdy{
	               width:100%;
                   background-image:url(C:\xampp\htdocs\RNGClinic\images\back.jpg);	
    		 }
    	.text-right .text-info	{
    		color:#00cc44;
    	} 
       </style>
	
	
	
</head>
<body id="bdy">

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo2.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			
				<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "<b>Welcome,</b>".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?><br><br><br>
			 
			<!--	<a href="login.php" class="btn btn-success" target="_blank">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="register.php" class="btn btn-success" target="_blank">Signup</a><br/><br/>&nbsp;&nbsp;-->
				
				<a href="login.php?logout='1'" class="btn btn-success" >Login</a> 
				<a href="register.php?logout='1'" class="btn btn-success" >Sign up</a> 

			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="#" id="title">My Fitness</a>
			</div>
			</div>
		</div><br><br>

		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >

					
				<a class="brand" href="index2.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				
				
				
				
			
				<a class="brand" href="contact.php">CONTACT</a>
				
				<a class="brand" href="about.php">ABOUT US </a>
				
				
				<a class="brand" href="admin.php">ADMIN LOGIN</a>
				<a class="brand" href="doctor.php">DOCTOR LOGIN</a>


				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;width: 100%;height:50%" >		
				<div class="carousel-inner">
				
				
				<div class="active item"><img alt="pic1" src="images/pic1.jpg" style="width:100%;height:350px;"/></div>
				
				<div class="item"><img alt="pic2" src="images/pic2.jpg" style="width:100%;height:350px;"/> </div>

				<div class="item"><img alt="pic3" src="images/pic3.jpg" style="width:100%;height:350px;"/> </div>

				<div class="item"><img alt="pic4" src="images/pic4.jpg" style="width:100%;height:350px;"/> </div>

				<div class="item"><img alt="pic5" src="images/pic5.jpg" style="width:100%;height:350px;"/> </div>

				
				
				
				
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			
		</div>
		<br/><br/>
		<!-- first image -->
		<div>
			<h4 align="center" style="font-size:3vw;color:#00cc44;text-shadow: 0.5px 0.5px 1px black,0 0 5px black,0 0 5px darkblue;"><strong>Take a step for  your Health Diagnose!!</strong></h4><br/>
			<span >
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="r1" src="images/med10.jpg" alt="Laptops" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>


			    
			</span><br><br><br><br>
			<h1 style="display: block;">Welcome To MyFitness!</h1>
              <h4>  <p>MyFitness is an Application which provides personalized recommendation to its users in the form of diet and exercise.The users can get the prediction wheather they are having diabetes or not. If they are predicted positive then personalized diet and exercise are recommended to the users.</p> 
              	<center><p>The system can predict only Type 2 diabetes</p></

              	<p> Please LOGIN or SIGN UP to Continue</p></h4> </center>
			
		</div>
		<br/><br/><br/><br/>
          
<footer >
		<div class="f1">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2020  My Fitness</p>
			</div>
			<div style="float:right;">
			<p class="text-right text-info">
				<span><a style="border-right: 2px solid " href="Admin/adminlogin.php" target="_blank"><b>Admin</b>&nbsp;&nbsp;</a></span>
			 Follow On:
				<span><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter " aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
</p>
			</div>
		</div>
		</footer>	</div>
</body>
</html>



<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>