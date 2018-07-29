<?php $currentPage = "contact"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<title>Robert W. Hay</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

<script type="text/javascript" src="js/animation.js"></script>
 
<script type="text/javascript">

function validateForm(){
		
		var frmName=document.forms["contactformfree"]["name"].value;
		var frmEnquiry=document.forms["contactformfree"]["enquiry"].value;
		
		var x=document.forms["contactformfree"]["email"].value;
		
		if(frmName == "" || frmEnquiry=="" || x==""){
			alert("Please fill in all required fields");
			return false;
		}
		
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  		{
  			alert("Please  enter a valid e-mail address");
  			return false;
  		}
		
		document.contactformfree.submit();
}

</script>


<link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>

<div id="wrapper">
	<div id="title_graphic">
    	<a href="cv.php"><img src="images/top_logo.jpg" width="473" height="42" alt="Robert W. Hay FRICS CDipAFs" class="push_bottom_left" style="border:none"></a>
    </div>

	<div id="services_wrapper">
		<img src="images/top_bottom_border.jpg" width="900" height="1" class="push_top_left">

		<div id="contact_wrapper">
			<div id="contact_title"><img src="images/contact.jpg" width="131" height="21" alt="Contact Me">
            
            <img src="images/address.jpg" width="436" height="32" alt="The Studio, Hoyle Cottage, The Street, Ewhurst, Surrey, GU6 7PX" style="float:right;">
            <a href="mailto:info@roberthayplanning.com" class="link" id="email-link">
            	<img src="images/email.jpg" class="clear_both" width="192" height="19" alt="info@roberthayplanning.com" style="float:right;"> 
            </a>         
            </div>
			
			<form name="contactformfree" method="post" action="form-2/free_process.php">
			
			<div class="form_small_field">
				<span class="frm-span">Name:</span><input type="text" name="name" id="frm_name" class="required" maxlength="100"/><span class="frm_star">*</span>
				<label class="error" for="cname" generated="true" style="display: none;">This field is required.</label>
			</div>
			
			<div class="form_small_field">
				<span class="frm-span">Email:</span><input type="text" name="email" id="frm_email" class="required" maxlength="50"/><span class="frm_star">*</span>
			</div>
			
			<div class="form_small_field">
				<span class="frm-span">Phone:</span><input type="text" name="phone" id="frm_phone" class="required" maxlength="50"/>
			</div>
			
			<div class="form_big_field" id="last-field">
				<span class="frm-span">Enquiry:</span><textarea name="enquiry" id="enquiry" class="required"></textarea><span class="frm_star">*</span>
			
				<a id="submit_btn" onclick="validateForm();"></a>				
			</div>


			</form>
			
		</div>
		
	
		<img src="images/top_bottom_border.jpg" width="900" height="1" class="push_bottom_left">
	</div>
	
	<!-- Main nav -->
	<!-- special case for homepage, as we have the verticle lines -->
	<?php include("includes-2/nav.php"); ?> 
	
	<!-- Graphic footer -->
	<ul id="fancy_split_footer">
		<li id="split_foot_1"></li>
		<li id="split_foot_2"></li>
		<li id="split_foot_3"></li>
		<li id="split_foot_4"></li>
		<li id="split_foot_5"></li>	
	</ul>
	
	<!-- Footer -->
	<?php include("includes-2/footer.php"); ?>
	
</div>


</body>

</html> 