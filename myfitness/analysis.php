<?php
	include("connection.php");
	error_reporting(0);

	session_start(); 

	

?>

<html>
<head>
<title> Analysis Page</title>
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
			     
				
								
			<?php
			 } 
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


<?php  if (isset($_SESSION['username'])) : ?>
			<h1><p>Hello <strong><?php echo $_SESSION['username']; ?></strong></p></h1>
			
		<?php endif ?>

<h1> Please fill this Analysis form to procees further</h1>
<div align="right">
<a href="knowledge.pdf">Click here to know more about the parameters</a>
</div>
<form autocomplete="off" action="" method="GET">
Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="age"     value="" placeholder="Enter Your Age"/>*Please enter in years only<br><br>

Height&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="height"  value="" placeholder="Enter Your Height"/>*Please enter in cms only<br><br> 

Weight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="weight"  value="" placeholder="Enter Your Weight" />*Please enter in kgs only<br><br> 

Insulin before Meal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="insulin1" value="" placeholder="Enter Insulin level before meal " />  *Please enter in mIU/L only<br><br> 

Insulin after Meal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="insulin2" value="" placeholder="Enter Insulin level after meal " />  *Please enter in mIU/L only<br><br> 


Fasting Glucose Level &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="glucose1" value="" placeholder="Enter Fasting Glucose Level" />*Please enter in mgs/dL only<br><br>  



Glucose after Meal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="glucose2" value="" placeholder="Glucose level After Meal" />*Please enter in mgs/dL only<br><br> 

Diabetes Pedigree Function &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dppff"     value="" placeholder="Diabetes Pedigree Function" /><br><br>

Blood Pressure Systolic(Top) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input type="text" name="bp1"      value="" placeholder="Enter Your Blood Pressure" />*Please enter in mm/Hg only<br><br> 

Blood Pressure Distolic(Bottom) &nbsp;&nbsp;   <input type="text" name="bp2"      value="" placeholder="Enter Your Blood Pressure" />*Please enter in mm/Hg only<br><br> 

Hameglobin A1C Test      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="a1c"     value="" placeholder="Enter your A1C test value" />*Please enter in mg/dL only<br><br> 

Oral Glucose Tolerance Test&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ogtt" value="" placeholder="Enter your OGTT Test level" />*Please enter in mg/dL only<br><br>    

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<input type="submit" name="submit" value="submit"/> 

</form>








<?php

