<?php
	include("connection.php");
	error_reporting(0);

	session_start(); 

	

?>

<html>
<head>
<title> Profile</title>

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
<body>

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
			     <a href="index2.php?logout='1'" class="btn btn-success" >Logout</a> 
				
								
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="#" id="title">My Fitness</a>
			</div>
			</div>
		</div><br><br>

	</div>

		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				<a class="brand" href="profile.php">PROFILE</a>
				
				<a class="brand" href="reservation.php"></a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="reservation.php"></a>
				
				<a class="brand" href="about.php">ABOUT US </a>
				
				
				<a class="brand" href="display.php" >ANALYSIS HISTORY</a>
				
				
				
				<a class="brand" href="#" ></a>
				<a class="brand" href="reservation.php"></a>
				<a class="brand" href="reservation.php"></a>
				<a class="brand" href="reservation.php"></a>
				<a class="brand" href="reservation.php"></a>
				<a class="brand" href="reservation.php"></a>
				<a class="brand" href="excerise.php">EXCERISE</a>
				<a class="brand" href="diet.php">DIETPLAN</a>
				</div>
			</div>
		</div>


	


<?php  if (isset($_SESSION['username'])) : ?>
			<h1><p>Hello <strong><?php echo $_SESSION['username']; ?></strong></p> </h1>
			
		<?php endif ?> 





<?php

include("connection.php");
error_reporting(0);

$name= $_SESSION['username']; 
$query="SELECT * FROM profile where username='$name'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total ==0)
{
	?>
	<h1> Please fill this Analysis form to procees further</h1>
	<div align="right">

	</div>
	<form autocomplete="off" action="" method="GET">
	Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="nam"     value="" placeholder="Enter Your Name"/><br><br>

	Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="age"  value="" placeholder="Enter Your Age"/><br><br> 

	Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gender"  value="" placeholder="Enter Your Gender" /><br><br> 

	Contact Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="contact" value="" placeholder="Enter Contact Number " />  <br><br> 

	Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" value="" placeholder="Enter Address " />  <br><br> 


		<input type="submit" name="submit" value="submit"/> 

		</form>

}
else
{
	
	<?php 

		if($_GET['submit'])
		{
			date_default_timezone_set('Asia/Kolkata');
			$n1=$_GET['nam'];
			$h=$_GET['age'];
			$w=$_GET['gender'];
			$i1=$_GET['contact'];
			$i2=$_GET['address'];
	
			$d=date('d-m-Y');
			$t=date('H:i');

	

	if($n1!="" && $h!="" && $w!="" && $i1!="" && $i2!="" )
	{

			$query="INSERT INTO profile VALUES('$n1','$h','$w','$i1','$i2','$d','$t')";
			$data = mysqli_query($conn,$query);

	}
	else
	{
		echo " All feilds required";
	}

	



include("connection.php");
error_reporting(0);

$name= $_SESSION['username']; 
$query="SELECT * FROM profile where username='$name'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);




if($total !=0)
{
	?>

	<table border='5' cellpadding='5' cellspacing="5" >
		<?php 


	while($result=mysqli_fetch_assoc($data))
	{
		
		echo "<tr>
			<th>".Name."</th>
			<td>".$result['e1']."</td> </tr>";
		echo "<tr>
			<th>".Age." </th>
			<td>".$result['e2']."</td> </tr>";
		echo "<tr>
			<th>".Gender. "</th>
			<td>".$result['e3']."</td> </tr>";
		echo "<tr>
			<th>".Contact_Number."</th>
			<td>".$result['e4']."</td> </tr>";
		echo "<tr>
			<th>".Address."</th> 
			<td>".$result['e5']."</td></tr>";
		
		echo "<tr>
			<th></th>
			<td></td></tr>";
		echo "<tr>
			<th></th>
			<td></td></tr>";
				
	}

}
}

?>