

<?php
session_start();
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
		height: 400px;
		
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
				
				

				<a href="login.php?logout='1'" class="btn btn-success" >Login</a> 
				<a href="register.php?logout='1'" class="btn btn-success" >Sign up</a> 

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
					
					
				<a class="brand" href="index2.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				
				
				
				
			
				<a class="brand" href="contact.php">CONTACT</a>
				
				<a class="brand" href="about.php">ABOUT US </a>
				
				
				<a class="brand" href="admin.php">ADMIN LOGIN</a>
				<a class="brand" href="doctor.php">DOCTOR LOGIN</a>
				
				</div>
			</div>
		</div>
		




	 




		<br/><br/> 
		<!-- first image -->
		 




		<div id="fther1">
			<div id="abt">
			<center><p style="font-size:50px;font-family:Harlow Solid;font-weight: bold;">About Us</p></center>
			</div>
			<div id="des1"> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <p id="th" style="font-size:20px;font-family:Gill Sans Nova;font-weight:bold;">
				Health care practices involve collecting all kinds of patient data which would help the doctor correctly diagnose the condition the subject is likely suffering from. This data could be everything from the simple symptoms observed by the subject, initial diagnosis by a physician or a detailed test result from a lab. Thus far this data is only utilized for subjective analysis by a doctor who then ascertains the disease in play using his/her personal medical expertise.<br><br>
               We have developed an application which can be used by all kinds of people for tracking their health.We have created a system which will be able to predict wheather the person is having diabetes or not. We have classified our patients into three categories as Healthy, Prediabetic or Diabetes.The user needs to enter the details of the parameters mentioned in the analysis form and the system will apply machine learning algorithm on that to predict wheather person is having diabetes or not. The details are stored in the database and displayed to the user whenever he clicks on respective tabs.
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