<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.culture,.royal,.place,.map{width: 50%; margin: 2%;
transition: transform .2s;}
.culture:hover{
	transform: scale(1.2);
}
.royal:hover{transform: scale(1.2);}
.place:hover{transform: scale(1.2);}
.map:hover{transform: scale(1.2);}

.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.mid{
	text-align: center;
	color: red;
}
.text{
	font-size: 20px;
	color: black;
}

		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">About Rajasthan</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy">
	<div class="container">


<h1 class="mid">Rajasthan Tourism</h1><br>
<p style="font-family: "Comic Sans MS", cursive, sans-serif	>
Schematic map of Rajasthan Travel map

Umaid Bhavan Palace, Jodhpur
Rajasthan is one of the most popular tourist destinations in India, for both domestic and international tourists. Rajasthan attracts tourists for its historical forts, palaces, art and culture with its slogan 'Padharo mahare desh'. Every third foreign tourist visiting India travels to Rajasthan as it is part of the Golden Triangle for tourists visiting India.

The palaces of Jaipur, lakes of Udaipur, and desert forts of Jodhpur, Bikaner & Jaisalmer are among the most preferred destinations of many tourists, Indian and foreign. Tourism accounts for eight percent of the state's domestic product. Many old and neglected palaces and forts have been converted into heritage hotels. Tourism has increased employment in the hospitality sector. The main sweet of this place is ghewar.</p><br>
<div style="display: block;">
<div style="display: flex; margin-left: -5%;">
	<div class="royal">
		<a href="royal.php"><img style="width: 100%; height: 337px;" src="images/cult.jpg">
			<div class="text">Royal Rjasthan</div></a>
	</div>
	<div class="culture">
		<a href="tourplace.php"><img style="width: 109%; height: 338px;" src="images/camel.jpg">
			<div class="text">Tourist places</div></a>
	</div>
</div>
<div style="display: flex; margin-left: -5% ;">
	<div class="place">
		<a href="about1.php"><img style="width: 100%; height: 319px;"  src="images/culture.jpg"></a>
		<div class="text">Culture</div>
	</div>
	<div class="map">
		<a href="about1.php"><img style="width: 109%; height: 319px;" src="images/map.jpg"></a>
		<div class="text">Business</div></a>
	</div>
</div>
</div>


										<?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{		

?>


		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"><?php 	echo $_GET['type'] ?></h3>
		
		
	<p>
	<?php 	echo $result->detail; ?>


	</p> 
<?php } }?>
	

		
	</div>
</div>
<!--- /privacy ---->
<!--- footer-top ---->  
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>