<?php 
	//var_dump($_GET);
	$flagError = false;
	$errorMessage = '';
	// HANDLE checking to see if the values were passed	// Error checking
	function available($var){
		return isset($var) && !empty($var);
	}	//check first name 
	$firstname = $_GET['first_name'];
	// checks if empty	if (!available($firstname)){		$flagError = true;
		$errorMessage .= 'First name not valid or missing<br />';
	}else if(preg_match("/[0-9]/",$firstname)){
		$flagError = true;
		$errorMessage .= 'First name not valid or missing<br />';
	}	// check last name
	$lastname = $_GET['last_name'];
	// checks if empty
	if (!available($lastname)) {		$flagError = true;
		$errorMessage .= 'Last name not valid or missing<br />';	}else if(preg_match("/[0-9]/",$lastname)){		$flagError = true;		$errorMessage .= 'Last name not valid or missing<br />';	}	// check address
	$address = $_GET['address'];
	// checks if empty
		if(!available($address)){
			$flagError = true;
			$errorMessage .= 'Address not valid or missing<br />';
	   }else if(!preg_match("/[a-z0-9]/",$address)){
			$flagError = true;
			$errorMessage .= 'Address not valid or missing<br />';
	}	// check state
	$state = $_GET['state'];
	// checks if empty
	if(!available($state)){
		$flagError = true;
		$errorMessage .= 'State not valid or missing<br />';
	}	
	// check zip
	$zip = $_GET['zip'];
	// checks if empty	 if(!available($zip)){
		$flagError = true;
		$errorMessage .= 'Zip not valid or missing<br />';
	 }else if(preg_match("/[a-z]/",$zip)){
		$flagError = true;
		$errorMessage .= 'Zip not valid or missing<br />';
	}	// check phone number
	$telephone = $_GET['telephone'];		// checks if empty
	if(!available($telephone)){
		$flagError = true;
		$errorMessage .= 'Telephone not valid. Check for area code<br />';
	}else if(!preg_match("/^[0-9]{10}$/", $telephone)) { 
		$flagError =true;
		$errorMessage .= 'Telephone not valid or missing. Check for area code<br />';
	}	// check email
	$email = $_GET['email'];				// checks if empty		if(!available($email)){			$flagError = true;
			$errorMessage .= 'Email not valid or missing<br />';
	   }else if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})/",$email)){
			$flagError = true;
			$errorMessage .= 'Email not valid or missing<br />';
	}		
	$saveToFile = $_GET['saveToFile'];
	if(available($saveToFile) && !$flagError){	
		$filename = 'contacts.txt';		
		//SAVE TO FILE
		if(file_exists($filename)){
			$data = $firstname . ', ' . $lastname . ', ' . $address. ', ' . $state . ', ' . $zip . ', ' . $telephone . ', ' . $email . "\n";
			$fileHandler = fopen($filename, 'a');
			fwrite($fileHandler, $data);
			fclose($fileHandler);
		
		       // Saves the input into the database		}else{				$flagError = true;			$errorMessage .= 'Did not find file';		}	}	else if (available($_GET["saveToDatabase"]) && !$flagError){
				  // connection to the database
		        include("connecttomysql.php");
					// %s=string 
				$formatString = "'%s','%s','%s','%s',%s,'%s','%s'";
				$values= sprintf($formatString, $firstname, $lastname, $address, $state, $zip, $telephone, $email);
				mysql_query("insert into contactinfo (first_name, last_name,address, state, zip, telephone, email) values ($values)");
	
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
			
			<?php if(!$flagError): ?>
				
			<h1>Thanks for Registration!</h1>
			
			<div>
				<label>First Name:</label> <?php echo $firstname; ?>
				<label>Last Name:</label> <?php echo $lastname; ?>
				<label>Address:</label> <?php echo $address; ?>
				<label>GA:</label> <?php echo $state; ?>
				<label>ZIP:</label> <?php echo $zip; ?>
				<label>Telephone:</label> <?php echo $telephone; ?>
				<label>Email:</label> <?php echo $email; ?>
			</div>
			
			
			<?php else: ?>
				<h1>Error</h1>
				<?php echo $errorMessage; ?>
			<?php endif; ?>
			
			<div class="form-actions">
				<a href="contactform.php">Return to main page</a>
			</div>
			
		</div>
	</body>
</html>