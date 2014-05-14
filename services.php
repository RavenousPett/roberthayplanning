<?php $currentPage = "services"; ?>
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
	<div id="title_graphic"><a href="index.php"><img src="images/top_logo.jpg" width="473" height="42" alt="Robert W. Hay FRICS CDipAFs" class="push_bottom_left" style="border:none;"></a></div>

	<div id="services_wrapper">
		<img src="images/top_bottom_border.jpg" width="900" height="1" class="push_top_left">
		
		<div id="contact_btn"><a href="contact.php"></a></div>
		
		<div class="clear_both"></div>
		
		<div class="services_column" id="services_offered">
			<img src="images/services_offered.jpg" width="187" height="21" alt="Services offered">
			<ul id="services_list">
				<li rel="architectural_dsn">Architectural Design</li>
				<li rel="planning_applctns">Planning Applications</li>
				<li rel="planning_appls">Planning Appeals</li>
				<li rel="working_drwngs">Working Drawings, Details and Specifications</li>
				<li rel="building_rgltns">Building Regulations</li>
				<li rel="project_mngmnt">Project Management Services</li>
				<li rel="party_wll_issues">Party Wall Issues</li>
			</ul>	
            
            <div id="find_out_more">
        		<!--<img src="images/more_arrow.jpg" width="34" height="52" style="padding-top:3px; float:left;">-->
            	<span style="float:left; padding:21px 0 0 6px; color:#97ba5f; font-weight:bold; font-size:14px;">Select for further detail...</span>       
        	</div>	
            
		</div>
		
				<!-- ===___=== Services Content ===___=== -->
		
		<div class="services_content current_service" id="architectural_dsn">
			<img src="images/services_titles/architectural_design.png" width="234" height="27" alt="Architectural Design" class="srvcs_content_title">
			<p>Taking a client&rsquo;s brief and producing conceptual designs for extensions, conversion or new buildings. Advising on planning policy, site and other technical constraints and 
			the anticipated building costs.</p>
		</div>
		
		<div class="services_content" id="planning_applctns">
			<img src="images/services_titles/planning_applications.png" width="249" height="27" alt="Planning Applications" class="srvcs_content_title">
			<p>Services include researching the planning history of a building or site and advising client&rsquo;s on planning policies, supplementary planning documents, seeking precedents and 
			advising client&rsquo;s on planning potential. Arranging measured surveys and specialist investigations, preparing drawings and planning and design statements for formal planning 
			applications. Monitoring progress of planning applications, responding to planning department consultations and satisfying planning conditions.</p>
		</div>
		
		<div class="services_content" id="planning_appls">
			<img src="images/services_titles/planning_appeals.png" width="201" height="28" alt="Planning Appeals" class="srvcs_content_title">
			<p>Researching appeal precedents and past local planning authority approvals, preparing grounds of appeal and responding to representations made by third parties.</p>
		</div>
		
		<div class="services_content" id="working_drwngs">
			<img src="images/services_titles/working_drawings.png" width="217" height="87" alt="Planning Appeals" class="srvcs_content_title">
			<p>Preparing construction drawings, details and specifications for Building Regulations applications and arranging structural designs and calculations for local authority approval. 
			Preparing large scale details of windows, doors etc required for listed buildings or applications within conservation areas. Co-ordinating specialist consultants for designs and 
			product performance criteria to meet the Code for Sustainable Homes standards.</p>
		</div>
		
		<div class="services_content" id="building_rgltns">
			<img src="images/services_titles/building_regulations.png" width="237" height="27" alt="Planning Appeals" class="srvcs_content_title">
			<p>Making building regulations applications, liaising with structural engineers and other specialist for design information and dealing with queries from Building Control.</p>
		</div>
		
		<div class="services_content" id="project_mngmnt">
			<img src="images/services_titles/project_management.png" width="240" height="50" alt="Planning Appeals" class="srvcs_content_title">
			<p>Managing building projects on behalf of clients from inception to completion or part-service including appointing and co-ordinating designers and other consultants, preparing 
			tender documentation for building costing, arranging all pre-start matters, supervising the building work, certifying payments to the contractors, dealing with variations and settling
			the final account.</p>
		</div>
		
		<div class="services_content" id="party_wll_issues">
			<img src="images/services_titles/party_wall_issues.png" width="200" height="27" alt="Planning Appeals" class="srvcs_content_title">
			<p>As a Chartered Surveyor acting on behalf of building owners or adjoining owners in party wall matters, serving notices, preparing schedules of condition and agreeing party wall 
			awards.</p>
		</div>
	
		<!-- ===___=== End of Services Content ===___=== -->
		
		<div class="services_column" id="services_for">
			<img src="images/for.jpg" width="59" height="21" alt="Services offered">
			<ul>
				<li>Residential Extensions and Alterations</li>
				<li>New Build Homes</li>
				<li>Listed Buildings</li>
				<li>Conversions and Refurbishments</li>
				<li>Community Buildings</li>
				<li>Commercial Properties</li>
			</ul>		
		</div>
        
        <div class="clear_both"></div>
	
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