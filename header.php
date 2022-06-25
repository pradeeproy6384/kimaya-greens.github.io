<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" /> -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<!-- Font Awesom -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<!-- Css -->
	<link rel="stylesheet" type="text/css" href="assets/css/my-style.css">
	<!-- Popup Css -->
	<link rel="stylesheet" type="text/css" href="https://stackoverflow.com/questions/19459912/nested-tabs-in-bootstrap">
	<link rel="stylesheet" type="text/css" href="http://jsfiddle.net/WK2qT">
	<!-- Swipper Slider -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css"> -->
	<link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
	<title> Kimaya Greens</title>
	<style type="text/css">
	.error-msg {
		color: #c70808;
		font-size: 14px;
		text-transform: capitalize;
		display: block;
		margin-top: 5px;
		margin-bottom: 10px;
	}
	</style>
</head>

<body>
	<!-- // Start Video Modal // -->
	<div class="modal pr-pop fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
				<div class="modal-body">
					<iframe width="100%" height="350" src="https://www.youtube.com/embed/5xo8tKamZoc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- // End Video Modal // -->
	<!-- ============= Brochure & Price List ======== -->
	<!-- Download Pricelist -->
	<?php
    if(isset($_POST['downloadprice'])){
    $errorp="false";
    require_once 'phpmailer/class.phpmailer.php';  
    $to  = 'monarchindia05@gmail.com'; // note the comma
    $from = $_POST['uname']; // this is the sender's Email address
    $uname = $_POST['uname'];
    $uphone = $_POST['uphone'];
    $uemail = $_POST['uemail'];
    if(preg_match("/^[a-zA-Z\s]*$/",$uname) and !empty($uname)){
    //echo "Name is correct";
    }
    else {
    $nameerror="Please enter valid name";
    $errorp="true";
    }

    if(filter_var($uemail,FILTER_VALIDATE_EMAIL)){
    //echo "Enter VALID EMAIL";
    }
    else {
    $emailerror="Please enter valid Email";
    $errorp="true";
    }

    if(strlen($uphone) == 10 and is_numeric($uphone)){
    //echo "Enter VALID EMAIL";
    }
    else {
    $phoneerror="Please Enter Valid 10 Digits Mobile Number";
    $errorp="true";
    }
    if($errorp=="false"){
    $subject = "Download Price List Of  Kimaya Greens";
    $mail_body = 'Name:' . $uname . "<br>" . 'Phone:' . $uphone . " <br>". 'Email:' . $uemail . " <br>" ;
    $mail = new PHPMailer();  
    $mail->IsSMTP();                           // Set mailer to use SMTP
    $mail->SMTPDebug  = 0;
    $mail->Host = 'sg2plcpnl0131.prod.sin2.secureserver.net';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'no-replyn@rahejavanya.com'; // your email id
    $mail->Password = 'raheja@123#'; // your password
    $mail->SMTPSecure = 'ssl';                  
    $mail->Port = 465;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('no-replyn@rahejavanya.com', "Kimaya Greens");
    $mail->isHTML(true);  // Set email format to HTML
    $mail->addAddress('monarchindia05@gmail.com','');   // Add a recipient
    // $bodyContent = '<p>This is a email that Radhika send you From LocalHost using PHPMailer</p>';
    $mail->Subject = $subject;
    $mail->Body    = $mail_body;
    if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
       echo '<script type="text/javascript">window.location.href="price.pdf";</script>';
    }
     }
   }
  ?>
		<!-- Download Brochures -->
		<?php
  if(isset($_POST['downloadbrochure'])){
  $error="false";
  require_once 'phpmailer/class.phpmailer.php';  
  $to  = 'monarchindia05@gmail.com'; // note the comma
  $from = $_POST['uname']; // this is the sender's Email address
  $uname = $_POST['uname'];
  $uphone = $_POST['uphone'];
  $uemail = $_POST['uemail'];
  if(preg_match("/^[a-zA-Z\s]*$/",$uname) and !empty($uname)){
  //echo "Name is correct";
  }
  else {
     $nameerror="Please enter valid name";
     $error="true";
  }
  
  if(filter_var($uemail,FILTER_VALIDATE_EMAIL)){
    //echo "Enter VALID EMAIL";
  }
  else {
     $emailerror="Please enter valid Email";
     $error="true";
  }

  if(strlen($uphone) == 10 and is_numeric($uphone)){
    //echo "Enter VALID EMAIL";
  }
  else {
     $phoneerror="Please Enter Valid 10 Digits Mobile Number";
     $error="true";
  }

  if($error=="false"){
  $subject = "Download Brochure Of Kimaya Greens";
  $mail_body = 'Name:' . $uname . "<br>" . 'Phone:' . $uphone . "<br>". 'Email:' . $uemail . "<br>" ;
  $mail = new PHPMailer();  
  $mail->IsSMTP();                           // Set mailer to use SMTP
  $mail->SMTPDebug  = 0;
  $mail->Host = 'sg2plcpnl0131.prod.sin2.secureserver.net';              // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                     // Enable SMTP authentication
  $mail->Username = 'no-replyn@rahejavanya.com'; // your email id
  $mail->Password = 'raheja@123#'; // your password
  $mail->SMTPSecure = 'ssl';                  
  $mail->Port = 465;     //587 is used for Outgoing Mail (SMTP) Server.
  $mail->setFrom('no-replyn@rahejavanya.com', "Kimaya Greens");
  $mail->isHTML(true);  // Set email format to HTML
  $mail->addAddress('monarchindia05@gmail.com','Subhank');   // Add a recipient
  // $bodyContent = '<p>This is a email that Radhika send you From LocalHost using PHPMailer</p>';
  $mail->Subject = $subject;
  $mail->Body    = $mail_body;
  if(!$mail->send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
     echo '<script type="text/javascript">window.location.href="brochure.pdf";</script>';
  }
 } 
}

