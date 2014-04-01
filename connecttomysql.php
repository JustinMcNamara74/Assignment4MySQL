	<?php		
			$dbh = mysql_connect("localhost","jm7482","weineich")
					or die("Couldn't connect to database.");
				
				$db = mysql_select_db("jm7482", $dbh) 
					or die("Couldn't select database.");
	?>