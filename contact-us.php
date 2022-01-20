<? php
	if(isset($_POST['submit'])){
		$fullname = $ POST('fullname');
		$fromemail = $ POST('fromemail');
		$subject = $ POST('subject');
		$message = $ POST('message');
		
		$to = "info@aspiremgs.co.in";
		$subject = "$name has been sent a mail"
		
		$subject = "
		<html>
			<body>
			<table style='width: 600px;'>
				<tbody>
					<tr>
						<td style='width:150px;'><strong>Full Name: </strong></td>
						<td style='width:400px;'>$fullname</td>
					</tr>
					<tr>
						<td style='width:150px;'><strong>Email ID: </strong></td>
						<td style='width:400px;'>$fromemail</td>
					</tr>
					<tr>
						<td style='width:150px;'><strong>subject: </strong></td>
						<td style='width:400px;'>$subject</td>
					</tr>
					<tr>
						<td style='width:150px;'><strong>message: </strong></td>
						<td style='width:400px;'>$message</td>
					</tr>
				</tbody>
			</table>
			</body>
		</html>
		";
		
		// Always set content-type html when sending HTML email
		$headers = "MIME=Version: 1.0" . "r\n";
		$headers = "Content-type:text/html;charset=UTF-8" . "r\n";
		
		// For send the email
		$headers = 'From: bdm@aspiremgs.co.in' . "r\n";
		$headers = 'Cc: info@aspiremgs.co.in' . "r\n";
		$headers = 'BCc: arvind.n.ghadge@gmail.com' . "r\n";
		
		if(mail($to,$subject,$message,$headers)){
			echo "
				<script>
					alert('Mail has been sent successfully');
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('EMAIL FAILED');
				</script>
			";
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Aspire Management Solution Pvt. Ltd. - Contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
	<link rel="stylesheet" href="css/icons.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="css/chosen.css" />
	<link rel="stylesheet" type="text/css" href="css/colors/colors.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	
</head>
<body>



<div class="theme-layout" id="scrollup">
	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="index.html" title=""><img src="images/logo.jpg" alt="" /></a></div>
			<div class="menu-resaction">
				<div class="res-openmenu">
					<img src="images/icon.png" alt="" /> Menu
				</div>
				<div class="res-closemenu">
					<img src="images/icon2.png" alt="" /> Close
				</div>
			</div>
		</div>
		<div class="responsive-opensec">
			<div class="btn-extars">
				<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
				<!-- <ul class="account-btns">
					<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
				</ul> -->
			</div><!-- Btn Extras -->
			<form class="res-search">
				<input type="text" placeholder="Job title, keywords or company name" />
				<button type="submit"><i class="la la-search"></i></button>
			</form>
			<div class="responsivemenu">
				<ul>
					<li><a href="index.html" class="active">Home</a></li>
						<li class="menu-item-has-children"><a href="javascript:;" title="">Our Solutions / Services</a>
							<ul>
								<li><a href="executive-search.html">Executive Search</a></li>
								<li><a href="cxo-and-board-level-hiring.html">CXO and Board Level Hiring</a></li>
								<li><a href="market-&-talent-mapping.html">Market &amp; Talent Mapping</a></li>
								<li><a href="recruitment-process-outsourcing.html">Recruitment Process Outsourcing</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="javascript:;" title="">About Us</a>
							<ul>
								<li><a href="company-profile.html">Company Profile</a></li>
								<li><a href="our-expert-team.html">Our Expert Team</a></li>
								<li><a href="domain-expertise.html">Domain Expertise</a></li>
								<li><a href="core-values.html">Core Values</a></li>
								<li><a href="why-aspire.html">Why Aspire?</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="javascript:;" title="">Clients</a>
							<ul>
								<li><a href="our-methodology.html">Our Methodology</a></li>
								<li><a href="testimony.html">Testimony</a></li>
								<li><a href="our-work-integrities.html">Our Work Integrities</a></li>
								
								<li><a href="post-your-requirement.html" title="">Post your requirement</a></li>

							</ul>
						</li>
						<li class="menu-item-has-children"><a href="javascript:;" title="">Candidates</a>
							<ul>
								<li><a href="career-management.html">Careers management</a></li>
								<li><a href="interview-tips.html">Interview Tips</a></li>
								<li><a href="cv-essentials.html">CV Essentials</a></li>
								<li><a href="post-your-resume.html">Post your resume</a></li>
							</ul>
						</li>
						
						<li><a href="career-with-aspire.html" title="">Careers @Aspire</a></li>
						<li><a href="contact-us.html" title="">Contact us</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<header class="style2 fixed-style">
		<div class="menu-sec">
			<div class="container">
				<div class="logo">
					<a href="index.html" title=""><img src="images/logo.jpg" alt="" /></a>
				</div>
				<!--<div class="btn-extars">
					<a href="post-your-resume.html" title="" class="post-job-btn"><i class="la la-plus"></i>Post your resume</a>
				</div>-->
				<nav>
					<ul>
						<li><a href="index.html" class="active">Home</a></li>
						<li class="menu-item-has-children"><a href="javascript:;" title="">Our Solutions / Services</a>
							<ul class="big">
								<li><a href="executive-search.html">Executive Search</a></li>
								<li><a href="cxo-and-board-level-hiring.html">CXO and Board Level Hiring</a></li>
								<li><a href="market-&-talent-mapping.html">Market &amp; Talent Mapping</a></li>
								<li><a href="recruitment-process-outsourcing.html">Recruitment Process Outsourcing</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="javascript:;" title="">About Us</a>
							<ul>
								<li><a href="company-profile.html">Company Profile</a></li>
								<li><a href="our-expert-team.html">Our Expert Team</a></li>
								<li><a href="domain-expertise.html">Domain Expertise</a></li>
								<li><a href="core-values.html">Core Values</a></li>
								<li><a href="why-aspire.html">Why Aspire?</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="javascript:;" title="">Clients</a>
							<ul>
								<li><a href="our-methodology.html">Our Methodology</a></li>
								<li><a href="testimony.html">Testimony</a></li>
								<li><a href="our-work-integrities.html">Our Work Integrities</a></li>
								
								<li><a href="post-your-requirement.html" title="">Post your requirement</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="javascript:;" title="">Candidates</a>
							<ul>
								<li><a href="career-management.html">Careers management</a></li>
								<li><a href="interview-tips.html">Interview Tips</a></li>
								<li><a href="cv-essentials.html">CV Essentials</a></li>
								<li><a href="post-your-resume.html">Post your resume</a></li>
							</ul>
						</li>
						
						<li><a href="career-with-aspire.html" title="">Careers @Aspire</a></li>
						<li><a href="contact-us.html" title="">Contact us</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
	<section class="banner contact-us-banner">
		<div class="block no-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner2">
							<div class="inner-title2">
								<h3>Contact us</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="breadcrumb-section">
		<div class="block no-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="page-breacrumbs">
							<ul class="breadcrumbs">
								<li><a href="index.html" title="">Home</a></li>
								<li><a href="contact-us.html" title="">Contact us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block remove-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="text-center color-green"><b>We are pleased to know your Interest in contacting us, the following are the details for your kind perusal.</b></p>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				 <div class="row">
				 	<div class="col-lg-4 column">
				 		<div class="contact-form">
				 			<h3>Keep In Touch</h3>
				 			<form action="" method="post">
				 				<div class="row">
				 					<div class="col-lg-12">
				 						<span class="pf-title">Full Name</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Enter your full name" name="fullname" required="required" />
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Email</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Enter your email" name="fromemail" required="required" />
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Subject</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Enter your subject" name="subject" required="required" />
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Message</span>
				 						<div class="pf-field">
				 							<textarea name="message" placeholder="Enter any message"></textarea>
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<button type="submit">Send</button>
				 					</div>
				 				</div>
				 			</form>
						 </div>

						 <!--<div class="row">
							<div class="col-lg-12">
								<div class="contact-map  m-t-30">									
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1995.8097845705788!2d72.82211582567263!3d19.21322625197696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6cc9da6481b%3A0xb6a34e6b9f71a2ff!2sAspire+Management+Solutions+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1500032024058" width="100%" height="630" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>-->
				 	</div>
				 	<div class="col-lg-8 column">
					 	<div class="contact-textinfo style2">
							 <h3>Aspire Management Solution Pvt. Ltd.</h3>
							 <div class="row">
								 <div class="col-lg-6 col-md-12">
									
								 </div>
								 
							 </div>
							 <p><b>We are pleased to know your Interest in contacting us, the following are the details for your kind perusal.</b></p>
							 

							<div class="contact-box">
								<div class="item">
									<p>
										<b>Address:</b><br>
										4, 21/B, Vrundavan Society,<br>
										Majiwada, Thane (W), 400601<br>
										Phone: +91-022-2539 0030/31/32
									</p>
								</div>
								<div class="item orange">
									<p>
										Phone &amp; Emails,<br>
										<ul>
										
										<li><i class="la la-envelope-o"></i><span>Email: <a href="mailto:info@aspiremgs.co.in" target="_blank">info@aspiremgs.co.in</a></span></li>
										<li><i class="la la-phone"></i><span> Phone: +91-022-2539 0030/31/32</span></li>
									</ul>
									</p>
								</div>
								
							</div>
							<div class="contact-box">
								<!--<div class="item orange">
									<p>
										<b>Address:</b><br>
										4, 21/B, Vrundavan Society,<br>
										Majiwada, Thane (W), 400601<br>
										Phone: +91-022-2539 0030/31/32
									</p>
								</div>-->
								<div class="item orange">
									<p>
										Business Enquiries,<br>
										<ul>
										
										<li><i class="la la-envelope-o"></i><span>Email: <a href="mailto:bdm@aspiremgs.co.in" target="_blank">bdm@aspiremgs.co.in</a></span></li>
										<li><i class="la la-phone"></i><span> Phone: 9867204564 / 7977560687</span></li>
									</ul>
									</p>
								</div>
								
							</div>
							
							<!--<div class="contact-box d-column">
								<div class="item">
									<p>For all enquiries of our services or to arrange a demonstration, please contact or mail:</p>
									<ul>
										<li><i class="la la-user"></i><span> <b>Mr. Sachin Salian</b></span></li>
										<li><i class="la la-envelope-o"></i><span>Email: <a href="mailto:sachin@aspiremgs.co.in" target="_blank">sachin@aspiremgs.co.in</a></span></li>
										<li><i class="la la-phone"></i><span> Phone: +91-022-28674783</span></li>
									</ul>
								</div>
								<div class="item">
									<p>For all employment enquiries – (Pharmaceuticals, Chemical, FMCG &amp; IT Sector) please contact:</p>
									<ul>
										<li><i class="la la-user"></i><span> <b>Mr. Pravin Shetty</b></span></li>
										<li><i class="la la-briefcase"></i><span> <b>Business Head</b></span></li>
										<li><i class="la la-envelope-o"></i><span>Email: <a href="mailto:pravin@aspiremgs.co.in" target="_blank">pravin@aspiremgs.co.in</a></span></li>
										<li><i class="la la-phone"></i><span> Phone:  +91-022-29671972 / 73 / 74</span></li>
										<li><i class="la la-phone"></i><span> Mobile: +91 9987439710</span></li>
									</ul>
								</div>
								<div class="item">
									<p>For all employment enquiries– (Engineering, Chemical, Automobile, Power, Infrastructure)  please contact:</p>
									<ul>
										<li><i class="la la-user"></i><span> <b>Mr. Praveen Anchan</b></span></li>
										<li><i class="la la-briefcase"></i><span> <b>Business Head</b></span></li>
										<li><i class="la la-envelope-o"></i><span>Email: <a href="mailto:anchan@aspiremgs.co.in" target="_blank">anchan@aspiremgs.co.in</a></span></li>
										<li><i class="la la-phone"></i><span> Phone:  +91-022-29671972 / 73 / 74</span></li>
										<li><i class="la la-phone"></i><span> Mobile: +91 9867204564</span></li>
									</ul>
								</div>
							</div>-->

					 		<!-- <ul>
					 			<li><i class="la la-map-marker"></i><span>Jobify Inc. 555 Madison Avenue, Suite F-2 Manhattan, New York 10282 </span></li>
					 			<li><i class="la la-phone"></i><span>Call Us : 0934 343 343</span></li>
					 			<li><i class="la la-fax"></i><span>Fax : 0934 343 343</span></li>
					 			<li><i class="la la-envelope-o"></i><span>Email : <a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ce5e2eae3cce6e3eee4f9e2f8a2efe3e1">[email&#160;protected]</a></span></li>
					 		</ul> -->
					 	</div>
					</div>
				 </div>
				 <div class="row">
					<div class="col-lg-12">
						<div class="contact-map  m-t-30">
							<!-- <div id="map_div">&nbsp;</div> -->
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1995.8097845705788!2d72.82211582567263!3d19.21322625197696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6cc9da6481b%3A0xb6a34e6b9f71a2ff!2sAspire+Management+Solutions+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1500032024058" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text signup-popup">
							<a href="#">
								<h3>We do not charge any fee from job seeker</h3>
							</a>
							<!--<span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 column">
						<div class="widget">
							<div class="about_widget">
								<div class="logo">
									<a href="index.html" title=""><img src="images/footer-logo.png" alt=""></a>
								</div>
								<span>Aspire Management Solutions Pvt. Ltd.<br>
									4, 21/B, Vrundavan Society,<br>
									Majiwada, Thane (W), 400601</span>
								<span>+91-022-28674783</span>
								<span>sachin@aspiremgs.co.in</span>
								<div class="social">
									<a href="#" title=""><i class="la la-facebook"></i></a>
									<a href="#" title=""><i class="la la-twitter"></i></a>
									<a href="#" title=""><i class="la la-linkedin"></i></a>
								</div>
							</div><!-- About Widget -->
						</div>
					</div>
					<div class="col-lg-4 column">
						<div class="widget">
							<h3 class="footer-title">Useful Links</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-6">
										<a href="#" title="">Basis link 1</a>
										<a href="#" title="">Basis link 2</a>
										<a href="#" title="">Basis link 3</a>
										<a href="#" title="">Basis link 4</a>
										<a href="#" title="">Basis link 5</a>
										<a href="#" title="">Basis link 6</a>
									</div>
									<div class="col-lg-6">
										<a href="#" title="">Basis link 7</a>
										<a href="#" title="">Basis link 8</a>
										<a href="#" title="">Basis link 9</a>
										<a href="#" title="">Basis link 10</a>
										<a href="#" title="">Basis link 11</a>
										<a href="#" title="">Basis link 13</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 column">
						<div class="widget">
							<h3 class="footer-title">Find Jobs</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-12">
										<a href="#" title="">US Jobs</a>	
										<a href="#" title="">Canada Jobs</a>	
										<a href="#" title="">UK Jobs</a>	
										<a href="#" title="">Emplois en Fnce</a>	
										<a href="#" title="">Jobs in Deuts</a>	
										<a href="#" title="">Vacatures China</a>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-lg-3 column">
						<div class="widget">
							<div class="download_widget">
								<a href="#" title=""><img src="images/resource/dw1.png" alt=""></a>
								<a href="#" title=""><img src="images/resource/dw2.png" alt=""></a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<span>&copy; 2011 - 13 Aspire Management Solutions. All rights reserved.</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>


</div>

<div class="account-popup-area signin-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>User Login</h3>
		<span>Click To Login With Demo User</span>
		<div class="select-user">
			<span>Candidate</span>
			<span>Employer</span>
		</div>
		<form>
			<div class="cfield">
				<input type="text" placeholder="Username" />
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" />
				<i class="la la-key"></i>
			</div>
			<p class="remember-label">
				<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
			</p>
			<a href="#" title="">Forgot Password?</a>
			<button type="submit">Login</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Kind attention : Job Seekers ( Candidates) regarding Fraudulent Job (recruitment) Activities</h3>
		<div class="job-details text-left">
			<h4><b>We do not charge any fee from job seeker.</b></h4>
			<p>We would like to draw attention to the Job Seekers (Candidates) that Aspire Management Solutions at any stage do not charge any fees for the recruitment process. We have not authorised any of our employees or any other individual to ask for payment for recruitment process. If anyone on behalf of Aspire Management Solutions  is asking the Job Seekers (Candidates) to part with money by promising them job offers is indulging in fraudulent activities and breaching our registered trademark guidelines.</p>
			<p>For any questions or concerns, please contact <a href="mailto:info@aspiremgs.co.in">info@aspiremgs.co.in</a></p>
		</div>		
	</div>
</div><!-- SIGNUP POPUP -->

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>
<script src="js/parallax.js" type="text/javascript"></script>
<script src="js/select-chosen.js" type="text/javascript"></script>
<script src="js/counter.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"type="text/javascript"></script>
<script src="js/maps2.js" type="text/javascript"></script>

</body>
</html>

