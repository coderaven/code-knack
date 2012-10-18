<?php include "../include/header.php" ?>
	
		<?php 
		// Get Problem if exists then include problem statement and editor
		$exists = false;
		if (isset($_REQUEST['p'])) $p = $_REQUEST['p']; else $p = null;
		if ($p != null && file_exists("posts/".$p.".php")) {
			include "posts/" . $p . ".php"; 
			$exists = true;
		}
		else include "normal.php";
		 ?>
	

	<?php include "../include/footer.php" ?>
	<script type="text/javascript">

	</script>	
	
</body>
</html>

