var currentProj = 1;
$(window).load(function(){
	var serviceSwitchReady = 1;
	var ProjSwitchReady = 1;
	
	var numProjects = 15;
	var newProj = 1;
	var thumbStrips = 3;//the number of columns for project thumb nav
	var thumbStripPos = 1;
	
	var timeOut1=setTimeout("splitFadeIn('1')",10);
	var timeOut2=setTimeout("splitFadeIn('2')",200);
	var timeOut3=setTimeout("splitFadeIn('3')",400);
	var timeOut4=setTimeout("splitFadeIn('4')",600);
	var timeOut5=setTimeout("splitFadeIn('5')",750);
	
	
	$().animate({opacity:1}, 1000);
	
	$(".split_column").hover(function(){ $(this).animate({opacity:0.9}, 200);}, 
		function () {$(this).animate({opacity:1}, 200);}	
	);
	
	//nav btn hover fade
	$(".nav_off").hover(function(){ $(this).animate({opacity:0.9}, 200);}, 
		function () {$(this).animate({opacity:1}, 200);}	
	);
	
	//Services offered content switch
	$("#services_offered ul li").click(function(){
	
		var divToFadeIn = "#"+$(this).attr('rel');
		
		if(!$(divToFadeIn).hasClass('current_service') && serviceSwitchReady == 1){			
			
			serviceSwitchReady = 0;//flag to stop user clicking load of times
			$('.current_service').stop(true, true).fadeOut(300, 
			function(){
				$(divToFadeIn).stop(true, true).fadeIn(350);
				$('.current_service').removeClass('current_service');
				$(divToFadeIn).addClass('current_service');
				serviceSwitchReady = 1;
			})			
		}
	});
	
	//Projects
	$(".proj_nav_a").click(function(){
			
		var nextOrPrev = $(this).attr('rel');
			
			switch(nextOrPrev)
			{
			case 'previous':
				if(currentProj != 1)
					newProj =  (currentProj - 1);
					//$('#next_proj').css('display','block');//show next button if hidden
					break;
			case 'next':
				if(currentProj < numProjects)
					newProj =  (currentProj + 1);
					//$('#prev_proj').css('display','block');//show prev button if hidden
					break;
			}
			switchProject();
	
		});
	
	function switchProject(){
		
		//hide next or prev button if needed
		if(newProj == 1)
			$('#prev_proj').css('display','none');
		else if(newProj == numProjects)
			$('#next_proj').css('display','none');
		else{
			$('#next_proj').css('display','block');//show next button if hidden
			$('#prev_proj').css('display','block');//show prev button if hidden
		}
		
		var projectToFadeOut = "#project_content_wrapper_"+currentProj;
		var projectToFadeIn = "#project_content_wrapper_"+newProj;
	
		$(projectToFadeOut).stop(true, true).fadeOut(300, 
		function(){
			$(projectToFadeIn).stop(true, true).fadeIn(350,
				function(){currentProj = newProj;ProjSwitchReady = 1;}//update currentProj now that it is actually current
			);
		})	
	}
	
	$('#projects_thumb_nav_inner a').click(function(){ 
		var newProjTEMP = $(this).attr('rel');
		if(ProjSwitchReady == 1 && currentProj != newProjTEMP){
			newProj = parseInt(newProjTEMP, 0);
			ProjSwitchReady = 0;
			switchProject();
		}
	})

	$('#projects_thumb_arrows a').click(function(){ 

		var arrowId = $(this).attr('id');
		switch(arrowId)
		{
		case 'thumb_arrow_lft':
			if (thumbStripPos > 1)
				thumbStripPos--;
			break
		case 'thumb_arrow_rght':
			if (thumbStripPos < thumbStrips)
				thumbStripPos++;
			break;
		}
		
		var newMarginLeft = (192 * (thumbStripPos - 1));
		newMarginLeft = (0 - newMarginLeft);
		//alert("ready to animate");
		$('#projects_thumb_nav_inner').stop(true, false).animate({marginLeft:newMarginLeft}, 750, 'easeInCubic');//Hell yeah! just change thumbStrips to add more columns
		//$('#projects_thumb_nav_inner').stop(true, false).animate({marginLeft:newMarginLeft}, 500);
	});
	
});// end of document.ready

function splitFadeIn(columnNo){
	topColSelector = "#split_"+columnNo;
	bottomColSelector = "#split_foot_"+columnNo;
	$(topColSelector).animate({opacity:1}, 600);
	$(bottomColSelector).animate({opacity:1}, 600);
}
