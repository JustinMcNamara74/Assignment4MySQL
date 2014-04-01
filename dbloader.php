<?php
					//  shows how the database was populated
				include("connecttomysql.php");
					
				mysql_query("Delete from contactinfo;");
				
				$fileHandler = fopen("contacts.txt", 'r');
				
				$contactValues;

				$buffer = fgets($fileHandler, 4000);
	            $formatString = "'%s','%s','%s','%s',%s,'%s','%s'";
				while($buffer !== false){
					echo $buffer."<br/>";
				$contactValues = explode(',', $buffer);
				$values= sprintf($formatString, $contactValues[0], $contactValues[1], $contactValues[2], $contactValues[3], $contactValues[4], $contactValues[5], $contactValues[6]);
				
				mysql_query("insert into contactinfo (first_name, last_name,address, state, zip, telephone, email) values ($values)");
				$buffer = fgets($fileHandler, 4000);

	}

?>
