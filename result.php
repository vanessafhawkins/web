<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact | Hawkins</title>
	<link rel="stylesheet" type="text/css" href="css/gridstyle.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="site">
	<header class="head">
		<!-- navigation bar elements -->
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
			</ul>
		</nav>
	
		<!-- div to create large image header under the navigation bar -->
		<div class="head" id="banner" title="Lake Tahoe background image">
			<div class="box">
				<h2 class="btext">
					<?php 
					// declaring variables
						$firstName = $_POST['firstName']; 
						$lastName = $_POST['lastName']; 
						$email = $_POST['email'];
						$message = $_POST['message'];

					// Filter Sanitations for the form inputs
						$newfname = filter_var($firstName, FILTER_SANITIZE_STRING);
						$newlname = filter_var($lastName, FILTER_SANITIZE_STRING);
						$newemail = filter_var($email, FILTER_SANITIZE_EMAIL);
						$newmessage = filter_var($message, FILTER_SANITIZE_STRING);
					
					// declaring varibles to be used in the mail function
						$to = 'vanessafhawkins@gmail.com';
						$subj = 'NOT SPAM - Resume Site - New Contact Request';
						$msg = "REMEMBER: DO NOT OPEN ANY LINKS IN THESE EMAILS.\r\n\r\nHere is the message:\r\n".$newfname." ".$newlname."\r\n".$newemail."\r\n'".$newmessage."'\r\n End of message\r\nREMEMBER: DO NOT OPEN ANY LINKS IN THESE EMAILS.";
						$headers = "From: notify@vanessafalenehawkins.cikeys.com" . "\r\n" . "CC: vanessa.hawkins180@csuci.edu";
						// vanessa.hawkins180@csuci.edu
						// daniel.martinez@csuci.edu

					// mail function sends form inputs to my email
						mail($to,$subj,$msg,$headers);
						
					// displayes a response after form has been submitted with the sanitized varibles
						echo nl2br('Thank you: '.$newfname.' '.$newlname."!\n");
						echo nl2br('Your message: "'.$newmessage.'" was submitted.'."\n");
						echo nl2br('You will be contacted at: '.$newemail.".\n");
					?>
				</h2>
			</div>
		</div>
	</header>

	<footer class="footer">
			<p>Vanessa Hawkins</p>
			<p>Phone: (760) 419 - 3185</p>
            <p><a href="mailto:vanessafhawkins@gmail.com">vanessafhawkins@gmail.com</a></p>
    </footer>
</body>
</html>
