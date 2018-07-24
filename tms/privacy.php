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
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
/* new code*/
#pri{
	margin: 10%;
}
p::first-letter
{
	font-size: 50px;
	color: blue;
}


		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Privacy Policy</h1>
	</div>
</div>
<div style="background-color: #f2e9da;">
<div id="pri"><p>Journey Travel & Tours,</p> is committed to maintaining the privacy of personal information that you provide to us when using this tourism web site. This Privacy Policy describes how we treat personal information received about you when you visit this website. These other web sites are not subject to this Privacy Policy. We recommend that you review the privacy policy at each such web site to determine how that site protects your privacy.
<br>
<br>
<h2><b>Privacy Policy Promise</b></h2>
<br>
While information is the cornerstone of our ability to provide superior service, our most important asset is our clients’ trust. Keeping client information secure, and using it only as our clients would want us to, is a top priority for all of us at Journey Travel & Tours. Here then, is our promise to our individual customers:

 <li>We will safeguard, according to strict standards of security and confidentiality, any information our customers share with us.</li>
<li>We will limit the collection and use of customer information to the minimum we require to deliver superior service to our customers, which includes advising our customers about our products, services and other opportunities, and to administer our business.</li>
<li>We will permit only authorized employees, who are trained in the proper handling of customer information, to have access to that information. Employees who violate our Privacy Promise will be subject to our normal disciplinary process.</li>
<li>We will not reveal customer information to any external organization unless we have previously informed the customer in disclosures or agreements, or are required by law.</li>
<li>We will always maintain control over the confidentiality of our customer information. We may, however, share customer information with reputable companies when a customer has expressed an interest in their service or product. Please note that this Privacy Policy does not apply to these other companys use of customer information.</li>
<li>Whenever we hire other organizations to provide support services, we will require them to conform to our privacy standards and to allow us to audit them for compliance.</li>
<li>We will attempt to keep customer files complete, up-to-date, and accurate. We will tell our customers how and where to conveniently access their information (except when we’re prohibited by law) and how to notify us about errors which we will promptly correct.</li>
<br><br>
<h2><b>Information We Collect</b></h2>
<br>
General:

When you register, and at other times, we may collect personally identifiable information from you that may include your name, address, telephone number, e-mail address, and facts about your computer. We do not, however, knowingly collect personal information from children under the age of thirteen. In addition, if a user is under 18, unless consent is obtained from your parent/guardian, you are not allowed to provide us with personal information.
<br><br>
<h2><b>Web Site Usage Information:</b></h2>
<br>
We automatically collect IP addresses and Web site usage information from you when you visit our Web site. This information helps us evaluate how our visitors and customers use and navigate our Web site on an aggregate basis, including the number and frequency of visitors and customers to each Web page, and the length of their visits.
<br><br>
<h2><b>How We Use Information Collected</b></h2>
<br>
We may use information in the following ways:

For the purposes for which you specifically provided the information.
To send you e-mail notifications about our new or existing products and services, special offers, or to otherwise contact you.
To enhance existing features or develop new features, products and services.
To allow us to personalize the content and advertising that you and others see based on personal characteristics or preferences.
We may combine the information that we collect from you on http://www.journeytours.com with information that you provide to us in connection with your use of our other products, services and web site.
We may disclose and use personally identifiable information in special circumstances where it is necessary to enforce our Terms of Use (for example, when necessary to protect our intellectual property rights). We may also disclose or use your personal information when we, in good faith, believe that the law requires us to do so.
<br><br>
<h2><b>Cookies</b></h2>
<br>
We employ cookie technology to help visitors and customers move faster through our site. When you sign on to our Web site or take advantage of several key features, we may pass cookies to your computer. A cookie is a string of information that is sent by a Web site and stored on your hard drive or temporarily in your computer’s memory.
<br><br>
<h2><b>Security</b></h2>
<br>
The personally identifiable information we collect about you is stored in limited access servers. We will maintain safeguards to protect the security of these servers and your personally identifiable information.
<br><br>
<h2><b>Internet-based Transfers</b></h2>
<br>
Given that the Internet is a global environment, using the Internet to collect and process personal data necessarily involves the transmission of data on an international basis. Therefore, by browsing http://www.journeytours.com and communicating electronically with us you acknowledge and agree to our processing of personal data in this way.
<br><br>
<h2><b>Policy Modifications</b></h2>
<br>
We may change this Privacy Policy from time to time. We will post any changes here, so be sure to check back periodically. However, please be assured that if the Privacy Policy changes in the future, we will not use the personal information you have submitted to us under this Privacy Policy in a manner that is materially inconsistent with this Privacy Policy, without your prior consent.
<br><br>
<h2><b>Comments and Questions</b></h2>
<br>
If you have any questions, comments or concerns about our Privacy Policy, please contact us.
</div>
</div>
<br><br>

<div style="font-size: 30px; font-style: italic;margin-left:  20%;">Anywhere in the Rajasthan you want to go...we can get you there!</div>

<!--- /banner-1 ---->

<!--- privacy ---->
<div class="privacy">
	<div class="container">
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