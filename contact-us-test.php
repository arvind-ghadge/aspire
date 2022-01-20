<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Aspire Management Solution Pvt. Ltd. - Contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
</head>
<body>
	<?php
		if(isset($_POST["submit"])) {
			$fullname = trim($_POST["fullname"]);
			$fromemail = trim($_POST["fromemail"]);
			$subject = trim($_POST["subject"]);
			$message = trim($_POST["message"]);
			$to = "arvind.n.ghadge@gmail.com";
			$titlesubject = "Contact Information";
			$headers = "";
			$messagetocompany = "Name : " .$fullname. "\n" 
                . "Email : ".$fromemail. "\n"
                . "Subject : ".$subject. "\n"
                . "Message : ".$message. "\n";
            $headers2 = "From:" . $to;
            $succ = mail($to,$titlesubject,$messagetocompany,$headers);
            if($succ) {
            	echo "Submitted Successfully !";
            } else {
            	echo 'Unable to submit !';
            }
		}
	?>
<div class="theme-layout" id="scrollup">
	<section>
		<div class="block">
			<div class="container">
				 <div class="row">
				 	<div class="col-lg-4 column">
				 		<div class="contact-form">
				 			<!--<h3>Keep In Touch</h3>-->
							<h3>Questions, comments or feedback?</h3>
				 			<form action="" method="post">
				 				<div class="row">
				 					<div class="col-lg-12">
				 						<span class="pf-title">Full Name</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Enter your full name" name="fullname" />
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Email</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Enter your email" name="fromemail" />
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Subject</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Enter your subject" name="subject" />
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Message</span>
				 						<div class="pf-field">
				 							<textarea name="message"></textarea>
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<button type="submit" name="submit">Submit</button>
				 					</div>
				 				</div>
				 			</form>
						 </div>						
				 	</div>
					<div class="col-lg-8 column">
				 </div>
			</div>
		</div>
	</section>
	<section>
</div>
</body>
</html>