if($_GET['submit'])
{
	date_default_timezone_set('Asia/Kolkata');
	$a=$_GET['age'];
	$h=$_GET['height'];
	$w=$_GET['weight'];
	$i1=$_GET['insulin1'];
	$i2=$_GET['insulin2'];
	$g1=$_GET['glucose1'];
	$g2=$_GET['glucose2'];
	$dpf=$_GET['dppff'];
	$b1=$_GET['bp1'];
	$b2=$_GET['bp2'];
	$a1=$_GET['a1c'];
	$o=$_GET['ogtt'];
	$name= $_SESSION['username']; 
	$d=date('d-m-Y');
	$t=date('H:i');

	//$flag=0;  // Normal 
 
	$flag2=0; // Prediabetes
	$flag3=0; // Diabetes

	$et=$et1=$et2=$et3=$et4=$et5=$et6=$et7=$et8=$et9=$et10=$et11=0;
	$dt=$dt1=$dt2=$dt3=$dt4=$dt5=0;

	if($a!="" && $h!="" && $w!="" && $i1!="" && $i2!="" && $g1!="" && $g2!="" && $a1!="" && $o!="" && $dpf!="" && $b1!="" && $b2!=""  && $name!="" )
	{

			if($a>=18 && $h>=100 && $w>=50 && $i1>=10 && $i2>=16 && $g1>=50 && $g2>=50 && $b1>=90 && $b2>=60 && $dpf>=0 && $a1>=60 && $o>=70)
			{

			

				
			if($a<=23)
			{
				$e1="28 pushup ";
				$d1="One poached egg and half a small avocado spread on one slice of Ezekiel bread, one orange. Total carbs: Approximately 39";
				$et1=42;
				$dt1=39;

			}
			elseif ($a<=27)
			 {
				$e1="30 push up ";
				$d1=" 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34";
				$et1=45;
				$dt1=34;
			}
			elseif($a<=31)
			{
				$e1="32 push up";
				$d1="Two-egg veggie omelet (spinach, mushrooms, bell pepper, avocado) with a half cup black beans, three-quarters cup blueberries. Total carbs: Approximately 34.";
				$et1=48;
				$dt1=34;

			}
			elseif($a<=35)
			{
				$e1="35 push up";
				$d1="Sweet potato toast: two slices (100 g) toasted sweet potato, topped with 1 oz goat cheese, spinach, and 1 tsp sprinkled flaxseed. Total carbs: Approximately 44";
				$et1=52.5;
				$dt1=44;

			}
			elseif ($a<=39)
			 {
				$e1="33 push up";
				$d1="A one-third cup of Grape-Nuts (or similar high-fiber cereal), half a cup blueberries, 1 cup unsweetened almond milk. Total carbs: Approximately 41.";
				$et1=49.5;
				$dt1=41;
			}
			elseif ($a<=43)
			 {
				$e1="18 lunges";
				$d1="1 cup low-fat plain Greek yogurt sweetened with half a banana mashed, 1 cup strawberries, 1 tbsp chia seeds. Total carbs: Approximately 32.";
				$et1=61.2;
				$dt1=32;
			}
			elseif ($a<=47)
			 {
				$e1="15 lunges";
				$d1=" Chocolate peanut oatmeal: 1 cup cooked oatmeal, 1 scoop chocolate vegan or whey protein powder, 1 tbsp peanut butter, 1 tbsp chia seeds. Total carbs: Approximately 21.";
				$et1=51;
				$dt1=21;
			}
			elseif ($a<=51)
			 {
				$e1="21 squats";
				$d1="One poached egg and half a small avocado spread on one slice of Ezekiel bread, one orange. Total carbs: Approximately 39.";
				$et1=21;
				$dt1=39;
			}
			elseif ($a<=55)
			 {
				$e1="10 squats";
				$d1="1 cup (100 g) cooked oatmeal, three-quarters cup blueberries, 1 oz almonds, 2 tsp chia seeds. Total carbs: Approximately 39.";
				$et1=10;
				$dt1=39;
			}
			else
			 {
				$e1="10 min brisk walk";
				$d1="Omelet: two-egg veggie omelet (spinach, mushrooms, bell pepper, avocado) with half a cup black beans, 1 cup blueberries. Total carbs: Approximately 43.";
				$et1=36.8;
				$dt1=43;
			}  //end of if else of exercise e1 and age
			//Start of exercise e2 and height d2=lunch
			//d2->lunch
			if ($h<=140)
			 {
				$e2="10 dumbbell rows";
				$d2="Mexican bowl: two-thirds of a cup low-sodium canned pinto beans, 1 cup chopped spinach, a quarter cup chopped tomatoes, a quarter cup bell peppers, 1 ounce (oz) cheese, 1 tablespoon (tbsp) salsa as sauce. Total carbs: Approximately 30.";
				$et2=25;
				$dt2=30;
			}
			elseif ($h<=142.5)
			 {
				$e2="17 dumbell rows";
				$d2=" Salad: 2 cups fresh spinach, 2 oz grilled chicken breast, half a cup chickpeas, half a small avocado, a half cup sliced strawberries, one quarter cup shredded carrots, 2 tbsp dressing. Total carbs: Approximately 52.";
				$dt2=52;
				$et2=42.5;

			}
			elseif ($h<=145)
			 {
				$e2="20 dumbell rows";
				$d2="Sandwich: two regular slices high-fiber whole grain bread, 1 tbsp plain, no-fat Greek yogurt and 1 tbsp mustard, 2 oz canned tuna in water mixed with a quarter cup of shredded carrots, 1 tbsp dill relish, 1 cup sliced tomato, half a medium apple. Total carbs: Approximately 40.";
				$dt2=40;
				$et2=50;
			}
			elseif ($h<=147.5)
			 {
				$e2="25 dumbell rows";
				$d2="2 oz roast chicken, 1 cup raw cauliflower, 1 tbsp low-fat French dressing, 1 cup fresh strawberries. Total carbs: Approximately 23.";
				$dt2=23;
				$et2=62.5;
			}
			elseif ($h<=150)
			 {
				$e2="16 Jump Squats";
				$d2="Salad: 2 cups spinach, a quarter cup tomatoes, 1 oz cheddar cheese, one boiled chopped egg, 2 tbsp yogurt dressing, a quarter cup grapes, 1 tsp pumpkin seeds, 2 oz roasted chickpeas. Total carbs: Approximately 47.";
				$dt2=47;
				$et2=48;
			}
			elseif ($h<=152.5)
			 {
				$e2="18 Jump Squats";
				$d2="Tacos: two corn tortillas, a one-third cup cooked black beans, 1 oz low-fat cheese, 2 tbsp avocado, 1 cup coleslaw, salsa as dressing. Total carbs: Approximately 70.";
				$dt2=70;
				$et2=54;
			}
			elseif ($h<=155)
			 {
				$e2="20 Jump Squats";
				$d2="One small whole wheat pita pocket, half a cup cucumber, half a cup tomatoes, half a cup lentils, half a cup leafy greens, 2 tbsp salad dressing. Total carbs: Approximately 30.";
				$dt2=30;
				$et2=60;
			}
			elseif ($h<=157.5)
			 {
				$e2="23 Jump Squats";
				$d2="Mexican bowl: a one-third cup brown rice, two-thirds cup home-made baked beans, 1 cup chopped spinach, a quarter cup chopped tomatoes, a quarter cup bell peppers, 1.5 oz cheese, 1 tbsp salsa as sauce. Total carbs: Approximately 43.";
				$dt2=43;
				$et2=69;
			}
			elseif ($h<=160)
			 {
				$e2="25 Jump Squats";
				$d2="Salad: 2 cups fresh spinach, 3 oz grilled chicken breast, half a cup chickpeas, half a small avocado, half a cup sliced strawberries, a quarter cup shredded carrots, 2 tbsp low-fat French dressing. Total carbs: Approximately 49.";
				$dt2=49;
				$et2=75;
			}
			else  
			 {
				$e2="28 Jump Squats ";
				$d2="Sandwich: two regular slices high-fiber whole grain bread, 1 tbsp Greek plain, no-fat yogurt and 1 tbsp mustard, 3 oz canned tuna in water mixed with a quarter cup of shredded carrots, 1 tbsp dill relish, 1 cup sliced tomato, half a medium apple. Total carbs: Approximately 43.";
				$dt2=43;
				$et2=84;
			}
			//end of if  of exercise e2 height
			//Start of exercise e3  weight d3=snack
			//d3->Snack
			if ($w<=40)
			 {
				$e3="Not Possible";
				$d3="20 1-gram baby carrots with 2 tbsp hummus. Total carbs: Approximately 21.";
				$dt3=21;


			}
			elseif ($w<=45)
			 {
				$e3="8 burpees ";
				$d3=" One small peach diced into one-third cup 2% cottage cheese. Total carbs: Approximately 16.";
				$dt3=16;
				$et3=40;
			}
			elseif ($w<=50)
			 {
				$e3="10  burpees";
				$d3="1 cup unsweetened kefir. Total carbs: Approximately 12.";
				$dt3=12;
				$et3=50;
			}
			elseif ($w<=55)
			 {
				$e3="12  burpees";
				$d3="1 cup low-fat plain Greek yogurt mixed with half a small banana. Total carbs: Approximately 15.";
				$dt3=15;
				$et3=60;
			}
			elseif ($w<=60)
			 {
				$e3="15 burpees";
				$d3=" 1 cup celery with 1 tbsp peanut butter. Total carbs: Approximately 6.";
				$dt3=6;
				$et3=75;
			}
			elseif ($w<=65)
			 {
				$e3="18  burpees";
				$d3="One cherry tomato and 10 baby carrots with 2 tbsp hummus. Total carbs: Approximately 14.";
				$dt3=14;
				$et3=90;
			}
			elseif ($w<=70)
			 {
				$e3="8 plank leg raises";
				$d3="1 oz almonds, one small grapefruit. Total carbs: Approximately 26.";
				$dt3=26;
				$et3=24;
			}
			elseif ($w<=75)
			 {
				$e3="10 plank leg raises";
				$d3="20 10-gram baby carrots with 2 tbsp hummus. Total carbs: Approximately 21.";
				$dt3=21;
				$et3=30;
			}
			elseif ($w<=80)
			 {
				$e3="13 plank leg raises";
				$d3="One small peach diced into one third of a cup 2% fat cottage cheese. Total carbs: Approximately 16.";
				$dt3=16;
				$et3=39;
			}
			else  
			 {
				$e3="15 plank leg raises";
				$d3="20 peanuts, 1 cup carrots. Total carbs: Approximately 15.";
				$dt3=15;
				$et3=45;
			}
			//end of if  of exercise e3 and weight
			//Start of exercise e4 and insulin1 d4=dinner
			
			if ($i1<=10)
			 {
				$e4="Not possible";
			}
			elseif ($i1<=12)
			 {
				$e4="7 sit ups";
				$d4="1 cup cooked lentil penne pasta, 1.5 cups veggie tomato sauce (cook garlic, mushrooms, greens, zucchini, and eggplant into it), 2 oz ground lean turkey. Total carbs: Approximately 35.";
				$dt4=35;
				$et4=18.9;
			}
			elseif ($i1<=15)
			 {
				$e4="10 sit ups";
				$d4="Mediterranean couscous: two-thirds cup whole wheat cooked couscous, half a cup sautéed eggplant, four sundried tomatoes, five jumbo olives chopped, half a diced cucumber, 1 tbsp balsamic vinegar, fresh basil. Total carbs: Approximately 38.";
				$dt4=38;
				$et4=27;
			}
			elseif ($i1<=18)
			 {
				$e4="13 sit ups ";
				$d4="Half a cup (50g) succotash, 1 tsp butter, 2 oz pork tenderloin, 1 cup cooked asparagus, half a cup fresh pineapple. Total carbs: Approximately 34.";
				$dt4=34;
				$et4=35.1;
			}
			elseif ($i1<=20)
			 {
				$e4="15 sit ups";
				$d4="A two-thirds cup of quinoa, 8 oz silken tofu, 1 cup cooked bok choy, 1 cup steamed broccoli, 2 tsp olive oil, one kiwi. Total carbs: Approximately 44.";
				$dt4=44;
				$et4=40.5;
			}
			elseif ($i1<=24)
			 {
				$e4="17 sit ups";
				$d4="2 oz salmon filet, one medium baked potato, 1 tsp butter, 1.5 cups steamed asparagus. Total carbs: Approximately 39.";
				$dt4=39;
				$et4=45.9;

			}
			elseif ($i1<=28)
			 {
				
				$e4="10 bicycle crunches";
				$d4="Half medium baked potato with skin, 2 oz broiled beef, 1 tsp butter, 1.5 cups steamed broccoli with 1 tsp nutritional yeast sprinkled on top, three-quarters cup whole strawberries. Total carbs: Approximately 41.";
				$dt4=41;
				$et4=30;
			}
			elseif ($i1<=32)
			 {
				
				$e4="13 bicycle crunches";
				$d4="2 oz boiled shrimp, 1 cup green peas, 1 tsp butter, half a cup cooked beets, 1 cup sauteed Swiss chard, 1 tsp balsamic vinegar. Total carbs: Approximately 39.";
				$dt4=39;
				$et4=39;
			}
			elseif ($i1<=37)
			 {
				
				$e4="15 bicycle crunches";
				$d4="1 cup cooked lentil penne pasta, 1.5 cups veggie tomato sauce (cook garlic, mushrooms, greens, zucchini, and eggplant into it), 2 oz ground lean turkey. Total carbs: Approximately 35.";
				$dt4=35;
				$et4=45;
			}
			elseif ($i1<=42)
			 {
				
				$e4="17 bicycle crunches";
				$d4="Mediterranean couscous: two-thirds cup cooked whole wheat couscous, half a cup sauteed eggplant, four sundried tomatoes, five jumbo olives chopped, half a diced cucumber, 1 tbsp balsamic vinegar, fresh basil. Total carbs: Approximately 38.";
				$dt4=38;
				$et4=51;
			}
			else  
			 {
				
				$e4="19 bicycle crunches ";
				$d4=" half a cup (50 g) succotash, 1.5 oz cornbread, 1 tsp butter, 3 oz pork tenderloin, 1 cup cooked asparagus, half a cup fresh pineapple. Total carbs: Approximately 47.";
				$dt4=47;
				$et4=57;

			}
			//end of if  of exercise e4 and insulin1
			//Start of exercise e5 and insulin2
			if ($i2<=10)
			 {
				$e5="Not possible";
			}
			elseif ($i2<=12)
			 {
				$e5="7 Jump Jacks";
				$et5=21;
			}
			elseif ($i2<=15)
			 {
				$e5="10 Jump Jacks";
				$et5=30;

			}
			elseif ($i2<=40)
			 {
				$e5="12 Jump Jacks ";
				$et5=36;
			}
			elseif ($i2<=60)
			 {
				$e5="15 Jump Jacks";
				$et5=45;
			}
			elseif ($i2<=80)
			 {
				$e5="18 Jump Jacks ";
				$et5=54;
			}
			elseif ($i2<=100)
			 {
				$e5="8 reverse crunches";
				$et5=20;
			}
			elseif ($i2<=130)
			 {
				$e5="12 reverse crunches";
				$et5=30;
			}
			elseif ($i2<=145)
			 {
				$e5="15  reverse crunches";
				$et5=37.5;
			}
			elseif ($i2<=165)
			 {
				$e5="18 reverse crunches";
				$et5=45;
			}
			else  
			 {
				
				$e5="20 reverse crunches";
				$et5=50;
			}
			//end of if  of exercise e5 and insulin2
			//Start of exercise e6 and glucose g1->Fasting glucose
			if ($g1<=35)
			 {
				$e6="not possible";
			}
			elseif ($g1<=45)
			 {
				$e6=" 30 min brisk walk";
				$et6=45;
			}
			elseif ($g1<=60)
			 {
				$e6="35 min jogging";
				$et6=52.5;
			}
			elseif ($g1<=75)
			 {
				$e6="33 min cycling  ";
				$et6=47.8;
			}
			elseif ($g1<=85)
			 {
				$e6="40 min brisk walk";
				$et6=55;
			}
			elseif ($g1<=95)
			 {
				$e6="45 min jogging";
				$et6=67.9;
			}
			elseif ($g1<=100)
			 {
				$e6="38 min bicycle ride";
				$et6=58.3;
			}
			elseif ($g1<=110)
			 {
				$e6="25 min swimming/run";
				$et6=31.4;
				$flag2++;
				

			}
			elseif ($g1<=125)
			 {
				$e6="30 min swimming/run";
				$et6=31.4;
				$flag2++;
			}
			
			else  
			 {
				$e6="35 min swimming/run";
				$et6=42.8;
				$flag3++;
				
				
			}
			//end of if  of exercise e6 and glucose g1
			//Start of exercise e7 and glucose g2  d5=snack
			if ($g2<=30)
			 {
				$e7="Not Possible";

			}
			elseif ($g2<=40)
			 {
				$e7=" 8 climbers";
				$d5=" 1 oz pumpkin seeds, one medium apple. Total carbs: Approximately 26.";
				$dt5=26;
				$et7=16;
			}
			elseif ($g2<=55)
			 {
				$e7="10 climbers";
				$d5=" 16 pistachios, 1 cup jicama. Total carbs: Approximately 15.";
				$dt5=15;
				$et7=20;
			}
			elseif ($g2<=70)
			 {
				$e7="15 climbers";
				$d5="One cherry tomato and 10 baby carrots with 2 tbsp hummus. Total carbs: Approximately 14.";
				$dt5=14;
				$et7=30;
			}
			elseif ($g2<=85)
			 {
				$e7="18 climbers";
				$d5="Half a small avocado drizzled with hot sauce. Total carbs: Approximately 9.";
				$dt5=9;
				$et7=36;
			}
			elseif ($g2<=100)
			 {
				$e7="20 climbers";
				$d5="1 cup celery with 1 tbsp peanut butter. Total carbs: Approximately 6.";
				$dt5=6;
				$et7=40;
			}
			elseif ($g2<=115)
			 {
				$e7="10 high knees";
				$d5="A half cup vegetable juice, 10 stuffed green olives. Total carbs: Approximately 24.";
				$dt5=24;
				$et7=30;
			}
			elseif ($g2<=120)
			 {
				$e7="12  high knees";
				$d5="1 cup low-fat plain Greek yogurt mixed with half a small banana. Total carbs: Approximately 15.";
				$dt5=15;
				$et7=36;
			}
			elseif ($g2<=130)
			 {
				$e7="13 high knees";
				$d5=" 1 cup celery, 1.5 tsp peanut butter. Total carbs: Approximately 6.";
				$dt5=6;
				$et7=39;
			}
			elseif ($g2<=140)
			 {
				$e7="14 high knees";
				$d5="One apple with 2 tsp almond butter. Total carbs: Approximately 16.";
				$dt5=16;
				$et7=42;
			}
			else  
			 {
				$e7="17 high knees";
				
				
				$d5="20 peanuts, 1 cup carrots. Total carbs: Approximately 15.";
				$dt5=15;
				$et7=51;
			}
			//end of if  of exercise e7 and glucose 2
			//Start of exercise e8 and bloood pressure 1
			if ($b1<=90)
			 {
				$e8="Not possible";
			}
			elseif ($b1<=95)
			 {
				$e8="9 Crunches";
				$et8=63;
			}
			elseif ($b1<=100)
			 {
				$e8="12  Crunches";
				$et8=84;
			}
			elseif ($b1<=105)
			 {
				$e8="14 Crunches";
				$et8=98;
			}
			elseif ($b1<=110)
			 {
				$e8="18 Crunches";
				$et8=126;
			}
			elseif ($b1<=115)
			 {
				$e8="8 pilates";
				$et8=16;
			}
			elseif ($b1<=120)
			 {
				$e8="11 pilates";
				$et8=22;
			}
			elseif ($b1<=130)
			 {
				$e8=" 13 pilates";
				$et8=26;
			}
			elseif ($b1<=135)
			 {
				$e8="15 pilates";
				$et8=30;
			}
			elseif ($b1<=140)
			 {
				$e8="17 pilates";
				$et8=34;
			}
			else  
			 {
				$e8="18 pilates ";
				$et8=36;
				
			}
			//end of if  of exercise e8 blood pressure 1
			//Start of exercise e9 and blood pressure 2
			if ($b2<=60)
			 {
				$e9="Not possible";
			}
			elseif ($b2<=65)
			 {
				$e9="8 Russian Twists";
				$et9=40;
			}
			elseif ($b2<=75)
			 {
				$e9="10 Russian Twists";
				$et9=50;
			}
			elseif ($b2<=80)
			 {
				$e9="12 Russian Twists";
				$et9=60;
			}
			elseif ($b2<=90)
			 {
				$e9="8 knee pullins";
				$et9=48;
			}
			elseif ($b2<=95)
			 {
				$e9="10 knee pullins";
				$et9=60;
				
			}
			
			else  
			 {
				$e9=" 15 knee pullins";
				$et9=90;
				
			}
			//end of if  of exercise e9 and blood pressure 2
			//Start of exercise e10 and a1c
			if ($a1<=60)
			 {
				$e10="Not possible";
			}
			elseif ($a1<=117) // Normal
			 {
				$e10=" 10 leg raises";
				$et10=50;
			}
			elseif ($a1<=120) 
			 {
				$e10="15 leg raises";
				$et10=75;
				$flag2++;
			}
			elseif ($a1<=123)
			 {
				$e10=" 20 leg raises";
				$et10=100;
				$flag2++;
				
				
			}
			elseif ($a1<=127)
			 {
				$e10="25 leg raises";
				$et10=125;
				$flag2++;
				
				
			}
			elseif ($a1<=130)
			 {
				$e10="10 Mountain Climbers";
				$et10=70;
				$flag2++;
				
				
			}
			elseif ($a1<=134)
			 {
				$e10="15 Mountain Climbers";
				$et10=105;
				$flag2++;
				
			
			}
			elseif ($a1<=137)
			 {
				$e10="20 Mountain Climbers";
				$et10=140;
				$flag2++;
				
				
			}
			else  
			 {
				$e10="22 Mountain Climbers";
				$et10=154;
				$flag3++;
			}

			//end of if  of exercise e10 and a1c


			//Start of exercise e11 and ogtt 
			if ($o<=70)
			 {
				$e11="Not Possible";
			}
			elseif ($o<=140)
			 {
				$e11="10 jumping ropes ";
				$et11=150;
			}
			elseif ($o<=160)
			 {
				$e11="15 jumping ropes";
				$et11=225;
				$flag2++;
				
				
			}
			elseif ($o<=180)
			 {
				$e11="10 pilates";
				$et11=120;
				$flag2++;
				
			}
			elseif ($o<=199)
			 {
				$e11="20 pilates";
				$et11=240;
				$flag2++;
			}
			else  
			 {
				$e11=" 25 pilates ";
				$et11=300;
				$flag3++;
	
			}




			$et=$et1+$et2+$et3+$et4+$et5+$et6+$et7+$et8+$et9+$et10+$et11; //Total of all calories burned 

			$dt=$dt1+$dt2+$dt3+$dt4+$dt5; //Total of all calories burned 
			//end of if  of exercise e11 and ogtt	

			$query1="INSERT INTO exercise VALUES('$e1','$e2','$e3','$e4','$e5','$e6','$e7','$e8','$e9','$e10','$e11','$et','$name','$d','$t')"; 
			$data2 = mysqli_query($conn,$query1);

			$query2="INSERT INTO diet VALUES('$d1','$d2','$d3','$d4','$d5','$dt','$name','$d','$t')";
			$data3 = mysqli_query($conn,$query2);
				if($data2)
				{
					
					if($flag3!=0)
					{
					
					
					$query="INSERT INTO DIABETES VALUES('$a','$h','$w','$i1','$i2','$g1','$g2','$dpf','$b1','$b2','$a1','$o','Diabetic','$name','$d','$t')";    
					$data = mysqli_query($conn,$query);
					echo "<h1><center>You are Predicted as Diabetic <br><br> Please consult a doctor immediately </center></h1>";
					echo "<h1><center>Your Exercise Plan is  Generated Successfully</center></h1>";
						echo "<br>";
					echo "<h1><center>Your Diet Plan is  Generated Successfully</center></h1>";
						echo "<br>";
					echo "<h3><center> <font color=red> DISCLAIMER <br> THE PREDICTION IS SOLELY BASED ON THE VALUES OF DIFFERENT PARAMETERS ENTERED BY YOU WHICH IS FED TO THE MACHINE LEARNING ALGORITHMS <BR>* PLEASE DO NOT RELY COMPLETELY ON THIS *</font></center></h3>";  
					}

					else if($flag2!=0)
					{
					
							$query="INSERT INTO DIABETES VALUES('$a','$h','$w','$i1','$i2','$g1','$g2','$dpf','$b1','$b2','$a1','$o','Prediabetic','$name','$d','$t')";    
						$data = mysqli_query($conn,$query);
						echo "<h1><center>You are Predicted as Prediabetic  <br><br> Please Consult a Doctor<br> </center></h1>";
						echo "<h1><center>Your Exercise Plan is  Generated Successfully</center></h1>";
						echo "<br>";
						echo "<h1><center>Your Diet Plan is  Generated Successfully</center></h1>";
						echo "<br>";
						echo "<h3><center> <font color=red> DISCLAIMER <br> THE PREDICTION IS SOLELY BASED ON THE VALUES OF DIFFERENT PARAMETERS ENTERED BY YOU WHICH IS FED TO THE MACHINE LEARNING ALGORITHMS <BR>* PLEASE DO NOT RELY COMPLETELY ON THIS * </font></center></h3>";
					}
	
					else
					{		
					

						$query="INSERT INTO DIABETES VALUES('$a','$h','$w','$i1','$i2','$g1','$g2','$dpf','$b1','$b2','$a1','$o','Healthy/ No Diabetes','$name','$d','$t')";    
						$data = mysqli_query($conn,$query);
						echo "<h1><center> You are Predicted as Healthy/Not Having Diabetes <br><br> </center></h1>";
						echo "<h1><center>Your Exercise Plan is  Generated Successfully</center></h1>";
						echo "<br>";
						echo "<h1><center>Your Diet Plan is  Generated Successfully</center></h1>";
						echo "<br>";
						echo "<h3><center> <font color=red> DISCLAIMER <br> THE PREDICTION IS SOLELY BASED ON THE VALUES OF DIFFERENT PARAMETERS ENTERED BY YOU WHICH IS FED TO THE MACHINE LEARNING ALGORITHMS <BR>* PLEASE DO NOT RELY COMPLETELY ON THIS *</font></center></h3>";
					}	
					




					 
					



				}
	}
	else
	{
		echo "<center><h3><font color=red> *Error in Entered Values*</font></h3></center>";
		if($a<18)
		{
			echo "<center><h4><font color=red>*Age cannot be less than 18 years <br>";
		}
		if($h<100)
		{
			echo "<center><h4><font color=red>*Height connot be less than 100 cm <br>";
		}
		if ($w<50)
		 {
			echo "<center><h4><font color=red>*Weight cannot be less than 50 kgs<br>";
		}
		if ($i1<10) 
		{
			echo "<center><h4><font color=red>*Insulin before meal cannot be less than 10 mIU/L <br>";
		}
		if($i2<16)
		{
			echo "<center><h4><font color=red>*Insulin after meal cannot be less than 16 mIU/L <br> ";
		}
		if($g1<50)
		{
			echo "<center><h4><font color=red>*Glucose before meal cannot be less than 50 mgs/dL<br>";
		}
		if($g2<50)
		{
			echo "<center><h4><font color=red>*Glucose after meal cannot be less than 50 mgs/dL<br>";
		}
		if ($b1<90)
		 {
			echo "<center><h4><font color=red>*Systolic Blood Pressure cannot be less than 90 mm/Hg <br>";
		}
		if ($b2<60)
		 {
			echo "<center><h4><font color=red>*Distolic Blood Pressure cannot be less than 60 mm/Hg <br>";
		}
		if($dpf<0)
		{
			echo "<center><h4><font color=red>*Diabetes Pedigree Function cannot be less than zero <br>";
		}
		if($a1<60)
		{
			echo "<center><h4><font color=red>*A1C Test Results cannot be less than 60 mg/dL<br>";
		}
		if($o<70)
		{
			echo "<center><h4><font color=red>*OGTT Test Results cannot be less than 70 mg/dL <br>";
		}

		echo "<center><h3><font color=red> *Please re-enter the appropriate values*</font></h3></center>";
	}


	}
else
	{
		echo "All Fields are required";
	}
}




?>


</body>
</html>