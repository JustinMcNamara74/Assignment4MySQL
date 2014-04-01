<?php 
				//  connent to MySQL server 
				include("connecttomysql.php");
					// select "*" infor from the specified relation
				$sql = "SELECT * FROM contactinfo";
				
				$result = mysql_query($sql, $dbh) 
					or die("Something is wrong with your SQL statement.");
		
		$outputString = '';
		
		$formatString = 'First Name: %s <br /> Last Name: %s <br /> Address: %s <br /> State: %s <br />Zip: %s <br /> Telephone: %s <br /> Email: %s<br /><br /><br />';

		$contactValues;
				// create array of input 
		while ($row = mysql_fetch_array($result)) {
				$contactValues= array();
				
				$contactValues[] = $row['first_name'];
				$contactValues[] = $row['last_name'];
				$contactValues[] = $row['address'];
				$contactValues[] = $row['state'];
				$contactValues[] = $row['zip'];
				$contactValues[] = $row['telephone'];
				$contactValues[] = $row['email'];
				$outputString .= sprintf($formatString, $contactValues[0], $contactValues[1], $contactValues[2], $contactValues[3], $contactValues[4], $contactValues[5], $contactValues[6]);
				
					}

?>



<!DOCTYPE html>

<html class="no-js">

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<title>Contact Form</title>

		<meta http-equiv="content-script-type" content="text/javascript" />

		<meta name="description" content="" />

		

		<link href="style.css" rel="stylesheet" type="text/css"/>

	</head>

	<body>
	
		<div class="page-container">

			<h1>Existing Contacts</h1>

			<?php

				echo $outputString;

			?>

			<div class="form-actions">

				<a href="contactform.php">Return to main page</a>

			</div>

		</div>		

	</body>

</html>