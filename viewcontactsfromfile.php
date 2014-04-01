<?php      #file name of the file contacts are saved to
	$filename = 'contacts.txt';	
	$outputString = '';
	if(file_exists($filename)){
		//READ FILE		#file open and read
		$fileHandler = fopen($filename, 'r');        
		$formatString = 'First Name: %s <br /> Last Name: %s <br /> Address: %s <br /> State: %s <br />Zip: %s <br /> Telephone: %s <br /> Email: %s<br /><br /><br />';
		$contactValues;		
		$buffer = fgets($fileHandler, 4000);
		while($buffer !== false){			# create an array
			$contactValues = explode(',', $buffer);			
			$outputString .= sprintf($formatString, $contactValues[0], $contactValues[1], $contactValues[2], $contactValues[3], $contactValues[4], $contactValues[5], $contactValues[6]);
			$buffer = fgets($fileHandler, 4000);
		}
	}else {
		echo 'file not found';
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