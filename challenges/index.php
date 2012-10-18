<?php include "../include/header.php" ?>
		<div id="problem">
			<?php 
				// Get Problem if exists then include problem statement and editor
				$exists = false;
				if (isset($_REQUEST['p'])) $p = $_REQUEST['p']; else $p = null;
				if ($p != null && file_exists("problems/".$p.".php")) {
					include "problems/" . $p . ".php"; 
					include "editor.php"; 
					$exists = true;
				}
				else include "normal.php";
			 ?>
		</div>

	<?php include "../include/footer.php" ?>
	<script type="text/javascript" src="../js/ace/ace.js"></script>
	<script type="text/javascript" src="../js/compile.js"></script>
	<script type="text/javascript">

		$(document).ready( function(){ // Get inputs for problem if exists
			$('.result').remove();
			if ( <?php echo $exists ?> ) {
		        	var inputs = 'inputs/'+ <?php echo $p ?> + '.txt'; // $p is the problem id from challenge index.php
					jQuery.get(inputs, function(data) {
					   // Check solution by comparing solution text file
					   $('#code input[name=inputs]').val(data);
					});
		      	}
		});

	    // Editor JS Initialize
		var editor = ace.edit("editor");
	    editor.setTheme("ace/theme/cobalt"); // Default theme
	    editor.getSession().setMode("ace/mode/c_cpp");
	    document.getElementById('editor').style.fontSize='16px';
	    
	    editor.commands.addCommand({
		    name: 'compile',
		    bindKey: {win: 'Ctrl-Q',  mac: 'Command-Q'},
		    exec: function(editor) {
		        $('#code').submit();
		    }
		});

	    // JQuery for form options
	    $("#theme").change(function(event){
	    	editor.setTheme("ace/theme/"+$(this).val());
	    });

	    $("#lang").change(function(event){
	    	var lang = "c_cpp"; //Initialize
	    	if ( $(this).val() == "11" || $(this).val() == "44") lang = "c_cpp";
	    	else if ( $(this).val() == "10" )  lang = "java"; 
	    	else if ( $(this).val() == "112" ) lang = "javascript";
	    	else if ( $(this).val() == "17" )  lang = "ruby";
	    	else if ( $(this).val() == "116" ) lang = "python";
	    	else if ( $(this).val() == "29" )  lang = "php";
	    	editor.getSession().setMode("ace/mode/" + lang);
	    	
	    });

	    // if a problem exist, then compare the solution
	   	$('.output > pre').bind('DOMNodeInserted', function(event) {
		    if (event.type == 'DOMNodeInserted') {
		        if ( <?php echo $exists ?> ) {
		        	var answers = 'answers/'+ <?php echo $p ?> + '.txt'; // $p is the problem id from challenge index.php
					jQuery.get(answers, function(data) {
					   // Check solution by comparing solution text file
					   var correct = 0;

					   var lines = data.split("\n");
				       var userOutput = $('.output pre').text().split("\n");
				       for (var i = 0, len = lines.length; i < len; i++) {
				       		alert("User Output: " + userOutput[i].toLowerCase() + " == Solution : " + lines[i].toLowerCase());
				            if (userOutput[i].toString().trim().toLowerCase() == lines[i].toString().trim().toLowerCase()) {
				            	correct++;
				            	//alert("Correct: " + correct); Debugging purposes
				            }
				       }

				       if (correct == lines.length) $('#response').after('<div class="result correct-solution"> <b>The solution is correct!</b> </div>');
				       else if (correct > 1 && correct < lines.length) $('#response').after('<div class="result partial-solution"> <b>Partially Correct! Some cases are wrong</b> </div>');
				       else $('#response').after('<div class="result wrong-solution"> <b>Your solution is wrong!</b> </div>');
					});
		      	}
		    }
		});

	</script>	
	
</body>
</html>

