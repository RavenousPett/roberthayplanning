<ul id="navigation">
	<li id="home" <?php if($currentPage == "home") echo 'class="nav_current_hme"'; else echo 'class="nav_off_hme nav_off"';?>><a href="index.php">HOME</a></li>
	<li id="services" <?php if($currentPage == "services") echo 'class="nav_current"'; else echo 'class="nav_off"';?>><a href="services.php">SERVICES</a></li>
	<li id="cv" <?php if($currentPage == "cv") echo 'class="nav_current"'; else echo 'class="nav_off"';?>><a href="cv.php">CV</a></li>
	<li id="projects" <?php if($currentPage == "projects") echo 'class="nav_current"'; else echo 'class="nav_off"';?>><a href="projects.php">PROJECTS</a></li>
	<li id="contact" <?php if($currentPage == "contact") echo 'class="nav_current"'; else echo 'class="nav_off"';?>><a href="contact.php">CONTACT</a></li>
</ul>