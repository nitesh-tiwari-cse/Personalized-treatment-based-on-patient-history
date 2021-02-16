<?php 


  include("connection.php");
  error_reporting(0);

  session_start(); 




$connect = mysqli_connect("localhost", "root", "", "mydatabase");
$name= $_SESSION['username']; 
$query = "SELECT * FROM diabetes where username='$name'";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ Glucose1:'".$row["Glucose1"]."', Glucose1:".$row["Glucose1"].", Glucose1:".$row["Glucose1"]." }, ";

// $chart_data .= "{ Age:'".$row["Age"]."', Height:".$row["Height"].", Weight:".$row["Weight"].", Insulin1:".$row["Insulin1"]."}, ";


}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>Age Visualization</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  




<link rel="shortcut icon" href="images/favicon.png"></link>
  <meta  http-equiv="content-Type" content="text/html" charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1,user-scalable=0"/>
    <meta name="description" content="global"/>
    <meta name="distribution" content="global"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge,chrome=1"/>
  <link href="css/bootstrap.min.css" rel="stylesheet" ></link>
  <link href="css/bootstrap.css" rel="stylesheet" ></link>
  <link href="css/Default.css" rel="stylesheet" > </link>
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
      .text-right .text-info  {
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
        
                
      <?php }
       ?>
      
      
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
    
    <div>
      
      <div class="content">
    <h1 style="display: block;">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Hello <strong><?php echo $_SESSION['username'];   endif ?></strong></p>

                 

<p align="right"><a href="vinput.php" class="btn btn-success" >Back</a> </p>











  <div class="container" style="width:900px;">
   <h2 align="center">Your Glucose(Before Meal) Statistics</h2>
   <!-- <h3 align="center">Last 10 Years Profit, Purchase and Sale Data</h3>  --> 
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'Glucose1',
 ykeys:['Glucose1'],
 labels:['Glucose1'],
  barColors: ["#ff4000"],
 hideHover:'auto',
 stacked:true
});
</script>