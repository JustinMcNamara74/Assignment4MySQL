<!DOCTYPE html>
<html class="no-js">		
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Contact Form</title>
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta name="description" content="" />
		<link href="style.css" rel="stylesheet" type="text/css"/>
	</head>	
	<body>	<div class="right">
		<div class="page-container">			<div id="header">				<p> <strong>CSCI 3330</strong> </p>					</div>			<div class="infoContainer">
			<h1>Contact Form</h1>
			<form action="thankyou.php" method="get">				
				<label for="first_name">First Name:</label>				
				<input type="text" id="first_name" name="first_name" value="" maxlength="255"/>
				<br />
				<label for="last_name">Last Name:</label>
				<input type="text" id="last_name" name="last_name" value="" maxlength="255"/>
				<br />
				<label for="address">Address:</label>
				<input type="text" id="address" name="address" value="" maxlength="255"/>
				<br />
				<label for="state">State:</label>
				<select name="state" id="state" size="1">
					<option value="AK">AK</option>
					<option value="AL">AL</option>
					<option value="AR">AR</option>
					<option value="AZ">AZ</option>
					<option value="CA">CA</option>
					<option value="CO">CO</option>
					<option value="CT">CT</option>
					<option value="DC">DC</option>
					<option value="DE">DE</option>
					<option value="FL">FL</option>
					<option value="GA">GA</option>
					<option value="HI">HI</option>
					<option value="IA">IA</option>
					<option value="ID">ID</option>
					<option value="IL">IL</option>
					<option value="IN">IN</option>
					<option value="KS">KS</option>
					<option value="KY">KY</option>
					<option value="LA">LA</option>
					<option value="MA">MA</option>
					<option value="MD">MD</option>
					<option value="ME">ME</option>
					<option value="MI">MI</option>
					<option value="MN">MN</option>
					<option value="MO">MO</option>
					<option value="MS">MS</option>
					<option value="MT">MT</option>
					<option value="NC">NC</option>
					<option value="ND">ND</option>
					<option value="NE">NE</option>
					<option value="NH">NH</option>
					<option value="NJ">NJ</option>
					<option value="NM">NM</option>
					<option value="NV">NV</option>
					<option value="NY">NY</option>
					<option value="OH">OH</option>
					<option value="OK">OK</option>
					<option value="OR">OR</option>
					<option value="PA">PA</option>
					<option value="RI">RI</option>
					<option value="SC">SC</option>
					<option value="SD">SD</option>
					<option value="TN">TN</option>
					<option value="TX">TX</option>
					<option value="UT">UT</option>
					<option value="VA">VA</option>
					<option value="VT">VT</option>
					<option value="WA">WA</option>
					<option value="WI">WI</option>
					<option value="WV">WV</option>
					<option value="WY">WY</option>
				</select>
				<br />
				<label for="zip">Zip:</label>
				<input type="text" id="zip" name="zip" value="" maxlength="255"/>
				<br />
				<label for="telephone">Telephone:</label>
				<input type="text" id="telephone" name="telephone" value="" maxlength="255"/>
				<br />
				<label for="email">Email:</label>
				<input type="text" id="email" name="email" value="" maxlength="255"/>
								
				<div class="form-actions">
					<input type="reset" value="Reset" name="reset" id="reset" />
					<input type="submit" value="Save to Database" name="saveToDatabase" id="saveToDatabase" />
					<input type="submit" value="Save to File" name="saveToFile" id="saveToFile" />
					<br />								
					<a href="viewcontactsfromdatabase.php">View contacts in database</a>							
					<br />
					<a href="viewcontactsfromfile.php">View contacts in file</a>	
				</div>	
			</form>	</div>
		</div>			<div id="footer">			            <p></p>			        </div>				</div>		
	</body>
</html>