<?php
	include("connection.php");
	error_reporting(0);

	session_start(); 

	

?>

<html>
<head>
<title> Excerise</title>
<title>Home</title>
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
	


<?php  if (isset($_SESSION['username'])) : ?>
			<h1><p>Hello <strong><?php echo $_SESSION['username']; ?></strong></p> </h1>
			
		<?php endif ?> 







<?php

include("connection.php");
error_reporting(0);

$name= $_SESSION['username']; 
$query="SELECT * FROM exercise where username='$name'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);




if($total !=0)
{
	?>
	<h1> Your Exercise as per Your Analysis form is as follows:</h1> <br>
	<table border='5' cellpadding='5' cellspacing="5" >
		<?php 


	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<th>".Date."</th>
			<td>".$result['date']."</td></tr>";
		echo "<tr>
			<th>".Time ."</th>
			<td>".$result['time']."</td></tr>";
		echo "<tr>
			<th>".Exercise1."</th>
			<td>".$result['e1']."</td> </tr>";
		echo "<tr>
			<th>".Exercise2." </th>
			<td>".$result['e2']."</td> </tr>";
		echo "<tr>
			<th>".Exercise3. "</th>
			<td>".$result['e3']."</td> </tr>";
		echo "<tr>
			<th>".Exercise4."</th>
			<td>".$result['e4']."</td> </tr>";
		echo "<tr>
			<th>".Exercise5."</th> 
			<td>".$result['e5']."</td></tr>";
		echo "<tr>
			<th>".Exercise6."</th>
			<td>".$result['e6']."</td> </tr>";
		echo "<tr>
			<th>".Exercise7."</th>
			<td>".$result['e7']."</td></tr>";
		echo "<tr>
			<th>".Exercise8."</th> 
			<td>".$result['e8']."</td></tr>";
		echo "<tr>
			<th>".Exercise9."</th> 
			<td>".$result['e9']."</td></tr>";
		echo "<tr>
			<th>".Exercise10."</th> 
			<td>".$result['e10']."</td></tr>";
		echo "<tr>
			<th>".Exercise11."</th> 
			<td>".$result['e11']."</td></tr>";
		echo "<tr>
			<th>".Total_Calories_Burned."</th> 
			<td>".$result['total']."</td></tr>";
		echo "<tr>
			<th></th>
			<td></td></tr>";
		echo "<tr>
			<th></th>
			<td></td></tr>";
				
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
	echo "Please fill the Analysis Form";
	   echo "<center><h1><a href='Analysis.php?logout='1'' class='btn btn-success' > Analysis Form</a> <br> </center>";
}

?>
</h1></center>
</div>
</body>
</html>