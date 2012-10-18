<?php include "include/header.php" ?>
		<div id="head-slider">
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<div class="da-img"><img src="<?php echo $IMG_URL ?>/slide-learn.png" alt="image01" /></div>
					<h2>Learn To Code</h2>
					<p class="slide-cap">One challenge at a time.</p>

					<p>Take on challenges and sharpen your skill with our database of problems with varying difficulty.</p>
					<a href="<?php echo $CHALLENGES_URL ?>" class="da-link"><img src="<?php echo $IMG_URL ?>/start-button.png" alt="start"></a>
				</div>
				<div class="da-slide">
					<div class="da-img"><img src="<?php echo $IMG_URL ?>/slide-tutorials.png" alt="image01" /></div>
					<h2>Get The Basics</h2>
					<p class="slide-cap">By reading tutorials.</p>

					<p>Level up your skill set by learning
						something new. Read through our array of easy
						to follow tutorials and lessons.</p>
					<a href="#" class="da-link"><img src="<?php echo $IMG_URL ?>/start-button.png" alt="start"></a>	
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
		</div> <!-- End of slider -->

		<div id="mid-about">
			<div id="img-box"> </div>
			<div id="what-box">
				<h2>What is &ltCode/Knack&gt?</h2>
				<p>&ltCode/Knack&gt is an online programming community and skills incubator. We host contests, challenges, tutorials and events for programmers around the world. Our goal is to provide a platform for programmers to level up their skills, share it to others, compete, and have fun.</p>
				<a href=""><img src="<?php echo $IMG_URL ?>/join-button.png" alt="Join now"></a>
			</div>
		</div> <!-- End Mid-About Box -->

		<div id="update-box">
			<div class="update-column">
				<div id="lchallenges">
					<h3>Latest Challenges</h3>
					<ul>
						<li>
							<a href="<?php echo $CHALLENGES_URL ?>/?p=1"><b>Hello World</b></a>
							<p>October 10, 2012 by Raven G. Duran</p>
						</li>
						<li>
							<a href="<?php echo $CHALLENGES_URL ?>/?p=2"><b>Life, the Universe, and Everything</b></a>
							<p>October 2, 2012 by Kris P. Bacon</p>
						</li>
						<li>
							<a href="#"><b>Sum of squares from 1-N</b></a>
							<p>September 20, 2012 by Just N. Case</p>
						</li>
						<li>
							<a href="#"><b>Elephant Bombs</b></a>
							<p>September 12, 2012 by Nee G. Wang</p>
						</li>
					</ul>

					<a href="#">More &raquo</a>
				</div>
			</div>
			<div class="update-column">
				<div id="rtutorials">
					<h3>Recent Tutorials</h3>
				 
					<div class="clear"></div>
				 
					<div id="small-slide">
						<div class="cover">
				 
							<div class="small-stuff">
								<img src="<?php echo $IMG_URL ?>/ltutorial.png">
							</div>
							<div class="small-stuff">
								Aenean scelerisque ipsum a nunc placerat sed blandit odio sollicitudin. Donec sed velit id ipsum lobortis tincidunt a sit amet leo. Praesent sit amet nisl a arcu lobortis egestas. Nunc at felis in erat condimentum ornare vel vel nisl. Phasellus ultrices nisi vel leo commodo et rhoncus ipsum porttitor. Fusce eu ligula sit amet sapien ullamcorper adipiscing. Suspendisse non ipsum elit. Nunc vehicula, felis non scelerisque aliquam, tellus leo consequat sem, ac suscipit nisi risus a justo. Quisque sollicitudin iaculis nisl at luctus. Curabitur porttitor lacus et dui blandit vulputate. In eu quam quam.
							</div>
							<div class="small-stuff">
								Suspendisse iaculis sodales dui pretium faucibus. Praesent vitae ipsum justo, id tempor tellus. In nulla leo, dignissim quis luctus sed, commodo nec velit. Aliquam ac nisl quam, quis tincidunt magna. Aenean nec massa elit, non ornare neque. Vestibulum at ipsum sit amet augue euismod consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus porttitor gravida massa at cursus. Sed ac viverra risus.
							</div>
				 
						</div> <!-- end of div cover -->
					</div>  <!-- end of div myslide -->

					<div class="clear"></div>
					<div id="button">
						 <a class="button1 active" rel="1" href="#"></a>
						 <a class="button2" rel="2" href="#"></a>
						 <a class="button3" rel="3" href="#"></a>
					 </div>

				</div>
			</div>
			<div class="update-column no-border">
				<div id="ucontests">
					<h3>Upcoming Meetup</h3>
					<img src="<?php echo $IMG_URL ?>/must-dev-cup.png">
					<p>M.U.S.T. Devcup is an online hosted inter course programming contest exclusively for M.U.S.T. students.</p>

					<a href="#">Get listed &raquo</a>
				</div>
			</div>
		
	<?php include "include/footer.php" ?>

	<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function() {
		
			$('#da-slider').cslider();
			
		});

		$('#button a').click(function(event){
			var integer = $(this).attr('rel');
			$('#small-slide .cover').animate({left:-280*(parseInt(integer)-1)})  /*----- Width of div mystuff (here 160) ------ */
			$('#button a').each(function(){
			$(this).removeClass('active');
				if($(this).hasClass('button'+integer)){
					$(this).addClass('active')}
			});

			event.preventDefault();
		});	
	</script>	
	
</body>
</html>

