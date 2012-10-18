<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code Knack</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
	<meta name="description" content="Code Knack is an online programming community and skills incubator that hosts contests, challenges, tutorials and events for programmers to level up their skills, share it to others, compete, and have fun." />
	<meta name="keywords" content="programming, programming problems, code, code tutorials, programming community" />

		<!-- Controls how files will be included based on the current url -->
	<?php if ($_SERVER['PHP_SELF'] != '/codeknack/index.php'){ 
		include '../include/config.php';
		?>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/responsive.css">
		<link rel="stylesheet" type="text/css" href="../css/slider-style.css">
		<link rel="stylesheet" type="text/css" href="../css/table.css">
		<link rel="shortcut icon" href="../img/favicon.ico">
	<?php } else { ?>
	 	<link rel="stylesheet" href="./css/style.css">
	 	<link rel="stylesheet" href="./css/slider-style.css">
	 	<link rel="stylesheet" href="./css/responsive.css">
	 	<link rel="stylesheet" href="./css/table.css">
	 	<link rel="shortcut icon" href="./img/favicon.ico">
		<?php include 'include/config.php'; } ?>
</head>
<body>
	

	<div id="head-strip">
		<div id="head-wrap">
			<div id="logo">
				<img src="<?php echo $IMG_URL ?>/logo.png">
			</div>
			<nav id="head-nav">
				<ul>
					<li>
						<a href="<?php echo $HOME_URL ?>">
							<img src="<?php echo $IMG_URL ?>/nav-home.png">
							Home
						</a>
					</li>
					<li>
						<a href="<?php echo $HOME_URL ?>/challenges">
							<img src="<?php echo $IMG_URL ?>/nav-challenges.png">
							Challenges
						</a>
					</li>
					<li>
						<a href="<?php echo $HOME_URL ?>/tutorials">
							<img src="<?php echo $IMG_URL ?>/nav-tutorials.png">
							Tutorials
						</a>
					</li>
					<li>
						<a href="<?php echo $HOME_URL ?>/meetups">
							<img src="<?php echo $IMG_URL ?>/nav-contests.png">
							Meetups
						</a>
					</li>
					<li>
						<a href="<?php echo $HOME_URL ?>/forum">
							<img src="<?php echo $IMG_URL ?>/nav-forum.png">
							Forum
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div> <!-- End of head strip -->

	<div id="wrap">