<?php
	include("connection.php");
	error_reporting(0);

	session_start(); 

	

?>

<html>
<head>
<title> View Doctors</title>

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

		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="adminlogin.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				
				
				
				<a class="brand" href="contact.php">CONTACT</a>
				
				<a class="brand" href="about.php">ABOUT US </a>

				<a class="brand" href="viewdoc.php">VIEW DOCTOR LIST </a>

				<a class="brand" href="adddoc.php">ADD NEW DOCTOR </a>
				</div>
			</div>
		</div>







<?php

include("connection.php");
error_reporting(0);


$query="SELECT * FROM doctor";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);




if($total !=0)
{
	?>
	<h1> List of Doctors is as follows</h1> <br>

	<table border='5' cellpadding='5' cellspacing="5" >
		<tr>
			<th>Date of Entry </th>
			<th>Time of Entry</th>
			<th> Name </th>
			<th>Age</th>
			<th>Specialization</th>
			<th>Contact Number</th>
			<th>Location</th>
			<th>Timmings</th>
			<th>Login ID</th>
			<th>Password</th>

			

		</tr>





	<?php 
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td>".$result['Date']."</td>
			<td>".$result['Time']."</td>
			<td>".$result['Name']."</td>
			<td>".$result['Age']."</td>
			<td>".$result['Specialization']."</td>
			<td>".$result['CCC']."</td>
			<td>".$result['Location']."</td>
			<td>".$result['Timmings']."</td>
			<td>".$result['Login_Id']."</td>
			<td>".$result['Password']."</td>


	


		</tr>";
	}

}

?>
<center>
<h1>

<?php

if($total ==0)
{
	echo "No Record found";
	echo "<br>";
	echo "Please Add Doctor Details";

	echo "<center><a href='adddoc.php?logout='1'' class='btn btn-success' ><b>Add New Doctor</b></a>  </center>	</h1>";
	  
}

?>
</h1></center>
</table>