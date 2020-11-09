<html>
<head>
	<link rel="stylesheet" href="adminfront.css">
	<style>
		#chart-container{
			width:640px;
			height:auto;
			float:right;
			margin-top: 1%;
            margin-right: 5%;
           
             
		}
		body{
			background: #f2f2f2;
		}
		.chart{
			width:700;
			height:500;
			float:right;
			margin-right:30%;
			margin-top:3%;
			margin-left:30px;
			border:3px solid #000;
		}
		h3{
			color:red;
		}
	</style>
</head>
<body>
	<div class='top-heading'>
		<h1>eVoting</h1>
		<button onclick="location.href='voterfront.html'"><strong>LogOut</strong></button>
	</div>
    <div class="chart">
    	<center><h1>Control Panel</h1>
    	<h3>This is Adminstration Panel</h3></center>
	<div id="chart-container">
	<canvas id="mycanvas"></canvas>
    </div></div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <script src="script.js"></script>
<?php
$con = mysqli_connect("localhost","root","","test");
$name = $_POST['adminname'];
$password = $_POST['adminpassword'];
if($name=='admin@gmail.com' AND $password=='admin@000')
	{
		$con = mysqli_connect("localhost","root","","test");
		$query= "SELECT name,votes FROM votes";
		$q = mysqli_query($con,$query);
		
	}
else
	echo 'f';
?>

 
</body></html>