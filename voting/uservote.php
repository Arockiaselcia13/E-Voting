<html>
<head>
	<link rel="stylesheet" href="voterfront.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.small-box{
	float:right;
    margin-right:40%;
    margin-top:5%;
    width: 25%;
    height:35%;
    border: 3px solid #000;
    }
    h3{
    	text-align: center;
    	padding:10px;
    }
    img{
    	padding:20px;
    }
    button{
    	text-align:center;
    	background:blue;
    	padding:8px 20px;
    	color:#fff;
    	border-radius:4px;
    	

    }
	</style>
</head>
<body>
	<div class='top-heading'>
		<h1>eVoting</h1>
		<button onclick="location.href='adminfront.html'"><strong>Admin Panel</strong></button>
	</div>
<?php
$con = mysqli_connect("localhost","root","","test");
$name = $_POST['votername'];
$voteremail = $_POST['voteremail'];
$voternumber = $_POST['voternumber'];
$value = $_POST['vote'];

$query = "SELECT * FROM voter where cardno = '$voternumber' AND name='$name' ";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
	{
		$con = mysqli_connect("localhost","root","","test");
        $up = "UPDATE voter SET party='$value' WHERE cardno = '$voternumber' ";
        if($con->query($up))
        {?>
        	<div class="small-box">
        		<center><img src="thumb.png" alt="voting" width='100' height='100'></center>
        		<h3>You've Successfully Voted.</h3>
        		<center><button onclick="location.href='voterfront.html'"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Finish</button></center>
        	</div>

        <?php }
	}
else
	echo 'far';
$c = mysqli_connect("localhost","root","","test");
if($value==1)
{
	$vote1 = "UPDATE votes SET votes=votes+1 WHERE id=1";
	$run1 = mysqli_query($c,$vote1);
}
else if($value==2)
{
	$vote2 = "UPDATE votes SET votes=votes+1 WHERE id=2";
	$run2 = mysqli_query($c,$vote2);
}
else if($value==3)
{
	$vote3 = "UPDATE votes SET votes=votes+1 WHERE id=3";
	$run3 = mysqli_query($c,$vote3);
}
else if($value==4)
{
	$vote4 = "UPDATE votes SET votes=votes+1 WHERE id=4";
	$run4 = mysqli_query($c,$vote4);
}
else if($value==5)
{
	$vote5 = "UPDATE votes SET votes=votes+1 WHERE id=5";
	$run5 = mysqli_query($c,$vote5);
}
else if($value==6)
{
	$vote6 = "UPDATE votes SET votes=votes+1 WHERE id=6";
	$run6 = mysqli_query($c,$vote6);
}
?>
</body></html>