?>
			<!-- ====  Download Price List Modal ===== -->
			<div id="pricelist" class="modal fade pr-pop" role="dialog">
				<div class="modal-dialog modal-dialog-centered enqr-model-a">
					<div class="modal-content enqr-model-b">
						<div class="modal-body tp-qr-pop">
							<button type="button" class="close en-close" data-dismiss="modal">&times;</button>
							<div class="row">
								<div class="col-md-12">
									<div class="enquiry-popup pop-bg">
										<div class="frm-ttl form-message">
											<center><small>Submit Your Details For Latest Information & Best Inventory. </small></center>
										</div>
										<form name="pricelist" action="" method="POST">
											<div class="form-field">
												<input class="form-control bn-fld" autocomplete="off" name="uname" id="uname" placeholder="Your Name" type="text" /> <span class="error-msg"> <?= isset($nameerror)?$nameerror:"" ?> </span> </div>
											<div class="form-field">
												<input type="text" autocomplete="off" name="uemail" id="uemail" placeholder="Email ID" class="form-control bn-fld"> <span class="error-msg"> <?= isset($emailerror)?$emailerror:"" ?> </span> </div>
											<div class="form-field clear-float">
												<input type="text" class="form-control bn-fld" placeholder="Enter Mobile" name="uphone" id="uphone" maxlength="10" autocomplete="off"> <span class="error-msg"> <?= isset($phoneerror)?$phoneerror:"" ?> </span> </div>
											<div class="form-btn">
												<button type="submit" name="downloadprice" class="btn wish-btn sub-bttn frm-btn"> Download Price List </button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Download Brochures -->
			<div id="brochure" class="modal fade pr-pop" role="dialog">
				<div class="modal-dialog modal-dialog-centered enqr-model-a">
					<div class="modal-content enqr-model-b">
						<div class="modal-body tp-qr-pop">
							<button type="button" class="close en-close" data-dismiss="modal">&times;</button>
							<div class="row">
								<div class="col-md-12">
									<div class="enquiry-popup pop-bg">
										<div class="frm-ttl form-message">
											<center><small>Submit Your Details For Latest Information & Best Inventory. </small></center>
										</div>
										<form name="brochure" action="" method="POST">
											<div class="form-field">
												<input class="form-control bn-fld" autocomplete="off" name="uname" id="uname" placeholder="Your Name" type="text" /> <span class="error-msg"> <?= isset($nameerror)?$nameerror:"" ?> </span> </div>
											<div class="form-field">
												<input type="text" autocomplete="off" name="uemail" id="uemail" placeholder="Email ID" class="form-control bn-fld" /> <span class="error-msg"> <?= isset($emailerror)?$emailerror:"" ?> </span> </div>
											<div class="form-field clear-float">
												<input type="text" class="form-control bn-fld" placeholder="Enter Mobile" name="uphone" id="uphone" maxlength="10" autocomplete="off" /> <span class="error-msg"> <?= isset($phoneerror)?$phoneerror:"" ?> </span> </div>
											<div class="form-btn">
												<button type="submit" name="downloadbrochure" class="btn wish-btn frm-btn"> Download Brochure </button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============= End Brochure & Price List ====== -->
			<!-- ============= Start Popup Query ====== -->

			<body>
			
		<?php
    if(isset($_POST['popup-query'])){
    $errorsq="false";
    require_once 'phpmailer/class.phpmailer.php';  
    $to  = 'monarchindia05@gmail.com'; // note the comma
    $from = $_POST['uname']; // this is the sender's Email address
    $uname = $_POST['uname'];
    $uphone = $_POST['uphone'];
    //$ubudget = $_POST['ubudget'];
    $uemail = $_POST['uemail'];
    $uquery = $_POST['uquery'];
    if(preg_match("/^[a-zA-Z\s]*$/",$uname) and !empty($uname)){
    //echo "Name is correct";
    }
    else {
    $nameerror="Please enter valid name";
    $errorsq="true";
    }

    if(filter_var($uemail,FILTER_VALIDATE_EMAIL)){
    //echo "Enter VALID EMAIL";
    }
    else {
    $emailerror="Please enter valid Email";
    $errorsq="true";
    }

    if(strlen($uphone) == 10 and is_numeric($uphone)){
    //echo "Enter VALID EMAIL";
    }
    else {
    $phoneerror="Please Enter Valid 10 Digits Mobile Number";
    $errorsq="true";
    }

    if($errorsq=="false") {
    $subject = "Kimaya Greens Enquiry";
    $mail_body = 'Name:' . $uname . "<br>" . 'Phone:' . $uphone . "<br>" . 'Email:' . $uemail . "<br>" . 'Query:' . $uquery . "<br>" ;
    $mail = new PHPMailer();  
    $mail->IsSMTP();                           // Set mailer to use SMTP
    $mail->SMTPDebug  = 0;
    $mail->Host = 'sg2plcpnl0131.prod.sin2.secureserver.net';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'no-replyn@rahejavanya.com'; // your email id
    $mail->Password = 'raheja@123#'; // your password
    $mail->SMTPSecure = 'ssl';                  
    $mail->Port = 465;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('no-replyn@rahejavanya.com', "Kimaya Greens");
    $mail->isHTML(true);  // Set email format to HTML
    $mail->addAddress('monarchindia05@gmail.com','Shubhank');   // Add a recipient
    // $bodyContent = '<p>This is a email that Radhika send you From LocalHost using PHPMailer</p>';
    $mail->Subject = $subject;
    $mail->Body    = $mail_body;
    if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo '<script type="text/javascript">window.location.href="thank_you.html";</script>';
    }
      }
   }
   ?>
