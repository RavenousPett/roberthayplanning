<?php 
$currentPage = "projects"; 
if(isset($_GET['project']))
	$requstedProj = $_GET['project'];
else
	$requstedProj = 1;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<title>Robert W. Hay</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/animation.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
	currentProj = <?php echo $requstedProj ?>;
</script>

<script type="text/javascript" charset="utf-8"><!-- initialise pretty photo -->
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});
</script>

<link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>

<div id="wrapper">
	<div id="title_graphic"><a href="cv.php"><img src="images/top_logo.jpg" width="473" height="42" alt="Robert W. Hay FRICS CDipAFs" class="push_bottom_left" style="border:none"></a>

    </div>

	<div id="services_wrapper">
		<img src="images/top_bottom_border.jpg" width="900" height="1" class="push_top_left">
		
		<div id="contact_btn"><a href="contact.php"></a></div>
		
		<div class="clear_both"></div>
		
		<div id="projects_content">
			<img src="images/projects.jpg" width="93" height="27" alt="Projects">
			
			<div id="project_content_wrapper_1" class="project_content_wrapper" <?php if ($requstedProj == 1) echo 'style="display:block;"'?>>
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/01.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_1.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Ancillary domestic outbuilding within grounds of a Grade 2 listed building comprising double garage and rear workshop/store plus guest suite comprising Sitting Room, Bedroom, Kitchen and Bathroom, won at appeal.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div> 

			<div id="project_content_wrapper_2" class="project_content_wrapper" <?php if ($requstedProj == 2) echo 'style="display:block;"'?>>
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/02.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_2.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>A development of four detached houses in a South London borough, original planning permission amended to increase size of houses and incorporate additional bedrooms in roof spaces.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>  

			<div id="project_content_wrapper_3" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/03.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_3.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Planning, design and project management services for extension and refurbishment of 1930's cottage into large three storey, five bedroom family home.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>  
			
			<div id="project_content_wrapper_4" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/04.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_4.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Rear extension to form new storage room to a local Village Hall including refurbishment of male and female toilets and provision of disabled toilets.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div> 

			<div id="project_content_wrapper_5" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/05.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_5.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Extension to Grade 2 listed, 500 year old cottage to form breakfast room addition to existing Kitchen and new Garden Room.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>    

			<div id="project_content_wrapper_6" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/06.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_6.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Development of eight two storey houses in 2, 3 and 4 bedroom form, won at appeal following local planning authority's refusal of house type changes from original outline planning permission.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>    


			<div id="project_content_wrapper_7" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/07.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_7.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Planning permission obtained to extend bungalow to form larger four bedroom house.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>    


			<div id="project_content_wrapper_8" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/08.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_8.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Project management services from detailed design stage through to build completion on three storey luxury block of seven apartments overlooking the River Thames constructed to EcoHomes 'Excellent' standard.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>    


			<div id="project_content_wrapper_9" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/09.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_9.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Two storey side addition to 1970's semi-detached house.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>    


			<div id="project_content_wrapper_10" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/10.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_10.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Planning permission obtained for replacement garage premises including first floor office accommodation and extended storage space at the rear.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div> 
            
            <div id="project_content_wrapper_11" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/11.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_11.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Project management services for the development of ten three storey houses including overseeing detailed design, engaging and supervising main contractor and full co-ordination of sales and marketing of completed houses.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>  
            
            <div id="project_content_wrapper_12" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/12.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_12.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Planning and detailed design service for new build three storey, five bedroom house replacing small bungalow. Local planning authority refused scheme on policy grounds but planning won at appeal.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>  
            
            <div id="project_content_wrapper_13" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/13.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_13.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Development of a terrace of four, two storey houses. Refused by local planning authority on grounds of over-development but won on second appeal attempt.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>  
            
            <div id="project_content_wrapper_14" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/14.jpg" rel="prettyPhoto[pp_gal]" ><img src="images/projects/main_proj_img_14.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Conversion and refurbishment of Victorian cottage retained within a new development scheme. Planning negotiation and project management for JCT Minor Works contract.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>  
            
            <div id="project_content_wrapper_15" class="project_content_wrapper">
				<!--<span class="green_title_link">August 2010</span>-->  
				<a href="images/gallery/15.jpg" rel="prettyPhoto[pp_gal]"><img src="images/projects/main_proj_img_15.jpg" width="275" height="206" align="right"  style="border:none;" class="project_main_img"></a>
				<p>Planning permission obtained on second attempt to extend house located in the Green Belt to provide five bedroom accommodation.</p>        
				
				<div class="project_quote">
					<img src="images/lft_quote.jpg" width="19" height="16" align="left">
					<p><a href="testimonials.php" class="gototestimonials">View testimonials...</a></p>
				</div>
				
            </div>  
               			
		</div>
		
		<div id="projects_thumb_arrows">
			<a id="thumb_arrow_lft"></a>
			<span>More...</span>
			<a id="thumb_arrow_rght"></a>
		</div>
        
        <div id="projects_thumb_nav">
			<div id="projects_thumb_nav_inner">
			
				<div id="thumb_strip_1" class="thumb_strip ts_first">
					<a rel="1" class="nav_thumb" id="thumb_1">
						<!--<img src="images/nav_thumbs/nav_thumb_1.jpg" width="85" height="64">-->
					</a>
					
					<a rel="2" class="nav_thumb" id="thumb_2">
                    
					</a>
					
					<a rel="3" class="nav_thumb nt_last" id="thumb_3">
					</a>
				
				</div>
				
				<div id="thumb_strip_2" class="thumb_strip">
					<a rel="4" class="nav_thumb" id="thumb_4">
					</a>
					
					<a rel="5" class="nav_thumb" id="thumb_5">
					</a>
					
					<a rel="6" class="nav_thumb nt_last" id="thumb_6">
					</a>
				
				</div>
				
				<div id="thumb_strip_3" class="thumb_strip">
					<a rel="7" class="nav_thumb" id="thumb_7">
					</a>
					
					<a rel="8"  class="nav_thumb" id="thumb_8">
					</a>
					
					<a rel="9" class="nav_thumb nt_last" id="thumb_9">
					</a>
				
				</div>
				
				<div id="thumb_strip_4" class="thumb_strip">
					<a rel="10" class="nav_thumb" id="thumb_10">
					</a>
					
					<a rel="11" class="nav_thumb" id="thumb_11">
					</a>
					
					<a rel="12" class="nav_thumb nt_last" id="thumb_12">
					</a>
				
				</div>
                
                <div id="thumb_strip_4" class="thumb_strip">
					<a rel="13" class="nav_thumb" id="thumb_13">
					</a>
					
					<a rel="14" class="nav_thumb" id="thumb_14">
					</a>
					
					<a rel="15" class="nav_thumb nt_last" id="thumb_15">
					</a>
				
				</div>
			
			
			</div>
			
        </div>
		
		<div class="clear_both"></div>
		
		<div id="project_nav">
			
			<div id="prev_proj" <?php if ($requstedProj == 1) echo 'style="display:none;"'?>>
				<a rel="previous" class="proj_nav_a">
					<img src="images/arrow_left.jpg" width="10" height="17" id="arrw_lft">
					<div class="project_nav_txt" id="prv_proj_text">Previous Project</div>
				</a>
			</div>
		
			<div id="next_proj">
				<a rel="next" class="proj_nav_a">
					<img src="images/arrow_right.jpg" width="10" height="17" id="arrw_right">
					<div class="project_nav_txt" id="nxt_proj_text">Next Project</div>
				</a>
			</div>
			
		</div>
		
		
	
		<img src="images/top_bottom_border.jpg" width="900" height="1" class="push_bottom_left">
	
	</div><!-- end of services wrapper -->
	
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