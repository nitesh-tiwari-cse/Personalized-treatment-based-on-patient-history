<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

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



    	#fther1{
		width: 100%;
		height: 600px;
		
		border:2px solid #ffffff;
		margin-top: 30px;
		position: relative;
		border-radius: 15px;
		background-color: #ffffff;
		/*background-color: rgb(153, 230, 255);*/

	    }


	#fther1:hover{
		border:1px solid #ffffff;
		box-shadow:0px 0px 30px rgb(77, 166, 255);
	   }
	
	#chld1{
		width: 350px;
		height: 300px;
		background: solid gray;
		border:1px solid #2196f3;
		margin-left: 50px;
		margin-top: 30px;
	 
		position: absolute;
		border-radius: 15px;
		 text-align: right;
		 float: right;
		 margin-right: 0px;
		 /*border-radius: 50%;*/
		 
		 
		display: transparent;
		position: right; 
		box-shadow:none; 
		background:url('images/dia.jpg');

	    }

	
	/*#chld1:hover{
		box-shadow:0px 0px 60px rgb(77, 166, 255);
	    } */   
                            
	#smchild2{
		width: 500px;
		height: 350px;
		border:1px solid #2196f3;
		margin-left: 440px;
		margin-top: 23px;
		position: absolute;
		border-radius: 15px;
		background-color: rgb(153, 230, 255);
	    }
	    #abt{
	    	margin-top: 20px;
	    	 }
	    /*#des1{

	    	 margin-left: 20px;
	    	 margin-right: 20px;
	    }*/
	    #th{
	    	font-size: 30px;

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
				
				<a href="index2.php?logout='1'" class="btn btn-success" >Logout</a> 
				
			<?php } ?>
			</div>
			


			<div id="heading">
				<a href="#" id="title">My Fitness</a>
			</div>
			</div>
		</div>

		<br><br>

		
		<!-- Navigation bar -->
		
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
					
						<a class="brand" href="index.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				
				
				
				<a class="brand" href="contact2.php">CONTACT</a>
				
				<a class="brand" href="about2.php">ABOUT US </a>
				<a class="brand" href="display.php" >ANALYSIS HISTORY</a>
				<a class="brand" href="excerise.php">EXCERISE PLAN</a>

				
				<a class="brand" href="diet.php">DIETPLAN</a>
				<a class="brand" href="visualization.php">VISUALIZATION</a>
				<a class="brand" href="viewdoc2.php">VIEW DOCTOR LIST </a>
				<a class="brand" href="booking.php">BOOK AN APPONTMENT </a>
				<a class="brand" href="booking.php"> </a>
				<a class="brand" href="booking.php"> </a>
				<a class="brand" href="booking.php"> </a>
				<a class="brand" href="booking.php"> </a>
				<a class="brand" href="booking.php"> </a>
				<a class="brand" href="booking.php"> </a>
				<a class="brand" href="booking.php"> </a>
				<a class="brand" href="booking.php"> </a>
				<a class="brand" href="viewbooking.php">VIEW APPOINTMENT </a>
				
				
				</div>
			</div>
		</div>
		




	 




		<br/><br/> 
		<!-- first image -->
		 <h1>
<?php  if (isset($_SESSION['username'])) : ?>
			<p>Hello <strong><?php echo $_SESSION['username']; ?></strong></p>
			
		<?php endif ?>
</h1>


		<div id="fther1">
			<div id="abt">
			<center><p style="font-size:50px;font-family:Harlow Solid;font-weight: bold;">Contact Us</p></center>
			</div>
			<div id="des1"> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <p id="th" style="font-size:20px;font-family:Gill Sans Nova;font-weight:bold;">
			   	<h4><center>If you face any kind of difficulties while opearting the application you can reach us any time between<br> 10:00 AM TO 6:00 PM Monday to Saturday <br>(Excluding Public Holidays) <br>Below we have provided our Contact details <br> Please feel free to contact in case of difficulties			   	<br></center>
			   	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-whatsapp" aria-hidden="true" style="font-size:30px;"></i>
			   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-size:20px;font-family:Gill Sans Nova;font-weight:bold;">Nitesh Tiwari->8928250285</p><br>
			   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" aria-hidden="true" style="font-size:30px;"></i>
			   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-size:20px;font-family:Gill Sans Nova;font-weight:bold;">Nitesh Tiwari->nitashtiw120@gmail.com</p><br>

			   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-whatsapp" aria-hidden="true" style="font-size:30px;"></i>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-size:20px;font-family:Gill Sans Nova;font-weight:bold;">Rohit Sharma->8879663912</p><br>
			   			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" aria-hidden="true" style="font-size:30px;"></i>
			   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-size:20px;font-family:Gill Sans Nova;font-weight:bold;">Rohit Sharma->rohit.tps123@gmail.com</p><br>

			   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-whatsapp" aria-hidden="true" style="font-size:30px;"></i>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-size:20px;font-family:Gill Sans Nova;font-weight:bold;">Ganesh Wartale->7021577502</p>
			   			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" aria-hidden="true" style="font-size:30px;"></i>
			   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-size:20px;font-family:Gill Sans Nova;font-weight:bold;">Ganesh Wartale->wartaleganesh@gmail.com</p><br>

				 
			   </p>
			</div>
			
			 
		</div>




		<br/><br/><br/><br/><br><br>   
          



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