<!-- // Start Popup Query // -->
<div class="modal pr-pop fade" id="query" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	<div class="modal-body">
		<div class="form-message pop-msg"> <small><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>Register here and Avail the <span class="text-danger">Best Offers!!</span></small></div>
		<form name="sideform" method="POST" action="">
			<div class="form-field">
				<input class="form-control bn-fld" autocomplete="off" name="uname" id="uname" placeholder="Your Name" type="text"> <span class="error-msg"> <?= isset($nameerror)?$nameerror:"" ?> </span> </div>
			<div class="form-field">
				<input type="text" autocomplete="off" name="uemail" id="uemail" placeholder="Email ID" class="form-control bn-fld"> <span class="error-msg"> <?= isset($emailerror)?$emailerror:"" ?> </span> </div>
			<div class="form-field clear-float">
				<input type="text" autocomplete="off" placeholder="Enter Mobile" class="form-control bn-fld" name="uphone" id="uphone" maxlength="10"> <span class="error-msg"> <?= isset($phoneerror)?$phoneerror:"" ?> </span> </div>
			  <!-- <div class="form-field clear-float">
				<select class="form-control bn-fld" id="ftselect" name="ubudget">
				<option value="0" selected="">Choose Your Budget...</option>
				<option value="75 Lacs to 1 Cr">75 Lacs to 1 Cr</option>
				<option value="1 Cr to 1.25 Cr">1 Cr to 1.25 Cr</option>
				<option value="1.25 Cr to 1.50 Cr">1.25 Cr to 1.50 Cr</option>
				</select>
				</div> -->
			<div class="form-field">
				<textarea class="form-control bn-fld1" autocomplete="off" rows="2" name="uquery" id="uquery" placeholder="Query" id="message"></textarea>
			</div>
			<div class="form-btn">
				<button type="submit" name="popup-query" class="btn submnt frm-btn">SEND QUERY</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
