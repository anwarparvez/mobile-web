<?php 
//load db configuration
		require_once('include/database.php');
		
//set value for table hide
		$mysql="UPDATE halifaxopt SET val='false' WHERE name='newTable'";
		$database->query($mysql);
		
//refresh window
		echo '<script type="text/javascript">
		
		window.location="halifax.php";
		
		</script>"';
		
?>