<?php $currentPage = "home"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/home_styles.css" />
<title>Robert W. Hay</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/animation.js"></script>
<link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>

<div id="wrapper">
        <div id="title_graphic"><a href="cv.php"><img src="images/top_logo.jpg" width="473" height="42" alt="Robert W. Hay FRICS CDipAFs" style="border:none;"></a></div>
    
        <!-- Main graphic -->
        <ul id="fancy_split">
            <li id="split_1" class="split_column"></li>
            <li id="split_2" class="split_column"></li>
            <li id="split_3" class="split_column"></li>
            <li id="split_4" class="split_column"></li>
            <li id="split_5" class="split_column"></li>	
        </ul>
        
        <!-- Main nav -->
        <!-- special case for homepage, as we have the verticle lines -->
        <?php include("includes/nav.php"); ?> 
        
        <!-- Graphic footer -->
        <ul id="fancy_split_footer">
            <li id="split_foot_1"></li>
            <li id="split_foot_2"></li>
            <li id="split_foot_3"></li>
            <li id="split_foot_4"></li>
            <li id="split_foot_5"></li>	
        </ul>
        
        <!-- Footer -->
	<?php include("includes/footer.php"); ?>

</div><!-- end of wrapper -->



</body>

</html> 