<!-- // End Query Modal // -->
<!-- ======== Start Header ======= -->
<header class="pr-navigation pr-nav" id="top">
<div class="downalod_links" id="downalod_links">
<div class="container-fluid conatiner-pad">
	<div class="row">
		<div class="col-md-12">
			<div class="download_list">
				<ul>
					<li><span><i class="fa fa-download an_bounce" aria-hidden="true"></i></span> <a id="brochure-pricelist" data-toggle="modal" data-target="#pricelist">&nbsp;Download Price List </a> </li>
					<li><span><i class="fa fa-download an_bounce" aria-hidden="true"></i></span> <a data-toggle="modal" id="brochure-pdf" data-target="#brochure">&nbsp;Download Brochure </a> </li>
				</ul>
			</div>
			<div class="phone_call"><a href="tel:+919560639503"><i class="fas fa-mobile-alt faa-horizontal animated" aria-hidden="true"></i>&nbsp;+91 9560 639 503</a></div>
		</div>
	</div>
</div>
</div>
<!-- ========== Download Link ======= -->
<nav class="navbar navbar-expand-lg">
<div class="container-fluid conatiner-pad">
	<div class="row">
		<a class="navbar-brand d-none d-md-block" href="http://www.kimayagreens.com"><img src="assets/images/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse d-none d-md-block" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active"> <a class="nav-link" href="http://www.kimayagreens.com">Home <span class="sr-only">(current)</span></a> </li>
				<li class="nav-item"> <a class="nav-link" href="gallery.php">Gallery</a> </li>
				<li class="nav-item"> <a class="nav-link" href="master-plan.php">Master Plan</a> </li>
				<li class="nav-item"> <a class="nav-link" href="floor-plan.php">Floor Plan</a> </li>
				<li class="nav-item"> <a class="nav-link" href="location-map.php">Location Map</a> </li>
				<li class="nav-item"> <a class="nav-link" href="specification.php">Specification</a> </li>
			</ul>
		</div>
	</div>
</div>
</nav>
<div id="mySidenav" class="sidenav d-md-none d-sm-block"> 
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="http://www.kimayagreens.com">Home</a> 
	<a href="gallery.php">Gallery</a> 
	<a href="master-plan.php">Master Plan</a> 
	<a href="floor-plan.php">Floor Plan</a> 
	<a href="location-map.php">Location Map</a> 
	<a href="specification.php">Specification</a> 
</div> <span onclick="openNav()" class="open_nav d-md-none d-sm-block">
<div  onclick="myFunction(this)">
<div class="bar1"></div>
<div class="bar2"></div>
<div class="bar3"></div>
</div>
</span> 
</header>