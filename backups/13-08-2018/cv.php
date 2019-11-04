<?php $currentPage = "cv"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<title>Robert W. Hay</title>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/animation.js"></script>
<link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>

<div id="wrapper">
	<div id="title_graphic"><a href="cv.php"><img src="images/top_logo.jpg" width="473" height="42" alt="Robert W. Hay FRICS CDipAFs" class="push_bottom_left" style="border:none"></a></div>

	<div id="services_wrapper">
		<img src="images/top_bottom_border.jpg" width="900" height="1" class="push_top_left">
		
		<div id="contact_btn"><a href="contact.php"></a></div>
		
		<div class="clear_both"></div>
		
		<div id="curriculum_vitae">
			<img src="images/curriculum_vitae.jpg" width="187" height="21" alt="Services offered">
			
			<div id="cv_content_wrapper">
            	<img src="images/portrait.jpg" width="130" height="104" align="left" class="top_left_wrap">
<p>Robert Hay offers a wealth of experience in property and construction spanning in excess of forty years.  
<br /><br />
Trained and qualified as a Chartered Building Surveyor, experience was gained in a number of architectural and surveying practices before moving into residential development in the mid 1970's. 
<br /><br />
Robert subsequently operated at director level in several medium to large development and construction organisations before starting his own house building company in 2000.
<br /><br />
Following a successful decade of dealing with all aspects of new build residential developments in Surrey and the South London boroughs, Robert now provides planning, design and project management services to a variety of clients on a wide range of residential, commercial and community buildings.</p>        
            
            </div>            
            
		</div>
        
        <div id="recent_projects">
        	<img src="images/typical_projects.jpg" width="184" height="27">
            
            <div id="project_1" class="recent_projbox">
            	<!--<a href="projects.php" class="green_title_link">Project 1</a><br />-->
                <a href="projects.php" class="green_title_link"><img src="images/recent_projthumb_1.jpg" width="100" height="75" align="right" class="rcnt_srv_thumb" style="border:none;"></a>
                <p>Ancillary domestic outbuilding within grounds of a Grade 2 listed building.</p>

            </div>
            
            <div id="project_2" class="recent_projbox" style="margin-top:15px;">
            	<!--<a href="projects.php?project=2" class="green_title_link">Project 2</a><br />-->
                <a href="projects.php?project=2" class="green_title_link"><img src="images/recent_projthumb_2.jpg" width="100" height="75" align="right" class="rcnt_srv_thumb" style="border:none;"></a>
                <p>A development of four detached houses in a South London borough.</p>

            </div>
            
            <div class="project_quote_cv">
				<img src="images/lft_quote.jpg" width="19" height="16" align="left" id="quote" class="testimonials_quotes">
				<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
			</div>
			
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